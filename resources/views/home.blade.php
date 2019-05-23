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
            <div class="col-md-12" style="padding: 0px">
                <div class="carousel slide multi-item-carousel" id="slide-destination">
                    <div class="carousel-inner">

                        @foreach($tours as $tour)
                        <div class="item @if ($loop->first) active @endif">
                            <div class="col-md-3">
                                @foreach ($tour->photos as $photo)
                                    @if($photo->type_id == '1')
                                        <img src="{{ asset('uploads/'.$photo->image) }}" alt="{{ $photo->name }}"  title="{{ $photo->name }}" class="img-responsive img-destino">
                                    @else
                                        <img src="{{ asset('images/logo_placeholder.jpg') }}" alt="{{ $tour->name }}"  title="{{ $tour->name }}" class="img-responsive img-destino">
                                    @endif
                                @endforeach
                                <div class="home-destino">
                                    <div class="row">
                                        <div class="col-md-8"><a href="{{ route('tour.show', $tour->url) }}" title="{{ $tour->name }}">{{ $tour->name }}</a></div>
                                        <div class="col-md-4 text-center"><i class="fa fa-suitcase" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 pais">El Salvador</div>
                                        <div class="col-md-4 text-center"><a href="{{ route('tour.show', $tour->url) }}" title="{{ $tour->name }}" class="btn btn-cat-home">Book</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#slide-destination" data-slide-to="0" class="active"></li>
                        <li data-target="#slide-destination" data-slide-to="1"></li>
                        <li data-target="#slide-destination" data-slide-to="2"></li>
                        <li data-target="#slide-destination" data-slide-to="3"></li>
                    </ol>
                    <a class="left carousel-control" href="#slide-destination" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                    <a class="right carousel-control" href="#slide-destination" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
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
                <div class="col-md-12" style="padding: 0px">
                    <div class="carousel slide multi-item-carousel" id="slide-remember">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-md-3"><img src="{{ asset('images/rem1.jpg') }}" alt="Remember" class="img-responsive"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3"><img src="{{ asset('images/rem2.jpg') }}" alt="Catch a Tour" class="img-responsive"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3"><img src="{{ asset('images/rem3.jpg') }}" alt="Catch a Tour" class="img-responsive"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3"><img src="{{ asset('images/rem4.jpg') }}" alt="Catch a Tour" class="img-responsive"></div>
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#slide-remember" data-slide-to="0" class="active"></li>
                            <li data-target="#slide-remember" data-slide-to="1"></li>
                            <li data-target="#slide-remember" data-slide-to="2"></li>
                            <li data-target="#slide-remember" data-slide-to="3"></li>
                        </ol>
                        <a class="left carousel-control" href="#slide-remember" data-slide="prev" style="width: 1%"><i class="glyphicon glyphicon-chevron-left" style="color: #FFF;"></i></a>
                        <a class="right carousel-control" href="#slide-remember" data-slide="next" style="width: 1%"><i class="glyphicon glyphicon-chevron-right" style="color: #FFF;"></i></a>
                    </div>
                </div>
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

            @foreach($reviews as $review)
            <div class="review">
                <div class="col-md-12 text-center stars">
                    @for ($i = 1; $i <= $review->stars; $i++)
                        <i class="fa fa-star" aria-hidden="true"></i>
                    @endfor
                    @for ($i = 1; $i <= (5-$review->stars); $i++)
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    @endfor
                </div>
                <div class="text">
                    {{ strip_tags($review->review) }}
                </div>

                <div class="author">- {{ $review->name }}, {{ $review->country }}</div>
            </div>
            @endforeach
        </div>
    </div>
@endsection