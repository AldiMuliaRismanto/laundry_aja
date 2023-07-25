<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

//use App\Models\Customer;
//use App\Http\Requests\StoreCustomerRequest;
//use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
    public function getCustomer()
    {
        // $datacustomer = $customer->get();

        return view ('Customer.v_customer', compact('datacustomer'));
    }
   
}
