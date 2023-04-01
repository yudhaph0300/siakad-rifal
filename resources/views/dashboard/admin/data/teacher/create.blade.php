@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Guru Baru</h1>

    </div>

    <div class="col-lg-8">
        <form action="/dashboard/admin/data/teacher" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nama Guru" required>
            </div>
            <div class="form-group mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control" name="nip" id="nip" placeholder="8108980809973078">
            </div>
            <div class="form-group mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control" name="nik" id="nik" placeholder="8108980809973078"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Guru</button>
        </form>
    </div>
@endsection
