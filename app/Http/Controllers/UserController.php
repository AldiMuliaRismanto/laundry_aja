<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function getKaryawan(User $user)
    {
        $datauser = $user->get();
        $judul = 'Hapus Data!';
        $text = "Apakah Anda Yakin ingin Menghapusnya?";
        confirmDelete($judul, $text);

        return view ('admin.v_karyawan', compact('datauser'));
    }

    public function tambahKaryawan()
    {
        return view('admin.v_tambahkaryawan');
    }

    public function addKaryawan(User $user, Request $userRequest)
    {
        $data = $userRequest->all();
        $data['password'] = bcrypt($userRequest->password);
        $user->create($data);
        Alert::success('Berhasil', "Data Berhasil Ditambahkan");
        return redirect(route('Karyawan.getKaryawan'));
    }

    public function deleteKaryawan(User $user)
    {
        $user->delete();
        Alert()->success('Berhasil!', 'Data Berhasil Di Hapus');
        return back();
    }

    public function editKaryawan(User $user)
    {
        return view('admin.v_editKaryawan', compact('user'));
    }

    public function updateKaryawan(User $user, Request $userRequest )
    {
        $data = $userRequest->all();

        if ($userRequest->password) {
            $data['password'] = bcrypt($userRequest->password);

            $user->update($data);
            Alert::success('Berhasil', "Data Berhasil Diubah");
            return redirect(route('Karyawan.getKaryawan'));
        }
    }




    
}
