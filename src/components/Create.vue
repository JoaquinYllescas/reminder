<template>
  <div class="login">
    <div class="logo">
        <h1>Create Account</h1>
    </div>


    <form id="loginForm" action="">
      <input placeholder="Email" type="email">
      <input placeholder="Password" type="password">
      <datepicker placeholder="Date" id="datePicker"></datepicker>

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
<style  lang="scss">

</style>
