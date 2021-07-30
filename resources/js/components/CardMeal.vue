<template>
  <div class="card flex-row mb-3">
    <h1>{{id}}</h1>
    <h1>{{name}}</h1>
    <p>{{description}}</p>
    <h3>{{price}}</h3>
    <h5>{{avaiable}}</h5>
  </div>
</template>

<script>
export default {
  name: 'CardMeal',
  props:['id','name','description','price','avaiable']
}
</script>

<style>

</style>