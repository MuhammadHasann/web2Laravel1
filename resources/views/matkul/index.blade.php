@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Matkul
                    <a href="{{ route('matkul.create') }}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO</th>
                                <th>Kode Matkul</th>
                                <th>Nama Matkul</th>
                                <th>SKS</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach ($matkul as $mk)
                                <tr>
                                    <td>{{ $mk->id }}</td>
                                    <td>{{ $mk->kd_matkul }}</td>
                                    <td>{{ $mk->nama_matkul }}</td>
                                    <td>{{ $mk->sks }}</td>
                                    <td>
                                        <a href="{{ route('matkul.edit', $mk->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{ route('matkul.hapus', $mk->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 