<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Loan_application;

use Validator;

class Loan_applicationEditController extends Controller
{   
	public function execute (Loan_application $loan_application, Request $request)
	{	
		if($request->isMethod('delete')) {
			$loan_application->delete();
			return redirect('admin')->with('status','Loan Application Daleyed');
		}	
		if($request->isMethod('post')) {	
			$input = $request->except('_token');
			$validator = Validator::make($input,[
			'borrower'=>'required|max:255',
			]);
			if($validator->fails()) {
				return redirect()
				->route('loan_applicationEdit',['loan_applicationEdit'=>$input['id']])
				->withErrors($validator);
			}
			$loan_application->fill($input);
			if ($loan_application->update()) {
				return redirect('admin')->with('status','Loan Application Update');
			}
			
		}
		$old = $loan_application->toArray();
		if (view()->exists('admin.loan_applications_edit')) {

			$data = [
				'title' => 'Редактирование страницы - '.$old['borrower'],
				'data' => $old
			];
			return view('admin.loan_applications_edit',$data);
		}
	}
}
