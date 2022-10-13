@extends('backend.layouts_backend.master')

@section('title')
    Add Post
@endsection

@section('content')
    <!-- Main content dashboard  -->
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">posts</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Posts</li>
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
                            <h4 class="card-title">Add post </h4>
                            <!-- <p class="card-title-desc">Add Category</p> -->
                        </div>
                        <div class="card-body">
                            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom01">Category</label>
                                            <select name="post_category_id" class="form-select">
                                                @foreach ($post_categories as $post_category)
                                                    <option value="{{ $post_category->id }}">
                                                        {{ $post_category->post_category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">post Name</label>
                                            <input type="text" class="form-control" name="post_title"
                                                id="validationCustom02" placeholder="Enter Title" value="" required>

                                        </div>
                                    </div>

                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom05">Photo</label>
                                            <input type="file" class="form-control" name="post_photo"
                                                id="validationCustom05" placeholder="" required>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Created By</label>
                                           <input type="text" class="form-control"  name="post_created_by" id="validationCustom02" disabled placeholder="Created By" value="{{ $loggedinUser }}" >

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" name="post_description" id="exampleFormControlTextarea5"
                                            placeholder="Enter Category Description" rows="3"></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Add post</button>
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
