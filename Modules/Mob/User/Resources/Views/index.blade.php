@extends('Panel::layouts.master')

@section('title', 'لیست کاربران')

@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
        Author list START -->
        <section class="py-4">
            <div class="container">
                <!-- Author list title START -->
                <div class="row g-4 pb-4">
                    <div class="col-12">
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <h1 class="mb-sm-0 h3">لیست کاربران</h1>
                            @if(session()->has('success_delete'))
                                <br>
                                <div class="alert alert-success">{{session()->get('success_delete')}}</div>
                            @endif
                            <a href="{{route('users.create')}}" class="btn btn-sm btn-primary mb-0"><i class="fas fa-plus me-2"></i>ساخت کاربر جدید</a>
                        </div>
                    </div>
                </div>
                <!-- Author list title START -->
                <div class="row g-4">
                    <div class="col-12">
                        <!-- Card START -->
                        <div class="card border">
                            <!-- Card header START -->
                            <div class="card-header border-bottom p-3">
                                <!-- Search and select START -->
                                <div class="row g-3 align-items-center justify-content-between">
                                    <!-- Search bar -->
                                    <div class="col-md-8">
                                        <form class="rounded position-relative">
                                            <input class="form-control bg-transparent" type="search" placeholder="جستجو" aria-label="Search">
                                            <button class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
                                        </form>
                                    </div>
                                    <!-- Tab buttons -->
                                    <div class="col-md-3">
                                        <!-- Tabs START -->
                                        <ul class="list-inline mb-0 nav nav-pills nav-pill-dark-soft border-0 justify-content-end" id="pills-tab" role="tablist">
                                            <!-- Grid tab -->
                                            <li class="nav-item">
                                                <a href="#nav-list-tab" class="nav-link mb-0 me-2 active" data-bs-toggle="tab">
                                                    <i class="fas fa-fw fa-list-ul"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- Tabs end -->
                                    </div>
                                </div>
                                <!-- Search and select END -->
                            </div>
                            <!-- Card header END -->

                            <!-- Card body START -->
                            <div class="card-body p-3 pb-0">
                                <!-- Tabs content START -->
                                <div class="tab-content py-0 my-0">

                                    <!-- Tabs content item START -->
                                    <div class="tab-pane fade show active" id="nav-list-tab">
                                        <!-- Table START -->
                                        <div class="table-responsive border-0">
                                            <table class="table align-middle p-4 mb-0 table-hover">
                                                <!-- Table head -->
                                                <thead class="table-dark">
                                                <tr>
                                                    <th scope="col" class="border-0 rounded-start">#</th>
                                                    <th scope="col" class="border-0">نام کاربری</th>
                                                    <th scope="col" class="border-0">ایمیل</th>
                                                    <th scope="col" class="border-0">وضعیت تایید ایمیل</th>
                                                    <th scope="col" class="border-0">تاریخ عضویت</th>
                                                    <th scope="col" class="border-0 rounded-end">عملیات</th>
                                                </tr>
                                                </thead>

                                                <!-- Table body START -->
                                                <tbody class="border-top-0">
                                                <!-- Table row -->
                                                @foreach($users as $user)
                                                <tr>
                                                    <!-- Table data -->
                                                    <td>
                                                        <div class="d-flex align-items-center position-relative">
                                                            <div class="mb-0 ms-2">
                                                                <!-- Title -->
                                                                <h6 class="mb-0"><a href="#" class="stretched-link">{{$loop->iteration}}</a></h6>
                                                            </div>
{{--                                                            <!-- Image -->--}}
{{--                                                            <div class="avatar avatar-md">--}}
{{--                                                                <img src="assets/images/avatar/09.jpg" class="rounded-circle" alt="">--}}
{{--                                                            </div>--}}
                                                        </div>
                                                    </td>
                                                    <!-- Table data -->
                                                    <td>{{$user->name}}</td>
                                                    <!-- Table data -->
                                                    <td>{{$user->email}}</td>
                                                    <!-- Table data -->
                                                    <td>
                                                        <span class="badge bg-{{$user->cssStatusEmailVerifiedAt()}}">
                                                            {{$user->textStatusEmailVerifiedAt()}}
                                                        </span>
                                                    </td>
                                                    <!-- Table data -->
                                                    <td>{{jdate($user->created_at)->format('Y-m-d')}}</td>
                                                    <!-- Table data -->
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش">
                                                                <i class="bi bi-pencil"></i>
                                                            </a>
                                                            <form action="{{route('users.destroy', $user->id)}}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف" data-bs-original-title="Block" aria-label="Block">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                                <!-- Table body END -->
                                            </table>
                                            {{$users->links()}}
                                        </div>
                                        <!-- Table END -->
                                    </div>
                                    <!-- Tabs content item END -->
                                </div>
                                <!-- Tabs content END -->
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Card END -->
                    </div>

                    <div class="col-12">
                        <!-- Card START -->
                        <div class="card border">

                            <!-- Card header START -->
                            <div class="card-header border-bottom p-3">
                                <h5 class="mb-2 mb-sm-0">درخواست های جدید</h5>
                            </div>
                            <!-- Card header END -->

                            <!-- Card body START -->
                            <div class="card-body p-3">
                                <!-- Table START -->
                                <div class="table-responsive border-0">
                                    <table class="table align-middle p-4 mb-0 table-hover">
                                        <!-- Table head -->
                                        <thead class="table-dark">
                                        <tr>
                                            <th scope="col" class="border-0 rounded-start">نام نویسنده</th>
                                            <th scope="col" class="border-0">تاریخ</th>
                                            <th scope="col" class="border-0">نام شرکت</th>
                                            <th scope="col" class="border-0 rounded-end">عملیات</th>
                                        </tr>
                                        </thead>

                                        <!-- Table body START -->
                                        <tbody class="border-top-0">
                                        <!-- Table row -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex align-items-center position-relative">
                                                    <!-- Image -->
                                                    <div class="avatar avatar-md">
                                                        <img src="assets/images/avatar/04.jpg" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="mb-0 ms-2">
                                                        <!-- Title -->
                                                        <h6 class="mb-0"><a href="#" class="stretched-link">سهراب نوری</a></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- Table data -->
                                            <td>22 خرداد 1400</td>
                                            <!-- Table data -->
                                            <td>تابناک</td>
                                            <!-- Table data -->
                                            <td>
                                                <a href="#" class="btn btn-sm btn-success-soft me-1 mb-1 mb-lg-0">پذیرفتن</a>
                                                <a href="#" class="btn btn-sm btn-secondary-soft me-1 mb-1 mb-lg-0">رد</a>
                                                <a href="#" class="btn btn-sm btn-primary-soft me-1 mb-0">مشاهده</a>
                                            </td>
                                        </tr>

                                        <!-- Table row -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex align-items-center position-relative">
                                                    <!-- Image -->
                                                    <div class="avatar avatar-md">
                                                        <img src="assets/images/avatar/05.jpg" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="mb-0 ms-2">
                                                        <!-- Title -->
                                                        <h6 class="mb-0"><a href="#" class="stretched-link">نیلوفر حقیقت نژاد</a></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- Table data -->
                                            <td>29 آذر 1400</td>
                                            <!-- Table data -->
                                            <td>مشرق نیوز</td>
                                            <!-- Table data -->
                                            <td>
                                                <a href="#" class="btn btn-sm btn-success-soft me-1 mb-1 mb-lg-0">پذیرفتن</a>
                                                <a href="#" class="btn btn-sm btn-secondary-soft me-1 mb-1 mb-lg-0">رد</a>
                                                <a href="#" class="btn btn-sm btn-primary-soft me-1 mb-0">مشاهده</a>
                                            </td>
                                        </tr>

                                        <!-- Table row -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex align-items-center position-relative">
                                                    <!-- Image -->
                                                    <div class="avatar avatar-md">
                                                        <img src="assets/images/avatar/06.jpg" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="mb-0 ms-2">
                                                        <!-- Title -->
                                                        <h6 class="mb-0"><a href="#" class="stretched-link">فاطمه قنبرزاده</a></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- Table data -->
                                            <td class="text-center text-sm-start">25 مهر 1400</td>
                                            <!-- Table data -->
                                            <td>تسنیم</td>
                                            <!-- Table data -->
                                            <td>
                                                <a href="#" class="btn btn-sm btn-success me-1 mb-1 mb-md-0 disabled">پذیرفته شده</a>
                                                <a href="#" class="btn btn-sm btn-primary-soft me-1 mb-0" data-bs-toggle="modal" data-bs-target="#appDetail">مشاهده</a>
                                            </td>
                                        </tr>

                                        <!-- Table row -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex align-items-center position-relative">
                                                    <!-- Image -->
                                                    <div class="avatar avatar-md">
                                                        <img src="assets/images/avatar/07.jpg" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="mb-0 ms-2">
                                                        <!-- Title -->
                                                        <h6 class="mb-0"><a href="#" class="stretched-link">نیلوفر خالدی</a></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- Table data -->
                                            <td>14 دی 1400</td>
                                            <!-- Table data -->
                                            <td>خبر آنلاین</td>
                                            <!-- Table data -->
                                            <td>
                                                <a href="#" class="btn btn-sm btn-secondary me-1 mb-1 mb-md-0 disabled">رد شده</a>
                                                <a href="#" class="btn btn-sm btn-primary-soft me-1 mb-0" data-bs-toggle="modal" data-bs-target="#appDetail">مشاهده</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <!-- Table body END -->
                                    </table>
                                </div>
                                <!-- Table END -->
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Card END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Author list END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection
