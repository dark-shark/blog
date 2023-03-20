@extends('Auth::layouts.send')

@section('title', 'بازیابی رمز عبور')

@section('content')
    <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
        <div class="bg-primary bg-opacity-10 rounded p-4 p-sm-5">
            <h2>بازنشانی رمز عبور</h2>
        @error('data_problem')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror

        @if(session()->has('message'))
                <div class="alert alert-success" style="text-align: center">{{session()->get('message')}}</div>
        @endif
        @if(session()->has('error'))
                <div class="alert alert-danger" style="text-align: center">{{session()->get('error')}}</div>
        @endif
        <!-- Form START -->
            <form class="mt-4" action="{{route('auth.password.send.email')}}" method="POST">
            @csrf
            <!-- Email -->
                <div class="mb-3">
                    <label class="form-label" for="email">ایمیل</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email" name="email" placeholder="ایمیل خود را وارد کنید">
                    @error('email')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <!-- Button -->
                <div class="row align-items-center">
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-success">بازنشانی رمز عبور</button>
                    </div>
                    <div class="col-sm-8 text-sm-end">
                        <span>آیا قبلا ثبت نام کرده اید؟ <a href="{{route('login')}}"><u>ورود</u></a></span>
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
