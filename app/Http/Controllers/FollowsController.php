<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\helpers;

class FollowsController extends Controller
{
    

    public function store(User $user)
    {
    
    current_user()->toggleFollow($user);

    	return back();
    }
}
