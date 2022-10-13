@extends('backend.layouts_backend.master')
@section('title')
    Volunteers
@endsection
@section('content')
    <!-- Main content dashboard  -->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h5 class="card-title">Voluntters ({{ $count_volunteers }})</h5>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Volunteers</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <!-- FETCH VOLUNTEERS -->
            <div class="table-responsive mb-4">
                <table class="table align-middle datatable dt-responsive table-check nowrap"
                    style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">DOB</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Education</th>
                            <th scope="col">Reason to Join</th>
                            <th style="width: 150px; min-width: 80px;">Action</th>
                        </tr>
                    </thead>
                    <!-- Fetch data from database -->
                    @foreach ($volunteers as $volunteer)
                        <tbody>
                            <tr>
                                <td>{{ $volunteer->id }}</td>
                                <td>
                                    <a href="#" class="text-body">{{ $volunteer->volunteer_name }}</a>
                                </td>
                                <td>{{ $volunteer->volunteer_dob }}</td>
                                <td>{{ $volunteer->volunteer_address }}</td>
                                <td>{{ $volunteer->volunteer_phone }}</td>
                                <td>{{ $volunteer->volunteer_email }}</td>
                                <td>{{ $volunteer->volunteer_level_of_education }}</td>
                                <td>{!! Str::limit($volunteer->volunteer_reason_to_join, 30, ' ...') !!}</td>
                                <td colspan="6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $volunteer->id }}"
                                                data-bs-whatever="@getbootstrap"><i class=" far fa-eye  "></i></button>
                                        </div>
                                        <!-- <div class="col-md-4">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editFoodOrder" data-bs-whatever="@getbootstrap"><i class="fas fa-pencil-alt "></i></button>
                                                </div>  -->
                                        <!-- delete food menu -->
                                        <div class="col-md-4">
                                            <form action="{{ route('volunteers.destroy', $volunteer->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a> <button class="btn btn-danger shadow btn-xs sharp"> <span
                                                            class="fa fa-trash"> </button> </a>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <!-- VIEW DETAILS MODEL -->
                        <div class="modal fade" id="exampleModal{{ $volunteer->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Volunteer Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <p> @if (($volunteer->volunteer_photo))
                                                <a href="{!! asset($volunteer->volunteer_photo) !!}" target="_blank">
                                                    <img  
                                                        onerror="if (this.src != '{{ asset('assets/backend_assets/assets/images/users/avatar-2.jpg') }}') this.src = '{{ asset('assets/backend_assets/assets/images/users/avatar-2.jpg') }}';"
                                                        src="{{ asset($volunteer->volunteer_photo) }}" alt="preview"
                                                        >
                                                </a>

                                        @else
                                            <p class="text-danger">No Photo</p>
                                        @endif</p>
                                        <hr>
                                        <p>Full Name : {{ $volunteer->volunteer_name }}</p>
                                        <hr>
                                        <p>Date of birth : {{ $volunteer->volunteer_dob }}</p>
                                        <hr>
                                        <p>Address : {{ $volunteer->volunteer_address }}</p>
                                        <hr>
                                        <p>Phone : {{ $volunteer->volunteer_phone }}</p>
                                        <hr>
                                         <p>Email : {{ $volunteer->volunteer_email }}</p>
                                        <hr>
                                         <p>Education Level : {{ $volunteer->volunteer_level_of_education }}</p>
                                        <hr>
                                         <p>Phone : {{ $volunteer->volunteer_phone }}</p>
                                        <hr>
                                        <p>Description : {{ $volunteer->volunteer_reason_to_join }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END OF VIEW DETAILS MODEL -->
                    @endforeach
                    <!-- End fetch data from DB -->
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
