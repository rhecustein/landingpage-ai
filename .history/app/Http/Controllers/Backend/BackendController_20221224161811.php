<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;

class BackendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_count = User::count();
        return view('backend.index', compact('user_count'));
    }
}
