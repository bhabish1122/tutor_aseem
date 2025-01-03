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
            $name = strtolower($request->get("name")); // to lower
            $formattedName= ucfirst($name); // capitalize first letter
            $request->merge(["name"=> $formattedName]); // merging changes to request class
            return $next($request);
        }
        return $next($request);
    }
}
