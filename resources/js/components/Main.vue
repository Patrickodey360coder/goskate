<template>
    <carousel-component></carousel-component>
</template>

<script>
    import Carousel from './Carousel.vue'

    export default {
        components: {
            'carousel-component' : Carousel
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
