<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Number;
use Illuminate\Http\Request;

class NumbersController extends Controller
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
            $numbers = Number::where('title_uz', 'LIKE', "%$keyword%")
                ->orWhere('title_ru', 'LIKE', "%$keyword%")
                ->orWhere('title_en', 'LIKE', "%$keyword%")
                ->orWhere('number', 'LIKE', "%$keyword%")
                ->orWhere('color', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $numbers = Number::latest()->paginate($perPage);
        }

        return view('admin.numbers.index', compact('numbers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.numbers.create');
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
        
        Number::create($requestData);

        return redirect('admin/numbers')->with('flash_message', 'Number added!');
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
        $number = Number::findOrFail($id);

        return view('admin.numbers.show', compact('number'));
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
        $number = Number::findOrFail($id);

        return view('admin.numbers.edit', compact('number'));
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
        
        $number = Number::findOrFail($id);
        $number->update($requestData);

        return redirect('admin/numbers')->with('flash_message', 'Number updated!');
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
        Number::destroy($id);

        return redirect('admin/numbers')->with('flash_message', 'Number deleted!');
    }
}
