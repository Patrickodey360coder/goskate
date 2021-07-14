<template>
    <div>
        <carousel-component></carousel-component>
        <skaters-component :skate="skaters"></skaters-component>
    </div>
</template>

<script>
    import Carousel from './Carousel.vue'
    import Skaters from './Skaters.vue'

    export default {
        components: {
            'carousel-component' : Carousel,
            'skaters-component' : Skaters
        },

        data(){
            return {
                skaters: []
            }
        },

        created() {
           this.loadSkaters()
        },

        methods: {
            loadSkaters(){
                console.log('loaded skaters')
                axios.get('/api/skaters')
                    .then((res) => {
                        this.skaters = res.data
                        console.log(this.skaters)
                    })
                    .catch((err)=> {
                        console.log(err)
                    })
            },

        },


    }
</script>
