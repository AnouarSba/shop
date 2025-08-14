<?php
/**
 * WelcomeController.php
 *
 *
 * @created    2022-08-12 20:17:04
 * @modified   2022-08-12 20:17:04
 */

namespace Beike\Installer\Controllers;

use Illuminate\Support\Facades\Redirect;

class WelcomeController extends BaseController
{
    private $languages = [
        'fr'    => 'French',
        'en'    => 'English',
    ];

    public function index()
    {
        $this->checkInstalled();
        $data['languages'] = $this->languages;
        $data['locale']    = $_COOKIE['locale'] ?? 'fr';
        $data['steps']     = 1;

        return view('installer::welcome', $data);
    }

    public function locale($lang)
    {
        setcookie('locale', $lang, 0, '/');

        return Redirect::back();
    }
}
