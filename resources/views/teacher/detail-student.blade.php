@extends('teacher.master')

@section('title', 'Detail Siswa')

@section('style')

@endsection

@section('isi')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Detail Siswa</h6>
            </div>
            <form action="">
                <div class="card-body ">
                    <div class="container">
                        <img {{-- src="{{ asset('theme') }}/img/undraw_profile.svg" --}} src="{{ asset('img') }}/blank-profile.webp"
                            class="rounded mx-auto d-block w-25 h-25" alt="...">
                    </div>
                    <div class="card mt-3">
                        <table class="table table-borderless">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>Aldi Firmansyah</td>
                            </tr>
                            <tr>
                                <td>NIS</td>
                                <td>:</td>
                                <td>240001</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>Laki-laki</td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td>:</td>
                                <td>VII A</td>
                            </tr>
                            <tr>
                                <td>Kontak</td>
                                <td>:</td>
                                <td>+6282345678910</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>aldifirmansyah@example.com</td>
                            </tr>
                            <tr>
                                <td>Nama Wali</td>
                                <td>:</td>
                                <td>Ridwan</td>
                            </tr>
                            <tr>
                                <td>Kontak Wali</td>
                                <td>:</td>
                                <td>+6281234567890</td>
                            </tr>
                            <tr>
                                <td>Email Wali</td>
                                <td>:</td>
                                <td>ridwan@example.com</td>
                            </tr>
                        </table>
                    </div>
                    <div class="mt-3">
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
