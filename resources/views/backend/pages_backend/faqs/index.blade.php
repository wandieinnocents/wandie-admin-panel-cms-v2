@extends('backend.layouts_backend.master')

@section('title')
    All Faqs
@endsection

@section('content')
    <!-- Main content dashboard  -->



    <div class="page-content">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="mb-3">
                        <h5 class="card-title">Faqs <span class="text-muted fw-normal ms-2">({{ $count_faqs }})</span></h5>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

                        <div>
                            <a href="{{ route('faqs.create') }}" class="btn bg-primary text-light"><i
                                    class="bx bx-plus me-1"></i> Add Faq</a>
                        </div>

                    </div>

                </div>
            </div>
            <!-- end row -->

            <!-- FETCH  -->

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
                            <th scope="col"> Question</th>
                            <th scope="col">Answer</th>
                            <th style="width: 150px; min-width: 80px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($faqs as $faq)
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck11">
                                        <label class="form-check-label" for="contacusercheck11"></label>
                                    </div>
                                </th>
                                <td>{{ $faq->id }}</td>
                                <td>
                                    <a href="#" class="text-body">{{ $faq->question }}</a>
                                </td>

                                <td>{{ $faq->answer }}</td>

                                <td colspan="6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#viewFaq{{ $faq->id }}"
                                                data-bs-whatever="@getbootstrap"><i class=" far fa-eye  "></i></button>
                                        </div>

                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editFaq{{ $faq->id }}"
                                                data-bs-whatever="@getbootstrap"><i class="fas fa-pencil-alt "></i></button>

                                        </div>
                                        <!-- delete food menu -->
                                        <div class="col-md-4">
                                            <form action="{{ route('faqs.update', $faq->id) }}" method="post">
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
                            <div class="modal fade" id="viewFaq{{ $faq->id }}" tabindex="-1"
                                aria-labelledby="viewFaqLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewFaqLabel">Faq
                                                Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>



                                        <div class="modal-body">


                                            <p>Question : {{ $faq->question }}</p>
                                            <hr>


                                            <p>Answer : {{ $faq->answer }}</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close
                                            </button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editFaq{{ $faq->id }}"
                                                data-bs-whatever="@getbootstrap">Edit Faq</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF VIEW DETAILS MODEL -->


                            {{-- UPDATE FAQ  Faq --}}
                            <div class="modal fade" id="editFaq{{ $faq->id }}" tabindex="-1"
                                aria-labelledby="editFaqLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewFaqLabel">Edit Faq</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- UPDATE  CATEGORIES -->
                                            <form action="{{ route('faqs.update', $faq->id) }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Question:</label>
                                                    <input type="text" class="form-control" name="question"
                                                        value="{{ $faq->question }}" id="recipient-name">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Anwer:</label>
                                                    <textarea class="form-control" name="answer" value="" id="message-text">{{ $faq->answer }}</textarea>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <!-- <button  type="submit" class="btn btn-primary">Submit</button> -->
                                                    <button class="btn btn-primary" type="submit">Update
                                                        Faq</button>
                                                </div>


                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            {{-- END UPDATE --}}
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
