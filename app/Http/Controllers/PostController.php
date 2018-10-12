<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AddPost(Request $request)
    {
        $this->validate($request,[
            'post_title'=>'required',
            'post_body'=>'required',
            'category_id'=>'required',
            'post_image'=>'required'
        ] );
        $posts= new Post;
        $posts->post_title=$request->input('post_title');
        $posts->user_id=Auth::user()->id;
        $posts->post_body=$request->input('post_body');
        $posts->category_id=$request->input('category_id');

        if(Input::hasFile('post_image')){
            $file= Input::file('post_image');
            $file->move(public_path().'/posts/',$file->getClientOriginalName());
            $url=URL::to("/").'/posts/'. $file->getClientOriginalName();

        }
        $posts->post_image= $url;
        $posts->save();
        return redirect('/home')->with('response','Post añadido');


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
        //
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
        //
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
