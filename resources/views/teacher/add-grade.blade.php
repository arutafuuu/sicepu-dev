@extends('teacher.master')

@section('title', 'isi Nilai')

@section('isi')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="mb-2">
            <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Kembali</a>
        </div>

        <!-- Tables -->
        <form action="">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <h4 class="m-1 font-weight-bold text-primary">REKAP NILAI</h4>
                        <button class="btn btn-success ml-auto" type="">Simpan</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="ml-auto">
                        <table>
                            <tr>
                                <td>Kelas / Semester</td>
                                <td>&emsp;</td>
                                <td>:</td>
                                <td>
                                    <select class="form-select" required>
                                        <option>VII 1</option>
                                        <option>VII 2</option>
                                        <option>VIII 1</option>
                                        <option>VIII 2</option>
                                        <option>IX 1</option>
                                        <option>IX 2</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-responsive mt-2">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Pengetahuan</th>
                                    <th>Keterampilan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Aldi Firmansyah</th>
                                    <th>
                                        <input type="number" class="form-control">
                                    </th>
                                    <th>
                                        <input type="number" class="form-control">
                                    </th>
                                </tr>
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
