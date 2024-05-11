<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CustomAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $cek = session()->has('email');
        dd($cek);
        // if (Auth::check()) {
        //     return $next($request);
        // }

        // Jika pengguna tidak terotentikasi, redirect ke halaman login atau melakukan tindakan yang sesuai.
        // return redirect('/')->with('error', 'Anda harus login terlebih dahulu.');
    }
}
