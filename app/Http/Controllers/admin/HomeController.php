<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Admin;
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
        $this->middleware('auth:admin');  //変更
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('admin.home');  //変更
        $users = User::All();
        return view('admin.home', ['users' => $users]);  //変更
    }

    //
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->to('admin/home');
        // return redirect()->route('home');
        // return redirect()->route('admin/home');
    }
// public function redirectTest(){
//     return redirect("https://google.com");
// }
}
