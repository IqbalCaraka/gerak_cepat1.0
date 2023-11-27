@extends('layouts.layanan')
@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Laporan</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/"><i data-feather="home"></i></a></li>
                <li class="breadcrumb-item">Laporan</li>
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
                            <h5>Form Laporan</h5>
                            <a href="{{asset('layanan/pdf/sample.pdf')}}">
                                <button class="btn btn-sm btn-outline-primary" type="button">Cetak Laporan</button>       
                            </a>
                        </div>
                        <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label for="subkelompok" class="col-sm-2 col-form-label">Jenis Laporan</label>
                                <div class="col-sm-10">
                                    <select class="form-select btn-pill digits" id="exampleFormControlSelect7" placeholder="Pilih Subkelompok">
                                        <option>Perbaikan</option>
                                        <option>Kebutuhan</option>
                                        <option>Pengadaan</option>
                                        <option>Keseluruhan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="subkelompok" class="col-sm-2 col-form-label">Periode Awal</label>
                                <div class="col-sm-10">
                                    <input class="form-control digits" id="example-datetime-local-input" type="date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="subkelompok" class="col-sm-2 col-form-label">Periode Akhir</label>
                                <div class="col-sm-10">
                                    <input class="form-control digits" id="example-datetime-local-input" type="date">
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
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
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <div class="mb-3">
                          <label class="col-sm-3 col-form-label">Pilih Waktu Pengajuan</label>
                          <input class="form-control digits" id="example-datetime-local-input" type="date">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="mb-3">
                        <label class="form-label" for="exampleFormControlSelect17">Pilih Kebutuhan</label>
                        <div class="select2-drpdwn">
                            <select class="js-example-placeholder-multiple col-sm-12" multiple="multiple">
                                <option>P.C. Unit</option>
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
                        <input class="form-control digits" type="number" placeholder="Jumlah">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="mb-3">
                            <button class="btn btn-success btn-sm" type="button">Tambah Daftar </button>
                      </div>
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
@endsection