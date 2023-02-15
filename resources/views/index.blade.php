<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title>CMS Antar | Bantuan Logistik</title>
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
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card widget-inline">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0">
                                                    <button class="card-body text-center btn btn-white" data-bs-toggle="modal" data-bs-target="#bantuan-saluran">
                                                        <i class="ri-bar-chart-2-line text-muted font-24"></i>
                                                        <h3><span>150432</span></h3>
                                                        <p class="text-muted font-15 mb-0">Bantuan Tersalurkan</p>
                                                    </button>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                    <button class="card-body text-center btn btn-white" data-bs-toggle="modal" data-bs-target="#user-kabinda">
                                                        <i class=" ri-shield-star-fill text-muted font-24"></i>
                                                        <h3><span>34</span></h3>
                                                        <p class="text-muted font-15 mb-0">User Pimpinan</p>
                                                    </button>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                    <button class="card-body text-center btn btn-white" data-bs-toggle="modal" data-bs-target="#user-posda">
                                                        <i class="ri-shield-user-fill text-muted font-24"></i>
                                                        <h3><span>2800</span></h3>
                                                        <p class="text-muted font-15 mb-0">User Koordinator</p>
                                                    </button>
                                                </div>
                                            </div>
                
                                             <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                    <button class="card-body text-center btn btn-white" data-bs-toggle="modal" data-bs-target="#user-relawan">
                                                        <i class=" ri-shield-user-line text-muted font-24"></i>
                                                        <h3><span>14000</span></h3>
                                                        <p class="text-muted font-15 mb-0">Relawan</p>
                                                    </button>
                                                </div>
                                            </div>

                                             <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                    <button class="card-body text-center btn btn-white" data-bs-toggle="modal" data-bs-target="#penerima-bantuan">
                                                        <i class=" ri-user-star-fill text-muted font-24"></i>
                                                        <h3><span>52452</span></h3>
                                                        <p class="text-muted font-15 mb-0">Penerima Bantuan <br> Berdasarkan NIK</p>
                                                    </button>
                                                </div>
                                            </div>

                                             <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                    <button class="card-body text-center btn btn-white" data-bs-toggle="modal" data-bs-target="#tambah-penerima">
                                                        <i class=" ri-user-star-line text-muted font-24"></i>
                                                        <h3><span>52452</span></h3>
                                                        <p class="text-muted font-15 mb-0">Total Tambahan Penerima Keluarga</p>
                                                    </button>
                                                </div>
                                            </div>


                                             <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                    <button class="card-body text-center btn btn-white" data-bs-toggle="modal" data-bs-target="#penerima-feriv">
                                                        <i class="  ri-user-follow-fill text-muted font-24"></i>
                                                        <h3><span>52452</span></h3>
                                                        <p class="text-muted font-15 mb-0">Terkonfirmasi</p>
                                                    </button>
                                                </div>
                                            </div>
                                            
                                             <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                    <button class="card-body text-center btn btn-white" data-bs-toggle="modal" data-bs-target="#penerima-nonferiv">
                                                        <i class="  ri-user-unfollow-fill text-muted font-24"></i>
                                                        <h3><span>52452</span></h3>
                                                        <p class="text-muted font-15 mb-0">Nonkonfirmasi</p>
                                                    </button>
                                                </div>
                                            </div>
                
                                        </div> <!-- end row -->
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>

                        
                                <!-- MODAL NYA DSIINI!! -->
                                        <!-- Modal Bantuan Tersalurkan -->
                                                <div id="bantuan-saluran" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="standard-modalLabel">Bantuan Tersalurkan</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
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
                                                                                                    <th>Status</th>
                                                                                                    <th>Tanggal </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td> 1 </td>
                                                                                                    <td> Bantuan Donasi Banjir </td>
                                                                                                    <td> 040123 </td>
                                                                                                    <td><h5><span class="badge badge-success-lighten">Ferivikasi</span></h5></td>
                                                                                                    <td>24/01/2023</td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td> 2 </td>
                                                                                                    <td> Bantuan Subsidi Bahan Pangan Di Medan </td>
                                                                                                    <td> 040123 </td>
                                                                                                    <td><h5><span class="badge badge-danger-lighten">Nonkonfirmasi</span></h5></td>
                                                                                                    <td>24/01/2023</td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td> 3 </td>
                                                                                                    <td> Bantuan Makanan Di Medan </td>
                                                                                                    <td> 040123 </td>
                                                                                                    <td><h5><span class="badge badge-success-lighten">Ferivikasi</span></h5></td>
                                                                                                    <td>24/01/2023</td>
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
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                            <a class="btn btn-primary" href="/bantuan">Selengkapnya</a>
                                                        </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            <!-- END Modal Bantuan Saluran -->


                                              <!-- Modal User Kabinda -->
                                                <div id="user-kabinda" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="standard-modalLabel">User Kabinda</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
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
                                                                                                    <th>Nama</th>
                                                                                                    <th>Wilayah Provinsi</th>
                                                                                                    <th>Nomor HP</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td> 1 </td>
                                                                                                    <td> Emile Mutaqin </td>
                                                                                                    <td> Sumatera Utara </td>
                                                                                                    <td> 02345893242305 </td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td> 2 </td>
                                                                                                    <td> Reza Dharwangsa </td>
                                                                                                    <td> Maluku Utara </td>
                                                                                                    <td> 3242352423405 </td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td> 3 </td>
                                                                                                    <td> Rumongso </td>
                                                                                                    <td> Papua </td>
                                                                                                    <td> 3724623527345 </td>
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
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <a class="btn btn-primary" href="/wilayah-binda">Selengkapnya</a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            <!-- END Modal User Kabinda -->


                                              <!-- Modal User posda -->
                                                <div id="user-posda" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="standard-modalLabel">User Posda</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
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
                                                                                                    <th>Nama</th>
                                                                                                    <th>Wilayah Provinsi</th>
                                                                                                    <th>Nomor HP</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td> 1 </td>
                                                                                                    <td> Posda 1 </td>
                                                                                                    <td> Sumatera Utara </td>
                                                                                                    <td> 02345893242305 </td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td> 2 </td>
                                                                                                    <td> Posda 2 </td>
                                                                                                    <td> Maluku Utara </td>
                                                                                                    <td> 3242352423405 </td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td> 3 </td>
                                                                                                    <td> Posda 3 </td>
                                                                                                    <td> Papua </td>
                                                                                                    <td> 3724623527345 </td>
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
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <a class="btn btn-primary" href="/wilayah-binda">Selengkapnya</a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            <!-- END Modal User posda -->


                                              <!-- Modal User relawan -->
                                                <div id="user-relawan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="standard-modalLabel">Akun Relawan</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
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
                                                                                                    <th>Nama</th>
                                                                                                    <th>Asal Posda</th>
                                                                                                    <th>Nomor HP</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td> 1 </td>
                                                                                                    <td> Rumongso </td>
                                                                                                    <td> Posda 1 </td>
                                                                                                    <td> 02345893242305 </td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td> 2 </td>
                                                                                                    <td> Reza ezi </td>
                                                                                                    <td> Posda 2 </td>
                                                                                                    <td> 3242352423405 </td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td> 3 </td>
                                                                                                    <td> Tuti Astuir </td>
                                                                                                    <td> Posda 3 </td>
                                                                                                    <td> 3724623527345 </td>
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
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <a class="btn btn-primary" href="/wilayah-binda">Selengkapnya</a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            <!-- END Modal User relawan -->


                                             <!-- Modal Penerima Bantuan -->
                                                <div id="penerima-bantuan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="standard-modalLabel">Penerima Bantuan</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
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
                                                                                                    <th>Nama Penerima</th>
                                                                                                    <th>No Induk KTP</th>
                                                                                                    <th>Alamat Sesuai KTP</th>
                                                                                                    <th>Stauts</th>
                                                                                                    <th>tgl Laporan</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td> 1 </td>
                                                                                                    <td> Reza </td>
                                                                                                    <td> 23541534654567 </td>
                                                                                                    <td> Jln. Sutomo No 12	 </td>
                                                                                                    <td><h5><span class="badge badge-success-lighten">Terkonfirmasi</span></h5></td>
                                                                                                    <td>24-42-2022</td>
                                                                                                </tr>

                                                                                                 <tr>
                                                                                                    <td> 2 </td>
                                                                                                    <td> Rumongso </td>
                                                                                                    <td> 23541534654567 </td>
                                                                                                    <td> Jln. Manggis No 28	 </td>
                                                                                                    <td><h5><span class="badge badge-danger-lighten">Nonkonfirmasi</span></h5></td>
                                                                                                    <td>24-42-2022</td>
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
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <a class="btn btn-primary" href="/penerima">Selengkapnya</a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            <!-- END Modal Penerima Bantuan -->

                                             <!-- Modal Tambah Penerima -->
                                                <div id="tambah-penerima" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="standard-modalLabel">Tambahan Keluarga Penerima Bantuan</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
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
                                                                                                    <th>Nama Keluarga Penerima</th>
                                                                                                    <th>No Induk KTP Penerima</th>
                                                                                                    <th>Jumlah Keluarga</th>
                                                                                                    <th>tgl Laporan</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td> 1 </td>
                                                                                                    <td> Reza </td>
                                                                                                    <td> 23541534654567 </td>
                                                                                                    <td>5</td>
                                                                                                    <td>24-42-2022</td>
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
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                 <a class="btn btn-primary" href="/penerima">Selengkapnya</a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            <!-- END Modal Tambah Penerima -->

                                            
                                             <!-- Modal Penerima Feriv -->
                                                <div id="penerima-feriv" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="standard-modalLabel">Penerima Terkonfirmasi</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
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
                                                                                                    <th>Nama Penerima</th>
                                                                                                    <th>No Induk KTP</th>
                                                                                                    <th>Alamat Sesuai KTP</th>
                                                                                                    <th>Status</th>
                                                                                                    <th>tgl Laporan</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td> 1 </td>
                                                                                                    <td> Reza </td>
                                                                                                    <td> 23541534654567 </td>
                                                                                                    <td> Jln. Sutomo No 12	 </td>
                                                                                                    <td><h5><span class="badge badge-success-lighten">Terkonfirmasi</span></h5></td>
                                                                                                    <td>24-42-2022</td>
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
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                 <a class="btn btn-primary" href="/penerima">Selengkapnya</a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            <!-- END Modal Penerima Feriv  -->


                                             <!-- Modal Penerima NonFeriv -->
                                                <div id="penerima-nonferiv" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="standard-modalLabel">Penerima Nonkonfirmasi</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
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
                                                                                                    <th>Nama Penerima</th>
                                                                                                    <th>No Induk KTP</th>
                                                                                                    <th>Alamat Sesuai KTP</th>
                                                                                                    <th>Status</th>
                                                                                                    <th>tgl Laporan</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td> 1 </td>
                                                                                                    <td> Rumongso </td>
                                                                                                    <td> 23541534654567 </td>
                                                                                                    <td> Jln. Manggis No 28	 </td>
                                                                                                    <td><h5><span class="badge badge-danger-lighten">Nonkonfirmasi</span></h5></td>
                                                                                                    <td>24-42-2022</td>
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
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                 <a class="btn btn-primary" href="/penerima">Selengkapnya</a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            <!-- END Modal Penerima NonFeriv -->


                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                         <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#list-kegiatan">Lihat Semua Kegiatan</button>
                                    </div>
                                    <h4 class="page-title">Kegiatan</h4>
                                </div>
                            </div>


                            <!-- Modal Modal List Kegiatan -->
                                                <div id="list-kegiatan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="standard-modalLabel">List Kegiatan</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
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
                                                                                                    <th>Total Bantuan</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td> 1 </td>
                                                                                                    <td> Subsidi </td>
                                                                                                    <td> 412 </td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td> 2 </td>
                                                                                                    <td> Bantuan Pokok Non Tunai </td>
                                                                                                    <td> 321 </td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td> 3 </td>
                                                                                                    <td> Bansos </td>
                                                                                                    <td> 116 </td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td> 4 </td>
                                                                                                    <td> Senbako </td>
                                                                                                    <td> 332 </td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td> 5 </td>
                                                                                                    <td> Program Kartu Prakerja </td>
                                                                                                    <td> 145 </td>
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
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                 <a class="btn btn-primary" href="/penerima">Selengkapnya</a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            <!-- END Modal List Kegiatan -->

                            <!-- Chart Bantuan Donasi -->
                            <div class="col-xxl-3 col-md-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <button class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#bantuan-donasi">View</button>
                                        </div>
                                        <h6 class="text-muted text-uppercase mt-0" title="Revenue">Bantuan Donasi</h6>
                                        <h4 class="mb-4 mt-2">934</h4>
                                        <div id="spark1" class="apex-charts mb-3" data-colors="#f4516c"></div>
                                        <div class="row text-center">
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Awal Bulan</h6>
                                                <p class="font-18 mb-0 text-success">+15%</p>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Akhir Bulan</h6>
                                                <p class="font-18 mb-0 text-danger">-6.87%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->


                            <!-- Chart Bantuan Bencana -->
                            <div class="col-xxl-3 col-md-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <button class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#bantuan-bencana">View</button>
                                        </div>
                                        <h6 class="text-muted text-uppercase mt-0" title="Revenue">Bantuan Bencana</h6>
                                        <h4 class="mb-4 mt-2">344</h4>
                                        <div id="spark2" class="apex-charts mb-3" data-colors="#f4516c"></div>
                                        <div class="row text-center">
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Awal Bulan</h6>
                                                <p class="font-18 mb-0 text-success">+15%</p>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Akhir Bulan</h6>
                                                <p class="font-18 mb-0 text-danger">-6.87%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->


                            <!-- Chart Bantuian Sumbangan -->
                            <div class="col-xxl-3 col-md-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <button class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#bantuan-sumbangan">View</button>
                                        </div>
                                        <h6 class="text-muted text-uppercase mt-0" title="Revenue">Bantuan Sumbangan</h6>
                                        <h4 class="mb-4 mt-2">324</h4>
                                        <div id="spark3" class="apex-charts mb-3" data-colors="#f4516c"></div>
                                       <div class="row text-center">
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Awal Bulan</h6>
                                                <p class="font-18 mb-0 text-success">+15%</p>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Akhir Bulan</h6>
                                                <p class="font-18 mb-0 text-danger">-6.87%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->


                            <!-- Chart Bantuan Sosial -->
                            <div class="col-xxl-3 col-md-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <button class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#bantuan-sosial">View</button>
                                        </div>
                                        <h6 class="text-muted text-uppercase mt-0" title="Revenue">Bantuan Sosial</h6>
                                        <h4 class="mb-4 mt-2">582</h4>
                                        <div id="spark4" class="apex-charts mb-3" data-colors="#f4516c"></div>

                                        <div class="row text-center">
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Awal Bulan</h6>
                                                <p class="font-18 mb-0 text-success">+15%</p>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Akhir Bulan</h6>
                                                <p class="font-18 mb-0 text-danger">-6.87%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                                             <!-- Modal Modal Chartr bantuan Donasi -->
                                                <div id="bantuan-donasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="standard-modalLabel">Bantuan Donasi</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
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
                                                                                                    <th>Jenis Bantuan</th>
                                                                                                    <th>Status</th>
                                                                                                    <th>tgl Laporan</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td> 1 </td>
                                                                                                    <td> Bantuan Donasi Banjir </td>
                                                                                                    <td> 040123 </td>
                                                                                                    <td> Donasi </td>
                                                                                                    <td><h5><span class="badge badge-success-lighten">Terkonfirmasi</span></h5></td>
                                                                                                    <td>24/01/20232</td>
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
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <a class="btn btn-primary" href="/bantuan">Selengkapnya</a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            <!-- END Modal Bantuan Donasi -->




                                             <!-- Modal Modal Chartr bantuan Bencana -->
                                                 <div id="bantuan-bencana" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="standard-modalLabel">Bantuan Bencana</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
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
                                                                                                    <th>Jenis Bantuan</th>
                                                                                                    <th>Status</th>
                                                                                                    <th>tgl Laporan</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td> 1 </td>
                                                                                                    <td> Bantuan Bencana Tsunami Di Medan </td>
                                                                                                    <td> 040123 </td>
                                                                                                    <td> Bencana </td>
                                                                                                    <td><h5><span class="badge badge-danger-lighten">Nonkonfirmasi</span></h5></td>
                                                                                                    <td>24/01/20232</td>
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
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <a class="btn btn-primary" href="/bantuan">Selengkapnya</a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            <!-- END Modal Bantuan Bencana -->


                                            <!-- Modal Chart Bantuan Sumbangan -->
                                            <div id="bantuan-sumbangan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="standard-modalLabel">Bantuan Sumbangan</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
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
                                                                                                    <th>Jenis Bantuan</th>
                                                                                                    <th>Status</th>
                                                                                                    <th>tgl Laporan</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td> 1 </td>
                                                                                                    <td> Bantuan Sumbangan Panti Jompo Di Medan </td>
                                                                                                    <td> 040123 </td>
                                                                                                    <td> Sumbangan </td>
                                                                                                    <td><h5><span class="badge badge-success-lighten">Terkonfirmasi</span></h5></td>
                                                                                                    <td>24/01/20232</td>
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
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <a class="btn btn-primary" href="/bantuan">Selengkapnya</a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            <!-- END Modal Bantuan Sumbangan -->

                                            

                                             <!-- Modal Chart Bantuan Sosial -->
                                            <div id="bantuan-sosial" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="standard-modalLabel">Bantuan Sosial</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
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
                                                                                                    <th>Jenis Bantuan</th>
                                                                                                    <th>Status</th>
                                                                                                    <th>tgl Laporan</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>

                                                                                                <tr>
                                                                                                    <td> 1 </td>
                                                                                                    <td> Bantuan Sosial Kepada Anak Yatim </td>
                                                                                                    <td> 040123 </td>
                                                                                                    <td> Sosial </td>
                                                                                                    <td><h5><span class="badge badge-danger-lighten">Nonkonfirmasi</span></h5></td>
                                                                                                    <td>24/01/20232</td>
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
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <a class="btn btn-primary" href="/bantuan">Selengkapnya</a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            <!-- END Modal Bantuan Sosial -->

                        <div class="row">
                            <div class="col-lg-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="nav float-end d-none d-lg-flex">
                                             <div>
                                            <button type="button" class="btn btn-soft-primary btn-sm">
                                                1 Bulan
                                            </button>
                                        </div>
                                        </ul>
                                        <h4 class="header-title mb-3">Chart Saluran Bantuan</h4>

                                        <div dir="ltr">
                                            <div id="spline-area" class="apex-charts mt-5" data-colors="#E62129, #000"></div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>

                            <!-- Top Mtra Kabupaten -->
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                            <div class="card-body">
                                <h4 class="card-title p-2 border-bottom bg-light">Wilayah Pimpinan</h4>
                                <div class="table-responsive" style="overflow-y: scroll; height: 370px;">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Provinsi</th>
                                        <th>Total Saluran Bantuan / Bulan</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Aceh</td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sumatera Utara</td>
                                        <td>250</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Sumatera Barat</td>
                                        <td>590</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Riau</td>
                                        <td>1000</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Jambi</td>
                                        <td>1543</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Sumatera Selatan</td>
                                        <td>423</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Bengkulu</td>
                                        <td>414</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Lampung</td>
                                        <td>3434</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Kepulauan Bangka Belitung</td>
                                        <td>4144</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Kepulauan Riau</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>11</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>12</td>
                                        <td>Jawa Barat</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>13</td>
                                        <td>Jawa Tengah</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>14</td>
                                        <td>DI Yogyakarta</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>15</td>
                                        <td>Jawa Timur</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>16</td>
                                        <td>Banten</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>17</td>
                                        <td>Bali</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>18</td>
                                        <td>Nusa Tenggara Barat</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>19</td>
                                        <td>Nusa Tenggara Timur</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>20</td>
                                        <td>Kalimantan Barat</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>21</td>
                                        <td>Kalimantan Tengah</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>22</td>
                                        <td>Kalimantan Selatan</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>23</td>
                                        <td>Kalimantan Timur</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>24</td>
                                        <td>Kalimantan Utara</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>25</td>
                                        <td>Sulawesi Utara</td>
                                        <td>4124</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>26</td>
                                        <td>Sulawesi Tengah</td>
                                        <td>4124</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>27</td>
                                        <td>Sulawesi Selatan</td>
                                        <td>4124</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>28</td>
                                        <td>Sulawesi Tenggara</td>
                                        <td>4124</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>29</td>
                                        <td>Gorontalo</td>
                                        <td>4124</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>30</td>
                                        <td>Sulawesi Barat</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>31</td>
                                        <td>Maluku</td>
                                        <td>4124</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>32</td>
                                        <td>Maluku Utara</td>
                                        <td>4124</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>33</td>
                                        <td>Papua</td>
                                        <td>4124</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>34</td>
                                        <td>Papua Barat</td>
                                        <td>4124</td>
                                    </tr>

                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                        </div>
</div>
</div>
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="d-flex card-header justify-content-between align-items-center">
                                        <h4 class="header-title">Peta Wilayah Pimpinan di Indonesia</h4>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div id="map" class="mt-3 mb-3" style="height: 300px">
                                                </div>
                                            </div>
                                            <div class="col-lg-4" dir="ltr" style="overflow-y: scroll; height: 370px;">
                                                <h4 class="header-title">Total Koordinator Dan Relawan</h4>
                                                 <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Daerah</th>
                                        <th>Koordinator</th>
                                        <th>Relawan</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Aceh</td>
                                        <td>150</td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sumatera Utara</td>
                                        <td>250</td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Sumatera Barat</td>
                                        <td>590</td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Riau</td>
                                        <td>1000</td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Jambi</td>
                                        <td>1543</td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Sumatera Selatan</td>
                                        <td>423</td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Bengkulu</td>
                                        <td>414</td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Lampung</td>
                                        <td>3434</td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Kepulauan Bangka Belitung</td>
                                        <td>4144</td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Kepulauan Riau</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>11</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>12</td>
                                        <td>Jawa Barat</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>13</td>
                                        <td>Jawa Tengah</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>14</td>
                                        <td>DI Yogyakarta</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>15</td>
                                        <td>Jawa Timur</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>16</td>
                                        <td>Banten</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>17</td>
                                        <td>Bali</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>18</td>
                                        <td>Nusa Tenggara Barat</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>19</td>
                                        <td>Nusa Tenggara Timur</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>20</td>
                                        <td>Kalimantan Barat</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>21</td>
                                        <td>Kalimantan Tengah</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>22</td>
                                        <td>Kalimantan Selatan</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>23</td>
                                        <td>Kalimantan Timur</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>24</td>
                                        <td>Kalimantan Utara</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>25</td>
                                        <td>Sulawesi Utara</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>26</td>
                                        <td>Sulawesi Tengah</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>27</td>
                                        <td>Sulawesi Selatan</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>28</td>
                                        <td>Sulawesi Tenggara</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>29</td>
                                        <td>Gorontalo</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>30</td>
                                        <td>Sulawesi Barat</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>31</td>
                                        <td>Maluku</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>32</td>
                                        <td>Maluku Utara</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>33</td>
                                        <td>Papua</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>34</td>
                                        <td>Papua Barat</td>
                                        <td>4124</td>
                                        <td>150</td>
                                    </tr>

                                    </tbody>
                                </table>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        </div>
                        <!-- end row -->

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