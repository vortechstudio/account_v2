<?php

namespace App\Http\Controllers;

use App\Models\User\User;

class AccountController extends Controller
{
    public function index()
    {
        return view('account.index', [
            "user" => User::with('latestAuthentication')->find(\Auth::id())
        ]);
    }
}
