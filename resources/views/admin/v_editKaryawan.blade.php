@extends('layout.v_template')

@section('title','Edit Karyawan|Laundry Aja')
    

@section('content')

<form action="{{route('Karyawan.updateKaryawan', $user->id)}}" method="POST">
    @csrf
    @method('patch')
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                         <span class="input-group-text" id="name">Nama</span>
                        </div>
                            <input type="text" name="name" class="form-control" placeholder="Masukkan Nama" value="{{ old('name') ?? $user->name}}" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <span class="input-group-text" id="name">Email</span>
                    </div>
                        <input type="email" name="email" class="form-control" placeholder="Masukkan Email" value="{{ old('email') ?? $user->email}}"  aria-label="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                 <span class="input-group-text" id="name">Password</span>
                </div>
                    <input type="password" name="password" value="{{ old('password') ?? $user->password}}" class="form-control" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Alamat</span>
        </div>
        <input type="textarea" name="address" class="form-control" placeholder="" value="{{ old('address') ?? $user->address}}" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
      </div>


      <div class="input-group mb-3">
        <div class="input-group-prepend">
             <span class="input-group-text" id="name">No Telepon</span>
            </div>
                <input type="text" name="telephone" class="form-control" placeholder="" value="{{ old('telephone') ?? $user->telephone}}" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
</div>

<div class="input-group mb-3">
    <div class="input-group-prepend">
      <label class="input-group-text" for="inputGroupSelect01">Role</label>
    </div>
    <select class="custom-select" name="role" value="{{ old('role') ?? $user->role}}" id="inputGroupSelect01">
      <option selected>Pilih</option>
      <option value="1">Admin</option>
      <option value="2">Kasir</option>
    </select>
  </div>
  <br>
  <br>
  <button type="submit" class="btn btn-success" id="editkaryawan">Ubah</button>
    </form>
    @endsection