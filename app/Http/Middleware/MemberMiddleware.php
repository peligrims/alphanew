<?php

namespace App\Http\Middleware;
use \Illuminate\Http\Response;
use Closure;

class MemberMiddleware
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
		 if ($request->user() && $request->user()->type != 'member') {
			 return new Response(view('admin.unauthorized')->with('role', 'MEMBER'));
		 }
		 return $next($request);
	 }
}
