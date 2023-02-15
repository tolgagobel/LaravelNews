@extends('admin.layouts.master')
@section('title','User Management')
@section('content')
    <h1 class="page-header">Kullanıcı Yönetimi</h1>

    <form method="post" action="{{ route('admin.user.save', @$entry->id) }}">
        {{ csrf_field() }}
        <div class="pull-right">
            <button type="submit" class="btn btn-primary">
                {{ @$entry->id > 0 ? "Güncelle" : "Kaydet"}}
            </button>
        </div>
        <h2 class="sub-header">Kullanıcı
        {{ @$entry->id > 0 ? "Düzenle" : "Ekle" }}
        </h2>

        @include('layouts.partials.errors')
        @include('layouts.partials.alert')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="namesurname">Ad Soyad</label>
                    <input type="text" name="namesurname" class="form-control" id="namesurname" placeholder="Ad Soyad" value="{{ old('namesurname', $entry->namesurname) }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email', $entry->email) }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="phone">Telefon</label>
                    <input type="phone" name="phone" class="form-control" id="phone" placeholder="Telefon" value="{{ old('phone', $entry->phone) }}">
                </div>
            </div>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="active" value="1" {{ $entry->active ? 'checked' : '' }}> Aktif mi
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="admin" value="1" {{ $entry->admin ? 'checked' : '' }}> Yönetici mi
            </label>
        </div>
    </form>

@endsection
