<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigateController extends Controller
{
    public function home(Request $request)
    {
        $title = 'Home';
        return view('pages.home', ["title"=>$title]);
    }

    public function about(Request $request)
    {
        $title = 'about';
        return view('pages.about', ["title"=>$title]);
    }

    public function contact(Request $request)
    {
        $title = 'contact';
        return view('pages.contact', ["title"=>$title]);
    }

    public function settings(Request $request)
    {
        $title = "settings";
        return view('pages.settings', ["title"=>$title]);
    }

}
