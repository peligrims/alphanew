<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;


use Validator;
use App\Broker;

class BrokersAddController extends Controller
{
    //
    
    public function execute(Request $request) {
    	
    	if($request->isMethod('post')) {
			$input = $request->except('_token');
			
			
			$massages = [
			
				'required'=>'Поле :attribute обязательно к заполнению',
				'unique'=>'Поле :attribute должно быть уникальным'
			
			];
			
			
			$validator = Validator::make($input,[
			
				/*'name' => 'required|max:255',
				'alias' => 'required|unique:pages|max:255',
				'text'=> 'required'*/
			
			], $massages);
			
			if($validator->fails()) {
				return redirect()->route('brokersAdd')->withErrors($validator)->withInput();
			}
			
			
			
			$broker = new Broker();
			
			
			//$page->unguard();
			
			$broker->fill($input);
			
			if($broker->save()) {
				return redirect('admin')->with('status','Broker Added');
			}
			
		}
    	
    
		if(view()->exists('admin.brokers_add')) {
			
			$data = [
					
					'title' => 'New Broker'
					
					];
			return view('admin.brokers_add',$data);		
			
		}
		
		abort(404);
		
		
	}
}
