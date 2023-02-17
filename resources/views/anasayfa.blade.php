@extends('layouts.master')
@section('title','Home')
@section('content')
    @if(session()->has('message'))
        <div class="container">
            <div class="alert alert{{ session('message_type') }}">{{ session('message') }}</div>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Categories</div>
                    <div class="list-group categories">
                        @foreach($categories as $category)
                        <a href="{{ route('category', $category->slug) }}" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-right"></i>
                            {{ $category->category_name }}
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @for($i=0;$i<count($product_slider);$i++)
                        <li data-target="#carousel-example-generic" data-slide-to="{{ $i }}" class="{{$i == 0 ? 'active':''}}"></li>
                        @endfor
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        @foreach($product_slider as $key => $product)
                        <div class="item {{$key == 0 ? 'active' : ''}}">
                            <img src="../img/pizza.jpeg" style="width:800px;height:380px;"  alt="...">
                            <div class="carousel-caption">
                                {{ $product->product->product_name }}
                            </div>
                        </div>
                        @endforeach
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                @if (isset($product_gunun_firsati))
                <div class="panel panel-default" id="sidebar-product">
                    <div class="panel-heading">Günün Fırsatı</div>
                    <div class="panel-body">
                        <a href="{{ route('product', $product_gunun_firsati->slug ?? '') }}">
                            <img src="../img/pizza.jpeg" class="img-responsive">
                            {{ $product_gunun_firsati->product_name }}
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="container">
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">Öne Çıkan Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($product_goster_one_cikan as $goster_one_cikan)
                        <div class="col-md-3 product">
                            <a href="{{ route('product', $goster_one_cikan->product->slug) }}"><img src="../img/hamburger.jpeg" style="width:200px;height:180px;"></a>
                            <p><a href="{{ route('product', $goster_one_cikan->product->slug) }}">{{ $goster_one_cikan->product->product_name }}</a></p>
                            <p class="price">{{ $goster_one_cikan->product->price }} ₺</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">Çok Satan Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($product_goster_cok_satan as $goster_cok_satan)
                        <div class="col-md-3 product">
                            <a href="{{ route('product', $goster_cok_satan->product->slug) }}"><img src="../img/pizza.jpeg" style="width:200px;height:180px;"></a>
                            <p><a href="{{ route('product', $goster_cok_satan->product->slug) }}">{{ $goster_cok_satan->product->product_name }}</a></p>
                            <p class="price">{{ $goster_cok_satan->product->price }} ₺</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">İndirimli Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($product_goster_indirimli as $goster_indirimli)
                        <div class="col-md-3 product">
                            <a href="{{ route('product', $goster_indirimli->product->slug) }}"><img src="../img/makarna.jpeg" style="width:200px;height:180px;"></a>
                            <p><a href="{{ route('product', $goster_indirimli->product->slug) }}">{{ $goster_indirimli->product->product_name }}</a></p>
                            <p class="price">{{ $goster_indirimli->product->price }} ₺</p>
                        </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
