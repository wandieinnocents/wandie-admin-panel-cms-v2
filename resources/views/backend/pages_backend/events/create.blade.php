@extends('backend.layouts_backend.master')

@section('title')
    Add Event
@endsection

@section('content')
    <!-- Main content dashboard  -->
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Projects</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Events</li>
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
                            <h4 class="card-title">Add Event </h4>
                            <!-- <p class="card-title-desc">Add Category</p> -->
                        </div>
                        <div class="card-body">
                            <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                       <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Event Name</label>
                                            <input type="text" class="form-control" name="event_name"
                                                id="validationCustom02" placeholder="Enter Event name" value="" required>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Event Location</label>
                                            <input type="text" class="form-control" name="event_location"
                                                id="validationCustom02" placeholder="Enter event location" value="" required>

                                        </div>
                                    </div>


                                </div>
                                {{-- row --}}
                                  <div class="row">
                                    <div class="col-md-6">
                                       <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Event Start date</label>
                                            <input type="date" class="form-control" name="event_start_date"
                                                id="validationCustom02" placeholder="Enter Event name" value="" required>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Event End date</label>
                                            <input type="date" class="form-control" name="event_end_date"
                                                id="validationCustom02" placeholder="Enter event location" value="" >

                                        </div>
                                    </div>


                                </div>
                                {{-- row --}}
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom05">Event Photo</label>
                                            <input type="file" class="form-control" name="event_photo"
                                                id="validationCustom05" placeholder="" required>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" name="event_description" id="exampleFormControlTextarea5"
                                            placeholder="Enter Event Description" rows="3"></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Add Event</button>
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
