@extends('layouts.tes')

@section('title')
<title>EBookJunction - Kids Product</title>
@endsection

@section('active-menu')
        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="home" class="logo">
                                <img src="assets/images/Frame-9.png" />
                            </a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                                <li class="scroll-to-section"><a href="home">Home</a></li>
                                <li class="scroll-to-section"><a href="about">About</a></li>
                                <li class="scroll-to-section"><a href="contact">Contact</a></li>
                                <li class="scroll-to-section"><a href="products">Product</a></li>
                                <li class="scroll-to-section"><a href="single">Single-Product</a></li>

                                <li class="submenu">
                                    <a href="javascript:;">Categories</a><ul>
                                        <li><a href="mens">Men's</a></li>
                                        <li><a href="womens">Women's</a></li>
                                        <li><a href="kids">Kid's</a></li>
                                    </ul>
                                </li>
                                <li class="scroll-to-section">
                                    <a href="#explore">Explore</a>
                                </li>
                        </ul>
                            <a class="menu-trigger">
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->
@endsection

@section('content')
        <!-- ***** Kids Area Starts ***** -->
        <section class="section" id="kids">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-heading">
                            <h2>Kid's Latest</h2>
                            <span
                                >Details to details is what makes Hexashop
                                different from the other themes.</span
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="kid-item-carousel">
                            <div class="owl-kid-item owl-carousel">
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li>
                                                    <a
                                                        href="single-product"
                                                        ><i
                                                            class="fa fa-eye"
                                                        ></i
                                                    ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="single-product"
                                                        ><i
                                                            class="fa fa-star"
                                                        ></i
                                                    ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="single-product"
                                                        ><i
                                                            class="fa fa-shopping-cart"
                                                        ></i
                                                    ></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <img
                                            src="assets/images/kid-01.jpg"
                                            alt=""
                                        />
                                    </div>
                                    <div class="down-content">
                                        <h4>School Collection</h4>
                                        <span>$80.00</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li>
                                                    <a
                                                        href="single-product"
                                                        ><i
                                                            class="fa fa-eye"
                                                        ></i
                                                    ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="single-product"
                                                        ><i
                                                            class="fa fa-star"
                                                        ></i
                                                    ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="single-product"
                                                        ><i
                                                            class="fa fa-shopping-cart"
                                                        ></i
                                                    ></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <img
                                            src="assets/images/kid-02.jpg"
                                            alt=""
                                        />
                                    </div>
                                    <div class="down-content">
                                        <h4>Summer Cap</h4>
                                        <span>$12.00</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li>
                                                    <a
                                                        href="single-product"
                                                        ><i
                                                            class="fa fa-eye"
                                                        ></i
                                                    ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="single-product"
                                                        ><i
                                                            class="fa fa-star"
                                                        ></i
                                                    ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="single-product"
                                                        ><i
                                                            class="fa fa-shopping-cart"
                                                        ></i
                                                    ></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <img
                                            src="assets/images/kid-03.jpg"
                                            alt=""
                                        />
                                    </div>
                                    <div class="down-content">
                                        <h4>Classic Kid</h4>
                                        <span>$30.00</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li>
                                                    <a
                                                        href="single-product"
                                                        ><i
                                                            class="fa fa-eye"
                                                        ></i
                                                    ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="single-product"
                                                        ><i
                                                            class="fa fa-star"
                                                        ></i
                                                    ></a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="single-product"
                                                        ><i
                                                            class="fa fa-shopping-cart"
                                                        ></i
                                                    ></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <img
                                            src="assets/images/kid-01.jpg"
                                            alt=""
                                        />
                                    </div>
                                    <div class="down-content">
                                        <h4>Classic Spring</h4>
                                        <span>$120.00</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Kids Area Ends ***** -->
@endsection