@extends('frontend.layouts_frontend.master')

@section('title')
    Post Details
@endsection

@section('content')
 <div class="main-content">
           <div class="rs-breadcrumbs breadcrumbs-overlay">
					<div class="breadcrumbs-img">
							<img src="{{ asset('assets/frontend/images/breadcrumbs/9.png') }}" alt="Breadcrumbs Image">
					</div>
					<div class="breadcrumbs-text white-color">
							<h1 class="page-title">Post Details</h1>
							<ul>
								<li>
									<a class="active" href="index-2.html">Home</a>
								</li>
								<li>Post Details</li>
							</ul>
					</div>
			</div>
			<!-- Breadcrumbs End -->
            
           <!-- Blog Section Start -->
            <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                   <div class="blog-deatails">
                        <div class="bs-img">
                            <a href="#"><img src="{{ asset($post->post_photo) }}" alt=""></a>
                        </div>
                       <div class="blog-full">
                           <ul class="single-post-meta">
                               <li>
                                   <span class="p-date"> <i class="fa fa-calendar-check-o"></i> {{ $post->created_at }} </span>
                               </li> 
                               <li>
                                   <span class="p-date"> <i class="fa fa-user-o"></i> {{ $post->post_created_by }}  </span>
                               </li> 
                               <li class="Post-cate">
                                   <div class="tag-line">
                                       <i class="fa fa-book"></i>
                                       <a href="#">{{ $post->post_category_r->post_category_name }}</a>
                                   </div>
                               </li>
                           </ul>
                           <h2>{{ $post->post_title }}</h2>
                           <div class="blog-desc">
                               <p>
                                {{ $post->post_description}}    
                                 </p>
                           </div>

                           <!-- discuss comments -->

                           <div id="disqus_thread"></div>
                                        <script>
                                            /**
                                            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                                          
                                            // var disqus_config = function () {
                                            // this.page.url = {{ Request::url()}};  // Replace PAGE_URL with your page's canonical URL variable
                                            // this.page.identifier = {{ $post->id}}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                            // };
                                           
                                            (function() { // DON'T EDIT BELOW THIS LINE
                                            var d = document, s = d.createElement('script');
                                            s.src = 'https://website-yk9vnplwgy.disqus.com/embed.js';
                                            s.setAttribute('data-timestamp', +new Date());
                                            (d.head || d.body).appendChild(s);
                                            })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>




                           <!-- end of disquss comments -->
                         
                         
                       </div>
                   </div>
                   
                 
                </div>
            </div>
            <!-- Blog Section End -->  
            
        </div> 
@endsection
