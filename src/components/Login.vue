<template>
  <div class="login">
    <div class="logo">
        <h1>Login</h1>
    </div>
    <form id="loginForm" action="">
      <input placeholder="Email" type="email">
      <input placeholder="Password" type="password">

      <input class="send" type="submit" value="Login">
    </form>
  </div>
</template>

<script>
export default {
  name: 'login',
  mounted(){
   console.log(this.$route.name);
  },
  data () {
    return {
     
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">


</style>
