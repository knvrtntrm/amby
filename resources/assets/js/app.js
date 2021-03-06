/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

window.Event = new Vue({});

Vue.component('office-map', require('./components/OfficeMap.vue'));
Vue.component('offices-map', require('./components/OfficesMap.vue'));

var app = window.app = new Vue({
    el: '#app',
    data:{
    	foreignAddress: null,
        mobileMenuIsActive: false
    },
    methods: {
    	init: function(){
    		Event.$emit('MapsApiLoaded');
    	},
    	calculateRoute(){
    		Event.$emit('calculateRoute', this.foreignAddress);
    	},
        openMaps(){
            Event.$emit('openInMaps', this.foreignAddress);
        },
        toggleMobileMenu(){
            this.mobileMenuIsActive = !this.mobileMenuIsActive;
        }
    }
});
