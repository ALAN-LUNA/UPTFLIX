<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function inicio()
    {
        return view("inicio");
    }

    public function registro()
    {
        return view("registro");
    }

    public function login()
    {
        return view("login");
    }

    public function menu()
    {
        return view("menu");
    }

    public function registroForm(Request $datos)
    {
        if (!$datos->correo || !$datos->password1 || !$datos->password2)
            return view("registro", ["estatus" => "error", "mensaje" => "¡Falta información!"]);

        $usuario = Usuario::where('correo', $datos->correo)->first();
        if ($usuario)
            return view("registro", ["estatus" => "error", "mensaje" => "¡El correo ya se encuentra registrado!"]);

        $correo = $datos->correo;
        $password2 = $datos->password2;
        $password1 = $datos->password1;

        if ($password1 != $password2) {
            return view("registro", ["estatus" => "error", "mensaje" => "¡Las contraseñas son diferentes!"]);
        }

        $usuario = new Usuario();
        $usuario->correo =  $correo;
        $usuario->password = bcrypt($password1);
        $usuario->password2 = bcrypt($password2);
        $usuario->save();
        return view("login", ["estatus" => "success", "mensaje" => "¡Cuenta Creada!"]);
    }

    public function verificarCredenciales(Request $datos)
    {
        if (!$datos->correo || !$datos->password)
            return view("login", ["estatus" => "error", "mensaje" => "¡Completa los campos!"]);

        $usuario = Usuario::where("correo", $datos->correo)->first();
        if (!$usuario)
            return view("login", ["estatus" => "error", "mensaje" => "¡El correo no esta registrado!"]);

        if (!Hash::check($datos->password, $usuario->password))
            return view("login", ["estatus" => "error", "mensaje" => "¡Datos incorrectos!"]);

        Session::put('usuario', $usuario);

        if (isset($datos->url)) {
            $url = decrypt($datos->url);
            return redirect($url);
        } else {
            return redirect()->route('menu');
        }
    }

    public function cerrarSesion()
    {
        if (Session::has('usuario'))
            Session::forget('usuario');
        return view("inicio");
    }

}