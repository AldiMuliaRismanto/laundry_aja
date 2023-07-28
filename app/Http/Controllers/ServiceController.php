<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getLayanan(Service $service)
    {
        $datalayanan = $service->get();

        return view ('admin.layanan.v_layanan', compact('datalayanan'));
    }

    public function tambahLayanan()
    {
        return view('admin.layanan.v_tambahlayanan');
    }

    public function addLayanan(Service $service, Request $serviceRequest)
    {
        $datalayanan= $serviceRequest->all();
        $service->create($datalayanan);
        Alert::success('Berhasil', "Data Berhasil Ditambahkan");
        return redirect(route('Layanan.getLayanan'));
    }

    public function editLayanan(Service $service)
    {
        return view('admin.layanan.v_editlayanan', compact('service'));
    }

    public function updateLayanan(Service $service, Request $serviceRequest )
    {
        $datalayanan = $serviceRequest->all();
            $service->update($datalayanan);
            Alert::success('Berhasil', "Data Berhasil Diubah");
            return redirect(route('Layanan.getLayanan'));
    }

    public function deleteLayanan(Service $service)
        {
            $service->delete();
            Alert()->success('Berhasil', 'Data Berhasil Di Hapus');
            return back();
        }
}
