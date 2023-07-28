<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

//use App\Models\Customer;
//use App\Http\Requests\StoreCustomerRequest;
//use App\Http\Requests\UpdateCustomerRequest;

//Halaman Khusus Akses Admin 

class CustomerController extends Controller
{
    public function getCustomer()
    {
        // $datacustomer = $customer->get();

        return view ('admin.customer.v_customer');
        


    }





//Halaman Khusus Kasir 
   
    public function dataCustomer()
    {
        return view ('kasir.customer.v_customer');
    }
}
