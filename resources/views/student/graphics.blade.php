@extends('student.master')

@section('title', 'Grafik Nilai')

@section('isi')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        {{-- <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Grafik Nilai</h6>
            </div> --}}
        <form action="">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Grafik nilai mata pelajaran persemester</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ml-3">
                <button class="btn btn-sm btn-success">Muat</button>
                <fieldset>
                    <div class="ml-2">
                        <select class="form-select">
                            <option>VII 1</option>
                            <option>VII 2</option>
                            <option>VIII 1</option>
                            <option>VIII 2</option>
                            <option>IX 1</option>
                            <option>IX 2</option>
                        </select>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="ml-2">
                        <select class="form-select">
                            <option>IPA Terpadu</option>
                            <option>IPS Terpadu</option>
                            <option>Bahasa Indonesia</option>
                        </select>
                    </div>
                </fieldset>
            </div>
        </form>
        {{-- </div> --}}

    </div>
    <!-- /.container-fluid -->
@endsection

@section('script')
    <!-- Page level plugins -->
    <script src="{{asset('theme')}}/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('theme')}}/js/main/chart-area-demo.js"></script>
    <script src="{{asset('theme')}}/js/main/chart-pie-demo.js"></script>
@endsection
