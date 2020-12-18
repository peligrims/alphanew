<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Potential extends Model
{
	
	public function borrower()
	{
		return $this->belongsTo('App\Borrower','borrower_id');
	}
	public function lcondition()
	{
		return $this->belongsTo('App\Loan_condition');
	}
	public function therm_sheet()
	{
		return $this->hasMany('App\Term_sheet','potential_id');
	}
	public function docs()
	{
		return $this->hasMany('App\Document');
	}
	
	protected $fillable = ['potential_id','potential_name','borrower_id'];
}
