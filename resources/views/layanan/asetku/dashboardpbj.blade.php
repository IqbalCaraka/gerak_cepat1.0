@extends('layouts.layananpbj')
@section('content')

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Dashboard</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/"><i data-feather="home"></i></a></li>
                <li class="breadcrumb-item">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Card -->
<div class="container-fluid default-dash">
    <div class="row">    
        <div class="col-xl-12 ">
            <div class="items-slider d-flex justify-content-center">
                <div class="col-xl-4 col-lg-4 col-sm-4 des-xsm-50 box-col-33">
                    <div class="card investment-sec">
                        <div class="animated-bg"><i></i><i></i><i></i></div>
                        <div class="card-body">
                        <div class="icon"><i data-feather="inbox"></i></div>
                        <p>Belum Diproses</p>
                        <h3>5</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-4 des-xsm-50 box-col-33">
                    <div class="card investment-sec">
                        <div class="animated-bg"><i></i><i></i><i></i></div>
                        <div class="card-body">
                        <div class="icon"><i data-feather="loader"></i></div>
                        <p>Diproses</p> 
                        <h3>7</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4S col-lg-4 col-sm-4 des-xsm-50 box-col-33">
                    <div class="card investment-sec">
                        <div class="animated-bg"><i></i><i></i><i></i></div>
                        <div class="card-body">
                        <div class="icon"><i data-feather="target"></i></div>
                        <p>Selesai</p>
                        <h3>50</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- To Do List -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>To Do List</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="basic-1" cellspacing="0">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nomor Pengajuan</th>
                            <th>Nama Pemohon</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Jenis Permintaan</th>
                            <th>Jumlah Permintaan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>PENG2023112500124</td>
                            <td>Altino</td>
                            <td>25/11/2023</td>
                            <td>Pengadaan</td>
                            <td>1</td>
                            <td id="statusPengajuanKebutuhan">Pemilihan Jenis Pengadaan</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i data-feather="arrow-right-circle" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan" data-bs-toggle="modal" data-bs-target="#modalKebutuhan"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>PENG2023112200124</td>
                            <td>Caraka</td>
                            <td>15/01/2023</td>
                            <td>Pengadaan</td>
                            <td>1</td>
                            <td id="statusPengajuanKebutuhanKedua">Selesai Lelang</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i data-feather="arrow-right-circle" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan" data-bs-toggle="modal" data-bs-target="#modalKebutuhanKedua"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>PER2023112500524</td>
                            <td>Alex</td>
                            <td>12/11/2023</td>
                            <td>Perbaikan</td>
                            <td>1</td>
                            <td id="statusPengajuanPerbaikan">Pemilihan Jenis Pengadaan</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i data-feather="arrow-right-circle" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan" data-bs-toggle="modal" data-bs-target="#modalPerbaikan"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Container-fluid Ends-->
<div class="container-fluid general-widget">
    <div class="row">
        <div class="col-xxl-3 col-xl-6 xl-50 col-md-6 box-col-6">
            <div class="card">
                <div class="cal-date-widget card-body">
                    <div class="cal-datepicker">
                        <div class="datepicker-here float-sm-end" data-language="en"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-6 xl-50 col-md-6 box-col-6">
            <div>
                <div class="card recent-activity">
                <div class="card-header border-bottom">
                    <h5>Aktivitas Sebelumnya</h5>
                </div>
                <div class="card-body">
                    <div class="activity-media">
                    <div class="d-flex">
                        <div class="recent-circle bg-primary"></div>
                        <div class="flex-grow-1">
                        <h6 class="font-roboto">Any desktop publishing pack ages editors.</h6><span><i class="me-2" data-feather="clock"></i><span class="font-roboto">14 July 2022 | 20 hours ago</span></span>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="recent-circle bg-secondary"></div>
                        <div class="flex-grow-1">
                        <h6 class="font-roboto">Renewed account with this new premium plan.</h6><span><i class="me-2" data-feather="clock"></i><span class="font-roboto">24 Aug 2022 | 2 Days ago</span></span>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="recent-circle bg-success"></div>
                        <div class="flex-grow-1">
                        <h6 class="font-roboto">Micron to build largest chip factory in US history.</h6><span><i class="me-2" data-feather="clock"></i><span class="font-roboto">25 July 2022 | 20 hours ago</span></span>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="recent-circle bg-info"></div>
                        <div class="flex-grow-1">
                        <h6 class="font-roboto">Share A Case Study On One Of Your Customers.</h6><span><i class="me-2" data-feather="clock"></i><span class="font-roboto">12 Sept 2022 | 10 hours ago</span></span>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>  


<!-- Modal detail pengajuan kebutuhan-->
<div class="modal fade bd-example-modal-lg" id="modalKebutuhan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" id="myLargeModalLabel">Pengajuan--PENG2023112500124</h4>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header pb-0">
                    <h5>Daftar Pengajuan</h5>
                    </div>
                    <form class="form theme-form">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display" width="100%" id="basic-9" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Daftar BMN</th>
                                        <th>Vendor</th>
                                        <th>Nilai Pengadaan (RP)</th>
                                        <th>Jenis Pengadaan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Laptop</td>
                                        <td id="detailPilihVendor"></td>
                                        <td id="detailAnggaran"></td>
                                        <td id="detailJenisPengadaan"></td>
                                        <th id="statusDetailPengajuanKebutuhan">Pemilihan Jenis Pengadaan</th>
                                        <td> 
                                            <ul class="action"> 
                                                <li class="edit"> <a href="#"><i data-feather="arrow-right-circle" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan" data-bs-toggle="modal" data-bs-target="#modalJenisPengadaan"></i></a></li>
                                                <!-- <li class="edit"> <a href="#" onclick="isiPengadaanSetuju()"><i  data-feather="check-circle" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan"></i></a></li> -->
                                            </ul>
                                        </td>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="button" onclick="ajukanProses()">Proses Pengadaan</button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
<!-- Modal detail pengajuan kebutuhan-->
<div class="modal fade bd-example-modal-lg" id="modalKebutuhanKedua" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" id="myLargeModalLabel">Pengajuan--PENG2023112200124</h4>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header pb-0">
                    <h5>Daftar Pengajuan</h5>
                    </div>
                    <form class="form theme-form">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display" width="100%" id="basic-12" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Daftar BMN</th>
                                        <th>Vendor</th>
                                        <th>Nilai Pengadaan (RP)</th>
                                        <th>Jenis Pengadaan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Genset</td>
                                        <td id="detailPilihVendorKedua">-</td>
                                        <td>6000000000</td>
                                        <td>Lelang</td>
                                        <th id="statusDetailPengajuanKebutuhan">Pemilihan Jenis Vendor</th>
                                        <td> 
                                            <ul class="action"> 
                                                <li class="edit"> <a href="#"><i data-feather="arrow-right-circle" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan" data-bs-toggle="modal" data-bs-target="#modalPilihVendor"></i></a></li>
                                                <!-- <li class="edit"> <a href="#" onclick="isiPengadaanSetuju()"><i  data-feather="check-circle" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan"></i></a></li> -->
                                            </ul>
                                        </td>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="button" onclick="ajukanProsesKedua()">Proses Pengadaan</button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal detail pengajuan perbaikan-->
<div class="modal fade bd-example-modal-lg" id="modalPerbaikan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" id="myLargeModalLabel">Pengajuan--PER2023112500524</h4>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header pb-0">
                    <h5>Daftar Pengajuan</h5>
                    </div>
                    <form class="form theme-form">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display" width="100%" id="basic-6" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Daftar BMN</th>
                                        <th>NUP</th>
                                        <th>Tahun Perolehan</th>
                                        <th>Jenis Perbaikan</th>
                                        <th>Nilai Perbaikan (RP)</th>
                                        <th>Vendor</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Laptop</td>
                                        <td>3505174448965125</td>
                                        <td>2020</td>
                                        <td>Eksternal</td>
                                        <td>350.000</td>
                                        <td>CV Solusi IT</td>
                                        <th id="statusPerbaikan">Persetujuan anggaran perbaikan</th>
                                        <td> 
                                        <ul class="action"> 
                                            <li class="edit"> <a href="#" onclick="isiPemeriksaanSetuju()"><i  data-feather="check-circle" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan"></i></a></li>
                                            <li class="edit"> <a href="#" onclick="isiPemeriksaanTunda()"><i style="color:yellow"  data-feather="clock" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan"></i></a></li>
                                            <li class="edit"> <a href="#" onclick="isiPemeriksaanTolak()"><i style="color:red"  data-feather="x-circle" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan"></i></a></li>
                                        </ul>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="button"  onclick="prosesPengajuan()">Proses Perbaikan</button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal jenis Pengadaan -->
<div class="modal fade delegasi-bmn" id="modalJenisPengadaan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pilih Vendor</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form theme-form">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="nilai">Anggaran (Rp)</label>
                                <input class="form-control digits" id="isiAnggaran" type="number" oninput="change()">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="display:none" id="rowIsiVendor">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="nama">Vendor</label>
                                <select class="form-select btn-pill digits" id="isiVendor">
                                    <option>CV Raka Abadi</option>
                                    <option>CV Caraka Jaya</option>
                                    <option>CV Altino Solusi</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" onclick=pilihJenisPengadaan()>Proses</button>
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal pilih vendor -->
<div class="modal fade delegasi-bmn" id="modalPilihVendor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pilih Vendor</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form theme-form">
                    <div class="row" id="rowIsiVendorKedua">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="nama">Vendor</label>
                                <select class="form-select btn-pill digits" id="isiVendorKedua">
                                    <option>CV Raka Abadi</option>
                                    <option>CV Caraka Jaya</option>
                                    <option>CV Altino Solusi</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" onclick=pilihVendor()>Proses</button>
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


@endsection
@push('scripts')
    <script src=" {{asset('layanan/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.buttons.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/jszip.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/buttons.colVis.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/pdfmake.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/vfs_fonts.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.autoFill.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.select.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/buttons.bootstrap4.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/buttons.html5.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/buttons.print.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.bootstrap4.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.responsive.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/responsive.bootstrap.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.keyTable.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.colReorder.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.fixedHeader.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.rowReorder.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.scroller.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/custom.js')}}"></script> -->
    <!-- <script src="{{asset('layanan/js/datatable/datatables/jquery.dataTables.min.js')}}"></script> -->
    <script src="{{asset('layanan/js/datatable/datatables/datatable.custom.js')}}"></script>
    <!-- <script>
        function isiPengajuan(){
            var x = document.getElementById("pengusulan")
            x.innerHTML = "350517444895622"
            $('#modalCek').modal('hide');
        }
    </script>
    <script>
        function isiBuatPengadaan(){
            var x = document.getElementById("pengusulan")
            x.innerHTML = "Pengadaan"
            document.getElementById("modalCek").classList.toggle("hidden");
            $('#modalCek').modal('hide');
        }
    </script> -->
    <script>
        
    </script>
    <!-- Untuk pengajuan kebutuhan -->
    <script>
        function change(){
            var x = document.getElementById("rowIsiVendor")
            var y = document.getElementById("isiAnggaran")
            if(y.value < 200000000){
                x.style.display = ""
            }else{
                x.style.display = "none"
            }
        }
        function pilihJenisPengadaan(){
            var x = document.getElementById("isiVendor")
            var y = document.getElementById("isiAnggaran")
            if(y.value<200000000){
                detailPilihVendor.innerHTML = x.options[x.selectedIndex].text
                detailJenisPengadaan.innerHTML = "Penunjukan Langsung"
            }else{
                detailJenisPengadaan.innerHTML = "Lelang"
                detailPilihVendor.innerHTML = "-"
            }
            detailAnggaran.innerHTML = y.value
            $('#modalJenisPengadaan').modal('hide');
        }

        function ajukanProses(){
            var x = document.getElementById("statusPengajuanKebutuhan")
            x.innerHTML = "Menunggu persetujuan Kepala Subbagian Umum"            
            $('#modalKebutuhan').modal('hide');
        }

        function pilihVendor(){
            var x = document.getElementById("isiVendorKedua")
            detailPilihVendorKedua.innerHTML = x.options[x.selectedIndex].text
            $('#modalPilihVendor').modal('hide');
        } 

        function ajukanProsesKedua(){
            var x = document.getElementById("statusPengajuanKebutuhanKedua")
            x.innerHTML = "Proses Pengadaan"            
            $('#modalKebutuhanKedua').modal('hide');
        }
        

        

        function isiPengadaanSetuju(){
            var x = document.getElementById("statusDetailPengajuanKebutuhan")
            x.innerHTML = "Disetujui Kasub Keuangan"
        }
        function isiPengadaanTunda(){
            var x = document.getElementById("statusDetailPengajuanKebutuhan")
            x.innerHTML = "Ditunda"
        }
        function isiPengadaanTolak(){
            var x = document.getElementById("statusDetailPengajuanKebutuhan")
            x.innerHTML = "Ditolak Kasub Keuangan"
        }
       
    </script>

    <script>
        function isiPemeriksaanSetuju(){
            var x = document.getElementById("statusPerbaikan")
            x.innerHTML = "Perbaikan Disetujui"
        }
        function isiPemeriksaanTunda(){
            var x = document.getElementById("statusPerbaikan")
            x.innerHTML = "Ditunda"
        }
        function isiPemeriksaanTolak(){
            var x = document.getElementById("statusPerbaikan")
            x.innerHTML = "Ditolak"
        }
        function prosesPengajuan(){
            var x = document.getElementById("statusPengajuanPerbaikan")
            var y = document.getElementById("statusPerbaikan")

            if(y.innerHTML=="Perbaikan Disetujui"){
                x.innerHTML = "Anggaran Perbaikan Disetujui"
            }else if(y.innerHTML=="Ditunda"){
                x.innerHTML = "Ditunda"
            }
            else{
                x.innerHTML = "Ditolak"
            }
            $('#modalPerbaikan').modal('hide');
        }
    </script>
@endpush
@push('style')
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/datatable-extension.css')}}">
@endpush