<?php

namespace App\Http\Middleware;

use Closure;


class Home
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        switch (auth()->user()->role) {

            case 'admin' :
                return redirect(route('admin.home'));
                break;

            case 'professor' :
                return redirect(route('professor.home'));
                break;

            case 'teacher' :
                return redirect(route('teacher.home'));
                break;

            case 'parent' :
                return redirect(route('parent.home'));
                break;

            case 'principal' :
                return redirect(route('principal.home'));
                break;

            default :
                return $next($request);

        }
    }
}
