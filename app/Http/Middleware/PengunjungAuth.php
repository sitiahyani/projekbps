<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class PengunjungAuth
{
    public function handle($request, Closure $next)
    {
        if (!Session::has('peng_id')) {
            return redirect('/login/user');
        }

        return $next($request);
    }
}