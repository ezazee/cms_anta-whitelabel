<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title> Detail Laporan | Antar Bantuan Logistik </title>
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
                                    <h4 class="page-title">Detail Laporan</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Form Edit Table Data Kabupaten / Kota -->
                         <div class="row justify-content-center">
                            <div class="col-lg-7 col-md-10 col-sm-11">
        
                                <div class="text-center">
                                    <p> <strong> Kode Tugas </strong></p>
                                    <h1 class="text-danger mb-3">040123</h1>
                                    <p>Kode Transaksi</p>
                                    <h4> SHAFKsjfhsdkjfh </h4>
                                </div>
                                <div class="horizontal-steps mt-4 mb-4 pb-3" id="tooltip-container">
                                    <div class="horizontal-steps-content">
                                        <div class="step-item">
                                            <span data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="20/08/2022 07:24 PM">Mulai</span>
                                        </div>
                                        <div class="step-item current">
                                            <span data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="20/08/2022 09:24 PM">Bantuan Tersalurkan</span>
                                        </div>
                                    </div>
        
                                    <div class="process-line" style="width: 100%;"></div>
                                </div>
                                 <div class="text-center pb-5">
                                    <p> <strong> Status </strong></p>
                                    <h1 class="text-danger mb-3">Terkonfirmasi</h1>
                                    <p class="text-muted">24/01/2023</p>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->   

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- Product image -->
                                                <div class="d-lg-flex d-none justify-content-center">
                                                    <h4>Koordinator Yang Bertugas</h4>
                                                </div>
                                                <div class="d-lg-flex d-none justify-content-center">
                                                    <h2>Koordinator 1</>
                                                </div>
                                            </div> <!-- end col -->

                                             <div class="col-lg-12 mt-3">
                                                <div class="page-title-box">
                                                    <h4 class="page-title">Detail</h4>
                                                 </div>
                                                   <p class="mb-2"><span class="fw-bold me-2">Judul Bantuan :</span> Bantuan Donasi Banjir </p>

                                                  <p class="mb-2"><span class="fw-bold me-2">Kode Bantuan :</span> 021 </p>
                                                  
                                                  <p class="mb-2"><span class="fw-bold me-2">Jenis Bantuan :</span> Donasi </p>
                                                  
                                                  <p class="mb-2"><span class="fw-bold me-2">Nama Penerima Bantuan :</span> Reza Dharwangsa </p>
                                                  
                                                  <p class="mb-2"><strong class="fw-bold me-02">Alamat Penerima :</strong> <span><a href=https://www.google.com/maps/place/Jl.+Raya+Samarang+No.95,+Sukagalih,+Kec.+Tarogong+Kidul,+Kabupaten+Garut,+Jawa+Barat+44151/@-7.1954789,107.8784472,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68b09298783bf3:0x269d527564721b8!8m2!3d-7.1954789!4d107.8806359">Jl. Raya Samarang No.95, Sukagalih, Kec. Tarogong Kidul, Kabupaten Garut, Jawa Barat 44151</a></span></p>
                                                  
                                                  <p class="mb-2"><span class="fw-bold me-2">Jumlah Penghuni Bantuan :</span> 5 </p>
                                            </div>

                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="page-title-box">
                            <h4 class="page-title">Relawan Yang Ikut Bertugas</h4>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" style="overflow: scroll;">
                                            <div class="tab-pane show active" id="basic-datatable-preview">
                                                <table id="basic-datatable" class="table table-striped dt-responsive nowrap ">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>No</th>
                                                                                    <th>Nama</th>
                                                                                    <th>No HP</th>
                                                                                    <th>Nomor NIP/NRP</th>
                                                                                    <th>Asal Posda</th>
                                                                                    <th>Username Akun</th>
                                                                                    <th>Password Akun</th>
                                                                                    <th>Tanggal Dibuat Akun</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td> 1 </td>
                                                                                <td class="table-user">
                                                                                    <img src="{{ URL::asset('assets/images/profileza.jpeg') }}" alt="table-user" class="me-2 rounded-circle">
                                                                                    <a href="javascript:void(0);" class="text-body fw-semibold">Reza</a>
                                                                                </td>
                                                                                <td> 081313711180 </td>
                                                                                <td> - </td>
                                                                                <td> Posda 1 </td>
                                                                                <td> rezazee </td>
                                                                                <td> ********** </td>
                                                                                <td> 24-42-2022 </td>
                                                                                <td>
                                                                                        <form action="#">
                                                                                            <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('details-relawan') }}"></i>Detail</a>
                                                                                        </form>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>                                  
                                            </div> <!-- end preview-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>

                </div>
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