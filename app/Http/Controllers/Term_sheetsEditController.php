<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Term_sheet;
use Vsmoraes\Pdf\Pdf;

use Validator;

class Term_sheetsEditController extends Controller
{
	

	public function execute (Term_sheet $term_sheet, Request $request)
	{


		if ($request->isMethod('delete')) {
			$term_sheet->delete();
			return redirect('admin')->with('status','Term Sheet Daleyed');
		}


		if ($request->isMethod('post')) {


			$input = $request->except('_token');

			$validator = Validator::make($input,[
				//обязательное поле
				//'borrower1'=>'required|max:255',


			]);

			if ($validator->fails()) {
				return redirect()
				->route('term_sheetsEdit',['term_sheetsEdit'=>$input['id']])
				->withErrors($validator);
			}



			$term_sheet->fill($input);

			if ($term_sheet->update()) {
				return redirect('admin')->with('status','Term SheetsEdit Update');
			}

		}

		$old = $term_sheet->toArray();
		//dd($term_sheet);
		if (view()->exists('admin.term_sheets_edit')) {

			$data = [
				'title' => 'Edit  - '.$old['borrower_id'],
				'data' => $old
			];
			return view('admin.term_sheets_edit',$data);

		}


	}
	
}
