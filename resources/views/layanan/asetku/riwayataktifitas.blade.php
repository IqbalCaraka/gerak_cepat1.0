@extends('layouts.layanan') 
@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
        <div class="col-sm-6">
            <h3>Order History</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Ecommerce</li>
            <li class="breadcrumb-item active"> Order History</li>
            </ol>
        </div>
        </div>
    </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
        <div class="card">
            <div class="card-header pb-0">
            <h5>Order history</h5>
            </div>
            <div class="card-body">
            <div class="order-history table-responsive">
                <table class="table table-bordernone display" id="basic-1">
                <thead>
                    <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Product name</th>
                    <th scope="col">Size</th>
                    <th scope="col">Color</th>
                    <th scope="col">Article number</th>
                    <th scope="col">Units</th>
                    <th scope="col">Price</th>
                    <th scope="col">Payment Mode</th>
                    <th scope="col"><i class="fa fa-angle-down"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td><a href="product-page.html"><img class="img-fluid img-30" src="../assets/images/product/1.png" alt="#"></a></td>
                    <td>
                        <div class="product-name"><a href="javascript:void(0)">Long Top</a>
                        <div class="order-process"><span class="order-process-circle"></span>Processing</div>
                        </div>
                    </td>
                    <td>XL</td>
                    <td> <span class="badge badge-light-danger">Pink</span></td>
                    <td>4215738</td>
                    <td>2</td>
                    <td>$21</td>
                    <td>Credit Card</td>
                    <td><i data-feather="more-vertical"></i></td>
                    </tr>
                    <tr>
                    <td><a href="product-page.html"><img class="img-fluid img-30" src="../assets/images/product/13.png" alt="#"></a></td>
                    <td>
                        <div class="product-name"><a href="javascript:void(0)">Fancy watch</a>
                        <div class="order-process"><span class="order-process-circle"></span>Processing</div>
                        </div>
                    </td>
                    <td>Free Size</td>
                    <td> <span class="badge badge-light-info">White</span></td>
                    <td>5476182</td>
                    <td>3</td>
                    <td>$30</td>
                    <td>Bank Transfer</td>
                    <td><i data-feather="more-vertical"></i></td>
                    </tr>
                    <tr>
                    <td><img class="img-fluid img-30" src="../assets/images/product/4.png" alt="#"></td>
                    <td>
                        <div class="product-name"><a href="javascript:void(0)">Man shoes</a>
                        <div class="order-process"><span class="order-process-circle"></span>Processing</div>
                        </div>
                    </td>
                    <td>8</td>
                    <td> <span class="badge badge-light-danger">Pink</span></td>
                    <td>1756457</td>
                    <td>1</td>
                    <td>$18</td>
                    <td>Credit Card</td>
                    <td><i data-feather="more-vertical"></i></td>
                    </tr>
                    <tr>
                    <td><a href="product-page.html"><img class="img-fluid img-30" src="../assets/images/product/10.png" alt="#"></a></td>
                    <td>
                        <div class="product-name"><a href="javascript:void(0)">Ladies side bag</a>
                        <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
                        </div>
                    </td>
                    <td>Small</td>
                    <td> <span class="badge badge-light-warning">Brown</span></td>
                    <td>7451725</td>
                    <td>1</td>
                    <td>$13</td>
                    <td>COD</td>
                    <td><i data-feather="more-vertical"></i></td>
                    </tr>
                    <tr>
                    <td><a href="product-page.html"><img class="img-fluid img-30" src="../assets/images/product/12.png" alt="#"></a></td>
                    <td>
                        <div class="product-name"><a href="javascript:void(0)">Ladies Slipper</a>
                        <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
                        </div>
                    </td>
                    <td>6</td>
                    <td> <span class="badge badge-light-warning">Brown</span></td>
                    <td>4127421</td>
                    <td>1</td>
                    <td>$6</td>
                    <td>COD</td>
                    <td><i data-feather="more-vertical"></i></td>
                    </tr>
                    <tr>
                    <td><a href="product-page.html"><img class="img-fluid img-30" src="../assets/images/product/3.png" alt="#"></a></td>
                    <td>
                        <div class="product-name"><a href="javascript:void(0)">Fancy Ladies Jacket</a>
                        <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
                        </div>
                    </td>
                    <td>L</td>
                    <td> <span class="badge badge-light-info">Light gray</span></td>
                    <td>3581714</td>
                    <td>2</td>
                    <td>$24</td>
                    <td>COD</td>
                    <td><i data-feather="more-vertical"></i></td>
                    </tr>
                    <tr>
                    <td><a href="product-page.html"><img class="img-fluid img-30" src="../assets/images/product/2.png" alt="#"></a></td>
                    <td>
                        <div class="product-name"><a href="javascript:void(0)">Ladies Handbag</a>
                        <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
                        </div>
                    </td>
                    <td>Large</td>
                    <td> <span class="badge badge-light-success">Black</span></td>
                    <td>6748142</td>
                    <td>1</td>
                    <td>$15</td>
                    <td>COD</td>
                    <td><i data-feather="more-vertical"></i></td>
                    </tr>
                    <tr>
                    <td><a href="product-page.html"><img class="img-fluid img-30" src="../assets/images/product/15.png" alt="#"></a></td>
                    <td>
                        <div class="product-name"><a href="javascript:void(0)">I phone 13 mobile</a>
                        <div class="order-process"><span class="order-process-circle cancel-order"></span>Cancelled</div>
                        </div>
                    </td>
                    <td>No Size</td>
                    <td> <span class="badge badge-light-primary">Blue</span></td>
                    <td>5748214</td>
                    <td>2</td>
                    <td>$500</td>
                    <td>Google pay</td>
                    <td><i data-feather="more-vertical"></i></td>
                    </tr>
                    <tr>
                    <td><a href="product-page.html"><img class="img-fluid img-30" src="../assets/images/product/14.png" alt="#"></a></td>
                    <td>
                        <div class="product-name"><a href="javascript:void(0)">Watch</a>
                        <div class="order-process"><span class="order-process-circle cancel-order"></span>Cancelled</div>
                        </div>
                    </td>
                    <td>Medium</td>
                    <td> <span class="badge badge-light-info">White</span></td>
                    <td>2471254</td>
                    <td>1</td>
                    <td>$15</td>
                    <td>Bank Transfer</td>
                    <td><i data-feather="more-vertical"></i></td>
                    </tr>
                    <tr>
                    <td><a href="product-page.html"><img class="img-fluid img-30" src="../assets/images/product/11.png" alt="#"></a></td>
                    <td>
                        <div class="product-name"><a href="javascript:void(0)">Slipper</a>
                        <div class="order-process"><span class="order-process-circle cancel-order"></span>Cancelled</div>
                        </div>
                    </td>
                    <td>10</td>
                    <td> <span class="badge badge-light-primary">Blue</span></td>
                    <td>8475112</td>
                    <td>2</td>
                    <td>$12</td>
                    <td>Google pay</td>
                    <td><i data-feather="more-vertical"></i></td>
                    </tr>
                    <tr>
                    <td><a href="product-page.html"><img class="img-fluid img-30" src="../assets/images/product/2.png" alt="#"></a></td>
                    <td>
                        <div class="product-name"><a href="javascript:void(0)">Ladies Handbag</a>
                        <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
                        </div>
                    </td>
                    <td>Large</td>
                    <td> <span class="badge badge-light-success">Black</span></td>
                    <td>6748142</td>
                    <td>1</td>
                    <td>$15</td>
                    <td>COD</td>
                    <td><i data-feather="more-vertical"></i></td>
                    </tr>
                    <tr>
                    <td><a href="product-page.html"><img class="img-fluid img-30" src="../assets/images/product/15.png" alt="#"></a></td>
                    <td>
                        <div class="product-name"><a href="javascript:void(0)">I phone 13 mobile</a>
                        <div class="order-process"><span class="order-process-circle cancel-order"></span>Cancelled</div>
                        </div>
                    </td>
                    <td>No Size</td>
                    <td> <span class="badge badge-light-primary">Blue</span></td>
                    <td>5748214</td>
                    <td>2</td>
                    <td>$500</td>
                    <td>Google pay</td>
                    <td><i data-feather="more-vertical"></i></td>
                    </tr>
                    <tr>
                    <td><a href="product-page.html"><img class="img-fluid img-30" src="../assets/images/product/14.png" alt="#"></a></td>
                    <td>
                        <div class="product-name"><a href="javascript:void(0)">Watch</a>
                        <div class="order-process"><span class="order-process-circle cancel-order"></span>Cancelled</div>
                        </div>
                    </td>
                    <td>Medium</td>
                    <td> <span class="badge badge-light-info">White</span></td>
                    <td>2471254</td>
                    <td>1</td>
                    <td>$15</td>
                    <td>Bank Transfer</td>
                    <td><i data-feather="more-vertical"></i></td>
                    </tr>
                    <tr>
                    <td><a href="product-page.html"><img class="img-fluid img-30" src="../assets/images/product/11.png" alt="#"></a></td>
                    <td>
                        <div class="product-name"><a href="javascript:void(0)">Slipper</a>
                        <div class="order-process"><span class="order-process-circle cancel-order"></span>Cancelled</div>
                        </div>
                    </td>
                    <td>10</td>
                    <td> <span class="badge badge-light-primary">Blue</span></td>
                    <td>8475112</td>
                    <td>2</td>
                    <td>$12</td>
                    <td>Google pay</td>
                    <td><i data-feather="more-vertical"></i></td>
                    </tr>
                    <tr>
                    <td><a href="product-page.html"><img class="img-fluid img-30" src="../assets/images/product/1.png" alt="#"></a></td>
                    <td>
                        <div class="product-name"><a href="javascript:void(0)">Long Top</a>
                        <div class="order-process"><span class="order-process-circle"></span>Processing</div>
                        </div>
                    </td>
                    <td>XL</td>
                    <td> <span class="badge badge-light-danger">Pink</span></td>
                    <td>4215738</td>
                    <td>2</td>
                    <td>$21</td>
                    <td>Credit Card</td>
                    <td><i data-feather="more-vertical"></i></td>
                    </tr>
                    <tr>
                    <td><a href="product-page.html"><img class="img-fluid img-30" src="../assets/images/product/13.png" alt="#"></a></td>
                    <td>
                        <div class="product-name"><a href="javascript:void(0)">Fancy watch</a>
                        <div class="order-process"><span class="order-process-circle"></span>Processing</div>
                        </div>
                    </td>
                    <td>Free Size</td>
                    <td> <span class="badge badge-light-info">White</span></td>
                    <td>5476182</td>
                    <td>3</td>
                    <td>$30</td>
                    <td>Bank Transfer</td>
                    <td><i data-feather="more-vertical"></i></td>
                    </tr>
                    <tr>
                    <td><img class="img-fluid img-30" src="../assets/images/product/4.png" alt="#"></td>
                    <td>
                        <div class="product-name"><a href="javascript:void(0)">Man shoes</a>
                        <div class="order-process"><span class="order-process-circle"></span>Processing</div>
                        </div>
                    </td>
                    <td>8</td>
                    <td> <span class="badge badge-light-danger">Pink</span></td>
                    <td>1756457</td>
                    <td>1</td>
                    <td>$18</td>
                    <td>Credit Card</td>
                    <td><i data-feather="more-vertical"></i></td>
                    </tr>
                    <tr>
                    <td><a href="product-page.html"><img class="img-fluid img-30" src="../assets/images/product/10.png" alt="#"></a></td>
                    <td>
                        <div class="product-name"><a href="javascript:void(0)">Ladies side bag</a>
                        <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
                        </div>
                    </td>
                    <td>Small</td>
                    <td> <span class="badge badge-light-warning">Brown</span></td>
                    <td>7451725</td>
                    <td>1</td>
                    <td>$13</td>
                    <td>COD</td>
                    <td><i data-feather="more-vertical"></i></td>
                    </tr>
                    <tr>
                    <td><a href="product-page.html"><img class="img-fluid img-30" src="../assets/images/product/12.png" alt="#"></a></td>
                    <td>
                        <div class="product-name"><a href="javascript:void(0)">Ladies Slipper</a>
                        <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
                        </div>
                    </td>
                    <td>6</td>
                    <td> <span class="badge badge-light-warning">Brown</span></td>
                    <td>4127421</td>
                    <td>1</td>
                    <td>$6</td>
                    <td>COD</td>
                    <td><i data-feather="more-vertical"></i></td>
                    </tr>
                    <tr>
                    <td><a href="product-page.html"><img class="img-fluid img-30" src="../assets/images/product/3.png" alt="#"></a></td>
                    <td>
                        <div class="product-name"><a href="javascript:void(0)">Fancy Ladies Jacket</a>
                        <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
                        </div>
                    </td>
                    <td>Xl</td>
                    <td> <span class="badge badge-light-info">Light gray</span></td>
                    <td>3581714</td>
                    <td>1</td>
                    <td>$24</td>
                    <td>COD</td>
                    <td><i data-feather="more-vertical"></i></td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends  -->
@endsection