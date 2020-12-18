<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Vsmoraes\Pdf\Pdf;
use DB;
use App\Document;
use App\Potential;
use App\Loan_condition;


class DocumentsController extends Controller
{
	public function execute(Request $request)
	{

		if (view()->exists('admin.documets')) {
			
			$documents = Document::all();
			$loan_conditions = Loan_condition::all();
			//->pluck('name_loan_condition', 'id')->toArray();
			foreach ($documents as $document)
			
			$data = [
				'title'=>'Summary of Proposed Terms & Conditions',
				'documents'=>$documents,
				'loan_conditions'=>$loan_conditions
			];
			
			return view('admin.documets')->with('title', 'Summary of Proposed Terms & Conditions')->with('loan_conditions', $loan_conditions)->with('documents', $documents);
			
		}
	}
}
