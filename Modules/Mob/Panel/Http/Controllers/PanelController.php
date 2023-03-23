<?php

namespace Mob\Panel\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function index()
    {
        return view('Panel::index');
    }
}
