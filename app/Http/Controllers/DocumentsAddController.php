<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Document;
use App\Borrower;
use App\Potential;
use App\Loan_condition;
use Validator;
class DocumentsAddController extends Controller
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
				return redirect()->route('documentsAdd')
				->withErrors($validator)
				->withInput();
			}
			
			
			$document = new Document();
			$document->fill($input);
			if ($document->save()) {
				return redirect('admin')->with('status', 'Document Added');
			}
		}
		if (view()->exists('admin.documents_add')) {
			$loan_conditions = Loan_condition::all()->pluck('name_loan_condition', 'id')->toArray();
			$potentials = Potential::all()->pluck('potential_name','id')->toArray();
			
			$data = [
				'title' => 'New Document',
				'potentials'=>$potentials,
				'loan_conditions'=>$loan_conditions
				
			];
			return view('admin.documents_add')->with('title', 'New Document')->with('loan_conditions', $loan_conditions)->with('potentials', $potentials);
		}
	}

}
