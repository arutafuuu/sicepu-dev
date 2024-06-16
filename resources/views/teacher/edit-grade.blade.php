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
                        <h6>Kelas / Semsester &emsp; : VII 1</h6>
                    </div>
                    <div class="table-responsive mt-2">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Pengetahuan</th>
                                    <th>Keterampilan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <th>{{$student->student_id}}</th>
                                    <th>{{$student->name}}</th>
                                    <th>
                                        <input type="number" class="form-control" name="pengetahuan" value="{{$}}">
                                    </th>
                                    <th>
                                        <input type="number" class="form-control" name="keterampilan">
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
