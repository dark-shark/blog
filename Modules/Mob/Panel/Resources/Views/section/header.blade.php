<!-- =======================
Header START -->
<header class="navbar-light navbar-sticky header-static border-bottom navbar-dashboard">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand me-3" href="{{route('panel.index')}}">
                <img class="navbar-brand-item light-mode-item" src="{{asset('assets/images/logo.svg')}}" alt="logo">
                <img class="navbar-brand-item dark-mode-item" src="{{asset('assets/images/logo-light.svg')}}" alt="logo">
            </a>
            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="text-body h6 d-none d-sm-inline-block">منو</span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Main navbar START -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-nav-scroll mx-auto">

                    <!-- Nav item 1 Demos -->
                    <li class="nav-item"><a class="nav-link" href="{{route('panel.index')}}"><i class="bi bi-house-door me-1"></i>پیشخوان</a></li>

                    <!-- Nav item 2 Post -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="postMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-pencil me-1"></i>اخبار</a>
                        <ul class="dropdown-menu" aria-labelledby="postMenu">
                            <!-- dropdown submenu -->
                            <li> <a class="dropdown-item" href="dashboard-post-list.html">لیست</a> </li>
                            <li> <a class="dropdown-item" href="dashboard-post-categories.html">دسته بندی</a> </li>
                            <li> <a class="dropdown-item" href="dashboard-post-create.html">ایجاد</a> </li>
                            <li> <a class="dropdown-item" href="dashboard-post-edit.html">ویرایش</a> </li>
                        </ul>
                    </li>

                    <!-- Nav item 3 Pages -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-folder me-1"></i>منو ها</a>
                        <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                            @foreach(config('panelConfig.menus') as $menu)
                                <li> <a class="dropdown-item" href="{{$menu['url']}}"><i class="bi bi-{{$menu['icon']}} me-1"></i>{{$menu['title']}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Main navbar END -->

            <!-- Nav right START -->
            <div class="nav flex-nowrap align-items-center">

                <!-- Notification dropdown START -->
                <div class="nav-item ms-2 ms-md-3 dropdown">
                    <!-- Notification button -->
                    <a class="btn btn-primary-soft btn-round mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        <i class="bi bi-bell fa-fw"></i>
                    </a>
                    <!-- Notification dote -->
                    <span class="notif-badge animation-blink"></span>

                    <!-- Notification dropdown menu START -->
                    <div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
                        <div class="card bg-transparent">
                            <div class="card-header bg-transparent border-bottom p-3 d-flex justify-content-between align-items-center">
                                <h6 class="m-0">نوتیفیکیشن <span class="badge bg-danger bg-opacity-10 text-danger ms-2">2 خبر</span></h6>
                                <a class="small" href="#">حذف</a>
                            </div>
                            <div class="card-body p-0">
                                <ul class="list-group list-unstyled list-group-flush">
                                    <!-- Notif item -->
                                    <li>
                                        <a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
                                            <div class="me-3">
                                                <div class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" src="{{asset('assets/images/avatar/08.jpg')}}" alt="avatar">
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="mb-1">ثبت نام یک کاربر</h6>
                                                <span class="small"> <i class="bi bi-clock"></i> 3 دقیقه پیش</span>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Notif item -->
                                    <li>
                                        <a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
                                            <div class="me-3">
                                                <div class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" src="{{asset('assets/images/avatar/02.jpg')}}" alt="avatar">
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="mb-1">حذف یک حساب کاربری</h6>
                                                <span class="small"> <i class="bi bi-clock"></i> 6 دقیقه پیش</span>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Notif item -->
                                    <li>
                                        <a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
                                            <div class="me-3">
                                                <div class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" src="{{asset('assets/images/avatar/05.jpg')}}" alt="avatar">
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="mb-1">ثبت دیدگاه جدید</h6>
                                                <span class="small"> <i class="bi bi-clock"></i> 10 دقیقه پیش</span>
                                            </div>
                                        </a>
                                    </li>

                                    <!-- Notif item -->
                                    <li>
                                        <a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
                                            <div class="me-3">
                                                <div class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" src="{{asset('assets/images/avatar/03.jpg')}}" alt="avatar">
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="mb-1">بروزرسانی تنظیمات کاربری</h6>
                                                <span class="small"> <i class="bi bi-clock"></i> دیروز</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Button -->
                            <div class="card-footer bg-transparent border-0 py-3 text-center position-relative">
                                <a href="#" class="stretched-link">مشاهده تمام فعالیت ها</a>
                            </div>
                        </div>
                    </div>
                    <!-- Notification dropdown menu END -->
                </div>
                <!-- Notification dropdown END -->

                <!-- Profile dropdown START -->
                <div class="nav-item ms-2 ms-md-3 dropdown">
                    <!-- Avatar -->
                    <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="avatar-img rounded-circle" src="{{asset('assets/images/avatar/03.jpg')}}" alt="avatar">
                    </a>

                    <!-- Profile dropdown START -->
                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
                        <!-- Profile info -->
                        <li class="px-3">
                            <div class="d-flex align-items-center">
                                <!-- Avatar -->
                                <div class="avatar me-3">
                                    <img class="avatar-img rounded-circle shadow" src="{{asset('assets/images/avatar/03.jpg')}}" alt="avatar">
                                </div>
                                <div>
                                    <a class="h6 mt-2 mt-sm-0" href="#">{{auth()->user()->name}}</a>
                                    <p class="small m-0">{{auth()->user()->email}}</p>
                                </div>
                            </div>
                            <hr>
                        </li>
                        <!-- Links -->
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>حساب کاربری</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil fa-fw me-2"></i>ویرایش</a></li>
                        <li><a class="dropdown-item" href="{{route('auth.logout')}}"><i class="bi bi-power fa-fw me-2"></i>خروج</a></li>
                        <li class="dropdown-divider mb-3"></li>
                    </ul>
                    <!-- Profile dropdown END -->
                </div>
                <!-- Profile dropdown END -->

                <!-- Nav right END -->
            </div>
        </div>
    </nav>
    <!-- Logo Nav END -->
</header>
<!-- =======================
Header END -->
