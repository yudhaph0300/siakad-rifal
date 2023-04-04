@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Kelas</h1>
    </div>
    <a href="/dashboard/admin/data/kelas/create" class="btn btn-primary mb-3">Tambah Kelas Baru</a>

    <div class="row">
        @foreach ($kelas as $kls)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kelas : {{ $kls->name }}</h5>
                        <p class="card-text"></p>
                        <p class="card-text">Wali Kelas : Lorem Ipsum
                            <br>
                            Jumlah siswa : Lorem Ipsum
                        </p>
                        <div class="border-top mb-2"></div>
                        <a href="/dashboard/admin/data/kelas/{{ $kls->name }}" class="btn me-1 px-4 btn-info">Lihat</a>
                        <a href="#" class="btn me-1 px-4 btn-warning">Edit</a>
                        <a href="#" class="btn me-1 px-4 btn-danger">Delete</a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
