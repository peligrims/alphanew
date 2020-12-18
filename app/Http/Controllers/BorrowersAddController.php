<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Borrower;
use Validator;

class BorrowersAddController extends Controller
{
	public function execute(Request $request)
	{
		if ($request->isMethod('post')) {
			$input = $request->except('_token');
			$validator = Validator::make($input, [
				//'name' => 'required|max:255',
				//'filter' => 'required|unique:portfolios|max:255'
			]);
			if ($validator->fails()) {
				return redirect()->route('borrowersAdd')
				->withErrors($validator)
				->withInput();
			}
			$borrower = new Borrower();
			
			$borrower ->fill($input);
			if ($borrower ->save()) {
				return redirect('admin')->with('status', 'Borrower  Added');
			}
		}
		if (view()->exists('admin.borrowers_add')) {

			$data = [
			'title' => 'Borrower ADD'

			];
			return view('admin.borrowers_add',$data);
		}
	}
}