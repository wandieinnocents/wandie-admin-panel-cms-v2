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
                                    <h4 class="mb-sm-0 font-size-18">Add Product Categories</h4>

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
                        <div class="row">
                        <div class="col-xl-3">
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Add Product  Category</h4>
                                        <!-- <p class="card-title-desc">Add Category</p> -->
                                    </div>
                                    <div class="card-body">
                                    <form  action="{{ route('product_categories.store') }}"  method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Name</label>
                                                        <input type="text" class="form-control" id="validationCustom01"  name="name" placeholder="Ennter Category Name" value="">
                                                         @error('name') 
                                                            <small class="text-danger"> {{ $message }}</small>
                                                          @enderror
                                                        
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Slug</label>
                                                        <input type="text" class="form-control" id="validationCustom01"  name="slug" placeholder="Ennter slug" value="" >
                                                         @error('slug') 
                                                            <small class="text-danger"> {{ $message }}</small>
                                                          @enderror
                                                    </div>
                                                </div>




                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" >Description</label>
                                                        <textarea class="form-control"  name="description" placeholder="Enter Category Description" rows="3"></textarea>
                                                         @error('description') 
                                                            <small class="text-danger"> {{ $message }}</small>
                                                          @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">image</label>
                                                        <input type="file" class="form-control" id="validationCustom01"  name="image"  value="" >
                                                       @error('image') 
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


                                              
                                                <h3>SEO TAGS </H3>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Meta title</label>
                                                        <input type="text" class="form-control" id="validationCustom01"  name="meta_title" placeholder="Ennter Category Name" value="" >
                                                         @error('meta_title') 
                                                            <small class="text-danger"> {{ $message }}</small>
                                                          @enderror
                                                    </div>
                                                </div>

                                                
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" >Meta Keywords</label>
                                                        <textarea class="form-control"  name="meta_keywords" placeholder="Enter Category Description" rows="3"></textarea>
                                                         @error('meta_keywords') 
                                                            <small class="text-danger"> {{ $message }}</small>
                                                          @enderror
                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" >Meta Description</label>
                                                        <textarea class="form-control"  name="meta_description" placeholder="Enter Category Description" rows="3"></textarea>
                                                         @error('meta_description') 
                                                            <small class="text-danger"> {{ $message }}</small>
                                                          @enderror
                                                    </div>
                                                </div>

                                                
                                            </div>

                                            <!-- Editor -->
                                            <button class="btn btn-primary" type="submit">Add Product Category</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div> <!-- end col -->
        
                        </div>
                        <!-- end row -->

                        <div class="col-xl-3">
                        </div>
                    </div>
                    <!-- container-fluid -->
                </div>

@endsection