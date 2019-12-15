@extends('frontend.layout.master')
@section('content')
    <section>
        <div class="large-banner">
            <img src="img/banners/banner-1920x700.jpg" alt="Men slide img"/>
        </div>
    </section>
    <!-- Products section -->
    <section id="aa-product" style="margin-top: 20px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-product-area">
                            <div class="aa-product-inner">
                                <!-- start prduct navigation -->
                                <ul class="nav nav-tabs aa-products-tab">
                                    <li class="active"><a href="#cd" data-toggle="tab">CD</a></li>
                                    <li><a href="#dvd" data-toggle="tab">DVD</a></li>
                                    <li><a href="#tape" data-toggle="tab">Tape</a></li>
                                    <li><a href="#music-instruments" data-toggle="tab">Music Instruments</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="cd">
                                        <ul class="aa-product-catg">
                                            @foreach($cds as $cd)
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{$cd->image}}" alt="{{$cd->name}}"></a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">{{$cd->name}}</a>
                                                            </h4>
                                                            <span class="aa-product-price">$ {{$cd->price}}</span>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="browse-button">
                                            <a class="aa-browse-btn" href="#">Browse all CD <span
                                                    class="fa fa-long-arrow-right"></span></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="dvd">
                                        <ul class="aa-product-catg">
                                            @foreach($dvds as $dvd)
                                                <li class="product-item">
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="browse-button">
                                            <a class="aa-browse-btn" href="#">Browse all DVD <span
                                                    class="fa fa-long-arrow-right"></span></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tape">
                                        <ul class="aa-product-catg">
                                            @foreach($tapes as $tape)
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="img/women/girl-1.png" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">This is Title</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span><span
                                                                class="aa-product-price"><del>$65.50</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                           title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                           title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                           title="Quick View" data-toggle="modal"
                                                           data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="browse-button">
                                            <a class="aa-browse-btn" href="#">>Browse all Tape <span
                                                    class="fa fa-long-arrow-right"></span></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="music-instruments">
                                        <ul class="aa-product-catg">
                                            @foreach($music_instruments as $music_instrument)
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="img/women/girl-1.png" alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a href="#">This is Title</a>
                                                            </h4>
                                                            <span class="aa-product-price">$45.50</span>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="browse-button">
                                            <a class="aa-browse-btn" href="#">Browse all Music Instruments<span
                                                    class="fa fa-long-arrow-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Products section -->
    <!-- banner section -->
    <section id="aa-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-banner-area">
                            <a href="#"><img src="img/banners/banner-center.jpg" alt="fashion banner img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular section -->
    <section id="aa-popular-category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-popular-category-area">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                                <li><a href="#latest" data-toggle="tab">Latest</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start men popular category -->
                                <div class="tab-pane fade in active" id="popular">
                                    <ul class="aa-product-catg aa-popular-slider">
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png"
                                                                                        alt="polo shirt img"></a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/women/girl-2.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            </figure>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span>
                                            </figcaption>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/women/girl-3.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/women/girl-4.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/women/girl-1.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / popular product category -->

                                <!-- start featured product category -->
                                <div class="tab-pane fade" id="featured">
                                    <ul class="aa-product-catg aa-featured-slider">
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/women/girl-2.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            </figure>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span>
                                            </figcaption>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/women/girl-3.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/women/girl-4.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/women/girl-1.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / featured product category -->

                                <!-- start latest product category -->
                                <div class="tab-pane fade" id="latest">
                                    <ul class="aa-product-catg aa-latest-slider">
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/women/girl-2.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            </figure>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span>
                                            </figcaption>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/women/girl-3.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/women/girl-4.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="img/women/girl-1.png"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Quick View" data-toggle="modal"
                                                   data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / latest product category -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / popular section -->
    <!-- Support section -->
    <section id="aa-support">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-support-area">
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-truck"></span>
                                <h4>FREE SHIPPING</h4>
                                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-clock-o"></span>
                                <h4>30 DAYS MONEY BACK</h4>
                                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-phone"></span>
                                <h4>SUPPORT 24/7</h4>
                                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Support section -->
    <!-- Latest Blog -->
    <section id="aa-latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-latest-blog-area">
                        <h2>UPCOMING LIVE SHOWS</h2>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="img/banners/liveshow-banner.jpg" alt="img"></a>
                                    </figure>
                                    <div class="aa-blog-info">
                                        <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad?
                                            Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim
                                            repellendus animi. Expedita quas reprehenderit incidunt, voluptates
                                            corporis.</p>
                                        <a href="#" class="aa-read-mor-btn">Read more <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="img/promo-banner-3.jpg" alt="img"></a>
                                        <figcaption class="aa-blog-img-caption">
                                            <span href="#"><i class="fa fa-eye"></i>5K</span>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                            <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                            <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-blog-info">
                                        <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad?
                                            Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim
                                            repellendus animi. Expedita quas reprehenderit incidunt, voluptates
                                            corporis.</p>
                                        <a href="#" class="aa-read-mor-btn">Read more <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="img/promo-banner-1.jpg" alt="img"></a>
                                        <figcaption class="aa-blog-img-caption">
                                            <span href="#"><i class="fa fa-eye"></i>5K</span>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                            <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                            <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-blog-info">
                                        <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad?
                                            Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim
                                            repellendus animi. Expedita quas reprehenderit incidunt, voluptates
                                            corporis.</p>
                                        <a href="#" class="aa-read-mor-btn">Read more <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Latest Blog -->

@endsection
