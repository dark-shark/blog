<?php

namespace Mob\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function __invoke(): \Illuminate\Http\RedirectResponse
    {
        Auth::logout();
        return to_route('home.index');
    }
}
