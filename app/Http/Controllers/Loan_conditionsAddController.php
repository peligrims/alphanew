<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Vsmoraes\Pdf\Pdf;
use Validator;
use App\Loan_condition;
class Loan_conditionsAddController extends Controller
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
				return redirect()->route('loan_conditionsAdd')
				->withErrors($validator)
				->withInput();
			}
			$loan_condition = new Loan_condition();
			$loan_condition->fill($input);
			//dd($loan_condition);
			if ($loan_condition->save()) {
				return redirect('admin')->with('status', 'Loan condition Added');
			}
		}

		if (view()->exists('admin.loan_conditions_add')) {
			$data = [
			'title' =>'New loan conditions'
			];
			return view('admin.loan_conditions_add')->with('data',$data)->with('title','New Loan condition');
		}
	}

}

