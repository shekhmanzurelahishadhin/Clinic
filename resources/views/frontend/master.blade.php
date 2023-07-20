<!doctype html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @php $logo = \App\Models\Logo::latest()->first() @endphp
    <title>{{$logo->site_name}}</title>
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset($logo->favicon)}}">

@include('frontend.includes.style')
</head>
<body>

<div id="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
    </div>
</div>


<button class="scroll-top scroll-to-target" data-target="html">
    <i class="far fa-angle-double-up"></i>
</button>

@include('frontend.includes.header')

@yield('content')


@include('frontend.includes.footer')

@include('frontend.includes.script')
@include('sweetalert::alert')
</body>
</html>
