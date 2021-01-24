<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServiceTypesController extends Controller
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
            $servicetypes = ServiceType::where('title_uz', 'LIKE', "%$keyword%")
                ->orWhere('desc_uz', 'LIKE', "%$keyword%")
                ->orWhere('title_ru', 'LIKE', "%$keyword%")
                ->orWhere('desc_ru', 'LIKE', "%$keyword%")
                ->orWhere('title_en', 'LIKE', "%$keyword%")
                ->orWhere('desc_en', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('service_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $servicetypes = ServiceType::latest()->paginate($perPage);
        }

        return view('admin.service-types.index', compact('servicetypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $services=\App\Models\Service::all();
        return view('admin.service-types.create', compact('services'));
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
        ServiceType::create($requestData);

        return redirect('admin/service-types')->with('flash_message', 'ServiceType added!');
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
        $servicetype = ServiceType::findOrFail($id);

        return view('admin.service-types.show', compact('servicetype'));
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
        $servicetype = ServiceType::findOrFail($id);
        $services=\App\Models\Service::all();
        return view('admin.service-types.edit', compact('servicetype', 'services'));
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
        $servicetype = ServiceType::findOrFail($id);
        $servicetype->update($requestData);

        return redirect('admin/service-types')->with('flash_message', 'ServiceType updated!');
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
        ServiceType::destroy($id);

        return redirect('admin/service-types')->with('flash_message', 'ServiceType deleted!');
    }
}
