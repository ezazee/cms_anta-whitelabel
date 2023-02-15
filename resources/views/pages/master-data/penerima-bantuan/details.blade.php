<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Penerima Bantuan | Antar Bantuan Logistik</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="CMS Antar Untuk Bantuan Logistik" name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

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

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Detail Penerima Bantuan</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <!-- Bukti Penerima -->
                                                <a href="javascript: void(0);" class="text-center d-block mb-4">
                                                    <img src="{{ URL::asset('assets/images/selfie-ktp.jpg') }}" class="img-fluid" style="max-width: 280px;" alt="Product-img" />
                                                </a>
                                                <div class="d-lg-flex d-none justify-content-center">
                                                    <h4>Bukti Foto Selfie KTP</h4>
                                                </div>
                                            </div> <!-- end Bukti Foto Penerima -->

                                            <div class="col-lg-4">
                                                <!-- Bukti Foto KTP -->
                                                <a href="javascript: void(0);" class="text-center d-block mb-4">
                                                    <img src="{{ URL::asset('assets/images/ktp.jpg') }}" class="img-fluid" style="max-width: 280px;" alt="Product-img" />
                                                </a>
                                                <div class="d-lg-flex d-none justify-content-center">
                                                    <h4>Bukti KTP Penerima</h4>
                                                </div>
                                            </div> <!-- end Bukti Foto KTP -->

                                            <div class="col-lg-4">
                                                <!-- Product image -->
                                                <a href="javascript: void(0);" class="text-center d-block mb-4">
                                                    <img src="{{ URL::asset('assets/images/selfie-stiker.jpg') }}" class="img-fluid" style="max-width: 280px;" alt="Product-img" />
                                                </a>
                                                <div class="d-lg-flex d-none justify-content-center">
                                                    <h4>Foto Depan Stiker</h4>
                                                </div>
                                            </div> <!-- end col -->


                                            <div class="col-lg-6 mt-5">
                                                   <p class="mb-2"><span class="fw-bold me-2">Nama Penerima :</span> Reza Dhawrwangsa </p>
                                                  
                                                  <p class="mb-2"><span class="fw-bold me-2">Pekerjaan :</span> Wiraswasta </p>
                                                  
                                                  <p class="mb-2"><span class="fw-bold me-2">NO KTP :</span> 23874629385629387 </p>
                                                  
                                                  <p class="mb-2"><span class="fw-bold me-2">NO HP :</span> 83712u3409 </p>
                                                  
                                            </div>

                                            <div class="col-lg-6 mt-5">
                                                 <p class="mb-2"><strong class="fw-bold me-02">Alamat Penerima :</strong> <span><a href=https://www.google.com/maps/place/Jl.+Raya+Samarang+No.95,+Sukagalih,+Kec.+Tarogong+Kidul,+Kabupaten+Garut,+Jawa+Barat+44151/@-7.1954789,107.8784472,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68b09298783bf3:0x269d527564721b8!8m2!3d-7.1954789!4d107.8806359">Jl. Raya Samarang No.95, Sukagalih, Kec. Tarogong Kidul, Kabupaten Garut, Jawa Barat 44151</a></span></p>

                                                    <p class="mb-2"><span class="fw-bold me-2">Patokan Alamat :</span> Mesjid Putih </p>

                                                    <p class="mb-2"><span class="fw-bold me-2">Jumlah Anggota Keluarga :</span> 3 </p>
                                                  
                                                  <p class="mb-2"><span class="fw-bold me-2">Jumlah Penghuni Baru :</span> 1 </p>
                                            </div>

                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

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