<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use Session;

use Mail;

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

    public function postContact(Request $request)
    {
      $this->validate($request, array(
        'email' => 'required|email',
        'subject' => 'min:3',
        'message' => 'min:10'
      ));

      $data = array(
        'email' => $request->email,
        'subject' => $request->subject,
        'bodyMessage' => $request->message
      );

      Mail::send('emails.contact',$data, function($message) use ($data){
        $message->from($data['email']);
        $message->replyTo($data['email']);
        $message->to('luizgpp@gmail.com');
        $message->subject($data['subject']);
      });

      Session::flash('success','Email enviado com sucesso!');
      return redirect('/');
    }
}
