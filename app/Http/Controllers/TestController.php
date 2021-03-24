<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
    	$users = \App\User::paginate(7);
    	
        return view('welcome',compact('users'));
    }
}
