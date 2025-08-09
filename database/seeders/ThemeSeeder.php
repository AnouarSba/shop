<?php
/**
 * ThemeSeeder.php
 *
 *
 * @created    2023-03-16 14:26:53
 * @modified   2023-03-16 14:26:53
 */

namespace Database\Seeders;

use Beike\Repositories\SettingRepo;
use Illuminate\Database\Seeder;

class ThemeSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        $menuSetting = $this->getMenuSetting();
        SettingRepo::update('system', 'base', ['menu_setting' => $menuSetting]);

        $homeSetting = $this->getHomeSetting();
        SettingRepo::update('system', 'base', ['design_setting' => $homeSetting]);

        $footerSetting = $this->getFooterSetting();
        SettingRepo::update('system', 'base', ['footer_setting' => $footerSetting]);
    }

    /**
     * 设置头部菜单数据
     *
     * @return array
     * @throws \Exception
     */
    private function getMenuSetting(): array
    {
        return [
            "menus" => [
                [
                    "isFull" => false,
                    "badge" => [
                        "isShow" => false,
                        "name" => [
                            "en" => "",
                            "fr" => ""
                        ],
                        "bg_color" => "#fd560f",
                        "text_color" => "#ffffff"
                    ],
                    "link" => [
                        "type" => "category",
                        "value" => 100006,
                        "text" => [],
                        "link" => ""
                    ],
                    "name" => [
                        "en" => "Sports",
                        "fr" => "运动潮吧"
                    ],
                    "isChildren" => false,
                    "childrenGroup" => [
                        [
                            "name" => [
                                "en" => "leading the fashion",
                                "fr" => "引领时尚"
                            ],
                            "type" => "",
                            "image" => [
                                "image" => [],
                                "link" => [
                                    "type" => "product",
                                    "value" => "",
                                    "text" => []
                                ]
                            ],
                            "children" => [
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "brand",
                                        "value" => 3,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "category",
                                        "value" => 100008,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "brand",
                                        "value" => 5,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "category",
                                        "value" => 100003,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "category",
                                        "value" => 100010,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "category",
                                        "value" => 100010,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ]
                            ]
                        ],
                        [
                            "name" => [
                                "en" => "Special offer",
                                "fr" => "特价优惠"
                            ],
                            "type" => "link",
                            "image" => [
                                "image" => [],
                                "link" => [
                                    "type" => "product",
                                    "value" => "",
                                    "text" => []
                                ]
                            ],
                            "children" => [
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "category",
                                        "value" => 100008,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "brand",
                                        "value" => 6,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "category",
                                        "value" => 100003,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "brand",
                                        "value" => 7,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "brand",
                                        "value" => 8,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "brand",
                                        "value" => 2,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ]
                            ]
                        ],
                        [
                            "name" => [
                                "en" => "Popular products",
                                "fr" => "爆款商品"
                            ],
                            "type" => "image",
                            "image" => [
                                "image" => [
                                    "en" => "catalog/demo/banner/2_en.jpg",
                                    "fr" => "catalog/demo/banner/2.jpg"
                                ],
                                "link" => [
                                    "type" => "product",
                                    "value" => 1,
                                    "text" => [],
                                    "link" => ""
                                ]
                            ],
                            "children" => []
                        ]
                    ]
                ],
                [
                    "isFull" => false,
                    "badge" => [
                        "isShow" => false,
                        "name" => [
                            "en" => "NEW",
                            "fr" => "新品"
                        ],
                        "bg_color" => "#7628A2",
                        "text_color" => "#ffffff"
                    ],
                    "link" => [
                        "type" => "category",
                        "value" => 100003,
                        "text" => [],
                        "link" => ""
                    ],
                    "name" => [
                        "en" => "Fashion",
                        "fr" => "时尚潮流"
                    ],
                    "isChildren" => false,
                    "childrenGroup" => [
                        [
                            "name" => [
                                "en" => "global purchase",
                                "fr" => "全球购"
                            ],
                            "type" => "link",
                            "image" => [
                                "image" => [],
                                "link" => [
                                    "type" => "product",
                                    "value" => "",
                                    "text" => []
                                ]
                            ],
                            "children" => [
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "brand",
                                        "value" => 8,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => "",
                                        "new_window" => true
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "category",
                                        "value" => 100003,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "brand",
                                        "value" => 7,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "page",
                                        "value" => 21,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ]
                            ]
                        ],
                        [
                            "name" => [
                                "en" => "Fashion",
                                "fr" => "时尚"
                            ],
                            "type" => "image",
                            "image" => [
                                "image" => [
                                    "en" => "catalog/demo/product/16.jpg",
                                    "fr" => "catalog/demo/product/16.jpg"
                                ],
                                "link" => [
                                    "type" => "product",
                                    "value" => 4,
                                    "text" => [],
                                    "link" => ""
                                ]
                            ],
                            "children" => [
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "custom",
                                        "value" => "https://www.baidu.com",
                                        "text" => [
                                            "en" => "",
                                            "fr" => "baidu "
                                        ],
                                        "link" => "",
                                        "new_window" => true
                                    ]
                                ]
                            ]
                        ],
                        [
                            "name" => [
                                "en" => "recommended",
                                "fr" => "店长推荐"
                            ],
                            "type" => "image",
                            "image" => [
                                "image" => [
                                    "en" => "catalog/demo/product/13.jpg",
                                    "fr" => "catalog/demo/product/13.jpg"
                                ],
                                "link" => [
                                    "type" => "product",
                                    "value" => 2,
                                    "text" => [],
                                    "link" => ""
                                ]
                            ],
                            "children" => []
                        ]
                    ]
                ],
                [
                    "isFull" => false,
                    "badge" => [
                        "isShow" => false,
                        "name" => [
                            "en" => "",
                            "fr" => ""
                        ],
                        "bg_color" => "#fd560f",
                        "text_color" => "#ffffff"
                    ],
                    "link" => [
                        "type" => "category",
                        "value" => 100007,
                        "text" => [],
                        "link" => ""
                    ],
                    "name" => [
                        "en" => "Digital",
                        "fr" => "数码产品"
                    ],
                    "isChildren" => false,
                    "childrenGroup" => [
                        [
                            "name" => [
                                "en" => "Big promotion",
                                "fr" => "大牌促销"
                            ],
                            "type" => "",
                            "image" => [
                                "image" => [],
                                "link" => [
                                    "type" => "product",
                                    "value" => "",
                                    "text" => []
                                ]
                            ],
                            "children" => [
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "brand",
                                        "value" => 2,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "brand",
                                        "value" => 8,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "brand",
                                        "value" => 9,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "brand",
                                        "value" => 1,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "brand",
                                        "value" => 6,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ]
                            ]
                        ],
                        [
                            "name" => [
                                "en" => "Activity of gift",
                                "fr" => "活动礼品"
                            ],
                            "type" => "",
                            "image" => [
                                "image" => [],
                                "link" => [
                                    "type" => "product",
                                    "value" => "",
                                    "text" => []
                                ]
                            ],
                            "children" => [
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "category",
                                        "value" => 100003,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "category",
                                        "value" => 100006,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "category",
                                        "value" => 100012,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "category",
                                        "value" => 100006,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "category",
                                        "value" => 100010,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ]
                            ]
                        ],
                        [
                            "name" => [
                                "en" => "All three fold",
                                "fr" => "全场三折"
                            ],
                            "type" => "",
                            "image" => [
                                "image" => [],
                                "link" => [
                                    "type" => "product",
                                    "value" => "",
                                    "text" => []
                                ]
                            ],
                            "children" => [
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "brand",
                                        "value" => 1,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "brand",
                                        "value" => 3,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "brand",
                                        "value" => 7,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "brand",
                                        "value" => 8,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ],
                                [
                                    "name" => [],
                                    "link" => [
                                        "type" => "brand",
                                        "value" => 9,
                                        "text" => [
                                            "en" => "",
                                            "fr" => ""
                                        ],
                                        "link" => ""
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    "isFull" => false,
                    "badge" => [
                        "isShow" => false,
                        "name" => [
                            "en" => "Hot",
                            "fr" => "热卖"
                        ],
                        "bg_color" => "#FF4D00",
                        "text_color" => "#ffffff"
                    ],
                    "link" => [
                        "type" => "category",
                        "value" => 100018,
                        "text" => [],
                        "link" => ""
                    ],
                    "name" => [
                        "en" => "Hot",
                        "fr" => "热卖特惠"
                    ],
                    "isChildren" => false,
                    "childrenGroup" => []
                ],
                [
                    "isFull" => false,
                    "badge" => [
                        "isShow" => false,
                        "name" => [
                            "en" => "Sales",
                            "fr" => "大牌直销"
                        ],
                        "bg_color" => "#00C5C5",
                        "text_color" => "#ffffff"
                    ],
                    "link" => [
                        "type" => "static",
                        "value" => "brands.index",
                        "text" => [],
                        "link" => ""
                    ],
                    "name" => [
                        "en" => "Brand",
                        "fr" => "国际潮牌"
                    ],
                    "isChildren" => false,
                    "childrenGroup" => []
                ],
                [
                    "isFull" => false,
                    "badge" => [
                        "isShow" => false,
                        "name" => [
                            "en" => "",
                            "fr" => ""
                        ],
                        "bg_color" => "",
                        "text_color" => ""
                    ],
                    "link" => [
                        "type" => "page_category",
                        "value" => "1",
                        "text" => [],
                        "link" => ""
                    ],
                    "name" => [
                        "en" => "News",
                        "fr" => "公司新闻"
                    ],
                    "isChildren" => false,
                    "childrenGroup" => []
                ]
            ]
        ];
    }

    /**
     * 设置首页装修数据
     *
     * @return mixed
     * @throws \Exception
     */
    private function getHomeSetting(): array
    {
        return [
            "modules" =>[
                [
                    "content" => [
                        "style" => [
                            "background_color" =>""
                        ],
                        "full" =>true,
                        "floor" => [
                            "2" =>"",
                            "3" =>""
                        ],
                        "images" =>[
                            [
                                "image" => [
                                    "en" =>"catalog/demo/banner/banner-4-en.jpg",
                                    "fr" =>"catalog/demo/banner/banner-4.jpg"
                                ],
                                "show" =>true,
                                "link" => [
                                    "type" =>"category",
                                    "value" =>100012,
                                    "link" =>""
                                ]
                            ],
                            [
                                "image" => [
                                    "en" =>"catalog/demo/banner/banner-3-en.jpg",
                                    "fr" =>"catalog/demo/banner/banner-3.jpg"
                                ],
                                "show" =>false,
                                "link" => [
                                    "type" =>"category",
                                    "value" =>100008,
                                    "link" =>""
                                ]
                            ]
                        ]
                    ],
                    "code" =>"slideshow",
                    "name" =>"幻灯片",
                    "module_id" =>"b0448efb0989"
                ],
                [
                    "code" =>"image402",
                    "content" => [
                        "style" => [
                            "background_color" =>""
                        ],
                        "floor" => [
                            "fr" =>"",
                            "en" =>""
                        ],
                        "title" => [
                            "fr" =>"时尚穿搭推荐",
                            "en" =>"Minimalist style outfit"
                        ],
                        "sub_title" => [
                            "fr" =>"极简风的穿搭，越简单就越高级，这一套着装打扮整体是比较休闲舒适的",
                            "en" =>"Minimalist style, the simpler, the more advanced, this outfit is casual and comfortable"
                        ],
                        "images" =>[
                            [
                                "image" =>"catalog/demo/banner/banner-402-1.jpg",
                                "show" =>false,
                                "title" => [
                                    "fr" =>"女上装",
                                    "en" =>"women's tops"
                                ],
                                "link" => [
                                    "type" =>"product",
                                    "value" =>"",
                                    "link" =>""
                                ]
                            ],
                            [
                                "image" =>"catalog/demo/banner/banner-402-2.jpg",
                                "show" =>false,
                                "title" => [
                                    "fr" =>"眼镜",
                                    "en" =>"Glasses"
                                ],
                                "link" => [
                                    "type" =>"product",
                                    "value" =>"",
                                    "link" =>""
                                ]
                            ],
                            [
                                "image" =>"catalog/demo/banner/banner-402-3.jpg",
                                "show" =>false,
                                "title" => [
                                    "fr" =>"手表",
                                    "en" =>"watch"
                                ],
                                "link" => [
                                    "type" =>"product",
                                    "value" =>"",
                                    "link" =>""
                                ]
                            ],
                            [
                                "image" =>"catalog/demo/banner/banner-402-4.jpg",
                                "show" =>false,
                                "title" => [
                                    "fr" =>"护肤品",
                                    "en" =>"Skin care products"
                                ],
                                "link" => [
                                    "type" =>"product",
                                    "value" =>"",
                                    "link" =>""
                                ]
                            ]
                        ]
                    ],
                    "module_id" =>"00pS1Akotn8h58YZ",
                    "name" =>"一行四图-2",
                    "view_path" =>""
                ],
                [
                    "code" =>"tab_product",
                    "content" => [
                        "style" => [
                            "background_color" =>""
                        ],
                        "floor" => [
                            "fr" =>"",
                            "en" =>""
                        ],
                        "editableTabsValue" =>"0",
                        "tabs" =>[
                            [
                                "title" => [
                                    "fr" =>"时尚单品",
                                    "en" =>"Fashion sheet"
                                ],
                                "products" =>[
                                    5,
                                    9,
                                    10,
                                    11,
                                    12,
                                    13,
                                    14,
                                    15
                                ]
                            ],
                            [
                                "title" => [
                                    "fr" =>"潮流穿搭",
                                    "en" =>"Trendy outfits"
                                ],
                                "products" =>[
                                    39,
                                    15,
                                    1,
                                    4,
                                    13,
                                    7,
                                    8,
                                    4
                                ]
                            ],
                            [
                                "title" => [
                                    "fr" =>"最新促销",
                                    "en" =>"Latest promotions"
                                ],
                                "products" =>[
                                    1,
                                    2,
                                    3,
                                    4,
                                    5,
                                    7,
                                    8,
                                    11
                                ]
                            ]
                        ],
                        "title" => [
                            "fr" =>"推荐商品",
                            "en" =>"Fashion items"
                        ]
                    ],
                    "module_id" =>"s6e7e3vucriazzbi",
                    "name" =>"选项卡商品"
                ],
                [
                    "code" =>"image100",
                    "content" => [
                        "style" => [
                            "background_color" =>""
                        ],
                        "floor" => [
                            "fr" =>"",
                            "en" =>""
                        ],
                        "full" =>true,
                        "images" =>[
                            [
                                "image" => [
                                    "fr" =>"catalog/demo/banner/banner-2.jpg",
                                    "en" =>"/catalog/demo/banner/banner-2.jpg"
                                ],
                                "show" =>true,
                                "link" => [
                                    "type" =>"category",
                                    "value" =>100003,
                                    "link" =>""
                                ]
                            ]
                        ]
                    ],
                    "module_id" =>"0htwy33z3xcituyx",
                    "name" =>"单图模块"
                ],
                [
                    "code" =>"brand",
                    "content" => [
                        "style" => [
                            "background_color" =>""
                        ],
                        "floor" => [
                            "en" =>"",
                            "fr" =>""
                        ],
                        "full" =>true,
                        "title" => [
                            "en" =>"Recommended Brand",
                            "fr" =>"推荐品牌"
                        ],
                        "brands" =>[
                            1,
                            2,
                            3,
                            4,
                            5,
                            6,
                            7,
                            8,
                            9,
                            10,
                            11,
                            12
                        ]
                    ],
                    "module_id" =>"yln7isoqlxovqz3k",
                    "name" =>"品牌模块"
                ],
                [
                    "code" =>"page",
                    "content" => [
                        "style" => [
                            "background_color" =>""
                        ],
                        "floor" => [
                            "fr" =>"",
                            "en" =>""
                        ],
                        "items" =>[
                            22,
                            23,
                            24,
                            25
                        ],
                        "title" => [
                            "fr" =>"新闻博客",
                            "en" =>"News Blog"
                        ]
                    ],
                    "module_id" =>"24P9p4bRwk1nbtXE",
                    "name" =>"文章模块",
                    "view_path" =>""
                ]
            ]
        ];
    }


    /**
     * 设置底部装修数据
     */
    private function getFooterSetting(): array
    {
        return [
            "services" => [
                "enable" => true,
                "items" => [
                    [
                        "image" => "catalog/demo/services-icon/4.png",
                        "title" => [
                            "en" => "Material world",
                            "fr" => "物行天下"
                        ],
                        "sub_title" => [
                            "en" => "Multi - warehouse fast delivery",
                            "fr" => "多仓直发 极速配送多仓直发 极速配送"
                        ],
                        "show" => false
                    ],
                    [
                        "image" => "catalog/demo/services-icon/3.png",
                        "title" => [
                            "en" => "Return all",
                            "fr" => "退换无忧"
                        ],
                        "sub_title" => [
                            "en" => "Rest assured shopping return worry",
                            "fr" => "放心购物 退还无忧放心购物 退还无忧"
                        ],
                        "show" => false
                    ],
                    [
                        "image" => "catalog/demo/services-icon/1.png",
                        "title" => [
                            "en" => "Delicate service",
                            "fr" => "精致服务"
                        ],
                        "sub_title" => [
                            "en" => "Exquisite service and after-sales guarantee",
                            "fr" => "精致服务 售后保障精致服务 售后保障"
                        ],
                        "show" => false
                    ],
                    [
                        "image" => "catalog/demo/services-icon/2.png",
                        "title" => [
                            "en" => "With reduced activity",
                            "fr" => "满减活动"
                        ],
                        "sub_title" => [
                            "en" => "If 500 yuan is exceeded, a reduction of 90 yuan will be given",
                            "fr" => "满500元立减90，新用户立减200"
                        ],
                        "show" => true
                    ]
                ]
            ],
            "content" => [
                "intro" => [
                    "logo" => "catalog/logo.png",
                    "text" => [
                        "en" => "<p>Chengdu Guangda Network Technology Co., Ltd. is a high-tech enterprise mainly engaged in Internet development. The company was established in August 2014.</p>",
                        "fr" => "<p style=\"line-height: 1.4;\"><strong>成都光大网络科技有限公司</strong></p>\n<p style=\"line-height: 1.4;\">是一家专业互联网开发的高科技企业，公司成立于2014年8月。</p>\n<p style=\"line-height: 1.4;\">公司以为客户创造价值为核心价值观，帮助中小企业利用互联网工具提升产品销售。</p>"
                    ],
                    "social_network" =>[
                        [
                            "image" =>"/catalog/demo/social/twitter.png",
                            "link" =>"/",
                            "show" =>false
                        ],
                        [
                            "image" =>"/catalog/demo/social/facebook.png",
                            "link" =>"/",
                            "show" =>false
                        ],
                        [
                            "image" =>"/catalog/demo/social/youtube.png",
                            "link" =>"/",
                            "show" =>false
                        ],
                        [
                            "image" =>"/catalog/demo/social/instagram.png",
                            "link" =>"/",
                            "show" =>false
                        ],
                        [
                            "image" =>"/catalog/demo/social/pinterest.png",
                            "link" =>"/",
                            "show" =>false
                        ]
                    ]
                ],
                "link1" => [
                    "title" => [
                        "en" => "About us",
                        "fr" => "关于我们"
                    ],
                    "links" => [
                        [
                            "link" => "",
                            "type" => "page",
                            "value" => 21,
                            "text" => [
                                "en" => "About us",
                                "fr" => "关于我们"
                            ]
                        ],
                        [
                            "type" => "page",
                            "value" => 18,
                            "text" => [],
                            "link" => ""
                        ],
                        [
                            "type" => "page",
                            "value" => 12,
                            "text" => [],
                            "link" => ""
                        ],
                        [
                            "type" => "static",
                            "value" => "account.order.index",
                            "text" => [
                                "en" => "",
                                "fr" => ""
                            ],
                            "link" => ""
                        ]
                    ]
                ],
                "link2" => [
                    "title" => [
                        "en" => "Account",
                        "fr" => "会员中心"
                    ],
                    "links" => [
                        [
                            "type" => "static",
                            "value" => "account.index",
                            "text" => [],
                            "link" => ""
                        ],
                        [
                            "type" => "static",
                            "value" => "account.order.index",
                            "text" => [],
                            "link" => ""
                        ],
                        [
                            "type" => "static",
                            "value" => "account.wishlist.index",
                            "text" => [],
                            "link" => ""
                        ],
                        [
                            "type" => "static",
                            "value" => "brands.index",
                            "text" => [
                                "en" => "",
                                "fr" => ""
                            ],
                            "link" => ""
                        ]
                    ]
                ],
                "link3" => [
                    "title" => [
                        "en" => "Other",
                        "fr" => "其他"
                    ],
                    "links" => [
                        [
                            "type" => "static",
                            "value" => "brands.index",
                            "text" => [],
                            "link" => ""
                        ],
                        [
                            "type" => "static",
                            "value" => "account.index",
                            "text" => [
                                "en" => "",
                                "fr" => ""
                            ],
                            "link" => ""
                        ],
                        [
                            "type" => "page",
                            "value" => 20,
                            "text" => [
                                "en" => "",
                                "fr" => ""
                            ],
                            "link" => ""
                        ],
                        [
                            "type" => "page",
                            "value" => 21,
                            "text" => [
                                "en" => "",
                                "fr" => ""
                            ],
                            "link" => ""
                        ]
                    ]
                ],
                "contact" => [
                    "telephone" => "028-xxxxxxxx",
                    "address" => [
                        "en" => "Your company address",
                        "fr" => "Adresse de votre entreprise"
                    ],
                    "email" => "support@example.com"
                ]
            ],
            "bottom" => [
                "copyright" => [
                    "en" => "<div>Chengdu Guangda Network Technology &copy; 2023</div>",
                    "fr" => "<div>Technologie du réseau Chengdu Everbright &copy; 2023</div>"
                ],
                "image" => "catalog/demo/banner/pay_icons.png"
            ]
        ];
    }
}
