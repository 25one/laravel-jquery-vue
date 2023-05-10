<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ {
   Models\User
};

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show dashboard-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $users = User::get();

        return view('admin.index', ['users' => $users]);
    }

}
