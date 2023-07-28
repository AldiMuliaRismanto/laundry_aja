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
                <th>Nama Layanan</th>
                <th>Harga</th>
                <th>Durasi</th>
                <th>Action</th>            
            </tr>
        </thead>
        <tbody>
            @php
            $no=1;
        @endphp
       @foreach ($datalayanan as $index => $service)
           <tr>
            <td>{{$no++}}</td>
            <td>{{$service->name_service}}</td>
            <td>{{$service->price}}</td>
            <td>{{$service->duration}}</td>
            <td>
                <div class="input-group mb-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text border-0">
                            <a href="{{route('Layanan.editLayanan', $service->id)}}" class="btn btn-warning"><i class="fa-regular fa-pen-to-square" aria-hidden="true"></i>Edit</a>
                        </span>
                        <span class="input-group-text border-0">
                            <form onsubmit="return confirm('Data Layanan akan dihapus ?')" action=" {{route('Layanan.deleteLayanan',$service->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type=" submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button>
                                    </form>
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