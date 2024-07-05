<?php

namespace App\Http\Middleware;

use App\Dao\UsuarioDao;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidarExisteUserIdMiddleware
{
    protected $_userDao;

    public function __construct(UsuarioDao $usuarioDao)
    {
        $this->_userDao = $usuarioDao;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $res = $request->all();
        $usuario = $this->_userDao->getUser($res['id']);
        if ($usuario == null) {
            return response()->json(['message' => 'El usuario no existe'], 400);
        }
        return $next($request);
    }
}
