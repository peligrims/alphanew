<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Broker;

class BrokersController extends Controller
{
     public function execute() {
		
		if(view()->exists('admin.brokers')) {
			
			$brokers = Broker::all();
			
			
			$data = [
					'title'=>'Brokers',
					'brokers'=>$brokers
					];
			
			return view('admin.brokers',$data);
		}
		
	}
}
