<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use  App\Models\User;
use App\Models\PaymentMethod;

class RegisterController extends Controller
{
    public function create()
    {
        return view('components.auth.create');
    }

    public function store(Request $request)
    {
        
        if ($request->password != $request->password_confirmation){
            return view('components.auth.create');
        }

        /*
        Database Insert
        */
        $user = new User();
        $payment_method = new PaymentMethod();
        
        foreach ($request as $data) {
            // Código a ejecutar para cada elemento
        }
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $payment_method->account_type = $request->account_type;
        $payment_method->account_number = $request->account_number;
        $payment_method->due_date = $request->due_date;
        $payment_method->save();
        $user->id_payment_method = $payment_method->id;
        $user->save();
        
        return view('welcome')->with('user', $user->name);
    }
}
