<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $portfoliocategories = PortfolioCategory::where('name_uz', 'LIKE', "%$keyword%")
                ->orWhere('name_ru', 'LIKE', "%$keyword%")
                ->orWhere('name_en', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $portfoliocategories = PortfolioCategory::latest()->paginate($perPage);
        }

        return view('admin.portfolio-categories.index', compact('portfoliocategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.portfolio-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        PortfolioCategory::create($requestData);

        return redirect('admin/portfolio-categories')->with('flash_message', 'PortfolioCategory added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $portfoliocategory = PortfolioCategory::findOrFail($id);

        return view('admin.portfolio-categories.show', compact('portfoliocategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $portfoliocategory = PortfolioCategory::findOrFail($id);

        return view('admin.portfolio-categories.edit', compact('portfoliocategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $portfoliocategory = PortfolioCategory::findOrFail($id);
        $portfoliocategory->update($requestData);

        return redirect('admin/portfolio-categories')->with('flash_message', 'PortfolioCategory updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        PortfolioCategory::destroy($id);

        return redirect('admin/portfolio-categories')->with('flash_message', 'PortfolioCategory deleted!');
    }
}
