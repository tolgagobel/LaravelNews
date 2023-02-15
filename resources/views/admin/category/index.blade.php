@extends('admin.layouts.master')
@section('title','Category Management')
@section('content')
    <h1 class="page-header">Kategori Yönetimi</h1>

    <h1 class="sub-header">Kategori Listesi</h1>
    <div class="well">
        <div class="btn-group pull-right" role="group" aria-label="Basic example">
            <a href="{{ route('admin.category.new') }}" class="btn btn-primary">Ekle</a>
        </div>
        <form method="post" action="{{ route('admin.category') }}" class="form-inline">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="aranan">Ara</label>
                <input type="text" class="form-control-sm" name="aranan" id="aranan" placeholder="Ara..">
                <label for="up_id"></label>
                    <select name="up_id" id="up_id" class="form-control">
                    <option value="">Seçiniz</option>
                    @foreach($anakategoriler as $category)
                        <option value="{{ $category->id }}" {{ old('up_id') == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Ara</button>
            <a href="{{ route('admin.category') }}" class="btn btn-primary">Temizle</a>
        </form>
    </div>


    @include('layouts.partials.alert')

    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Kategori Adı</th>
                <th>Üst Kategori</th>
                <th>Slug</th>
                <th>Kayıt Tarihi</th>
            </tr>
            </thead>
            <tbody>
            @if(count($list) == 0)
                <tr><td colspan="6" class="text-center">Kayıt Bulunamadı </td></tr>
            @endif
            @foreach($list as $entry)
            <tr>
                <td>{{ $entry->id }}</td>
                <td>{{ $entry->category_name }}</td>
                <td>{{ $entry->up_category->category_name }}</td>
                <td>{{ $entry->slug }}</td>
                <td>{{ $entry->created_at }}</td>
                <td style="width: 100px">
                    <a href="{{ route('admin.category.update', $entry->id) }}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Düzenle">
                        <span class="fa fa-pencil"></span>
                    </a>
                    <a href="{{ route('admin.category.delete', $entry->id) }}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Emin misin?')">
                        <span class="fa fa-trash"></span>
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{ $list->links() }}
    </div>
@endsection
