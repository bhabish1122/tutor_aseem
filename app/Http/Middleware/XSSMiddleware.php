<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class XSSMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $inpuData = $request->all(); // lists all request data 
        foreach($inpuData as $key => $value){ // goes through each object of request class
            $request->merge([$key => htmlspecialchars($value)]); // convert html tag to string
        }
        return $next($request); // continue with the action
    }
}

