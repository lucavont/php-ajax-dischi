const myApp = new Vue({
    el: '#root',
    data: {
        albums: [],
    },
    methods: {},
    mounted() {
        axios
            .get('http://localhost/dischi-musicali/2/db.php')
            .then(r => {
                this.albums = r.data.response;

            })
    }

})