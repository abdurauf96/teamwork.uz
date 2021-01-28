<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\BlokService;
use Illuminate\Http\Request;

class BlokServiceController extends Controller
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
            $blokservice = BlokService::where('title_uz', 'LIKE', "%$keyword%")
                ->orWhere('desc_uz', 'LIKE', "%$keyword%")
                ->orWhere('title_ru', 'LIKE', "%$keyword%")
                ->orWhere('desc_ru', 'LIKE', "%$keyword%")
                ->orWhere('title_en', 'LIKE', "%$keyword%")
                ->orWhere('desc_en', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('seo_desc', 'LIKE', "%$keyword%")
                ->orWhere('seo_keyword', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $blokservice = BlokService::latest()->paginate($perPage);
        }

        return view('admin.blok-service.index', compact('blokservice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.blok-service.create');
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
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=time().$file->getClientOriginalName();
            $file->move('admin/images', $image);
            $requestData['image']=$image;
        }
        BlokService::create($requestData);

        return redirect('admin/blok-service')->with('flash_message', 'BlokService added!');
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
        $blokservice = BlokService::findOrFail($id);

        return view('admin.blok-service.show', compact('blokservice'));
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
        $blokservice = BlokService::findOrFail($id);

        return view('admin.blok-service.edit', compact('blokservice'));
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
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=time().$file->getClientOriginalName();
            $file->move('admin/images', $image);
            $requestData['image']=$image;
        }
        $blokservice = BlokService::findOrFail($id);
        $blokservice->update($requestData);

        return redirect('admin/blok-service')->with('flash_message', 'BlokService updated!');
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
        BlokService::destroy($id);

        return redirect('admin/blok-service')->with('flash_message', 'BlokService deleted!');
    }
}
