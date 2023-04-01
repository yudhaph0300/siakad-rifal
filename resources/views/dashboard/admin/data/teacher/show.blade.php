@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3 ">
            <div class="col-lg-4">

                <img src="https://ik.imagekit.io/yudha/sample_profile_Ty2X4hKUd?updatedAt=1654843599803" class="img-fluid"
                    alt="Responsive image">

            </div>
            <div class="col-lg-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <td>{{ $teacher->name }}</td>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>NIP</th>
                            <td>{{ $teacher->nip }}</td>
                        </tr>
                        <tr>
                            <th>NIK</th>
                            <td>{{ $teacher->nik }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>Jl. Kantung Semar, Rt/Rw 011/04, Dsn. Majalaya, Ds. Majalaya, Kec. Majalaya, Kab. Bandung
                            </td>
                        </tr>

                    </tbody>
                </table>



            </div>

        </div>
    </div>
@endsection
