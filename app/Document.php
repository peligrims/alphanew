<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
	
	// Связь с условиями кредита
	protected $table = 'documents';
	
	public function loan_condition()
	{
		return $this->hasMany('App\Loan_condition','document_id','id');
	}

	/*public function potential()
	{
		return $this->hasOne('App\Potential' ,'id','id');
	}*/
	/*public function potential()
	{
		return $this->belongsTo('App\Potential');
	}*/
	
	public function potential()
	{
		return $this->belongsTo('App\Potential','potential_id');
	}
		
	protected $fillable = ['potential_id','loan_condition_id','images','comments'];
}
