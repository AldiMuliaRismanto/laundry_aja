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
        $data = $servicetypeRequest->all();
        $servicetype->create($data);
        Alert::success('Berhasil', "Data Berhasil Ditambahkan");
        return redirect(route('Laundry.getLaundry'));
    }

    public function deleteLaundry(ServiceType $servicetype)
    {
        $servicetype->delete();
        Alert()->success('Berhasil!', 'Data Berhasil Di Hapus');
        return back();
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceType $serviceType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceType $serviceType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceTypeRequest $request, ServiceType $serviceType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceType $serviceType)
    {
        //
    }
}
