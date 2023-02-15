<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
         <title>Tambah Jenis Bantuan | Antar Bantuan Logistik</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="CMS Antar Untuk Bantuan Logistik" name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">

        @include('master.master-css')
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            
            <!-- ========== Topbar Start ========== -->
            @include('master.topbar')
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('master.sidebar')
            <!-- ========== Left Sidebar End ========== -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                    </div>
                                    <h4 class="page-title">Tambah Jenis Bantuan</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Table Data Kabupaten / Kota -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Tambah Jenis Bantuan</h4>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="custom-styles-preview">
                                                <form method="post" action="" class="needs-validation" novalidate>
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Nama Jenis Bantuan</label>
                                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Tambah Nama Jenis" required>
                                                        <div class="invalid-feedback">
                                                            Nama Jenis Bantuan Harus Diisi!
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Tambah Jenis</button>
                                                </form>
                                            </div> <!-- end preview-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->
                <!-- content -->

                <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Tambah Judul Bantuan</h4>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="custom-styles-preview">
                                                <form class="needs-validation" novalidate>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Nama Judul Bantuan</label>
                                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Tambah Judul Bantuan" required>
                                                        <div class="invalid-feedback">
                                                            Nama Judul Bantuan Harus Diisi!
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Kode Bantuan</label>
                                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Isi Kode Bantuan" required>
                                                        <div class="invalid-feedback">
                                                            Kode Bantuan Harus Diisi
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-select" class="form-label">Pilih Nama Jenis Bantuan</label>
                                                            <select required class="form-select" id="example-select">
                                                                <option selected>Pilih Jenis</option>
                                                                <option value="1">Sosial</option>
                                                                <option value="2">Sumbangan</option>
                                                                <option value="3">Bencana</option>
                                                                <option value="4">Donasi</option>
                                                            </select>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Tambah Judul</button>
                                                </form>
                                            </div> <!-- end preview-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>

                <!-- Footer Start -->
                @include('master.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

            </div>
        </div>
        <!-- END wrapper -->



             @include('master.script')
             

    </body>


<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 04:00:53 GMT -->
</html>