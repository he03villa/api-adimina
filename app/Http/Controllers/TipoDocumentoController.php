<?php

namespace App\Http\Controllers;

use App\Dao\TipoDocumentoDao;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TipoDocumentoController extends Controller
{
    protected $_tipoDocumentoDao;

    public function __construct(TipoDocumentoDao $tipoDocumentoDato)
    {
        $this->_tipoDocumentoDao = $tipoDocumentoDato;
    }

    public function index() {
        return $this->_tipoDocumentoDao->getAll();
    }
}
