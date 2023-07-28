<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class AuthController extends Controller
{
    public function index()
    {
        return view('auth.v_login');

        /**
         * Write code on Method
         *
         * @return response()
         */
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            toast('Login Berhasil', 'success');
            return redirect()->intended('dashboard');
        }
        toast('Login Gagal', 'error');
        return Redirect::back();
    }

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function dashboard()
    {
        $user_id = auth()->user()->id;
        $role = User::where('id', $user_id)->value('role');
        // dd($role);

        if ($role == 'admin') {
            return view('admin.v_dashboard');
        } else if ($role == 'cashier') {
            return view('kasir.v_dashboard');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');

        /**
         * Write code on Method
         *
         * @return response()
         */
    }



    public function logout()
    {
        Session::flush();
        Auth::logout();

        toast('Logout Berhasil', 'success');
        return Redirect('login');
    }
}
