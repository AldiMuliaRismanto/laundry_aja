@extends('layout.v_template')

@section('title','Data Karyawan|Laundry Aja')
    

@section('content')

<a href="/Karyawan/tambahKaryawan" class="btn btn-primary btn-sm">Tambah Karyawan</a>

<br><br>
<div class="table-responsive">
    <table id="tablekasir" class="display">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Role</th>
                
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

