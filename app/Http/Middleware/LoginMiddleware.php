<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
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
        $id = session('id');
        if (empty($id)){
            return redirect('/admin/login')->with('msg','您还没有登录, 请登录!!!');
        }
        return $next($request);
    }
}
