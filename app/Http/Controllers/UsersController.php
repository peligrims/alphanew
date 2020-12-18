<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller

{


	public function execute()
	{


		if (view()->exists('admin.users')) {

			$users = \App\User::all();
	
			$data = [

				'title' => 'Users',
				'users' => $users

			];
			//dd($users);
			return view('superAdminOnlyPage.users')->with('users', $users)->with('title', 'Dashboard SuperAdmin');;

		}

		abort(404);
	}
}
