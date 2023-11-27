@extends('layouts.layanankepalabidang')
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
                            <td>PER2023112500124</td>
                            <td>Caraka</td>
                            <td>25/11/2023</td>
                            <td>Perbaikan</td>
                            <td>1</td>
                            <td id="statusPengajuan">Belum Diproses</td>
                            <td> 
                              <ul class="action"> 
                              <li class="edit"> <a href="#"><i data-feather="arrow-right-circle" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan" data-bs-toggle="modal" data-bs-target="#modalKebutuhan"></i></a></li>
                                <!-- <li class="edit"> <a href="#"><i data-feather="check-circle" data-toggle="tooltip" data-placement="top" title="Setujui" data-bs-toggle="modal" data-original-title="test" data-bs-target="#persetujuan" ></i></a></li>
                                <li class="edit"> <a href="#"><i  style="color:yellow" data-feather="edit" data-toggle="tooltip" data-placement="top" title="Revisi" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"></i></a></li>
                                <li class="edit"> <a href="#"><i style="color:red" data-feather="x-circle" data-toggle="tooltip" data-placement="top" title="Tolak" data-bs-toggle="modal" data-original-title="test" data-bs-target="#ditolak"></i></a></li> -->
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
            <h4 class="modal-title" id="myLargeModalLabel">Pengajuan--PER2023112500124</h4>
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
                                        <th>NUP</th>
                                        <th>Daftar BMN</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>3510214544478</td>
                                        <td>Laptop</td>
                                        <th id="statusDetailPengajuanKebutuhan">Menunggu persetujuan Kepala Bidang</th>
                                        <td> 
                                            <ul class="action"> 
                                                <li class="edit"> <a href="#" onclick="isiPengadaanSetuju()"><i  data-feather="check-circle" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan"></i></a></li>
                                                <li class="edit"> <a href="#"><i  style="color:yellow" data-feather="edit" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan" data-bs-toggle="modal" data-bs-target="#revisi"></i></a></li>
                                                <li class="edit"> <a href="#" onclick="isiPengadaanTolak()"><i style="color:red"  data-feather="x-circle" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="button" onclick="ajukanProses()">Ajukan</button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
<!-- Modal setuju -->
<div class="modal fade" id="persetujuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pengajuan--PER2023112500124</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Yakin menyetujui permohonan ini?</div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="button" onclick=pengajuanSetuju()>Yakin</button>
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
        </div>
    </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal revisi -->
<div class="modal fade bd-example-modal-lg"  id="revisi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" id="myLargeModalLabel">Pengajuan--PER2023112500124</h4>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header pb-0">
                    <!-- <h5>Tambah catatan revisi</h5> -->
                    </div>
                    <form class="form theme-form">
                        <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="col-sm-3 col-form-label">Tambahkan catatan</label>
                                    <input class="form-control" id="note" type="text" placeholder="Catatan">
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="button" onclick=isiPengadaanRevisi()>Perbaiki</button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                        </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal ditolak -->
<div class="modal fade" id="ditolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pengajuan--PER2023112500124</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Yakin menolak permohonan ini?</div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="button" onclick=pengajuanTolak()>Yakin</button>
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
        </div>
    </div>
    </div>
</div>
<!-- End Modal -->
@endsection
@push('scripts')
    <script src=" {{asset('layanan/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.buttons.min.js')}}"></script>
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
    <script src=" {{asset('layanan/js/datatable/datatable-extension/responsive.bootstrap4.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.keyTable.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.colReorder.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.fixedHeader.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.rowReorder.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/dataTables.scroller.min.js')}}"></script>
    <script src=" {{asset('layanan/js/datatable/datatable-extension/custom.js')}}"></script>
    <script src="{{asset('layanan/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('layanan/js/datatable/datatables/datatable.custom.js')}}"></script>
    <script>
        // function pengajuanSetuju(){
        //     var x = document.getElementById("statusPengajuan")
        //     x.innerHTML = "Proses Pengelola BMN"
        //     $('#persetujuan').modal('hide');
        // }

        // function pengajuanRevisi(){
        //     var x = document.getElementById("statusPengajuan")
        //     x.innerHTML = "Revisi Pengajuan"
        //     $('#revisi').modal('hide');
        // }
        // function pengajuanTolak(){
        //     var x = document.getElementById("statusPengajuan")
        //     x.innerHTML = "Ditolak"
        //     $('#ditolak').modal('hide');
        // }
        function isiPengadaanSetuju(){
            var x = document.getElementById("statusDetailPengajuanKebutuhan")
            x.innerHTML = "Disetujui Kepala Bidang"
        }

        function isiPengadaanRevisi(){
            var x = document.getElementById("statusDetailPengajuanKebutuhan")
            x.innerHTML = "Revisi"
            $('#revisi').modal('hide');
        }
        function isiPengadaanTolak(){
            var x = document.getElementById("statusDetailPengajuanKebutuhan")
            x.innerHTML = "Ditolak Kepala Bidang"
        }

        function ajukanProses(){
            var x = document.getElementById("statusPengajuan")
            x.innerHTML = document.getElementById("statusDetailPengajuanKebutuhan").innerHTML
            $('#modalKebutuhan').modal('hide');
        }
    </script>
@endpush
@push('style')
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/datatable-extension.css')}}">
@endpush