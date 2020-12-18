<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
	
	public function loan_condition()
	{
		return $this->belongsTo('App\Loan_condition', 'loan_condition_id');
	}
	
	
	
	protected $fillable = ['filename','status','user_id','name_loan_condition','loan_condition_id','comment'];
}
