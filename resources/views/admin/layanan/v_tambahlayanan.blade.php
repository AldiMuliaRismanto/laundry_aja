@extends('layout.v_template')

@section('title','Tambah Layanan')
    

@section('content')

<form action="{{route('Layanan.addLayanan')}}" method="POST">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                         <span class="input-group-text" id="name">Id Jenis Layanan</span>
                        </div>
                            <input type="text" name="id_service_type" class="form-control" placeholder="Masukkan Nama" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <span class="input-group-text" id="name">Nama Layanan</span>
                    </div>
                        <input type="email" name="name_service" class="form-control" placeholder="Masukkan Email" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                 <span class="input-group-text" id="name">Harga</span>
                </div>
                    <input type="password" name="price" class="form-control" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    
  <br>
  <br>
  <button type="submit" class="btn btn-success" id="tambahlayanan">Tambah</button>
    </form>
    @endsection

    