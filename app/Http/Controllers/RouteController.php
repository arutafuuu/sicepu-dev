<?php

namespace App\Http\Controllers;

class RouteController extends Controller
{
    public function index()
    {
        return view('template.index');
    }

    public function not_found()
    {
        return view('template.404');
    }

    public function blank()
    {
        return view('template.blank');
    }

    public function buttons()
    {
        return view('template.buttons');
    }

    public function cards()
    {
        return view('template.cards');
    }

    public function charts()
    {
        return view('template.charts');
    }

    public function forget_password()
    {
        return view('template.forget-password');
    }

    public function login()
    {
        return view('template.login');
    }

    public function register()
    {
        return view('template.register');
    }

    public function tables()
    {
        return view('template.tables');
    }

    public function utilities_animation()
    {
        return view('template.utilities-animation');
    }

    public function utilities_border()
    {
        return view('template.utilities-border');
    }

    public function utilities_color()
    {
        return view('template.utilities-color');
    }

    public function utilities_other()
    {
        return view('template.utilities-other');
    }

    public function date()
    {
        return view('template.date');
    }

}
