
            <div class="col-xl-8 ">
                @foreach($allposts as $all)
                <div class="card mainStory mb-4 br">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-7">
                                <a href="{{url('post/'.$all->id)}}" class="card__title">{{ $all->title }}</a>
                                <h5 style="line-height: 1.8"><strong>{{ Str::limit($all->description, 150) }}</strong></h5>

                            </div>

                            <div class="col-xl-5">
                                <img src="{{ asset('storage/images/'.$all->img) }}" class="img-fluid br" alt="Responsive image">

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
                <img src="https://via.placeholder.com/794x200.png?text=Visit+WhoIsHostingThis.com+Buyers+Guide%20C/O%20https://placeholder.com/" class="img-fluid br mb-4" alt="Responsive image" data-src="https://www.aljazeera.net/Content/ResponsiveRevamp/images/covid-banner.jpg">
                @endif

                @if($loop->iteration == 3)
                <div class="card mainStory mb-4 br">
                    <div class="card-body">
                    <div class="leftCard__title"><span>مقالات الرأي</span></div>
                        <img src="https://www.aljazeera.net/File/GetImageCustom/c43b506b-9095-4321-a9ea-643ea44c0632/1520/856" class="img-fluid  mb-4" alt="Responsive image">
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

                <!-- Audio -->
                @if($loop->iteration == 6)
                <div class="card mainStory mb-4 " style="background: #530054;">
                    <div class="card-body">
                        <div class="row">

                            <div id="waveform" class="col-12">
                                <center>
                                    <div id="loading"></div>
                                </center>

                                <canvas style="position: absolute; z-index: 2; left: 0px; top: 0px; bottom: 0px; height: 100%; pointer-events: none; width: 100%;"></canvas>

                            </div>
                            <div class="col-12 my-auto">

                                <a href="#" title="Play video" class="play"></a>
                                <button class="btn btn-primary " data-action="play">
                                    <i class="glyphicon glyphicon-play"></i>
                                    تشغيل /
                                    <i class="glyphicon glyphicon-pause"></i>
                                    إيقاف
                                </button>
                            </div>
                            <div class="col-12">
                                <div>Total time: <span id="time-total">0.00</span> seconds</div>
                                <div>Current time: <span id="time-current">0.00</span> seconds</div>
                                <div>Ramaining time: <span id="time-remaining">0.00</span> seconds</div>


                            </div>
                        </div>


                    </div>
                </div>

                @endif
                <!-- // Audio -->


                @endforeach


            </div>