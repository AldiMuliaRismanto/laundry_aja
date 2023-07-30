<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Service;

class TransactionController extends Controller
{
    public function getTransaksi(Transaction $transaction)
    {
        $dataTransaksi = $transaction->get();

        return view ('admin.transaksi.v_transaksi', compact('dataTransaksi'));
    }

    public function tambahTransaksi(Customer $customer, Service $service, User $user)
    {
        $fetchcustomer = $customer->get();
        $fetchservice = $service->get();
        $fetchuser = $user->get();

        return view ('admin.transaksi.v_tambahtransaksi', compact('fetchuser', 'fetchservice', 'fetchcustomer'));

    }

    public function addTransaksi(Transaction $transaction, Request $transactionrequest)
    {
        $datatransaksi = $transactionrequest->all();
        $transaction->create($datatransaksi);
        Alert::success('Berhasil', "Data Berhasil Ditambahkan");
        return redirect(route('Transaksi.getTransaksi'));
    }

    public function edit(Transaction $transaction, Customer $customer, User $user, Service $service)
    {
        $fetchcustomer = $customer->get();
        $fetchuser = $user->get();
        $fetchservice = $service->get();
        return view('admin.transaksi.v_editTransaksi', compact('fetchuser', 'fetchcustomer', 'fetchservice'));
        
    }

    public function updateTransaksi(Transaction $transaction, Request $transactionrequest)
    {
        $data = $transactionrequest->all();
        $transaction->update($data);
        Alert::success('Berhasil', "Data Berhasil Diubah");
        return redirect(route('Transaksi.getTransaksi'));

    }

    public function deleteTransaksi(Transaction $transaction)
    {
        $transaction->delete();
        Alert::success('Berhasil', "Data Berhasil Dihapus");
        return back();
    }


   
}
