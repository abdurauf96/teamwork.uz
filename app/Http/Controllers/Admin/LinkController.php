<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
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
            $link = Link::where('about_title_uz', 'LIKE', "%$keyword%")
                ->orWhere('about_desc_uz', 'LIKE', "%$keyword%")
                ->orWhere('contact_title_uz', 'LIKE', "%$keyword%")
                ->orWhere('contact_desc_uz', 'LIKE', "%$keyword%")
                ->orWhere('addres_uz', 'LIKE', "%$keyword%")
                ->orWhere('footer_uz', 'LIKE', "%$keyword%")
                ->orWhere('about_title_ru', 'LIKE', "%$keyword%")
                ->orWhere('about_desc_ru', 'LIKE', "%$keyword%")
                ->orWhere('contact_title_ru', 'LIKE', "%$keyword%")
                ->orWhere('contact_desc_ru', 'LIKE', "%$keyword%")
                ->orWhere('addres_ru', 'LIKE', "%$keyword%")
                ->orWhere('footer_ru', 'LIKE', "%$keyword%")
                ->orWhere('about_title_en', 'LIKE', "%$keyword%")
                ->orWhere('about_desc_en', 'LIKE', "%$keyword%")
                ->orWhere('contact_title_en', 'LIKE', "%$keyword%")
                ->orWhere('contact_desc_en', 'LIKE', "%$keyword%")
                ->orWhere('addres_en', 'LIKE', "%$keyword%")
                ->orWhere('footer_en', 'LIKE', "%$keyword%")
                ->orWhere('phone1', 'LIKE', "%$keyword%")
                ->orWhere('phone2', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('tg', 'LIKE', "%$keyword%")
                ->orWhere('insta', 'LIKE', "%$keyword%")
                ->orWhere('fb', 'LIKE', "%$keyword%")
                ->orWhere('youtube', 'LIKE', "%$keyword%")
                ->orWhere('tiktok', 'LIKE', "%$keyword%")
                ->orWhere('wk', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $link = Link::latest()->paginate($perPage);
        }

        return view('admin.link.index', compact('link'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.link.create');
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
        if($request->hasFile('project_logo')){
            $file=$request->file('project_logo');
            $image=time().$file->getClientOriginalName();
            $file->move('admin/images', $image);
            $requestData['project_logo']=$image;
        }
        Link::create($requestData);

        return redirect('admin/link')->with('flash_message', 'Link added!');
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
        $link = Link::findOrFail($id);

        return view('admin.link.show', compact('link'));
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
        $link = Link::findOrFail($id);

        return view('admin.link.edit', compact('link'));
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
        if($request->hasFile('project_logo')){
            $file=$request->file('project_logo');
            $image=time().$file->getClientOriginalName();
            $file->move('admin/images', $image);
            $requestData['project_logo']=$image;
        }
        $link = Link::findOrFail($id);
        $link->update($requestData);

        return redirect('admin/link')->with('flash_message', 'Link updated!');
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
        Link::destroy($id);

        return redirect('admin/link')->with('flash_message', 'Link deleted!');
    }
}
