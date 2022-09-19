<?php

namespace App\Http\Middleware;

use Closure;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$divisi_ids)
    {
        if (in_array($request->user()->divisi_id,$divisi_ids)) {
            return $next($request);
        }
        return redirect('login');
    }
}
