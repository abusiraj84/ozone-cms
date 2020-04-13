<template>
    <div class="container-fluid" style="position: fixed;bottom: -3px;right: -10px;zoom: 1.6;">
        <div class="row" style="height:197px">
            <div class="col-12 ">
                   <img v-bind:src="'/storage/images/'+img" v-bind:width="ImgWidth" height="197" >
            </div>
        </div>
        <div class="row justify-content-center" v-bind:style="{width:Thewidth}">
            <div class="col-12">
                <div class="card" >
                    <div class="card-header" ><span class="animated infinite bounceInLeft " v-bind:style="{opacity:TheOpacity,}">خبر عاجل</span></div>

                    <div class="card-body">
                      <span v-bind:style="{opacity:TheOpacity}" class="animated  slideInLeft">{{ msg }}</span> 
                    </div>

                </div>
            </div>

        </div>
    </div>
</template>
<style scoped>
img{
     transition-delay: 5000ms;
     transition: 500ms cubic-bezier(0.99,-0.01, 0.15, 0.97);
}
.card{
     transition-delay:width 1000ms;
     border: 0px solid #ebedf2;
}
.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
   background-color: #ffe422;
    border-bottom: 0px solid #ebedf2;
    color: black;
    font-size: 23px;
    opacity: TheOpacity;
      transition: 500ms cubic-bezier(0.99,-0.01, 0.15, 0.97);
      
}
.card-header span {
    transition: opacity 500ms cubic-bezier(0.99,-0.01, 0.15, 0.97);
transition-delay:  1s;
}
.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
    background: #74129c;
    color: white;
    font-weight: bold;
    font-size: 20px;
    transition: 500ms ease-in-out;
    border:0px;
         
}
/* .card-body span{
    transition: opacity 500ms ease-in-out;
transition-delay:  1.2s ;
} */
.row{
    transition: width 800ms;
    overflow: hidden;
    height: 119px;
}
</style>
<script>
import {Howl, Howler} from 'howler';

export default {
      

  components: {
  },

  data(){
     return {
          showAlert: false,
          msg:'',
          img:'',
          Thewidth:'0px',
          TheOpacity: '0',
          ImgWidth: '0'
     }
  },
  mounted() {
    Echo.channel('testChannel')
    .listen('.noti', (e) => {
               var sound = new Howl({
        src: './storage/time-is-now.mp3',
        onplayerror: function() {
    sound.once('unlock', function() {
      sound.play();
    });
  },
          autoplay: true,
                volume: 0.5,
                onend: function() {
                    console.log('Finished!');
                }
      });



     this.showAlert = true
     this.msg = e.message['title']
     this.img = e.message['img']
     this.Thewidth = '104%'
     this.TheOpacity = '1'
     this.ImgWidth = '300'
    console.log(this.img)

     setTimeout(() => {
      this.TheOpacity = '0';
    }, 60000);

     setTimeout(() => {
      this.ImgWidth = '0';
    }, 59000);

     setTimeout(() => {
       this.Thewidth = '0%'
    }, 61000);











    });
  }
};
</script>
