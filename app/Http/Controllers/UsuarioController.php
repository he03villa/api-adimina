<?php

namespace App\Http\Controllers;

use App\Dao\UsuarioDao;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    protected $_usuarioDao;

    public function __construct(UsuarioDao $usuarioDao)
    {
        $this->_usuarioDao = $usuarioDao;
    }

    public function showUser($id) {
        $user = $this->_usuarioDao->getUser($id);
        return response()->json($user, 200);
    }

    public function login(Request $request) {
        $req = $request->all();
        $user = $this->_usuarioDao->login($req);
        if ($user != null) {
            $user["conjunto"] = 0;
            return response()->json($user, 200);
        } else {
            $user = ['message' => 'El usuairo no existe'];
            return response()->json($user, 400);
        }
    }

    public function saveUser(Request $request) {
        $req = $request->all();
        $user = $this->_usuarioDao->create($req);
        return response()->json($user, 200);
    }

    public function activarUser(Request $request) {
        $req = $request->all();
        $user = $this->_usuarioDao->activarUser($req['id']);
        return response()->json(['message' => 'El usuairo se activo'], 200);
    }

    public function updateUser(Request $request, $id) {
        $req = $request->all();
        $user = $this->_usuarioDao->update($req, $id);
        return response()->json($user, 200);
    }

    public function updateUserPassword(Request $request) {
        $req = $request->all();
        $this->_usuarioDao->updatePassword($req);
        return response()->json(['message' => 'La contraseña se actulizo'], 200);
    }
}
