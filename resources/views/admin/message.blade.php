@extends('admin.master')

@section('title', 'Message')

@section('isi')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Pesan Pengguna</h1>

        <!-- Collapsable Card Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">Password Bermasalah</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                    <form action="">
                        <table>
                            <tr>
                                <td>Tanggal Laporan</td>
                                <td>&emsp;</td>
                                <td>:</td>
                                <td>01-01-2024</td>
                            </tr>
                            <tr>
                                <td>Nama Wali</td>
                                <td>&emsp;</td>
                                <td>:</td>
                                <td>Ridwan</td>
                            </tr>
                            <tr>
                                <td>Nama Siswa</td>
                                <td>&emsp;</td>
                                <td>:</td>
                                <td>Aldi Firmansyah</td>
                            </tr>
                        </table>
                        <div class="mt-5">
                            <h6>Deskripsi Masalah :</h6>
                            <p>
                                Tidak dapat melakukan login dengan indikator password salah atau akun belum terdaftar
                            </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-success">Selesai</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
