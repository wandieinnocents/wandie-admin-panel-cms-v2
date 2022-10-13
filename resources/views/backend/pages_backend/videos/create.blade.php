@extends('backend.layouts_backend.master')

@section('title')
    Add Video
@endsection

@section('content')
    <!-- Main content dashboard  -->
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Add Videos </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Videos</li>
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
                            <h4 class="card-title">Add Video </h4>
                            <!-- <p class="card-title-desc">Add Category</p> -->
                        </div>
                        <div class="card-body">
                            <form action="{{ route('video_galleries.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Title</label>
                                            <input type="text" class="form-control" name="video_title"
                                                id="validationCustom02" placeholder="Enter Video Title" value=""
                                                required>

                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom05">Photo Thumbnail</label>
                                            <input type="file" class="form-control" name="video_thumbnail"
                                                id="validationCustom05" placeholder="" required>

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Video Link</label>
                                            <input type="text" class="form-control" name="video_url"
                                                id="validationCustom02"
                                                placeholder="Format : http://www.youtube.com/embed/paste_video_id"
                                                value="http://www.youtube.com/embed/paste_video_id" required>

                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" name="video_description" id="exampleFormControlTextarea5"
                                            placeholder="Enter Video Description" rows="3" required></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Add Video</button>
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
