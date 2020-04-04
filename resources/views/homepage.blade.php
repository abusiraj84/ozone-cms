<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منصة أوزون الإخبارية</title>

    <link href="{{ url('assets/plugins/global/plugins.bundle.css' )}}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/slick/slick.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/slick/slick-theme.css')}}" rel="stylesheet" type="text/css" />


    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="{{ url('assets/slick/slick.js')}}" type="text/javascript"></script>
    <script src="{{ url('assets/js/moment.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('assets/js/moment-ar.js')}}" type="text/javascript"></script>


    <link rel="stylesheet" href="{{ url('assets/css/mediaelementplayer.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css')}}">


</head>

<body>


    <!-- Cookie bottom -->
    @include('layouts.homepage.cookie')
    <!-- // Cookie bottom -->


    <!-- //Modal Subscribe -->
    @include('layouts.homepage.modalsubscribe')
    <!-- //Modal Subscribe -->


    <div class="container-fluid">

    </div>
    <div class="mb-sm-4"></div>
    <div class="mb-sm-4"></div>
    <div class="mb-sm-4"></div>


    <div class="wrapper">
        <!-- Feature -->
        @include('layouts.homepage.feature')
        <!-- //Feature -->

        <!--  Show on TV Now -->
        @include('layouts.homepage.showontv')
        <!-- // Show on TV Now -->

        <!-- vedio -->
        @include('layouts.homepage.video')
        <!-- //vedio -->


        <div class="row">
            <!-- Latest and sections -->
            @include('layouts.homepage.latest')
            <!-- // Latest and sections -->

            <!-- Most Visited Posts -->
            @include('layouts.homepage.mostvisitedpost')
            <!-- // Most Visited Posts -->

        </div>

    </div>

    <script src="https://unpkg.com/wavesurfer.js"></script>
    <script src="{{ url('assets/js/main.js')}}" type="text/javascript"></script>

</body>
</html>