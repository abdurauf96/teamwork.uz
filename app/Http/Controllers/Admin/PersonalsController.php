<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalsController extends Controller
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
            $personals = Personal::where('name_uz', 'LIKE', "%$keyword%")
                ->orWhere('profession_uz', 'LIKE', "%$keyword%")
                ->orWhere('about_uz', 'LIKE', "%$keyword%")
                ->orWhere('name_ru', 'LIKE', "%$keyword%")
                ->orWhere('profession_ru', 'LIKE', "%$keyword%")
                ->orWhere('about_ru', 'LIKE', "%$keyword%")
                ->orWhere('name_en', 'LIKE', "%$keyword%")
                ->orWhere('profession_en', 'LIKE', "%$keyword%")
                ->orWhere('about_en', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('tg', 'LIKE', "%$keyword%")
                ->orWhere('insta', 'LIKE', "%$keyword%")
                ->orWhere('fb', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $personals = Personal::latest()->paginate($perPage);
        }

        return view('admin.personals.index', compact('personals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.personals.create');
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
        Personal::create($requestData);

        return redirect('admin/personals')->with('flash_message', 'Personal added!');
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
        $personal = Personal::findOrFail($id);

        return view('admin.personals.show', compact('personal'));
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
        $personal = Personal::findOrFail($id);

        return view('admin.personals.edit', compact('personal'));
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
        
        $personal = Personal::findOrFail($id);
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=time().$file->getClientOriginalName();
            $file->move('admin/images', $image);
            $requestData['image']=$image;
        }
        $personal->update($requestData);

        return redirect('admin/personals')->with('flash_message', 'Personal updated!');
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
        Personal::destroy($id);

        return redirect('admin/personals')->with('flash_message', 'Personal deleted!');
    }
}
