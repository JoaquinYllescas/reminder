<template>
  <div class="home">
     <div class="logo" v-bind:class="{  small: loaded}">
      <h1>Birthday Reminder</h1>
      <img src="../assets/logo.png" alt="">
    </div>


    <div v-if="loaded==true" class="button">
      <a class="login" href="">
        Login
      </a>
      <a class="createAccount" href="">
        Create Account
      </a>
    </div>

    <div v-else class="logo">
      <div class="loading">
        Loading...
      </div>
    </div>

    
    


  </div>
</template>

<script>
export default {
  name: 'home',
  data () {
    return {
      loaded: false
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.home{
  .logo{
    width:60%;
    margin:0px auto;

    

    
    
   

    h1{
      color:#ffffff;
      font-weight:100;
      font-style:normal;
      margin-top:30%;
    }

    &.small{
      transition-property: width;
      transition-duration: 0.3s;
      transition-timing-function: linear;
      transition-delay: 0.5s;
      width:40%;
    }

  }

  .loading{
    font-size:18px;
    color:#ffffff;
    padding-top:50px;
    font-weight:100;
  }
  
  .login, .createAccount{
    display:block;
    max-width:50%;
    margin:20px auto 0px auto;
    padding:20px 50px;
    background-color:#b3cfe1;
    text-decoration:none;
    color:#000000;
    box-shadow:0px 3px 5px rgba(0,0,0,.8);
  }
  

}

</style>
