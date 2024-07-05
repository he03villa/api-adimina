<?php

namespace App\Dao;
use App\Models\TipoPropiedad;

class TipoPropiedadDao {
    public function getAll() {
        return TipoPropiedad::all();
    }
}