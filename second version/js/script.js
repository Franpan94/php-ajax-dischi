const app = new Vue({
    el: '#app',
    data: {
        musicposters: [],
    },

    methods: {
        getmusicposters(){
            axios.get('http://localhost/php/php-ajax-dischi/second%20version/server.php').then(result => {
                this.musicposters = result.data;
            })
        }
    },

    created(){
        this.getmusicposters();
    }
})