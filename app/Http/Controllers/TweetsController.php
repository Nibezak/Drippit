<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tweet;

class TweetsController extends Controller
{
   	
   	public function __construct()
   	{
   		$this->middleware('auth');
   	}

   public function index()
   {
   
   		return view('tweets.index',[
   				'tweets'=> auth()->user()->timeline()
   		]);
   }

  public function store(Tweet $tweet)
  {

    $attributes = request()->validate(['body'=> 'required|min:5|max:280']);
        Tweet::create([
            'user_id'=> auth()->id(),
            'body'=>$attributes['body']
        ]);

        return back();
  }
}
