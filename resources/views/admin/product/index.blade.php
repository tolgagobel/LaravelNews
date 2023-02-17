@extends('admin.layouts.master')
@section('title','User Management')
@section('content')
    <h1 class="page-header">Ürün Yönetimi</h1>

    <h1 class="sub-header">Ürün Listesi</h1>
    <div class="well">
        <div class="btn-group pull-right" role="group" aria-label="Basic example">
            <a href="{{ route('admin.product.new') }}" class="btn btn-primary">Ekle</a>
        </div>
        <form method="post" action="{{ route('admin.product') }}" class="form-inline">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="aranan">Ara</label>
                <input type="text" class="form-control-sm" name="aranan" id="aranan" placeholder="Ara..">
            </div>
            <button type="submit" class="btn btn-primary">Ara</button>
            <a href="{{ route('admin.product') }}" class="btn btn-primary">Temizle</a>
        </form>
    </div>


    @include('layouts.partials.alert')

    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Ürün Adı</th>
                <th>Slug</th>
                <th>Fiyatı</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $entry)
                <tr>
                    <td>{{ $entry->id }}</td>
                    <td>{{ $entry->product_name }}</td>
                    <td>{{ $entry->slug }}</td>
                    <td>{{ $entry->price }}</td>
                    <td>{{ $entry->created_at }}</td>
                    <td style="width: 100px">
                        <a href="{{ route('admin.product.update', $entry->id) }}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Düzenle">
                            <span class="fa fa-pencil"></span>
                        </a>
                        <a href="{{ route('admin.product.delete', $entry->id) }}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Emin misin?')">
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


