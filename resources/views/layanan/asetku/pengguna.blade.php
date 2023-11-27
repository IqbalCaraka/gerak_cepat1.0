@extends('layouts.layanan')
@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Pengguna</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/"><i data-feather="home"></i></a></li>
                <li class="breadcrumb-item">Pengguna</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="user-profile">
        <div class="row">
            <!-- user profile header start-->
            <div class="col-sm-12">
                <div class="card profile-header"><img class="img-fluid bg-img-cover" src="{{asset('layanan/images/index/halaman_kanreg.jpeg')}}" alt="">
                <div class="profile-img-wrrap"><img class="img-fluid bg-img-cover" src="{{asset('layanan/images/user-profile/bg-profile.jpg')}}" alt=""></div>
                <div class="userpro-box">
                    <div class="img-wrraper">                              
                    <div class="avatar"><img class="img-fluid" alt="" src="{{asset('layanan/images/user/7.jpg')}}"></div><a class="icon-wrapper" href="edit-profile.html"><i class="icofont icofont-pencil-alt-5"></i></a>
                    </div>
                    <div class="user-designation">
                        <div class="title"><a target="_blank" href=""> 
                            <h4>Iqbal Caraka Altino</h4></a>
                            <h6>Analis Data dan Informasi</h6>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- user profile header end-->
        </div>
        
    </div>
</div>

<!-- BMN yang digunakan -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Daftar BMN Anda</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="basic-1" cellspacing="0">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>NUP</th>
                            <th>Sub Kelompok</th>
                            <th>Merk</th>
                            <th>Tahun Perolehan</th>
                            <th>Nilai Perolehan(Rp)</th>
                            <th>Ruangan</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>300025141841518</td>
                            <td>P.C. Unit</td>
                            <td>Lenovo</td>
                            <td>2016</td>
                            <td>15.000.000</td>
                            <td>Inka</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i data-feather="arrow-right-circle" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"></i></a></li>
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

<!-- BMN yang ada dibidangnya -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Daftar BMN di Bidang Anda</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="2">
                      <table class="display" id="basic-6" cellspacing="0">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>NUP</th>
                            <th>Sub Kelompok</th>
                            <th>Merk</th>
                            <th>Tahun Perolehan</th>
                            <th>Nilai Perolehan(Rp)</th>
                            <th>Ruangan</th>
                            <th>Penanggung Jawab</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>300025141841518</td>
                            <td>P.C. Unit</td>
                            <td>Lenovo</td>
                            <td>2016</td>
                            <td>15.000.000</td>
                            <td>Inka</td>
                            <td>Diah</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i data-feather="arrow-right-circle" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>300025141841200</td>
                            <td>Televisi</td>
                            <td>Sharp</td>
                            <td>2019</td>
                            <td>10.000.000</td>
                            <td>Inka</td>
                            <td>Joko</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i data-feather="arrow-right-circle" data-toggle="tooltip" data-placement="top" title="Proses Pengajuan" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"></i></a></li>
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

<!-- Kelola pengguna -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <h5>Kelola Pengguna</h5>
                    <button class="btn btn-sm btn-outline-primary" type="button"  data-bs-toggle="modal" data-bs-target="#tambahPengguna">Tambah Pengguna Baru</button>       
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

<!-- Modal Tambah pengguna -->
<div class="modal fade bd-example-modal-lg tambah-pengguna" id="tambahPengguna" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" id="myLargeModalLabel">Pengguna Baru</h4>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="card">
                <div class="card-header pb-0">
                  <h5>Form Tambah Pengguna</h5>
                </div>
                <form class="form theme-form">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="nama">Nama</label>
                            <input class="form-control digits" id="nama" type="text" value="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="nip">NIP</label>
                            <input class="form-control digits" id="nip" type="number" value="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="bidang">Bidang</label>
                            <input class="form-control digits" id="bidang" type="text" value="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="jabatan">Jabatan</label>
                            <input class="form-control digits" id="jabatan" type="text" value="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="pangkat">Pangkat/Golongan</label>
                            <input class="form-control digits" id="pangkat" type="text" value="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label class="form-label" for="exampleFormControlSelect17">Peran</label>
                            <select class="form-select btn-pill digits" id="exampleFormControlSelect7">
                              <option>Pegawai</option>
                              <option>Pengelola BMN</option>
                              <option>Kepala Bidang</option>
                              <option>Pejabat Pengadaan Barang dan Jasa</option>
                              <option>Kepala Subbagian Umum</option>
                              <option>Kepala Subbagian Keuangan</option>
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label class="form-label" for="exampleFormControlSelect17">Peran</label>
                            <select class="form-select btn-pill digits" id="exampleFormControlSelect7">
                              <option>Aktif</option>
                              <option>Nonaktif</option>
                            </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-end">
                    <button class="btn btn-primary" type="submit">Tambah</button>
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                  </div>
                </form>
              </div>
          </div>
      </div>
    </div>
</div>
<!-- End modal -->

<!-- Modal Kelola pengguna -->
<div class="modal fade bd-example-modal-lg modal-pengguna" id="modalPengguna" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" id="myLargeModalLabel">Pengguna: Joko</h4>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="card">
                <div class="card-header pb-0">
                  <h5>Form Kelola Pengguna</h5>
                </div>
                <form class="form theme-form">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="nama">Nama</label>
                            <input class="form-control digits" id="nama" type="text" value="Joko">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="nip">NIP</label>
                            <input class="form-control digits" id="nip" type="number" value="199608172015121015">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="bidang">Bidang</label>
                            <input class="form-control digits" id="bidang" type="text" value="Informasi Kepegawaian">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="jabatan">Jabatan</label>
                            <input class="form-control digits" id="jabatan" type="text" value="Pranata Komputer Ahli Peratama">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="pangkat">Pangkat/Golongan</label>
                            <input class="form-control digits" id="pangkat" type="text" value="Penata Muda/III-a">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label class="form-label" for="exampleFormControlSelect17">Peran</label>
                            <select class="form-select btn-pill digits" id="exampleFormControlSelect7">
                              <option selected="selected">Pegawai</option>
                              <option>Pengelola BMN</option>
                              <option>Kepala Bidang</option>
                              <option>Pejabat Pengadaan Barang dan Jasa</option>
                              <option>Kepala Subbagian Umum</option>
                              <option>Kepala Subbagian Keuangan</option>
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label class="form-label" for="exampleFormControlSelect17">Peran</label>
                            <select class="form-select btn-pill digits" id="exampleFormControlSelect7">
                              <option selected="selected">Aktif</option>
                              <option>Nonaktif</option>
                            </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-end">
                    <button class="btn btn-primary" type="submit">Perbarui</button>
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                  </div>
                </form>
              </div>
          </div>
      </div>
    </div>
</div>
<!-- End modal -->
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