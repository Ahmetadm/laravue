<script setup>
import {useForm} from '@inertiajs/vue3'
const props=defineProps({
  listing: {
    type: Object,
  },
})

const form=useForm({
  beds:props.listing.beds,
  baths:props.listing.baths,
  area:props.listing.area,
  city:props.listing.city,
  code:props.listing.code,
  street:props.listing.street,
  street_nr:props.listing.street_nr,
  price:props.listing.price,
})

const update = () => form.put(`/listing/${props.listing.id}`)
</script>
<template>
  <form @submit.prevent="update">
    <div>
      <div>
        <label>Beds</label>
        <input v-model.number="form.beds" type="text" />
      </div>
      <div v-if="form.errors.beds" class="error">
        {{ form.errors.beds }}
      </div>

      <div>
        <label>Baths</label>
        <input v-model.number="form.baths" type="text" />
      </div>
      <div v-if="form.errors.baths" class="error">
        {{ form.errors.baths }}
      </div>
      <div>
        <label>Area</label>
        <input v-model.number="form.area" type="text" />
      </div>
      <div v-if="form.errors.area" class="error">
        {{ form.errors.area }}
      </div>

      <div>
        <label>City</label>
        <input v-model.trim="form.city" type="text" />
      </div>
      <div v-if="form.errors.city" class="error">
        {{ form.errors.city }}
      </div>

      <div>
        <label>Post Code</label>
        <input v-model.trim="form.code" type="text" />
      </div>
      <div v-if="form.errors.code" class="error">
        {{ form.errors.code }}
      </div>
      <div>
        <label>Street</label>
        <input v-model.trim="form.street" type="text" />
      </div>
      <div v-if="form.errors.street" class="error">
        {{ form.errors.street }}
      </div>
      <div>
        <label>Street Nr</label>
        <input v-model.trim="form.street_nr" type="text" />
      </div>
      <div v-if="form.errors.street_nr" class="error">
        {{ form.errors.street_nr }}
      </div>
      <div>
        <label>Price</label>
        <input v-model.number="form.price" type="text" />
      </div>
      <div v-if="form.errors.price" class="error">
        {{ form.errors.price }}
      </div>
      <div>
        <button type="submit">Edit</button>
      </div>
    </div>
  </form>
</template>

<style scoped>
label {
    margin-right: 2em;
}

div {
    padding: 2px
}
.error{
    color:red;
    font-size:12px
}
</style>
