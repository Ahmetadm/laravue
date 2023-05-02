<template>
  <div>
    <h3>Price : {{ listing.price }} $</h3>
    <p>{{ listing.street }} No: {{ listing.street_nr }}, {{ listing.city }}</p>
  </div>
  <Link :href="`/listing/${listing.id}/edit`"> Edit</Link>
</template>
<script setup>
import {Link} from '@inertiajs/vue3'
defineProps({
  listing:{
    type:Object,
  },
})
</script>

<style scoped>

</style>
