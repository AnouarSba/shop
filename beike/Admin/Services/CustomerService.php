<?php
/**
 * CustomerService.php
 *
 *
 * @created    2022-07-01 11:15:25
 * @modified   2022-07-01 11:15:25
 */

namespace Beike\Admin\Services;

use Beike\Repositories\CustomerRepo;

class CustomerService
{
    public static function create($data)
    {
        $data['locale'] = system_setting('base.locale');
        $data['from']   = 'admin';
        $customer       = CustomerRepo::create($data);

        return $customer;
    }
}
