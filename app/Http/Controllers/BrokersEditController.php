<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Broker;
use Validator;

class BrokersEditController extends Controller
{


	public function execute (Broker $broker, Request $request)
	{


		if ($request->isMethod('delete')) {
			$broker->delete();
			return redirect('admin')->with('status','Broker Daleyed');
		}


		if ($request->isMethod('post')) {


			$input = $request->except('_token');

			$validator = Validator::make($input,[



			]);

			if ($validator->fails()) {
				return redirect()
				->route('brokersEdit',['brokersEdit'=>$input['id']])
				->withErrors($validator);
			}



			$broker->fill($input);

			if ($broker->update()) {
				return redirect('admin')->with('status','Broker Update');
			}

		}

		$old = $broker->toArray();
		if (view()->exists('admin.brokers_edit')) {

			$data = [
			'title' => 'Редактирование страницы - '.$old['first_name'],
				'data' => $old
			];
			return view('admin.brokers_edit',$data);

		}
	}
}
