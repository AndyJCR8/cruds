<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;
use App\Models\post;
use Illuminate\Http\Request;

class postcontroller extends Controller
{
  public function pruebaAction()
  {
    echo "Hola desde la funcion: pruebaAction";
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
    echo "Hola mundo";
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
    echo view('Dashboard.Post.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StorePostPost $request)
  {
    Post::create($request->validated());
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
    //
    echo ("Post value: " + $post);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\post  $post
   * @return \Illuminate\Http\Response
   */
  public function edit(post $post)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\post  $post
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, post $post)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\post  $post
   * @return \Illuminate\Http\Response
   */
  public function destroy(post $post)
  {
    //
  }
}
