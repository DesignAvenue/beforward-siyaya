@extends('layouts.app')
@section('content')

<div class="slider-area">
    <div class="slider-wrapper">
        <div data-dot="01" class="single-slide" style="background-image: url( {{asset('assets/img/slider/1.jpg') }});">
            <div class="banner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 col-xs-12">
                            <div class="text-content-wrapper text-center">
                                <div class="text-content">
                                    <h1 class="pt-70">Awesome new car</h1>
                                    <p>Typi non habent claritatem insitam</p>
                                    <div class="banner-btn">
                                        <a href="product-details.html" class="default-btn">
                                            <span>Discover now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-dot="02" class="single-slide" style="background-image: url( {{asset('assets/img/slider/2.jpg') }});">
            <div class="banner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 col-xs-12">
                            <div class="text-content-wrapper text-center">
                                <div class="text-content">
                                    <h1 class="pt-70">Awesome new car</h1>
                                    <p>Typi non habent claritatem insitam</p>
                                    <div class="banner-btn">
                                        <a href="product-details.html" class="default-btn">
                                            <span>Discover now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-dot="03" class="single-slide" style="background-image: url( {{asset('assets/img/slider/3.jpg') }} );">
            <div class="banner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 col-xs-12">
                            <div class="text-content-wrapper text-center">
                                <div class="text-content">
                                    <h1 class="pt-70">Awesome new car</h1>
                                    <p>Typi non habent claritatem insitam</p>
                                    <div class="banner-btn">
                                        <a href="product-details.html" class="default-btn">
                                            <span>Discover now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="service-area bg-dark-2 ptb-150">
    <div class="container text-center">
        <div class="section-title pb-100">
            <h5>Most Popular Services</h5>
            <h2>WE ARE OFFERING VEHICLE SERVICES 24/7</h2>
            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
        </div>
        <div class="row custom">
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <span class="srv-icon"><img src="{{asset('assets/img/icon/audio.png') }}" alt=""></span>
                    <h5>Audio System INSTALLATION</h5>
                    <span class="divider"></span>
                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                        litterarum formas humanitatis per seacula.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <span class="srv-icon"><img src="{{asset('assets/img/icon/repair.png') }}" alt=""></span>
                    <h5>Vehicle REPAIRING</h5>
                    <span class="divider"></span>
                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                        litterarum formas humanitatis per seacula.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <span class="srv-icon"><img src="{{asset('assets/img/icon/wheel.png') }}" alt=""></span>
                    <h5>Wheel BALANCING</h5>
                    <span class="divider"></span>
                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                        litterarum formas humanitatis per seacula.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <span class="srv-icon"><img src="{{asset('assets/img/icon/painting.png') }}" alt=""></span>
                    <h5>Auto Painting REPAIRING</h5>
                    <span class="divider"></span>
                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                        litterarum formas humanitatis per seacula.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <span class="srv-icon"><img src="{{asset('assets/img/icon/replacement.png') }}" alt=""></span>
                    <h5>cambelt replacement</h5>
                    <span class="divider"></span>
                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                        litterarum formas humanitatis per seacula.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <span class="srv-icon"><img src="{{asset('assets/img/icon/engine.png') }}" alt=""></span>
                    <h5>engine diagnostics</h5>
                    <span class="divider"></span>
                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                        litterarum formas humanitatis per seacula.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="feature-product-area bg-1 ptb-150">
    <div class="container">
        <div class="section-title pb-100 text-center">
            <h5>Check Out Our Recent Cars</h5>
            <h2>FEATUREd products</h2>
            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
        </div>
        <div class="m-rl-n-15px">
            <div class="feature-slick-carousel">
                <div class="p-lr-15px">
                    <div class="single-feature-item">
                        <div class="feature-image">
                            <a href="product-details.html"><img src="{{asset('assets/img/products/3.jpg') }}" alt=""></a>
                        </div>
                        <div class="feature-wrapper">
                            <div class="feature-text">
                                <h5><a href="product-details.html">Mercedes-Benz SLR McLaren</a></h5>
                                <div class="rating">
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>(35 Reviews)</span>
                                </div>
                            </div>
                            <div class="feature-info">
                                <span>Protection Plan: <span>2 Year $4.99</span></span>
                                <span>Remote Holder: <span>$9.99</span></span>
                                <span>Koral Alexa Voice Remote Case: <span>Red $16.99</span></span>
                                <span>AmazonBasics HD Antenna: <span>25 Mile $14.99</span></span>
                            </div>
                            <div class="feature-price">
                                <span class="discount">-30%</span>
                                <span class="current-price">$280.000.000</span>
                                <span class="pre-price">$280.000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-lr-15px">
                    <div class="single-feature-item">
                        <div class="feature-image">
                            <a href="product-details.html"><img src="{{asset('assets/img/products/1.jpg') }}" alt=""></a>
                        </div>
                        <div class="feature-wrapper">
                            <div class="feature-text">
                                <h5><a href="product-details.html">Mercedes-Benz SLR McLaren</a></h5>
                                <div class="rating">
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>(35 Reviews)</span>
                                </div>
                            </div>
                            <div class="feature-info">
                                <span>Protection Plan: <span>2 Year $4.99</span></span>
                                <span>Remote Holder: <span>$9.99</span></span>
                                <span>Koral Alexa Voice Remote Case: <span>Red $16.99</span></span>
                                <span>AmazonBasics HD Antenna: <span>25 Mile $14.99</span></span>
                            </div>
                            <div class="feature-price">
                                <span class="discount">-30%</span>
                                <span class="current-price">$280.000.000</span>
                                <span class="pre-price">$280.000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-lr-15px">
                    <div class="single-feature-item">
                        <div class="feature-image">
                            <a href="product-details.html"><img src="{{asset('assets/img/products/2.jpg') }}" alt=""></a>
                        </div>
                        <div class="feature-wrapper">
                            <div class="feature-text">
                                <h5><a href="product-details.html">Mercedes-Benz SLR McLaren</a></h5>
                                <div class="rating">
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>(35 Reviews)</span>
                                </div>
                            </div>
                            <div class="feature-info">
                                <span>Protection Plan: <span>2 Year $4.99</span></span>
                                <span>Remote Holder: <span>$9.99</span></span>
                                <span>Koral Alexa Voice Remote Case: <span>Red $16.99</span></span>
                                <span>AmazonBasics HD Antenna: <span>25 Mile $14.99</span></span>
                            </div>
                            <div class="feature-price">
                                <span class="discount">-30%</span>
                                <span class="current-price">$280.000.000</span>
                                <span class="pre-price">$280.000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-lr-15px">
                    <div class="single-feature-item">
                        <div class="feature-image">
                            <a href="product-details.html"><img src="{{asset('assets/img/products/3.jpg') }}" alt=""></a>
                        </div>
                        <div class="feature-wrapper">
                            <div class="feature-text">
                                <h5><a href="product-details.html">Mercedes-Benz SLR McLaren</a></h5>
                                <div class="rating">
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>(35 Reviews)</span>
                                </div>
                            </div>
                            <div class="feature-info">
                                <span>Protection Plan: <span>2 Year $4.99</span></span>
                                <span>Remote Holder: <span>$9.99</span></span>
                                <span>Koral Alexa Voice Remote Case: <span>Red $16.99</span></span>
                                <span>AmazonBasics HD Antenna: <span>25 Mile $14.99</span></span>
                            </div>
                            <div class="feature-price">
                                <span class="discount">-30%</span>
                                <span class="current-price">$280.000.000</span>
                                <span class="pre-price">$280.000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-lr-15px">
                    <div class="single-feature-item">
                        <div class="feature-image">
                            <a href="product-details.html"><img src="{{asset('assets/img/products/1.jpg') }}" alt=""></a>
                        </div>
                        <div class="feature-wrapper">
                            <div class="feature-text">
                                <h5><a href="product-details.html">Mercedes-Benz SLR McLaren</a></h5>
                                <div class="rating">
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>(35 Reviews)</span>
                                </div>
                            </div>
                            <div class="feature-info">
                                <span>Protection Plan: <span>2 Year $4.99</span></span>
                                <span>Remote Holder: <span>$9.99</span></span>
                                <span>Koral Alexa Voice Remote Case: <span>Red $16.99</span></span>
                                <span>AmazonBasics HD Antenna: <span>25 Mile $14.99</span></span>
                            </div>
                            <div class="feature-price">
                                <span class="discount">-30%</span>
                                <span class="current-price">$280.000.000</span>
                                <span class="pre-price">$280.000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-lr-15px">
                    <div class="single-feature-item">
                        <div class="feature-image">
                            <a href="product-details.html"><img src="{{asset('assets/img/products/2.jpg') }}" alt=""></a>
                        </div>
                        <div class="feature-wrapper">
                            <div class="feature-text">
                                <h5><a href="product-details.html">Mercedes-Benz SLR McLaren</a></h5>
                                <div class="rating">
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>(35 Reviews)</span>
                                </div>
                            </div>
                            <div class="feature-info">
                                <span>Protection Plan: <span>2 Year $4.99</span></span>
                                <span>Remote Holder: <span>$9.99</span></span>
                                <span>Koral Alexa Voice Remote Case: <span>Red $16.99</span></span>
                                <span>AmazonBasics HD Antenna: <span>25 Mile $14.99</span></span>
                            </div>
                            <div class="feature-price">
                                <span class="discount">-30%</span>
                                <span class="current-price">$280.000.000</span>
                                <span class="pre-price">$280.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="testimonial-area bg-dark-2 ptb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="testimonial-carousel">
                    <div class="single-testi">
                        <span><img src="{{asset('assets/img/testimonial/1.jpg') }}" alt=""></span>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            Pellentesque habitant morbi tristique senectus et netus sapien lorem tincidunt lorem
                            Proin ac augue eu ante consecMauris tincidunt purus blandit arcu finibus. Aliquam a
                            iaculis est, eu vehicula elit. sagittis ut ante eget...</p>
                        <span class="name-info">John doe - CEo aero</span>
                    </div>
                    <div class="single-testi">
                        <span><img src="{{asset('assets/img/testimonial/1.jpg') }}" alt=""></span>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            Pellentesque habitant morbi tristique senectus et netus sapien lorem tincidunt lorem
                            Proin ac augue eu ante consecMauris tincidunt purus blandit arcu finibus. Aliquam a
                            iaculis est, eu vehicula elit. sagittis ut ante eget...</p>
                        <div class="name-info">John doe - CEo aero</div>
                    </div>
                    <div class="single-testi">
                        <span><img src="{{asset('assets/img/testimonial/1.jpg') }}" alt=""></span>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            Pellentesque habitant morbi tristique senectus et netus sapien lorem tincidunt lorem
                            Proin ac augue eu ante consecMauris tincidunt purus blandit arcu finibus. Aliquam a
                            iaculis est, eu vehicula elit. sagittis ut ante eget...</p>
                        <div class="name-info">John doe - CEo aero</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fun-factor-area bg-2 ptb-150">
    <div class="container">
        <div class="section-title pb-100 text-center">
            <h5>What Can We Do</h5>
            <h2>WHO WE ARE</h2>
            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
        </div>
        <div class="fun-container">
            <div class="single-fun-factor">
                <div class="fun-item">
                    <span class="lnr lnr-car fun-icon"></span>
                    <span class="fun-divider"></span>
                    <h5>VEHICLES IN STOCK</h5>
                    <h1><span class="counter">4.268</span></h1>
                </div>
            </div>
            <div class="single-fun-factor">
                <div class="fun-item">
                    <span class="lnr lnr-users fun-icon"></span>
                    <span class="fun-divider"></span>
                    <h5>HAPPY CUSTOMER</h5>
                    <h1><span class="counter">12.268</span></h1>
                </div>
            </div>
            <div class="single-fun-factor">
                <div class="fun-item">
                    <span class="lnr lnr-license fun-icon"></span>
                    <span class="fun-divider"></span>
                    <h5>DEALER REVIEWS</h5>
                    <h1><span class="counter">6.268</span></h1>
                </div>
            </div>
            <div class="single-fun-factor">
                <div class="fun-item">
                    <span class="lnr lnr-graduation-hat fun-icon"></span>
                    <span class="fun-divider"></span>
                    <h5>AWARDS</h5>
                    <h1><span class="counter">10.268</span></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fun Factor Area End -->
<!-- Latest Products Area Start -->
<div class="latest-product-area bg-dark-2 pt-150 pb-120">
    <div class="container">
        <div class="section-title pb-100 text-center">
            <h5>The Latest Models</h5>
            <h2>TYPES OF VEHICLES</h2>
            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
        </div>
        <div class="grid">
            <div class="row">
                <div class="col-md-6 col-sm-12 grid-item col-xs-12">
                    <div class="latest-item">
                        <a href="product-details.html">
                            <img src="{{asset('assets/img/latest_products/1.jpg') }}" alt="">
                            <span class="latest-p-title">
                                <span class="p-title-1">Luxury Cars trending 2018</span>
                                <span class="p-number">03 Products</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 grid-item col-xs-12">
                    <div class="latest-item">
                        <a href="product-details.html">
                            <img src="{{asset('assets/img/latest_products/2.jpg') }}" alt="">
                            <span class="latest-p-title">
                                <span class="p-title-1">Sedans 2017</span>
                                <span class="p-number">06 Products</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 grid-item col-xs-12">
                    <div class="latest-item">
                        <a href="product-details.html">
                            <img src="{{asset('assets/img/latest_products/3.jpg') }}" alt="">
                            <div class="latest-p-title">
                                <span class="p-title-1">VANS &amp; TRUCKS</span>
                                <span class="p-number">02 Products</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 grid-item col-xs-12">
                    <div class="latest-item">
                        <a href="product-details.html">
                            <img src="{{asset('assets/img/latest_products/4.jpg') }}" alt="">
                            <div class="latest-p-title">
                                <span class="p-title-1">Sport car</span>
                                <span class="p-number">12 Products</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 grid-item col-xs-12">
                    <div class="latest-item">
                        <a href="product-details.html">
                            <img src="{{asset('assets/img/latest_products/5.jpg') }}" alt="">
                            <div class="latest-p-title">
                                <span class="p-title-1">F1 2016 Mercedes</span>
                                <span class="p-number">07 Products</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 grid-item col-xs-12">
                    <div class="latest-item">
                        <a href="product-details.html">
                            <img src="{{asset('assets/img/latest_products/6.jpg') }}" alt="">
                            <div class="latest-p-title">
                                <span class="p-title-1">Trucks car</span>
                                <span class="p-number">09 Products</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Latest Products Area End -->
<!-- Team Area Start -->
<div class="team-area bg-3 pt-150">
    <div class="container">
        <div class="section-title pb-100 text-center">
            <h5>Our Best Team</h5>
            <h2>meet with OUR professionals</h2>
            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-member">
                    <div class="team-img"><img src="{{asset('assets/img/team/1.jpg') }}" alt=""></div>
                    <div class="team-text">
                        <div class="team-info">
                            <h5 class="member-name"><a href="team.html">Gene</a></h5>
                            <span class="member-info">Appointment Manager</span>
                        </div>
                        <div class="team-hover">
                            <span>Phone: <span>+(263) 782 954 717</span></span>
                            <span>Email: <span>gene@gmail.com</span></span>
                            <div class="member-links">
                                <a href="https://twitter.com/beforward"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.facebook.com/beforward/"><i class="fa fa-facebook"></i></a>
                                <a href="https://dribbble.com/beforward"><i class="fa fa-dribbble"></i></a>
                                <a href="https://www.beforward.co.zw/"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-member">
                    <div class="team-img"><img src="{{asset('assets/img/team/2.jpg') }}" alt=""></div>
                    <div class="team-text">
                        <div class="team-info">
                            <h5 class="member-name"><a href="#">John doe</a></h5>
                            <span class="member-info">Appointment Manager</span>
                        </div>
                        <div class="team-hover">
                            <span>Phone: <span>+(800) 1234 5678 90</span></span>
                            <span>Email: <span>John_doe@gmail.com</span></span>
                            <div class="member-links">
                                <a href="https://twitter.com/devitemsllc"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.facebook.com/devitems/"><i class="fa fa-facebook"></i></a>
                                <a href="https://dribbble.com/devitemsllc"><i class="fa fa-dribbble"></i></a>
                                <a href="https://www.rss.com/"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-member">
                    <div class="team-img"><img src="{{asset('assets/img/team/3.jpg') }}" alt=""></div>
                    <div class="team-text">
                        <div class="team-info">
                            <h5 class="member-name"><a href="#">John doe</a></h5>
                            <span class="member-info">Appointment Manager</span>
                        </div>
                        <div class="team-hover">
                            <span>Phone: <span>+(800) 1234 5678 90</span></span>
                            <span>Email: <span>John_doe@gmail.com</span></span>
                            <div class="member-links">
                                <a href="https://twitter.com/devitemsllc"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.facebook.com/devitems/"><i class="fa fa-facebook"></i></a>
                                <a href="https://dribbble.com/devitemsllc"><i class="fa fa-dribbble"></i></a>
                                <a href="https://www.rss.com/"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-member">
                    <div class="team-img"><img src="{{asset('assets/img/team/4.jpg') }}" alt=""></div>
                    <div class="team-text">
                        <div class="team-info">
                            <h5 class="member-name"><a href="#">John doe</a></h5>
                            <span class="member-info">Appointment Manager</span>
                        </div>
                        <div class="team-hover">
                            <span>Phone: <span>+(800) 1234 5678 90</span></span>
                            <span>Email: <span>John_doe@gmail.com</span></span>
                            <div class="member-links">
                                <a href="https://twitter.com/devitemsllc"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.facebook.com/devitems/"><i class="fa fa-facebook"></i></a>
                                <a href="https://dribbble.com/devitemsllc"><i class="fa fa-dribbble"></i></a>
                                <a href="https://www.rss.com/"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Area End -->
<!-- Timeline Area Start -->
<div class="timeline-area bg-dark-2 pb-130">
    <div class="container">
        <div class="section-title pb-100 text-center fix">
            <h5>Dazimaxx Achieverment Awards</h5>
            <h2>Dazimaxx awards</h2>
            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
        </div>
        <div class="timeline-container">
            <div class="timeline-wrapper">
                <div class="single-timeline-item">
                    <span class="timeline-date">MAY 2016</span>
                    <div class="timeline-text">
                        <span class="timeline-title">Duis autem vel eum iriure dolor in hendrerit</span>
                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                            nisl ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="single-timeline-item">
                    <span class="timeline-date">JUNE 2016</span>
                    <div class="timeline-text">
                        <span class="timeline-title">Duis autem vel eum iriure dolor in hendrerit</span>
                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                            nisl ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="single-timeline-item">
                    <span class="timeline-date">JULY 2017</span>
                    <div class="timeline-text">
                        <span class="timeline-title">Duis autem vel eum iriure dolor in hendrerit</span>
                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                            nisl ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            <div class="timeline-image">
                <img src="{{asset('assets/img/banner/3.png') }}" alt="">
            </div>
        </div>
    </div>
</div>

<div class="contact-area bg-4 pt-150 pb-140">
    <div class="container">
        <div class="section-title pb-70 text-center fix">
            <h5>Send Us a Message</h5>
            <h2>Get in touch</h2>
            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <form id="contact-form" action="https://whizthemes.com/nazmul/php/mail.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="name" id="name" placeholder="Your Name*">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="email" id="email" placeholder="Your email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="phone" id="phone" placeholder="Your phone">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="subject" id="subject" placeholder="Subject">
                        </div>
                    </div>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                    <button type="submit" class="default-btn submit-btn"><span>submit message</span></button>
                    <p class="form-messege"></p>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->
<!-- Blog Area Start -->
<div class="blog-area bg-dark-2 ptb-150">
    <div class="container">
        <div class="section-title pb-100 text-center fix">
            <h5>Read Our Latest Blog News</h5>
            <h2>latest blog post</h2>
            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
        </div>
        <div class="m-rl-n-15px">
            <div class="blog-carousel">
                <div class="p-lr-15px">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details.html">
                                <img src="{{asset('assets/img/blog/1.jpg') }}" alt="">
                                <span class="blog-info">
                                    <span class="s-blog-info"><i class="fa fa-pencil-square-o"></i>By
                                        <span>Power-boosts</span></span>
                                    <span class="s-blog-info"><i class="fa fa-comment-o"></i>02 Comment (s)</span>
                                </span>
                            </a>
                        </div>
                        <div class="blog-text">
                            <h5><a href="#"">Claritas est etiam processus dynamicus.</a></h5>
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
                                quod mazim placerat facer...</p>
                            <a href="#" class="default-btn"><span>read more</span></a>
                        </div>
                    </div>
                </div>
                <div class="p-lr-15px">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details.html">
                                <img src="{{asset('assets/img/blog/2.jpg') }}" alt="">
                                <span class="blog-info">
                                    <span class="s-blog-info"><i class="fa fa-pencil-square-o"></i>By
                                        <span>Power-boosts</span></span>
                                    <span class="s-blog-info"><i class="fa fa-comment-o"></i>20 Comment (s)</span>
                                </span>
                            </a>
                        </div>
                        <div class="blog-text">
                            <h5><a href="#">Dynamicus nobis est cum processus</a></h5>
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
                                quod mazim placerat facer...</p>
                            <a href="blog-details.html" class="default-btn"><span>read more</span></a>
                        </div>
                    </div>
                </div>
                <div class="p-lr-15px">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="#">
                                <img src="{{asset('assets/img/blog/3.jpg') }}" alt="">
                                <span class="blog-info">
                                    <span class="s-blog-info"><i class="fa fa-pencil-square-o"></i>By
                                        <span>Power-boosts</span></span>
                                    <span class="s-blog-info"><i class="fa fa-comment-o"></i>10 Comment (s)</span>
                                </span>
                            </a>
                        </div>
                        <div class="blog-text">
                            <h5><a href="#">Tempor cum soluta nobis eleifend option.</a></h5>
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
                                quod mazim placerat facer...</p>
                            <a href="blog-details.html" class="default-btn"><span>read more</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
