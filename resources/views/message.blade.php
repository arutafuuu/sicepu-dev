<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('img') }}/books.png" type="image/x-icon">

    <title>SICEPU - Message</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('theme') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    {{-- <link href="{{ asset('theme') }}/css/sb-admin-2.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('theme') }}/css/sb-admin-2.css" rel="stylesheet">

    @yield('style')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <div class="d-none d-sm-inline-block">
                        <h4 class="font-weight-bold text-primary">Sistem Informasi Cerdas dan Terpantau</h4>
                    </div>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{-- <i class="fas fa-search fa-fw"></i> --}}
                                <h4 class="font-weight-bold text-primary mt-2">SICEPU</h4>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <div class="container">
                    <div class="mb-2">
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Kembali</a>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            Laporkan Masalah
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <table>
                                    <tr>
                                        <td>Masalah Utama</td>
                                        <td>&emsp;</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" class="form-control" name="problem" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Wali</td>
                                        <td>&emsp;</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" class="form-control" name="par_name" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Siswa</td>
                                        <td>&emsp;</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" class="form-control" name="name" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>User ID</td>
                                        <td>&emsp;</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" class="form-control" name="user_id" required>
                                        </td>
                                    </tr>
                                </table>
                                <div class="col">
                                    <div class="mt-5">
                                        <label for="description">Deskripsi Masalah :</label>
                                    </div>
                                    <div class="">
                                        <textarea name="message" class="form-control" id="description">
                                        </textarea>
                                    </div>
                                </div>
                                <div class="mt-2 d-flex justify-content-end">
                                    <button class="btn btn-warning" type="submit">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('theme') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('theme') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('theme') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('theme') }}/js/sb-admin-2.min.js"></script>

    @yield('script')

</body>

</html>
