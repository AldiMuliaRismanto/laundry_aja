<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;

class TransactionController extends Controller
{
    public function getTransaksi(Transaction $transaction)
    {
        $datatransaksi = $transaction->get();

        return view ('admin.transaksi.v_transaksi', compact('datatransaksi'));
    }

   
}
