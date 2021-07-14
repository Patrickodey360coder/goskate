<template>
    <div>
        <carousel-component></carousel-component>
        <skaters-component></skaters-component>
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

        mounted(){
            this.loadRollers()
        },

        created() {
           this.loadSkaters()
        },



        methods: {
            loadSkaters(){
                console.log('loaded skaters')
            },
            loadRollers(){
                console.log('loadrollers')
            }
        },


    }
</script>
