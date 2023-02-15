<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Wilayah Pimpinan | Antar Bantuan Logistik</title>
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
                                    <h4 class="page-title">Wilayah</h4>
                                     <ul class="nav nav-bordered mb-3">
                                            <li class="nav-item ml-5">
                                                <select class="form-select" id="status-select">
                                                    <option selected>Sumatera Utara</option>
                                                    <option value="1">Sumatera Barat</option>
                                                    <option value="2">Sumatera Selatan</option>
                                                    <option value="3">Riau</option>
                                                    <option value="4">Jambi</option>
                                                    <option value="5">Bengkulu</option>
                                                    <option value="6">Lampung</option>
                                                    <option value="7">Kepulauan Bangka Belitung</option>
                                                    <option value="8">Kepulauan Riau</option>
                                                    <option value="9">DKI Jakarta</option>
                                                    <option value="10">Jawa Barat</option>
                                                    <option value="11">Jawa Tengah</option>
                                                    <option value="12">DI Yogyakarta</option>
                                                    <option value="13">Jawa Timur</option>
                                                    <option value="14">Banten</option>
                                                    <option value="15">Bali</option>
                                                    <option value="16">Nusa Tengara Barat</option>
                                                    <option value="17">Nusa Tenggara Timur</option>
                                                    <option value="18">Kalimantan Barat</option>
                                                    <option value="19">Kalimantan Tengah</option>
                                                    <option value="20">Kalimantan Selatan</option>
                                                    <option value="21">Kalimantan Timur</option>
                                                    <option value="22">Kalimantan Utara</option>
                                                    <option value="23">Sulawesi Utara</option>
                                                    <option value="24">Sulawesi Tengah </option>
                                                    <option value="25">Sulawesi Selatan</option>
                                                    <option value="26">Sulawesi Tenggara</option>
                                                    <option value="27">Gorontalo</option>
                                                    <option value="28">Sulawesi Barat</option>
                                                    <option value="29">Maluku</option>
                                                    <option value="30">Maluku Utara</option>
                                                    <option value="31">Papua</option>
                                                    <option value="32">Papua Barat</option>
                                                </select>
                                            </li>
                                        </ul> <!-- end nav-->
                                </div>
                            </div>
                        </div>

                         <div class="row">
                            <div class="col-xl-12 col-lg-5">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="col-sm-12">
                                                <div class="text-center mt-sm-0 mt-3 text-sm-end">
                                                     <a class="btn btn-danger" href="{{ route('details-kabinda') }}">  <i class="mdi mdi-account-edit me-1"></i> Edit Profile Pimpinan</a>
                                                </div>
                                            </div> <!-- end col-->
                                        <img src="{{ URL::asset('assets/images/users/relawan.png') }}" class="rounded-circle avatar-lg img-thumbnail"
                                        alt="profile-image">

                                        <h4 class="mb-0 mt-2">Emil Mutaqin</h4>
                                        <p class="text-muted font-14">Pimpinan Sumatera Utara</p>

                                        <div class="text-start mt-3">
                                            <p class="text-muted mb-2 font-13"><strong>Nama Lengkap :</strong> <span class="ms-2">Emil Mutaqin</span></p>

                                            <p class="text-muted mb-1 font-13"><strong>Nomor NIP/NRP :</strong> <span class="ms-2">12509638721567</span></p>
                                            
                                            <p class="text-muted mb-1 font-13"><strong>Kantor Dinas :</strong> <span class="ms-2"><a href="https://www.google.com/maps/place/Starguard+Security/@-6.2539381,106.8295414,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69f3cdb86e2a85:0x61ca1a0c161d880a!8m2!3d-6.2540098!4d106.8317371">Jl. Duren Tiga Raya No.53, RT.8/RW.5, Duren Tiga, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12760</a></span></p>
                                        </div>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->

                            </div> <!-- end col-->

                            <div class="col-xl-12 col-lg-7">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="">Tentukan Kabupaten</h4>
                                         <ul class="nav nav-bordered mb-3">
                                            <li class="nav-item ml-5">
                                                <select class="form-select" id="status-select">
                                                    <option selected>Medan</option>
                                                    <option value="1">Lamongan</option>
                                                    <option value="2">Bitung</option>
                                                    <option value="3">Madiun</option>                                    <option value="4">Garut</option>
                                                </select>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="bordered-justified-tabs-preview">
                                                <ul class="nav nav-tabs nav-justified nav-bordered mb-3">
                                                    <li class="nav-item">
                                                        <a href="#posda" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                            <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                                            <span class="d-none d-md-block">Koordinator</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#relawan" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                            <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                                            <span class="d-none d-md-block">Relawan</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane show active" id="posda">
                                                                    <div class="tab-pane show active" id="scroll-horizontal-preview">
                                                                        <table id="scroll-horizontal-datatable" class="table table-striped dt-responsive nowrap ">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>No</th>
                                                                                    <th>Nama</th>
                                                                                    <th>No HP</th>
                                                                                    <th>Status Verifikasi</th>
                                                                                    <th>Nomor NIP/NRP</th>
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
                                                                                    <img src="{{ URL::asset('assets/images/users/Foto.png') }}" alt="table-user" class="me-2 rounded-circle">
                                                                                    <a href="javascript:void(0);" class="text-body fw-semibold">Dendi Prawan</a>
                                                                                </td>
                                                                                <td> 089372389572 </td>
                                                                                 <td><h5><span class="badge badge-success-lighten">Terverifikasi</span></h5></td>
                                                                                <td> 13509658721567 </td>
                                                                                <td> denduy </td>
                                                                                <td> ********** </td>
                                                                                <td> 24-42-2022 </td>
                                                                                <td>
                                                                                        <form action="#">
                                                                                            <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('details-posda') }}"></i>Lihat</a>
                                                                                            <button type="submit" class="btn btn-danger waves-effect btn-label waves-light btn-sm show_confirm">Hapus</button>
                                                                                        </form>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>                                  
                                                                    </div> <!-- end preview-->
                                                                </div>


                                                    <div class="tab-pane" id="relawan">
                                                                    <div class="tab-pane show active" id="basic-datatable-preview">
                                                                        <table id="basic-datatable" class="table table-striped dt-responsive nowrap ">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>No</th>
                                                                                    <th>Nama</th>
                                                                                    <th>No HP</th>
                                                                                    <th>Status Verifikasi</th>
                                                                                    <th>Direkrut Oleh</th>
                                                                                    <th>Asal Wilayah</th>
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
                                                                                <td><h5><span class="badge badge-success-lighten">Terverifikasi</span></h5></td>
                                                                                <td> Dendi Prawan </td>
                                                                                <td> Lamongan </td>
                                                                                <td> rezazee </td>
                                                                                <td> ********** </td>
                                                                                <td> 24-42-2022 </td>
                                                                                <td>
                                                                                        <form action="#">
                                                                                            <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('details-relawan') }}"></i>Lihat</a>
                                                                                            <button type="submit" class="btn btn-danger waves-effect btn-label waves-light btn-sm show_confirm">Hapus</button>
                                                                                        </form>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>                                  
                                                                    </div> <!-- end preview-->
                                                    </div>
                                                </div>                                          
                                            </div> <!-- end preview-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->


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