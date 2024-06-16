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
            <form action="{{ route('admin.subject.update', $subject->subject_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body ">
                    <div class="card mt-3">
                        <table class="table table-borderless">
                            <tr>
                                <td>Id Mata Pelajaran</td>
                                <td>:</td>
                                <td>
                                    {{ $subject->subject_id }}
                                </td>
                            </tr>
                            <tr>
                                <td>Mata Pelajaran</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" value="{{ $subject->name }}" name="name">
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
