@extends('layout.v_template')

@section('title','Edit Layanan | Laundry Aja')
    

@section('content')

<form action="{{route('Layanan.updateLayanan', $service->id)}}" method="POST">
    @csrf
    @method('patch')
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                         <span class="input-group-text" id="name">Nama Layanan  </span>
                        </div>
                            <input type="text" name="name_service" class="form-control" placeholder="Masukkan Nama" value="{{ old('name_service') ?? $service->name_service}}" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
            </div>


    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Harga</span>
        </div>
        <input type="textarea" name="price" class="form-control" placeholder="Masukkan Harga" value="{{ old('price') ?? $service->price}}" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
      </div>


      <div class="input-group mb-3">
        <div class="input-group-prepend">
             <span class="input-group-text" id="name">Durasi</span>
            </div>
                <input type="text" name="duration" class="form-control" placeholder="Masukkan Durasi Pekerjaan" value="{{ old('duration') ?? $service->duration}}" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
</div>


  <br>
  <br>
  <button type="submit" class="btn btn-success" id="editlayanan">Ubah</button>
    </form>
    @endsection