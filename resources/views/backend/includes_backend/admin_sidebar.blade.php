<!-- Vertical menu side bar  -->
<div class="vertical-menu ">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Stargit ddt -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <!-- <li class="menu-title" data-key="t-menu">Menu</li> -->
                <li>
                    <a href="/dashboard">
                        <i class="fas fa-home"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>
                <!-- analytics -->
                {{-- <li>
                    <a href="/analytics">
                    <i class="fas fa-chart-bar"></i>
                        <span data-key="t-dashboard">Analytics</span>
                    </a>
                </li> --}}
                <!-- Feedback -->
                <li>
                    <a href="/feedbacks">
                        <i class="fas fa-comment-alt "></i>
                        <span data-key="t-dashboard">Feedback</span>
                    </a>
                </li>
                {{-- volunteers --}}
                <li>
                    <a href="/volunteers">
                        <i class="fas fa-comment-alt "></i>
                        <span data-key="t-dashboard">Volunteers</span>
                    </a>
                </li>
                <!-- Resources -->
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow">
                    <i class=" fas fa-file-alt"></i>
                        <span data-key="t-apps">Resources</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="/resource_categories/create">
                                <span data-key="t-calendar">Add Category</span>
                            </a>
                        </li>
                        <li>
                            <a href="/resource_categories">
                                <span data-key="t-calendar"
                                    >View Categories</span
                                >
                            </a>
                        </li>
                        <li>
                            <a href="/resources/create">
                                <span data-key="t-chat">Add Resource</span>
                            </a>
                        </li>
                        <li>
                            <a href="/resources">
                                <span data-key="t-chat">View Resources</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                <!-- Gallery -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fas fa-photo-video"></i>
                        <span data-key="t-apps">Photos</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="/gallery_categories/create">
                                <span data-key="t-calendar">Add Category</span>
                            </a>
                        </li>
                        <li>
                            <a href="/gallery_categories">
                                <span data-key="t-calendar">View Categories</span>
                            </a>
                        </li>
                        <li>
                            <a href="/galleries/create">
                                <span data-key="t-chat">Add Photo</span>
                            </a>
                        </li>
                        <li>
                            <a href="/galleries">
                                <span data-key="t-chat">View Photos</span>
                            </a>
                        </li>
                        {{-- video  --}}
                    </ul>
                </li>
                {{-- Video gallery --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fas fa-people-carry"></i>
                        <span data-key="t-apps">Videos</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                             <li>
                            <a href="/video_galleries/create">
                                <span data-key="t-chat">Add Video</span>
                            </a>
                        </li>
                        <li>
                            <a href="/video_galleries">
                                <span data-key="t-chat">View Videos</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Services -->
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fas fa-people-carry"></i>
                        <span data-key="t-apps">Services</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="/service_categories/create">
                                <span data-key="t-calendar">Add Category</span>
                            </a>
                        </li>
                        <li>
                            <a href="/service_categories">
                                <span data-key="t-calendar">View Categories</span>
                            </a>
                        </li>
                        <li>
                            <a href="/services/create">
                                <span data-key="t-chat">Add Service</span>
                            </a>
                        </li>
                        <li>
                            <a href="/services">
                                <span data-key="t-chat">View Services</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                <!-- Projects -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fas fa-university"></i>
                        <span data-key="t-apps">Projects</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="/project_categories/create">
                                <span data-key="t-calendar">Add Category</span>
                            </a>
                        </li>
                        <li>
                            <a href="/project_categories">
                                <span data-key="t-calendar">View Categories</span>
                            </a>
                        </li>
                        <li>
                            <a href="/projects/create">
                                <span data-key="t-chat">Add Project</span>
                            </a>
                        </li>
                        <li>
                            <a href="/projects">
                                <span data-key="t-chat">View Projects</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- courses --}}
                 <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fas fa-university"></i>
                        <span data-key="t-apps">Courses</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="/courses/create">
                                <span data-key="t-chat">Add Course</span>
                            </a>
                        </li>
                        <li>
                            <a href="/courses">
                                <span data-key="t-chat">View Course</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- events --}}
                 <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fas fa-university"></i>
                        <span data-key="t-apps">Events</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="/events/create">
                                <span data-key="t-chat">Add Event</span>
                            </a>
                        </li>
                        <li>
                            <a href="/events">
                                <span data-key="t-chat">View Events</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Posts --}}
                <!-- Posts -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <!-- Post categories create -->
                            <li>
                                <a href="/post_categories/create">
                                    <span data-key="t-calendar">Add Category</span>
                                </a>
                            </li>
                        <!-- Post categories list -->
                            <li>
                                <a href="/post_categories">
                                    <span data-key="t-calendar">View Categories</span>
                                </a>
                            </li>
                        <!-- Create post -->
                        <li>
                            <a href="{{ route('posts.create') }}">
                                <span data-key="t-chat">Add Post</span>
                            </a>
                        </li>
                        <!-- List posts -->
                        <li>
                            <a href="{{ route('posts.index') }}">
                                <span data-key="t-chat">View Posts</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Team --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fas fa-university"></i>
                        <span data-key="t-apps">Staff</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="/teams/create">
                                <span data-key="t-chat">Add Staff</span>
                            </a>
                        </li>
                        <li>
                            <a href="/teams">
                                <span data-key="t-chat">View Staffs</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Faq --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fas fa-university"></i>
                        <span data-key="t-apps">Faq's</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="/faqs/create">
                                <span data-key="t-calendar">Add Faq</span>
                            </a>
                        </li>
                    <li>
                            <a href="/faqs">
                                <span data-key="t-calendar">View Faq's</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <hr>
                @guest
                    <!-- Login -->
                    @if (Route::has('login'))
                        <li>
                            <a href="{{ route('login') }}">
                                <i class="fas fa-user-check"></i>
                                <span data-key="t-apps">Login</span>
                            </a>
                        </li>
                    @endif
                    <!-- Register -->
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">
                                <i class="fas fa-user-check"></i>
                                <span data-key="t-apps">Register</span>
                            </a>
                        </li>
                    @endif
                    <!-- else -->
                @else
                    <!-- Users -->
                    @can('user-list')
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="fas fa-user-check"></i>
                                <span data-key="t-apps">Users</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li>
                                    <a href="{{ route('users.create') }}">
                                        <span data-key="t-chat">Add User</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('users.index') }}">
                                        <span data-key="t-chat">View Users</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endcan
                    <!-- Roles -->
                    @can('role-list')
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class=" fas fa-user-plus"></i>
                                <span data-key="t-apps">Roles</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li>
                                    <a href="{{ route('roles.create') }}">
                                        <span data-key="t-calendar">Add Roles</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('roles.index') }}">
                                        <span data-key="t-calendar">View Roles</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endcan
                    <!-- Permissions -->
                    @can('permission-list')
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class=" fas fa-user-lock"></i>
                                <span data-key="t-apps">Permissions</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li>
                                    <a href="{{ route('permissions.create') }}">
                                        <span data-key="t-calendar">Add Permissions</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('permissions.index') }}">
                                        <span data-key="t-calendar">View Permissions</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endcan
                    <li>
                        <a href="{{ route('logout') }}">
                            <i class="fas fa-power-off"></i>
                            <span data-key="t-apps">Logout</span>
                        </a>
                    </li>
                @endguest
            </ul>
            <div class="card sidebar-alert border-5 text-center mx-4 mb-0 mt-5"
                style="border-radius: 100px 100px 0px 0px">
                <div class="card-body">
                    <img src="assets/images/giftbox.png" alt="" />
                    <div class="mt-4">
                        <h5 class="alertcard-title font-size-16">Developer</h5>
                        <p class="font-size-13">Wandie Innocent</p>
                        <a href="#!" class="btn btn-primary mt-2">Say Hello</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>
