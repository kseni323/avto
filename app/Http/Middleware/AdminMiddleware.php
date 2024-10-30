<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Проверяем, если у пользователя роль 'admin'
        if (Auth::check() && Auth::user()->role_id == 1) { // Замените 1 на ID роли администратора
            return $next($request); // Даем доступ к админке
        }
        
        return redirect('/'); // Перенаправляем на главную страницу, если не админ
    }
}