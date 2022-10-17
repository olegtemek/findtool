<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Http\Request;

class ModerationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::where('active', false)->get();
        return view('admin.moderation.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $company = Company::find($id);
        return view('admin.moderation.edit', compact('company', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'number' => 'required',
            'offer' => 'required|max:150',
            'find' => 'max:150',
            'category_id' => 'required',
        ]);
        Company::find($id)->update([
            'title' => $request->title,
            'number' => $request->number,
            'offer' => $request->offer,
            'link' => $request->link,
            'find' => $request->find,
            'category_id' => $request->category_id,
            'portfolio' => $request->portfolio,
            'position' => $request->position,
            'text' => $request->text,
            'active' => $request->active == 'on' ? 1 : 0
        ]);
        return redirect()->route('admin.moderation.index')->with('message', 'company was edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::destroy($id);
        return redirect()->route('admin.moderation.index')->with('message', 'company was deleted');
    }
}
