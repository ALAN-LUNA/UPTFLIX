<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AdministradorController extends Controller
{
    public function loginAdmin()
    {
        return view("loginAdmin");
    }

    public function verificarAdmininstrador(Request $datos)
    {
        $admin = Administrador::where("correo", $datos->correo)->first();
        if (!$admin)
            return view("loginAdmin", ["estatus" => "error", "mensaje" => "¡El correo no esta registrado!"]);
    }
}
