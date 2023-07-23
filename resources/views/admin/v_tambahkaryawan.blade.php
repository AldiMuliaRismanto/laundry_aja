@extends('layout.v_template')

@section('title','Tambah Kasir')
    

@section('content')

<form action="" method="POST">
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


    </form>
    @endsection