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
                        <h5 class="card-title">Products <span class="text-muted fw-normal ms-2">(1)</span></h5>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

                        <div>
                            <a href="{{ route('products.create') }}" class="btn bg-primary text-light"><i
                                    class="bx bx-plus me-1"></i> Add Product</a>
                        </div>

                    </div>

                </div>
            </div>
            <!-- end row -->

            <!-- FETCH FEEDBACKS -->
            {{-- alert add item --}}
             @if(session('messagesave'))
             {{-- <div class="alert alert-success" > {{ session('message')}} </div> --}}
             <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                <i class="mdi mdi-check-all label-icon"></i>
                {{ session('messagesave')}}
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
                            <th scope="col"> Category</th>
                            <th scope="col"> Brand</th>
                            <th scope="col"> Image</th>
                            <th scope="col"> Original Price</th>
                            <th scope="col"> Selling Price</th>
                            <th scope="col"> Slug</th>
                            <th scope="col"> Status</th>
                           
                            <th style="width: 150px; min-width: 80px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($products as $product)
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck11">
                                        <label class="form-check-label" for="contacusercheck11"></label>
                                    </div>
                                </th>
                                <td>{{ $product->id }}</td>
                                <td><a href="#" class="text-body">{{ $product->name }}</a> </td>
                                 <td>{{ $product->product_category_id }}</td>
                                  <td>{{ $product->brand }}</td>
                                   <td><a href="#" class="text-body">

                                  @if ($product->image)
                                       <img src={{ asset('uploads/products/'.$product->image) }}   width="60px" height="60px" />
                                  @else
                                       <span class="badge bg-soft-danger text-danger" style="padding:10px;">No Photo</span>
                                  @endif

                                 </a> </td>
                                  <td>
                                   <td>{{ $product->original_price }}</td>
                                    <td>{{ $product->selling_price }}</td>
                                <td><a href="#" class="text-body">{{ $product->slug }}</a> </td>
                                <td>

                                    @if($product->status == '0')
                                    <span class="badge bg-soft-danger text-danger" style="padding:10px;">Hidden</span>
                                    @else
                                    <span class="badge bg-soft-success text-success" style="padding:10px;">Visible</span>

                                    @endif
                                   
                                  </td>
                                
                                <td colspan="6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#viewProductBrandDetails{{ $product->id }}"
                                                data-bs-whatever="@getbootstrap"><i class=" far fa-eye  "></i></button>
                                        </div>

                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editProductBrand{{ $product->id }}"
                                                data-bs-whatever="@getbootstrap"><i class="fas fa-pencil-alt "></i></button>

                                        </div>
                                        <!-- delete food menu -->
                                        <div class="col-md-4">
                                            <form action="{{ route('products.destroy', $product->id) }}"
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
                            <div class="modal fade" id="viewProductBrandDetails{{ $product->id }}"
                                tabindex="-1" aria-labelledby="viewProductBrandDetailsLabel" style="display: none;"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewProductBrandDetailsLabel">Product 
                                                Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>



                                        <div class="modal-body">
                                          @if ($product->image)
                                            <img src={{ asset('uploads/products/'.$product->image) }}    />
                                                @else
                                                    <span class="badge bg-soft-danger text-danger" style="padding:10px;">No Photo</span>
                                         @endif
                                         <hr>

                                            <p>Brand Name : {{ $product->name }}</p>
                                            <hr>
                                            <p>Category : {{ $product->product_category_id }}</p>
                                            <hr>
                                            <p>Slug : {{ $product->slug }}</p>
                                            <hr>
                                            <p>Brand : {{ $product->brand }}</p>
                                            <hr>
                                             <p>status :
                                                @if($product->status == '0')
                                                <span class="badge bg-soft-danger text-danger" style="padding:10px;">Hidden</span>
                                                @else
                                                <span class="badge bg-soft-success text-success" style="padding:10px;">Visible</span>

                                                @endif
                                            </p>
                                             <hr>

                                             <p>Trending :
                                                @if($product->trending == '0')
                                                <span class="badge bg-soft-danger text-danger" style="padding:10px;">Hidden</span>
                                                @else
                                                <span class="badge bg-soft-success text-success" style="padding:10px;">Visible</span>

                                                @endif
                                            </p>
                                             <hr>

                                            <p>Original Price : {{ $product->original_price }}</p>
                                            <hr>
                                            <p>Selling Price : {{ $product->selling_price }}</p>
                                            <hr>
                                            <p>Quantity : {{ $product->quantity }}</p>
                                            <hr>
                                            <p>Meta title : {{ $product->meta_title }}</p>
                                            <hr>
                                             <p>Meta Keywords : {{ $product->meta_keywords }}</p>
                                             <hr>
                                            <p>Meta description : {{ $product->meta_description }}</p>
                                            <hr>
                                            <p> Description : {{ $product->description }}</p>
                                            <hr>
                                           
                                           
                                           
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                            </button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editProductBrand{{ $product->id }}"
                                                data-bs-whatever="@getbootstrap">Edit Product</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF VIEW DETAILS MODEL -->


                            {{-- UPDATE PRODUCT  BRAND --}}
                            <div class="modal fade" id="editProductBrand{{ $product->id }}" tabindex="-1"
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


                                            <!-- UPDATE Product  -->
                                            <div class="card">
                                            
                                                <div class="card-body">
                                                 <form  action="{{ route('products.update', $product->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PATCH') 
                                                    
                                                            <!-- Nav tabs -->
                                                            <ul class="nav nav-tabs" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab" aria-selected="false">
                                                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                                        <span class="d-none d-sm-block">Home</span>    
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-bs-toggle="tab" href="#seo" role="tab" aria-selected="false">
                                                                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                                        <span class="d-none d-sm-block"> SEO </span>    
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link " data-bs-toggle="tab" href="#details" role="tab" aria-selected="true">
                                                                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                                        <span class="d-none d-sm-block"> Details</span>    
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-bs-toggle="tab" href="#product_images" role="tab" aria-selected="false">
                                                                        <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                                        <span class="d-none d-sm-block"> Images</span>    
                                                                    </a>
                                                                </li>
                                                            </ul>
                            
                                                                <!-- Tab panes -->
                                                                <div class="tab-content p-3 text-muted">
                                                                    <div class="tab-pane active" id="home" role="tabpanel">
                                                                        

                                                                        {{-- START TAB 1 CONTENT--}}

                                                                        <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Select Product Category</label>
                                                                                
                                                                                @error('product_category_id') 
                                                                                    <small class="text-danger"> {{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                            <div class="col-md-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Select Product Brand</label>
                                                                            
                                                                                @error('brand') 
                                                                                    <small class="text-danger"> {{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Product Name</label>
                                                                                <input type="text" class="form-control" id="validationCustom01"  name="name" placeholder="Enter product name" value="{{ $product->name}}" >
                                                                                @error('name') 
                                                                                    <small class="text-danger"> {{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Slug</label>
                                                                                <input type="text" class="form-control" id="validationCustom01"  name="slug" placeholder="Enter slug" value="{{ $product->slug}}" >
                                                                                @error('slug') 
                                                                                    <small class="text-danger"> {{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Small Description</label>
                                                                                <textarea class="form-control" name="small_description" id="exampleFormControlTextarea5"
                                                                                    placeholder="Enter Small Description" rows="3">{{ $product->small_description}}</textarea>
                                                                            @error('small_description') 
                                                                                    <small class="text-danger"> {{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Description</label>
                                                                                <textarea class="form-control" name="description" id="exampleFormControlTextarea5"
                                                                                    placeholder="Enter  Description" rows="3">{{ $product->description}}</textarea>
                                                                                @error('description') 
                                                                                    <small class="text-danger"> {{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        




                                                                    </div>


                                                                        {{-- END TAB 1  CONTENT--}}

                                                                    </div>

                                                                    {{--    SEO TAB --}}
                                                                    <div class="tab-pane" id="seo" role="tabpanel">
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Meta Title</label>
                                                                                <input type="text" class="form-control" id="validationCustom01"  name="meta_title" placeholder="Enter Title" value="{{ $product->meta_title }}" >
                                                                                @error('meta_title') 
                                                                                    <small class="text-danger"> {{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Meta Keywords</label>
                                                                                <textarea class="form-control" name="meta_keywords" id="exampleFormControlTextarea5"
                                                                                    placeholder="Enter Meta Keywords" rows="3">{{ $product->meta_keywords}}</textarea>
                                                                                @error('meta_keywords') 
                                                                                    <small class="text-danger"> {{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Meta Description</label>
                                                                                <textarea class="form-control" name="meta_description" id="exampleFormControlTextarea5"
                                                                                    placeholder="Enter Meta Description" rows="3">{{ $product->meta_description}}</textarea>
                                                                                @error('meta_description') 
                                                                                    <small class="text-danger"> {{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>



                                                                    </div>

                                                                    {{-- PRODUCT DETAILS --}}
                                                                    <div class="tab-pane" id="details" role="tabpanel">
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Original Price</label>
                                                                                <input type="text" class="form-control" id="validationCustom01"  name="original_price" placeholder="Enter Title" value="{{ $product->original_price}}" >
                                                                                @error('original_price') 
                                                                                    <small class="text-danger"> {{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Selling Price</label>
                                                                                <input type="text" class="form-control" id="validationCustom01"  name="selling_price" placeholder="Enter Title" value="{{ $product->selling_price}}" >
                                                                                @error('selling_price') 
                                                                                    <small class="text-danger"> {{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Quantity</label>
                                                                                <input type="text" class="form-control" id="validationCustom01"  name="quantity" placeholder="Enter Title" value="{{ $product->quantity}}" >
                                                                                @error('quantity') 
                                                                                    <small class="text-danger"> {{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Trending</label>
                                                                                <input type="checkbox"    name="trending" >
                                                                                @error('trending') 
                                                                                    <small class="text-danger"> {{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Status</label>
                                                                                <input type="checkbox"    name="status" >
                                                                                @error('status') 
                                                                                    <small class="text-danger"> {{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>





                                                                    </div>

                                                                    {{-- PRODUCT IMAGES TAB --}}
                                                                    <div class="tab-pane" id="product_images" role="tabpanel">
                                                                        
                                                                      <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="validationCustom01">image</label>
                                                                            <input type="file" class="form-control" id="validationCustom01"  name="image"  value="" >
                                                                            @if ($product->image)
                                                                                <img src={{ asset('uploads/products/'.$product->image) }}   width="60px" height="60px" />
                                                                            @else
                                                                                <span class="badge bg-soft-danger text-danger" style="padding:10px;">No Photo</span>
                                                                            @endif

                                                                        @error('image') 
                                                                                <small class="text-danger"> {{ $message }}</small>
                                                                        @enderror
                                                                        </div>
                                                                    </div>

                                                                    </div>
                                                                </div>
                                                    
                                                                <!-- Editor -->
                                                                <button class="btn btn-primary" type="submit">Update Product</button>
                                                    </form>
                                                </div>
                                                
                                            </div>
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
