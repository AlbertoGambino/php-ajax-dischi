// GOAL: Attraverso l'utilizzo di Axios: al caricamento
// della pagina axios chiederà attraverso una
// chiamata API i dischi a php e li stamperà
// attraverso vue.

function init() {
    new Vue({
        el:"#app",

        data:{
            dischi: [],
        },

        mounted() {

                axios.get('data.php')
                    .then(data => {
                        let data1 = data.data;
                        this.dischi = data1;
                    })

                    .catch(e => {
                        console.log(e);
                    })
            }


    });
    }


document.addEventListener("DOMContentLoaded",init);
