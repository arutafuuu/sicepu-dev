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
                        <img src="{{ asset('theme') }}/img/undraw_profile.svg" class="rounded mx-auto d-block w-25 h-25"
                            alt="...">
                    </div>
                    <div class="card mt-3">
                        <table class="table table-borderless">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>Budi Santoso</td>
                            </tr>
                            <tr>
                                <td>NIP</td>
                                <td>:</td>
                                <td>197503211998031005</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>Laki-laki</td>
                            </tr>
                            <tr>
                                <td>Mata Pelajaran</td>
                                <td>:</td>
                                <td>IPA Terpadu</td>
                            </tr>
                            <tr>
                                <td>Kelas Perwalian</td>
                                <td>:</td>
                                <td>VII A</td>
                            </tr>
                        </table>
                    </div>
                    <div class="mt-3">
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Kembali</a>
                        <a href="{{ route('admin.teacher.edit') }}" class="btn btn-sm btn-warning">Edit</a>
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
