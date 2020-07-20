<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class teacher
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
        $userrole = Auth::user()->role;
        //echo $userrole; die();
        if($userrole=="teacher")
        {
           return $next($request); 
        } 
        return redirect('/');
    }
}
