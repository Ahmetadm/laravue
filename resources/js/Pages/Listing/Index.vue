<template>
  <Link href="listing/create">Create Listing Now !</Link>
  <ul>
    <li v-for="listing of listings" :key="listing.id">
      <Link :href="`/listing/${listing.id}`">{{ listing.city }}</Link>
    </li>
  </ul>
</template>
<script setup>
import {Link} from '@inertiajs/vue3'

defineProps({
  listings: {
    type: Array,
  },
})
</script>

<style scoped></style>
