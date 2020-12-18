<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
{
/**
* Handle an incoming request.
*
* @param  \Illuminate\Http\Request  $request
* @param  \Closure  $next
* @return mixed
*/

	public function handle($request, Closure $next)
	{
		$user = User::find(Auth::id());
		$roles = [];
		foreach ($user->roles as $key => $value) {
			array_push($roles, $value->pivot->role_id);
		}

		$routeName = Route::getFacadeRoot()->current()->uri();
		$route = explode('/', $routeName);
		if ($route[0] == "personal_account") {
			if (in_array(2, $roles)) {
				return $next($request);
			} else {
				return response('Unauthorized.', 401);
			}
		} elseif ($route[0] == "admin") {
			if (Auth::user()->admin == 1) {
				return $next($request);
			} else {
				return response('Unauthorized.', 401);
			}
		} else {
			if (!Auth::user()) {
				if ($request->ajax()) {
					return response('Unauthorized.', 401);
				} else {
					return redirect()->guest('admin-panel/auth/login');
				}
			}
		}

		return $next($request);
	}
}