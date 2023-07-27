@extends('layout.v_template')

@section('title','Edit Jenis Laundry | Laundry Aja')
    

@section('content')

<form action="{{route('Laundry.updateLaundry', $servicetype->id)}}" method="POST">
    @csrf
    @method('patch')
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                         <span class="input-group-text" id="name">Nama Jenis Laundry</span>
                        </div>
                            <input type="text" name="name_service_laundry" class="form-control" 
                            placeholder="Masukkan Nama" value="{{ old('name') ?? $servicetype->name}}" 
                            aria-label="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        

<div class="input-group mb-3">
    <div class="input-group-prepend">
      <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
    </div>
    <select class="custom-select" name="category" value="{{ old('category') ?? $servicetype->category}}" id="inputGroupSelect01">
      <option selected>Pilih</option>
      <option value="1">Regular</option>
      <option value="2">Fast</option>
    </select>
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Durasi</span>
    </div>
    <input type="textarea" name="duration" class="form-control" placeholder="" 
    value="{{ old('duration') ?? $servicetype->duration}}" aria-label="exampleInputEmail1" 
    aria-describedby="emailHelp">
  </div>


  <br>
  <br>
  <button type="submit" class="btn btn-success" id="editLaundry">Ubah</button>
    </form>
    @endsection