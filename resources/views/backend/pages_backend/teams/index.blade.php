@extends('backend.layouts_backend.master')

@section('title')
    Team Members
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
                        <h5 class="card-title">Team members <span
                                class="text-muted fw-normal ms-2">({{ $count_team_members }})</span></h5>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

                        <div>
                            <a href="{{ route('teams.create') }}" class="btn bg-primary text-light"><i
                                    class="bx bx-plus me-1"></i> Add Team Member</a>
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
                            <th scope="col">Full Name</th>
                            <th scope="col">Team Category</th>
                            <th scope="col">Role</th>
                            <th scope="col">Photo</th>

                            <th scope="col">Description</th>
                            <th style="width: 150px; min-width: 80px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($team_members as $team_member)
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck11">
                                        <label class="form-check-label" for="contacusercheck11"></label>
                                    </div>
                                </th>
                                <td>{{ $team_member->id }}</td>

                                <td>
                                    <a href="#" class="text-body">{{ $team_member->team_name }} </a>
                                </td>
                                <td>{{ $team_member->team_category }}</td>
                                <td>{{ $team_member->team_role }}</td>
                                <td>

                                    @if ($team_member->team_photo)
                                        <a href="{!! asset($team_member->team_photo) !!}" target="_blank">
                                            <img class="img-thumbnail avatar-sm rounded-circle me-2" class="user-img"
                                                style="width: 100px; height:100px;"
                                                onerror="if (this.src != '{{ asset('assets/backend_assets/assets/images/users/avatar-2.jpg') }}') this.src = '{{ asset('assets/backend_assets/assets/images/users/avatar-2.jpg') }}';"
                                                src="{{ asset($team_member->team_photo) }}" alt="preview"
                                                style="height:120px !important; width:80px !important; margin-left:20px;">
                                        </a>
                                    @else
                                        <p class="text-danger">No Photo</p>
                                    @endif




                                    <!-- <img src="assets/backend_assets/assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded-circle me-2">  -->
                                </td>


                                <td>{{ $team_member->team_description }}</td>
                                <td colspan="6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#TeamMember{{ $team_member->id }}"
                                                data-bs-whatever="@getbootstrap"><i class=" far fa-eye  "></i></button>
                                        </div>

                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editTeamMember{{ $team_member->id }}"
                                                data-bs-whatever="@getbootstrap"><i class="fas fa-pencil-alt "></i></button>
                                        </div>

                                        <!-- Delete -->
                                        <div class="col-md-4">
                                            <form action="{{ route('teams.destroy', $team_member->id) }}" method="post">
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
                            <div class="modal fade" id="TeamMember{{ $team_member->id }}" tabindex="-1"
                                aria-labelledby="TeamMemberLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="TeamMemberLabel">Team Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>



                                        <div class="modal-body">

                                            <img src="{{ asset($team_member->team_photo) }} "
                                                style="width: 100%; height:60%;">
                                            <hr>
                                            <p>Full Name : {{ $team_member->team_name }}</p>
                                            <hr>
                                            <p>Team Category : {{ $team_member->team_category }}</p>
                                            <hr>

                                            <p>Role : {{ $team_member->team_role }}</p>
                                            <hr>
                                            <p>Work Description : {{ $team_member->team_description }}</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                            </button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editTeamMember{{ $team_member->id }}"
                                                data-bs-whatever="@getbootstrap">Edit Member</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF VIEW DETAILS MODEL -->




                            <!-- edit   DETAILS MODEL -->
                            <div class="modal fade" id="editTeamMember{{ $team_member->id }}" tabindex="-1"
                                aria-labelledby="editTeamMemberLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="TeamMemberLabel">Edit Team Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- form update food menu items -->
                                            <form action="{{ route('teams.update', $team_member->id) }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                                    <input type="text" class="form-control" name="team_name"
                                                        value="{{ $team_member->team_name }}" id="recipient-name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Role:</label>
                                                    <input type="text" class="form-control" name="team_role"
                                                        value="{{ $team_member->team_role }}" id="recipient-name">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">Category</label>
                                                    <select name="team_category" class="form-select" value="{{ $team_member->team_category }}">
                                                        <option value="international">International</option>
                                                        <option value="local">Local</option>
                                                    </select>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom05">Photo</label>
                                                        <input type="file" class="form-control" name="team_photo"
                                                            value="{{ $team_member->team_photo }}" placeholder="Zip">

                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Work
                                                        Description:</label>
                                                    <textarea class="form-control" name="team_description" value="" id="message-text">{{ $team_member->team_description }}</textarea>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <!-- <button  type="submit" class="btn btn-primary">Submit</button> -->
                                                    <button class="btn btn-primary" type="submit">Update Team
                                                        Member</button>
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
