<?php

namespace Beike\Shop\Http\Controllers;

use Beike\Services\DesignService;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Beike\Models\Brand;
use Beike\Models\Product;
use Beike\Admin\Http\Resources\ProductSimple;
use Beike\Repositories\ProductRepo;

class HomeController extends Controller
{
    /**
     * 通过page builder 显示首页
     *
     * @return View
     * @throws \Exception
     */
    public function index(): View
    {
        $designSettings = system_setting('base.design_setting');
        $modules        = $designSettings['modules'] ?? [];

        $moduleItems = [];
        foreach ($modules as $module) {
            $code       = $module['code'];
            $moduleId   = $module['module_id'] ?? '';
            $content    = $module['content'];
            $viewPath   = $module['view_path'] ?? '';

            if ($viewPath) {
                $plugin = plugin(Str::before($viewPath, '::'));

                if ($plugin && $plugin->type == 'theme' && $plugin->code != system_setting('base.theme')) {
                    continue;
                }
            }

            if (empty($viewPath)) {
                $viewPath = "design.{$code}";
            }

            $paths = explode('::', $viewPath);
            if (count($paths) == 2) {
                $pluginCode = $paths[0];
                if (! app('plugin')->checkActive($pluginCode)) {
                    continue;
                }
            }

            if (view()->exists($viewPath) && $moduleId) {
                $moduleItems[] = [
                    'code'      => $code,
                    'module_id' => $moduleId,
                    'view_path' => $viewPath,
                    'content'   => DesignService::handleModuleContent($code, $content),
                ];
            }
        }

        $data = ['modules' => $moduleItems];

        $data = hook_filter('home.index.data', $data);
        
//         $categories = brand::with([
//     'products' => function($query) {
//         $query->take(2)
//               ->with('description', 'skus', 'masterSku', 'brand', 'relations');
//     }
// ])->get()->map(function ($brand) {
//     // Enrich products with detailed data from ProductRepo
//     $brand->products = $brand->products->map(function ($product) {
//         return ProductRepo::getProductDetail($product);
//     });

//     // Transform products into ProductSimple structure
//     $brand->products = $brand->products->map(function ($product) {
//         return new ProductSimple($product);
//     });

//     return $brand;
// });

// Get all categories with products
$categories = Brand::orderBy('sort_order')->where('status', 1)->get()->map(function ($category) {
    $products = Product::with('description')
        ->with('skus')
        ->where('brand_id', $category->id)
        ->orderBy('created_at', 'desc') // 👈 latest first
        ->limit(4)   // 👈 make sure we LIMIT
        ->get()
        ->map(function ($product) {
            $product->name_format = optional(
                $product->descriptions->where('locale', app()->getLocale())->first()
            )->name ?? '';
            $product->price_format = currency_format(optional($product->skus->first())->price ?? 0);
            return $product;
        });

    return [
        'category' => $category,
        'products' => $products,
    ];
});

$data['categories'] = $categories;


// Optionally: You can convert the collection to an array
// $categories = $categories->toArray();

// Return the final response
// dd($data);
        $data['categories'] = $categories;
        return view('home', $data);
    }
}
