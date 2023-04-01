@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Siswa Baru</h1>

    </div>

    <div class="col-lg-8">
        <form action="/dashboard/admin/data/student" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nama Siswa" required>
            </div>
            <div class="form-group mb-3">
                <label for="nis" class="form-label">NIS</label>
                <input type="text" class="form-control" name="nis" id="nis" placeholder="8108980809973078"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Siswa</button>
        </form>
    </div>
@endsection
