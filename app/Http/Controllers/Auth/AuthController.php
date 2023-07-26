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
            'password' =>'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)){
            toast('Login Berhasil','success');
            return redirect()->intended('dashboard');        

    }
    toast('Login Gagal','error');
    return Redirect::back();
    
            


}

 /**
     * Write code on Method
     *
     * @return response()
     */

     public function dashboard()
     {
        if(Auth::check()){
            return view('admin.v_dashboard');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');

            /**
     * Write code on Method
     *
     * @return response()
     */
     }

     public function registration()
     {
        return view('auth.v_registration');
     }

     public function postRegistration(Request $request)
     {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'address' =>'required',
            'telephone' => 'required',

        ]);

        $data = $request->all();
        $check = $this->create($data);

        toast('Registrasi Berhasil','success');
        return redirect("login");
     }

     public function create(array $data)
     {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'address' => $data['address'],
            'telephone' => $data['telephone'],
        ]);
     }

     public function logout()
     {
        Session::flush();
        Auth::logout();

        toast('Logout Berhasil','success');
        return Redirect('login');
     }

}