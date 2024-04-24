<?php

namespace App\Http\Middleware;

use App\Models\LogAcesso;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        //dd($request);
        $route = $request->getRequestUri();
        $navegador = $ip = $request->server->get('HTTP_USER_AGENT');
        $ip = $request->server->get('REMOTE_ADDR');
        LogAcesso::create(['log'=> "IP $ip Route $route e navegador $navegador"]);
        //return $next($request);
        return Response ('Chegamos aqui!');
    }
}
