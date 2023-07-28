<?php

namespace App\Http\Controllers;

use App\Models\ServiceType;
use App\Http\Requests\StoreServiceTypeRequest;
use App\Http\Requests\UpdateServiceTypeRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;


class ServiceTypeController extends Controller
{
    public function getLaundry(ServiceType $servicetype)
    {
        $datajenislaundry = $servicetype->get();

        return view ('admin.jenislaundry.v_jenislaundry', compact('datajenislaundry'));
    }

    public function tambahlaundry()
    {
        return view('admin.jenislaundry.v_tambahjenislaundry');
    }

    public function addLaundry(ServiceType $servicetype, Request $servicetypeRequest)
    {
        $datajenislaundry= $servicetypeRequest->all();
        $servicetype->create($datajenislaundry);
        Alert::success('Berhasil', "Data Berhasil Ditambahkan");
        return redirect(route('Laundry.getLaundry'));
    }

    public function deleteLaundry(ServiceType $servicetype)
    {
        $servicetype->delete();
        Alert()->success('Berhasil!', 'Data Berhasil Di Hapus');
        return back();
    }



    
    public function editLaundry(ServiceType $servicetype)
    {
        return view('admin.jenislaundry.v_editjenislaundry', compact('datajenislaundry'));
    }

    public function update(ServiceType $servicetype, Request $servicetypeRequest )
    {
        $datajenislaundry = $servicetypeRequest->all();
        if ($servicetypeRequest->password) {
            $datajenislaundry['password'] = bcrypt($servicetypeRequest->password);

            $servicetype->update($datajenislaundry);
            Alert::success('Berhasil', "Data Berhasil Diubah");
            return redirect(route('Laundry.getLaundry'));
        }
    }
}
