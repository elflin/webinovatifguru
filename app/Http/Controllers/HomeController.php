<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        $role = Auth::user()->isAdmin;
        if($role == 1){
            return redirect()->to('admin');
        } else if($role == 0){
            return redirect()->to('user');
        } else {
            return redirect()->to('welcome');
        }
    }
}
