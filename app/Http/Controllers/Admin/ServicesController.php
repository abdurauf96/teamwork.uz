<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Service;
use Illuminate\Http\Request;
use Str;

class ServicesController extends Controller
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
            $services = Service::where('name_uz', 'LIKE', "%$keyword%")
                ->orWhere('name_ru', 'LIKE', "%$keyword%")
                ->orWhere('name_en', 'LIKE', "%$keyword%")
                ->orWhere('title_uz', 'LIKE', "%$keyword%")
                ->orWhere('title_ru', 'LIKE', "%$keyword%")
                ->orWhere('title_en', 'LIKE', "%$keyword%")
                ->orWhere('body_uz', 'LIKE', "%$keyword%")
                ->orWhere('body_ru', 'LIKE', "%$keyword%")
                ->orWhere('body_en', 'LIKE', "%$keyword%")
                ->orWhere('icon', 'LIKE', "%$keyword%")
                ->orWhere('seo_desc', 'LIKE', "%$keyword%")
                ->orWhere('seo_keyword', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $services = Service::latest()->paginate($perPage);
        }

        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.services.create');
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
            'name_uz'=>'required'
        ]);

        $requestData = $request->all();
        if($request->hasFile('icon')){
            $file=$request->file('icon');
            $icon=time().$file->getClientOriginalName();
            $file->move('admin/images', $icon);
            $requestData['icon']=$icon;
        }
        $requestData['slug']=Str::slug($request->name_uz);

        Service::create($requestData);
        
        return redirect('admin/services')->with('flash_message', 'Service added!');
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
        $service = Service::findOrFail($id);

        return view('admin.services.show', compact('service'));
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
        $service = Service::findOrFail($id);
        
        return view('admin.services.edit', compact('service'));
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
        $request->validate([
            'name_uz'=>'required'
        ]);
        $requestData = $request->all();
        if($request->hasFile('icon')){
            $file=$request->file('icon');
            $icon=time().$file->getClientOriginalName();
            $file->move('admin/images', $icon);
            $requestData['icon']=$icon;
        };
        $requestData['slug']=Str::slug($request->name_uz);
        $service = Service::findOrFail($id);
        $service->update($requestData);

        return redirect('admin/services')->with('flash_message', 'Service updated!');
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
        Service::destroy($id);

        return redirect('admin/services')->with('flash_message', 'Service deleted!');
    }
}
