<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\AboutPage;
use Illuminate\Http\Request;

class AboutPageController extends Controller
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
            $aboutpage = AboutPage::where('main_title_uz', 'LIKE', "%$keyword%")
                ->orWhere('main_title_ru', 'LIKE', "%$keyword%")
                ->orWhere('main_title_en', 'LIKE', "%$keyword%")
                ->orWhere('main_desc_uz', 'LIKE', "%$keyword%")
                ->orWhere('main_desc_ru', 'LIKE', "%$keyword%")
                ->orWhere('main_desc_en', 'LIKE', "%$keyword%")
                ->orWhere('second_title_uz', 'LIKE', "%$keyword%")
                ->orWhere('second_title_ru', 'LIKE', "%$keyword%")
                ->orWhere('second_title_en', 'LIKE', "%$keyword%")
                ->orWhere('second_desc_uz', 'LIKE', "%$keyword%")
                ->orWhere('second_desc_ru', 'LIKE', "%$keyword%")
                ->orWhere('second_desc_en', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('link', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $aboutpage = AboutPage::latest()->paginate($perPage);
        }

        return view('admin.about-page.index', compact('aboutpage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.about-page.create');
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
        AboutPage::create($requestData);
        
        return redirect('admin/about-page')->with('flash_message', 'AboutPage added!');
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
        $aboutpage = AboutPage::findOrFail($id);

        return view('admin.about-page.show', compact('aboutpage'));
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
        $aboutpage = AboutPage::findOrFail($id);

        return view('admin.about-page.edit', compact('aboutpage'));
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
        $aboutpage = AboutPage::findOrFail($id);
        $aboutpage->update($requestData);

        return redirect('admin/about-page')->with('flash_message', 'AboutPage updated!');
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
        AboutPage::destroy($id);

        return redirect('admin/about-page')->with('flash_message', 'AboutPage deleted!');
    }
}
