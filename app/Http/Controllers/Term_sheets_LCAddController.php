<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Term_sheet;
use App\Borrower;
use App\Potential;
use Validator;
use Illuminate\Support\Facades\Input;

class Term_sheets_LCAddController extends Controller
{
	public function execute(Request $request, $obj = null)
	{
		if ($request->isMethod('post')) {
			$input = $request->except('_token');

			$validator = Validator::make($input, [
				//'name' => 'required|max:255',
				//'filter' => 'required|unique:portfolios|max:255'
			]);

			if ($validator->fails()) {
				return redirect()->route('term_sheetsAdd')
				->withErrors($validator)
				->withInput();
			}
			$term_sheet = new Term_sheet();
			$term_sheet->fill($input);
			if ($term_sheet->save()) {
				return redirect('admin')->with('status', 'Term Sheet Added');
			}
		}

		if (view()->exists('admin.content_term_sheets_loan_condition_add')) {

			$borrowers = Borrower::all()->pluck('account_name','id')->toArray();
			$potentials = Potential::all()->pluck('potential_name','id')->toArray();
			$term_sheets=Term_sheet::all();

			return view('admin.content_term_sheets_loan_condition_add')->with('title', 'Summary of Proposed Terms & Conditions')->with('borrowers', $borrowers)->with('potentials', $potentials)->with('term_sheets', $term_sheets)->with('value', $term_sheets);
		}
		}
	}


