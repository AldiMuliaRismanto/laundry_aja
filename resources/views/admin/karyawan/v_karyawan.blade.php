@extends('layout.v_template')

@section('title','Data Karyawan|Laundry Aja')
    

@section('content')

<a href="/Karyawan/tambahKaryawan" class="btn btn-primary btn-sm">Tambah Karyawan</a>

<br><br>
<div class="table-responsive">
    <table id="tablekasir" class="table table-striped table-bordered table-hover" >
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Role</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            @php
            $no=1;
        @endphp
       @foreach ($datauser as $index => $user)
           <tr>
            <td>{{$no++}}</td>
            <td>{{ $user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->telephone}}</td>
            <td>{{ $user->role }}</td>
            <td>
                <div class="input-group mb-3">
                    <span class="input-group-text border-0">
                        <a href="{{route('Karyawan.editKaryawan', $user->id)}}" class="btn btn-warning"><i class="fa-regular fa-pen-to-square" aria-hidden="true"></i>Edit</a>
                    </span>
                    <span class="input-group-text border-0">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('Karyawan.deleteKaryawan', $user->id)}}" class="btn btn-danger" data-confirm-delete="true"><i class="fa fa-trash" aria-hidden="true"></i>Hapus</a>
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
    $('#tablekasir').DataTable();
});

</script>
@endsection

