<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Borrower;
use Validator;

class BorrowersEditController extends Controller
{


	public function execute (Borrower $borrower, Request $request)
	{


		if ($request->isMethod('delete')) {
			$borrower->delete();
			return redirect('admin')->with('status','Borrower Daleyed');
		}


		if ($request->isMethod('post')) {


			$input = $request->except('_token');

			$validator = Validator::make($input,[
				


			]);

			if ($validator->fails()) {
				return redirect()
				->route('borrowersEdit',['borrowersEdit'=>$input['id']])
				->withErrors($validator);
			}



			$borrower->fill($input);

			if ($borrower->update()) {
				return redirect('admin')->with('status','Borrower Update');
			}

		}

		$old = $borrower->toArray();
		if (view()->exists('admin.borrowers_edit')) {

			$data = [
			'title' => 'Редактирование страницы - '.$old['account_name'],
				'data' => $old
			];
			return view('admin.borrowers_edit',$data);

		}


	}
}