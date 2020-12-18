<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Document;
use Vsmoraes\Pdf\Pdf;

use Validator;

class DocumentsEditController extends Controller
{


	public function execute (Document $document, Request $request)
	{


		if ($request->isMethod('delete')) {
			$document->delete();
			return redirect('admin')->with('status','Document Daleyed');
		}


		if ($request->isMethod('post')) {


			$input = $request->except('_token');

			$validator = Validator::make($input,[
				//'borrower1'=>'required|max:255',


			]);

			if ($validator->fails()) {
				return redirect()
				->route('documentsEdit',['documentsEdit'=>$input['id']])
				->withErrors($validator);
			}



			$document->fill($input);

			if ($document->update()) {
				return redirect('admin')->with('status','Documents Update');
			}

		}

		$old = $document->toArray();
		if (view()->exists('admin.documents_edit')) {

			$data = [
				'title' => 'Edit  - '.$old['potential_id'],
				'data' => $old
			];
			return view('admin.documents_edit',$data);

		}
	}

}