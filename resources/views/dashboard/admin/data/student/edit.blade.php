@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Siswa</h1>

    </div>

    <div class="col-lg-8">
        <form action="/dashboard/admin/data/student/{{ $student->nis }}" method="POST">
            @method('put')
            @csrf
            <div class="form-group mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name" id="name"
                    value="{{ old('name', $student->name) }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="nis" class="form-label">NIS</label>
                <input type="text" class="form-control" name="nis" id="nis"
                    value="{{ old('nis', $student->nis) }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <select class="form-select" name="kelas_id" required>
                    @foreach ($kelas as $kls)
                        @if (old('kelas_id') == $kls->id)
                            <option value="{{ $kls->id }}" selected>{{ $kls->name }}</option>
                        @else
                            <option value="{{ $kls->id }}">{{ $kls->name }}</option>
                        @endif
                    @endforeach
                </select>

            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
    </div>
@endsection
