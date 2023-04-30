<template>
  <div>
    <h3>Price : {{ listing.price }} $</h3>
    <p>{{ listing.street }} No: {{ listing.street_nr }}, {{ listing.city }}</p>
  </div>
</template>
<script setup>
defineProps({
  listing:{
    type:Object,
  },
})
</script>

<style scoped>

</style>
