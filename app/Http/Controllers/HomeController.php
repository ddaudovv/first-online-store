<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = 'Home Page - Online Shop';
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        /*$data1 = "About-us - Online Shop";
        $data2 = "About us";
        $description = "This is an about page..";
        $author = "Developer by: Your name";
        return view('home.about')->with("title", $data1)
            ->with("subtitle", $data2)
            ->with("description", $description)
            ->with("author", $author);*/

        $viewData = [];
        $viewData["title"] = "About us - Online Store";
        $viewData["subtitle"] = "About us";
        $viewData["description"] = "This is an about page ...";
        $viewData["author"] = "Developed by: Your Name";
        return view('home.about')->with("viewData", $viewData);
    }
}
