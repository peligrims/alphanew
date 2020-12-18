<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Loan_condition;



class Loan_conditionsController extends Controller
{
	public function execute()
	{


		if (view()->exists('admin.loan_conditions')) {

			$loan_conditions = Loan_condition::all();

			$data = [

			'title' => 'loan conditions',
				'loan_conditions' => $loan_conditions

			];

			return view('admin.loan_conditions',$data);

		}

		abort(404);
	}
}
