<div class="card mainStory br mb-4">
            <div class="card-body">
                @foreach($first as $f)
                <div class="row ">

                    <div class="col col-lg-7">
                        <img src="{{ asset('storage/images/'.$f->img) }}" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col col-lg-5">
                        <a href="{{url('post/'.$f->id.'-'.$f->slug)}}" style="font-size: 32px;color: #000;"><strong>{{$f->title}}</strong></a>
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