@extends('layout.v_template')

@section('title','Data Customer | Laundry Aja')
    

@section('content')

<a href="/Customer/tambahcustomer" class="btn btn-primary btn-sm">Tambah Customer</a>

<br><br>
<div class="table-responsive">
    <table id="tablecustomer" class="table table-striped table-bordered table-hover" >
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no=1;
        @endphp
       @foreach ($datacustomer as $index => $customer)
           <tr>
            <td>{{$no++}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->address}}</td>
            <td>{{$customer->telephone}}</td>
            <td>
                <div class="input-group mb-3">
                    <span class="input-group-text border-0">
                        <a href="{{route('Customer.editcustomer', $customer->id)}}" class="btn btn-warning"><i class="fa-regular fa-pen-to-square" aria-hidden="true"></i>Edit</a>
                    </span>
                    <span class="input-group-text border-0">
                        <form onsubmit="return confirm('Data customer akan dihapus ?')" action=" {{route('Customer.deletecustomer',$customer->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type=" submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button>
                                </form>
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

$(document).ready( function () {
    $('#tablecustomer').DataTable();
});

</script>
@endsection

