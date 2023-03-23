<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <title>@yield('title') | {{config('app.name')}}</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Blogzine">
    <meta name="description" content="قالب وبلاگ و مجله خبری مبتنی بر بوت استرپ">

    @include('Panel::section.css')

</head>

<body>
@include('Panel::section.header')

<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Main contain START -->
    <section class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </section>
    <!-- =======================
    Main contain END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('Panel::section.footer')

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

@include('Panel::section.js')

</body>

</html>
