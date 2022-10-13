@extends('backend.layouts_backend.master')
@section('title')
    Add Course
@endsection
@section('content')
    <!-- Main content dashboard  -->
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Courses</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Projects</li>
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
                            <h4 class="card-title">Add Course </h4>
                            <!-- <p class="card-title-desc">Add Category</p> -->
                        </div>
                        <div class="card-body">
                            <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{-- row --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom01">School Category</label>
                                            <select name="course_school_category" class="form-select">
                                                <option value="">Select </option>
                                                <option value="Paramedical">International paramedical institute</option>
                                                <option value="Nursing">International school of nursing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Course Name</label>
                                            <input type="text" class="form-control" name="course_name"
                                                id="validationCustom02" placeholder="Enter course name" value=""
                                                required>
                                        </div>
                                    </div>
                                </div>
                                {{-- row --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom01">Course Level</label>
                                            <select name="course_level" class="form-select">
                                                <option value="">Select </option>
                                                <option value="certificate">Certificate</option>
                                                <option value="diploma">Diploma</option>
                                                <option value="barchelors">Barchelors</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Course Duration</label>
                                            <input type="text" class="form-control" name="course_years"
                                                id="validationCustom02" placeholder="Enter Course Duration" value=""
                                                required>
                                        </div>
                                    </div>
                                </div>
                                {{-- row --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom05">Photo</label>
                                            <input type="file" class="form-control" name="course_photo"
                                                id="validationCustom05" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Price range</label>
                                            <input type="text" class="form-control" name="course_price_range"
                                                id="validationCustom02" placeholder="Enter range i.e (1000000 - 1200000)"
                                                value="" required>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    {{-- document 1 --}}
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom05">Add Requirements Document</label>
                                            <input type="file" class="form-control" name="requirements_document_one"
                                                id="validationCustom05" placeholder="" >
                                        </div>
                                    </div>
                                   
                                
                                </div>

                                {{-- document 2 --}}
                                 <div class="row">
                                    {{-- document 1 --}}
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom05">Add Additional Document</label>
                                            <input type="file" class="form-control" name="requirements_document_two"
                                                 placeholder="" >
                                        </div>
                                    </div>
                                   
                                
                                </div>

                                {{-- document 3 --}}
                                 <div class="row">
                                    {{-- document 1 --}}
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom05">Add Additional Document</label>
                                            <input type="file" class="form-control" name="requirements_document_three"
                                                id="validationCustom05" placeholder="" >
                                        </div>
                                    </div>
                                   
                                
                                </div>

                                {{-- documents --}}
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" name="description" id="exampleFormControlTextarea5"
                                            placeholder="Enter course Description" rows="3"></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Add Course</button>
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
