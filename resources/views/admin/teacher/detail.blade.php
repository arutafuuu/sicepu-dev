@extends('admin.master')

@section('title', 'Detail Guru')

@section('style')

@endsection

@section('isi')

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Detail Guru</h6>
            </div>
            <form action="">
                <div class="card-body ">
                    <div class="container">
                        <img
                        {{-- src="{{ asset('theme') }}/img/undraw_profile.svg" --}}
                        src="{{ asset('img') }}/blank-profile.webp"
                        class="rounded mx-auto d-block w-25 h-25" alt="...">
                    </div>
                    <div class="card mt-3">
                        <table class="table table-borderless">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{ $teacher->name }}</td>
                            </tr>
                            <tr>
                                <td>NIP</td>
                                <td>:</td>
                                <td>{{ $teacher->teacher_id }}</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>{{ $teacher->gender == 'lk' ? 'Laki-laki' : 'Perempuan'}}</td>
                            </tr>
                            <tr>
                                <td>Mata Pelajaran</td>
                                <td>:</td>
                                <td>{{ $teacher->subject }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $teacher->email }}</td>
                            </tr>
                            <tr>
                                <td>Kontak</td>
                                <td>:</td>
                                <td>{{ $teacher->phone }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="row">
                        <div class="mt-3">
                            <a href="{{ route('admin.teacher') }}" class="btn btn-sm btn-primary">Kembali</a>
                            <a href="{{ route('admin.teacher.edit', $teacher->teacher_id) }}" class="btn btn-sm btn-warning">Edit</a>
                        </div>
                        <div class="mt-3 ml-auto">
                            <a href="#" class="btn btn-sm btn-success">Reset Password</a>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
