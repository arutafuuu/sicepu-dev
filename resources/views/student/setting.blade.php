@extends('student.master')

@section('title', 'Setting')

@section('isi')

    <div class="container-fluid">
        <div class="mb-2">
            <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Kembali</a>
        </div>

        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ganti Password</h6>
            </div>
            <div class="card-body">
                <form action="">
                    <table class="table table-borderless">
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td>
                                <input type="password" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Password Baru</td>
                            <td>:</td>
                            <td>
                                <input type="password" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Konfirmasi Password</td>
                            <td>:</td>
                            <td>
                                <input type="password" class="form-control">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

    </div>
@endsection
