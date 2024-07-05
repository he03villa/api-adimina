<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dao\RolDao;

class RolController extends Controller
{
    protected $rolDao;

    public function __construct(RolDao $RolDao)
    {
        $this->rolDao = $RolDao;
    }

    public function index() {
        $rol = $this->rolDao->getAll();
        return response()->json($rol, 200);
    }
}
