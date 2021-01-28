<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\BlokFeature;
use Illuminate\Http\Request;

class BlokFeatureController extends Controller
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
            $blokfeature = BlokFeature::where('title_uz', 'LIKE', "%$keyword%")
                ->orWhere('desc_uz', 'LIKE', "%$keyword%")
                ->orWhere('title_ru', 'LIKE', "%$keyword%")
                ->orWhere('desc_ru', 'LIKE', "%$keyword%")
                ->orWhere('title_en', 'LIKE', "%$keyword%")
                ->orWhere('desc_en', 'LIKE', "%$keyword%")
                ->orWhere('seo_desc', 'LIKE', "%$keyword%")
                ->orWhere('seo_keyword', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $blokfeature = BlokFeature::latest()->paginate($perPage);
        }

        return view('admin.blok-feature.index', compact('blokfeature'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.blok-feature.create');
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
        
        BlokFeature::create($requestData);

        return redirect('admin/blok-feature')->with('flash_message', 'BlokFeature added!');
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
        $blokfeature = BlokFeature::findOrFail($id);

        return view('admin.blok-feature.show', compact('blokfeature'));
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
        $blokfeature = BlokFeature::findOrFail($id);

        return view('admin.blok-feature.edit', compact('blokfeature'));
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
        
        $blokfeature = BlokFeature::findOrFail($id);
        $blokfeature->update($requestData);

        return redirect('admin/blok-feature')->with('flash_message', 'BlokFeature updated!');
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
        BlokFeature::destroy($id);

        return redirect('admin/blok-feature')->with('flash_message', 'BlokFeature deleted!');
    }
}
