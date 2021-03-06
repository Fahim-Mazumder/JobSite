<?php

namespace App\Http\Middleware;

use Closure;

class applicantSession
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
        if($request->session()->get('id')===null){
            return redirect('jobsite/applicantLogin');
        }
        return $next($request);
    }
}
