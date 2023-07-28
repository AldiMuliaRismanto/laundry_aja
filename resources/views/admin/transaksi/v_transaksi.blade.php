@extends('layout.v_template')

@section('title','Transaksi | Laundry Aja')
    

@section('content')

<a href="/Transaksi/tambahTransaksi" class="btn btn-primary btn-sm">Tambah Transaksi</a>

<br><br>
<div class="table-responsive">
    <table id="tabletransaksi" class="table table-striped table-bordered table-hover" >
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Konsumen</th>
                <th>Tanggal Masuk</th>
                <th>Id Jenis</th>
                <th>Id User</th>
                <th>Status</th>
                <th>Tanggal Selesai</th>
                <th>Total</th>    
                <th>Tanggal di ambil</th>        
            </tr>
        </thead>
        <tbody>
            @php
            $no=1;
        @endphp
       @foreach ($datatransaksi as $index => $transaksi)
           <tr>
            <td>{{$no++}}</td>
            <td>{{$transaksi->customer}}</td>
            <td>{{$transaksi->date_of_entry}}</td>
            <td>{{$transaksi->service}}</td>
            <td>{{$transaksi->user}}</td>
            <td>{{$transaksi->status}}</td>
            <td>{{$transaksi->the_amount_of_goods}}</td>
            <td>{{$transaksi->total}}</td>
            <td>{{$transaksi->pick_up_date}}</td>
            <td>
                <div class="input-group mb-3">
                    <span class="input-group-text border-0">
                        <a href="" class="btn btn-warning"><i class="fa-regular fa-pen-to-square" 
                            aria-hidden="true"></i>Edit</a>
                    </span>
                    <span class="input-group-text border-0">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('', $transaksi->id)}}" class="btn btn-danger" 
                            data-confirm-delete="true"><i class="fa fa-trash" aria-hidden="true"></i>Hapus</a>
                            </span>
                        </div>

            </td>
        </tbody>
        @endforeach 
    </table>

    
</div>

    
@endsection

@section('script')

<script>

//untuk table
$(document).ready( function () {
    $('#tabletransaksi').DataTable();
});

</script>

@endsection
