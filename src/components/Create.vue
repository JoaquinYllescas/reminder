<template>
  <div class="login">
    <div class="logo">
        <h1>Create Account</h1>
    </div>


    <form id="loginForm" action="">
      <input v-model="email" placeholder="Email" type="email">
      <input v-model="pass" placeholder="Password" type="password">
      <datepicker  v-model="date" placeholder="Date" id="datePicker"></datepicker>

      <input v-on:click="crearCuenta();" class="send" type="submit" value="Login">
    </form>
  </div>
</template>

<script>
let moment = require('moment');
export default {
  name: 'create',
  mounted(){

    document.querySelector("#datePicker").onclick = function(){
      
    }
  },
  data () {
    return {
      email: "",
      pass: "",
      date: ""
    }
  },
  methods: {
    crearCuenta: function(){
  
      let fecha = moment(this.date, "DD-MM-YYYY").toObject();
      console.log(fecha);

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
