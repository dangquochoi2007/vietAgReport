<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller 
{
	/**
     * The user repository implementation.
     *
     * @var UserRepository
     */
	protected $users;
	/**
     * Create a new controller instance.
     *
     * @param  UserRepository  $users
     * @return void
     */
	

	 /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
	public function index(Request $request) 
	{
         return view('home');
	}
}