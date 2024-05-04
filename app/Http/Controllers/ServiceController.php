<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function index()
    {
        return view('service.index', [
            'count_actif' => auth()->user()->services()->where('status', true)->count(),
            'count_inactif' => auth()->user()->services()->where('status', false)->count(),
        ]);
    }
}
