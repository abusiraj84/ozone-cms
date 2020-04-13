<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أوزون سيستم</title>
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
    <form  style="display: none" name="fbCommentCountform" id="fbCommentCountForm" action="{{ route('showpost.update', ['id'=>$idd,$post->slug]) }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">

   
        <input type="text" name="visitCount" id="hiddenFormPostVisitCounter" value="{{ $post->visit_count }}">
    </form>

    <div class="container-fluid">

    </div>
    <div class="mb-sm-4"></div>
    <div class="mb-sm-4"></div>
    <div class="mb-sm-4"></div>

    <div class="wrapper">
        <h5>الأخبار | {{ $post->category->title}}</h5>
        <h1>{{ $post->title}}</h1>
        <p>
            <script>
                document.write(moment.utc('{{ $post->created_at}}').fromNow());
            </script>
        </p>

        <div class="mb-4"> <img src="{{ asset('storage/images/'.$post->img) }}" class="img-fluid" alt="Responsive image" width="1026" height="580"></div>
        <caption>{{ $post->caption}}</caption>

        <div class="row">
            <div class="col-9">
                <p style="font-family: Greta!important;font-size: 22px;">{{$post->body}}</p>
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

<script>
 
    setTimeout(function() {
    
      var $formVar = $('#fbCommentCountForm');
      
      let visitCount = document.getElementById('hiddenFormPostVisitCounter').value;
      
      let visitCountPlusOne = parseInt(visitCount) + 1;
      document.getElementById('hiddenFormPostVisitCounter').value = visitCountPlusOne;
      
      $.ajax({
        url: $formVar.prop("{{ route('showpost', ['id'=>$idd,$post->slug]) }}"),
        method: 'PUT',
        data: $formVar.serialize(),
      });
      }, 1000);
    

  </script>
</body>

</html>