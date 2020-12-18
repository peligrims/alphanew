<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Potential;
use App\Borrower;
use Validator;
class Potential_namesAddController extends Controller
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
					return redirect()->route('potential_namesAdd')
					->withErrors($validator)
					->withInput();
				}
				$potential = new Potential();
				$potential->fill($input);
				if ($potential->save()) {
					return redirect('admin')->with('status', 'Potential name Added');
				}
			}
			if (view()->exists('admin.potential_names_add')) {
				$potentials = Potential::all();
				//$borrowers_id = Borrower::pluck('account_name', 'id');
				$borrowers=Borrower::all()->pluck('account_name', 'id')->toArray();
				
						$data = [
						/*'title' => 'New potential name',
						'potentials'=>$potentials,
						'borrowers'=>$borrowers_id	*/
						];					
						
return view('admin.potential_names_add')->with('data',$data)->with('potentials',$potentials)->with('borrowers',$borrowers)->with('title', 'Summary');
			}
		}
	}

