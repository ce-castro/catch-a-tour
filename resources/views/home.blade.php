@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('title')
    Catch A Tour | The best tours!
@endsection

@section('content')
    <div class="container" id="next">
        <div class="row">
            <div class="col-md-12 text-center" id="icons">
                <i class="fa fa-plane fa-3x" aria-hidden="true"></i>
                <i class="fa fa-ship fa-3x" aria-hidden="true"></i>
                <i class="fa fa-bus fa-3x" aria-hidden="true"></i>
            </div>
            <div class="col-md-12 text-center">What's your next destination?</div>
            <div class="col-md-12 text-center"><a href="" title="Check our most popular tours">Check our most popular tours</a></div>
        </div>
        <div class="row" style="margin-top: 20px" id="destinations">
            <div class="col-md-3">
                <img src="{{ asset('images/d1.jpg') }}" alt="" class="img-responsive destino">
                <div class="home-destino">
                    <div class="row">
                        <div class="col-md-8"><a href="">Bahia de Jiquilisco</a></div>
                        <div class="col-md-4 text-center"><i class="fa fa-suitcase" aria-hidden="true"></i></div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 pais">El Salvador</div>
                        <div class="col-md-4 text-center"><a href="" class="btn btn-cat-home">Book</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('images/d2.jpg') }}" alt="" class="img-responsive destino">
                <div class="home-destino">
                    <div class="row">
                        <div class="col-md-8"><a href="">Quitana Roo</a></div>
                        <div class="col-md-4 text-center"><i class="fa fa-suitcase" aria-hidden="true"></i></div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 pais">Mexico</div>
                        <div class="col-md-4 text-center"><a href="" class="btn btn-cat-home">Book</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('images/d3.jpg') }}" alt="" class="img-responsive destino">
                <div class="home-destino">
                    <div class="row">
                        <div class="col-md-8"><a href="">La Habana</a></div>
                        <div class="col-md-4 text-center"><i class="fa fa-suitcase" aria-hidden="true"></i></div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 pais">Cuba</div>
                        <div class="col-md-4 text-center"><a href="" class="btn btn-cat-home">Book</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('images/d4.jpg') }}" alt="" class="img-responsive destino">
                <div class="home-destino">
                    <div class="row">
                        <div class="col-md-8"><a href="">Machu Pichu</a></div>
                        <div class="col-md-4 text-center"><i class="fa fa-suitcase" aria-hidden="true"></i></div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 pais">Peru</div>
                        <div class="col-md-4 text-center"><a href="" class="btn btn-cat-home">Book</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="remember">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <i class="fa fa-camera fa-3x" aria-hidden="true"></i> <br>
                    <span class="rem1">To remember is to live again</span><br>
                    <span class="rem2">Our best moments</span>
                </div>
            </div>

            <div class="row" style="margin-top: 20px; padding-bottom: 40px">
                <div class="col-md-3"><img src="{{ asset('images/rem1.jpg') }}" alt="Remember" class="img-responsive"></div>
                <div class="col-md-3"><img src="{{ asset('images/rem2.jpg') }}" alt="Catch a Tour" class="img-responsive"></div>
                <div class="col-md-3"><img src="{{ asset('images/rem3.jpg') }}" alt="Catch a Tour" class="img-responsive"></div>
                <div class="col-md-3"><img src="{{ asset('images/rem4.jpg') }}" alt="Catch a Tour" class="img-responsive"></div>
            </div>
        </div>
    </div>
    <div class="container" id="reviews">
        <div class="row">
            <div class="col-md-12 text-center">
                <i class="fa fa-check-circle fa-3x" aria-hidden="true"></i> <br>
                <span class="rem1">Our actions speak louder than our words</span><br>
                <span class="rem2">Our customers reviews</span>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="review">
                <div class="col-md-12 text-center stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                Aenean porta eros ut feugiat dignissim. Vivamus sed mollis nunc. Suspendisse non nibh nunc. Donec nulla felis, bibendum at pulvinar et, molestie sed felis. Nulla tempor hendrerit feugiat. Ut egestas est sit amet turpis ornare rhoncus. Mauris in arcu tristique magna cursus varius.
                <div class="author">- Elliot, United States</div>
            </div>
            <div class="review">
                <div class="col-md-12 text-center stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                Aenean porta eros ut feugiat dignissim. Vivamus sed mollis nunc. Suspendisse non nibh nunc. Donec nulla felis, bibendum at pulvinar et, molestie sed felis. Nulla tempor hendrerit feugiat. Ut egestas est sit amet turpis ornare rhoncus. Mauris in arcu tristique magna cursus varius.
                <div class="author">- Christina, Colombia</div>
            </div>
            <div class="review">
                <div class="col-md-12 text-center stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                Aenean porta eros ut feugiat dignissim. Vivamus sed mollis nunc. Suspendisse non nibh nunc. Donec nulla felis, bibendum at pulvinar et, molestie sed felis. Nulla tempor hendrerit feugiat. Ut egestas est sit amet turpis ornare rhoncus. Mauris in arcu tristique magna cursus varius.
                <div class="author">- Ruben, Dominic Republic</div>
            </div>
            <div class="review">
                <div class="col-md-12 text-center stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                Aenean porta eros ut feugiat dignissim. Vivamus sed mollis nunc. Suspendisse non nibh nunc. Donec nulla felis, bibendum at pulvinar et, molestie sed felis. Nulla tempor hendrerit feugiat. Ut egestas est sit amet turpis ornare rhoncus. Mauris in arcu tristique magna cursus varius.
                <div class="author">- Alfredo, El Salvador</div>
            </div>
        </div>
    </div>
@endsection