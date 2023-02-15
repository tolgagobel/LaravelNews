@extends('layouts.master')
@section('title','Sepet')
@section('content')
    <div class="container">
        <div class="bg-content">
            <h2>Sepet</h2>
            @include('layouts.partials.alert')
            @if(count(Cart::content())>0)
            <table class="table table-bordererd table-hover">
                <tr>
                    <th colspan="2">Ürün</th>
                    <th>Adet Fiyatı</th>
                    <th>Adet</th>
                    <th>Tutar</th>
                </tr>
                @foreach($cartContent as $productCartItem)
                <tr>
                    <td> <img src="http://lorempixel.com/120/100/food/2"></td>
                    <td>
                        <a href="/product/{{ $productCartItem->product['slug'] }}">
                            {{ $productCartItem->product['product_name'] }}
                        </a>
                        <form action="{{ route('remove.cart', $productCartItem->rowId) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE')}}
                            <input type="submit" class="btn btn-danger btn-xs" value="Remove From Cart">
                        </form>
                    </td>
                    <td>{{ $productCartItem->price }}</td>
                    <td>
                        <a href="#" class="btn btn-xs btn-default product-decrease">-</a>
                        <span style="padding: 10px 20px">{{ $productCartItem->qty }}</span>
                        <a href="#" class="btn btn-xs btn-default product-increase">+</a>
                    </td>
                    <td>{{ $productCartItem->subtotal * $productCartItem->qty }}</td>
                </tr>
                @endforeach
                <tr>
                    <th colspan="4">Alt Toplam</th>
                    <td class="text-right">{{ Cart::subtotal() }} ₺</td>
                </tr>
                <tr>
                    <th colspan="4">KDV</th>
                    <td class="text-right">{{ Cart::tax() }} ₺</td>
                </tr>
                <tr>
                    <th colspan="4">Genel Toplam</th>
                    <td class="text-right">{{ Cart::total() }} ₺</td>
                </tr>
            </table>
                <div>
                    <form action="{{ route('destroy.cart') }}" method="post">
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                        <input type="submit" class="btn btn-info pull-left" value="Destroy Cart">
                    </form>
                    <a href="#" class="btn btn-success pull-right btn-lg">Ödeme Yap</a>
                </div>
            @else
                <p>No any product in your cart!!</p>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.product-decrease, .product-increase').on('click', function (){
            var id=$(this).attr('data-id');
            var number=$(this).attr('data-number');
            $.ajax({
                type : 'PATCH',
                url : 'cart/update' + id,
                data : {number: number},
                success: function (){
                    window.location.href = '/cart';
                }
            });
        });
    </script>
@endsection
