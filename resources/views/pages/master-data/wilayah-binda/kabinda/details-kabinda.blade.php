<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title> Edit Profile Pimpinan | Antar Bantuan Logistik</title>
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
                                    <h4 class="page-title">Edit Profile Pimpinan Tiap Provinsi</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Form Edit Table Data Kabupaten / Kota -->
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="input-types-preview">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="simpleinput" class="form-label">Nama</label>
                                                                <input type="text" id="simpleinput" class="form-control" value="Emile Mutaqin">
                                                            </div>

                                                             <div class="mb-3">
                                                                <label for="example-textarea" class="form-label">Link Google Maps Untuk Kantor Dinas</label>
                                                                <textarea class="form-control" placeholder="Masukan Link Google Maps Untuk Kantor Dinas" id="example-textarea" rows="3">https://www.google.com/maps/place/Starguard+Security/@-6.2539381,106.8295414,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69f3cdb86e2a85:0x61ca1a0c161d880a!8m2!3d-6.2540098!4d106.8317371</textarea>
                                                            </div>
        
                                                            <div class="mb-3">
                                                                <label for="example-email" class="form-label">Username Untuk Aplikasi Antar</label>
                                                                <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email" value="emile123">
                                                            </div>

                                                        </form>
                                                    </div> <!-- end col -->
        
                                                    <div class="col-lg-6">
                                                        <form>
                                                               <div class="mb-3">
                                                                <label for="example-email" class="form-label">Nomor NIP/NRP</label>
                                                                <input type="text" id="example-email" name="example-email" class="form-control" placeholder="Nomor NIP/NRP" value="12509638721567">
                                                            </div>

                                                             <div class="mb-3">
                                                                <label for="example-email" class="form-label">Alamat Kantor Dinas</label>
                                                                <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Alamat" value="Jl. Duren Tiga Raya No.53, RT.8/RW.5, Duren Tiga, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12760">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="password" class="form-label">Password</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="password" id="password" class="form-control" placeholder="Enter your password" value="emilmutaqin123">
                                                                    <div class="input-group-text" data-password="false">
                                                                        <span class="password-eye"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                
                                                        </form>
                                                    </div> <!-- end col -->
                                                </div>
                                               <button type="button" class="btn btn-success">Simpan Perubahan</button>
                                                <!-- end row-->                      
                                            </div> <!-- end preview-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->



                        

                <!-- content -->

                <!-- Footer Start -->
                @include('master.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

             @include('master.script')
             

    </body>


<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 04:00:53 GMT -->
</html>