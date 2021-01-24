<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Butschster\Head\Facades\Meta;
class SiteController extends Controller
{
   
    public function main()
    {
        
        Meta::prependTitle('Bosh Sahifa');
        Meta::setDescription('Awesome page');
        Meta::setKeywords(['Awesome keyword', 'keyword2']);
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
        $service=\App\Models\Service::whereSlug($slug)->first();
        if(!$service){
            abort(404);
        }
        Meta::prependTitle($service['name_'.\App::getLocale()]);
        Meta::setDescription($service->seo_desc);
        Meta::setKeywords($service->seo_keyword);
        return view('viewService', compact('service'));
    }
}
