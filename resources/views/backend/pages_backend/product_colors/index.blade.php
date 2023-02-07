@extends('backend.layouts_backend.master')

@section('title')
Product Brands
@endsection

@section('content')
    <!-- Main content dashboard  -->



    <div class="page-content">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="mb-3">
                        <h5 class="card-title">Product Brands <span class="text-muted fw-normal ms-2">(1)</span></h5>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

                        <div>
                            <a href="{{ route('product_brands.create') }}" class="btn bg-primary text-light"><i
                                    class="bx bx-plus me-1"></i> Add Brand</a>
                        </div>

                    </div>

                </div>
            </div>
            <!-- end row -->

            <!-- FETCH FEEDBACKS -->
            {{-- alert add item --}}
             @if(session('message'))
             {{-- <div class="alert alert-success" > {{ session('message')}} </div> --}}
             <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                <i class="mdi mdi-check-all label-icon"></i>
                {{ session('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

             {{-- alert delete item --}}
              @if(session('messagedelete')) 
             <div class="alert alert-danger alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                <i class="mdi mdi-block-helper label-icon"></i>
                {{ session('messagedelete')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
              {{-- <div class="alert alert-danger" > {{ session('messagedelete')}} </div> --}}
             @endif

             {{-- alert update item --}}
              @if(session('messageupdate')) 
             <div class="alert alert-info alert-dismissible alert-label-icon label-arrow fade show mb-0" role="alert">
                <i class="mdi mdi-check-all label-icon"></i>
                {{ session('messageupdate')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif


            <div class="table-responsive mb-4">
                <table class="table align-middle datatable dt-responsive table-check nowrap"
                    style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 50px;">
                                <div class="form-check font-size-16">
                                    <input type="checkbox" class="form-check-input" id="checkAll">
                                    <label class="form-check-label" for="checkAll"></label>
                                </div>
                            </th>
                            <th scope="col"> #ID</th>
                            <th scope="col"> Name</th>
                            <th scope="col"> Slug</th>
                            <th scope="col"> Status</th>
                           
                            <th style="width: 150px; min-width: 80px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($product_brands as $product_brand)
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck11">
                                        <label class="form-check-label" for="contacusercheck11"></label>
                                    </div>
                                </th>
                                <td>{{ $product_brand->id }}</td>
                                <td><a href="#" class="text-body">{{ $product_brand->name }}</a> </td>
                                <td><a href="#" class="text-body">{{ $product_brand->slug }}</a> </td>
                                <td>

                                    @if($product_brand->status == '0')
                                    <span class="badge bg-soft-danger text-danger" style="padding:10px;">Hidden</span>
                                    @else
                                    <span class="badge bg-soft-success text-success" style="padding:10px;">Visible</span>

                                    @endif
                                   
                                  </td>
                                
                                <td colspan="6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#viewProductBrandDetails{{ $product_brand->id }}"
                                                data-bs-whatever="@getbootstrap"><i class=" far fa-eye  "></i></button>
                                        </div>

                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editProductBrand{{ $product_brand->id }}"
                                                data-bs-whatever="@getbootstrap"><i class="fas fa-pencil-alt "></i></button>

                                        </div>
                                        <!-- delete food menu -->
                                        <div class="col-md-4">
                                            <form action="{{ route('product_brands.destroy', $product_brand->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a> <button class="btn btn-danger shadow btn-xs sharp"> <span
                                                            class="fa fa-trash"> </button> </a>

                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>



                            <!-- VIEW PRODUCT BRANDS MODAL -->
                            <div class="modal fade" id="viewProductBrandDetails{{ $product_brand->id }}"
                                tabindex="-1" aria-labelledby="viewProductBrandDetailsLabel" style="display: none;"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewProductBrandDetailsLabel">Product Brand
                                                Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>



                                        <div class="modal-body">
                                         

                                            <p>Brand Name : {{ $product_brand->name }}</p>
                                            <hr>
                                            <p>Slug : {{ $product_brand->slug }}</p>
                                            <hr>
                                            <p>status :
                                            @if($product_brand->status == '0')
                                    <span class="badge bg-soft-danger text-danger" style="padding:10px;">Hidden</span>
                                    @else
                                    <span class="badge bg-soft-success text-success" style="padding:10px;">Visible</span>

                                    @endif
                                     </p>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                            </button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editProductBrand{{ $product_brand->id }}"
                                                data-bs-whatever="@getbootstrap">Edit Brand</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF VIEW DETAILS MODEL -->


                            {{-- UPDATE PRODUCT  BRAND --}}
                            <div class="modal fade" id="editProductBrand{{ $product_brand->id }}" tabindex="-1"
                                aria-labelledby="editProductBrandLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewProductBrandDetailsLabel">Edit Brand
                                                Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">


                                            <!-- UPDATE Product BRAND -->

                                             <form  action="{{ route('product_brands.update', $product_brand->id) }}"
                                                method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')

                                             <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Name</label>
                                                        <input type="text" class="form-control" id="validationCustom01"  name="name" placeholder="Ennter Brand Name" value="{{ $product_brand->name}}">
                                                         @error('name') 
                                                            <small class="text-danger"> {{ $message }}</small>
                                                          @enderror
                                                        
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Slug</label>
                                                        <input type="text" class="form-control" id="validationCustom01"  name="slug" placeholder="Ennter slug" value="{{ $product_brand->slug}}" >
                                                         @error('slug') 
                                                            <small class="text-danger"> {{ $message }}</small>
                                                          @enderror
                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Status</label>
                                                        <input type="checkbox"    name="status" {{ $product_brand->status == '1' ? 'checked':''}} >
                                                         @error('status') 
                                                            <small class="text-danger"> {{ $message }}</small>
                                                          @enderror
                                                    </div>
                                                </div>






                                                
                                            </div>

                                            <!-- Editor -->
                                            <button class="btn btn-primary" type="submit">Update Product Brand</button>
                                        </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            {{-- END UPDATE Product Brand --}}
                        @endforeach


                    </tbody>
                </table>
                <!-- end table -->
            </div>
            <!-- end table responsive -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    </div>
    <!-- container-fluid -->
    </div>
@endsection
