<template>
  <div class="login">
    <div class="logo">
        <h1>Create Account</h1>
    </div>


    <form id="loginForm" action="" v-on:submit.prevent="crearCuenta">
      <input v-model="name" placeholder="Name" type="text">
      <input v-model="email" placeholder="Email" type="email">
      <input v-model="pass" placeholder="Password" type="password">
      <datepicker  v-model="dateB" placeholder="Birthday" id="datePicker"></datepicker>

      <input class="send" type="submit" value="Create">
    </form>
  </div>
</template>


<script>
let moment = require('moment');
import axios from 'axios';
import VueResource from 'vue-resource';



//Para enviar parametros tendremos ke usar este componente, sino en servidor no llegaran bien.
import urlSearchParams from 'url-search-params';
import Push from 'push.js';

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
      dateB: "",
      dLeft: ""
    }
  },
  methods: {
    crearCuenta: function(){
      //Cumple
      console.log(this.dateB);

      //Cumple en MOMENT a OBJETO
      let fecha = moment(this.dateB, "DD-MM-YYYY").toObject();
      console.log(fecha);


      //Dias restantes para el cumple en cso de ke no haya sido aun
      var before = moment((fecha.months+1)+"."+fecha.date,'MM-DD');
      console.log("Before :"+before);
      var now = moment();
      console.log("Now :"+now);






      






      let dLeft = before.diff(now, 'days');
      console.log(dLeft);
       


        //Si ya ha pasado el cumple tendremos ke calcular hasta el anyo ke viene.

        console.log(moment().year());
        if(dLeft < 0){
          // dLeft = now - cumpleAnyoSiguiente;
          console.log("Pasamos x aki");

         //Anyo actual
          // console.log(moment().year());
          let anyoActual = moment().year();

          //Resta:
            // cumple esta anyo
            let cumple1 = ("'"+(anyoActual+1)+"-"+(fecha.months+1)+"-"+fecha.date+"'");   
            cumple1 = moment(cumple1, "YYYY-MM-DD");
            console.log(cumple1);


            //Cumple siguiente anyo para diferencia
            let hoyNextYear = ("'"+(anyoActual)+"-"+(moment().month()+1)+"-"+moment().date()+"'");

            console.log(hoyNextYear);

             hoyNextYear = moment(hoyNextYear, "YYYY-MM-DD");
             console.log(hoyNextYear);

           

            //console.log(cumple1.diff(hoyNextYear, 'days'), ' dias de diferencia');
            dLeft = cumple1.diff(hoyNextYear, 'days');

            
        }else{
          console.log("Todo bien. Cumplira anyos pronto.");
          // Push.create('Hello World!')
          notifications.usuarioCreado();

        }


//Ejemplo resta dias
// var uno = moment('2016-07-12');
// var dos = moment('2018-07-12');

// console.log(dos.diff(uno, 'days'), ' dias de diferencia');
//FIN Ejemplo


      //Calculo los anyos ke tiene la persona
      var iniYear = fecha.years;
      var actualYear = moment().year();

      var years = (actualYear-iniYear);




      //Formateo Fecha para MySQL
      var fechaCumple = fecha.years+"-"+(fecha.months+1)+"-"+fecha.date;

       

      //Forma correcta de mandar parametros por AXIOS
      var params = new URLSearchParams();
      params.append('name', this.name);
      params.append('email', this.email);
      params.append('pass', this.pass);
      params.append('dateB', fechaCumple);
      params.append('dLeft', dLeft);
      params.append('years', years);


      axios({
        method: 'post',
        type: 'JSON',
        url: 'http://reminderapi.dev/conexionphp.php', params
      })
      .then((respuesta) => {
          var dato = respuesta.data;
          // console.log("Yllescas");
          //console.log(respuesta.data);
          if(dato == "Done!"){

          }else if(dato == "This email is already in use."){

          }else{

          }

      })
      .catch((error) => {
        console.log(error);
      });




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
