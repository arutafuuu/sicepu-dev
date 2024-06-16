@extends('student.master')

@section('title', 'Detail Nilai')

@section('style')

@endsection

@section('isi')

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Detail Nilai Mata Pelajaran</h6>
            </div>
            <div class="card-body ">
                {{-- <form action=""> --}}
                <table>
                    <tr>
                        <td>Mata Pelajaran</td>
                        <td>&emsp;</td>
                        <td>:</td>
                        <td>IPA Terpadu</td>
                    </tr>
                </table>
                {{-- </form> --}}
                <div class="card mt-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Kelas / Semester</th>
                                <th></th>
                                <th>Pengetahuan</th>
                                <th>Predikat</th>
                                <th>Keterampilan</th>
                                <th>Predikat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>VII 1</td>
                                <td>:</td>
                                <td>78</td>
                                <td>B+</td>
                                <td>77</td>
                                <td>B+</td>
                            </tr>
                            <tr>
                                <td>VII 2</td>
                                <td>:</td>
                                <td>81</td>
                                <td>A-</td>
                                <td>82</td>
                                <td>A-</td>
                            </tr>
                            <tr>
                                <td>VIII 1</td>
                                <td>:</td>
                                <td>85</td>
                                <td>A-</td>
                                <td>81</td>
                                <td>A-</td>
                            </tr>
                            <tr>
                                <td>VIII 2</td>
                                <td>:</td>
                                <td>84</td>
                                <td>A-</td>
                                <td>85</td>
                                <td>A-</td>
                            </tr>
                            <tr>
                                <td>IX 1</td>
                                <td>:</td>
                                <td>87</td>
                                <td>A</td>
                                <td>87</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>IX 2</td>
                                <td>:</td>
                                <td>89</td>
                                <td>A</td>
                                <td>91</td>
                                <td>A</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>

@endsection
