<template>
<div class="flex flex-col w-full rounded-xl">
  
  
                             <div v-for="(value,index) in listdata" :key="index" class="flex flex-col pt-5 space-y-2 px-10">
                                  <section class="flex flex-row items-center  justify-between">
                                  <h1 class="text-yellow-150 w-1/2">Status</h1>
                                  <h1 class="text-blue-150 w-1/2">{{value.status}} </h1>
                                  </section>
                                  <section class="flex flex-row items-center justify-between">
                                  <h1 class="text-yellow-150 w-1/2">Owner</h1>
                                  <h1 class="text-blue-150 w-1/2">{{value.owner}}</h1>
                                  </section>
                                  <section class="flex flex-row items-center justify-between">
                                  <h1 class="text-yellow-150 w-1/2">Location</h1>
                                  <h1 class="text-blue-150 w-1/2">{{value.location}}</h1>
                                  </section>
                                  <section class="flex flex-row items-center justify-between">
                                  <h1 class="text-yellow-150 w-1/2">Modified</h1>
                                  <h1 class="text-blue-150 w-1/2">{{value.modified}}</h1>
                                  </section>
                                  <section class="flex flex-row items-center justify-between">
                                  <h1 class="text-yellow-150 w-1/2">Accessed</h1>
                                  <h1 class="text-blue-150 w-1/2">{{value.accessed}}</h1>
                                  </section>
                                  <section class="flex flex-row items-center justify-between">
                                  <h1 class="text-yellow-150 w-1/2">Created</h1>
                                  <h1 class="text-blue-150 w-1/2">{{value.created}}</h1>
                                  </section>
                            </div>
</div>
<ul>
  <li >
  </li>
</ul>
</template>

<script>
export default {
  props:{
    listdata: Object
  }
}
</script>

<style>

</style>