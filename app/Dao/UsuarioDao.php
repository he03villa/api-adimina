<?php

namespace App\Dao;

use App\Mail\Email;
use App\Models\Usuario;
use App\Models\UsuarioHasRol;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use stdClass;

class UsuarioDao {
    public function getUserEmail($email) {
        $user = Usuario::where('email', $email)->first();
        return $user;
    }

    public function getUser($id) {
        $user = Usuario::where('id', $id)->first();
        return $user;
    }

    public function create(array $data) {
        $password = "sha1(concat(sha1('$data[email]'), sha1('$data[password]')))";
        $datos = [
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'fecha_nacimeinto' => $data['fecha'],
            'password' => DB::raw($password),
            'fecha_creacion' => DB::raw('current_timestamp'),
            'telefono' => $data['telefono'],
        ];
        $user = Usuario::create($datos);
        $dataUserHasRol = [
            "usuario_id" => $user->id,
            "rol_id" => 2
        ];
        UsuarioHasRol::create($dataUserHasRol);
        /* $fecha = getdate();
        $objEmail = new stdClass();
        $objEmail->id = $user->id;
        $objEmail->yerd = $fecha['year'];
        $objEmail->html = 'mails.registro_propietario';
        $objEmail->titulo = 'Bienvenido a Admina';
        $objEmail->from = 'info@admina.com';
        Mail::to('he03vila@gmail.com')->send(new Email($objEmail)); */
        return $user;
    }

    public function activarUser($id) {
        $data = ["status" => 1];
        $user = $this->getUser($id);
        return $user->update($data);
    }

    public function login(array $data) {
        $password = "sha1(concat(sha1('$data[email]'), sha1('$data[password]')))";
        $where = [
            ['email', $data["email"]],
            ['password', DB::raw($password)]
        ];
        $user = Usuario::where($where)->first();
        return $user;
    }

    public function update(array $data, $id) {
        $datos = [
            'nombre' => $data['nombre'],
            'numero_documento' => $data['numero_documento'],
            'tipo_documentacion_id' => $data['tipo_documento'],
            'telefono' => $data['telefono'],
        ];
        $user = $this->getUser($id);
        $user->update($datos);
        return $user;
    }

    public function updatePassword(array $data) {
        $user = $this->getUser($data['id']);
        $email = $user->email;
        $password = "sha1(concat(sha1('$email'), sha1('$data[newPassword]')))";
        $datos = [
            'password' => DB::raw($password),
        ];
        $user->update($datos);
        return $user;
    }
}