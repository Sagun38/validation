<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Form;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function accueil()
    {
        return view('accueil');
    }

    public function contact()
    {
        return view('contact');
    }

    public function insertOne(Request $request)
    {
      $message = new Message;
      $message->name = $request->name;
      $message->email = $request->email;
      $message->content = $request->content;
      $message->save();

      return redirect('/accueil');
    }
}
