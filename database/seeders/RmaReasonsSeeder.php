<?php
/**
 * RmaReasonsSeeder.php
 *  php artisan db:seed --class=AttributesSeeder
 *
 * @copyright  2023 beikeshop.com - All Rights Reserved
 * @link       https://beikeshop.com
 * @author     TL <mengwb@guangda.work>
 * @created    2023-12-13 19:20:05
 * @modified   2023-12-13 19:20:05
 */

namespace Database\Seeders;

use Beike\Models\RmaReason;
use Illuminate\Database\Seeder;

class RmaReasonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RmaReason::query()->truncate();
        $items = $this->getRmaReasons();
        RmaReason::query()->insert(
            collect($items)->map(function ($item) {
                $item['created_at'] = now();
                $item['updated_at'] = now();
                return $item;
            })->toArray()
        );
    }


    private function getRmaReasons(): array
    {
        return [
            ["name" => '{"en": "Dead On Arrival", "fr": "未收到货"}'],
            ["name" => '{"en": "Received Wrong Item", "fr": "发错商品"}'],
            ["name" => '{"en": "Order Error", "fr": "错误下单"}'],
            ["name" => '{"en": "Faulty, please supply remark", "fr": "商品损坏，请添加备注"}'],
            ["name" => '{"en": "Other, please supply remark", "fr": "其他，请添加备注"}'],
        ];
    }
}
