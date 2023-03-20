<!-- =======================
Header START -->
<header class="navbar-light navbar-sticky header-static">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand" href="{{route('home.index')}}">
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
                <ul class="navbar-nav navbar-nav-scroll ms-auto">

                    <!-- Nav item 1 Demos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="homeMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">منو</a>
                        <ul class="dropdown-menu" aria-labelledby="homeMenu">
                            <li> <a class="dropdown-item" href="{{route('home.index')}}">خانه</a></li>
                            <li> <a class="dropdown-item" href="index-lazy.html">نسخه 2</a></li>
                            <li> <a class="dropdown-item" href="index-3.html">نسخه 3</a></li>
                            <li> <a class="dropdown-item" href="index-4.html">نسخه 4</a></li>
                            <li> <a class="dropdown-item" href="index-5.html">نسخه 5</a></li>
                            <li> <a class="dropdown-item" href="index-6.html">نسخه 6</a></li>
                            <li> <a class="dropdown-item" href="index-7.html">نسخه 7</a></li>
                            <li> <a class="dropdown-item" href="index-8.html">نسخه 8</a></li>
                            <li> <a class="dropdown-item" href="index-9.html">نسخه 9</a></li>
                            <li> <a class="dropdown-item" href="index-10.html">نسخه 10</a></li>
                            <li> <a class="dropdown-item" href="index-11.html">نسخه 11</a></li>
                            <li> <a class="dropdown-item" href="index-12.html">نسخه 12 <span class="badge bg-danger smaller me-1">جدید</span></a></li>
                        </ul>
                    </li>

                    <!-- Nav item 2 Pages -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">صفحات</a>
                        <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                            <li> <a class="dropdown-item" href="about-us.html">درباره ما</a></li>
                            <li> <a class="dropdown-item" href="contact-us.html">تماس با ما</a></li>
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">فروشگاه <span class="badge bg-danger smaller me-1">جدید</span></a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="shop-grid.html">لیست محصول <span class="badge bg-danger smaller me-1">جدید</span></a> </li>
                                    <li> <a class="dropdown-item" href="shop-detail.html">جزئیات محصول <span class="badge bg-danger smaller me-1">جدید</span></a> </li>
                                    <li> <a class="dropdown-item" href="checkout.html">تسویه حساب <span class="badge bg-danger smaller me-1">جدید</span></a> </li>
                                    <li> <a class="dropdown-item" href="my-cart.html">سبد خرید <span class="badge bg-danger smaller me-1">جدید</span></a> </li>
                                    <li> <a class="dropdown-item" href="empty-cart.html">سبد خرید خالی <span class="badge bg-danger smaller me-1">جدید</span></a> </li>
                                </ul>
                            </li>
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">صفحات</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="author.html">نویسنده</a> </li>
                                    <li> <a class="dropdown-item" href="categories.html">دسته بندی نسخه 1</a> </li>
                                    <li> <a class="dropdown-item" href="categories-2.html">دسته بندی نسخه 2</a> </li>
                                    <li> <a class="dropdown-item" href="tag.html"># برچسب</a> </li>
                                    <li> <a class="dropdown-item" href="search-result.html">نتیجه جستجو</a> </li>
                                </ul>
                            </li>
                            <li> <a class="dropdown-item" href="404.html">صفحه 404</a></li>
                            <li> <a class="dropdown-item" href="signin.html">ورود</a></li>
                            <li> <a class="dropdown-item" href="signup.html">ثبت نام</a></li>
                            <li> <a class="dropdown-item" href="offline.html">غیرفعال</a></li>
                            <!-- Dropdown submenu levels -->
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">زیر منو</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <!-- dropdown submenu open right -->
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#">نسخه 1</a>
                                        <ul class="dropdown-menu" data-bs-popper="none">
                                            <li> <a class="dropdown-item" href="#">عنوان 1</a> </li>
                                            <li> <a class="dropdown-item" href="#">عنوان 2</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="dropdown-item" href="#"> نسخه 2</a> </li>
                                    <!-- dropdown submenu open left -->
                                    <li class="dropdown-submenu dropstart">
                                        <a class="dropdown-item dropdown-toggle" href="#">نسخه 3</a>
                                        <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                                            <li> <a class="dropdown-item" href="#">عنوان 1</a> </li>
                                            <li> <a class="dropdown-item" href="#">عنوان 2</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="dropdown-item" href="#">نسخه 4</a> </li>
                                </ul>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="#" target="_blank">
                                    <i class="text-warning fa-fw bi bi-life-preserver me-2"></i>پشتیبانی
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="../rtl/docs/index.html" target="_blank">
                                    <i class="text-danger fa-fw bi bi-card-text me-2"></i>داکیومنت
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="../ltr/index.html" target="_blank">
                                    <i class="text-info fa-fw bi bi-toggle-off me-2"></i>نسخه LTR
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" target="_blank">
                                    <i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>خرید قالب
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Nav item 3 Post -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="postMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">لیست مقالات</a>
                        <ul class="dropdown-menu" aria-labelledby="postMenu">
                            <!-- dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">شبکه ای</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="post-grid.html">نسخه 1</a> </li>
                                    <li> <a class="dropdown-item" href="post-grid-4-col.html">نسخه 2</a> </li>
                                    <li> <a class="dropdown-item" href="post-grid-masonry.html">نسخه 3</a> </li>
                                    <li> <a class="dropdown-item" href="post-grid-masonry-filter.html">نسخه 4</a> </li>
                                    <li> <a class="dropdown-item" href="post-large-and-grid.html">نسخه 5</a> </li>
                                </ul>
                            </li>
                            <li> <a class="dropdown-item" href="post-list.html">لیست نسخه 1</a> </li>
                            <li> <a class="dropdown-item" href="post-list-2.html">لیست نسخه 2</a> </li>
                            <li> <a class="dropdown-item" href="post-cards.html">لیست نسخه 3</a> </li>
                            <li> <a class="dropdown-item" href="post-overlay.html">لیست نسخه 4</a> </li>
                            <li> <a class="dropdown-item" href="post-types.html">لیست نسخه 5</a> </li>
                            <li class="dropdown-divider"></li>
                            <li> <a class="dropdown-item" href="post-single.html">جزئیات نسخه 1</a> </li>
                            <li> <a class="dropdown-item" href="post-single-2.html">جزئیات نسخه 2</a> </li>
                            <li> <a class="dropdown-item" href="post-single-3.html">جزئیات نسخه 3</a> </li>
                            <li> <a class="dropdown-item" href="post-single-4.html">جزئیات نسخه 4</a> </li>
                            <li> <a class="dropdown-item" href="post-single-5.html">جزئیات نسخه 5</a> </li>
                            <li> <a class="dropdown-item" href="post-single-6.html">جزئیات نسخه 6</a> </li>
                            <li> <a class="dropdown-item" href="podcast-single.html">جزئیات نسخه 7</a> </li>
                            <li class="dropdown-divider"></li>
                            <li> <a class="dropdown-item" href="pagination-styles.html">سبک های صفحه بندی</a> </li>
                        </ul>
                    </li>

                    <!-- Nav item 4 Mega menu -->
                    <li class="nav-item dropdown dropdown-fullwidth">
                        <a class="nav-link dropdown-toggle" href="#" id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> مگامنو</a>
                        <div class="dropdown-menu" aria-labelledby="megaMenu">
                            <div class="container">
                                <div class="row g-4 p-3 flex-fill">
                                    <!-- Card item START -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card bg-transparent">
                                            <!-- Card img -->
                                            <img class="card-img rounded" src="{{asset('assets/images/blog/16by9/small/01.jpg')}}" alt="Card image">
                                            <div class="card-body px-0 pt-3">
                                                <h6 class="card-title mb-0"><a href="#" class="btn-link text-reset">7 دیدگاه اشتباهاتی که همه در سفر مرتکب می شوند؟</a></h6>
                                                <!-- Card info -->
                                                <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                    <li class="nav-item">
                                                        <a href="#" class="text-reset btn-link">الناز حسینی</a>
                                                    </li>
                                                    <li class="nav-item">15 بهمن، 1400</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card item END -->
                                    <!-- Card item START -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card bg-transparent">
                                            <!-- Card img -->
                                            <img class="card-img rounded" src="{{asset('assets/images/blog/16by9/small/02.jpg')}}" alt="Card image">
                                            <div class="card-body px-0 pt-3">
                                                <h6 class="card-title mb-0"><a href="#" class="btn-link text-reset">12 بدترین نوع حساب های تجاری که در توییتر دنبال می کنید!</a></h6>
                                                <!-- Card info -->
                                                <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                    <li class="nav-item">
                                                        <a href="#" class="text-reset btn-link">محمد کریمی</a>
                                                    </li>
                                                    <li class="nav-item">2 آبان، 1400</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card item END -->
                                    <!-- Card item START -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card bg-transparent">
                                            <!-- Card img -->
                                            <img class="card-img rounded" src="{{asset('assets/images/blog/16by9/small/03.jpg')}}" alt="Card image">
                                            <div class="card-body px-0 pt-3">
                                                <h6 class="card-title mb-0"><a href="#" class="btn-link text-reset">آیا این آگهی ها واقعی هستند؟ معاوضه لوازم شخصی با غذا!</a></h6>
                                                <!-- Card info -->
                                                <ul class="nav nav-divider align-items-center text-uppercase small mt-2">
                                                    <li class="nav-item">
                                                        <a href="#" class="text-reset btn-link">مهدی شجاعی</a>
                                                    </li>
                                                    <li class="nav-item">14 مرداد، 1400</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card item END -->
                                    <!-- Card item START -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="bg-primary bg-opacity-10 p-4 text-center h-100 w-100 rounded">
                                            <span>پیشنهاد Blogzine</span>
                                            <h3>خرید پکیج اقتصادی</h3>
                                            <p>عضویت در خبرنامه</p>
                                            <a href="#" class="btn btn-warning">خرید و فعالسازی</a>
                                        </div>
                                    </div>
                                    <!-- Card item END -->
                                </div> <!-- Row END -->
                                <!-- Trending tags -->
                                <div class="row px-3">
                                    <div class="col-12">
                                        <ul class="list-inline mt-3">
                                            <li class="list-inline-item">برچسب ها:</li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">گردشگری</a></li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-warning-soft">کسب و کار</a></li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">فناوری</a></li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">گجت</a></li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">سبک زندگی</a></li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">واکسن</a></li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">ورزشی</a></li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">کووید</a></li>
                                            <li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">پوشاک</a></li>
                                        </ul>
                                    </div>
                                </div> <!-- Row END -->
                            </div>
                        </div>
                    </li>

                    <!-- Nav item 5 link-->
                    <li class="nav-item"> <a class="nav-link" href="dashboard.html">داشبورد</a></li>
                </ul>
            </div>
            <!-- Main navbar END -->

            <!-- Nav right START -->
            <div class="nav ms-sm-3 flex-nowrap align-items-center">
                <!-- Nav additional link -->
                <div class="nav-item dropdown dropdown-toggle-icon-none d-none d-sm-block">
                    <a class="nav-link dropdown-toggle" role="button" href="#" id="navAdditionalLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots fs-4"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-start min-w-auto shadow rounded text-start" aria-labelledby="navAdditionalLink">
                        <li><a class="dropdown-item fw-normal" href="#">درباره ما</a></li>
                        <li><a class="dropdown-item fw-normal" href="#">خبرنامه</a></li>
                        <li><a class="dropdown-item fw-normal" href="#">آرشیو</a></li>
                        <li><a class="dropdown-item fw-normal" href="#">#برچسب</a></li>
                        <li><a class="dropdown-item fw-normal" href="#">تماس با ما</a></li>
                        <li><a class="dropdown-item fw-normal" href="#"><span class="badge bg-danger me-2 align-middle">2</span>اقتصاد</a></li>
                    </ul>
                </div>
                <!-- Nav Button -->
                <div class="nav-item d-none d-md-block">
                    <a href="#" class="btn btn-sm btn-danger mb-0 mx-2">عضویت</a>
                </div>
                <!-- Nav Search -->
                <div class="nav-item dropdown nav-search dropdown-toggle-icon-none">
                    <a class="nav-link pe-0 dropdown-toggle" role="button" href="#" id="navSearch" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-search fs-4"> </i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
                        <form class="input-group">
                            <input class="form-control border-success" type="search" placeholder="جستجو" aria-label="Search">
                            <button class="btn btn-success m-0" type="submit">جستجو</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav right END -->
        </div>
    </nav>
    <!-- Logo Nav END -->
</header>
<!-- =======================
Header END -->
