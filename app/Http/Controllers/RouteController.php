<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class RouteController extends Controller
{
    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.index');
    }

    public function not_found(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.404');
    }

    public function blank(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.blank');
    }

    public function buttons(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.buttons');
    }

    public function cards(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.cards');
    }

    public function charts(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.charts');
    }

    public function forget_password(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('forget-password');
    }

    public function login(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('login');
    }

    public function register(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('register');
    }

    public function tables(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.tables');
    }

    public function utilities_animation(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.utilities-animation');
    }

    public function utilities_border(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.utilities-border');
    }

    public function utilities_color(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.utilities-color');
    }

    public function utilities_other(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.utilities-other');
    }

}
