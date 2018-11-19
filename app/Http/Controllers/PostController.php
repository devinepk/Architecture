<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/');
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


        $post = new \App\exhibit;
        $post->exhibit = $request->input('exhibit');
        $post->year_completed = $request->input('year_completed');
        $post->artist = $request->input('artist');
        $post->url = $request->input('url');
        $post->description = $request->input('description');
        $post->user_id = \Auth::id();
        $post->save();
        $request->session()->flash('status', "You created a new post!");
        return redirect("/");
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
      $exhibit = \App\exhibit::find($id);
      return view('edit', compact('exhibit'));
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
        $post = \App\exhibit::find($id);
        $post->exhibit = $request->input('exhibit');
        $post->year_completed = $request->input('year_completed');
        $post->artist = $request->input('artist');
        $post->url = $request->input('url');
        $post->description = $request->input('description');
        $post->user_id = \Auth::id();
        $post->save();
        return redirect("/");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
      $post = \App\exhibit::find($id);
      $post->delete();
      return redirect("/");
    }
}
