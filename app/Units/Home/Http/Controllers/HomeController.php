<?php
namespace App\Units\Home\Http\Controllers;

use Car7axo\Laravel\Support\Unit\Http\Controllers\Controller;

/**
 * Class HomeController
 * @package App\Units\Home\Http\Controllers
 */
class HomeController extends Controller
{
    public function welcome()
    {
        return view('home::welcome');
    }
}
