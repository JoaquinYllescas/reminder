// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import axios from 'axios';
import router from './router'
import Datepicker from 'vuejs-datepicker';
import vueResource from 'vue-resource';
import urlSearchParams from 'url-search-params';




Vue.config.productionTip = false
Vue.component('axios', axios);
Vue.component('datepicker', Datepicker);
Vue.component('vue-resource', vueResource);
Vue.component('url-search-params', urlSearchParams);



Vue.use(vueResource);


Vue.http.headers.common['Access-Control-Allow-Origin'] = 'http://reminderAPI.dev/create/';
      Vue.http.headers.common['Access-Control-Request-Method'] = 'POST';

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: {
  	App
  }
})
