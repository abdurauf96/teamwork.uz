<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\ServiceProject;
use Illuminate\Http\Request;

class ServiceProjectsController extends Controller
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
            $serviceprojects = ServiceProject::where('service_id', 'LIKE', "%$keyword%")
                ->orWhere('name_uz', 'LIKE', "%$keyword%")
                ->orWhere('desc_uz', 'LIKE', "%$keyword%")
                ->orWhere('name_ru', 'LIKE', "%$keyword%")
                ->orWhere('desc_ru', 'LIKE', "%$keyword%")
                ->orWhere('name_en', 'LIKE', "%$keyword%")
                ->orWhere('desc_en', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('link', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $serviceprojects = ServiceProject::latest()->paginate($perPage);
        }

        return view('admin.service-projects.index', compact('serviceprojects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $services=\App\Models\Service::all();
        return view('admin.service-projects.create', compact('services'));
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
        ServiceProject::create($requestData);

        return redirect('admin/service-projects')->with('flash_message', 'ServiceProject added!');
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
        $serviceproject = ServiceProject::findOrFail($id);

        return view('admin.service-projects.show', compact('serviceproject'));
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
        $serviceproject = ServiceProject::findOrFail($id);
        $services=\App\Models\Service::all();
        return view('admin.service-projects.edit', compact('serviceproject', 'services'));
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
        $serviceproject = ServiceProject::findOrFail($id);
        $serviceproject->update($requestData);

        return redirect('admin/service-projects')->with('flash_message', 'ServiceProject updated!');
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
        ServiceProject::destroy($id);

        return redirect('admin/service-projects')->with('flash_message', 'ServiceProject deleted!');
    }
}
