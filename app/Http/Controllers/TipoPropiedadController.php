<?php

namespace App\Http\Controllers;

use App\Dao\TipoPropiedadDao;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TipoPropiedadController extends Controller
{
    protected $_tipoPropiedadDao;

    public function __construct(TipoPropiedadDao $tipoPropiedadDao) {
        $this->_tipoPropiedadDao = $tipoPropiedadDao;
    }

    public function index() {
        return $this->_tipoPropiedadDao->getAll();
    }
}
