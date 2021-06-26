<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Discussion;
use App\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Reply[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Reply::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string[]
     */
    public function store(Request $request)
    {
        $request->validate([
            'reply'=>'required',
            'comment_id'=>'required',
            'user_id'=>'required'
        ]);
        $comment = new Comment([
            'comment_id' => $request->get('comment_id'),
            'isEmoji' => $request->get('isEmoji'),
            'reply' => $request->get('comment'),
            'user_id' => $request->get('user_id')
        ]);
        $comment->save();

        return ['success'=>'Comment saved'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Reply::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Reply::find($id);
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
        $reply= Reply::find($id);
        $request->validate([
            'reply'=>'required',
            'comment_id'=>'required',
            'user_id'=>'required'
        ]);

        $reply->comment_id = $request->get('comment_id');
        $reply->reply= $request->get('reply');
        $reply->isEmoji = $request->get('isEmoji');
        $reply->user_id =  $request->get('user_id');

        $reply->update();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Reply=Reply::find($id);
        $Reply->delete();
        return ['status'=>'true'];
    }
}
