<template>
  <div class="login">
    <div class="logo">
        <h1>Create Account</h1>
    </div>


    <form id="loginForm" action="" v-on:submit.prevent="crearCuenta">
      <input v-model="name" placeholder="Name" type="text">
      <input v-model="email" placeholder="Email" type="email">
      <input v-model="pass" placeholder="Password" type="password">
      <datepicker  v-model="date" placeholder="Date" id="datePicker"></datepicker>

      <input class="send" type="submit" value="Create">
    </form>
  </div>
</template>

<script>
let moment = require('moment');
import axios from 'axios';
export default {
  name: 'create',
  mounted(){

    document.querySelector("#datePicker").onclick = function(){
      
    }
  },
  data () {
    return {
      name: "",
      email: "",
      pass: "",
      date: "",
      dLeft: ""
    }
  },
  methods: {
    crearCuenta: function(){
  
      let fecha = moment(this.date, "DD-MM-YYYY").toObject();
      console.log(fecha);


      // Send a POST request 
      axios({
        method: 'post',
        url: 'http://reminderAPI.dev/create/',
        data: {
          name: this.name,
          email: this.email,
          pass: this.pass,
          date: this.date,
          dLeft: this.dLeft
        }
      });



    //PETICION GET
      // axios.get('http://reminderAPI.dev/user/'+this.id, {
      // })
      // .then(function (response) {
      //   console.log(response.data);
      // })
      // .catch(function (error) {
      //   console.log(error);
      // });

      //Fecha por separado para pintar
      // let day = fecha.format('D');
      // let month = fecha.format('M');
      // let year = fecha.format('Y');
      // console.log(day);
      // console.log(month);
      // console.log(year);

    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style  lang="scss">

</style>
