<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class ValidarActualizarUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required',
            'numero_documento' => 'required',
            'tipo_documento' => 'required',
            'telefono' => 'required'
        ], [
            'required' => 'El :attribute es requerido.'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }
        return $next($request);
    }
}