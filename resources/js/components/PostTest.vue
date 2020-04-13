<template>
  <alert
    v-model="showAlert" placement="bottom" duration="400000" type="success" width="100%" dismissable style="background: red;">
    <span class="icon-ok-circled alert-icon-float-left"></span>
    <h2 style="margin-left: 17px;
    color: black;
    margin-top: 30px;
    margin-right: 10px;">عاجل</h2>
    <p style="padding: 15px;
    margin-top: 10px;
    text-align: center;
    font-size: 27px;">{{msg}}</p>
  </alert>

  

</template>

<style scoped>
.alert.top {
    position: fixed;
    bottom: 30px;
    margin: 0 auto;
    left: 0;
    right: 0;
    z-index: 1050;
    top: null;
}
</style>
<script>
import { alert } from "vue-strap";
import {Howl, Howler} from 'howler';

export default {
      

  components: {
    alert
  },

props:['title'],
  data(){
     return {
          showAlert: false,
          msg:''
     }
  },
  mounted() {
    Echo.channel('testChannel')
    .listen('.noti', (e) => {
    //  this.showAlert = true
    //  this.msg = e.message
       // alert(e.message + 'Has been published now');


     
      
    });


  }
};
</script>
