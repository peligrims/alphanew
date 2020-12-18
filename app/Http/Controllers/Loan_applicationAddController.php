<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Loan_application;
use Validator;
class Loan_applicationAddController extends Controller
{
    public function execute(Request $request) {
    	if($request->isMethod('post')) {
			$input = $request->except('_token');
			$validator = Validator::make($input, [
	            //'name' => 'required|max:255',
	            //'filter' => 'required|unique:portfolios|max:255'
	        ]);
	        if ($validator->fails()) {
	            return redirect()->route('loan_applicationAdd')
	                        ->withErrors($validator)
	                        ->withInput();
	        }
	        $loan_application = new Loan_application();
	       // Page::unguard();
	        $loan_application->fill($input);
			if ($loan_application->save()) {
				return redirect('loan_applicationAdd')->with('status', 'Loan Application Added');
			}
		}
		if (view()->exists('loan_applicationAdd.loan_applications_add')) {	
			$data = [
					'title' => 'New BUSINESS PURPOSE / LOAN APPLICATION '
					];
					return view('loan_applicationAdd.loan_applications_add',$data);
		}
	}
}
