@extends('layouts.layanan')
@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Subkelompok BMN</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                <li class="breadcrumb-item">Users</li>
                <li class="breadcrumb-item active">User Profile</li>
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
                <div class="card-header pb-0">
                <h5>Daftar Subkelompok BMN</h5>
                </div>
                <div class="card-body">
                <div class="dt-ext table-responsive">
                    <table class="display" id="export-button">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Inventaris</th>
                            <th>Nama Subkelompok</th>
                            <th>Jumlah BMN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>3050204006</td>
                            <td>A.C. Split</td>
                            <td>20</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nomor Inventaris</th>
                            <th>Nama Subkelompok</th>
                            <th>Jumlah BMN</th>
                        </tr>
                    </tfoot>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pengajuan Aset dan Cek Resi -->
<div class="container-fluid">
    <div class="row">
        <!-- Pengajuan Aset -->
        <div class="col-sm-12">
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
@endpush
@push('style')
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('layanan/css/vendors/datatable-extension.css')}}">
@endpush