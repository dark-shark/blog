<?php

namespace Mob\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Mob\Auth\Http\Requests\SendEmailPasswordRecoveryRequest;
use Mob\Auth\Http\Requests\PasswordUpdateRequest;

class ResetController extends Controller
{
    public function view()
    {
        return view('Auth::password.send-email');
    }

    public function sendEmail(SendEmailPasswordRecoveryRequest $request)
    {
        $reset = Password::sendResetLink($request->only('email'));
        return $reset === Password::RESET_LINK_SENT ?
            back()->with(['message' => 'لینک بازیابی با موفقیت به ایمیل شما ارسال شد']) :
            back()->withErrors(['error' => 'یک مشکلی در سیستم رخ داده است لطفا دوباره تلاش کنید']);
    }

    public function reset(Request $request)
    {
        $token = $request->token;
        $email = $request->email;
        return view('Auth::password.reset', compact(['token', 'email']));
    }

    public function update(PasswordUpdateRequest $request)
    {
        $reset = Password::reset(
            $request->only('token', 'email', 'password', 'password_confirmation'),
            static function ($user, $password)
            {
                $user->forceFill(['password' => bcrypt($password)])->setRememberToken(Str::random(60));
                $user->save();
                event(new ResetPassword($user));
            }
        );

        dd($reset);
        return $reset === Password::PASSWORD_RESET ?
            to_route('login')->with(['success_reset_password' => 'رمز عبور شما با موفقیت تغییر کرد.']) :
            back()->with(['error' => 'یک مشکلی در سیستم رخ داده است لطفا دوباره تلاش کنید']);
    }
}
