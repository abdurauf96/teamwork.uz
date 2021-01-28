<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\BlokAbout;
use Illuminate\Http\Request;

class BlokAboutController extends Controller
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
            $blokabout = BlokAbout::where('title_uz', 'LIKE', "%$keyword%")
                ->orWhere('desc_uz', 'LIKE', "%$keyword%")
                ->orWhere('title_ru', 'LIKE', "%$keyword%")
                ->orWhere('desc_ru', 'LIKE', "%$keyword%")
                ->orWhere('title_en', 'LIKE', "%$keyword%")
                ->orWhere('desc_en', 'LIKE', "%$keyword%")
                ->orWhere('result1_uz', 'LIKE', "%$keyword%")
                ->orWhere('result1_ru', 'LIKE', "%$keyword%")
                ->orWhere('result1_en', 'LIKE', "%$keyword%")
                ->orWhere('result2_uz', 'LIKE', "%$keyword%")
                ->orWhere('result2_ru', 'LIKE', "%$keyword%")
                ->orWhere('result2_en', 'LIKE', "%$keyword%")
                ->orWhere('value1', 'LIKE', "%$keyword%")
                ->orWhere('value2', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $blokabout = BlokAbout::latest()->paginate($perPage);
        }

        return view('admin.blok-about.index', compact('blokabout'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.blok-about.create');
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
        
        BlokAbout::create($requestData);

        return redirect('admin/blok-about')->with('flash_message', 'BlokAbout added!');
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
        $blokabout = BlokAbout::findOrFail($id);

        return view('admin.blok-about.show', compact('blokabout'));
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
        $blokabout = BlokAbout::findOrFail($id);

        return view('admin.blok-about.edit', compact('blokabout'));
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
        
        $blokabout = BlokAbout::findOrFail($id);
        $blokabout->update($requestData);

        return redirect('admin/blok-about')->with('flash_message', 'BlokAbout updated!');
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
        BlokAbout::destroy($id);

        return redirect('admin/blok-about')->with('flash_message', 'BlokAbout deleted!');
    }
}
