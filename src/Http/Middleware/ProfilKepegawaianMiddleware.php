<?php namespace Bantenprov\ProfilKepegawaian\Http\Middleware;

use Closure;

/**
 * The ProfilKepegawaianMiddleware class.
 *
 * @package Bantenprov\ProfilKepegawaian
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class ProfilKepegawaianMiddleware
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
