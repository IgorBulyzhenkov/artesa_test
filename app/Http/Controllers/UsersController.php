<?php

namespace App\Http\Controllers;

class UsersController extends Controller
{
    public function profile(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('dashboard.profile');
    }
}
