<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;


class CustomerController extends Controller
{
    public function getcustomer(Customer $customer)
    {
        $datacustomer = $customer->get();

        return view ('admin.customer.v_customer', compact('datacustomer'));
    }

    public function datacustomer()
    {
        return view ('admin.customer.v_customer');
    }

    public function tambahcustomer()
    {
        return view('admin.customer.v_tambahcustomer');
    }

    public function addcustomer(Customer $customer, Request $customerRequest)
    {
        $datacustomer = $customerRequest->all();
        $customer->create($datacustomer);
        Alert::success('Berhasil', "Data Berhasil Ditambahkan");
        return redirect(route('Customer.getcustomer'));
    }

    public function editcustomer(Customer $customer)
    {
        return view('admin.customer.v_editcustomer', compact('customer'));
    }

    public function updatecustomer(Customer $customer, Request $customerRequest)
    {
        $datacustomer = $customerRequest->all();
        $customer->update($datacustomer);
        Alert::success('Berhasil', "Data Berhasil Diubah");
        return redirect(route('Customer.getcustomer'));
    }

    public function deletecustomer(Customer $customer)
        {
            $customer->delete();
            Alert()->success('Berhasil', 'Data Berhasil Di Hapus');
            return back();
        }
}

    