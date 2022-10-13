@extends('frontend.layouts_frontend.master')

@section('title')
    Our Events
@endsection

@section('content')

 <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="assets/frontend/images/breadcrumbs/13.png" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">IPI - Events </h1>
                    <ul>
                        <li>
                            <a class="active" href="index2.html">IPI</a>
                        </li>
                        <li>Events </li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

    		<!-- Events Section Start -->
            <div class="rs-event modify2 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">

                    {{-- START OF EVENTS --}}
                    @foreach($events as $event)
                        
                   
                        <div class="col-lg-4 mb-30 col-md-6">
                            <div class="event-item">
                                <div class="event-short">
                                   <div class="featured-img">
                                       <img src="{{ asset($event->event_photo) }}" alt="Image"
                                       style="height:450px !important; width:350px !important; margin-left:20px; object-fit: cover;"
                                       
                                       >
                                   </div>
                                   <div class="content-part">
                                       <h4 class="title"><a href="{{ route('our_events.show',$event->id) }}">{{ $event->event_name }}</a></h4>
                                       <div class="address"><i class="fa fa-map-o"></i> {{ $event->event_location }}</div>
                                       
                                        <div class="time"><i class="fa flaticon-clock"></i> {{ $event->event_start_date }} </div>
                                        <div class="btn-part">
                                            <a href="{{ route('our_events.show',$event->id) }}" style="color:#ffffff;">View Details <i class="flaticon-right-arrow"></i></a>
                                        </div>
                                   </div> 
                                </div>
                            </div>
                        </div>   

                         @endforeach



                          {{-- END OF EVENTS  --}}
                       
                    </div>
                </div> 
            </div>
    
@endsection
