<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Section::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('section');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'section_id'=>'required',
//            'user_id'=>'required'
        ]);
        $name = $request->get('name');
        $slug = Str::slug($name, '-');
        $section = new Section([
            'name' => $name,
            'description' => $request->get('description'),
            'section_id' => $request->get('section_id'),
            'slug' => $request-$slug,
//            'user_id' => $request->get('user_id')
        ]);
        $section->save();

        return ['success'=>'section added'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Section::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Section::find($id);
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
        $section= Section::find($id);

        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'section_id'=>'required',
//            'user_id'=>'required'
        ]);
        $name = $request->get('name');
        $slug = Str::slug($name, '-');

            $section->name = $name;
            $section->description = $request->get('description');
            $section->section_id = $request->get('section_id');
            $section->slug = $request-$slug;
//            'user_id' => $request->get('user_id')

        $section->update();
        return  $section;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
