@extends('layouts.master')

@section('title')

@endsection

@section('style-online')
<link rel="stylesheet" href="{{asset('assets-product/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('assets-product/css/style.css')}}">
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
@endsection

@section('style')

@endsection

@section('content')
<!--==================== MAIN ====================-->
<section id="product" class="py-5">
    <div class="container-fluid px-5">
        <div class="row">
            <div class="col-md-8">
                <div class="showcase">
                    <div class="showcase">
                        <img class="img-fluid" src="{{asset('assets/img/Rolex/m126618lb-0002.avif')}}" alt="">
                    </div>

                </div>
                <div class="product-menu mt-md-3">
                    <div class="row">
                        <div class="col-md-6 pr-0">
                            <p class="text-uppercase product-title d-inline">Choose A Color</p>
                            <div class="frame">
                                <div class="product-1 float-left">
                                    <img class="img-fluid" src="{{asset('assets/img/Rolex/SubmarinerDate.webp')}}" alt="Silver">
                                    <p class="text-center text-uppercase">Date</p>
                                </div>
                                <div class="product-2 float-left">
                                    <img class="img-fluid" src="{{asset('assets/img/Rolex/Hulk.webp')}}" alt="Gold">
                                    <p class="text-center text-uppercase">Hulk</p>
                                </div>
                                <div class="product-3 float-left">
                                    <img class="img-fluid" src="{{asset('assets/img/Rolex/SubmarinerNoDate.webp')}}" alt="Rose Gold">
                                    <p class="text-center text-uppercase">No Date</p>
                                </div>
                                <div class="product-4 float-left">
                                    <img class="img-fluid" src="{{asset('assets/img/Rolex/SubmarinerOr.webp')}}" alt="Two-Tone">
                                    <p class="text-center text-uppercase">Or/Acier</p>
                                </div>
                            </div>
                            <div class="separetor d-md-block d-none"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="lens">
                                <p class="text-uppercase product-title">Size</p>
                                <div class="lens-menu ml-3">
                                    <div class="grey float-left">
                                        <p class="text-uppercase mt-2">36mm</p>
                                    </div>
                                    <div class="grey-polarized float-left">
                                        <p class="text-uppercase pl-2 mt-2 ml-3">40mm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="shop text-center mt-lg-5">
                    <h2 class="pt-md-5">Submariner Date</h2>
                    <p class="name my-2">Silver / 36mm</p>
                    <div class="price mb-sm-5 mb-3">$159.00</div>
                    <a class="cart-button" href="#">Buy Now</a>
                    <div class="selling-point mt-4 mt-sm-5 mt-md-5 ml-sm-5">
                        <a href="#" class="d-block text-left"> <i class="fa fa-truck" aria-hidden="true"></i> Free & Fast Shipping</a>
                        <a href="#" class="d-block text-left mt-2"><i class="fa fa-cube" aria-hidden="true"></i> Easy returns</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="features">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 px-lg-5 mt-md-5">
                <div class="product-about text-center">
                    <h2 class="mb-md-4 mb-sm-3">Submariner Date</h2>
                    <ul class="nav d-flex justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="tab-link mr-2 mr-md-5 mr-sm-5" href="#profile" role="tab" data-toggle="tab">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="tab-link mr-2 mr-sm-5 mr-md-5 active" href="#buzz" role="tab" data-toggle="tab">Description</a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade" id="profile">
                            <ul class="text-left d-inline-block feature">
                                <li>Waterproof to 300m</li>
                                <li>Unidirectional Rotable Bezel
                                </li>
                                <li>Triplock Winding Crown</li>
                                <li>Chromalight Display</li>
                            </ul>
                            <ul class="text-left d-inline-block feature">
                                <li>Date Window with Cyclops Lens</li>
                                <li>Oystersteel Constraction</li>
                                <li>Self-Winding Perpetual Movement
                                </li>
                                <li>Iconic Design</li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane description in fade active show px-lg-5" id="buzz">
                            <h3 class="my-4">Watch Description</h3>
                            <p>
                                The Rolex Submariner Date is a legendary dive watch, instantly recognizable with its 41mm Oyster case, rotating bezel, and date window. Built tough with Oystersteel, it's waterproof to 300 meters. The black dial features luminous hands and markers for easy reading in any condition. Inside ticks a self-winding movement, guaranteeing precision and reliability. A classic choice for divers, adventurers, and watch lovers seeking a timeless and robust timepiece.
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="references">
                            <img class="img-fluid" src="img/watch-sizing-guide.png" alt="Watch Sizing Guide">
                        </div>
                    </div>
                    <p class="mb-1 mt-sm-0 mt-lg-0 mt-md-0">MEASUREMENTS: [Enter watch measurements, e.g., Case diameter, band width]</p>
                </div>
            </div>
            <div class="col-lg-6 px-0">
                <div class="model">
                    <div id="mini-slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('assets/img/Rolex/CIT_3966-1.web')}}p" alt="Watch Model 1">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('assets/img/Rolex/watch-club-rolex-submariner-date-just-serviced-ref-116610ln-year-2015-14295-wb.jpgwbwbwbwb6.jpg')}}" alt="Watch Model 2">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#mini-slider" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#mini-slider" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <div class="expand">
                            <svg height="40px" id="Capa_1" style="enable-background:new 0 0 40 40" version="1.1" viewBox="0 0 612 612" width="40px" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
                                <g>
                                    <g id="_x35_">
                                        <g>
                                            <path d="M243.958,340.177L37.657,546.497L38.25,420.75c0-10.557-8.568-19.125-19.125-19.125S0,410.193,0,420.75v172.125     c0,5.661,2.333,10.232,6.043,13.368C9.505,609.781,14.325,612,19.68,612h171.57c10.557,0,19.125-8.567,19.125-19.125     c0-10.557-8.568-19.125-19.125-19.125H64.47l206.531-206.512L243.958,340.177z M605.956,5.757C602.495,2.219,597.676,0,592.34,0     H420.75c-10.557,0-19.125,8.568-19.125,19.125c0,10.557,8.568,19.125,19.125,19.125h126.761L340.999,244.781l27.042,27.042     l206.321-206.32L573.75,191.25c0,10.557,8.568,19.125,19.125,19.125S612,201.807,612,191.25V19.125     C612,13.464,609.667,8.894,605.956,5.757z" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-screen-slider">
            <div id="full-screen" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="frist-slide"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="second-slide"></div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#full-screen" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#full-screen" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="close-slider">&times;</div>
        </div>
    </div>
</section>
@endsection

@section("js-online")
<script src="{{asset('assets-product/js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset('assets-product/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets-product/js/main.js')}}"></script>
@endsection

@section("js")

@endsection
