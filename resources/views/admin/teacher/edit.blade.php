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
            <div class="card-body ">
                <form action="">
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
                                    <input type="text" class="form-control" value="Budi Santoso">
                                </td>
                            </tr>
                            <tr>
                                <td>NIP</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" value="197503211998031005">
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
                                <td>Mata Pelajaran</td>
                                <td>:</td>
                                <td>
                                    <input type="text" class="form-control" value="IPA Terpadu">
                                </td>
                            </tr>
                            <tr>
                                <td>Kelas Perwalian</td>
                                <td>:</td>
                                <td>
                                    <fieldset>
                                        <div class="mb-3">
                                            <select class="form-select">
                                                <option selected>VII A</option>
                                                <option>VIII A</option>
                                                <option>IX A</option>
                                            </select>
                                        </div>
                                    </fieldset>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="mt-3 d-flex justify-content-between">
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Kembali</a>
                        <button class="btn btn-sm btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
