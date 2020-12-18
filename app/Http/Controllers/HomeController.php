<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	
	//Заменил admin.middleware на admin.index
	public function admin(Request $req)
	{
		return view('adminOnlyPage.index')->withMessage("Admin")->with('title', 'Dashboard Admin');
	}
	public function super_admin(Request $req)
	{
		return view('superAdminOnlyPage.superAdmin')->withMessage("Super Admin")->with('title', 'Dashboard SuperAdmin');
	}
	public function member(Request $request, User $user)
	{
		
		
		$user = Auth::user();
		
	
		if (($user->account_name)!==null)
		{
			return redirect()->action('UserController@index');
		}
		else 
		{
			return redirect()->action('UserController@create');
		}
		
		
		
		
		
		//return view('memberOnlyPage.member')->withMessage("Member")->with('title', 'Dashboard Memberik');
	}
	
}
