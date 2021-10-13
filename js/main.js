Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        url: 'http://localhost:8888/php-ajax-dischi/api/server.php',
        discs: [],
    },
    created() {
        axios
            .get(this.url)
            .then((res) => {
                this.discs = res.data;
                console.log(res.data);
                }
            )
    }
})