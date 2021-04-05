            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Main</li>
                            <li>
                                <a href="{{ route('dashboard') }}" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('siswa.index') }}" class="waves-effect">
                                    <i class="mdi mdi-account"></i>
                                    <span>Data Siswa </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('kelas.index') }}" class="waves-effect">
                                    <i class="mdi mdi-clipboard-outline"></i>
                                    <span>Data Kelas </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-barcode"></i><span>
                                        SPP <span class="float-right menu-arrow"><i
                                                class="mdi mdi-chevron-right"></i></span>
                                    </span></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{ route('spp.index') }}" class="waves-effect">
                                            <span>Data SPP </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pembayaran.create') }}" class="waves-effect">
                                            <span>Entri Pembayaran SPP </span>
                                        </a>
                                    </li>
                                    <li><a href="{{ route('pembayaran.index') }}">History Pembayaran SPP</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
