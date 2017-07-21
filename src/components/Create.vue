<template>
  <div class="login">
    <div class="logo">
        <h1>Create Account</h1>
    </div>


    <form id="loginForm" action="">
      <input placeholder="Email" type="email">
      <input placeholder="Password" type="password">
      <input placeholder="Date" type="date">

      <input class="send" type="submit" value="Login">
    </form>
  </div>
</template>

<script>
export default {
  name: 'create',
  data () {
    return {
     
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.login{
  .logo{
    width:60%;
    margin:0px auto;
  }
  h1{
    color:#ffffff;
    font-weight:100;
    font-style:normal;
    margin-top:10%;
  }

  #loginForm{
    input{
      display:block;
      box-sizing:border-box;
      margin:0px auto;
      border:none;
      -webkit-appearance: none;
      -moz-appearance:    none;
      appearance:         none;
      width: 70%;
      margin: 20px auto 0px auto;
      padding: 20px 20px;
      background-color: #ffffff;
      font-size:22px;
      font-weight:100;

      
    }

    .send{
      color:#ffffff;
      background-color:#002945;
      box-shadow:0px 3px 5px rgba(0,0,0,.8);
    }
  }
}

</style>
