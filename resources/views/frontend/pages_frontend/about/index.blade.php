@extends('frontend.layouts_frontend.master')

@section('title')
    About Us
@endsection

@section('content')
   
   <!-- Breadcrumbs Start -->
			<div class="rs-breadcrumbs breadcrumbs-overlay">
					<div class="breadcrumbs-img">
							<img src="assets/frontend/images/breadcrumbs/mayaimg.png" alt="Breadcrumbs Image">
					</div>
					<div class="breadcrumbs-text white-color">
							<h1 class="page-title">About Us</h1>
							<ul>
								<li>
									<a class="active" href="index-2.html">Home</a>
								</li>
								<li>About Us</li>
							</ul>
					</div>
			</div>
			<!-- Breadcrumbs End -->

			<!-- About Section Start -->
			<div id="rs-about" class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 order-last padding-0 md-pl-15 md-pr-15 md-mb-30">
							<div class="img-part">
								<img class="" src="assets/frontend/images/about/about.png" alt="About Image">
								
								<!-- <div class="bold-text mb-22">Director - Dr. Grace Stephen Sseruyange Dental Technologist(USA), Dentist(Uganda)</div> -->
							</div>
						</div>
						<div class="col-lg-6 pr-70 md-pr-15">
							<div class="sec-title">
								<div class="sub-title orange">About IPI</div>
								<h2 class="title mb-17">The International Paramedical Institute</h2>
								<div class="bold-text mb-22">IPI is a science institution,  training dental professionals, clinical officers and many other health care courses,</div>
								<div class="desc">It is founded by Bunawona Uganda Community Outreach (BUCO) which is determined to help, treat and prevent oral conditions and many other health care problems in Uganda. It has a modern and spacious dental clinic, medical laboratories, dormitories, Medical equipment, classrooms and well stalked library and computer laboratory.</div>
								<div class="desc">We target Ugandan students who have attained the UCE and UACE certificates plus International students from outside Uganda especially Tanzania, Kenya, South Sudan, Democratic Republic of Congo, Somalia, Rwanda and Burundi plus other countries.Young aspirants study in a stimulating environment of independent thinking and innovation in various disciplines of Health Care. </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About Section End -->

			<!-- CTA Section Start -->
			<div class="rs-cta style2">
				<div class="partition-bg-wrap inner-page">
					<div class="container">
						<div class="row y-bottom">
							<div class="col-lg-6 pb-50 md-pt-70 md-pb-70">
								
							</div>
							<div class="col-lg-6 pl-62 pt-134 pb-150 md-pt-50 md-pb-50 md-pl-15">
								<div class="sec-title mb-40 md-mb-20">
										<h2 class="title mb-16">VISION</h2>
										<div class="desc">To be a leading model international paramedical institution that produces health professionals capable of self reliance and job creation worldwide.</div>
								        <h2 class="title mb-16">MISSION</h2>
										<div class="desc">To enable the future and competence of our professional graduates produced through a carefully analyzed national and international curriculum to acquire knowledge and practical skills fit for global job market.</div>
									</div>
								<div class="btn-part">
										<a class="readon2 blue" href="#">Apply Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- CTA Section End -->

			<!-- Counter Section Start -->
			<!-- <div id="rs-counter" class="rs-counter style2-about pt-100 md-pt-70">
				<div class="container">
					<div class="row couter-area">
						<div class="col-md-4 sm-mb-30">
							<div class="counter-item text-center">
								<div class="counter-bg">
									<img src="assets/images/counter/bg1.png" alt="Counter Image">
								</div>
								<div class="counter-text">
									<h2 class="rs-count kplus">2</h2>
									<h4 class="title mb-0">Students</h4>
								</div>
							</div>
						</div>
						<div class="col-md-4 sm-mb-30">
							<div class="counter-item text-center">
								<div class="counter-bg">
									<img src="assets/images/counter/bg2.png" alt="Counter Image">
								</div>
								<div class="counter-text">
									<h2 class="rs-count">3.50</h2>
									<h4 class="title mb-0">Average CGPA</h4>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="counter-item text-center">
								<div class="counter-bg">
									<img src="assets/images/counter/bg3.png" alt="Counter Image">
								</div>
								<div class="counter-text">
									<h2 class="rs-count percent">95</h2>
									<h4 class="title mb-0">Graduates</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<!-- Counter Section End -->

			<!-- About Section Start -->
			<div class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 padding-0 md-pl-15 md-pr-15 md-mb-30">
							<div class="img-part">
								<img class="" src="assets/frontend/images/about/history.png" alt="About Image">
							</div>
                            <ul class="nav nav-tabs histort-part" id="myTab" role="tablist">
                                <li class="nav-item tab-btns single-history">
                                    <a class="nav-link tab-btn active" id="about-history-tab" data-toggle="tab" href="#about-history" role="tab" aria-controls="about-history" aria-selected="true"><span class="icon-part"><i class="flaticon-analysis"></i></span>Objective</a>
                                </li>
                                <li class="nav-item tab-btns single-history">
                                    <a class="nav-link tab-btn" id="about-mission-tab" data-toggle="tab" href="#about-mission" role="tab" aria-controls="about-mission" aria-selected="false"><span class="icon-part"><i class="flaticon-flower"></i></span>Certified by M.E.S</a>
                                </li>
                                <li class="nav-item tab-btns single-history last-item">
                                    <a class="nav-link tab-btn" id="about-admin-tab" data-toggle="tab" href="#about-admin" role="tab" aria-controls="about-admin" aria-selected="false"><span class="icon-part"><i class="flaticon-analysis"></i></span>Administration</a>
                                </li>
                            </ul>
						</div>
						<div class="offset-lg-1"></div>
						<div class="col-lg-5">
							<div class="tab-content tabs-content" id="myTabContent">
                                <div class="tab-pane tab fade show active" id="about-history" role="tabpanel" aria-labelledby="about-history-tab">
                                    <div class="sec-title mb-25">
                                        <h2 class="title">The Main Objective Of IPI</h2>
                                        <div class="desc"><ol>
                                            <li>To ensure provision of high balanced quality health educational services for future self-reliance of our graduates.</li>
                                            <li>To enable the development of areas in the vicinity of the institute through self-help projects that shall be attached to the paramedical institution.</li>
                                            <li>To provide quality educational services through health awareness for better livelihood of the graduates that shall enroll with the institute.</li>
                                            <li>To match with both national and international health standards through provision of local and international curriculum to students at affordable school fees rates.</li>
                                            <li>To liaise with both national and international NGOs, CBO and other faith based organizations in provision of best health educational services and practices through lobbying and partnerships.</li>
                                            <li>To engage in qualitative and quantitative research for production of highly competent academic and science oriented human resources. </li>
                                        </ol></div>
                                    </div>
                                    <!-- <div class="tab-img"> -->
                                        <!-- <img class="" src="assets/images/about/tab1.jpg" alt="Tab Image"> -->
                                    <!-- </div> -->
                                </div>
                                <div class="tab-pane fade" id="about-mission" role="tabpanel" aria-labelledby="about-mission-tab">
                                    <div class="sec-title mb-25">
                                        <h2 class="title">Certified by Ministry of Education & Sports</h2>
                                        <div class="desc">The Registrar Allied health professionals council with his inspection team and ministry of education  visited the school twice and recommendations were made to be good and given a go ahead to teach students. The inspection team was led by Assistant Commissioner Mr. Mugerwa and chairman Allied Health professional’s council Mr. Mpima and Bruhan, Kabanda on technical team, support staff and other members.</div>
                                        <div class="desc">The school has a team of experienced teachers like Mr. Acidiri William former principal Mulago dental school, Mr Onyango – Principal public health dentistry and Tutor oral surgery,  Mr. Mutyaba Joseph – Dentist, Mr. Sseruyange Stephen Grace Bunawona- Director IPI Maya</div>
                                    </div>
                                    <!-- <div class="tab-img">
                                        <img class="" src="assets/images/about/tab2.jpg" alt="Tab Image">
                                    </div> -->
                                </div>
                                <div class="tab-pane fade" id="about-admin" role="tabpanel" aria-labelledby="about-admin-tab">
                                    <div class="sec-title mb-25">
                                        <h2 class="title">IPI Administration</h2>
                                        <div class="desc">Our Administration Team consists of both techinal and not-techical staff in regards to medical related courses, competent to accomplish duties which are the foundation of the success of IPI</div>
                                    </div>
                                    <div class="tab-img">
                                        <img class="" src="assets/frontend/images/about/tab3.jpg" alt="Tab Image">
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
                    <!-- Intro Info Tabs-->
                    <div class="intro-info-tabs">
                        
                    </div>
				</div>
			</div>
			<!-- About Section End -->          


@endsection
