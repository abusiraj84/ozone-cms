<div class="col-xl-4">
                <div class="card mainStory">
                    <div class="card-body">
                        <div class="leftCard__title"><span>الأكثر تفاعلاً</span></div>
                        @foreach($activity as $key => $active)
                        <div class="newsBlock">
                            <div class="row">
                                <div class="col-2 text-center">
                                <span style="font-size: 40px;color: #ff08c8;">{{ $key+=1 }}</span>
                                </div>
                                <div class="col-10">
                                <a href="{{url('post/'.$active->id)}}" style="font-size: 16px;">{{ $active->title }}</a>
                                </div>
                            </div>
                            
                        </div>

                        @endforeach


                    </div>
                </div>

            </div>