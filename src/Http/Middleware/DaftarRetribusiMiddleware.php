<?php namespace Bantenprov\DaftarRetribusi\Http\Middleware;

use Closure;

/**
 * The DaftarRetribusiMiddleware class.
 *
 * @package Bantenprov\DaftarRetribusi
 * @author  feripratama <eroorsys@gmail.com>
 */
class DaftarRetribusiMiddleware
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
        return $next($request);
    }
}
