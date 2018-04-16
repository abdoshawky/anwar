
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// window.axios = require('axios');
// require('request');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    created() {
        Echo.channel('testChannel')
            .listen('triggerEvent', (e) => {
                // request(
                //     {
                //         method: 'get',
                //         uri: 'http://5.5.5.26:8080/api/test/abdotest',
                //         headers: {
                //             'content-type': 'application/json'
                //         },
                //         json: true,
                //     },
                //     function(error, response, body){
                //         console.log('error: ',error, 'respons',response, 'body',body);
                //     }
                // );
            });
    }
});
