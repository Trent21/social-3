window.$ = window.jQuery = require('jquery')
require('bootstrap-sass')

var moment = require('moment')
var Vue = require('vue')
Vue.use(require('vue-resource'))
var app = require('./app')

new Vue(app).$mount('#app')

Vue.transition('stagger', {
  stagger: function (index) {
    // increase delay by 50ms for each transitioned item,
    // but limit max delay to 300ms
    return Math.min(300, index * 50)
  }
})