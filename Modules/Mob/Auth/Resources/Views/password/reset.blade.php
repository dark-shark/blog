@extends('Auth::layouts.send')

@section('title', 'رمز ورود جدید')

@section('content')
    <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
        <div class="bg-primary bg-opacity-10 rounded p-4 p-sm-5">
            <h2>ایجاد رمز عبور جدید</h2>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <!-- Form START -->
            <form class="mt-4" action="{{route('login.store')}}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{$token}}">
            <!-- Email -->
                <div class="mb-3">
                    <label class="form-label" for="email">ایمیل</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{$email}}" id="email" name="email" placeholder="ایمیل خود را وارد کنید">
                    @error('email')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <label class="form-label" for="password">رمز عبور</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="رمز عبور خود را وارد کنید">
                    @error('password')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <label class="form-label" for="password_confirmation">تایید رمز عبور</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="تایید رمز عبور خود را وارد کنید">
                </div>
                <!-- Button -->
                <div class="row align-items-center">
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-success">ذخیره</button>
                    </div>
                </div>
            </form>
            <!-- Form END -->
            <hr>
            <!-- Social-media btn -->
            <div class="text-center">
                <p>برای دسترسی سریع با شبکه اجتماعی خود وارد شوید</p>
                <ul class="list-unstyled d-sm-flex mt-3 justify-content-center">
                    <li class="mx-2">
                        <a href="#" class="btn bg-facebook d-inline-block"><i class="fab fa-facebook-f me-2"></i> ورود Facebook</a>
                    </li>
                    <li class="mx-2">
                        <a href="#" class="btn bg-google d-inline-block"><i class="fab fa-google me-2"></i> ورود با google</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
