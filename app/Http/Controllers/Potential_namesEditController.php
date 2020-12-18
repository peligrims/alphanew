<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Potential;
use Vsmoraes\Pdf\Pdf;

use Validator;

class Potential_namesEditController extends Controller
{


	public function execute (Potential $potential, Request $request)
	{

		//dd($potential);
		if ($request->isMethod('delete')) {
			$potential->delete();
			return redirect('admin')->with('status','Potential namet Daleyed');
		}


		if ($request->isMethod('post')) {


			$input = $request->except('_token');

			$validator = Validator::make($input,[
				


			]);

			if ($validator->fails()) {
				return redirect()
				->route('potential_namesEdit',['potential_namesEdit'=>$input['id']])
				->withErrors($validator);
			}



			$potential->fill($input);

			if ($potential->update()) {
				return redirect('admin')->with('status','Potential name Update');
			}

		}

		$old = $potential->toArray();
		//dd($p_name);
		if (view()->exists('admin.potential_names_edit')) {

			$data = [
			'title' => 'Edit  - '.$old['potential_name'],
				'data' => $old
			];
			return view('admin.potential_names_edit',$data);

		}
	}

}
