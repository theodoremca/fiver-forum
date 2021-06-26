<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Discussion;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Comment::all();
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'comment'=>'required',
            'discussion_id'=>'required',
            'user_id'=>'required'
        ]);
        $comment = $request->get('comment');
        $comment = new Comment([
            'discussion_id' => $request->get('discussion_id'),
            'comment' => $comment,
            'user_id' => $request->get('user_id'),
            'isFile' =>str_starts_with($comment, 'https://firebasestorage.googleapis.com/'),
            'file_comment'=> $request->get('file_comment'),
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
        return Comment::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return comment::find($id);
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
       $comment = comment::find($id);
        $request->validate([
            'comment'=>'required',
            'discussion_id'=>'required',
            'user_id'=>'required'
        ]);
        $comment->comment = $request->get('comment');;
        $comment->discussion_id= $request->get('discussion_id');
        $comment->isFile = str_starts_with($comment, 'https://firebasestorage.googleapis.com/');
        $comment->file_comment = $request->get('file_comment');

        $comment->user_id =  $request->get('user_id');

        $comment->update();
        return  $comment;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = comment::find($id);
        $comment->delete();
        return ['status'=>'true'];
    }
}
