<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Vsmoraes\Pdf\Pdf;
use App\Potential;
use App\Borrower;

class Potential_namesController extends Controller

{
	public function execute(Request $request)
	{

		if (view()->exists('admin.potential_names')) {
			$potentials = Potential::all();						
			$borrowers = Borrower::pluck('account_name', 'id');
			
			$data = [
				'title'=>'Summary of Proposed Terms & Conditions',
				'potentials'=>$potentials,
				'borrowers'=>$borrowers	
				];
			}
			
			
			
			return view('admin.potential_names', $data);
			

		}
}
