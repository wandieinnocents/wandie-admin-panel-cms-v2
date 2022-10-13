@extends('backend.layouts_backend.master')

@section('title')
    Courses
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
                        <h5 class="card-title">Courses <span class="text-muted fw-normal ms-2">({{ $count_courses }})</span>
                        </h5>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

                        <div>
                            <a href="{{ route('courses.create') }}" class="btn bg-primary text-light"><i
                                    class="bx bx-plus me-1"></i> Add course</a>
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
                            <th scope="col">Category</th>
                            <th scope="col">Name</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Doc1</th>
                            <th scope="col">Doc2</th>
                            <th scope="col">Doc3</th>

                            <th scope="col">Description</th>
                            <th style="width: 150px; min-width: 80px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($courses as $course)
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck11">
                                        <label class="form-check-label" for="contacusercheck11"></label>
                                    </div>
                                </th>
                                <td>{{ $course->id }}</td>

                                <td>
                                    <a href="#" class="text-body">{{ $course->course_school_category }}</a>
                                </td>
                                <td>{{ $course->course_name }}</td>
                                <td>

                                    @if ($course->course_photo)
                                        <a href="{!! asset($course->course_photo) !!}" target="_blank">
                                            <img class="img-thumbnail avatar-sm rounded-circle me-2" class="user-img"
                                                style="width: 100px; height:100px;"
                                                onerror="if (this.src != '{{ asset('assets/backend_assets/assets/images/users/user.png') }}') this.src = '{{ asset('assets/backend_assets/assets/images/users/user.png') }}';"
                                                src="{{ asset($course->course_photo) }}" alt="preview"
                                                style="height:120px !important; width:80px !important; margin-left:20px;">
                                        </a>
                                    @else
                                        <p class="text-danger">No Photo</p>
                                    @endif


                                    <!-- <img src="assets/backend_assets/assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded-circle me-2">  -->
                                </td>
                                {{-- document 1 --}}

                                <td>

                                    <!-- DOWNLOAD FILE -->
                                     @if ($course->requirements_document_one)
                                    <a href="{!! asset($course->requirements_document_one) !!}" target="_blank">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-whatever="@getbootstrap">
                                            <i class="fas fa-download "></i>
                                        </button>
                                    </a>
                                    @else
                                        <p class="text-danger">No Document</p>
                                    @endif

                                </td>
                                <td>

                                <!-- DOWNLOAD FILE -->
                                    @if ($course->requirements_document_two)
                                <a href="{!! asset($course->requirements_document_two) !!}" target="_blank">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-whatever="@getbootstrap">
                                        <i class="fas fa-download "></i>
                                    </button>
                                </a>
                                @else
                                    <p class="text-danger">No Document</p>
                                @endif
                                
                                </td>
                                <td>

                                    <!-- DOWNLOAD FILE -->
                                     @if ($course->requirements_document_three)
                                    <a href="{!! asset($course->requirements_document_three) !!}" target="_blank">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-whatever="@getbootstrap">
                                            <i class="fas fa-download "></i>
                                        </button>
                                    </a>
                                    @else
                                        <p class="text-danger">No Document</p>
                                    @endif
                                </td>


                                <td>{{ $course->description }}</td>
                                <td colspan="6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $course->id }}"
                                                data-bs-whatever="@getbootstrap"><i class=" far fa-eye  "></i></button>
                                        </div>

                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editcourseOrder{{ $course->id }}"
                                                data-bs-whatever="@getbootstrap"><i class="fas fa-pencil-alt "></i></button>

                                        </div>

                                        <!-- delete course menu -->
                                        <div class="col-md-4">
                                            <form action="{{ route('courses.destroy', $course->id) }}" method="post">
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
                            <div class="modal fade" id="exampleModal{{ $course->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">course Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>



                                        <div class="modal-body">

                                            <img src="{{ asset($course->course_photo) }} "
                                                style="width: 100%; height:60%;">
                                            <hr>
                                            <p>School : {{ $course->course_school_category }}</p>
                                            <hr>
                                            <p>Course name : {{ $course->course_name }} </p>
                                            <hr>
                                            <p>Course level : {{ $course->course_level }} </p>
                                            <hr>
                                            <p>Course price : {{ $course->course_price_range }} </p>
                                            <hr>
                                            <p>Course years : {{ $course->course_years }} </p>
                                            <hr>


                                            <p> Course Description : {{ $course->description }}</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                            </button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editcourseOrder{{ $course->id }}"
                                                data-bs-whatever="@getbootstrap">Edit course</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF VIEW DETAILS MODEL -->




                            <!-- edit  Course MENU DETAILS MODEL -->
                            <div class="modal fade" id="editcourseOrder{{ $course->id }}" tabindex="-1"
                                aria-labelledby="editcourseOrderLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit course Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">


                                            <!-- form update course menu items -->

                                            <form action="{{ route('courses.update', $course->id) }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom01">School
                                                                Category</label>
                                                            <select name="course_school_category" class="form-select">
                                                                <option value="unknown">Select </option>
                                                                <option value="Paramedical">International paramedical
                                                                    institute</option>
                                                                <option value="Nursing">International school of nursing
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom02">Course
                                                                Name</label>
                                                            <input type="text" class="form-control" name="course_name"
                                                                value="{{ $course->course_name }}"
                                                                id="validationCustom02" placeholder="Enter course name"
                                                                value="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- row --}}
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom01">Course
                                                                Level</label>
                                                            <select name="course_level" class="form-select">
                                                                {{-- <option value="">Select </option> --}}
                                                                <option value="certificate">Certificate</option>
                                                                <option value="diploma">Diploma</option>
                                                                <option value="barchelors">Barchelors</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom02">Course
                                                                Duration</label>
                                                            <input type="text" class="form-control"
                                                                name="course_years" id="validationCustom02"
                                                                value="{{ $course->course_years }}"
                                                                placeholder="Enter Course Duration" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- row --}}
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="validationCustom05">Photo</label>
                                                            <input type="file" class="form-control"
                                                                name="course_photo" value="{{ $course->course_photo }}"
                                                                placeholder="">
                                                        </div>


                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom02">Price
                                                                range</label>
                                                            <input type="text" class="form-control"
                                                                name="course_price_range" id="validationCustom02"
                                                                value="{{ $course->course_price_range }}"
                                                                placeholder="Enter range i.e (1000000 - 1200000)"
                                                                value="" required>
                                                        </div>
                                                    </div>

                                                    {{-- document 2 --}}

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="validationCustom05">
                                                                    Add Additional Document</label>
                                                                <input type="file" class="form-control"
                                                                    name="requirements_document_two"
                                                                    id="validationCustom05" placeholder="">
                                                            </div>
                                                        </div>

                                                    </div>


                                                    {{-- document 2 --}}

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="validationCustom05">
                                                                    Add Additional Document</label>
                                                                <input type="file" class="form-control"
                                                                    name="requirements_document_two"
                                                                    id="validationCustom05" placeholder="">
                                                            </div>
                                                        </div>

                                                    </div>


                                                    {{-- document 2 --}}

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="validationCustom05">
                                                                    Add Additional Document</label>
                                                                <input type="file" class="form-control"
                                                                    name="requirements_document_two"
                                                                    id="validationCustom05" placeholder="">
                                                            </div>
                                                        </div>

                                                    </div>



                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Description</label>
                                                            <textarea class="form-control" name="description" id="exampleFormControlTextarea5"
                                                                placeholder="Enter course Description" rows="3">{{ $course->description }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-12">

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <!-- <button  type="submit" class="btn btn-primary">Submit</button> -->
                                                        <button class="btn btn-primary" type="submit">Update
                                                            course</button>
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
