<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Term_sheet;
use PDF;

class Term_sheetsFinalController extends Controller
{

	public function view (Term_sheet $term_sheet, Request $request )
	{


		$old=$term_sheet->toArray();


		if (view()->exists('admin.term_sheets_final')) {

			$data=[
				'title'=>'Заголовок-'.$old['borrower_id'],

				'data'=>$old
			];
			return view('admin.term_sheets_final', $data);
		}
	}

	public function execute (Term_sheet $term_sheet, Request $request)
	{

		$old=$term_sheet->toArray();
		

		if (view()->exists('admin.content_loan_application_final')) {

			$data=[
				'title'=>'Заголовок-'.$old['borrower_id'],

				'data'=>$old
			];
			//dd($term_sheet);
			$pdf = PDF::loadView('admin.term_sheets_final',$data); //load view page
			return $pdf->download('term_sheets_final.pdf'); // download pdf file
			//return PDF::loadFile(public_path().'/myfile.html')->save('/path-to/my_stored_file.pdf')->stream('download.pdf');


		}
	}

}