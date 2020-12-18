<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Loan_condition;
use Validator;

class Loan_conditionsEditController extends Controller
{
	public function execute(Loan_condition $loan_condition, Request $request) 
	{
		//dd($loan_condition);
		
		if ($request->isMethod('delete')) {
			$loan_condition->delete();
			return redirect('admin')->with('status','Loan condition delete');
		}
		if ($request->isMethod('post')) {
			$input = $request->except('_token');
			$validator = Validator::make($input,[
			//'name_loan_condition'=>'required|max:255',				
			]);
			if ($validator->fails()) {
				return redirect()
				->route('loan_conditionsEdit',['loan_condition'=>$input['id']])
				->withErrors($validator);
			}
			$loan_condition->fill($input);
			if ($loan_condition->update()) {
				return redirect('admin')->with('status','Loan conditions');
			}
		}
		$old = $loan_condition->toArray();
		if (view()->exists('admin.loan_conditions_edit')) {
			$data = [
				'title' => 'Edit Loan application',
				'data' => $old
			];
			return view('admin.loan_conditions_edit',$data);

		}
	}
}
