<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomAliasMiddleware
{
    
    public function handle(Request $request, Closure $next)
    {
        if($request->has("name")){ 
            $name = strtolower($request->get("name"));
            $request->merge(["name"=> $name]);
            //return $next($request);
            dd($request->get("name"),$request->name);
        }
        return $next($request);
    }
}
