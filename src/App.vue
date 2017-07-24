<template>
  <div id="app">

    <header>
      <h1>Birthday Reminder</h1>
      <nav>
        <div  v-on:click="menu();" class="hamburguer"><i class="fa" :class="menuClass" aria-hidden="true"></i></div>
         <ul id="menuSlide" class="animated" v-bind:class="{  open: isOpen, slideInLeft: isOpen, slideOutLeft: !isOpen }"  >
          <li class="menuItem" id="home" @click="closeNav();"><router-link to="/">Home</router-link></li>
          <li class="menuItem" id="list" @click="closeNav();"><router-link to="/list">Birthday List</router-link></li>
          <li class="menuItem" id="add" @click="closeNav();"><router-link to="/listado">Add Birthday</router-link></li>
          <li class="menuItem" id="edit" @click="closeNav();"><router-link to="/crear">Edit Birthday</router-link></li>
          <li class="menuItem" id="account" @click="closeNav();"><router-link to="/detalle">My Account</router-link></li>
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
  
  updated(){
    //Menu, activo y no activo
    var home = document.getElementById('home');
    var list = document.getElementById('list');

    var items = document.querySelectorAll('.menuItem');

    // console.log(this.$route.name);

    if((this.$route.name == "Home") || (this.$route.name == "Login") || (this.$route.name == "Account") ){
      this.activeNav(items, home);
    }else if( this.$route.name == "Birthday List" ){
      this.activeNav(items, list);
    }
    //END Menu, activo y no activo


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
      
    },
    closeNav: function(){
      var menu = document.getElementById("menuSlide");

      menu.classList.remove('slideInLeft', 'open'); 
      menu.classList.add('slideOutLeft'); 
      this.menu();
      
    },
    activeNav: function(items, iten){
      [].forEach.call(items, function(el) {
          el.classList.remove("active");
      });

      iten.classList.add("active");
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

@import 'src/scss/style.scss';

</style>
