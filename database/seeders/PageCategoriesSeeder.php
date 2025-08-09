<?php
/**
 * PageCategoriesSeeder.php
 *
 *
 * @created    2023-06-14 18:51:18
 * @modified   2023-06-14 18:51:18
 */

namespace Database\Seeders;

use Beike\Models\PageCategory;
use Beike\Models\PageCategoryDescription;
use Illuminate\Database\Seeder;

class PageCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = $this->getPageCategories();

        if ($items) {
            PageCategory::query()->truncate();
            foreach ($items as $item) {
                PageCategory::query()->create($item);
            }
        }

        $items = $this->getPageCategoryDescriptions();
        if ($items) {
            PageCategoryDescription::query()->truncate();
            foreach ($items as $item) {
                PageCategoryDescription::query()->create($item);
            }
        }
    }


    public function getPageCategories()
    {
        return [
            [
                "id" => 1,
                "parent_id" => 0,
                "position" => 0,
                "active" => 1,
            ],
            [
                "id" => 2,
                "parent_id" => 0,
                "position" => 0,
                "active" => 1,
            ],
            [
                "id" => 3,
                "parent_id" => 0,
                "position" => 0,
                "active" => 1,
            ],
            [
                "id" => 4,
                "parent_id" => 0,
                "position" => 0,
                "active" => 1,
            ],
            [
                "id" => 5,
                "parent_id" => 0,
                "position" => 0,
                "active" => 1
            ],
            [
                "id" => 6,
                "parent_id" => 0,
                "position" => 0,
                "active" => 1
            ]
        ];
    }

    public function getPageCategoryDescriptions()
    {
        return [
                [
                    "id" =>1,
                    "page_category_id" =>1,
                    "locale" =>"fr",
                    "title" =>"Nouvelles",
                    "summary" =>"",
                    "meta_title" =>"",
                    "meta_description" =>"",
                    "meta_keywords" =>"",
                ],
                [
                    "id" =>2,
                    "page_category_id" =>1,
                    "locale" =>"en",
                    "title" =>"News",
                    "summary" =>"",
                    "meta_title" =>"",
                    "meta_description" =>"",
                    "meta_keywords" =>"",
                ],
                [
                    "id" =>3,
                    "page_category_id" =>2,
                    "locale" =>"fr",
                    "title" =>"Actualités de l'industrie",
                    "summary" =>"",
                    "meta_title" =>"",
                    "meta_description" =>"",
                    "meta_keywords" =>"",
                ],
                [
                    "id" =>4,
                    "page_category_id" =>2,
                    "locale" =>"en",
                    "title" =>"Industry News",
                    "summary" =>"",
                    "meta_title" =>"",
                    "meta_description" =>"",
                    "meta_keywords" =>"",
                ],
                [
                    "id" =>5,
                    "page_category_id" =>3,
                    "locale" =>"fr",
                    "title" =>"Concentrez-vous sur les points chauds",
                    "summary" =>"",
                    "meta_title" =>"",
                    "meta_description" =>"",
                    "meta_keywords" =>"",
                ],
                [
                    "id" =>6,
                    "page_category_id" =>3,
                    "locale" =>"en",
                    "title" =>"Focus on hot spots",
                    "summary" =>"",
                    "meta_title" =>"",
                    "meta_description" =>"",
                    "meta_keywords" =>"",
                ],
                [
                    "id" =>7,
                    "page_category_id" =>4,
                    "locale" =>"fr",
                    "title" =>"Tendance de la mode",
                    "summary" =>"",
                    "meta_title" =>"",
                    "meta_description" =>"",
                    "meta_keywords" =>"",
                ],
                [
                    "id" =>8,
                    "page_category_id" =>4,
                    "locale" =>"en",
                    "title" =>"Fashion",
                    "summary" =>"",
                    "meta_title" =>"",
                    "meta_description" =>"",
                    "meta_keywords" =>"",
                ],
                [
                    "id" =>9,
                    "page_category_id" =>5,
                    "locale" =>"fr",
                    "title" =>"Conception supérieure",
                    "summary" =>"",
                    "meta_title" =>"",
                    "meta_description" =>"",
                    "meta_keywords" =>"",
                ],
                [
                    "id" =>10,
                    "page_category_id" =>5,
                    "locale" =>"en",
                    "title" =>"Top design",
                    "summary" =>"",
                    "meta_title" =>"",
                    "meta_description" =>"",
                    "meta_keywords" =>"",
                ],
                [
                    "id" =>11,
                    "page_category_id" =>6,
                    "locale" =>"fr",
                    "title" =>"Grande vente de produits de haut niveau",
                    "summary" =>"",
                    "meta_title" =>"",
                    "meta_description" =>"",
                    "meta_keywords" =>"",
                ],
                [
                    "id" =>12,
                    "page_category_id" =>6,
                    "locale" =>"en",
                    "title" =>"Good Deals",
                    "summary" =>"",
                    "meta_title" =>"",
                    "meta_description" =>"",
                    "meta_keywords" =>"",
                ]
        ];
    }
}