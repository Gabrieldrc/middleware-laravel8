<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyAge
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
        if ($request->get('age') < 18) {
            return redirect('guidelines');
        }

        return $next($request);
        /**
         * Aquí dirigimos al usuario
         * a una vista que tenga los
         * textos apropiados para explicarle
         * porqué no podemos seguir con el
         * registro.
         */
    }
}
