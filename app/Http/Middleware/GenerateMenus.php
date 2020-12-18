<?php

namespace App\Http\Middleware;

use Closure;

class GenerateMenus
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
		 \Menu::make('main_menu', function ($menu) {
			 $menu->add('Pages');
			 $menu->add('Portfolio', 'news');
			 $menu->add('Term Sheets');
			 $menu->add('Loan Applications');
			 $menu->add('Borrowers');
			 $menu->add('Brokers');
			 $menu->add('Documents');
			 $menu->add('Patentials');
			 $menu->add('Loan Conditions');
			 /*$menu->add('Service', [
				 'action' => [
					 'PageController@show', 'slug' => 'about'
				 ]
			 ]);*/
		 });
		 return $next($request);
	 }
}
