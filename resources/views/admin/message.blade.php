@extends('admin.master')

@section('title', 'Message')

@section('isi')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Pesan Pengguna</h1>

        @foreach ($messages as $index => $message)

        <!-- Collapsable Card Example -->
        <div class="card shadow mb-2">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample{{$index}}" class="d-block card-header py-3" data-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="collapseCardExample{{$index}}">
                <h6 class="m-0 font-weight-bold text-primary">{{ $message->problem }}</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse" id="collapseCardExample{{$index}}">
                <div class="card-body">
                    <form action="{{ route('admin.message.done', $message->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <table>
                            <tr>
                                <td>Tanggal Laporan</td>
                                <td>&emsp;</td>
                                <td>:</td>
                                <td>{{ $message->created_at }}</td>
                            </tr>
                            <tr>
                                <td>Nama Wali</td>
                                <td>&emsp;</td>
                                <td>:</td>
                                <td>{{ $message->par_name }}</td>
                            </tr>
                            <tr>
                                <td>Nama Siswa</td>
                                <td>&emsp;</td>
                                <td>:</td>
                                <td>{{ $message->name }}</td>
                            </tr>
                            <tr>
                                <td>NIS</td>
                                <td>&emsp;</td>
                                <td>:</td>
                                <td>{{ $message->user_id }}</td>
                            </tr>
                        </table>
                        <div class="mt-5">
                            <h6>Deskripsi Masalah :</h6>
                            <p>
                                {{ $message->message }}
                            </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-primary mr-2" href="{{ route('admin.student.detail', $message->user_id) }}">Detail Pengguna</a>
                            <button class="btn btn-success" type="submit">Selesai</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @endforeach


    </div>
    <!-- /.container-fluid -->
@endsection
