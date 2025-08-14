<?php
/**
 * SettingsSeeder.php
 *
 * 
 * @created    2022-09-05 19:42:42
 * @modified   2022-09-05 19:42:42
 */

namespace Database\Seeders;

use Beike\Models\Brand;
use Beike\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = $this->getItems();

        if ($items) {
            Setting::query()->truncate();
            foreach ($items as $item) {
                Setting::query()->create($item);
            }
        }
    }


    public function getItems()
    {
        return [
            ["type" => "system", "space" => "base", "name" => "country_id", "value" => "44", "json" => 0],
            ["type" => "system", "space" => "base", "name" => "locale", "value" => "en", "json" => 0],
            ["type" => "system", "space" => "base", "name" => "theme", "value" => "default", "json" => 0],
            ["type" => "plugin", "space" => "service_charge", "name" => "status", "value" => "1", "json" => 0],
            ["type" => "system", "space" => "base", "name" => "status", "value" => "", "json" => 0],
            ["type" => "system", "space" => "base", "name" => "admin_name", "value" => "admin", "json" => 0],
            ["type" => "system", "space" => "base", "name" => "tax", "value" => "1", "json" => 0],
            ["type" => "system", "space" => "base", "name" => "tax_address", "value" => "payment", "json" => 0],
            ["type" => "system", "space" => "base", "name" => "currency", "value" => "USD", "json" => 0],
            ["type" => "system", "space" => "base", "name" => "zone_id", "value" => "710", "json" => 0],
            ["type" => "plugin", "space" => "header_menu", "name" => "status", "value" => "1", "json" => 0],
            ["type" => "plugin", "space" => "flat_shipping", "name" => "type", "value" => "percent", "json" => 0],
            ["type" => "plugin", "space" => "flat_shipping", "name" => "value", "value" => "10", "json" => 0],
            ["type" => "system", "space" => "base", "name" => "default_customer_group_id", "value" => "1", "json" => 0],
            ["type" => "plugin", "space" => "stripe", "name" => "status", "value" => "1", "json" => 0],
            ["type" => "plugin", "space" => "latest_products", "name" => "status", "value" => "1", "json" => 0],
            ["type" => "plugin", "space" => "flat_shipping", "name" => "status", "value" => "1", "json" => 0],
            ["type" => "plugin", "space" => "paypal", "name" => "status", "value" => "1", "json" => 0],
            ["type" => "system", "space" => "base", "name" => "rate_api_key", "value" => "", "json" => 0],
        ];
    }
}
