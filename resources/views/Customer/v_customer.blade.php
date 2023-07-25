@extends('layout.v_template')

@section('title','Data Customer | Laundry Aja')
    

@section('content')


<br><br>
<div class="table-responsive">
    <table id="tablecustomer" class="display">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                
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
        </tbody>
        @endforeach 
    </table>
    
@endsection

@section('script')

<script>

$(document).ready( function () {
    $('#tablecustomer').DataTable();
});

</script>
@endsection