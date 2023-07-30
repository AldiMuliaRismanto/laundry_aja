@extends('layout.v_template')

@section('title','Tambah Customer')
    

@section('content')

<form action="{{route('Customer.addcustomer')}}" method="POST">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                         <span class="input-group-text" id="name">Nama</span>
                        </div>
                            <input type="text" name="name" class="form-control" placeholder="Masukkan Nama" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
            </div>


    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Alamat</span>
        </div>
        <input type="text" name="address" class="form-control" placeholder="Masukkan Alamat" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
      </div>


      <div class="input-group mb-3">
        <div class="input-group-prepend">
             <span class="input-group-text" id="name">No Telepon</span>
            </div>
                <input type="text" name="telephone" class="form-control" placeholder="Masukan No Telp" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
</div>

  <br>
  <br>
  <button type="submit" class="btn btn-success" id="tambahcustomer">Tambah</button>
    </form>
    @endsection

    