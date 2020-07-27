<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Tweet;

class ProfilesController extends Controller
{
    
    public function show(User $user)
    {
    	
    	return view('show-profile',compact('user'));
    }
}
