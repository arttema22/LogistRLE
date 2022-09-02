<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller {

    public function login(Request $request) {
        if (Auth::check()) { // если пользователь уже аутентифицирован
            return redirect()->intended(route('dashboard')); // переход в панель
        }
        $formFields = $request->only(['email', 'password']);
        if (Auth::attempt($formFields)) {
            return redirect()->intended(route('dashboard'));
        }
        return redirect(route('user.login'))->withErrors([
                    'email' => 'Не удалось авторизоваться'
        ]);
    }

}
