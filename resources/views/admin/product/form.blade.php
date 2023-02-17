@extends('admin.layouts.master')
@section('title','Product Management')
@section('content')
    <h1 class="page-header">Ürün Yönetimi</h1>

    <form method="post" action="{{ route('admin.product.save', @$entry->id) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="pull-right">
            <button type="submit" class="btn btn-primary">
                {{ @$entry->id > 0 ? "Güncelle" : "Kaydet"}}
            </button>
        </div>
        <h2 class="sub-header">Ürün
        {{ @$entry->id > 0 ? "Düzenle" : "Ekle" }}
        </h2>

        @include('layouts.partials.errors')
        @include('layouts.partials.alert')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="product_name">Ürün Adı</label>
                    <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Ürün Adı" value="{{ old('product_name', $entry->product_name) }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="text">Slug</label>
                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug" value="{{ old('slug',$entry->slug) }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Açıklama</label>
                        <textarea name="description" id="description" cols="30" rows="10" >{{ old('description',$entry->description) }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="text">Fiyat</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="Fiyatı" value="{{ old('price',$entry->price) }}">
                </div>
            </div>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="goster_slider" value="1" {{ $entry->product->goster_slider ? 'checked' : '' }}> Sliderda göster
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="goster_gunun_firsati" value="1" {{ $entry->product->goster_gunun_firsati ? 'checked' : '' }}> Günün Fırsatında Göster
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="goster_one_cikan" value="1" {{ $entry->product->goster_one_cikan ? 'checked' : '' }}> Öne Çıkanlarda GÖster
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="goster_cok_satan" value="1" {{ $entry->product->goster_cok_satan ? 'checked' : '' }}> Çok Satan
            </label>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="description">Kategoriler</label>
                    <select name="categories[]" class="form-control" id="categories" multiple>
                        @foreach($category as $category)
                            <option value="{{$category->id}}" {{ collect(old('categories', $product_categories))->contains($category->id) ? 'selected' : '' }}>{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="product_img">Ürün Resmi</label>
            <input type="file" id="product_img" name="product_img">
        </div>
    </form>
@endsection

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('footer')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(function () {
            $('#categories').select2({
               placeholder:'Kategori Seçiniz'
            });
        });
    </script>
@endsection
