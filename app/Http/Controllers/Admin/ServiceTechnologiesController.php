<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\ServiceTechnology;
use Illuminate\Http\Request;

class ServiceTechnologiesController extends Controller
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
            $servicetechnologies = ServiceTechnology::where('service_id', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $servicetechnologies = ServiceTechnology::latest()->paginate($perPage);
        }

        return view('admin.service-technologies.index', compact('servicetechnologies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $services=\App\Models\Service::all();
        return view('admin.service-technologies.create', compact('services'));
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
        
        
        if($request->hasfile('images'))
        {

           foreach($request->file('images') as $image)
           {
               $name=time().$image->getClientOriginalName();
               $image->move('admin/images', $name);  
               ServiceTechnology::create(['image'=>$name, 'service_id'=>$request->service_id]);
           }
        }
    

        return redirect('admin/service-technologies')->with('flash_message', 'ServiceTechnology added!');
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
        $servicetechnology = ServiceTechnology::findOrFail($id);

        return view('admin.service-technologies.show', compact('servicetechnology'));
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
        $servicetechnology = ServiceTechnology::findOrFail($id);
        $services=\App\Models\Service::all();
        return view('admin.service-technologies.edit', compact('servicetechnology', 'services'));
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
        $this->validate($request, [
			'service_id' => 'required'
		]);
        $requestData = $request->all();
        
        $servicetechnology = ServiceTechnology::findOrFail($id);
        if($request->hasFile('image') )
           {    
               $fayl=$request->file('image');
               $image=time().$fayl->getClientOriginalName();
               $fayl->move('admin/images', $image);
               $requestData['image'] =$image;
           }
        $servicetechnology->update($requestData);

        return redirect('admin/service-technologies')->with('flash_message', 'ServiceTechnology updated!');
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
        ServiceTechnology::destroy($id);

        return redirect('admin/service-technologies')->with('flash_message', 'ServiceTechnology deleted!');
    }

    public function uploadImages()
    {

    }
}
