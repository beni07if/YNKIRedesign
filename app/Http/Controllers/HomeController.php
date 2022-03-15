<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;

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
        return view('AdminPanel.Profil.Profil');
    }

    public function DashboardAdminPanel()
    {
        // return view('AdminPanel.DashboardAdminPanel');
        return view('AdminPanel.Profil.Profil');
    }

    public function ChangePasswordSubmit(Request $request)
    {
        if (!(Hash::check($request->get('currentPassword'), Auth::user()->password))) {
            return back()->with('error', 'Password lama yang anda masukan salah!');
        }
        if (strcmp($request->get('currentPassword'), $request->get('newPassword')) == 0) {
            return back()->with('error', 'Password lama tidak boleh sama dengan password baru');
        }
        // $request->validate([
        //     'currentPasswrod' => 'required',
        //     'newPassword' => 'required|string|min:4|confirmed'
        // ]);
        $user = Auth::user();
        $user->password = bcrypt($request->get('newPassword'));
        $user->save();
        return back()->withSuccess('Password berhasil diubah..');
    }
}
