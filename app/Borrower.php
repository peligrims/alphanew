<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
	public function Term_sheets()
	{
		return $this->hasManyThrough('App\Term_sheet','App\Potential','borrower_id','potential_id','id','id');
	}
	
	public function Potentials()
	{
		return $this->hasMany('App\Potential','fk_mark');
	}
	
	
	protected $fillable = ['id','potential_name','account_name','contact_name','phone1','email1','street','city','state','zip','citizenship','potential_id','created_at','updated_at'];
}
