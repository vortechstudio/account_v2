<?php

namespace App\Http\Controllers;

use App\Models\User\User;
use IvanoMatteo\LaravelDeviceTracking\LaravelDeviceTracking;

class AccountController extends Controller
{
    public function index()
    {
        return view('account.index', [
            "user" => User::with('latestAuthentication')->find(\Auth::id())
        ]);
    }

    public function history()
    {
        return view('account.history');
    }

    public function login()
    {
        $tracking = new LaravelDeviceTracking();
        return view('account.login', [
            'actual' => $tracking->findCurrentDevice(),
            'devices' => auth()->user()->device()->whereNot('ip', $tracking->findCurrentDevice()->ip)
            ->orWhereNot('device_type', $tracking->findCurrentDevice()->device_type)
            ->get()
        ]);
    }
}
