@extends('layout.v_template')

@section('title','Tambah Kasir')
    

@section('content')

<form action="{{route('Karyawan.addKaryawan')}}" method="POST">
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
                     <span class="input-group-text" id="name">Email</span>
                    </div>
                        <input type="email" name="email" class="form-control" placeholder="Masukkan Email" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                 <span class="input-group-text" id="name">Password</span>
                </div>
                    <input type="password" name="password" class="form-control" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
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
                <input type="text" name="telephone" class="form-control" placeholder="" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
</div>

<div class="input-group mb-3">
    <div class="input-group-prepend">
      <label class="input-group-text" for="inputGroupSelect01">Role</label>
    </div>
    <select class="custom-select" name="role" id="inputGroupSelect01">
      <option selected>Pilih</option>
      <option value="1">Admin</option>
      <option value="2">Kasir</option>
    </select>
  </div>
  <br>
  <br>
  <button type="submit" class="btn btn-success" id="tambahkaryawan">Tambah</button>
    </form>
    @endsection

    