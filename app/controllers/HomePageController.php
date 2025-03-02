<?php
namespace App\Controllers;

use App\Models\User;
use App\Validations\Auth\LoginValidation;


class HomePageController
{

    /**
     * Show home page
     * @return void
     */
    public function showHomePage()
    {
        return view('home');
    }
    

}
