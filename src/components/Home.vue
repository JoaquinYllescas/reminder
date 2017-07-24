<template>
  <div class="home">
    <div class="logo" v-bind:class="{  small: loaded}">
      <h1>Birthday Reminder</h1>
      <img src="../assets/logo.png" alt="">
    </div>


    <div v-if="loaded==true" class="button">
      <router-link class="login" to="/login">Login</router-link>
      <router-link class="createAccount" to="/create">Create Account</router-link>
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
      loaded: true
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style  lang="scss">


</style>
