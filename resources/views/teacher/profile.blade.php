@extends('teacher.master')

@section('title', 'Profile Guru')

@section('style')

@endsection

@section('isi')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Profile Guru</h6>
            </div>
            <div class="card-body ">
                <div class="container">
                    <img {{-- src="{{ asset('theme') }}/img/undraw_profile.svg" --}} src="{{ asset('img') }}/blank-profile.webp"
                        class="rounded mx-auto d-block w-25 h-25" alt="...">
                </div>
                <div class="card mt-3">
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
                            <tr>
                                <td>Kontak</td>
                                <td>:</td>
                                <td>+6282234567890</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary mt-1">Kembali</a>
                </div>
            </div>
        </div>
    </div>

@endsection
