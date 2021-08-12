<template>
<div class="flex flex-col w-full rounded-xl">
  
  
                             <div v-for="(value,index) in listdata" :key="index" class="flex flex-col pt-5 space-y-2 px-10">
                                  <section class="flex flex-row items-center  justify-between">
                                  <h1 class="text-yellow-150 w-1/2">Status</h1>
                                  <h1 class="text-blue-150 w-1/2">{{value.areaStatus}} </h1>
                                  </section>
                                  <section class="flex flex-row items-center  justify-between">
                                  <h1 class="text-yellow-150 w-1/2">Accreditor</h1>
                                  <h1 class="text-blue-150 w-1/2">{{value.accreditorEmail}} </h1>
                                  </section>
                                  <section class="flex flex-row items-center justify-between">
                                  <h1 class="text-yellow-150 w-1/2">Location</h1>
                                  <h1 class="text-blue-150 w-1/2">{{value.programName}}/{{value.level}} Area Folders</h1>
                                  </section>
                                  <section class="flex flex-row items-center justify-between">
                                  <h1 class="text-yellow-150 w-1/2">Modified By</h1>
                                  <h1 class="text-blue-150 w-1/2">{{value.modifiedBy}}</h1>
                                  </section>
                                  <section class="flex flex-row items-center justify-between">
                                  <h1 class="text-yellow-150 w-1/2">Modified Date</h1>
                                  <h1 class="text-blue-150 w-1/2">{{value.modifiedDate}}</h1>
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