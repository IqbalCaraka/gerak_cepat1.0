<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper" style="width:80%;"><a href="index.html"><img class="img-fluid for-light" src="{{asset('LogoGC.png')}}" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="fa fa-cog status_toggle middle sidebar-toggle"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="{{asset('layanan/images/logo/logo-icon1.png')}}" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn"><a href="index.html"><img class="img-fluid" src="{{asset('layanan/images/logo/logo-icon.png')}}" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>

                <!-- Admin -->
                <li class="sidebar-main-title">          
                    <h6>Kepala Subbagian Keuangan</h6>
                </li>
                <li class="menu-box"> 
                    <ul>             
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('dashboard.index')}}"><i data-feather="home"></i><span>Dashboards</span></a></li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('pengguna.index')}}"><i data-feather="user"></i><span>Pengguna</span></a></li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="layers"></i><span>Pengajuan</span></a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{route('pengajuanperbaikan.index')}}">Perbaikan BMN</a></li>
                                <li><a href="{{route('pengajuankebutuhan.index')}}">Kebutuhan BMN</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="#"><i data-feather="dollar-sign"></i><span>Anggaran</span></a></li>
                    </ul>
                </li>
            </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
