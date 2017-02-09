<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Form;

class MessageController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function afficheMessages()
  {
    $messages = Message::all();
      return view('message', ['messages'=>$messages]);
  }
}
