<div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!-- User details -->
                    <div class="user-profile text-center mt-3">
                        <div class="">
                            <img src="{{ asset('Backend/assets/images/users/avatar-1.jpg') }}" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="mt-3">
                            @if(Auth::check())
                            <h4 class="font-size-16 mb-1">{{Auth::user()->name }}</h4>
                            @endif
                            <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
                        </div>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>
                            <li>
                            <a href="{{ route ('home') }} " class="waves-effect">
                                <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                            <li>
                            <a href="{{ route('user.index') }}" class="waves-effect">
                                    <i class="ri-user-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                                    <span>Admin</span>
                            </a>
                            </li>
                            <li>
                                <a href="{{ route('perusahaan.index') }}" class="waves-effect">
                                    <i class="ri-home-4-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                                    <span>Perusahaan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pelanggan.index') }}" class="waves-effect">
                                    <i class="ri-user-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                                    <span>Pelanggan</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class=" waves-effect">
                                    <i class="ri-wallet-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                                    <span>Transaksi</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="ri-file-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                                    <span>Laporan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
