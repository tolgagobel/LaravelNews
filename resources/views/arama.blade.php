@extends('layouts.master')
@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ route('main') }}">Anasayfa</a></li>
        <li class="active">Searched</li>
    </ol>
    <div class="products bg-content">
        <div class="row">
        @if(count($products) == 0)
            <div class="col-md-12 text-center">
                No any product!
            </div>
        @endif
        @foreach($products as $product)
            <div class="col md-3 products">
                <a href="{{ route('product', $product->slug) }}">
                <img src="../img/pizza.jpeg" style="width:200px;height:200px;"  alt="{{ $product->product_name }}">
                </a>
                <p>
                    <a href="{{ route('product', $product->slug) }}"></a>
                    {{ $product->product_name }}
                </p>
                <p class="price">{{ $product->price }} ₺</p>
            </div>
        @endforeach
        </div>
        {{ $products->appends(['aranan' => old('aranan')])->links() }}
    </div>
</div>
@endsection
