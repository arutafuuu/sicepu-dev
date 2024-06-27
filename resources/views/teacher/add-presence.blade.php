@extends('teacher.master')

@section('title', 'isi Kehadiran')

@section('isi')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="mb-2">
            <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Kembali</a>
        </div>

        <!-- Tables -->
        <form action="{{ route('teacher.store.presence') }}" method="POST">
            @csrf
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <h4 class="m-1 font-weight-bold text-primary">REKAP KEHADIRAN</h4>
                        <button class="btn btn-success ml-auto" type="submit">Simpan</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="ml-auto">
                        <table>
                                <tr>
                                    <td>Total Jam Sehari</td>
                                    <td>&emsp;</td>
                                    <td>:</td>
                                    <td>
                                        <input type="number" class="form-control" name="fulltime" required>
                                    </td>
                                    <td>&emsp;</td>
                                    <td>Tanggal</td>
                                    <td>&emsp;</td>
                                    <td>:</td>
                                    <td>
                                        <input type="date" class="form-control" id="date" name="date" required>
                                    </td>
                                </tr>
                        </table>
                    </div>
                    <div class="table-responsive mt-2">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jumlah ketidakhadiran Hadir</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <th>{{ $student->name }}</th>
                                    <th>
                                        <input type="number" class="form-control" name="attendance[{{$student->student_id}}]" required>
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <!-- /.container-fluid -->
@endsection

{{-- @section('script')
    <!-- Page level plugins -->
    <script src="{{ asset('theme') }}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('theme') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('theme') }}/js/demo/datatables-demo.js"></script>
@endsection --}}
