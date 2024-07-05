<?php

namespace App\Dao;
use App\Models\TipoDocumento;

class TipoDocumentoDao {
    public function getAll() {
        return TipoDocumento::all();
    }
}