@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Guru</h1>

    </div>

    <div class="col-lg-8">
        <form action="/dashboard/admin/data/teacher/{{ $teacher->nik }}" method="POST">
            @method('put')
            @csrf
            <div class="form-group mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name" id="name"
                    value="{{ old('name', $teacher->name) }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control" name="nip" id="nip"
                    value="{{ old('nip', $teacher->nip) }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control" name="nik" id="nik"
                    value="{{ old('nik', $teacher->nik) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
    </div>
@endsection
