@extends('layout.v_template')

@section('title','Tambah Layanan')
    

@section('content')

<form action="{{route('LayananaddLayanan')}}" method="POST">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                         <span class="input-group-text" id="name">Nama Layanan</span>
                        </div>
                            <input type="text" name="name_service" class="form-control" 
                            placeholder="Masukkan Nama" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <span class="input-group-text" id="name">Harga</span>
                    </div>
                        <input type="text" name="price" class="form-control" 
                        placeholder="Masukkan Harga" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <span class="input-group-text" id="name">Durasi</span>
                    </div>
                        <input type="text" name="duration" class="form-control" 
                        placeholder="Masukkan Durasi" aria-label="exampleInputEmail1" 
                        aria-describedby="emailHelp">
        </div>

        
  <br>
  <br>
  <button type="submit" class="btn btn-success" id="tambahLayanan">Tambah</button>
    </form>
    @endsection

    