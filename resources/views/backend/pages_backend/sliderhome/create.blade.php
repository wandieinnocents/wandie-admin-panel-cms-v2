@extends('backend.layouts_backend.master')

@section('title')
Slider Home
@endsection

@section('content')

<!-- Main content dashboard  -->
<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Slider</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Slider</li>
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
                                        <h4 class="card-title">Add Slide </h4>
                                        <!-- <p class="card-title-desc">Add Category</p> -->
                                    </div>
                                    <div class="card-body">
                                    <form  action="{{ route('home_sliders.store') }}"  method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Title</label>
                                                        <input type="text" class="form-control"  name="title" id="validationCustom02" placeholder="Enter title" value="" >
                                                        @error('title')
                                                        <small class="text-danger"> {{ $message }}</small>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Sub Title</label>
                                                        <input type="text" class="form-control"  name="subtitle" id="validationCustom02" placeholder="Enter subtitle" value="" >
                                                        @error('subtitle')
                                                        <small class="text-danger"> {{ $message }}</small>
                                                        @enderror

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                 <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom05">Photo (570px × 480px)</label>
                                                        <input type="file" class="form-control" name="photo" id="validationCustom05" placeholder="" >
                                                        @error('photo')
                                                        <small class="text-danger"> {{ $message }}</small>
                                                        @enderror

                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" >Description</label>
                                                        <textarea class="form-control" name="description" id="exampleFormControlTextarea5" placeholder="Enter Slider Description" rows="3"></textarea>
                                                        @error('description')
                                                        <small class="text-danger"> {{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom02">Link 1</label>
                                                            <input type="text" class="form-control"  name="link_one" id="validationCustom02" placeholder="Enter link - Optional" value="" >
                                                            @error('link_one')
                                                            <small class="text-danger"> {{ $message }}</small>
                                                            @enderror

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom02">Link 2</label>
                                                            <input type="text" class="form-control"  name="link_two" id="validationCustom02" placeholder="Enter link - Optional" value="" >
                                                            @error('link_two')
                                                            <small class="text-danger"> {{ $message }}</small>
                                                            @enderror

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom02">Link 3</label>
                                                            <input type="text" class="form-control"  name="link_three" id="validationCustom02" placeholder="Enter link - Optional" value="" >
                                                            @error('link_three')
                                                            <small class="text-danger"> {{ $message }}</small>
                                                            @enderror

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom02">Link 4</label>
                                                            <input type="text" class="form-control"  name="link_four" id="validationCustom02" placeholder="Enter link - Optional" value="" >
                                                            @error('link_four')
                                                            <small class="text-danger"> {{ $message }}</small>
                                                            @enderror

                                                        </div>
                                                    </div>
                                                </div>









                                            <button class="btn btn-primary" type="submit">Add Slide</button>
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
