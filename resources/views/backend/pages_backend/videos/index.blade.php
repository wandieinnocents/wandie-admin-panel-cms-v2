@extends('backend.layouts_backend.master')
@section('title')
    Videos
@endsection
@section('extra_styles')
    <style>
        body.modal-open {
            padding-right: 0 !important;
            overflow-y: scroll;
        }
    </style>
@endsection
@section('content')
    <!-- Main content dashboard  -->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="mb-3">
                        <h5 class="card-title">Photos <span class="text-muted fw-normal ms-2">({{ $count_videos }})</span>
                        </h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                        <div>
                            <a href="/video_galleries/create" class="btn bg-primary text-light"><i
                                    class="bx bx-plus me-1"></i> Add
                                Video</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <!-- FETCH FEEDBACKS -->
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
                            <th scope="col">#ID</th>
                            <th scope="col">Video Title</th>
                            <th scope="col">Video URL</th>
                            <th scope="col">Video Thumbnail</th>
                            <th scope="col">Description</th>
                            <th style="width: 150px; min-width: 80px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($videos as $video)
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck11">
                                        <label class="form-check-label" for="contacusercheck11"></label>
                                    </div>
                                </th>
                                <td>{{ $video->id }}</td>
                                <td>{{ $video->video_title }}</td>
                                <td>{{ $video->video_url }}</td>
                                <td>
                                    <iframe width="130" height="175" src=" {{ $video->video_url }}"
                                        allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen"
                                        msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen"
                                        webkitallowfullscreen="webkitallowfullscreen">
                                    </iframe>
                                    <!-- <img src="assets/backend_assets/assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded-circle me-2">  -->
                                </td>
                                <td>{{ $video->video_description }}</td>
                                <td colspan="6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $video->id }}"
                                                data-bs-whatever="@getbootstrap"><i class=" far fa-eye  "></i></button>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editPhotoOrder{{ $video->id }}"
                                                data-bs-whatever="@getbootstrap"><i class="fas fa-pencil-alt "></i></button>
                                        </div>
                                        <!-- UPDATE -->
                                        <div class="col-md-4">
                                            <form action="{{ route('video_galleries.update', $video->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a> <button class="btn btn-danger shadow btn-xs sharp"> <span
                                                            class="fa fa-trash"> </button> </a>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- VIEW DETAILS MODEL -->
                            <div class="modal fade" id="exampleModal{{ $video->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Product Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{-- <iframe width="420" height="315"
                                                src="https://www.youtube.com/embed/il_t1WVLNxk?autoplay=1">
                                            </iframe> --}}
                                            <iframe width="420" height="315" src=" {{ $video->video_url }}"
                                                allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen"
                                                msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen"
                                                webkitallowfullscreen="webkitallowfullscreen">
                                            </iframe>
                                            <hr>
                                            <p>Video Title : {{ $video->video_title }}</p>
                                            <hr>
                                            <p>Video Link : {{ $video->video_url }}</p>
                                            <hr>
                                            <p>Description : {{ $video->video_description }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                            </button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editPhotoOrder{{ $video->id }}"
                                                data-bs-whatever="@getbootstrap">Edit Video</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF VIEW DETAILS MODEL -->
                            <!-- edit  Photo MENU DETAILS MODEL -->
                            <div class="modal fade" id="editPhotoOrder{{ $video->id }}" tabindex="-1"
                                aria-labelledby="editPhotoOrderLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Video Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- form update Photo menu items -->
                                            <form action="{{ route('video_galleries.update', $video->id) }}"
                                                method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Video
                                                        Title:</label>
                                                    <input type="text" class="form-control" name="video_title"
                                                        value="{{ $video->video_title }}" id="recipient-name">
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom05">Photo</label>
                                                        <input type="file" class="form-control" name="video_thumbnail"
                                                            value="{{ $video->video_thumbnail }}" placeholder="Zip">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom05">Video
                                                            URL</label>
                                                        <input type="text" class="form-control" name="video_url"
                                                            value="{{ $video->video_url }}" id="recipient-name">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Description:</label>
                                                    <textarea class="form-control" name="video_description" value="" id="message-text">{{ $video->video_description }}</textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary" type="submit">Update Video</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF edit DETAILS MODEL -->
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
