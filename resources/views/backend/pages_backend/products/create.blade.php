@extends('backend.layouts_backend.master')

@section('title')

@endsection

@section('content')

<!-- Main content dashboard  -->
<div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Add Product Brand</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Categories</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <!-- Page content starts here -->
                        <div class="row">
                        <div class="col-xl-1">
                            </div>
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Add Product  Brand</h4>
                                        <!-- <p class="card-title-desc">Add Brand</p> -->
                                    </div>
                                    <div class="card-body">
                                    <form  action="{{ route('product_brands.store') }}"  method="POST" enctype="multipart/form-data">
                                    
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab" aria-selected="false">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                    <span class="d-none d-sm-block">Home</span>    
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab" aria-selected="false">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">Profile</span>    
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " data-bs-toggle="tab" href="#messages" role="tab" aria-selected="true">
                                                    <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                    <span class="d-none d-sm-block">Messages</span>    
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#settings" role="tab" aria-selected="false">
                                                    <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                    <span class="d-none d-sm-block">Settings</span>    
                                                </a>
                                            </li>
                                        </ul>
        
                                        <!-- Tab panes -->
                                        <div class="tab-content p-3 text-muted">
                                            <div class="tab-pane active" id="home" role="tabpanel">
                                                

                                                {{-- START TAB 1 CONTENT--}}

                                                 <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Name</label>
                                                        <input type="text" class="form-control" id="validationCustom01"  name="name" placeholder="Ennter Brand Name" value="">
                                                         @error('name') 
                                                            <small class="text-danger"> {{ $message }}</small>
                                                          @enderror
                                                        
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Slug</label>
                                                        <input type="text" class="form-control" id="validationCustom01"  name="slug" placeholder="Ennter slug" value="" >
                                                         @error('slug') 
                                                            <small class="text-danger"> {{ $message }}</small>
                                                          @enderror
                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Status</label>
                                                        <input type="checkbox"    name="status" >
                                                         @error('status') 
                                                            <small class="text-danger"> {{ $message }}</small>
                                                          @enderror
                                                    </div>
                                                </div>


                                            </div>


                                                {{-- END TAB 1  CONTENT--}}

                                            </div>
                                            <div class="tab-pane" id="profile" role="tabpanel">
                                                <p class="mb-0">
                                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                                    single-origin coffee squid. Exercitation +1 labore velit, blog
                                                    sartorial PBR leggings next level wes anderson artisan four loko
                                                    farm-to-table craft beer twee. Qui photo booth letterpress,
                                                    commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
                                                    vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                                    aesthetic magna delectus.
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="messages" role="tabpanel">
                                                <p class="mb-0">
                                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                                    sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                                    farm-to-table readymade. Messenger bag gentrify pitchfork
                                                    tattooed craft beer, iphone skateboard locavore carles etsy
                                                    salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                                    Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                                    mi whatever gluten yr.
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="settings" role="tabpanel">
                                                <p class="mb-0">
                                                    Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                    art party before they sold out master cleanse gluten-free squid
                                                    scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                                    art party locavore wolf cliche high life echo park Austin. Cred
                                                    vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                    farm-to-table VHS.
                                                </p>
                                            </div>
                                        </div>
                                   
                                            <!-- Editor -->
                                            <button class="btn btn-primary" type="submit">Add Product Brand</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div> <!-- end col -->
        
                        </div>
                        <!-- end row -->

                        <div class="col-xl-1">
                        </div>
                    </div>
                    <!-- container-fluid -->
                </div>

@endsection