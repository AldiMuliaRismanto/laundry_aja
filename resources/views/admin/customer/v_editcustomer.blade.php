@extends('layout.v_template')

@section('title','Edit Karyawan|Laundry Aja')
    

@section('content')

<form action="{{route('Customer.updatecustomer', $customer->id)}}" method="POST">
    @csrf
    @method('patch')
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                         <span class="input-group-text" id="name">Nama Konsumen</span>
                        </div>
                            <input type="text" name="name" class="form-control" placeholder="Masukkan Nama" value="{{ old('name') ?? $customer->name}}" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
            </div>


    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Alamat</span>
        </div>
        <input type="textarea" name="address" class="form-control" placeholder="Masukkan Alamat" value="{{ old('address') ?? $customer->address}}" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
      </div>


      <div class="input-group mb-3">
        <div class="input-group-prepend">
             <span class="input-group-text" id="name">Nomor Telepon</span>
            </div>
                <input type="text" name="telephone" class="form-control" placeholder="" value="{{ old('telephone') ?? $customer->telephone}}" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
</div>


  <br>
  <br>
  <button type="submit" class="btn btn-success" id="editcustomer">Ubah</button>
    </form>
    @endsection