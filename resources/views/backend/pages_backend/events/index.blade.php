@extends('backend.layouts_backend.master')

@section('title')
    Events
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
                        <h5 class="card-title">events <span class="text-muted fw-normal ms-2">({{ $count_events }})</span>
                        </h5>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

                        <div>
                            <a href="{{ route('events.create') }}" class="btn bg-primary text-light"><i
                                    class="bx bx-plus me-1"></i> Add event</a>
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
                            <th scope="col">Event Name</th>
                            <th scope="col">Photo</th>

                            <th scope="col">Description</th>
                            <th style="width: 150px; min-width: 80px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($events as $event)
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck11">
                                        <label class="form-check-label" for="contacusercheck11"></label>
                                    </div>
                                </th>
                                <td>{{ $event->id }}</td>


                                <td>{{ $event->event_name }}</td>
                                <td>

                                    @if ($event->event_photo)
                                        <a href="{!! asset($event->event_photo) !!}" target="_blank">
                                            <img class="img-thumbnail avatar-sm rounded-circle me-2" class="user-img"
                                                style="width: 100px; height:100px;"
                                                onerror="if (this.src != '{{ asset('assets/backend_assets/assets/images/users/avatar-2.jpg') }}') this.src = '{{ asset('assets/backend_assets/assets/images/users/avatar-2.jpg') }}';"
                                                src="{{ asset($event->event_photo) }}" alt="preview"
                                                style="height:120px !important; width:80px !important; margin-left:20px;">
                                        </a>
                                    @else
                                        <p class="text-danger">No Photo</p>
                                    @endif




                                    <!-- <img src="assets/backend_assets/assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded-circle me-2">  -->
                                </td>


                                <td>{{ $event->event_description }}</td>
                                <td colspan="6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $event->id }}"
                                                data-bs-whatever="@getbootstrap"><i class=" far fa-eye  "></i></button>
                                        </div>

                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editeventOrder{{ $event->id }}"
                                                data-bs-whatever="@getbootstrap"><i class="fas fa-pencil-alt "></i></button>

                                        </div>

                                        <!-- delete event menu -->
                                        <div class="col-md-4">
                                            <form action="{{ route('events.destroy', $event->id) }}" method="post">
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
                            <div class="modal fade" id="exampleModal{{ $event->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">event Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>



                                        <div class="modal-body">

                                            <img src="{{ asset($event->event_photo) }} " style="width: 100%; height:60%;">
                                            <hr>
                                            <p>event : {{ $event->event_name }}</p>
                                            <hr>
                                            <p>Location : {{ $event->event_location }}</p>
                                            <hr>
                                            <p>start date : {{ $event->event_start_date }}</p>
                                            <hr>
                                            <p>end date : {{ $event->event_end_date }}</p>
                                            <hr>



                                            <p>Description : {{ $event->event_description }}</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                            </button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editeventOrder{{ $event->id }}"
                                                data-bs-whatever="@getbootstrap">Edit event</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF VIEW DETAILS MODEL -->




                            <!-- edit  event MENU DETAILS MODEL -->
                            <div class="modal fade" id="editeventOrder{{ $event->id }}" tabindex="-1"
                                aria-labelledby="editeventOrderLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit event Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">


                                            <!-- form update event menu items -->

                                            <form action="{{ route('events.update', $event->id) }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom02">Event
                                                                Name</label>
                                                            <input type="text" class="form-control" name="event_name"
                                                                id="validationCustom02" placeholder="Enter Event name"
                                                               value="{{  $event->event_name }}" >

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom02">Event
                                                                Location</label>
                                                            <input type="text" class="form-control"
                                                                name="event_location" id="validationCustom02"
                                                                value="{{  $event->event_location }}"
                                                                placeholder="Enter event location" value=""
                                                                >

                                                        </div>
                                                    </div>


                                                </div>
                                                {{-- row --}}
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom02">Event Start
                                                                date</label>
                                                            <input type="date" class="form-control"
                                                                name="event_start_date" id="validationCustom02"
                                                                value="{{  $event->event_start_date }}"
                                                                placeholder="Enter Event name" value="" >

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom02">Event End
                                                                date</label>
                                                            <input type="date" class="form-control"
                                                                name="event_end_date" id="validationCustom02"
                                                                value="{{  $event->event_end_date }}"
                                                                placeholder="Enter event location" value="">

                                                        </div>
                                                    </div>


                                                </div>
                                                {{-- row --}}
                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom05">Event
                                                                Photo</label>
                                                            <input type="file" class="form-control" name="event_photo"
                                                            value="{{  $event->event_photo }}"
                                                                id="validationCustom05" placeholder="" >

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Description</label>
                                                        <textarea class="form-control" name="event_description" id="exampleFormControlTextarea5"
                                                            placeholder="Enter Event Description" rows="3">{{ $event->event_description }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <!-- <button  type="submit" class="btn btn-primary">Submit</button> -->
                                                    <button class="btn btn-primary" type="submit">Update event</button>
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
