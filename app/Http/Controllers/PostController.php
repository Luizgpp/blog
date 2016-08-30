<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Session;

use App\Post;
use App\Tag;
use App\Category;

class PostController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $posts = Post::orderBy('id','DESC')->paginate(10);
    return view('posts.index')->withPosts($posts);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $categories = Category::all();
    $tags = Tag::all();

    return view('posts.create')->withCategories($categories)->withTags($tags);
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $this->validate($request, array(
      'title'       => 'required|max:255',
      'slug'        => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
      'category_id' => 'required|integer',
      'body'        => 'required'
    ));

    $post = new Post;
    $post->title = $request->title;
    $post->slug = $request->slug;
    $post->category_id = $request->category_id;
    $post->body = $request->body;

    $post->save();

    $post->tags()->sync($request->tags_id, false);

    Session::flash('success','Post gravado com sucesso!');

    return redirect()->route('posts.show', $post->id);
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $post = Post::find($id);
    return view('posts.show')->withPost($post);
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $post = Post::find($id);
    $categories = Category::all();
    $cats = array();

    foreach ($categories as $category) {
      $cats[$category->id] = $category->name;
    }

    $tags = Tag::all();

    $tags2 = array();
    foreach ($tags as $tag) {
      $tags2[$tag->id] = $tag->name;
    }

    return view('posts.edit')->withPost($post)->withCategories($cats)->withTags($tags2);
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
    $post = Post::find($id);

    if($request->slug == $post->slug){
      $this->validate($request, array(
        'title' => 'required|max:255',
        'category_id' => 'required|integer',
        'body' => 'required'
      ));
    }else{
      $this->validate($request, array(
        'title' => 'required|max:255',
        'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
        'category_id' => 'required|integer',
        'body' => 'required'
      ));
    }
    $post = Post::find($id);

    $post->title = $request->title;
    $post->slug = $request->slug;
    $post->category_id = $request->category_id;
    $post->body = $request->body;

    $post->save();

    if (isset($request->tags_id)) {
      $post->tags()->sync($request->tags_id);
    }else {
      $post->tags()->sync(array());
    }

    Session::flash('success','Post gravado com sucesso');

    return redirect()->route('posts.show',$post->id);
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $post = Post::find($id);
    $post->tags()->detach();
    $post->delete();

    Session::flash('success','Seu post foi apagado com sucesso!');

    return redirect()->route('posts.index');
  }
}
