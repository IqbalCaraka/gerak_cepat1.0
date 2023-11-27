@extends('layouts.layanan')
@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>BMN</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/"><i data-feather="home"></i></a></li>
                <li class="breadcrumb-item">Master Data</li>
                <li class="breadcrumb-item active">BMN</li>
                </ol>
            </div>
        </div>
        
    </div>
</div>
<!-- Daftar Aset -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between  pb-0">
                    <h5>Daftar BMN</h5>
                    <button class="btn btn-sm btn-outline-primary" type="button"  data-bs-toggle="modal" data-bs-target="#updateBMN">Update BMN</button>  
                </div>
                <div class="card-body">
                <form>
                    <div class="form-group row">
                        <label for="subkelompok" class="col-sm-2 col-form-label">Kelompok</label>
                        <div class="col-sm-8">
                            <select class="form-select btn-pill digits" id="exampleFormControlSelect7" placeholder="Pilih Subkelompok">
                                <option>Elektronik</option>
                                <option>Kendaraan</option>
                                <option>Tanah/Bangunan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="subkelompok" class="col-sm-2 col-form-label">Subkelompok</label>
                        <div class="col-sm-8">
                            <select class="form-select btn-pill digits" id="exampleFormControlSelect7" placeholder="Pilih Subkelompok">
                                <option>Laptop</option>
                                <option>P.C. Unit</option>
                                <option>Laptop</option>
                                <option>A.C. Unit</option>
                            </select>
                        </div>
                    </div>
                </form>
                <div class="dt-ext table-responsive">
                    <table class="display" id="export-button">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NUP</th>
                            <th>Subkelompok</th>
                            <th>Merk</th>
                            <th>Tahun Perolehan</th>
                            <th>Ruangan</th>
                            <th>Penanggung Jawab</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>3050204006009243</td>
                            <td>A.C. Unit</td>
                            <td>Daikin</td>
                            <td>2020</td>
                            <td>Tata Usaha</td>
                            <td>Arif</td>
                            <td></td>
                        </tr>
                        <tr id="bmnBaru" style="display:none">
                            <td>2</td>
                            <td>3050212006008243</td>
                            <td>Laptop</td>
                            <td>Acer</td>
                            <td>2023</td>
                            <td id="delegasiRuangan"></td>
                            <td id="delegasiOrang"></td>
                            <td>
                                <ul class="action">
                                    <li class="edit"> <a href="#"><i data-feather="arrow-right-circle" data-toggle="tooltip" data-placement="top" title="delegasi bmn" data-original-title="test" data-bs-toggle="modal" data-bs-target=".delegasi-bmn"></i></a></li>
                                </ul>
                            </td>
                            
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>NUP</th>
                            <th>Subkelompok</th>
                            <th>Merk</th>
                            <th>Tahun Perolehan</th>
                            <th>Ruangan</th>
                            <th>Penanggung Jawab</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Update BMN -->
    <div class="modal fade" id="updateBMN" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update BMN</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">Update BMN berhasil!</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" onclick=updateBMN()>Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal -->
    
    <!-- Modal Delegasikan penggunaan BMN Baru -->
    <div class="modal fade delegasi-bmn" id="delegasiBMN" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delegasi BMN</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form theme-form">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="nama">Ruangan</label>
                                    <select class="form-select btn-pill digits" id="isianRuangan">
                                        <option>PDSK</option>
                                        <option>Mutasi</option>
                                        <option>Gudang</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="nama">Nama</label>
                                    <select class="form-select btn-pill digits" id="isianOrang">
                                        <option>Agus</option>
                                        <option>Yudi</option>
                                        <option>Bagus</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button" onclick=delegasikanBMN()>Proses</button>
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End modal -->
<!-- Pengajuan Aset dan Cek Resi -->
<!-- <div class="container-fluid">
    <div class="row"> -->
        <!-- Pengajuan Aset -->
        <!-- <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Form Pengajuan</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                        <form>
                            <div class="mb-3 m-form__group">
                            <label class="form-label">Left Addon</label>
                            <div class="input-group"><span class="input-group-text">@</span>
                                <input class="form-control" type="text" placeholder="Email">
                            </div>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Right Addon</label>
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username"><span class="input-group-text">@example.com</span>
                            </div>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Joint Addon</label>
                            <div class="input-group"><span class="input-group-text">0.00</span>
                                <input class="form-control" type="number" aria-label="Amount (to the nearest dollar)">
                            </div>
                            </div>
                            <div>
                            <label class="form-label">Left & Right Addon</label>
                            <div class="input-group mb-3 leftright-radius"><span class="input-group-text">0.00  </span>
                                <input class="form-control" type="number" aria-label="Amount (to the nearest dollar)"><span class="input-group-text">0.00  </span>
                            </div>
                            </div>
                            <div class="mb-3 input-group-solid">
                            <label class="form-label">Solid style</label>
                            <div class="input-group"><span class="input-group-text">@  </span>
                                <input class="form-control" type="text" placeholder="Email">
                            </div>
                            </div>
                            <div class="mb-3 input-group-square">
                            <label class="form-label">Square style</label>
                            <div class="input-group left-radius"><span class="input-group-text">+</span>
                                <input class="form-control" type="text" placeholder="Email">
                            </div>
                            </div>
                            <div class="mb-3 input-group-square">
                            <label class="form-label">Raise style</label>
                            <div class="input-group input-group-air left-radius"><span class="input-group-text">#</span>
                                <input class="form-control" type="text" placeholder="Email">
                            </div>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Left & Right Addon</label>
                            <div class="input-group mb-3 leftright-radius"><span class="input-group-text"><i class="icofont icofont-ui-zoom-out"> </i></span>
                                <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)"><span class="input-group-text rounded-0">0.00                    </span>
                            </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary m-r-15" type="submit">Submit</button>
                    <button class="btn btn-light" type="submit">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div> -->

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
    <script>
        function updateBMN(){
            var x = document.getElementById('bmnBaru')
            x.style.display = ""
        }

        function delegasikanBMN(){
            var ruangan = document.getElementById('isianRuangan')
            var orang = document.getElementById('isianOrang')
            var delegasiRuangan = document.getElementById('delegasiRuangan')
            var delegasiOrang = document.getElementById('delegasiOrang')

            delegasiRuangan.innerHTML = ruangan.options[ruangan.selectedIndex].text
            delegasiOrang.innerHTML = orang.options[orang.selectedIndex].text
            $('#delegasiBMN').modal('hide');
        }
    </script>
@endpush
@push('style')
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/datatable-extension.css')}}">
@endpush