
// Slick Script 


    $(document).on('ready', function() {

        $(".regular").slick({
            rtl: true,
            dots: true,

            slidesToShow: 3,
            slidesToScroll: 3
        });

    });


    

// Placeholder img Script 
 

        window.addEventListener('load', function() {
            var allimages = document.getElementsByTagName('img');
            for (var i = 0; i < allimages.length; i++) {
                if (allimages[i].getAttribute('data-src')) {
                    allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
                }
            }
        }, false)

    



   // Audio wavesurfer  

    
 
        'use strict';

        // Create an instance
        var wavesurfer = {};
        var ctx = document.createElement('canvas').getContext('2d');
        var linGrad = ctx.createLinearGradient(0, 64, 0, 200);
        linGrad.addColorStop(0.5, 'rgba(255, 255, 255, 1.000)');
        linGrad.addColorStop(0.5, 'rgba(183, 183, 183, 1.000)');
        // Init & load audio file
        document.addEventListener('DOMContentLoaded', function() {
            wavesurfer = WaveSurfer.create({
                container: document.querySelector('#waveform'),
                waveColor: linGrad,
                progressColor: 'hsla(200, 100%, 30%, 0.5)',
                cursorColor: '#fff',
                barWidth: 3,
                barRadius: 3,
                cursorWidth: 1,
                height: 100,
                barGap: 1,
                deferInit: true,
                responsive: true

            });

            wavesurfer.on('audioprocess', function() {
                if (wavesurfer.isPlaying()) {
                    var totalTime = wavesurfer.getDuration(),
                        currentTime = wavesurfer.getCurrentTime(),
                        remainingTime = totalTime - currentTime;

                    document.getElementById('time-total').innerText = totalTime.toFixed(0);
                    document.getElementById('time-current').innerText = currentTime.toFixed(0);
                    document.getElementById('time-remaining').innerText = remainingTime.toFixed(0);
                }
            });


            wavesurfer.on('loading', function(e) {
                if (e < 100) {
                    //console.log(e)
                    document.getElementById('loading').innerHTML = '<div class="progress "><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="' + e + '"aria-valuemin="0" aria-valuemax="100" style="width:' + e + '%" height:"300" >' + e + '% جاري التحميل ...</div></div>';

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


        

// Cookie Consent 
const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");

cookieButton.addEventListener("click", () => {
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
  if (!localStorage.getItem("cookieBannerDisplayed")) {
    cookieContainer.classList.add("active");
  }
}, 2000);


