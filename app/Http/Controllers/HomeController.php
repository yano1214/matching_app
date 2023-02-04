<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();


        $userCount = $users->count(); // 追加
        $from_user_id = Auth::id(); // 追加

        return view('home', compact('users','userCount','from_user_id'));
    }
}
// $authid=Auth::id();
// $users=User::where('id','!=','authid')->get();
// $users = User::all()->ignore(Auth::id());
