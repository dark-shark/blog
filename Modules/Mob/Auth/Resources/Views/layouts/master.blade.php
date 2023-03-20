<!DOCTYPE html>
<html lang="fa" dir="rtl">

    <head>
        <title>@yield('title') | {{config('app.name')}}</title>

        @include('Auth::section.meta')

        @include('Auth::section.css')

    </head>

<body>

@include('Auth::section.header')

<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Inner intro START -->
    <section>
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </section>
    <!-- =======================
    Inner intro END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('Auth::section.footer')

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

@include('Auth::section.js')

</body>

</html>
