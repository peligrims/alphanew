<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Borrower;

class BorrowersController extends Controller
{
     public function execute() {		
		if(view()->exists('admin.borrower')) {			
			$borrowers = Borrower::all();			
			$data = [
					'title'=>'borrowers',
					'borrowers'=>$borrowers
					];
			
			return view('admin.borrowers',$data);
		}
		
	}
}
