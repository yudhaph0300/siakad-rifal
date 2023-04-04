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
                            <td>{{ $student->name }}</td>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>NIS</th>
                            <td>{{ $student->nis }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>Rt/Rw 023/05, Dsn. Klampisan, Ds. Tondowulan, Kec. Plandaan, Kab. Jombang </td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td>{{ $student->kelas->name }}</td>
                        </tr>
                    </tbody>
                </table>



            </div>

        </div>
    </div>
@endsection
