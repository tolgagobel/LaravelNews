@extends('admin.layouts')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Kategoriler</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <div id="customerList">
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                        <div class="btn-group pull-right" role="group" aria-label="Basic example">
                                            <a href="{{ route('admin.category.new') }}" class="btn btn-success"><i
                                                    class="ri-add-line align-bottom me-1"></i>Ekle</a>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <form method="post" action="{{ route('admin.category') }}" class="form-inline">
                                            {{ csrf_field() }}
                                        <div class="d-flex justify-content-sm-end">
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control search "name="aranan" id="aranan" placeholder="Ara...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                            <a href="{{ route('admin.category') }}" class="btn btn-primary">Temizle</a>
                                        </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                        <thead class="table-light">
                                        <tr>
                                            <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="checkAll"
                                                           value="option">
                                                </div>
                                            </th>
                                            <th class="sort" data-sort="customer_name">id</th>
                                            <th class="sort" data-sort="email">Kategori Adı</th>
                                            <th class="sort" data-sort="phone">Üst Kategori</th>
                                            <th class="sort" data-sort="date">Slug</th>
                                            <th class="sort" data-sort="status">Kayıt Tarihi</th>
                                            <th class="sort" data-sort="action">İşlem</th>
                                        </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                        @if(count($list) == 0)
                                            <tr><td colspan="6" class="text-center">Kayıt Bulunamadı </td></tr>
                                        @endif
                                        @foreach($list as $entry)
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child"
                                                           value="option1">
                                                </div>
                                            </th>

                                            <td class="id" style="display:none;"><a href="javascript:void(0);"
                                                                                    class="fw-medium link-primary">1</a>
                                            </td>
                                            <td class="customer_name">{{ $entry->id }}</td>
                                            <td class="email">{{ $entry->category_name }}</td>
                                            <td class="phone">{{ $entry->up_category->category_name }}</td>
                                            <td class="date">{{ $entry->slug }}</td>
                                            <td class="status"><span class="badge badge-soft-success text-uppercase">{{ $entry->created_at }}</span>
                                            </td>
                                            <td style="width: 100px">
                                                <a href="{{ route('admin.category.update', $entry->id) }}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Düzenle">
                                                    <span class="fa fa-pencil">Düzenle</span>
                                                </a>
                                                <a href="{{ route('admin.category.delete', $entry->id) }}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Emin misin?')">
                                                    <span class="fa fa-trash">Sil</span>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="noresult" style="display: none">
                                        <div class="text-center">
                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                       colors="primary:#121331,secondary:#08a88a"
                                                       style="width:75px;height:75px"></lord-icon>
                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                            <p class="text-muted mb-0">We've searched more than 150+ Orders We did not
                                                find any orders for you search.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <div class="pagination-wrap hstack gap-2">
                                        <a class="page-item pagination-prev disabled" href="#">
                                            Previous
                                        </a>
                                        <ul class="pagination listjs-pagination mb-0"></ul>
                                        <a class="page-item pagination-next" href="#">
                                            Next
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
@endsection
