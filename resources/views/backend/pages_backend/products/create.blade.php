@extends('backend.layouts_backend.master')

@section('title')

@endsection

@section('content')

<!-- Main content dashboard  -->
<div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Add Product Brand</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Categories</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <!-- Page content starts here -->
                         <br><br>
                        <div class="row">
                            <div class="col-xl-1">
                            </div>
                            <div class="col-xl-8">
                                <div class="card">
                                  
                                    <div class="card-body">
                                    <form  action="{{ route('products.store') }}"  method="POST" enctype="multipart/form-data">
                                            @csrf
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
                                                            <span class="d-none d-sm-block">Product SEO Tags</span>    
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link " data-bs-toggle="tab" href="#details" role="tab" aria-selected="true">
                                                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                            <span class="d-none d-sm-block">Product Details</span>    
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#product_images" role="tab" aria-selected="false">
                                                            <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                            <span class="d-none d-sm-block">Product Images</span>    
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
                                                                    <select name="product_category_id" class="form-select">
                                                                        @foreach ($product_categories as $product_category)
                                                                            <option value="{{ $product_category->id }}">
                                                                                {{ $product_category->name }}
                                                                                
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('product_category_id') 
                                                                        <small class="text-danger"> {{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                                <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="validationCustom01">Select Product Brand</label>
                                                                    <select name="brand" class="form-select">
                                                                        @foreach ($product_brands as $product_brand)
                                                                            <option value="{{ $product_brand->name }}">
                                                                                {{ $product_brand->name }}
                                                                                
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('brand') 
                                                                        <small class="text-danger"> {{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="validationCustom01">Product Name</label>
                                                                    <input type="text" class="form-control" id="validationCustom01"  name="name" placeholder="Enter product name" value="" >
                                                                    @error('name') 
                                                                        <small class="text-danger"> {{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="validationCustom01">Slug</label>
                                                                    <input type="text" class="form-control" id="validationCustom01"  name="slug" placeholder="Enter slug" value="" >
                                                                    @error('slug') 
                                                                        <small class="text-danger"> {{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>


                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Small Description</label>
                                                                    <textarea class="form-control" name="small_description" id="exampleFormControlTextarea5"
                                                                        placeholder="Enter Small Description" rows="3"></textarea>
                                                                @error('small_description') 
                                                                        <small class="text-danger"> {{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Description</label>
                                                                    <textarea class="form-control" name="description" id="exampleFormControlTextarea5"
                                                                        placeholder="Enter  Description" rows="3"></textarea>
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
                                                                    <input type="text" class="form-control" id="validationCustom01"  name="meta_title" placeholder="Enter Title" value="" >
                                                                    @error('meta_title') 
                                                                        <small class="text-danger"> {{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Meta Keywords</label>
                                                                    <textarea class="form-control" name="meta_keywords" id="exampleFormControlTextarea5"
                                                                        placeholder="Enter Meta Keywords" rows="3"></textarea>
                                                                    @error('meta_keywords') 
                                                                        <small class="text-danger"> {{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Meta Description</label>
                                                                    <textarea class="form-control" name="meta_description" id="exampleFormControlTextarea5"
                                                                        placeholder="Enter Meta Description" rows="3"></textarea>
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
                                                                    <input type="text" class="form-control" id="validationCustom01"  name="original_price" placeholder="Enter Title" value="" >
                                                                    @error('original_price') 
                                                                        <small class="text-danger"> {{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="validationCustom01">Selling Price</label>
                                                                    <input type="text" class="form-control" id="validationCustom01"  name="selling_price" placeholder="Enter Title" value="" >
                                                                    @error('selling_price') 
                                                                        <small class="text-danger"> {{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="validationCustom01">Quantity</label>
                                                                    <input type="text" class="form-control" id="validationCustom01"  name="quantity" placeholder="Enter Title" value="" >
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
                                                                <label class="form-label" for="validationCustom05">Upload Product Images</label>
                                                                <input type="file" multiple class="form-control" name="image" id="validationCustom05" placeholder="" >
                                                                
                                                            </div>
                                                        </div>

                                                        </div>
                                                    </div>
                                        
                                                    <!-- Editor -->
                                                    <button class="btn btn-primary" type="submit">Add Product</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div> <!-- end col -->
        
                        </div>
                        <!-- end row -->

                        <div class="col-xl-1">
                        </div>
                    </div>
                    <!-- container-fluid -->
                </div>

@endsection