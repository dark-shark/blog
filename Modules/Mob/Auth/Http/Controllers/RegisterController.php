<?php

namespace Mob\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Mob\Auth\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Mob\Auth\Services\RegisterService;

class RegisterController extends Controller
{
    public function view()
    {
        return view('Auth::register');
    }

    public function register(RegisterRequest $request, RegisterService $registerService)
    {
        $user = $registerService->generateUser($request);
        auth()->loginUsingId($user->id);
        event(new Registered($user));
        return redirect()->route('auth.verify.email');
    }
}
