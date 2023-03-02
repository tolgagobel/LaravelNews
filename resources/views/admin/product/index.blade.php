@extends('admin.layouts')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Haberler</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            @if(auth('admin')->user()->role == 'Editor')
                @php
                    $list = \App\Models\Product::where('user_id', auth('admin')->user()->id)->get();
                @endphp
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <div id="customerList">
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                        <div>
                                            <a href="{{ route('admin.product.new') }}" class="btn btn-success"><i
                                                    class="ri-add-line align-bottom me-1"></i>Haber Ekle</a>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <form method="post" action="{{ route('admin.product') }}" class="form-inline">
                                            {{ csrf_field() }}
                                            <div class="d-flex justify-content-sm-end">
                                                <div class="search-box ms-2">
                                                    <input type="text" class="form-control search "name="aranan" id="aranan" placeholder="Ara...">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                                <a href="{{ route('admin.product') }}" class="btn btn-primary">Temizle</a>
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
                                            <th  data-sort="customer_name">#</th>
                                            <th  data-sort="email">Resim</th>
                                            <th class="sort" data-sort="phone">Haber Adı</th>
                                            <th class="sort" data-sort="phone">Slug</th>
                                            <th class="sort" data-sort="date">Aktif</th>
                                            <th class="sort" data-sort="action">Kayıt Tarihi</th>
                                            <th class="sort" data-sort="action">İşlem</th>
                                        </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
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
                                            <td class="avatar-sm bg-light rounded p-1" ><img src="/backend/images/{{ $entry->product->product_img }}" style="height: 50px;width: 50px" alt=""></td>
                                            <td class="customer_name">{{ $entry->product_name }}</td>
                                            <td class="email">{{ $entry->slug }}</td>
                                            @if($entry->active)
                                                <td class="status"><span class="badge badge-soft-success text-uppercase">Yayında</span>
                                            @else
                                                <td class="status"><span class="badge badge-soft-danger text-uppercase">Yayında Değil !</span>
                                            @endif
                                            <td class="date">{{ $entry->created_at }}</td>
                                            <td style="width: 100px">
                                                <a href="{{ route('admin.product.update', $entry->id) }}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Düzenle">
                                                    <span class="fa fa-pencil">Düzenle</span>
                                                </a>
                                                <a href="{{ route('admin.product.delete', $entry->id) }}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Emin misin?')">
                                                    <span class="fa fa-trash">Sil</span>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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
            @else
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                <a href="{{ route('admin.product.new') }}" class="btn btn-success"><i
                                                        class="ri-add-line align-bottom me-1"></i>Haber Ekle</a>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <form method="post" action="{{ route('admin.product') }}" class="form-inline">
                                                {{ csrf_field() }}
                                                <div class="d-flex justify-content-sm-end">
                                                    <div class="search-box ms-2">
                                                        <input type="text" class="form-control search "name="aranan" id="aranan" placeholder="Ara...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                    <a href="{{ route('admin.product') }}" class="btn btn-primary">Temizle</a>
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
                                                <th  data-sort="customer_name">#</th>
                                                <th  data-sort="email">Resim</th>
                                                <th class="sort" data-sort="phone">Haber Adı</th>
                                                <th class="sort" data-sort="phone">Slug</th>
                                                <th class="sort" data-sort="date">Yayın Durumu</th>
                                                <th class="sort" data-sort="action">Kayıt Tarihi</th>
                                                <th class="sort" data-sort="action">İşlem</th>
                                            </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
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
                                                    <td class="avatar-sm bg-light rounded p-1" ><img src="/backend/images/{{ $entry->product->product_img }}" style="height: 50px;width: 50px" alt=""></td>
                                                    <td class="customer_name">{{ $entry->product_name }}</td>
                                                    <td class="email">{{ $entry->slug }}</td>
                                                    @if($entry->active)
                                                    <td class="status"><span class="badge badge-soft-success text-uppercase">Yayında</span>
                                                    @else
                                                    <td class="status"><span class="badge badge-soft-danger text-uppercase">Yayında Değil !</span>
                                                        @endif
                                                    </td>
                                                    <td class="date">{{ $entry->created_at }}</td>
                                                    <td style="width: 100px">
                                                        <a href="{{ route('admin.product.update', $entry->id) }}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Düzenle">
                                                            <span class="fa fa-pencil">Düzenle</span>
                                                        </a>
                                                        <a href="{{ route('admin.product.delete', $entry->id) }}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Emin misin?')">
                                                            <span class="fa fa-trash">Sil</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
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
            @endif


            <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-light p-3">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    id="close-modal"></button>
                        </div>
                        <form class="tablelist-form" autocomplete="off">
                            <div class="modal-body">
                                <div class="mb-3" id="modal-id" style="display: none;">
                                    <label for="id-field" class="form-label">ID</label>
                                    <input type="text" id="id-field" class="form-control" placeholder="ID" readonly="">
                                </div>

                                <div class="mb-3">
                                    <label for="customername-field" class="form-label">Customer Name</label>
                                    <input type="text" id="customername-field" class="form-control"
                                           placeholder="Enter Name" required="">
                                    <div class="invalid-feedback">Please enter a customer name.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="email-field" class="form-label">Email</label>
                                    <input type="email" id="email-field" class="form-control" placeholder="Enter Email"
                                           required="">
                                    <div class="invalid-feedback">Please enter an email.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="phone-field" class="form-label">Phone</label>
                                    <input type="text" id="phone-field" class="form-control"
                                           placeholder="Enter Phone no." required="">
                                    <div class="invalid-feedback">Please enter a phone.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="date-field" class="form-label">Joining Date</label>
                                    <input type="text" id="date-field" class="form-control" placeholder="Select Date"
                                           required="">
                                    <div class="invalid-feedback">Please select a date.</div>
                                </div>

                                <div>
                                    <label for="status-field" class="form-label">Status</label>
                                    <select class="form-control" data-trigger="" name="status-field" id="status-field"
                                            required="">
                                        <option value="">Status</option>
                                        <option value="Active">Active</option>
                                        <option value="Block">Block</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success" id="add-btn">Add Customer</button>
                                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    id="btn-close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-2 text-center">
                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                           colors="primary:#f7b84b,secondary:#f06548"
                                           style="width:100px;height:100px"></lord-icon>
                                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                    <h4>Are you Sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end modal -->

        </div>
        <!-- container-fluid -->
    </div>
@endsection
