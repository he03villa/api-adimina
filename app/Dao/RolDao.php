<?php

namespace App\Dao;
use App\Models\Rol;

class RolDao {
    public function getAll() {
        return Rol::all();
    }

    public function getById($id) {
        return Rol::find($id);
    }

    public function create(array $data) {
        return Rol::create($data);
    }

    public function update(array $data, $id) {
        $rol = $this->getById($id);
        return $rol->update($data);
    }

    public function delete($id) {
        return Rol::destroy($id);
    }
}