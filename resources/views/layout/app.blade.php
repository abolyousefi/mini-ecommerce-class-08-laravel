<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        {{config('project.title')}}
        |
        @if(isset($title))
            {{$title}}
        @endif
    </title>

    <link rel="stylesheet" href="{{asset('assets/styles/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/swiper/swiper.css')}}">


    <!-- ==========================  DARK MODE SCRIPT ============================= -->
    <script type="text/javascript">
        if (
            localStorage.theme === "dark" ||
            (!("theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>
</head>
@include('layout.icons');

@includeWhen(!isset($withOutHeader), 'layout.header');

@yield('content')

@includeWhen(!isset($withOutFooter),'layout.footer')


<!-- Overlay -->
<div class="overlay"></div>
<div class="search-overlay"></div>

<script src="{{asset("assets/scripts/jquery-3.7.1.min.js")}}"></script>
<script src="{{asset("assets/swiper/swiper.js")}}"></script>
<script src="{{asset("assets/scripts/app.js")}}"></script>
<script type="module" src="{{asset("assets/scripts/slider.js")}}"></script>

@stack('js')

