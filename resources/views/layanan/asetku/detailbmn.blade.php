@extends('layouts.layanan')
@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Detail BMN</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/"><i data-feather="home"></i></a></li>
                <li class="breadcrumb-item">Riwayat</li>
                <li class="breadcrumb-item active">Detail Riwayat BMN</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div>
        <div class="row product-page-main p-0">
            <!-- Foto BMN -->
            <div class="col-xl-5 col-md-6 box-col-7 xl-50">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-9 product-main">
                                <div class="pro-slide-single">
                                    <div><img class="img-fluid" src="{{asset('layanan/images/ecommerce/01.jpg')}}" alt=""></div>
                                    <div><img class="img-fluid" src="{{asset('layanan/images/ecommerce/02.jpg')}}" alt=""></div>
                                    <div><img class="img-fluid" src="{{asset('layanan/images/ecommerce/03.jpg')}}" alt=""></div>
                                    <div><img class="img-fluid" src="{{asset('layanan/images/ecommerce/04.jpg')}}" alt=""></div>
                                    <div><img class="img-fluid" src="{{asset('layanan/images/ecommerce/05.jpg')}}" alt=""></div>
                                    <div><img class="img-fluid" src="{{asset('layanan/images/ecommerce/06.jpg')}}" alt=""></div>
                                    <div><img class="img-fluid" src="{{asset('layanan/images/ecommerce/07.jpg')}}" alt=""></div>
                                    <div><img class="img-fluid" src="{{asset('layanan/images/ecommerce/08.jpg')}}" alt=""></div>
                                </div>
                            </div>
                            <div class="col-xl-3 product-thumbnail">
                                <div class="pro-slide-right">
                                    <div>
                                        <div class="slide-box"><img src="{{asset('layanan/images/ecommerce/01.jpg')}}" alt=""></div>
                                    </div>
                                    <div>
                                        <div class="slide-box"><img src="{{asset('layanan/images/ecommerce/02.jpg')}}" alt=""></div>
                                    </div>
                                    <div>
                                        <div class="slide-box"><img src="{{asset('layanan/images/ecommerce/03.jpg')}}" alt=""></div>
                                    </div>
                                    <div>
                                        <div class="slide-box"><img src="{{asset('layanan/images/ecommerce/04.jpg')}}" alt=""></div>
                                    </div>
                                    <div>
                                        <div class="slide-box"><img src="{{asset('layanan/images/ecommerce/05.jpg')}}" alt=""></div>
                                    </div>
                                    <div>
                                        <div class="slide-box"><img src="{{asset('layanan/images/ecommerce/06.jpg')}}" alt=""></div>
                                    </div>
                                    <div>
                                        <div class="slide-box"><img src="{{asset('layanan/images/ecommerce/07.jpg')}}" alt=""></div>
                                    </div>
                                    <div>
                                        <div class="slide-box"><img src="{{asset('layanan/images/ecommerce/08.jpg')}}" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-xl-5 box-col-12 proorder-xl-3 xl-100">
                <div class="card">
                <div class="card-body">
                    <div class="pro-group pt-0 border-0">
                    <div class="product-page-details mt-0">
                        <h3>Women Pink shirt.</h3>
                        <div class="pro-review">
                        <div class="d-flex">
                            <select id="u-rating-fontawesome" name="rating" autocomplete="off">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            </select><span>(250 review)</span>
                        </div>
                        </div>
                    </div>
                    <div class="product-price">$26.00  
                        <del>$350.00 </del>
                    </div>
                    <div class="color-selector">
                        <ul>
                        <li class="active white"></li>
                        <li class="bg-primary">                                              </li>
                        <li class="bg-secondary"></li>
                        <li class="bg-success"></li>
                        <li class="bg-warning"></li>
                        <li class="bg-danger"></li>
                        </ul>
                    </div><a class="btn btn-secondary mt-0" href="cart.html"><i class="fa fa-shopping-cart me-2"></i>Buy Now</a>
                    </div>
                    <div class="pro-group">
                    <p>Rock Paper Scissors Various Dots Half Sleeves Girl’s Regular Fit T-Shirt I 100% Cotton T Shirt with Half Sleeve Round Neck I Regular Wear Solid Kids Tees and Black Sleeve.</p>
                    </div>
                    <div class="pro-group">
                    <div class="row">
                        <div class="col-md-6">
                        <table>
                            <tbody>
                            <tr>
                                <td> <b>Availability &nbsp;: &nbsp;</b></td>
                                <td class="txt-success">In stock</td>
                            </tr>
                            <tr>
                                <td> <b>Brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></td>
                                <td>Pixelstrap</td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="col-md-6">
                        <table>
                            <tbody>
                            <tr>
                                <td> <b>Seller &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                                <td>ABC</td>
                            </tr>
                            <tr>
                                <td> <b>Fabric &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                                <td>Cotton                                </td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                    <div class="pro-group">
                    <div class="row">
                        <div class="col-md-4 xl-50 box-col-30">
                        <h6 class="product-title">share it</h6>
                        </div>
                        <div class="col-md-7 xl-50 box-col-70">
                        <div class="product-icon">
                            <ul class="product-social">
                            <li class="d-inline-block"><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="d-inline-block"><a href="https://www.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li class="d-inline-block"><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="d-inline-block"><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram">                               </i></a></li>
                            </ul>
                            <form class="d-inline-block f-right">                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="pro-group pb-0">
                    <div class="pro-shop"><a class="btn btn-primary m-r-10" href="cart.html">                                <i class="fa fa-shopping-basket me-2"></i>Add To Cart</a><a class="btn btn-danger" href="list-wish.html"><i class="fa fa-heart me-2"></i>Add To WishList                                  </a></div>
                    </div>
                </div>
                </div>
            </div> -->
            <!-- <div class="col-xl-2 col-md-6 box-col-5 xl-50 proorder-lg-1">
                <div class="card">
                <div class="card-body">
                    side-bar colleps block stat
                    <div class="filter-block">
                    <h4>Brand </h4>
                    <ul>
                        <li>
                        <div class="form-check">
                            <input class="form-check-input" id="Raymond" type="checkbox" value="">
                            <label class="form-check-label" for="Raymond">Raymond</label>
                        </div>
                        </li>
                        <li>
                        <div class="form-check">
                            <input class="form-check-input" id="Pepe-Jeans" type="checkbox" value="">
                            <label class="form-check-label" for="Pepe-Jeans">Pepe-Jeans</label>
                        </div>
                        </li>
                        <li>
                        <div class="form-check">
                            <input class="form-check-input" id="Celio" type="checkbox" value="">
                            <label class="form-check-label" for="Celio">Celio</label>
                        </div>
                        </li>
                        <li>
                        <div class="form-check">
                            <input class="form-check-input" id="aime" type="checkbox" value="">
                            <label class="form-check-label" for="aime">aime</label>
                        </div>
                        </li>
                        <li>
                        <div class="form-check">
                            <input class="form-check-input" id="aliff" type="checkbox" value="">
                            <label class="form-check-label" for="aliff">aliff</label>
                        </div>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
                <div class="card">
                <div class="card-body">
                    <div class="collection-filter-block">
                    <ul class="pro-services">
                        <li>
                        <div class="d-flex"><i data-feather="truck"></i>
                            <div class="flex-grow-1">
                            <h5>Free Shipping                                    </h5>
                            <p>Free Shipping World Wide</p>
                            </div>
                        </div>
                        </li>
                        <li>
                        <div class="d-flex"><i data-feather="clock"></i>
                            <div class="flex-grow-1">
                            <h5>24 X 7 Service                                    </h5>
                            <p>Online Service For New Customer                                 </p>
                            </div>
                        </div>
                        </li>
                    </ul>
                    </div>
                </div>
                silde-bar colleps block end here
                </div>
            </div> -->
            <!-- Keterangan Barang -->
            <div class="card col-xl-5 col-md-6 box-col-7 xl-50">
                <div class="row product-page-main">
                    <div>
                        <ul class="nav nav-tabs border-tab mb-0" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="false">Informasi</a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false">Riwayat Perbaikan</a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="true">Riwayat Pemakaian</a>
                            <div class="material-border"></div>
                        </li>
                        <!-- <li class="nav-item"><a class="nav-link" id="brand-top-tab" data-bs-toggle="tab" href="#top-brand" role="tab" aria-controls="top-brand" aria-selected="true">Brand</a> -->
                            <div class="material-border"></div>
                        </li>
                        </ul>
                        <div class="tab-content" id="top-tabContent">
                        <div class="tab-pane fade active show" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                            <div class="row mb-2 mt-2">
                                <h6>NUP</h6>
                                <p>3050204006009243</p>
                            </div>
                            <div class="row mb-2 mt-2">
                                <h6>Subkelompok</h6>
                                <p>A.C. Split</p>
                            </div>
                            <div class="row mb-2 mt-2">
                                <h6>Merk</h6>
                                <p>Daikin</p>
                            </div>
                            <div class="row mb-2 mt-2">
                                <h6>Tahun perolehan</h6>
                                <p>2020</p>
                            </div>
                            <div class="row mb-2 mt-2">
                                <h6>Nilai Perolehan (Rp)</h6>
                                <p>5.000.000</p>
                            </div>
                            <div class="row mb-2 mt-2">
                                <h6>Ruangan</h6>
                                <p>Tata Usaha</p>
                            </div>
                            <div class="row mb-2 mt-2">
                                <h6>Penanggungjawab Saat Ini</h6>
                                <p>Arif</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">    
                            <div class="table-responsive" id="2">
                                    <table class="display" id="basic-1" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Perbaikan</th>
                                            <th>Nilai Perbaikan (RP)</th>
                                            <th>Jenis Perbaikan</th>
                                            <th>Keterangan Perbaikan</th>
                                            <th>Teknisi</th>
                                            <th>Dokumen Perbaikan</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>01/03/2021</td>
                                                <td>500.000</td>
                                                <td>Eksternal</td>
                                                <td>Pembersihan A.C.</td>
                                                <td>Wito</td>
                                                <td> 
                                                    <ul class="action"> 
                                                        <li class="edit"> <a href="{{asset('layanan/pdf/sample.pdf')}}"><i data-feather="download" data-toggle="tooltip" data-placement="top" title="Download"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                            <div class="table-responsive" id="2">
                                <table class="display" id="basic-9" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Pemakain Pertama</th>
                                        <th>Tanggal Pemakain Terakhir</th>
                                        <th>Penanggung Jawab</th>
                                        <th>Ruangan</th>
                                        <th>Dokumen Serah Terima</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>01/01/2020</td>
                                            <td>01/12/2020</td>
                                            <td>Lita</td>
                                            <td>Inka</td>
                                            <td>
                                                <ul class="action"> 
                                                    <li class="edit"> <a href="{{asset('layanan/pdf/sample.pdf')}}"><i data-feather="download" data-toggle="tooltip" data-placement="top" title="Download"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>   
                                        <tr>
                                            <td>2</td>
                                            <td>02/01/2020</td>
                                            <td>-</td>
                                            <td>Arif</td>
                                            <td>Tata Usaha</td>
                                            <td>
                                                <ul class="action"> 
                                                    <li class="edit"> <a href="{{asset('layanan/pdf/sample.pdf')}}"><i data-feather="download" data-toggle="tooltip" data-placement="top" title="Download"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>                                          
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="top-brand" role="tabpanel" aria-labelledby="brand-top-tab">
                            <p class="mb-0 m-t-20">Product Dimensions : 18 x 18 x 4 cm<br>Date First Available : 31 March 2023<br>Manufacturer : Tee Stores<br>Item part number : TS-WT721-XS-WHITE</p>
                        </div>
                        </div>
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