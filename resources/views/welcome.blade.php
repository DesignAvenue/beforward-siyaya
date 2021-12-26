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
{{-- {{$testimonial}} --}}

<div class="testimonial-area bg-dark-2 ptb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="testimonial-carousel">
                    {{-- @foreach ( $testimonial as $testimonials ) --}}
                    <div class="single-testi">
                        <span><img src="{{asset('assets/img/testimonial/1.jpg') }}" alt=""></span>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            Pellentesque habitant morbi tristique senectus et netus sapien lorem tincidunt lorem
                            Proin ac augue eu ante consecMauris tincidunt purus blandit arcu finibus. Aliquam a
                            iaculis est, eu vehicula elit. sagittis ut ante eget...</p>
                        <span class="name-info">John doe - CEo aero</span>
                    </div>

                    {{-- @endforeach --}}

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



@endsection
