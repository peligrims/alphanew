<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan_condition extends Model
{
	protected $fillable = ['name_loan_condition','Comment'];
	protected $table = 'loan_conditions';
}
