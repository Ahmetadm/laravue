<template>
  <nav>
    <Link href="/">Home</Link>
    <Link href="/listing">Listing</Link>
  </nav>
  <div v-if="flashSuccess" class="success">
    {{ flashSuccess }}
  </div>
  <slot />
</template>

<script setup>
import {Link,usePage} from '@inertiajs/vue3'
import {computed} from 'vue'

const page=usePage()
const flashSuccess=computed(()=>page.props.flash.success)



</script>

<style scoped>
a{
    display: inline-block;
    margin-right: 10px;
}
.success{
    background-color: green;
    color:white;
}
</style>
