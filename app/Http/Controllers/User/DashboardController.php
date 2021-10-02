<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index() {
        if (Auth::user()) {
            return view('user.survey');
        }

        return redirect()->route('login');
    }

    public function contactUs() {
        if (Auth::user()) {
            return view('user.contactUs');
        }

        return redirect()->route('login');
    }
}
