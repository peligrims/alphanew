<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Vsmoraes\Pdf\Pdf;
use App\Potential;
use App\Borrower;
use App\Term_sheet;

class Term_sheetsController extends Controller
{
	public function execute()
	{
		$term_sheets=Term_sheet::all();		
		//dd($term_sheets);
			
		$data = [
		'title'=>'Summary of Proposed Terms & Conditions',
		'term_sheets'=>$term_sheets,


		];
	
		return view('admin.term_sheets')->with('data', $data)->with('term_sheets', $term_sheets)->with('title', 'Summary of Proposed Terms & Conditions');
					
	}
}