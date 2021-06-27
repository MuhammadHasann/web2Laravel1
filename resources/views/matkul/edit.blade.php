@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data</div>

                <div class="card-body">
                <form action="{{ route('update.matkul', $matkul->id) }}" method="post" class="form-item">
                    @csrf
                    <div class="form-group">
                        <label for="kode">kode Mata Kuliah</label>
                        <input type="text" name="kd_matkul" class="form-control col-md-12" placeholder="Masukkan kode Mata Kuliah" value="{{ is_null($matkul) ? '' : $matkul->kd_matkul }}">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Mata Kuliah</label>
                        <input type="text" name="nama_matkul" class="form-control col-md-12" placeholder="Masukkan Nama Mata Kuliah" value="{{ is_null($matkul) ? '' : $matkul->nama_matkul }}">
                    </div>

                    <div class="form-group">
                        <label for="sks">SKS</label>
                        <input type="number" name="sks" class="form-control col-md-12" placeholder="Masukkan SKS" value="{{ is_null($matkul) ? '' : $matkul->sks }}">
                    </div>
    
                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <a href="{{ route('matkul') }}" class="btn btn-danger">BATAL</a>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
