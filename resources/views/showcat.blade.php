<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Cairo:300,400,600,700&display=swap" rel="stylesheet">
    <link href="{{ url('assets/plugins/global/plugins.bundle.css' )}}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/slick/slick.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/slick/slick-theme.css')}}" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="{{ url('assets/slick/slick.js')}}" type="text/javascript"></script>
    <script src="{{ url('assets/js/moment.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('assets/js/moment-ar.js')}}" type="text/javascript"></script>
    <style>
        @font-face {
            font-family: OptimusPrinceps;
            src: url("{{asset('/fonts/al-jazeera-arabic-bold.woff')}}");
        }

        body {
            background: #f2f2f2;
        }

        .wrapper {
            width: 1200px;
            margin: 0 auto;
        }

        .mainStory__relatedElement:before {
            content: '';
            display: block;
            top: 0;
            right: 0;
            width: 32px;
            height: 5px;
            margin-bottom: 8px;
            background: #fec300;
        }

        .mainStory {
            background: #fff;
            margin-top: 0;
            border-bottom: solid 1px rgba(178, 178, 178, .5);
            padding-bottom: 16px;
        }

        .card__title {
            font-family: Al-Jazeera-Arabic-Bold;
            display: block;
            color: #000;
            font-size: 26px;
        }

        .leftCard__title:before {
            content: '';
            position: absolute;
            bottom: 3px;
            height: 4px;
            width: 100%;
            right: 0;
            background: #fec300;
            z-index: 1;
        }

        .leftCard__title {
            margin-bottom: 32px;
            color: #011f75;
            font-size: 26px;
            position: relative;
            padding-right: 16px;
            line-height: 1;
        }

        .leftCard__title span {
            position: relative;
            z-index: 2;
            background: #fff;
            padding-right: 6px;
            padding-left: 10px;
        }

        .newsBlock {
            border-bottom: solid 1px #d8d8d8;
            margin-bottom: 16px;
        }

        a {
            padding-bottom: 16px;

            display: block;
            color: #000;
        }

        .newsBlock:last-child {
            border-bottom: none;
        }

        .avatar {
            vertical-align: middle;
            width: 100px;
            height: 100px;
            border-radius: 100%;
        }

        .avatarsmall {
            vertical-align: middle;

            border-radius: 50%;
        }

        .card__blogger {
            margin-top: 16px;
            display: inline-block;
        }

        .slider {
            width: 95%;
            margin: 0px auto;
        }

        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
            color: black;
        }


        .slick-slide {
            transition: all ease-in-out .3s;
            /* opacity: .2; */
        }

        .slick-active {
            opacity: 1;
        }

        .slick-current {
            opacity: 1;
        }

        .articleparent {
            position: relative;
            border-radius: 30px;
        }


        .articleparent>img {
            border-radius: 20px 20px 0 0;
        }


        .articleprofile {
            position: absolute;
            bottom: 10px;
        }
    </style>

</head>

<body>
   







    <div class="container">
        <div class="row">
            <div class="col-8">

                @foreach($category->posts as $p)
                <div class="card mainStory mb-4">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                        <img src="{{ asset('storage/images/'.$p->img) }}" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="col-8">
                        <h2>{{ $p->title}}</h2>
                        </div>

                    </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>

</html>