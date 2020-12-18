<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use App\User;

class UsersEditController extends Controller
{


	public function execute(User $user, Request $request)
	{



		if ($request->isMethod('delete')) {
			$user->delete();
			return redirect('superAdminOnlyPage')->with('status','User Delete');
		}


		if ($request->isMethod('post')) {


			$input = $request->except('_token');

			$validator = Validator::make($input,[

				//'name'=>'required|max:255',
				//'type' => 'required|max:255,type,'.$input['id'],
				//'email' => 'required'

			]);

			if ($validator->fails()) {
				return redirect()
				->route('UsersEdit',['user'=>$input['id']])
				->withErrors($validator);
			}

			$user->fill($input);
		
			if ($user->update()) {
				return redirect('superAdminOnlyPage')->with('status','User Update');
			}

		}


		$old = $user->toArray();
		
		if (view()->exists('superAdminOnlyPage.users_edit')) {

			$data = [
				'title' => 'Edit User - '.$old['name'],
				'data' => $old
			];
			
			return view('superAdminOnlyPage.users_edit',$data);

		}
	}
}