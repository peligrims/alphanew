<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
	'name', 'email', 'password','type','account_name','contact_name','contact_name','ssn','phone1','date_of_birth','yrsschool','dependents','pstreet','pcity','pcity','pstate','pzip','mcity','mcity','mstate','mzip','fcity','fcity','fstate','fzip','maritalstatus'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function loan_application()
    {
    	return $this->hasOne('App\Loan_application','user_id','id');
    }
	public function getGravatarAttribute()
	{
		$hash = md5(strtolower(trim($this->attributes['email'])));
		return "http://www.gravatar.com/avatar/$hash";
	}
}
