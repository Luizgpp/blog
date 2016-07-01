<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class PagesController extends Controller
{
    public function getIndex()
    {
      $posts = Post::orderBy('created_at','DESC')->limit(5)->get();

      return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout()
    {
      $first = "luiz";
      $last = "Gabriel";

      $fullname = $first . " " . $last;
      $email = 'luizgpp@gmail.com';

      $data = [];
      $data['email'] = $email;
      $data['fullname'] = $fullname;
      return view('pages.about')->withData($data);
    }

    public function getContact()
    {
      return  view('pages.contact');
    }
}
