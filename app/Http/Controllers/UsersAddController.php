<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use App\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class UsersAddController extends Controller
{

	public function execute(Request $request, User $user)
	{

		if ($request->isMethod('post')) {
			$input = $request->except('_token');
			$massages = [
				'required'=>'Поле :attribute обязательно к заполнению',
				'unique'=>'Поле :attribute должно быть уникальным'
			];
			$validator = Validator::make($input,[
			'name' => 'required|string|max:50',
			'email' => 'required|string|email|max:255|unique:users',			
			'type' => 'required|max:255',
			], $massages);
			if ($validator->fails()) {
				$this->validate($request, [
				'name' => 'required|string|max:50',
				'email' => 'required|string|email|max:255|unique:users',			
				'type' => 'required|max:255',
				]);
				return redirect()->route('UsersAdd')->withErrors($validator)->withInput();
			}
			$data=$request->all();			
			$user = User::create([
				'name' => $data['name'],
				'email' => $data['email'],
				'type' => $data['type'],
				'password' => bcrypt($data['password']),
				//'password' => Hash::make($data['password']),
			]);				
			$user->fill($input);
			if ($user->save()) {
				return redirect('superAdminOnlyPage')->with('status','User ADD');
			}
		}
		if (view()->exists('superAdminOnlyPage.users_add')) {
			$data = [
				'title' => 'New User'
			];
			return view('superAdminOnlyPage.users_add',$data);
		}
		abort(404);
	}
}
