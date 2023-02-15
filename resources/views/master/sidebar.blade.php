            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">

                <!-- Logo Light -->
                <a href="/" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="{{ URL::asset('assets/images/nuku.png') }}" alt="logo" height="40">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ URL::asset('assets/images/nuku-sm.png') }}" alt="small logo" height="40">
                    </span>
                </a>

                <!-- Logo Dark -->
                <a href="/" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="{{ URL::asset('assets/images/nuku.png') }}" alt="dark logo" height="40">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ URL::asset('assets/images/nuku-sm.png') }}" alt="small logo" height="40">
                    </span>
                </a>

                <!-- Sidebar Hover Menu Toggle Button -->
                <button type="button" class="btn button-sm-hover p-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                    <i class="ri-checkbox-blank-circle-line align-middle"></i>
                </button>

                <!-- Sidebar -left -->
                <div class="h-100" id="leftside-menu-container" data-simplebar>
                    <!-- Leftbar User -->
                    <div class="leftbar-user">
                        <a href="pages-profile.html">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                                class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name">Dominic Keller</span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Menu</li>

                        <li class="side-nav-item">
                            <a href="/" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Overview (CRM) </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                                aria-controls="sidebarEcommerce" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Master Data </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="/wilayah-binda">Wilayah Pimpinan</a>
                                    </li>
                                    <li>
                                        <a href="/bantuan">Saluran Bantuan</a>
                                    </li>
                                    <li>
                                        <a href="/penerima">Penerima Bantuan</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                          <li class="side-nav-item">
                            <a href="/tambah" class="side-nav-link">
                                <i class="uil-user-plus"></i>
                                <span> Tambah Akun </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="/listJudul" class="side-nav-link">
                                <i class="uil-file"></i>
                                <span> List Judul Bantuan </span>
                            </a>
                        </li>


                        <li class="side-nav-item">
                            <a href="/tambah-jenis" class="side-nav-link">
                                <i class="uil-file-plus"></i>
                                <span> Tambah Jenis Bantuan </span>
                            </a>
                        </li>


                        <li class="side-nav-item">
                            <a href="/report" class="side-nav-link">
                                <i class="uil-document"></i>
                                <span> Report </span>
                            </a>
                        </li>


                          <li class="side-nav-title side-nav-item">Auth</li>

                        <li class="side-nav-item">
                            <a href="/login" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Login </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="/register" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Register </span>
                            </a>
                        </li>

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- ========== Left Sidebar End ========== -->