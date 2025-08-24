<?php
/**
 * Beike Config
 *
 * 
 * @created    2022-06-06 09:09:09
 * @modified   2022-09-13 22:32:41
 */

return [
    'api_url'          => env('BEIKE_API', 'https://api.RacimeLine.com'),
    'official_website' => env('BEIKE_OFFICIAL_WEBSITE', 'https://RacimeLine.com'),
    'version'          => '1.5.6.9',
    'build'            => '20250508',

    'admin_name'      => env('ADMIN_NAME'),
    'force_url_https' => env('APP_FORCE_HTTPS', false),
];
