@extends('layout.v_template')

@section('title', 'Jenis Laundry | Laundry Aja')

@section('content')
    <a href="/Laundry/tambahLaundry" class="btn btn-primary btn-sm">Tambah Jenis Laundry</a>

    <br><br>
    <div class="table-responsive">
        <table id="tablejenislaundry" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Layanan</th>
                    <th>Kategori</th>
                    <th>Durasi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($datajenislaundry as $index => $jenislaundry)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $jenislaundry->name_service_type }}</td>
                        <td>{{ $jenislaundry->category }}</td>
                        <td>{{ $jenislaundry->duration }}</td>
                        <td>
                            <div class="input-group mb-3">
                                <span class="input-group-text border-0">
                                    <a href="" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"
                                            aria-hidden="true"></i>Edit</a>
                                </span>
                                <span class="input-group-text border-0">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('Laundry.deleteLaundry', $jenislaundry->id) }}" id="delete-form"
                                        class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>Hapus</a>
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
        $(document).ready(function() {
            $('#tablejenislaundry').DataTable();
        });
    </script>
    <<<<<<< HEAD @endsection=======@endsection>>>>>>> parent of 8a2660e (membuat edit layanan, transaksi dan customer)
