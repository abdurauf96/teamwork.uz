<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Str;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeaturesController extends Controller
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
            $features = Feature::where('title_uz', 'LIKE', "%$keyword%")
                ->orWhere('desc_uz', 'LIKE', "%$keyword%")
                ->orWhere('body_uz', 'LIKE', "%$keyword%")
                ->orWhere('title_ru', 'LIKE', "%$keyword%")
                ->orWhere('desc_ru', 'LIKE', "%$keyword%")
                ->orWhere('body_ru', 'LIKE', "%$keyword%")
                ->orWhere('title_en', 'LIKE', "%$keyword%")
                ->orWhere('desc_en', 'LIKE', "%$keyword%")
                ->orWhere('body_en', 'LIKE', "%$keyword%")
                ->orWhere('icon', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $features = Feature::latest()->paginate($perPage);
        }

        return view('admin.features.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.features.create');
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
        $request->validate([
            'title_uz'=>'required'
        ]);
        $requestData = $request->all();
        if($request->hasFile('icon')){
            $file=$request->file('icon');
            $image=time().$file->getClientOriginalName();
            $file->move('admin/images', $image);
            $requestData['icon']=$image;
        }
        $requestData['slug']=Str::slug($request->title_uz);
        Feature::create($requestData);

        return redirect('admin/features')->with('flash_message', 'Feature added!');
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
        $feature = Feature::findOrFail($id);

        return view('admin.features.show', compact('feature'));
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
        $feature = Feature::findOrFail($id);

        return view('admin.features.edit', compact('feature'));
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
        
        $feature = Feature::findOrFail($id);
        if($request->hasFile('icon')){
            $file=$request->file('icon');
            $image=time().$file->getClientOriginalName();
            $file->move('admin/images', $image);
            $requestData['icon']=$image;
        }
        $requestData['slug']=Str::slug($request->title_uz);
        $feature->update($requestData);

        return redirect('admin/features')->with('flash_message', 'Feature updated!');
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
        Feature::destroy($id);

        return redirect('admin/features')->with('flash_message', 'Feature deleted!');
    }
}
