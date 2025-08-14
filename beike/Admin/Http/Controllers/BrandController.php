<?php
/**
 * BrandController.php
 *
 *
 * @created    2022-07-27 21:17:04
 * @modified   2022-07-27 21:17:04
 */

namespace Beike\Admin\Http\Controllers;

use Beike\Models\Brand;
use Beike\Repositories\BrandRepo;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use DB;
class BrandController extends Controller
{
    /**
     * 显示品牌列表
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        $brands = BrandRepo::list($request->only('name', 'first', 'status'));
        $data   = [
            'brands' => $brands,
        ];
        $data = hook_filter('admin.brand.index.data', $data);
        if ($request->expectsJson()) {
            return json_success(trans('common.success'), $data);
        }

        return view('admin::pages.brands.index', $data);
    }

    /**
     * 创建品牌
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $requestData = $request->all();
        $data        = [
            'request_data' => $requestData,
        ];

        hook_action('admin.brand.store.before', $data);
        $brand = BrandRepo::create($requestData);
        hook_action('admin.brand.store.after', ['brand' => $brand, 'request_data' => $requestData]);
        $setting = DB::table('settings')
        ->where('name', 'design_setting')
        ->where('type', 'system')
        ->where('space', 'base')
        ->first();

    if (!$setting) {
        $this->error('design_setting not found.');
        return [];
    }

    $value = json_decode($setting->value, true);

    // 2. Find the brand module
    foreach ($value['modules'] as &$module) {
        if ($module['code'] === 'brand') {
            // 3. Update brands with latest 12 brand IDs
            $module['content']['brands'] = Brand::latest()->take(12)->pluck('id')->toArray();
            break;
        }
    }

    // 4. Save back the updated value
    DB::table('settings')->where('id', $setting->id)->update([
        'value' => json_encode($value, JSON_UNESCAPED_UNICODE)
    ]);

    info('Brand module updated successfully.');
        return json_success(trans('common.created_success'), $brand);
    }

    /**
     * @param Request $request
     * @param Brand   $brand
     * @return JsonResponse
     * @throws Exception
     */
    public function update(Request $request, Brand $brand): JsonResponse
    {
        $requestData = $request->all();
        $data        = [
            'brand_id'     => $brand,
            'request_data' => $requestData,
        ];
        hook_action('admin.brand.update.before', $data);
        $brand = BrandRepo::update($brand, $requestData);
        hook_action('admin.brand.update.after', ['brand' => $brand, 'request_data' => $requestData]);

        return json_success(trans('common.updated_success'), $brand);
    }

    /**
     * @param Request $request
     * @param Brand   $brand
     * @return JsonResponse
     */
    public function destroy(Request $request, Brand $brand): JsonResponse
    {
        hook_action('admin.brand.destroy.before', $brand);
        BrandRepo::delete($brand);
        hook_action('admin.brand.destroy.after', $brand);

        return json_success(trans('common.deleted_success'));
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function autocomplete(Request $request): JsonResponse
    {
        $brands = BrandRepo::autocomplete($request->get('name') ?? '', 0);

        return json_success(trans('common.get_success'), $brands);
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function name(int $id): JsonResponse
    {
        $name = BrandRepo::getName($id);

        return json_success(trans('common.get_success'), $name);
    }

    /**
     * 根据商品ID批量获取商品名称
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function getNames(Request $request): JsonResponse
    {
        $ids  = explode(',', $request->get('ids'));
        $name = BrandRepo::getNames($ids);

        return json_success(trans('common.get_success'), $name);
    }
}
