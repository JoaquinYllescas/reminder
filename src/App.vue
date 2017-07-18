<template>
  <div id="app">

    <header>
       <ul>
        <li><router-link to="/home">Home</router-link></li>
        <li><router-link to="/listado">Listado</router-link></li>
        <!-- <li><router-link to="/detalle">Detalle</router-link></li> -->
        <li><router-link to="/crear">Crear</router-link></li>
      </ul>
    </header>

    <router-view></router-view>

    <footer>
      <h1>JYR</h1>
    </footer>

  </div>
</template>

<script>
export default {
  name: 'app'
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
#app{
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

  header{
    display:block;
    width:100%;
    height:50px;
    background-color:#004a7a;
  }

  footer{
    display:block;
    width:100%;
    height:50px;
    background-color:#004a7a;
    position:absolute;
    bottom:0px;
  }

  h1{
    margin:0px;
  }
}
</style>
