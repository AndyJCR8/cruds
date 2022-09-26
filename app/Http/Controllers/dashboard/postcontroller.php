<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;
use App\Models\post;
use Illuminate\Http\Request;

class postcontroller extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $posts = post::orderBy('created_at', 'desc')->cursorpaginate(5);
    echo view('Dashboard.Post.index', ['posts' => $posts]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    echo view('Dashboard.Post.create', ['post' => new post()]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StorePostPost $request)
  {
    post::create($request->validated());
    return back()->with('status', 'Se creo el post correctamente');
    //return redirect("post/create")->with('status', 'Post creado');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\post  $post
   * @return \Illuminate\Http\Response
   */
  public function show(post $post)
  {
    //echo "post: " . $post;
    echo view("Dashboard.Post.show", ['post' => $post]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\post  $post
   * @return \Illuminate\Http\Response
   */
  public function edit(post $post)
  {
    echo view("Dashboard.Post.edit", ['post' => $post]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\Http\Requests\StorePostPost  $request
   * @param  \App\Models\post  $post
   * @return \Illuminate\Http\Response
   */
  public function update(StorePostPost $request, post $post)
  {
    $post->update($request->validated());
    return back()->with('status', 'Se actualizó el post correctamente');
  }

  /*public function deleteView($id)
  {
  }*/

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\post  $post
   * @return \Illuminate\Http\Response
   */
  public function destroy(post $post)
  {
    $post->delete();
    return back()->with('status', 'Post borrado');
  }
}
