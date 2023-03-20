<!DOCTYPE html>
<html lang="fa" dir="rtl">

    <head>

        @include('Home::section.meta')

        <title>@yield('title') | {{config('app.name')}}</title>

        @include('Home::section.css')

    </head>

<body>

@include('Home::section.alert')

@include('Home::section.canvas')

@include('Home::section.header')

<!-- **************** MAIN CONTENT START **************** -->
<main>

@include('Home::section.trending')

@include('Home::section.main')

    <!-- =======================
    Main content START -->
    <section class="position-relative">
        <div class="container" data-sticky-container>
            <div class="row">
                @yield('content')
                @include('Home::section.sidebar')
            </div> <!-- Row end -->
        </div>
    </section>
    <!-- =======================
    Main content END -->

    <!-- Divider -->
    <div class="container"><div class="border-bottom border-primary border-2 opacity-1"></div></div>

@include('Home::section.suggest')

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('Home::section.footer')

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

@include('Home::section.js')

</body>

</html>
