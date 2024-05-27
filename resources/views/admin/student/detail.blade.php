@extends('admin.master')

@section('title', 'Detail Siswa')

@section('style')

@endsection

@section('isi')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Detail Siswa</h6>
            </div>
            <form action="{{ route('admin.student.delete', $student->student_id) }}" method="POST">
                @csrf
                @method('DELETE')
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
                                <td>{{ $student->name }}</td>
                            </tr>
                            <tr>
                                <td>NIS</td>
                                <td>:</td>
                                <td>{{ $student->student_id }}</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>{{ $student->gender == 'lk' ? 'Laki-laki' : 'Perempuan' }}</td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td>:</td>
                                <td>
                                    {{ $class }}
                                </td>
                            </tr>
                            <tr>
                                <td>Kontak</td>
                                <td>:</td>
                                <td>{{ $student->phone }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $student->email }}</td>
                            </tr>
                            <tr>
                                <td>Nama Wali</td>
                                <td>:</td>
                                <td>{{ $student->parent_name }}</td>
                            </tr>
                            <tr>
                                <td>Kontak Wali</td>
                                <td>:</td>
                                <td>{{ $student->parent_phone }}</td>
                            </tr>
                            <tr>
                                <td>Email Wali</td>
                                <td>:</td>
                                <td>{{ $student->parent_email }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="row">
                        <div class="mt-3">
                            <a href="{{ route('admin.student') }}" class="btn btn-sm btn-primary">Kembali</a>
                            <a href="{{ route('admin.student.edit', $student->student_id) }}" class="btn btn-sm btn-warning">Edit</a>
                        </div>
                        <div class="mt-3 ml-auto">
                            <a href="#" class="btn btn-sm btn-success">Reset Password</a>
                            <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
