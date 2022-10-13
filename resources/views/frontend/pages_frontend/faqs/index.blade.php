@extends('frontend.layouts_frontend.master')

@section('title')
    Faq
@endsection

@section('content')
  
   <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="assets/frontend/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Faq</h1>
                    <ul>
                        <li>
                            <a class="active" href="index-2.html">Home</a>
                        </li>
                        <li>Faq Us</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <div class="rs-faq-part blue-color pt-100 pb-100 md-pt-70 md-pb-70">
                 <div class="container">
                     <div class="content-part mb-50 md-mb-30">
                         <div class="title mb-40 md-mb-15">
                             <h3 class="text-part">Schools</h3>
                         </div>
                         <div id="accordion" class="accordion">
                            <div class="card" style="background-color: blue;">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">How many schools do you have</a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                     
                                    We have 5 schools within our Institute
                                </div>
                                </div>
                            </div>
                             <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">Which schools do you have ?</a>
                                 </div>
                                 <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">
                                         <ul>
                                            <li>Clinical Medicine</li>
                                            <li>Dental School</li>
                                            <li>Nursing School</li>
                                            <li>Medical Laboratory</li>
                                            <li>Pharmacy</li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                             <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">How do students practice</a>
                                 </div>
                                 <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">
                                         We have state of the art facilities to cater for our the practicum of all our students, clinicians, dental , nursing and others.
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
            </div>


@endsection
