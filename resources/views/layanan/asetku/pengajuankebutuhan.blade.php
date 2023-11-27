@extends('layouts.layanan')
@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Pengajuan Kebutuhan BMN</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/"><i data-feather="home"></i></a></li>
                <li class="breadcrumb-item">Pengajuan</li>
                <li class="breadcrumb-item active">Pengajuan Kebutuhan</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row learning-block">
        <div class="col-xxl-9 col-xl-12 box-col-12">
            <div class="row">
                <div class="col-sm-12 box-col-12">
                    <div class="card">
                        <div class="card-header mb-3 d-flex align-items-center justify-content-between pb-0">
                            <h5>Status Pengajuan Kebutuhan BMN</h5>
                            <button class="btn btn-sm btn-outline-primary" type="button"  data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">Buat Pengajuan Baru</button>       
                        </div>
                        <div class="social-tab">
                            <ul class="nav nav-tabs" id="top-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="top-pengajuan" data-bs-toggle="tab" href="#pengajuan" role="tab" aria-controls="pengajuan" aria-selected="true"><i data-feather="send"></i>Pengajuan</a></li>
                                <li class="nav-item"><a class="nav-link" id="top-proses" data-bs-toggle="tab" href="#proses" role="tab" aria-controls="proses" aria-selected="false"><i data-feather="clock"></i>Proses                                 </a></li>
                                <li class="nav-item"><a class="nav-link" id="top-selesai" data-bs-toggle="tab" href="#selesai" role="tab" aria-controls="selesai" aria-selected="false"><i data-feather="check-square"></i>Selesai</a></li>
                                <!-- <li class="nav-item"><a class="nav-link" id="top-riwayat" data-bs-toggle="tab" href="#riwayat" role="tab" aria-controls="riwayat" aria-selected="false"><i data-feather="archive"></i>Riwayat</a></li> -->
                            </ul>
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search......."><span class="input-group-text"> <i class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="top-tabContent">
                    <div class="tab-pane fade show active" id="pengajuan" role="tabpanel" aria-labelledby="pengajuan">
                        <div class="col-xl-12 col-sm-12" id="pengajuan">
                            <div class="card">
                                <div class="blog-box blog-list row">
                                    <div class="col-xl-3 col-12"><img class="img-fluid sm-100-w" src="{{asset('layanan/images/faq/1.jpg')}}" alt=""></div>
                                    <div class="col-xl-9 col-12">
                                        <div class="blog-details">
                                            <div class="blog-date"><span>05</span> January 2021</div><a href="learning-detailed.html">
                                                <h6>Nomor pengajuan: KEB0231651616161651 </h6></a>
                                            <div class="blog-bottom-content">
                                                <ul class="blog-social">
                                                    <li>P.C. Unit</li>
                                                    <li>2 unit</li>
                                                </ul>
                                                <ul class="blog-social">
                                                    <li>Laptop</li>
                                                    <li>1 unit</li>
                                                </ul>
                                                <hr>
                                                <span class="badge badge-primary">Pengajuan</span>
                                                <p class="mt-0">Catatan :</p>
                                                <p class="mt-0">Menunggu pengecekan Kepala Bidang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="blog-box blog-list row">
                                    <div class="col-xl-3 col-12"><img class="img-fluid sm-100-w" src="{{asset('layanan/images/faq/1.jpg')}}" alt=""></div>
                                    <div class="col-xl-9 col-12">
                                        <div class="blog-details">
                                            <div class="blog-date"><span>01</span> April 2021</div><a data-bs-toggle="modal" data-bs-target=".modal-revisi" href="#">
                                                <h6>Nomor pengajuan: KEB0231651616132651 </h6></a>
                                            <div class="blog-bottom-content">
                                                <ul class="blog-social">
                                                    <li>P.C. Unit</li>
                                                    <li>2 unit</li>
                                                </ul>
                                                <hr>
                                                <span class="badge badge-warning">Revisi</span>
                                                <p class="mt-0">Catatan :</p>
                                                <p class="mt-0">Kurangi jumlah pengjuan menjadi 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="proses" role="tabpanel" aria-labelledby="proses">
                        <div class="col-xl-12 col-sm-12" id="proses">
                            <div class="card">
                                <div class="blog-box blog-list row">
                                    <div class="col-xl-3 col-12"><img class="img-fluid sm-100-w" src="{{asset('layanan/images/faq/1.jpg')}}" alt=""></div>
                                    <div class="col-xl-9 col-12">
                                        <div class="blog-details">
                                            <div class="blog-date"><span>19</span> Juli 2021</div><a href="learning-detailed.html">
                                                <h6>0981651616161651 </h6></a>
                                            <div class="blog-bottom-content">
                                                <ul class="blog-social">
                                                    <li>P.C. Unit</li>
                                                    <li>300025141841518</li>
                                                </ul>
                                                <hr>
                                                <span class="badge badge-warning">Proses</span>
                                                <p class="mt-0">Catatan :</p>
                                                <p class="mt-0">Pengecekan kondisi oleh Teknisi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade show" id="selesai" role="tabpanel" aria-labelledby="selesai">
                        <div class="col-xl-12 col-sm-12" id="selesai">
                            <div class="card">
                                <div class="blog-box blog-list row">
                                    <div class="col-xl-3 col-12"><img class="img-fluid sm-100-w" src="{{asset('layanan/images/faq/1.jpg')}}" alt=""></div>
                                    <div class="col-xl-9 col-12">
                                        <div class="blog-details">
                                            <div class="blog-date"><span>11</span> Februari 2021</div><a href="learning-detailed.html">
                                                <h6>0981651616161651 </h6></a>
                                            <div class="blog-bottom-content">
                                                <ul class="blog-social">
                                                    <li>Laptop</li>
                                                    <li>300025141841518</li>
                                                </ul>
                                                <hr>
                                                <span class="badge badge-success">Selesai</span>
                                                <p class="mt-0">Catatan :</p>
                                                <p class="mt-0">Berhasil diperbaik</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                

                <!-- <div class="col-xl-12 col-sm-12" id="proses">
                    <div class="card">
                        <div class="blog-box blog-list row">
                            <div class="col-xl-3 col-12"><img class="img-fluid sm-100-w" src="{{asset('layanan/images/faq/1.jpg')}}" alt=""></div>
                            <div class="col-xl-9 col-12">
                                <div class="blog-details">
                                    <div class="blog-date"><span>17</span> Juli 2023</div><a href="learning-detailed.html">
                                        <h6>0231651616161651 </h6></a>
                                    <div class="blog-bottom-content">
                                        <ul class="blog-social">
                                            <li>P.C. Unit</li>
                                            <li>300025141841518</li>
                                        </ul>
                                        <hr>
                                        <span class="badge badge-primary">Pengajuan</span>
                                        <p class="mt-0">Catatan :</p>
                                        <p class="mt-0">Java is an object-oriented programming language. Sun Microsystems first released Java in the year 1995. It is popularly used for developing Java applications in data centers, laptops, cell phones, game consoles, and scientific supercomputers. There are multiple websites and applications which will not work if Java is not installed.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Modal pengajuan baru -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" id="myLargeModalLabel">Tambah Pengajuan</h4>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Form Pengajuan Kebutuhan</h5>
                  </div>
                  <form class="form theme-form">
                    <div class="card-body" id="inputDataPengajuan">
                        <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="col-sm-3 col-form-label">Pilih Waktu Pengajuan</label>
                                        <input class="form-control digits" id="example-datetime-local-input" type="date"></input>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 position-relative">
                                <label class="form-label" for="validationTooltip01">Pilih Kebutuhan</label>
                                <div class="select2-drpdwn">
                                    <select class="js-example-placeholder-multiple col-sm-12">
                                        <option>P.C. Unit</option>
                                        <option>Laptop</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 position-relative">
                                <label class="form-label" for="validationTooltip02">Jumlah Kebutuhan</label>
                                <input class="form-control digits" type="number" placeholder="Jumlah">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <button class="btn btn-success btn-sm" type="button" onclick="daftarBaru()">Tambah Daftar </button>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-end">
                      <button class="btn btn-primary" type="submit">Ajukan</button>
                      <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- End Modal -->

    
    <!-- Modal pengajuan revisi -->
    <div class="modal fade bd-example-modal-lg modal-revisi" tabindex="-1" role="dialog" id="modalRevisi" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" id="modalRevisi">
        <div class="modal-content" id="modalRevisi">
            <div class="modal-header">
            <h4 class="modal-title" id="myLargeModalLabel">Pengajuan Nomor KEB0231651616132651</h4>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Form Pengajuan Kebutuhan Revisi</h5>
                  </div>
                  <form class="form theme-form">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                              <label class="col-sm-3 col-form-label">Pilih Waktu Pengajuan</label>
                              <input class="form-control digits" type="date" value="2020-01-01">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="exampleFormControlSelect17">Pilih Kebutuhan</label>
                            <div class="select2-drpdwn">
                                <select class="js-example-placeholder-multiple col-sm-12" multiple="multiple">
                                    <option selected="selected">P.C. Unit</option>
                                    <option>Laptop</option>
                                </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="exampleFormControlSelect17">Jumlah Kebutuhan</label>
                            <input class="form-control digits" type="number" placeholder="Jumlah" value="2">
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="card-footer text-end">
                      <button class="btn btn-primary" type="submit">Perbaiki</button>
                      <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- End Modal -->
</div>

<script>
    function daftarBaru(){
        var x = document.getElementById('inputDataPengajuan')
        x.innerHTML +=
        '<div class="row" id="dataRow1">'+
           ' <div class="col-md-6 position-relative">'+
                '<label class="form-label" for="validationTooltip01">Pilih Kebutuhan</label>'+
                '<div class="select2-drpdwn">'+
                    '<select class="js-example-placeholder-multiple col-sm-12">'+
                        '<option>P.C. Unit</option>'+
                        '<option>Laptop</option>'+
                    '</select>'+
                '</div>'+
            '</div>'+
            '<div class="col-md-6 position-relative">'+
                '<label class="form-label" for="validationTooltip02">Jumlah Kebutuhan</label>'+
                '<input class="form-control digits" type="number" placeholder="Jumlah">'+
            '</div>'+
        '</div>'

    }
</script>
@endsection

@push('style')
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/datatable-extension.css')}}"> -->

        
@endpush

@push('script')
    <!-- Plugins JS start-->
    <script src="{{asset('layanan/js/sidebar-menu.js')}}"></script>
    
@endpush