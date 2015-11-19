<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    /*Display Home Page*/

    public function home(){
        return view ('Pages.homePage');
    }


    /*Display About Page*/

    public function about(){
        return view ('Pages.aboutPage');
    }

    public function gallery(){
        return view ('Pages.gallery');
    }
}
