@extends('admin.master')

@section('title', 'Edit Guru')

@section('style')

@endsection

@section('isi')

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data Guru</h6>
            </div>
            <div class="card-body ">
                <form method="POST" action="{{ route('admin.teacher.update', $teacher->teacher_id) }}">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <img {{-- src="{{ asset('theme') }}/img/undraw_profile.svg" --}} src="{{ asset('img') }}/blank-profile.webp"
                            class="rounded mx-auto d-block w-25 h-25" alt="...">
                    </div>
                    <div class="card mt-3">
                        <table class="table table-borderless">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" name="name" value="{{ $teacher->name }}">
                                </td>
                            </tr>
                            <tr>
                                <td>NIP</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" name="teacher_id"
                                        value="{{ $teacher->teacher_id }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="lk"
                                            {{ $teacher->gender == 'lk' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="lk">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="pr"
                                            {{ $teacher->gender == 'pr' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="pr">
                                            Perempuan
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Mata Pelajaran</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" name="subject" value="{{ $teacher->subject }}">
                                </td>
                            </tr>
                            {{-- <tr>
                                <td>Kelas Perwalian</td>
                                <td>:</td>
                                <td>
                                    <fieldset>
                                        <div class="mb-3">
                                            <select class="form-select" name="class">
                                                <option {{ $teacher->class == null  ? 'selected' : '' }} value="">Tidak ada</option>
                                                @foreach ($classes as $class)
                                                    <option {{ $teacher->class == $class->class_id ? 'selected' : '' }} value="{{ $class->class_id }}">{{ $class->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </fieldset>
                                </td>
                            </tr> --}}
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" name="email" value="{{ $teacher->email }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Kontak</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" name="phone" value="{{ $teacher->phone }}">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="mt-3 d-flex justify-content-between">
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Kembali</a>
                        <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
