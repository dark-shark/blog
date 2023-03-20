<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<title>تایید ایمیل کاربری | Bigilog</title>
<title>@yield('title') | {{config('app.name')}}</title>

@section('title', 'تایید ایمیل')

<h1 style="text-align: center; margin-top: 50px">تایید ایمیل</h1>
<center><img style="text-align: center; margin-top: 30px" src="{{asset('assets/images/tick.png')}}" alt=""></center>
@if(session()->has('message'))
    <div class="alert alert-success" style="text-align: center">{{session()->get('message')}}</div>
@endif
<p style="text-align: center; font-size: 20px">یک ایمیل به<p><h1 style="font-size: 30px; text-align: center;">{{auth()->user()->email}}</h1><p style="text-align: center; font-size: 20px">  ارسال شده است. لطفا</p>
<p style="text-align: center; font-size: 17px">روی لینک موجود در ایمیل کلیک کنید</p>
<div style="text-align: center; margin-top: 40px">
    <a style="text-align: center" href="{{route('home.index')}}" class="btn btn-primary">بازگشت به خانه</a>
    <br>
    <br>
    <br>
    <a style="text-align: center" href="#" onclick="event.preventDefault();document.getElementById('resend-verify-email').submit();" class="btn btn-primary">ارسال دوباره لینک برای ایمیل</a>
</div>
<form action="{{route('verify.resend')}}" method="POST" id="resend-verify-email">@csrf</form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

