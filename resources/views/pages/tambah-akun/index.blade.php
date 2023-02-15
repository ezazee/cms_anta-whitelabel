<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
         <title>Tambah Akun | Antar Bantuan Logistik</title>
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
                                    <h4 class="page-title">Tambah Akun</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Table Data Kabupaten / Kota -->
                     <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                     <div class="card-body">
                                        <h4 class="header-title">Create Akun</h4>
                                        <p class="text-muted font-14 mb-3">
                                            Tambah Akun Untuk Ketiga Jenis Akun yang berbeda
                                        </p>

                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="bordered-justified-tabs-preview">
                                                <ul class="nav nav-tabs nav-justified nav-bordered mb-3">
                                                    <li class="nav-item">
                                                        <a href="#Pimpinan" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                            <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                                            <span class="d-none d-md-block">Pimpinan</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#Koordinator" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                            <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                                            <span class="d-none d-md-block">Koordinator</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#relawan" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                            <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                            <span class="d-none d-md-block">Relawan</span>
                                                        </a>
                                                    </li>
                                                </ul>
        
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="Pimpinan">
                                                        <h4 class="header-title mb-2">Akun Pimpinan</h4>
                                                        <p class="mb-4">Akun Pimpinan Yang Ditujukan Untuk Aplikasi Antar Khusus Pimpinan</p>
                                                            <div class="tab-content">
                                                                <div class="tab-pane show active" id="custom-styles-preview">
                                                                    <div class="col-lg-6">
                                                                        <form class="needs-validation" novalidate>
                                                                             <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Nama Pimpinan</label>
                                                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Isi Nama" required>
                                                                                <div class="invalid-feedback">
                                                                                    Isikan Nama Terlebih Dahulu.
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Username</label>
                                                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Isi Username" required>
                                                                                <div class="invalid-feedback">
                                                                                    Isikan Username Terlebih Dahulu.
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom02">Password</label>
                                                                                    <div class="input-group input-group-merge">
                                                                                        <input type="password" id="password" class="form-control" placeholder="Masukan Password" required>
                                                                                        <div class="invalid-feedback">
                                                                                    Isikan Password Terlebih Dahulu.
                                                                                </div>
                                                                                        <div class="input-group-text" data-password="false">
                                                                                            <span class="password-eye"></span>
                                                                                        </div>
                                                                                    </div>
                                                                            </div>
                                                                           <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Pilih Nama Provinsi Pimpinan</label>
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
                                                                                <div class="invalid-feedback">
                                                                                    Isikan Nama Daerah Provinsi Pimpinan Terlebih Dahulu.
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom04">Nomor NIP/NRP</label>
                                                                                <input type="number" class="form-control" id="validationCustom04" placeholder="Masukan Nomor NIP/NRP" required>
                                                                                <div class="invalid-feedback">
                                                                                    Masukan Nomor NIP/NRP.
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom05">Masukan Alamat Kantor</label>
                                                                                <input type="text" class="form-control" id="validationCustom05" placeholder="Alamat Kantor" required>
                                                                                <div class="invalid-feedback">
                                                                                    Masukan Alamat Kantor Terlebih Dahulu.
                                                                                </div>
                                                                            </div>
                                                                             <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom05">Link Maps Alamat</label>
                                                                                <input type="text" class="form-control" id="validationCustom05" placeholder="Link Alamat Kantor" required>
                                                                                <div class="invalid-feedback">
                                                                                    Masukan Link Google Maps Alamat Kantor
                                                                                </div>
                                                                            </div>
                                                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                                                        </form>
                                                                    </div>
                                                                </div> <!-- end preview-->
                                                            </div> <!-- end tab-content-->
                                                    </div>
                                                    

                                                    <div class="tab-pane show " id="Koordinator">
                                                        <h4 class="header-title mb-2">Akun Koordinator</h4>
                                                        <p class="mb-4">Akun Koordinator Yang bisa digunakan pada Aplikasi Antar khusus Koordinator</p>
                                                            <div class="tab-content">
                                                                <div class="tab-pane show active" id="custom-styles-preview">
                                                                    <div class="col-lg-6">
                                                                        <form class="needs-validation" novalidate>

                                                                        <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Nama Koordinator</label>
                                                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Isi Nama" required>
                                                                                <div class="invalid-feedback">
                                                                                    Isikan Nama Terlebih Dahulu.
                                                                                </div>
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Username</label>
                                                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Isi Username" required>
                                                                                <div class="invalid-feedback">
                                                                                    Isikan Username Terlebih Dahulu.
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom02">Password</label>
                                                                                    <div class="input-group input-group-merge">
                                                                                        <input type="password" id="password" class="form-control" placeholder="Masukan Password" required>
                                                                                        <div class="invalid-feedback">
                                                                                    Isikan Password Terlebih Dahulu.
                                                                                </div>
                                                                                        <div class="input-group-text" data-password="false">
                                                                                            <span class="password-eye"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustomUsername">Nomor HP</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text" id="inputGroupPrepend">+62</span>
                                                                                    <input type="number" class="form-control" id="validationCustomUsername" placeholder="Username"
                                                                                        aria-describedby="inputGroupPrepend" required>
                                                                                    <div class="invalid-feedback">
                                                                                        Isikan Nomor HP.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom04">Nomor NIP/NRP (opsional)</label>
                                                                                <input type="number" class="form-control" id="validationCustom04" placeholder="Masukan Nomor NIP/NRP">
                                                                                <div class="invalid-feedback">
                                                                                    Masukan Nomor NIP/NRP.
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom05">Masukan Alamat Kantor</label>
                                                                                <input type="text" class="form-control" id="validationCustom05" placeholder="Alamat Kantor" required>
                                                                                <div class="invalid-feedback">
                                                                                    Masukan Alamat Kantor Terlebih Dahulu.
                                                                                </div>
                                                                            </div>
                                                                             <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom05">Link Maps Alamat</label>
                                                                                <input type="text" class="form-control" id="validationCustom05" placeholder="Link Alamat Kantor" required>
                                                                                <div class="invalid-feedback">
                                                                                    Masukan Link Google Maps Alamat Kantor
                                                                                </div>
                                                                            </div>
                                                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                                                        </form>
                                                                    </div>
                                                                </div> <!-- end preview-->
                                                            </div> <!-- end tab-content-->
                                                    </div>


                                                    <div class="tab-pane" id="relawan">
                                                         <h4 class="header-title mb-2">Akun Relawan</h4>
                                                        <p class="mb-4">Akun Relawan Yang bisa digunakan pada Aplikasi Antar khusus Koordinator</p>
                                                            <div class="tab-content">
                                                                <div class="tab-pane show active" id="custom-styles-preview">
                                                                    <div class="col-lg-6">
                                                                        <form class="needs-validation" novalidate>

                                                                        <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Nama Relawan</label>
                                                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Isi Nama" required>
                                                                                <div class="invalid-feedback">
                                                                                    Isikan Nama Terlebih Dahulu.
                                                                                </div>
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Username</label>
                                                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Isi Username" required>
                                                                                <div class="invalid-feedback">
                                                                                    Isikan Username Terlebih Dahulu.
                                                                                </div>
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom02">Password</label>
                                                                                    <div class="input-group input-group-merge">
                                                                                        <input type="password" id="password" class="form-control" placeholder="Masukan Password" required>
                                                                                        <div class="invalid-feedback">
                                                                                    Isikan Password Terlebih Dahulu.
                                                                                </div>
                                                                                        <div class="input-group-text" data-password="false">
                                                                                            <span class="password-eye"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustomUsername">Nomor HP</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text" id="inputGroupPrepend">+62</span>
                                                                                    <input type="number" class="form-control" id="validationCustomUsername" placeholder="Username"
                                                                                        aria-describedby="inputGroupPrepend" required>
                                                                                    <div class="invalid-feedback">
                                                                                        Isikan Nomor HP.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Email</label>
                                                                                <input type="email" class="form-control" id="validationCustom01" placeholder="Isi Email" required>
                                                                                <div class="invalid-feedback">
                                                                                    Isikan Email Terlebihdahulu.
                                                                                </div>
                                                                            </div>
                                                                             <div class="mb-3">
                                                                                <label for="example-select" class="form-label">Direkrut Dari Koordinator</label>
                                                                                <select required class="form-select" id="example-select">
                                                                                    <option selected>Pilih Koordinator</option>
                                                                                    <option value="1">Emile Mutaqin</option>
                                                                                    <option value="2">Andre</option>
                                                                                    <option value="3">Fauzi 3</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Nama Asal Daerah</label>
                                                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Isi Nama Daerah" required>
                                                                                <div class="invalid-feedback">
                                                                                    Isikan Nama Terlebih Dahulu.
                                                                                </div>
                                                                            </div>
                                                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                                                        </form>
                                                                    </div>
                                                                </div> <!-- end preview-->
                                                            </div> <!-- end tab-content-->
                                                    </div>
                                                </div>                                          
                                            </div> <!-- end preview-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->
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