@extends('layout.v_template')

@section('title','Edit Transaksi | Laundry Aja')
    

@section('content')

<form action="{{route('Transaksi.updateTransaksi', $transaction->id)}}" method="POST">
    @csrf
    @method('patch')
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Konsumen</label>
         </div>
            <select class="custom-select" name="id_customer" id="inputGroupSelect01">
                <option value="">Pilih Nama</option>
                @foreach($fetchcustomer as $customer)
                <option value="{{$customer->id}}">{{$customer->name}}</option>
                @endforeach
            </select>

    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Tanggal Masuk</label>
            <input type="date" name="date_of_entry" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ now()->format('Y-m-d') }}">

        </div>
    </div>

    <div class="input-group mb-3">  
        <div class="input-group-prepend">
           <label class="input-group-text" for="inputGroupSelect01">Jenis</label>
    </div>
        <select class="custom-select" name="id_service" id="inputGroupSelect01">
           <option value="">Pilih Jenis</option>
           @foreach($fetchservice as $service)
           <option value="{{$service->id}}">{{$service->name_service}}</option>
           @endforeach
        </select>

</div>

<div class="input-group mb-3">  
    <div class="input-group-prepend">
       <label class="input-group-text" for="inputGroupSelect01">Petugas</label>
</div>
    <select class="custom-select" name="id_user" id="inputGroupSelect01">
       <option value="">Pilih Petugas</option>
       @foreach($fetchuser as $user)
       <option value="{{$user->id}}">{{$user->name}}</option>
       @endforeach
    </select>
</div>

<div class="input-group mb-3">
    <div class="input-group-prepend">
         <span class="input-group-text" id="">Jumlah</span>
        </div>
            <input type="type" name="the_amount_of_goods" class="form-control" placeholder="" 
            value="{{old('the_amount_of_goods') ?? $transaction->the_amount_of_goods}}" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
</div>

<div class="input-group mb-3">
<div class="input-group-prepend">
  <label class="input-group-text" for="inputGroupSelect01">Status</label>
</div>
<select class="custom-select" name="role" id="inputGroupSelect01">
  <option selected>Pilih</option>
  <option value="1">Proses Masuk</option>
  <option value="2">Proses Selesai</option>
</select>
</div>

<div class="input-group mb-3">
<div class="input-group-prepend">
     <span class="input-group-text" id="">Total</span>
    </div>
        <input type="number" name="total" class="form-control" placeholder="" value="{{old('transaksi')}}" aria-label="exampleInputEmail1" aria-describedby="emailHelp">
        <span class="input-group-text">Rp</span>
</div>

<div class="input-group mb-3">
<div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Tanggal Diambil</label>
    <input type="date" name="pick_up_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ now()->format('Y-m-d') }}">

</div>

</div>
<br>
<br>
<button type="submit" class="btn btn-success">Tambah</button>
</form>
@endsection


