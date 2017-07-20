<template>
  <div id="app">

    <header>
      <h1>Birthday Reminder</h1>
      <nav>
        <div v-on:click="menu();" class="hamburguer"><i class="fa" :class="menuClass" aria-hidden="true"></i></div>
         <ul class="animated" v-bind:class="{  open: isOpen, slideInLeft: isOpen, slideOutLeft: !isOpen }"  >
          <li><router-link to="/home">Birthday List</router-link></li>
          <li><router-link to="/listado">Add Birthday</router-link></li>
          <li><router-link to="/detalle">My Account</router-link></li>
          <li><router-link to="/crear">Edit Birthday</router-link></li>
        </ul>
      </nav>
    </header>
    
    
   

    <router-view></router-view>

    <footer>
      <h1>JYR</h1>
    </footer>

  </div>
</template>

<script>
export default {
  name: 'app',
  mounted(){
    
  },
  data() {
    return{
      isActive: true,
      menuClass: 'fa_bars',
      isOpen: false,
      menuSlide: ''
    }
  },

  methods: {

    /* Funcionalidad de abrir y cerrar menu */
    menu: function(){
      //console.log( this.isActive);
      if(this.isActive == true){
        this.isActive = false;
        this.menuClass = 'fa_times'
        this.menuSlide = 'slideInLeft'

        this.isOpen = true;
      }else{
        this.isActive = true;
        this.menuClass = 'fa_bars'

        this.isOpen = false;
        this.menuSlide = 'slideOutLeft'
      }
      
    }
  }
}
</script>


<!-- Pra usar SCSS instalamos via TERMINAL "SASS LOADER", y anyadimos a webpack.base.conf esto:

loaders: [
{
    test: /\.scss$/,
    loaders: ["style", "css", "sass"]
  }
] -->

<style lang="scss">
html, body{
  padding:0px;
  margin:0px;
  height:100%;
  box-sizing:border-box;
}
img{
  max-width:100%;
}
#app{
  width:100%;
  height:100%;
  font-family: 'Josefin Sans', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin: 0px;
  padding:0px;
  background-color:#0099ff;
  box-sizing:border-box;
  background-image:url("./assets/bg.jpg");
  background-size:cover;
  background-position:center;
  position:fixed;
  top:0px;
  left:0px;

  header{
    display:block;
    width:100%;
    height:50px;
    background-color:#004a7a;

    nav{
      position:absolute;
      width:100%;

      .hamburguer{
        color:#ffffff;
        font-size:30px;
        position: absolute;
        top: 10px;
        left: 15px;
        cursor:pointer;
      }

      ul{
        position: fixed;
        width:80%;
        height:100%;
        background-color:#002c49;
        padding-top:40px;
        margin:0px;
        padding:0px;
        margin-top:50px;
        padding-top:40px;

        li{
          text-align:left;
          list-style:none;
          font-size:30px;
          font-weight:300;
          height:50px;
          line-height:50px;
          padding-left:40px;

          &:hover{
            background-color:#33566d;
          }

          a{
            display:block;
            text-decoration:none;
            color:#ffffff;
          }
        }
       
      }
    }
    h1{
      margin:0px;
      padding:0px;
      font-size:20px;
      font-weight:300;
      color:#ffffff;
      float:right;
      line-height:50px;
      margin-right:20px;
    }
  }

  footer{
    display:block;
    width:100%;
    height:50px;
    background-color:#004a7a;
    position:absolute;
    bottom:0px;

    h1{
      margin:0px;
      padding:0px;
      font-size:14px;
      color:#8da7c2;
      line-height:56px;
    }
  }



  


}
</style>
