<div class="row mb-4">
    @foreach ($now as $s)


   @if(date('H:i:s') <= $s->starttime)

    <div class="col-6 mb-4">
        <div class="card mainStory br">
            <div class="card-body">

                <h5 style="background: #ce1111;display: inline-table;color:white;padding: 10px">
                    <?php
                    date_default_timezone_set('Europe/Istanbul');


                    // Note, this gives you a timestamp, i.e. seconds since the Epoch.
                    $start = strtotime($s->start);
                    $end = strtotime($s->end);

                    // This difference is in seconds.
                    $difference = ($start - time()) / 60;
                    $total = ($difference / 60) * 100;
                    if (intval(-$total) > 100) {
                        echo 'السابق';
                    } elseif (intval(-$total) < 0) {
                        echo 'التالي';
                    } else {
                        echo 'يعرض الآن';
                    }
                    ?>
                </h5>
                <div class="mb-3"></div>

                <img src="{{ asset('storage/images/'.$s->img) }}" class="img-fluid br" alt="Responsive image">
                <div class="mb-3"></div>

                <h3>{{ $s->title}}</h3>


                <div class="mb-4"></div>
                <div class="row">
                    <div class="col-8">
                        <div class="progress  text-center">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: <?php
                                                                                                                                                date_default_timezone_set('Europe/Istanbul');


                                                                                                                                                // Note, this gives you a timestamp, i.e. seconds since the Epoch.
                                                                                                                                                $start = strtotime($s->start);
                                                                                                                                                $end = strtotime($s->end);

                                                                                                                                                // This difference is in seconds.
                                                                                                                                                $difference = ($start - time()) / 60;
                                                                                                                                                $total = ($difference / 60) * 100;
                                                                                                                                                echo intval(-$total) . '%';
                                                                                                                                                ?>">
                            </div>
                        </div>

                    </div>
                    <div class="col-4 my-auto ">
                        <p>
                            <?php
                            date_default_timezone_set('Europe/Istanbul');


                            // Note, this gives you a timestamp, i.e. seconds since the Epoch.
                            $start = strtotime($s->start);
                            $end = strtotime($s->end);

                            // This difference is in seconds.
                            $difference = ($start - time()) / 60;
                            $total = ($difference / 60) * 100;
                            if (intval(-$total) > 100) {
                                echo 'عرض';
                            } elseif (intval(-$total) < 0) {
                                echo 'سيعرض';
                            } else {
                                echo 'يعرض';
                            }
                            ?>
                            <script>
                                document.write(moment('{{ $s->start}}').fromNow());
                                console.log(Date("h"));
                            </script>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    @endif
    @endforeach
</div>
