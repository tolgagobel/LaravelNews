@extends('admin.layouts.master')
@section('title','User Management')
@section('content')
    <h1 class="page-header">Kullanıcı Yönetimi</h1>

    <h1 class="sub-header">
        <div class="btn-group pull-right" role="group" aria-label="Basic example">
            <a href="{{ route('admin.user.new') }}" class="btn btn-primary">Ekle</a>
        </div>
        Kullanıcı Listesi
    </h1>

    @include('layouts.partials.alert')

    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Ad Soyad</th>
                <th>Email</th>
                <th>Aktif mi</th>
                <th>Yönetici mi</th>
                <th>Kayıt Tarihi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $entry)
            <tr>
                <td>{{ $entry->id }}</td>
                <td>{{ $entry->namesurname }}</td>
                <td>{{ $entry->email }}</td>
                <td>
                    @if($entry->active)
                    <span class="label label-success">Aktif</span>
                    @else
                        <span class="label label-danger">Pasif</span>
                    @endif
                </td>
                <td>
                    @if($entry->admin)
                        <span class="label label-success">Yönetici</span>
                    @else
                        <span class="label label-danger">Müşteri</span>
                    @endif
                </td>
                <td>{{ $entry->created_at }}</td>
                <td style="width: 100px">
                    <a href="{{ route('admin.user.update', $entry->id) }}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Düzenle">
                        <span class="fa fa-pencil"></span>
                    </a>
                    <a href="{{ route('admin.user.delete', $entry->id) }}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Emin misin?')">
                        <span class="fa fa-trash"></span>
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
