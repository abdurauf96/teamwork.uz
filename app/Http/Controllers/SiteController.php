<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Butschster\Head\Facades\Meta;
class SiteController extends Controller
{
   
    public function main()
    {
        
        Meta::prependTitle('Teamwork');
        Meta::setDescription(setting('home_seo_desc'));
        Meta::setKeywords(setting('home_seo_keyword'));

        $proccesses=\App\Models\Proccess::orderBy('order')->get();
        $blokprocces=\App\Models\BlokProcce::first();
        $features=\App\Models\Feature::all();
        $reviews=\App\Models\Review::where('main', 1)->get();
        $blokreview=\App\Models\BlokReview::first();
        
        $blokfeature=\App\Models\BlokFeature::first();
        $topblok=\App\Models\TopBlock::first();
        
        
        
        return view('welcome', compact('proccesses', 'features', 'reviews', 'blokfeature', 'blokprocces', 'blokreview', 'topblok'));
    }

    public function about()
    {
        $blokabout=\App\Models\BlokAbout::first();
        Meta::prependTitle($blokabout['title_'.\App::getLocale()]);
        Meta::setDescription($blokabout->seo_desc);
        Meta::setKeywords($blokabout->seo_keyword);
        return view('about');
    }

    public function portfolio()
    {
        $blokportfolio=\App\Models\BlokPortfolio::first();
        $projects=\App\Models\Project::all();
        Meta::prependTitle($blokportfolio['title_'.\App::getLocale()]);
        Meta::setDescription($blokportfolio->seo_desc);
        Meta::setKeywords($blokportfolio->seo_keyword);
        $categories=\App\Models\PortfolioCategory::all();
        
        return view('portfolio', compact('projects', 'categories', 'blokportfolio'));
    }

    public function viewPortfolio($slug)
    {
        $project=\App\Models\Project::whereSlug($slug)->first();
        Meta::prependTitle($project['title_'.\App::getLocale()]);
        Meta::setDescription($project->seo_desc);
        Meta::setKeywords($project->seo_keyword);

        $other_projects=\App\Models\Project::where('portfolio_category_id', $project->id)
        ->where('id', '!=', $project->id)
        ->get();
        return view('viewPortfolio', compact('project', 'other_projects'));
    }

    public function reviews()
    {
        $reviews=\App\Models\Review::all();
        $blokreview=\App\Models\BlokReview::first();
        Meta::prependTitle($blokreview['title_'.\App::getLocale()]);
        Meta::setDescription($blokreview->seo_desc);
        Meta::setKeywords($blokreview->seo_keyword);
        return view('reviews', compact('reviews', 'blokreview'));
    }

    public function contact()
    {
        $link=\App\Models\Link::first();
        return view('contact', compact('link'));
    }

    public function services()
    {
        $services=\App\Models\Service::all();
        $blokservice=\App\Models\BlokService::first();

        Meta::prependTitle($blokservice['title_'.\App::getLocale()]);
        Meta::setDescription($blokservice->seo_desc);
        Meta::setKeywords($blokservice->seo_keyword);

        return view('services', compact('services', 'blokservice'));
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
       
        $other_projects=\App\Models\ServiceProject::where('service_id', $service->id)->get();
        return view('viewService', compact('service', 'other_projects'));
    }

    public function viewFeature($slug)
    {
        $feature=\App\Models\Feature::whereSlug($slug)->first();
        $blokfeature=\App\Models\BlokFeature::first();
        Meta::prependTitle($feature['title_'.\App::getLocale()]);
        Meta::setDescription($blokfeature->seo_desc);
        Meta::setKeywords($blokfeature->seo_keyword);
        return view('viewFeature', compact('feature', 'blokfeature'));
    }
}
