@extends('admin.layouts')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Kullanıcı Ekle</h4>
                    </div>
                </div>
            </div>
        </div><!-- end card header -->

        <div class="card-body">
            <div class="live-preview">
                <form method="post" action="{{ route('admin.user.save', @$entry->id) }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Kullanıcı Bilgilerini Giriniz..</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="row">
                                                <div class="col-md-6 mt-3">
                                                    <div class="mb-3">
                                                        <label for="firstNameinput" class="form-label">Ad Soyad</label>
                                                        <input type="text" name="namesurname" class="form-control" id="namesurname" placeholder="Ad Soyad" value="{{ old('namesurname', $entry->namesurname) }}">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6 mt-3">
                                                    <div class="mb-3">
                                                        <label for="phonenumberInput" class="form-label">Telefon</label>
                                                        <input type="phone" name="phone" class="form-control" id="phone" placeholder="Telefon" value="{{ old('phone', $entry->phone) }}">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="emailidInput" class="form-label">Email</label>
                                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email', $entry->email) }}">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="citynameInput" class="form-label">Şifre</label>
                                                        <input type="password" name="password" class="form-control" id="password" placeholder="Şifre">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="ForminputState" class="form-label">Rolü</label>
                                                        <select id="role" class="form-select" data-choices="" name="role"
                                                                data-choices-sorting="true">
                                                            @foreach($roles as $role)
                                                                <option value="{{ $role->name }}" {{$entry->role ? 'selected' : ''}}>{{ $role->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" name="active" value="1" {{ $entry->active ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="formCheck1">
                                                                Aktif mi
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" name="admin" value="1" {{ $entry->admin ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="formCheck2">
                                                                Yönetici mi
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="text-start">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ @$entry->id > 0 ? "Güncelle" : "Kaydet"}}
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </form>
            </div>
            <div class="d-none code-view">

            </div>
        </div>
    </div>
    </div> <!-- end col -->
    </div>
    </div> <!-- end col -->
    </div>
    <!--end row-->

@endsection
