@extends('Home::layouts.master')

@section('title', 'صفحه اصلی')

@section('content')
    <!-- Main Post START -->
    <div class="col-lg-9">
        <!-- Title -->
        <div class="mb-4">
            <h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>سایر اخبار مهم</h2>
            <p>آخرین اخبار، تصاویر، فیلم ها و گزارش های ویژه</p>
        </div>
        <div class="row gy-4">
            <!-- Card item START -->
            <div class="col-sm-6">
                <div class="card">
                    <!-- Card img -->
                    <div class="position-relative">
                        <img class="card-img" src="{{asset('assets/images/blog/4by3/01.jpg')}}" alt="Card image">
                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                            <!-- Card overlay bottom -->
                            <div class="w-100 mt-auto">
                                <!-- Card category -->
                                <a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-3">
                        <!-- Sponsored Post -->
                        <a href="#!" class="mb-0 text-body small" tabindex="0" role="button" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" data-bs-content="شما این تبلیغ را می بینید زیرا فعالیت شما با مخاطبان مورد نظر سایت ما مطابقت دارد.">
                            <i class="bi bi-info-circle ps-1"></i> ویژه
                        </a>
                        <h4 class="card-title mt-2"><a href="post-single.html" class="btn-link text-reset">فیلم‌های بالیوودی الگوی ضدانقلاب شده!</a></h4>
                        <p class="card-text">ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد...</p>
                        <!-- Card info -->
                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                            <li class="nav-item">
                                <div class="nav-link">
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{asset('assets/images/avatar/01.jpg')}}" alt="avatar">
                                        </div>
                                        <span class="ms-3">با <a href="#" class="stretched-link text-reset btn-link">ادمین</a></span>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">22 آذر، 1400</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Card item END -->
            <!-- Card item START -->
            <div class="col-sm-6">
                <div class="card">
                    <!-- Card img -->
                    <div class="position-relative">
                        <img class="card-img" src="{{asset('assets/images/blog/4by3/06.jpg')}}" alt="Card image">
                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                            <!-- Card overlay Top -->
                            <div class="w-100 mb-auto d-flex justify-content-end">
                                <div class="text-end ms-auto">
                                    <!-- Card format icon -->
                                    <div class="icon-md bg-white bg-opacity-25 bg-blur text-white rounded-circle" title="This post has video"><i class="fas fa-video"></i></div>
                                </div>
                            </div>
                            <!-- Card overlay bottom -->
                            <div class="w-100 mt-auto">
                                <!-- Card category -->
                                <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>گردشگری</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-3">
                        <h4 class="card-title"><a href="post-single.html" class="btn-link text-reset">رازهای کوچک کثیف در مورد صنعت تجارت</a></h4>
                        <p class="card-text">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی...</p>
                        <!-- Card info -->
                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                            <li class="nav-item">
                                <div class="nav-link">
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{asset('assets/images/avatar/02.jpg')}}" alt="avatar">
                                        </div>
                                        <span class="ms-3">با <a href="#" class="stretched-link text-reset btn-link">میلاد بابایی</a></span>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">7 دی، 1400</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Card item END -->
            <!-- Card item START -->
            <div class="col-sm-6">
                <div class="card">
                    <!-- Card img -->
                    <div class="position-relative">
                        <img class="card-img" src="{{asset('assets/images/blog/4by3/03.jpg')}}" alt="Card image">
                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                            <!-- Card overlay bottom -->
                            <div class="w-100 mt-auto">
                                <!-- Card category -->
                                <a href="#" class="badge text-bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>اجتماعی</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-3">
                        <h4 class="card-title"><a href="post-single.html" class="btn-link text-reset">عادات بدی که افراد در صنعت باید آنها را ترک کنند!!!</a></h4>
                        <p class="card-text">دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا...</p>
                        <!-- Card info -->
                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                            <li class="nav-item">
                                <div class="nav-link">
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{asset('assets/images/avatar/03.jpg')}}" alt="avatar">
                                        </div>
                                        <span class="ms-3">با <a href="#" class="stretched-link text-reset btn-link">علی علیزاده</a></span>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">17 تیر، 1400</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Card item END -->
            <!-- Card item START -->
            <div class="col-sm-6">
                <div class="card">
                    <!-- Card img -->
                    <div class="position-relative">
                        <img class="card-img" src="{{asset('assets/images/blog/4by3/04.jpg')}}" alt="Card image">
                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                            <!-- Card overlay bottom -->
                            <div class="w-100 mt-auto">
                                <!-- Card category -->
                                <a href="#" class="badge text-bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>ورزش</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-3">
                        <h4 class="card-title"><a href="post-single.html" class="btn-link text-reset">سال 2022 رویایی و فوق العاده برای طارمی</a></h4>
                        <p class="card-text">برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت...</p>
                        <!-- Card info -->
                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                            <li class="nav-item">
                                <div class="nav-link">
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-xs">
                                            <div class="avatar-img rounded-circle bg-success">
                                                <span class="text-white position-absolute top-50 start-50 translate-middle fw-bold small">SL</span>
                                            </div>
                                        </div>
                                        <span class="ms-3">با <a href="#" class="stretched-link text-reset btn-link">سهراب اسدی</a></span>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">29 مرداد، 1400</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Card item END -->
            <!-- Card item START -->
            <div class="col-sm-6">
                <div class="card">
                    <!-- Card img -->
                    <div class="position-relative">
                        <!-- <img class="card-img" src="assets/images/blog/4by3/05.jpg" alt="Card image"> -->
                        <div class="card-image position-relative">
                            <img class="card-img" src="{{asset('assets/images/blog/4by3/05.jpg')}}" alt="Card image">
                            <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                <!-- Card overlay -->
                                <div class="w-100 my-auto">
                                    <!-- Audio START -->
                                    <div class="player-wrapper bg-light rounded">
                                        <audio class="player-audio" crossorigin>
                                            <source src="{{asset('assets/images/videos/audio.mp3')}}" type="audio/mp3">
                                        </audio>
                                    </div>
                                    <!-- Audio END -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-3">
                        <h4 class="card-title"><a href="post-single.html" class="btn-link text-reset">طرح مجلس برای گرفتن مالیات از سفته بازها</a></h4>
                        <p class="card-text">ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده... </p>
                        <!-- Card info -->
                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                            <li class="nav-item">
                                <div class="nav-link">
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{asset('assets/images/avatar/05.jpg')}}" alt="avatar">
                                        </div>
                                        <span class="ms-3">با <a href="#" class="stretched-link text-reset btn-link">نازنین لولایی</a></span>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">11 دی، 1400</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Card item END -->
            <!-- Card item START -->
            <div class="col-sm-6">
                <div class="card">
                    <!-- Card img -->
                    <div class="position-relative">
                        <img class="card-img" src="{{asset('assets/images/blog/4by3/12.jpg')}}" alt="Card image">
                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                            <!-- Card overlay bottom -->
                            <div class="w-100 mt-auto">
                                <!-- Card category -->
                                <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>اقتصاد</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-3">
                        <h4 class="card-title"><a href="post-single.html" class="btn-link text-reset">رونمایی از طرح بزرگترین تلسکوپ نوری آسیا</a></h4>
                        <p class="card-text">متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان...</p>
                        <!-- Card info -->
                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                            <li class="nav-item">
                                <div class="nav-link">
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{asset('assets/images/avatar/06.jpg')}}" alt="avatar">
                                        </div>
                                        <span class="ms-3">با <a href="#" class="stretched-link text-reset btn-link">زهرا عظیمی</a></span>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">1 خرداد، 1400</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Card item END -->
            <!-- Load more START -->
            <div class="col-12 text-center mt-5">
                <button type="button" class="btn btn-primary-soft">مشاهده بیشتر <i class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>
            </div>
            <!-- Load more END -->
        </div>
    </div>
    <!-- Main Post END -->
@endsection
