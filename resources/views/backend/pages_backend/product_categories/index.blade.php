@extends('backend.layouts_backend.master')

@section('title')
Product Categories
@endsection

@section('content')
    <!-- Main content dashboard  -->



    <div class="page-content">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="mb-3">
                        <h5 class="card-title">Product Category <span class="text-muted fw-normal ms-2">(1)</span></h5>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

                        <div>
                            <a href="{{ route('product_categories.create') }}" class="btn bg-primary text-light"><i
                                    class="bx bx-plus me-1"></i> Add Category</a>
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
                            <th scope="col"> Image</th>
                            <th scope="col"> Status</th>
                            <th scope="col">Description</th>
                            <th scope="col"> Meta Title</th>
                            <th scope="col"> Meta Keywords</th>
                            <th scope="col"> Meta Description</th>
                            <th style="width: 150px; min-width: 80px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($product_categories as $product_category)
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck11">
                                        <label class="form-check-label" for="contacusercheck11"></label>
                                    </div>
                                </th>
                                <td>{{ $product_category->id }}</td>
                                <td><a href="#" class="text-body">{{ $product_category->name }}</a> </td>
                                <td><a href="#" class="text-body">{{ $product_category->slug }}</a> </td>
                                <td><a href="#" class="text-body">

                                  @if ($product_category->image)
                                       <img src={{ asset('uploads/product_category/'.$product_category->image) }}   width="60px" height="60px" />
                                  @else
                                       <span class="badge bg-soft-danger text-danger" style="padding:10px;">No Photo</span>
                                  @endif

                                 </a> </td>
                                  <td>
                                    {{-- <a href="#" class="text-body">{{ $product_category->status == '0' ? 'Hidden':'Visible' }} --}}

                                    @if($product_category->status == '0')
                                    <span class="badge bg-soft-success text-success" style="padding:10px;">Visible</span>
                                    @else
                                    <span class="badge bg-soft-danger text-danger" style="padding:10px;">Hidden</span>

                                    @endif

                                  </td>

                                <td>{{ $product_category->description }}</td>
                                 <td><a href="#" class="text-body">{{ $product_category->meta_keywords }}</a> </td>
                                  <td><a href="#" class="text-body">{{ $product_category->meta_title }}</a> </td>
                                   <td><a href="#" class="text-body">{{ $product_category->meta_description }}</a> </td>

                                <td colspan="6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#viewProductCategoryDetails{{ $product_category->id }}"
                                                data-bs-whatever="@getbootstrap"><i class=" far fa-eye  "></i></button>
                                        </div>

                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editProductCategory{{ $product_category->id }}"
                                                data-bs-whatever="@getbootstrap"><i class="fas fa-pencil-alt "></i></button>

                                        </div>
                                        <!-- delete food menu -->
                                        <div class="col-md-4">
                                            <form action="{{ route('product_categories.destroy', $product_category->id) }}"
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



                            <!-- VIEW PRODUCT CATEGORIES MODAL -->
                            <div class="modal fade" id="viewProductCategoryDetails{{ $product_category->id }}"
                                tabindex="-1" aria-labelledby="viewProductCategoryDetailsLabel" style="display: none;"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewProductCategoryDetailsLabel">Product Category
                                                Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>



                                        <div class="modal-body">
                                           @if ($product_category->image)
                                       <img src={{ asset('uploads/product_category/'.$product_category->image) }}   width="60px" height="60px" />
                                            @else
                                                <span class="badge bg-soft-danger text-danger" style="padding:10px;">No Photo</span>
                                            @endif



                                            <hr>
                                            <p>Category Name : {{ $product_category->name }}</p>
                                            <hr>
                                            <p>Slug : {{ $product_category->slug }}</p>
                                            <hr>
                                            <p>status :
                                             @if($product_category->status == '0')
                                                <span class="badge bg-soft-danger text-danger" style="padding:10px;">Hidden</span>
                                                @else
                                                <span class="badge bg-soft-success text-success" style="padding:10px;">Visible</span>

                                                @endif
                                                </p>
                                            <hr>
                                             <p>Meta Title : {{ $product_category->meta_title }}</p>
                                            <hr>
                                            <p>Meta Keywords : {{ $product_category->meta_keywords }}</p>
                                            <hr>
                                             <p> Description : {{ $product_category->description }}</p>
                                            <hr>
                                             <p>Meta Description : {{ $product_category->meta_description }}</p>
                                            <hr>
                                            <p>Description : {{ $product_category->description }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                            </button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editProductCategory{{ $product_category->id }}"
                                                data-bs-whatever="@getbootstrap">Edit Category</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF VIEW DETAILS MODEL -->


                            {{-- UPDATE PRODUCT  CATEGORY --}}
                            <div class="modal fade" id="editProductCategory{{ $product_category->id }}" tabindex="-1"
                                aria-labelledby="editProductCategoryLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewProductCategoryDetailsLabel">Edit Category
                                                Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">


                                            <!-- UPDATE Product CATEGORIES -->

                                             <form  action="{{ route('product_categories.update', $product_category->id) }}"
                                                method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Name</label>
                                                        <input type="text" class="form-control" id="validationCustom01"  name="name" placeholder="Ennter Category Name" value="{{ $product_category->name}}">
                                           @error('name')
                                                            <small class="text-danger"> {{ $message }}</small>
                                                          @enderror

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Slug</label>
                                                        <input type="text" class="form-control" id="validationCustom01"  name="slug" placeholder="Ennter slug" value="{{ $product_category->slug }}" >
                                                         @error('slug')
                                                            <small class="text-danger"> {{ $message }}</small>
                                                          @enderror
                                                    </div>
                                                </div>




                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" >Description</label>
                                                        <textarea class="form-control"  name="description" placeholder="Enter Category Description" rows="3">{{ $product_category->description }}</textarea>
                                                         @error('description')
                                                            <small class="text-danger"> {{ $message }}</small>
                                                          @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">image</label>
                                                        <input type="file" class="form-control" id="validationCustom01"  name="image"  value="" >
                                                        @if ($product_category->image)
                                                            <img src={{ asset('uploads/product_category/'.$product_category->image) }}   width="60px" height="60px" />
                                                        @else
                                                            <span class="badge bg-soft-danger text-danger" style="padding:10px;">No Photo</span>
                                                        @endif

                                                       @error('image')
                                                            <small class="text-danger"> {{ $message }}</small>
                                                       @enderror
                                                    </div>
                                                </div>

                                                {{-- <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Status</label>
                                                        <input type="checkbox"    name="status" value={{ $product_category->status == '1' ? 'checked' : ''}}  >
                                                         @error('status')
                                                            <small class="text-danger"> {{ $message }}</small>
                                                          @enderror
                                                    </div>
                                                </div> --}}

                                                 <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Status</label>
                                                        <input type="checkbox"    name="status" {{ $product_category->status == '1' ?
                                                        'checked' : ''}} >

                                                         @error('status')
                                                            <small class="text-danger"> {{ $message }}</small>
                                                          @enderror
                                                    </div>
                                                </div>



                                                <h3>SEO TAGS </H3>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Meta title</label>
                                                        <input type="text" class="form-control" id="validationCustom01"  name="meta_title" placeholder="Ennter Category Name" value="{{ $product_category->meta_title }}" >
                                                         @error('meta_title')
                                                            <small class="text-danger"> {{ $message }}</small>
                                                          @enderror
                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" >Meta Keywords</label>
                                                        <textarea class="form-control"  name="meta_keywords" placeholder="Enter Category Description" rows="3">{{ $product_category->meta_keywords }}</textarea>
                                                         @error('meta_keywords')
                                                            <small class="text-danger"> {{ $message }}</small>
                                                          @enderror
                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" >Meta Description</label>
                                                        <textarea class="form-control"  name="meta_description" placeholder="Enter Category Description" rows="3">{{ $product_category->meta_description }}</textarea>
                                                         @error('meta_description')
                                                            <small class="text-danger"> {{ $message }}</small>
                                                          @enderror
                                                    </div>
                                                </div>


                                            </div>

                                            <!-- Editor -->
                                            <button class="btn btn-primary" type="submit">Update Product Category</button>
                                        </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            {{-- END UPDATE Product CATEGORY --}}
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
