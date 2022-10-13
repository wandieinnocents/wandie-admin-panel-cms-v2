@extends('backend.layouts_backend.master')

@section('title')
@endsection

@section('content')
    <!-- Main content dashboard  -->



    <div class="page-content">
        <div class="container-fluid">



            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="mb-3">
                        <h5 class="card-title">Photo Categories <span class="text-muted fw-normal ms-2">({{ $photo_categories }})</span></h5>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

                        <div>
                            <a href="{{ route('gallery_categories.create') }}" class="btn bg-primary text-light"><i
                                    class="bx bx-plus me-1"></i> Add Photo Category</a>
                        </div>


                    </div>

                </div>
            </div>
            <!-- end row -->

            <!-- FETCH DATA -->

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
                            <th scope="col">Description</th>
                            <th style="width: 150px; min-width: 80px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($gallery_categories as $gallery_category)
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck11">
                                        <label class="form-check-label" for="contacusercheck11"></label>
                                    </div>
                                </th>
                                <td>{{ $gallery_category->id }}</td>
                                <td>
                                    <a href="#" class="text-body">{{ $gallery_category->gallery_category_name }}</a>
                                </td>
                                <td>{{ $gallery_category->gallery_category_description }}</td>
                                <td colspan="6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#viewGalleryCategoryDetails{{ $gallery_category->id }}" data-bs-whatever="@getbootstrap"><i
                                                    class=" far fa-eye  "></i></button>
                                        </div>

                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editGalleryCategory{{ $gallery_category->id }}" data-bs-whatever="@getbootstrap"><i
                                                    class="fas fa-pencil-alt "></i></button>

                                        </div>

                                        <!-- DELETE -->
                                        <div class="col-md-4">
                                            <form action="{{ route('gallery_categories.update', $gallery_category->id) }}" method="post">
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
                            <div class="modal fade" id="viewGalleryCategoryDetails{{ $gallery_category->id }}" tabindex="-1"
                                aria-labelledby="viewGalleryCategoryDetailsLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewGalleryCategoryDetailsLabel">Gallery Category Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>



                                        <div class="modal-body">

                                            
                                            <p>Category Name : {{ $gallery_category->gallery_category_name }}</p>
                                            <hr>

                                            
                                            <p>Description : {{ $gallery_category->gallery_category_description }}</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                            </button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editGalleryCategory{{ $gallery_category->id }}"
                                                data-bs-whatever="@getbootstrap">Edit Category</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF VIEW DETAILS MODEL -->


                            {{-- UPDATE GALLERY CATEGORY --}}
                            <div class="modal fade" id="editGalleryCategory{{ $gallery_category->id }}" tabindex="-1"
                                aria-labelledby="editGalleryCategoryLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewGalleryCategoryDetailsLabel">Edit Category Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">


                                            <!-- UPDATE GALLERY CATEGORIES -->

                                            <form action="{{ route('gallery_categories.update', $gallery_category->id) }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                                    <input type="text" class="form-control" name="gallery_category_name"
                                                        value="{{ $gallery_category->gallery_category_name }}" id="recipient-name">
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Description:</label>
                                                    <textarea class="form-control" name="gallery_category_description" value="" id="message-text">{{ $gallery_category->gallery_category_description }}</textarea>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <!-- <button  type="submit" class="btn btn-primary">Submit</button> -->
                                                    <button class="btn btn-primary" type="submit">Update Category</button>
                                                </div>


                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            {{-- END UPDATE GALLERY CATEGORY --}}

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
