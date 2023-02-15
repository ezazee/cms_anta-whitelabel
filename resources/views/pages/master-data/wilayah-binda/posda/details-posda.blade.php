<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Detail Koordinator || Antar Bantuan Logistik</title>
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
                                    <h4 class="page-title">Detail Koordinator</h4>
                                </div>
                            </div>
                        </div>

                    <div class="card">
                                    <div class="card-body profile-user-box">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar-lg">
                                                            <img src="{{ URL::asset('assets/images/users/Foto.png') }}" alt="" class="rounded-circle img-thumbnail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div>
                                                            <h4 class="mt-1 mb-1 text-black">Dendi Prawan</h4>
                                                            <p class="font-13 text-black-50"> Kode Wilayah : <strong>001</strong> </p>

                                                            <p class="text-muted mb-2 font-13"><strong>Nomor HandPhone :</strong><span class="ms-2">089372389572</span></p>

                                                            <p class="text-muted mb-2 font-13"><strong>Status Verifikasi :</strong><span class="badge badge-success-lighten">Terverifikasi</span></p>

                                                            <p class="text-muted mb-1 font-13"><strong>Nomor NIP/NRP :</strong> <span class="ms-2">13509658721567</span></p>
                                                            
                                                            <p class="text-muted mb-1 font-13"><strong>Kantor Dinas :</strong> <span class="ms-2"><a href="https://www.google.com/maps/place/Starguard+Security/@-6.2539381,106.8295414,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69f3cdb86e2a85:0x61ca1a0c161d880a!8m2!3d-6.2540098!4d106.8317371">Jl. Duren Tiga Raya No.53, RT.8/RW.5, Duren Tiga, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12760</a></span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col-->
                                        </div> <!-- end row -->

                                    </div> <!-- end card-body/ profile-user-box-->
                                </div><!--end profile/ card -->


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
                                                                <label for="simpleinput" class="form-label">Nomor Handphone</label>
                                                                <input type="number" id="simpleinput" class="form-control" value="089372389572">
                                                            </div>
        
                                                            <div class="mb-3">
                                                                <label for="example-email" class="form-label">Username</label>
                                                                <input type="text" id="example-email" name="example-email" class="form-control" placeholder="Email" value="denduy">
                                                            </div>

                                                        </form>
                                                    </div> <!-- end col -->
        
                                                    <div class="col-lg-6">
                                                        <form>
                                                               <div class="mb-3">
                                                                <label for="example-email" class="form-label">Nomor NIP/NRP</label>
                                                                <input type="text" id="example-email" name="example-email" class="form-control" placeholder="Nomor NIP/NRP" value="13509658721567">
                                                            </div>

                                                             <div class="mb-3">
                                                                <label for="example-email" class="form-label">Alamat Kantor Dinas</label>
                                                                <input type="text" id="example-email" name="example-email" class="form-control" placeholder="Alamat" value="Jl. Duren Tiga Raya No.53, RT.8/RW.5, Duren Tiga, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12760">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="password" class="form-label">Password</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="password" id="password" class="form-control" placeholder="Enter your password" value="denduy123">
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

                                   <h4 class="page-title">List Relawan</h4>
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
                                                                <th>Wilayah</th>
                                                                <th>No HP</th>
                                                            </tr>
                                                        </thead>

                                                                <tbody>
                                                                    <tr>
                                                                        <td> 1 </td>
                                                                            <td class="table-user">
                                                                                <img src="{{ URL::asset('assets/images/profileza.jpeg') }}" alt="table-user" class="me-2 rounded-circle">
                                                                                <a href="javascript:void(0);" class="text-body fw-semibold">Reza</a>
                                                                            </td>
                                                                            <td> Lamongan </td>
                                                                            <td> 081313711180 </td>
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

                </div>

                    </div>
                    <!-- container -->

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