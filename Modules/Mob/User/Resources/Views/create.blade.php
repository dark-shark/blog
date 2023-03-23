@extends('Panel::layouts.master')

@section('title', 'ساخت کاربر جدید')

@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <!-- =======================
        Main contain START -->
        <section class="py-4">
            <div class="container">
                <div class="row pb-4">
                    <div class="col-12">
                        <!-- Title -->
                        <h1 class="mb-0 h3">ایجاد کاربر جدید</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Chart START -->
                        <div class="card border">
                            <!-- Card body -->
                            <div class="card-body">
                                @if(count($errors) > 0)
                                    <ul class="alert alert-danger">
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <!-- Form START -->
                                <form method="POST" action="{{route('users.store')}}">
                                    @csrf
                                    <!-- Main form -->
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Post name -->
                                            <div class="mb-3">
                                                <label class="form-label">نام</label>
                                                <input name="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="نام کاربر را وارد کنید" value="{{old('name')}}">
                                                @error('name')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                @enderror
                                                <small>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</small>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <!-- Post name -->
                                            <div class="mb-3">
                                                <label class="form-label">ایمیل</label>
                                                <input name="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="ایمیل کاربر را وارد کنید" value="{{old('email')}}">
                                                @error('email')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                @enderror
                                                <small>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</small>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <!-- Post name -->
                                            <div class="mb-3">
                                                <label class="form-label">رمز عبور</label>
                                                <input name="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="رمز عبور کاربر را وارد کنید" value="{{old('password')}}">
                                                @error('password')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                @enderror
                                                <small>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</small>
                                            </div>
                                        </div>
                                        <!-- Create post button -->
                                        <div class="col-md-12 text-start">
                                            <button class="btn btn-primary w-100" type="submit">ایجاد کاربر</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Form END -->
                            </div>
                        </div>
                        <!-- Chart END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Main contain END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection
