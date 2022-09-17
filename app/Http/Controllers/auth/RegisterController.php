<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{

    public function save(Request $request)
    {
        if (Auth::check()) { // если пользователь уже аутентифицирован
            return redirect(route('home')); // переход в панель
        }
        $validateFields = $request->validate([
            'last-name' => 'required',
            'first-name' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
            //'password' => 'required|Password::min(8)->mixedCase()'
        ]);
        if (User::where('email', $validateFields['email'])->exists()) {
            return redirect(route('user.registration'))->withErrors([
                'email' => 'Такой email уже существует'
            ]);
        }
        $validateFields['role_id'] = 2;
        // dd($validateFields);
        $user = User::create($validateFields);
        $profile = new Profile;
        $profile->user_id = $user->id;
        $profile->last_name = $request->input('last-name');
        $profile->first_name = $request->input('first-name');
        $profile->sec_name = $request->input('sec-name');
        $profile->save();
        if ($user) {
            Auth::login($user);
            return redirect(route('home'));
        }
        return redirect(route('user.login'))->withErrors([
            'formError' => 'Произошла ошибка при сохранении пользователя'
        ]);
    }

    public function save_user(Request $request)
    {
        $validateFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
            //'password' => 'required|Password::min(8)->mixedCase()'
        ]);
        if (User::where('email', $validateFields['email'])->exists()) {
            return redirect(route('user.registration'))->withErrors([
                'email' => 'Такой email уже существует'
            ]);
        }
        $user = User::create($validateFields);
        return redirect(route('user.list'))->with('success', 'Создан новый пользователь');
    }
}
