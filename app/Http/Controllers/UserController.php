<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getKaryawan(User $user)
    {
        $datauser = $user->get();

        return view ('admin.v_karyawan', compact('datauser'));
    }

    public function tambahKaryawan()
    {
        return view('admin.v_tambahkaryawan');
    }
}
