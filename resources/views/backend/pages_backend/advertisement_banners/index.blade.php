@extends('backend.layouts_backend.master')

@section('title')
Advertisement Banners
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
                        <h5 class="card-title">Banners <span
                                class="text-muted fw-normal ms-2">({{ $count_banners }})</span></h5>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

                        <div>
                            <a href="/advertisement_banners/create" class="btn bg-primary text-light"><i class="bx bx-plus me-1"></i> Add
                                Banner</a>
                        </div>


                    </div>

                </div>
            </div>
            <!-- end row -->



            <!-- FETCH FEEDBACKS -->
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
                            <th scope="col">#ID</th>
                            <th scope="col">Link</th>
                            <th scope="col">Photo</th>


                            <th style="width: 150px; min-width: 80px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($banners as $banner)
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck11">
                                        <label class="form-check-label" for="contacusercheck11"></label>
                                    </div>
                                </th>
                                <td>{{ $banner->id }}</td>


                                <td>{{ $banner->link }}</td>
                                <td>

                                    @if ($banner->photo)
                                        <a href="{!! asset($banner->photo) !!}" target="_blank">
                                            <img class="img-thumbnail avatar-sm rounded-circle me-2" class="user-img"
                                                style="width: 100px; height:100px;"
                                                onerror="if (this.src != '{{ asset('assets/backend_assets/assets/images/users/avatar-2.jpg') }}') this.src = '{{ asset('assets/backend_assets/assets/images/users/avatar-2.jpg') }}';"
                                                src="{{ asset($banner->photo) }}" alt="preview"
                                                style="height:120px !important; width:80px !important; margin-left:20px;">
                                        </a>
                                    @else
                                        <p class="text-danger">No Photo</p>
                                    @endif


                                </td>



                                <td colspan="6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $banner->id }}"
                                                data-bs-whatever="@getbootstrap"><i class=" far fa-eye  "></i></button>
                                        </div>

                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editPhotoOrder{{ $banner->id }}"
                                                data-bs-whatever="@getbootstrap"><i class="fas fa-pencil-alt "></i></button>

                                        </div>

                                        <!-- UPDATE -->
                                        <div class="col-md-4">
                                            <form action="{{ route('advertisement_banners.update', $banner->id) }}" method="post">
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
                            <div class="modal fade" id="exampleModal{{ $banner->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Banner    Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>



                                        <div class="modal-body">

                                            <img src="{{ asset($banner->photo) }}"
                                                style="width: 100%; height:60%;">
                                            <hr>
                                            <p>Link : {{ $banner->link }}</p>



                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                            </button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editPhotoOrder{{ $banner->id }}"
                                                data-bs-whatever="@getbootstrap">Edit Slide</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF VIEW DETAILS MODEL -->




                            <!-- edit   DETAILS MODEL -->
                            <div class="modal fade" id="editPhotoOrder{{ $banner->id }}" tabindex="-1"
                                aria-labelledby="editPhotoOrderLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Banner Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">


                                            <!-- form update Photo menu items -->

                                            <form action="{{ route('advertisement_banners.update', $banner->id) }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom02">Link</label>
                                                            <input type="text" class="form-control"  name="link" id="validationCustom02" placeholder="Enter Link" value="{{ $banner->link}}" >
                                                            @error('link')
                                                            <small class="text-danger"> {{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                </div>



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


                                                    <button class="btn btn-primary" type="submit">Update Banner</button>


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
