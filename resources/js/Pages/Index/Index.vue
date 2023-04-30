<template>
  <h1>Home Page</h1>
  <p>Message: {{ message }}</p>
</template>

<script setup>


defineProps({
  message:{
    type:String,
  },
})

</script>
