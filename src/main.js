// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import axios from 'axios';
import router from './router'
import Datepicker from 'vuejs-datepicker';



Vue.config.productionTip = false
Vue.component('axios', axios);
Vue.component('datepicker', Datepicker);

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: {
  	App
  }
})
