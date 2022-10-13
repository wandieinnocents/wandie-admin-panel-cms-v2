@extends('backend.layouts_backend.master')

@section('title')
Posts
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
                                    <h5 class="card-title">posts <span class="text-muted fw-normal ms-2">({{ $count_posts }})</span></h5>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                                   
                                    <div>
                                        <a href="{{ route('posts.create') }}" class="btn bg-primary text-light"><i class="bx bx-plus me-1"></i> Add post</a>
                                    </div>
                                    
                                   
                                </div>

                            </div>
                        </div>
                        <!-- end row -->



                        <!-- FETCH POSTS -->

                        <div class="table-responsive mb-4">
                            <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
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
                                   
                                    <th scope="col">Description</th>
                                    <th style="width: 150px; min-width: 80px;">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   
                                    
                                @foreach($posts as $post)
                                      <tr>
                                        <th scope="row">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input" id="contacusercheck11">
                                                <label class="form-check-label" for="contacusercheck11"></label>
                                            </div>
                                        </th>
                                        <td>{{ $post->id }}</td>

                                        <td>
                                            <a href="#" class="text-body">{{ $post->post_category_r->post_category_name }} </a>
                                        </td>
                                        <td>{{ $post->post_title }}</td>
                                        <td>  

                                        @if (($post->post_photo))
                                                <a href="{!! asset($post->post_photo) !!}" target="_blank">
                                                    <img class="img-thumbnail avatar-sm rounded-circle me-2" class="user-img" style="width: 100px; height:100px;"
                                                        onerror="if (this.src != '{{ asset('assets/backend_assets/assets/images/users/avatar-2.jpg') }}') this.src = '{{ asset('assets/backend_assets/assets/images/users/avatar-2.jpg') }}';"
                                                        src="{{ asset($post->post_photo) }}" alt="preview"
                                                        style="height:120px !important; width:80px !important; margin-left:20px;">
                                                </a>

                                        @else
                                            <p class="text-danger">No Photo</p>
                                        @endif
                                            
                                        
                                        
                                        
                                        <!-- <img src="assets/backend_assets/assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded-circle me-2">  -->
                                    </td> 
                                      
                                       
                                        <td>{{ $post->post_description }}</td>
                                        <td colspan="6">
                                            <div class="row">
                                             <div class="col-md-4">
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#viewDetails{{ $post->id }}" data-bs-whatever="@getbootstrap"><i class=" far fa-eye  "></i></button>
                                            </div>
                                                
                                            <div class="col-md-4">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editPostOrder{{ $post->id }}" data-bs-whatever="@getbootstrap"><i class="fas fa-pencil-alt "></i></button>

                                            </div>
                                            
                                            <!-- delete -->
                                            <div class="col-md-4">
                                            <form action="{{ route('posts.update', $post->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a >  <button class="btn btn-danger shadow btn-xs sharp"> <span class="fa fa-trash"> </button> </a>  
                                                        
                                            </form>



                                        </div>
                                                
                                                
                                               
                                            </div>
                                        </td>
                                      </tr>





                <!-- VIEW DETAILS MODEL -->
                <div class="modal fade" id="viewDetails{{ $post->id }}" tabindex="-1" aria-labelledby="viewDetailsLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="viewDetailsLabel">Post Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                               
                                    

                                    <div class="modal-body">

                                    <img src="{{ asset($post->post_photo) }} " style="width: 100%; height:60%;">
                                    <hr>
                                          <p>Created By : {{ $post->post_created_by }}</p>
                                          <hr>
                                    <p>Post Title : {{ $post->post_title }}</p>
                                    <hr>

                                    <p>Category : {{ $post->post_category_r->post_category_name }}</p>
                                    <hr>
                                    <p>Description : {{ $post->post_description }}</p>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close </button>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editPostOrder{{ $post->id }}" data-bs-whatever="@getbootstrap">Edit post</button>
                                    </div>
                                </div>
                              </div>
                 </div>
                <!-- END OF VIEW DETAILS MODEL -->




                <!-- edit  Post  DETAILS MODEL -->
                <div class="modal fade" id="editPostOrder{{ $post->id }}" tabindex="-1" aria-labelledby="editPostOrderLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="viewDetailsLabel">Edit post Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">


                                        <!-- form update Post menu items -->
                                    
                            <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                                            <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">Category</label>

                                                    <select name="post_category_id" class="form-select">
                                                           @foreach($post_categories as $post_category)
                                                            <option value="{{ $post_category->id }}">{{ $post_category->post_category_name }}</option>
                                                           
                                                            @endforeach
                                                        </select>

                
                                                    </div>

                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Created By:</label>
                                           <input type="text" class="form-control"  name="post_created_by" id="validationCustom02" disabled placeholder="Created By" value="{{ $loggedinUser }}" >
                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Name:</label>
                                                <input type="text" class="form-control" name="post_title" value="{{  $post->post_title }}" id="recipient-name">
                                            </div>
                                            <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom05">Photo</label>
                                                        <input type="file" class="form-control" name="post_photo" value="{{ $post->post_photo }}"  placeholder="Zip">
                                                        
                                                    </div>
                                                </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Description:</label>
                                                <textarea class="form-control" name="post_description" value="" id="message-text">{{  $post->post_description }}</textarea>
                                            </div>

                                            <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <!-- <button  type="submit" class="btn btn-primary">Submit</button> -->
                                        <button class="btn btn-primary" type="submit">Update post</button>
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