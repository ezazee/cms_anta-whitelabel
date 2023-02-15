<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Detail Relawan | Antar Bantuan Logistik</title>
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
                                    <h4 class="page-title">Detail Relawan</h4>
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
                                                            <img src="{{ URL::asset('assets/images/profileza.jpeg') }}" alt="" class="rounded-circle img-thumbnail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div>
                                                            <h4 class="mt-1 mb-1 text-black">Reza</h4>

                                                            <p class="font-13 text-black-50"> Kode Wilayah : <strong>001</strong> </p>

                                                            <p class="text-muted mb-2 font-13"><strong>Nomor HandPhone :</strong><span class="ms-2">081313711180</span></p>

                                                            <p class="text-muted mb-2 font-13"><strong>Email :</strong><span class="ms-2">reza12@email.com</span></p>
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
                                                                <input type="text" id="simpleinput" class="form-control" value="Reza">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="simpleinput" class="form-label">Nomor Handphone</label>
                                                                <input type="number" id="simpleinput" class="form-control" value="081313711180">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label class="form-label" for="validationCustom01">Email</label>
                                                                    <input value="reza12@email.com" type="email" class="form-control" id="validationCustom01" placeholder="Isi Email" required>
                                                                        <div class="invalid-feedback">
                                                                            Isikan Email Terlebihdahulu.
                                                                        </div>
                                                             </div>

                                                        </form>
                                                    </div> <!-- end col -->
        
                                                    <div class="col-lg-6">
                                                        <form>

                                                         <div class="mb-3">
                                                                <label for="example-email" class="form-label">Username Untuk Aplikasi Antar</label>
                                                                <input type="text" id="example-email" name="example-email" class="form-control" placeholder="username" value="rezazee">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="password" class="form-label">Password</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="password" id="password" class="form-control" placeholder="Enter your password" value="rezazee123">
                                                                    <div class="input-group-text" data-password="false">
                                                                        <span class="password-eye"></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="example-select" class="form-label">Direkrut Dari Koordinator</label>
                                                                    <select disabled required class="form-select" id="example-select">
                                                                        <option>Pilih Koordinator</option>
                                                                        <option selected value="1">Emile Mutaqin</option>
                                                                        <option value="2">Andre</option>
                                                                        <option value="3">Fauzi 3</option>
                                                                    </select>
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

                                   <h4 class="page-title">Riwayat Tugas</h4>
                                     <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" style="overflow: scroll;">
                                            <div class="tab-pane show active" id="basic-datatable-preview">
                                                <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Bantuan</th>
                                                            <th>Kode Tugas</th>
                                                            <th> Kode Transaksi </th>
                                                            <th>Jenis Bantuan</th>
                                                            <th>Status</th>
                                                            <th>Tanggal </th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <td> 1 </td>
                                                            <td> Bantuan Donasi Banjir </td>
                                                            <td> 040123 </td>
                                                            <td> SHAFKsjfhsdkjfh </td>
                                                            <td>Donasi</td>
                                                            <td><h5><span class="badge badge-success-lighten">Terkonfirmasi</span></h5></td>
                                                            <td>24/01/2023</td>
                                                           <td>
                                                                <form action="">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('detail-bantuan') }}"><i class=" mdi mdi-tooltip-edit label-icon"></i> Detail</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                           <tr>
                                                            <td> 2 </td>
                                                            <td> Bantuan Bencana Tsunami Di Medan </td>
                                                            <td> 040123 </td>
                                                            <td> SHAFKsjfhsdkjfh </td>
                                                            <td> Bencana </td>
                                                            <td><h5><span class="badge badge-danger-lighten">Nonkonfirmasi</span></h5></td>
                                                            <td>24/01/2023</td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('detail-bantuan') }}"><i class=" mdi mdi-tooltip-edit label-icon"></i> Detail</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                          <tr>
                                                            <td> 3 </td>
                                                            <td> Bantuan Sumbangan Panti Jompo Di Medan </td>
                                                            <td> 040123 </td>
                                                            <td> SHAFKsjfhsdkjfh </td>
                                                            <td>Sumbangan</td>
                                                            <td><h5><span class="badge badge-success-lighten">Terkonfirmasi</span></h5></td>
                                                            <td>24/01/2023</td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('detail-bantuan') }}"><i class=" mdi mdi-tooltip-edit label-icon"></i> Detail</a>
                                                                </form>
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <td> 4 </td>
                                                            <td> Bantuan Sosial Kepada Anak Yatim </td>
                                                            <td> 040123 </td>
                                                            <td> SHAFKsjfhsdkjfh </td>
                                                            <td>Sosial</td>
                                                            <td><h5><span class="badge badge-danger-lighten">Nonkonfirmasi</span></h5></td>
                                                            <td>24/01/2023</td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('detail-bantuan') }}"><i class=" mdi mdi-tooltip-edit label-icon"></i> Detail</a>
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