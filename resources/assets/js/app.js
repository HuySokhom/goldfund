require('./bootstrap');

Vue.use(require('vue-moment'));

Vue.component('passport-clients', require('./components/passport/Clients.vue'));
Vue.component('passport-authorized-clients', require('./components/passport/AuthorizedClients.vue'));
Vue.component('passport-personal-access-tokens', require('./components/passport/PersonalAccessTokens.vue'));

Vue.component('example', { template : '<h1>Example</h1>' });


import Portfolio from './components/Portfolio.vue'

const app = new Vue({
    el: '#app',

    components: {
    	Portfolio
    },

    data: {
    	message: ''
    },

    mounted(){
    	this.message = 'Excellence';
    	//this.listen();

        // $('.date').datepicker({
        //     autoclose: true,
        //     todayHighlight: true,
        //     format: 'yyyy-mm-dd'
        // });
    },

    methods: {
        // listen(){
        //     Echo.channel('ship-channel')
        //     .listen('ShippingStatusUpdated', event => {
        //         console.log(event);
        //     });
        // }
    }
});
