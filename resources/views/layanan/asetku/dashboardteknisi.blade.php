@extends('layouts.layananteknisi')
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
                      <table class="display" id="basic-12" cellspacing="0">
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
                            <td>PER2023112500524</td>
                            <td>Alex</td>
                            <td>12/11/2023</td>
                            <td>Perbaikan</td>
                            <td>1</td>
                            <td id="statusPengajuanPerbaikan">Proses Pemeriksaan</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i data-feather="arrow-right-circle" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan" data-bs-toggle="modal" data-bs-target="#modalPerbaikan"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>PER2023052300524</td>
                            <td>Yuda</td>
                            <td>07/11/2023</td>
                            <td>Perbaikan</td>
                            <td>1</td>
                            <td id="statusPengajuanPerbaikanKedua">Proses Perbaikan</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i data-feather="arrow-right-circle" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan" data-bs-toggle="modal" data-bs-target="#modalPerbaikanDua"></i></a></li>
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
                                        <th>Jenis Pengadaan</th>
                                        <th>Vendor</th>
                                        <th>Nilai Pengadaan (RP)</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Laptop</td>
                                        <td>Penunjukan Langsung</td>
                                        <td>CV. Raka Abadi</td>
                                        <td>25.000.000</td>
                                        <th id="statusDetailPengajuanKebutuhan">Menunggu persetujuan Kasub Keuangan</th>
                                        <td> 
                                            <ul class="action"> 
                                                <li class="edit"> <a href="#" onclick="isiPengadaanSetuju()"><i  data-feather="check-circle" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan"></i></a></li>
                                                <li class="edit"> <a href="#" onclick="isiPengadaanTunda()"><i style="color:yellow"  data-feather="clock" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan"></i></a></li>
                                                <li class="edit"> <a href="#" onclick="isiPengadaanTolak()"><i style="color:red"  data-feather="x-circle" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan"></i></a></li>
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
                                        <th>Kondisi Setelah Pemeriksaan</th>
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
                                        <td id="kondisiSetelahPemeriksaan">-</td>
                                        <td id="jenisPerbaikan">-</td>
                                        <td id="nilaiPerbaikan">-</td>
                                        <td id="vendor">-</td>
                                        <th id="statusPerbaikan">Proses Pemeriksaan</th>
                                        <td> 
                                        <ul class="action"> 
                                            <li class="edit"> <a href="#"><i  data-feather="arrow-right-circle" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan" data-bs-toggle="modal" data-bs-target="#modalLaporanPemeriksaan"></i></a></li>
                                        </ul>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="button"  onclick="prosesPengajuan()">Proses Pemeriksaan</button>
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
<div class="modal fade bd-example-modal-lg" id="modalPerbaikanDua" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" id="myLargeModalLabel">Pengajuan--PER2023052300524</h4>
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
                                <table class="display" width="100%" id="basic-1" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Daftar BMN</th>
                                        <th>NUP</th>
                                        <th>Tahun Perolehan</th>
                                        <th>Kondisi Setelah Pemeriksaan</th>
                                        <th>Kondisi Setelah Perbaikan</th>
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
                                        <td>Rusak Ringan</td>
                                        <td id="kondisiSetelahPerbaikan">-</td>
                                        <td>Internal</td>
                                        <td>200000</td>
                                        <td>IT Solution</td>
                                        <th id="statusPerbaikanKedua">Proses Perbaikan</th>
                                        <td> 
                                        <ul class="action"> 
                                            <li class="edit"> <a href="#"><i  data-feather="arrow-right-circle" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan" data-bs-toggle="modal" data-bs-target="#modalLaporanPerbaikan"></i></a></li>
                                        </ul>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="button"  onclick="prosesPengajuanPerbaikan()">Proses Perbaikan</button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->


<!-- Modal laporan pemeriksaan-->
<div class="modal fade bd-example-modal-lg" id="modalLaporanPemeriksaan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                    <div class="card-body">
                        <form class="form theme-form">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="nama">Tindakan Setelah Pemeriksaan</label>
                                        <select class="form-select btn-pill digits" id="tindakanPemeriksaan" onchange="change()">
                                            <option>Pilih Salah Satu</option>
                                            <option>Usul Perbaikan</option>
                                            <option>Kembalikan BMN</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="nama">Kondisi Setelah Pemeriksaan</label>
                                        <select class="form-select btn-pill digits" id="isianKondisiPemeriksaan">
                                            <option>Pilih Salah Satu</option>
                                            <option>Baik</option>
                                            <option>Rusak Ringan</option>
                                            <option>Rusak Berat</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="nama">Catatan Pemeriksaan</label>
                                        <textarea class="form-control" id="validationTextarea"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-perbaikan" id="rowJenisPerbaikan" style="display:none">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="nama">Jenis Perbaikan</label>
                                        <select class="form-select btn-pill digits" id="isianJenisPerbaikan" onchange="changeJenisPerbaikan()">
                                            <option>Pilih Salah Satu</option>
                                            <option>External</option>
                                            <option>Internal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-perbaikan" id="rowEstimasiAnggaran" style="display:none">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="nilai">Estimasi Anggaran (Rp)</label>
                                        <input class="form-control digits" id="isianAnggaran" type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-perbaikan" id="rowVendor" style="display:none">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="nama">Vendor</label>
                                        <select class="form-select btn-pill digits" id="isianJenisVendor" >
                                            <option>Pilih Salah Satu</option>
                                            <option>IT Solution</option>
                                            <option>Computer Center</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="button"  onclick="prosesPemeriksaan()">Proses Pemeriksaan</button>
                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
<!-- Modal laporan pemeriksaan-->
<div class="modal fade bd-example-modal-lg" id="modalLaporanPerbaikan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" id="myLargeModalLabel">Pengajuan--PER2023052300524</h4>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header pb-0">
                    <h5>Form Laporan</h5>
                    </div>
                    <div class="card-body">
                        <form class="form theme-form">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="nama">Kondisi Setelah Perbaikan</label>
                                        <select class="form-select btn-pill digits" id="isianKondisiPerbaikan">
                                            <option>Pilih Salah Satu</option>
                                            <option>Baik</option>
                                            <option>Rusak Ringan</option>
                                            <option>Rusak Berat</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="nama">Catatan Perbaikan</label>
                                        <textarea class="form-control" id="validationTextarea"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="button"  onclick="prosesPerbaikan()">Proses Perbaikan</button>
                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

@endsection
@push('scripts')
    <script src=" {{asset('layanan/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    
    <script src="{{asset('layanan/js/datatable/datatables/datatable.custom.js')}}"></script>

    <!-- Untuk pengajuan kebutuhan -->
    <script>
        function change(){
            var x = document.getElementById("tindakanPemeriksaan")
            var y = document.getElementById("rowJenisPerbaikan")
            var z = document.getElementById("rowEstimasiAnggaran")
            
            if(x.options[x.selectedIndex].text == "Usul Perbaikan"){
                y.style.display=""
                z.style.display=""
            }else{
                y.style.display="none"
                z.style.display="none"
            }
        }
        function changeJenisPerbaikan(){
            var jenisPerbaikan = document.getElementById("isianJenisPerbaikan")
            var a = document.getElementById("rowVendor")
            if(jenisPerbaikan.options[jenisPerbaikan.selectedIndex].text == "External"){
                a.style.display=""  
            }else{
                a.style.display="none"
            }
        }
        
        function prosesPemeriksaan(){
            var x = document.getElementById("kondisiSetelahPemeriksaan")
            var y = document.getElementById("jenisPerbaikan")
            var z = document.getElementById("nilaiPerbaikan")
            var a = document.getElementById("vendor")
            var b = document.getElementById("statusPerbaikan")
            var c = document.getElementById("tindakanPemeriksaan")
            x.innerHTML=isianKondisiPemeriksaan.options[isianKondisiPemeriksaan.selectedIndex].text
            y.innerHTML=isianJenisPerbaikan.innerHTML
            z.innerHTML= isianAnggaran.value
            a.innerHTML = isianJenisVendor.innerHTML
            if(c.options[c.selectedIndex].text == "Usul Perbaikan" ){
                b.innerHTML = "Usul Perbaikan"
            }else{
                b.innerHTML = "Pengembalian BMN"
            }
            $('#modalLaporanPemeriksaan').modal('hide');
        }
        
        function prosesPerbaikan(){
            var x = document.getElementById("kondisiSetelahPerbaikan")
            var y = document.getElementById("statusPerbaikanKedua")

            x.innerHTML=isianKondisiPerbaikan.options[isianKondisiPerbaikan.selectedIndex].text
            y.innerHTML="Serah Terima"
            $('#modalLaporanPerbaikan').modal('hide');
        }
        function prosesPengajuan(){
            var x = document.getElementById("statusPengajuanPerbaikan")
            var y = document.getElementById("tindakanPemeriksaan")

            if(y.options[y.selectedIndex].text == "Usul Perbaikan" ){
                x.innerHTML = "Usul Perbaikan"
            }
            else{
                x.innerHTML = "Pengembalian BMN"
            }
            $('#modalPerbaikan').modal('hide');
        }
        function prosesPengajuanPerbaikan(){
            var x = document.getElementById("statusPengajuanPerbaikanKedua")
                x.innerHTML = "Serah Terima"
            $('#modalPerbaikanDua').modal('hide');
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
        function ajukanProses(){
            var x = document.getElementById("statusPengajuanKebutuhan")
            var y = document.getElementById("statusDetailPengajuanKebutuhan")

            if(y.innerHTML=="Disetujui Kasub Keuangan"){
                x.innerHTML = "Pengadaan Disetujui"
            }else if(y.innerHTML=="Ditunda"){
                x.innerHTML = "Ditunda"
            }else{
                x.innerHTML = "Ditolak"
            }            
            $('#modalKebutuhan').modal('hide');
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
        
    </script>
@endpush
@push('style')
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/datatable-extension.css')}}">
@endpush