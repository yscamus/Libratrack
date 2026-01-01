<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Resource;
use App\Models\ListModel;

class AdminController extends Controller
{

    public function store(LoginRequest $request): RedirectResponse
{
    $request->authenticate();
    $request->session()->regenerate();

    if (auth()->user()->role === 'admin') {
        return redirect()->intended(route('admin.admin'));
    }

    return redirect()->intended(route('dashboard'));
}

    public function index()
    {
        $usersCount = \App\Models\User::count(); // Count all users
        // Add any other counts you need, e.g. resources or lists
        $resourcesCount = \App\Models\Resource::whereNull('deleted_at')->count();
        $listsCount = \App\Models\ListModel::count();

        return view('admin.dashboard', compact('usersCount', 'resourcesCount', 'listsCount'));
    }

}
