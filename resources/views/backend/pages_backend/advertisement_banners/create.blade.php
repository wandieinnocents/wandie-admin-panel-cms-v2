@extends('backend.layouts_backend.master')

@section('title')
Adverts
@endsection

@section('content')

<!-- Main content dashboard  -->
<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Advert Banner</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Advert Banner</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- Page content starts here -->



                        <!-- Form -->


                        <div class="row">
                        <div class="col-xl-3">

                            </div>

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Add Banner </h4>
                                        <!-- <p class="card-title-desc">Add Category</p> -->
                                    </div>
                                    <div class="card-body">
                                    <form  action="{{ route('advertisement_banners.store') }}"  method="POST" enctype="multipart/form-data">
                                            @csrf



                                            <div class="row">
                                                 <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom05">Photo</label>
                                                        <input type="file" class="form-control" name="photo" id="validationCustom05" placeholder="" >
                                                        @error('photo')
                                                        <small class="text-danger"> {{ $message }}</small>
                                                        @enderror

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Banner Link </label>
                                                        <input type="text" class="form-control"  name="link" id="validationCustom02" placeholder="Enter Banner Link (https://wanran.com/productdetails)" value="" >
                                                        @error('link')
                                                        <small class="text-danger"> {{ $message }}</small>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>




                                            <button class="btn btn-primary" type="submit">Add Banner</button>
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
