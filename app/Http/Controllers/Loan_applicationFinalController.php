<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Loan_application;
use PDF;

class Loan_applicationFinalController extends Controller
{

	public function view (Loan_application $loan_application, Request $request )
	{


		$old=$loan_application->toArray();


		if (view()->exists('admin.loan_application_final')) {

			$data=[
				'title'=>'Заголовок-'.$old['borrower'],

				'data'=>$old
			];
			return view('admin.loan_application_final', $data);
		}
	}

	public function execute (Loan_application $loan_application, Request $request)
	{

		$old=$loan_application->toArray();


		if (view()->exists('admin.loan_application_final')) {

			$data=[
				'title'=>'Title-'.$old['borrower'],

				'data'=>$old
			];
			$pdf = PDF::loadView('admin.loan_application_final',$data); //load view page
			return $pdf->download('loan_application_final.pdf'); // download pdf file

		}
	}

}