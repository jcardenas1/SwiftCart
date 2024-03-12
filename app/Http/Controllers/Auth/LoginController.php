<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){

	    if (Auth::check()) {
	        return view('/');
	    }
	
        return view('components.auth.auth');
	}

    public function login(Request $request)
	{
	    $request->validate([
	        'email' => 'required',
	        'password' => 'required',
	    ]);
        
        echo "Hola";
	    $credentials = $request->only('email', 'password');
	
	    if (Auth::attempt($credentials)) {
	        return redirect()->intended('/')
	            ->withSuccess('Logeado');
	    }
	
	    return redirect("/login")->withSuccess('Los datos introducidos no son correctos');
	}

    public function loged()
	{
	    if (Auth::check()) {
	        return view('/');
	    }
	
	    return redirect("/login")->withSuccess('No tienes acceso, por favor inicia sesión');
    }
}
