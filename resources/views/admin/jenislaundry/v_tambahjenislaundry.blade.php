@extends('layout.v_template')

@section('title','Tambah Jenis Laundry')
    

@section('content')

<form action="{{route('Laundry.addLaundry')}}" method="POST">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                         <span class="input-group-text" id="name">Nama Jenis Laundry</span>
                        </div>
                            <input type="text" name="name_service_type" class="form-control" placeholder="Masukkan Nama" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
            </div>


<div class="input-group mb-3">
    <div class="input-group-prepend">
      <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
    </div>
    <select class="custom-select" name="category" id="inputGroupSelect01">
      <option selected>Pilih</option>
      <option value="1">Reguler</option>
      <option value="2">Fast</option>
    </select>
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
             <span class="input-group-text" id="name">Durasi</span>
            </div>
                <input type="text" name="duration" class="form-control" placeholder="" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
</div>

  <br>
  <br>
  <button type="submit" class="btn btn-success" id="tambahjenislaundry">Tambah</button>
    </form>
    @endsection