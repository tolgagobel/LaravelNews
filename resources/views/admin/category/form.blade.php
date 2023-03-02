@extends('admin.layouts')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Kategori Ekle</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            @include('layouts.partials.alert')
            <form id="createproduct-form" class="needs-validation" novalidate="" method="post" action="{{ route('admin.category.save', @$entry->id) }}">
                {{ csrf_field() }}
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
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Kategori Adı</label>
                                    <input type="text" name="category_name" class="form-control" id="category_name" placeholder="Kategori Adı" value="{{ old('category_name', $entry->category_name) }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Slug</label>
                                    <input type="hidden" name="original_slug" value="{{ old('slug', $entry->slug) }}">
                                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug" value="{{ old('slug', $entry->slug) }}">
                                </div>
                            </div>
                            <div class="row mt-2">

                                <!-- end col -->
                            </div>
                        </div>
                        <!-- end card -->


                        <!-- end card -->
                        <div class="text-end mb-3">
                            <button type="submit" class="btn btn-primary">
                                {{ @$entry->id > 0 ? "Güncelle" : "Kaydet"}}
                            </button>
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- end col -->
                </div>
                <!-- end row -->

            </form>

        </div>
        <!-- container-fluid -->
    </div>
@endsection
