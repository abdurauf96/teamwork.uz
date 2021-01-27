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
        $proccesses=\App\Models\Proccess::orderBy('order')->get();
        $features=\App\Models\Feature::all();
        
        return view('welcome', compact('proccesses', 'features'));
    }

    public function about()
    {
        return view('about');
    }

    public function portfolio()
    {
        $projects=\App\Models\Project::all();
        $categories=\App\Models\PortfolioCategory::all();
        return view('portfolio', compact('projects', 'categories'));
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
        return view('reviews');
    }

    public function contact()
    {
        return view('contact');
    }

    public function services()
    {
        $services=\App\Models\Service::all();
        return view('services', compact('services'));
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

    public function viewFeature($slug)
    {
        $feature=\App\Models\Feature::whereSlug($slug)->first();
        return view('viewFeature', compact('feature'));
    }
}
