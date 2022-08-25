const app = new Vue({
    el: 'app',
    data: {
        musicposters: [],
    },

    methods: {
        getmusicposters(){
            axios.get('http://localhost/php/php-ajax-dischi/server.php').then
        }
    }
})