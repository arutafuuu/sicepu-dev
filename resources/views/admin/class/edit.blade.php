@extends('admin.master')

@section('title', 'Edit Kelas')

@section('style')

@endsection

@section('isi')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Kelas</h6>
            </div>
            <form action="{{ route('admin.class.update', $class->class_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body ">
                    <div class="card mt-3">
                        <table class="table table-borderless">
                            <tr>
                                <td>Id Kelas</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" value="{{ $class->class_id }}"
                                        name="class_id" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" value="{{ $class->name }}" name="name" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Wali Kelas</td>
                                <td>:</td>
                                <td>
                                    <fieldset>
                                        <div class="mb-3">
                                            <select class="form-select" name="teacher_id">
                                                <option {{ $class->teacher_id ? '' : 'selected' }} value="">Tidak ada
                                                </option>
                                                @foreach ($teachers as $teacher)
                                                    <option
                                                        {{ $class->teacher_id == $teacher->teacher_id ? 'selected' : '' }}
                                                        value="{{ $teacher->teacher_id }}">{{ $teacher->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </fieldset>
                                </td>
                            </tr>
                            {{-- <tr>
                                <td>Ketua Kelas</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" value="Aldi Firmansyah" name="">
                                </td>
                            </tr> --}}
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
