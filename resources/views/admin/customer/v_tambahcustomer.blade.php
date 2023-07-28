@extends('layout.v_template')

@section('title','Tambah Konsumen')
    

@section('content')

<form action="{{route('Customer.addcustomer')}}" method="POST">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                         <span class="input-group-text" id="name">Nama Konsumen</span>
                        </div>
                            <input type="text" name="name" class="form-control" 
                            placeholder="Masukkan Nama Konsumen" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <span class="input-group-text" id="name">Alamat</span>
                    </div>
                        <input type="text" name="address" class="form-control" 
                        placeholder="Masukkan Alamat" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <span class="input-group-text" id="name">Nomor Telepon</span>
                    </div>
                        <input type="text" name="telephone" class="form-control" 
                        placeholder="Masukkan Nomor Telepon" aria-label="exampleInputEmail1" 
                        aria-describedby="emailHelp">
        </div>
   
  <br>
  <br>
  <button type="submit" class="btn btn-success" id="tambahcustomer">Tambah</button>
    </form>
    @endsection

    