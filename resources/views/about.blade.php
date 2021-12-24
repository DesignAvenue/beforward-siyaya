@extends('layouts.app')
@section('content')

<div class="about-area ptb-150 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="about-image">
                    <img src="{{asset('assets/img/banner/1.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="about-image">
                    <img src="img/banner/2.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-title">
                    <h3>About us</h3>
                    <h2>Dezimaxx car store</h2>
                    <span>THE ONLINE AUTOS WORLD</span>
                </div>
                <div class="about-text">
                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudi- um lectorum.
                        Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                        litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>
                    <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                    <span>John doe - CEo aero</span>
                    <div class="singature">
                        <img src="{{asset('assets/img/other/signeture.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
