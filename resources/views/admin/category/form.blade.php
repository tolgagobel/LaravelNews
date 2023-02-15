@extends('admin.layouts.master')
@section('title','Category Management')
@section('content')
    <h1 class="page-header">Kategori Yönetimi</h1>

    <form method="post" action="{{ route('admin.category.save', @$entry->id) }}">
        {{ csrf_field() }}
        <div class="pull-right">
            <button type="submit" class="btn btn-primary">
                {{ @$entry->id > 0 ? "Güncelle" : "Kaydet"}}
            </button>
        </div>
        <h2 class="sub-header">Kategori
        {{ @$entry->id > 0 ? "Düzenle" : "Ekle" }}
        </h2>

        @include('layouts.partials.errors')
        @include('layouts.partials.alert')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="up_id">Üst Kategori</label>
                    <select name="up_id" id="up_id">
                        <option value="">Ana Kategori</option>
                    @foreach($category as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="category_name">Kategori Adı</label>
                    <input type="text" name="category_name" class="form-control" id="category_name" placeholder="Kategori Adı" value="{{ old('category_name', $entry->category_name) }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="hidden" name="original_slug" value="{{ old('slug', $entry->slug) }}">
                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug" value="{{ old('slug', $entry->slug) }}">
                </div>
            </div>
        </div>
    </form>

@endsection
