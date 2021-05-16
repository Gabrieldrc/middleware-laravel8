<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Subscribed
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
        if ( ! $request->user()->subscribed) {
            return abort(403, 'Sin suscripción activa');
        }

        return $next($request);
        /**
         * 403: La solicitud fue legal, fue correcta,
         * pero el servidor no la responderá porque el
         * cliente no tiene los privilegios o permisos.
         */
    }
}
