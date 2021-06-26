<?php

namespace App\Http\Controllers;

use App\Discussion;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DiscussionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Discussion::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {

        $request->validate([
            'title'=>'required',
            'discussion'=>'required',
            'section_id'=>'required',
            'user_id'=>'required'
        ]);
        $title = $request->get('title');
        $slug = Str::slug($title, '-');
        $discussion = new Discussion([
            'title' => $title,
            'discussion' => $request->get('discussion'),
            'section_id' => $request->get('section_id'),
            'imageLink' => $request->get('imageLink'),
            'slug' => $slug,
            'user_id' => $request->get('user_id')
        ]);
        $discussion->save();

        return ['success'=>'Contact saved'];

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Discussion[]|\Illuminate\Database\Eloquent\Collection
     */
    public function show($id)
    {
        return Discussion::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Discussion[]|\Illuminate\Database\Eloquent\Collection
     */
    public function edit($id)
    {
        return Discussion::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $discussion=Discussion::find($id);
        $request->validate([
            'title'=>'required',
            'discussion'=>'required',
            'section_id'=>'required',
            'user_id'=>'required'
        ]);
        $title = $request->get('title');
        $slug = Str::slug($title, '-');
           $discussion->title = $title;
           $discussion->discussion= $request->get('discussion');
           $discussion->section_id = $request->get('section_id');
           $discussion->imageLink = $request->get('imageLink');
           $discussion->slug = $slug;
           $discussion->user_id =  $request->get('user_id');

        $discussion->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return string[]
     */
    public function destroy($id)
    {
        $discussion=Discussion::find($id);
        $discussion->delete();
        return ['status'=>'true'];
    }
}
