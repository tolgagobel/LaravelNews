@extends('admin.layouts')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Haber Ekle</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <form method="post" action="{{ route('admin.product.save', $entry->id) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ auth('admin')->user()->id }}">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Haber Başlığı</label>
                                    <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Ürün Adı" value="{{ old('product_name', $entry->product_name) }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Slug</label>
                                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug" value="{{ old('slug',$entry->slug) }}">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0">Açıklama</h4>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div id="editor">
                                                <textarea class="ckeditor-classic" rows="5" name="description" id="task-textarea">{{ old('description', $entry->description) }} </textarea>
                                            </div> <!-- end Snow-editor-->
                                        </div><!-- end card-body -->
                                    </div><!-- end card -->

                                </div>
                                <!-- end col -->
                            </div>
                        </div>
                        <!-- end card -->

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Haber Resmi</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="text-center">
                                        <div class="position-relative d-inline-block">
                                            <div class="position-absolute top-100 start-100 translate-middle">
                                                <label for="product-image-input" class="mb-0" data-bs-toggle="tooltip"
                                                       data-bs-placement="right" title="Resim Seç">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                            <i class="ri-image-fill"></i>
                                                        </div>
                                                    </div>
                                                </label>
                                                <input value="" id="product_img"
                                                       type="file" name="product_img">
                                            </div>
                                            <div class="avatar-lg">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="/backend/images/{{ $entry->product->product_img }}" alt="" id="product_img" class="avatar-md h-auto">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                        @if(auth('admin')->user()->role == 'Admin' OR auth('admin')->user()->role == 'Moderator')
                        <div class="card">
                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <!-- Bootstrap Custom Checkboxes color -->
                                                <div>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" name="active" value="1" {{ $entry->active ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="formCheck1">
                                                            Aktif mi
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" name="goster_slider" value="1" {{ $entry->product->goster_slider ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="formCheck1">
                                                           Sol Sliderda göster
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" name="goster_gunun_firsati" value="1" {{ $entry->product->goster_gunun_firsati ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="formCheck2">
                                                            Sağ Sliderda Göster
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" name="goster_one_cikan" value="1" {{ $entry->product->goster_one_cikan ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="formCheck3">
                                                            Ana Slider
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" name="goster_cok_satan" value="1" {{ $entry->product->goster_cok_satan ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="formCheck4">
                                                            Öne Çıkanlarda Göster
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>


                            </div>
                            <!-- end card body -->
                        </div>
                        @endif

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Kategori</h5>
                                </div>
                                <div class="card-body">
                                    <div class="vstack gap-3">
                                        <select name="categories[]" class="js-example-disabled-multi" id="categories" multiple="multiple">
                                            @foreach($category as $category)
                                                <option value="{{$category->id}}" {{ collect(old('categories', $product_categories))->contains($category->id) ? 'selected' : '' }}>{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- end card -->
                        <div class="text-end mb-3">
                            <button type="submit" class="btn btn-primary ">
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
@section('scripts')
    <script>
        ClassicEditor
            .create( document.querySelector( '#task-textarea' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
