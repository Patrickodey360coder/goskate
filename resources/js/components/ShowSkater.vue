<template>
  <div class="row">
    <div class="card" style="width: 18rem;" v-bind:key="skater.id" v-for="skater in skate">
      <img src="https://images.pexels.com/photos/3274903/pexels-photo-3274903.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">
      <div class="card-body" >
        <p class="card-title">Name: {{skater.name}}</p>
        <p class="card-text">Age: {{skater.age}}</p>
        <p class="card-text">State: {{skater.state}}</p>
        <p class="card-text">Stance: {{skater.stance}}</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad esse dicta quia harum suscipit doloremque molestiae quae culpa vero sed.</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['skate'],

  data(){
    return {
      name: 'Pato'
    }
  }
}
</script>