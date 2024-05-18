@extends('admin.master')

@section('title', 'Detail Guru')

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
                        <img src="{{ asset('theme') }}/img/undraw_profile.svg" class="rounded mx-auto d-block w-25 h-25"
                            alt="...">
                    </div>
                    <div class="card mt-3">
                        <table class="table table-borderless">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="Aldi Firmansyah">
                                </td>
                            </tr>
                            <tr>
                                <td>NIS</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="240001">
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
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
                                            <select class="form-select">
                                                <option selected>VII A</option>
                                                <option>VII B</option>
                                                <option>VII C</option>
                                            </select>
                                        </div>
                                    </fieldset>
                                </td>
                            </tr>
                            <tr>
                                <td>Kontak</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>
                                    <input type="email" class="form-control" id="exampleInputEmail1">
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Wali</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                </td>
                            </tr>
                            <tr>
                                <td>Kontak Wali</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                </td>
                            </tr>
                            <tr>
                                <td>Email Wali</td>
                                <td>:</td>
                                <td>
                                    <input type="email" class="form-control" id="exampleInputEmail1">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="mt-3 d-flex justify-content-between">
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Kembali</a>
                        <button class="btn btn-sm btn-success">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
