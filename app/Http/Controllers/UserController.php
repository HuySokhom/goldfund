<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $userSession = auth()->user();
        return view('layouts.user-dashboard', compact('userSession'));
    }
}
