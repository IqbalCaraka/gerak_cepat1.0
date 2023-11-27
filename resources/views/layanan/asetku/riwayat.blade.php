@extends('layouts.layanan')
@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Riwayat</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/"><i data-feather="home"></i></a></li>
                <li class="breadcrumb-item">Riwayat</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Riwayat Pengajuan -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <h5>Riwayat BMN</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="2">
                      <table class="display" id="basic-1" cellspacing="0">
                        <thead>
                          <tr>
                          <th>No</th>
                            <th>NUP</th>
                            <th>Subkelompok</th>
                            <th>Merk</th>
                            <th>Tahun Perolehan</th>
                            <th>Ruangan</th>
                            <th>Penanggung Jawab Saat Ini</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="{{route('BMN.show','id')}}">3050204006009243</a></td>
                                <td>A.C. Split</td>
                                <td>Daikin</td>
                                <td>2020</td>
                                <td>Tata Usaha</td>
                                <td>Arif</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2010204006009243</td>
                                <td>Laptop</td>
                                <td>Acer</td>
                                <td>2016</td>
                                <td>Inka</td>
                                <td>Yono</td>
                            </tr>
                            
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Riwayat Pengajuan -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <h5>Riwayat Pengajuan</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="2">
                      <table class="display" id="basic-9" cellspacing="0">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Bidang</th>
                            <th>Jabatan</th>
                            <th>Pangkat/Golongan</th>
                            <th>Peran</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>199608172015121015</td>
                            <td>Joko</td>
                            <td>Informasi Kepegawaian</td>
                            <td>Pranata Komputer Ahli Peratama</td>
                            <td>Penata Muda/III-a</td>
                            <td>Pegawai</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i data-feather="arrow-right-circle" data-toggle="tooltip" data-placement="top" title="kelola pengguna" data-bs-toggle="modal" data-bs-target="#modalPengguna"></i></a></li>
                              </ul>
                            </td>
                          </tr> 
                          <tr>
                            <td>2</td>
                            <td>199308172015121015</td>
                            <td>Abdi</td>
                            <td>Tata Usaha</td>
                            <td>Bendahara</td>
                            <td>Penata Muda Tingkat I/III-b</td>
                            <td>Pegawai</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"><a href="#"><i data-feather="arrow-right-circle" data-toggle="tooltip" data-placement="top" title="kelola pengguna" data-bs-toggle="modal" data-bs-target="#modalPengguna"></i></a></li>
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
@endpush
@push('style')
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/datatable-extension.css')}}">
@endpush