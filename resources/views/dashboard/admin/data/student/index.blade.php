@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Siswa</h1>

    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/dashboard/admin/data/student/create" class="btn btn-primary mb-3">Tambah Siswa Baru</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->nis }}</td>
                        <td>{{ $student->kelas->name }}</td>
                        <td>
                            <a href="/dashboard/admin/data/student/{{ $student->nis }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/dashboard/admin/data/student/{{ $student->nis }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/dashboard/admin/data/student/{{ $student->nis }}" method="POST"
                                class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Delete Data?')"><span
                                        data-feather="x-circle"></span></button>
                            </form>

                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
