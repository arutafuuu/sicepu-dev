@extends('admin.master')

@section('title', 'Profile')

@section('style')

@endsection

@section('isi')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Profile Admin</h6>
            </div>
            <div class="card-body ">
                <div class="container">
                    <img {{-- src="{{ asset('theme') }}/img/undraw_profile.svg" --}} src="{{ asset('img') }}/blank-profile.webp"
                        class="rounded mx-auto d-block w-25 h-25" alt="...">
                </div>
                <div class="card mt-3">
                    <table class="table table-borderless">
                        <tr>
                            <td>Id Admin</td>
                            <td>:</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>Wang Eugeo</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>Laki-laki</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>wangeugeo@example.com</td>
                        </tr>
                        <tr>
                            <td>Access</td>
                            <td>:</td>
                            <td>Full Access</td>
                        </tr>
                    </table>
                </div>
                <div class="mt-3">
                    <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary mt-1">Kembali</a>
                </div>
            </div>
        </div>
    </div>

@endsection
