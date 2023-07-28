@extends('layout.v_template')

@section('title','Layanan Laundry | Laundry Aja')
    
@section('content')

<a href="/Layanan/tambahLayanan" class="btn btn-primary btn-sm">Tambah Layanan</a>

<br><br>
<div class="table-responsive">
    <table id="tablelayanan" class="table table-striped table-bordered table-hover" >
        <thead>
            <tr>
                <th>No</th>
                <th>id_jenis</th>
                <th>Nama Layanan</th>
                <th>Harga</th>
                <th>Action</th>            
            </tr>
        </thead>
        <tbody>
            @php
            $no=1;
        @endphp
       @foreach ($datalayanan as $index => $layanan)
           <tr>
            <td>{{$no++}}</td>
            <td>{{$layanan->id_service_type}}</td>
            <td>{{$layanan->name_service}}</td>
            <td>{{$layanan->price}}</td>
            <td>
                <div class="input-group mb-3">
                    <span class="input-group-text border-0">
                        <a href="" class="btn btn-warning"><i class="fa-regular fa-pen-to-square" aria-hidden="true"></i>Edit</a>
                    </span>
                    <span class="input-group-text border-0">
                        @csrf
                        @method('DELETE')
                        <a href="" class="btn btn-danger" 
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
    $('#tablelayanan').DataTable();
});

</script>

@endsection