<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function main()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function viewPortfolio($slug)
    {
        return view('viewPortfolio');
    }

    public function reviews()
    {
        return view('reviews');
    }

    public function contact()
    {
        return view('contact');
    }

    public function services()
    {
        return view('services');
    }

    public function viewService($slug)
    {
        return view('viewService');
    }
}
