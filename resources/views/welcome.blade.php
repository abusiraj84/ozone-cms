<!DOCTYPE html>
<html dir="rtl" lang="ar">

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

    <link rel="stylesheet" href="{{ url('assets/js/mediaelementplayer.css')}}">

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
    <div class="container-fluid">

    </div>
    <div class="mb-sm-4"></div>
    <div class="mb-sm-4"></div>
    <div class="mb-sm-4"></div>

    <div class="wrapper">


        <div class="card mainStory">
            <div class="card-body">
                @foreach($first as $f)
                <div class="row">

                    <div class="col col-lg-7">
                        <img src="{{ asset('storage/images/'.$f->img) }}" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col col-lg-5">
                        <a href="{{url('post/'.$f->id)}}" style="font-size: 32px;color: #000;"><strong>{{$f->title}}</strong></a>
                        <div class="mb-sm-4"></div>
                        <p style="font-size: 18px;color: #454545;margin-top: 12px;margin-bottom: 0;"><strong>{{$f->description}}</strong></p>

                        <div class="row mt-5">
                            <div class="col-xl-10"></div>

                            <div class="col-xl-2">
                                <div style="display:inline-flex;margin-right: -10px;">

                                    <a href="{{url('post/'.$f->id)}}" style=" opacity:1;">
                                        <i class="fab fa-facebook-f" style="font-size: 25px;color:#4468b0"></i>
                                    </a>
                                    <a href="{{url('post/'.$f->id)}}" style=" opacity:1;">
                                        <i class="fab fa-twitter" style="font-size: 25px;color:#2aa3ef;margin-right:20px"></i>
                                    </a>

                                </div>

                            </div>


                        </div>
                    </div>



                </div>
                @endforeach
                <div class="mb-sm-4"></div>
                <div class="row">

                    @foreach($posts as $p)
                    <div class="col-lg-4" style="font-size: 16px;color: #000; font-weight:bold">
                        <a href="{{url('post/'.$p->id)}}" class="mainStory__relatedElement">{{ $p->title }}</a>
                    </div>
                    @endforeach

                </div>


            </div>

        </div>

        <!-- Section 2 -->
        <div class="mb-4"></div>



        <div class="row">

            <div class="col-xl-8 ">
                @foreach($allposts as $all)
                <div class="card mainStory mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-7">
                                <a href="{{url('post/'.$all->id)}}" class="card__title">{{ $all->title }}</a>
                                <h5 style="line-height: 1.8"><strong>{{ Str::limit($all->description, 150) }}</strong></h5>

                            </div>

                            <div class="col-xl-5">
                                <img src="{{ asset('storage/images/'.$all->img) }}" class="img-fluid" alt="Responsive image">

                            </div>
                        </div>
                        <!-- Share -->
                        <div class="row mt-4 ">
                            <div class="col-11">
                                <p id="time" style="padding: 5px 20px;background: #f3ed2b;color: black;display: table;border-radius: 3px;font-size: 8px;">
                                    <script>
                                        document.write(moment.utc('{{ $all->created_at}}').fromNow());
                                        // document.getElementById('time').innerHTML = moment('{{ $all->created_at}}').fromNow();
                                    </script>
                                </p><span style="padding: 5px 20px;background: #5f6af7;color: white;display: inline;border-radius: 3px;font-size: 10px;">{{$all->category->title}}</span>
                                <p style="padding: 5px 20px;background: #f75f5f;color: white;display: inline;border-radius: 3px;font-size: 10px;">
                                    عدد القراءات: {{ $all->visit_count}}
                                </p>

                            </div>
                            <div class="col-1">
                                <div class="row">
                                    <div class="col8 ml-6">
                                        <h5 style="color: #c3c3c3">شارك</h5>

                                    </div>
                                    <div class="col8 ml-2"></div>
                                    <div class="col4"> <i class="fa fa-share" style="color: #c3c3c3"></i></div>
                                </div>
                            </div>
                        </div>
                        <!--End:Share -->

                    </div>
                </div>
                <!-- Ads -->
                @if($loop->iteration == 1)
                <img src="https://via.placeholder.com/794x200.png?text=Visit+WhoIsHostingThis.com+Buyers+Guide%20C/O%20https://placeholder.com/" class="img-fluid mb-4" alt="Responsive image" data-src="https://www.aljazeera.net/Content/ResponsiveRevamp/images/covid-banner.jpg">
                @endif

                @if($loop->iteration == 3)
                <div class="card mainStory mb-4">
                    <div class="card-body">
                        <img src="https://www.aljazeera.net/File/GetImageCustom/c43b506b-9095-4321-a9ea-643ea44c0632/1520/856" class="img-fluid mb-4" alt="Responsive image">
                        <h3 class="mb-4" style="color:#c3c3c3; ">مقالات الرأي</h3>
                        <a href="{{url('post/'.$all->id)}}" class="card__title mb-4">{{ $all->title }}</a>
                        <div class="row">
                            <div class="col-xl-2">
                                <img src="{{ asset('storage/images/'.$all->user->img) }}" alt="Avatar" class="img-thumbnail avatar">
                            </div>
                            <div class="col-3 my-auto">
                                <h4 style="color: #666">{{ $all->user->name}}</h4>
                            </div>
                        </div>
                        <!-- Share -->
                        <div class="row">
                            <div class="col-11">
                            </div>
                            <div class="col-1">
                                <div class="row">
                                    <div class="col8 ml-6">
                                        <h5 style="color: #c3c3c3">شارك</h5>

                                    </div>
                                    <div class="col8 ml-2"></div>
                                    <div class="col4"> <i class="fa fa-share" style="color: #c3c3c3"></i></div>
                                </div>
                            </div>
                        </div>
                        <!--End:Share -->
                    </div>
                </div>


                @endif

                @if($loop->iteration == 5)
                <div class="card mainStory mb-4">
                    <div class="card-body">
                        <div class="regular slider">
                            @foreach($allposts as $all)
                            <div class="articleparent" style="border: #ccc solid 1px;height:312px">
                                <img src="{{ asset('storage/images/'.$all->img) }}" width="209" height="118">
                                <h4 style="padding: 10px;font-size: 14px;margin-bottom: 60px">{{ $all->title}} </h4>
                                <div class="row articleprofile" style="padding-right: 10px">
                                    <div class="col-xl-4">
                                        <img src="{{ asset('storage/images/'.$all->user->img) }}" alt="Avatar" class="img-thumbnail avatarsmall">
                                    </div>
                                    <div class="col-8 my-auto">
                                        <h6 style="color: #666">{{ $all->user->name}}</h6>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                        </div>

                    </div>
                </div>
                @endif
                @if($loop->iteration == 6)
                <div class="card mainStory mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 my-auto">

                            <a href="#" title="Play video" class="play"></a>
                            <!-- <button class="btn btn-primary " data-action="play">
                            <i class="glyphicon glyphicon-play"></i>
                            Play /
                            <i class="glyphicon glyphicon-pause"></i>
                            Pause
                        </button> -->
                            </div>
                            <div id="waveform" class="col-9">
                               <center><div id="loading"></div></center> 

                                <canvas style="position: absolute; z-index: 2; left: 0px; top: 0px; bottom: 0px; height: 100%; pointer-events: none; width: 870px;" width="1740" height="400"></canvas>

                            </div>
                        </div>

                        
                    </div>
                </div>

                @endif


                @endforeach


            </div>



            <div class="col-xl-4">
                <div class="card mainStory">
                    <div class="card-body">
                        <div class="leftCard__title"><span>الأكثر تفاعلاً</span></div>
                        @foreach($activity as $active)
                        <div class="newsBlock">
                            <a href="{{url('post/'.$active->id)}}" style="font-size: 16px;">{{ $active->title }}</a>
                        </div>

                        @endforeach


                    </div>
                </div>

            </div>
        </div>

    </div>



    <script type="text/javascript">
        $(document).on('ready', function() {

            $(".regular").slick({
                rtl: true,
                dots: true,

                slidesToShow: 3,
                slidesToScroll: 3
            });

        });
    </script>

    <script>
        window.addEventListener('load', function() {
            var allimages = document.getElementsByTagName('img');
            for (var i = 0; i < allimages.length; i++) {
                if (allimages[i].getAttribute('data-src')) {
                    allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
                }
            }
        }, false)
    </script>
    <script src="https://unpkg.com/wavesurfer.js"></script>
    <script>
        'use strict';

        // Create an instance
        var wavesurfer = {};

        // Init & load audio file
        document.addEventListener('DOMContentLoaded', function() {
            wavesurfer = WaveSurfer.create({
                container: document.querySelector('#waveform'),
                waveColor: '#D9DCFF',
                progressColor: '#4353FF',
                cursorColor: '#4353FF',
                barWidth: 3,
                barRadius: 3,
                cursorWidth: 1,
                height: 100,
                barGap: 3,
                deferInit: true

            });
            wavesurfer.on('loading', function(e) {
                if (e < 100) {
                    console.log(e)
                    document.getElementById('loading').innerHTML = '<div class="progress "><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="' + e + '"aria-valuemin="0" aria-valuemax="100" style="width:' + e + '%" height:"300">' + e + '% جاري التحميل ...</div></div>';

                } else {
                    document.getElementById('loading').innerHTML = '';

                }
            });



            wavesurfer.on('error', function(e) {
                console.warn(e);
            });

            // Load audio from URL
            wavesurfer.load('https://traffic.omny.fm/d/clips/9c074afa-3313-47e8-b802-a9f900789975/7b2130d4-47ff-4252-ae6a-aacb00edd1a7/91a0cb90-eb5b-4a07-a35d-aad700d9c5ac/audio.mp3?requestSource=Widget&utm_source=Embed&download=true');

            // Play button
            var button = document.querySelector('[data-action="play"]');

            button.addEventListener('click', wavesurfer.playPause.bind(wavesurfer));
        });
    </script>
</body>

</html>