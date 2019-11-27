<?php

namespace App\Http\Middleware;

use Closure;

class CheckPermission
{
    /**
     * @param $request
     * @param Closure $next
     * @param $permissions
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function handle($request, Closure $next, $permissions)
    {
        if (!Auth::user()->hasPermission(explode('|', $permissions))) {
            return redirect()->route('dashboard')->withErrors(['このページにアクセスする許可がありません。']);
        }
        return $next($request);
    }
}
