@extends('admin.master')

@section('title', 'Tambah Siswa')

@section('style')

@endsection

@section('isi')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Siswa</h6>
            </div>
            <form action="{{ route('admin.student.store') }}">
                @csrf
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
                                <td>
                                    <input type="text" class="form-control" name="name" required>
                                </td>
                            </tr>
                            <tr>
                                <td>NIS</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" name="student_id" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender"
                                            id="lk" value="lk" checked>
                                        <label class="form-check-label" for="lk">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender"
                                            id="pr" value="pr">
                                        <label class="form-check-label" for="pr">
                                            Perempuan
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td>:</td>
                                <td>
                                    <fieldset>
                                        <div class="mb-3">
                                            <select class="form-select" name="class_id">
                                                <option value="">Tidak ada</option>
                                                @foreach  ($classes as $index => $class)
                                                    <option value="p">{{ $class->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </fieldset>
                                </td>
                            </tr>
                            <tr>
                                <td>Kontak</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" name="phone" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>
                                    <input type="email" class="form-control" name="email" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Wali</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" name="parent" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Kontak Wali</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" name="par_phone" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Email Wali</td>
                                <td>:</td>
                                <td>
                                    <input type="email" class="form-control" name="par_email" required>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="mt-3 d-flex justify-content-between">
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Kembali</a>
                        <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
