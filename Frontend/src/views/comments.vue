<template>
  <div class="flex flex-col gap-y-3 pb-2" v-for="comment_row in Comments" v-bind:key="comment_row.id">
    <div class="bg-white shadow-3xl flex flex-col h-min w-full p-2 rounded-xl">
      <div class="flex justify-between">
        <div class="flex items-center flex-grow w-max gap-x-2">
          <div class="bg-yellow-150 rounded-full p-0.6 w-10 h-10">
            <img src="/img/img1.jpg" class="w-full h-full rounded-full" />
          </div>
          <div class="flex flex-col">
            <h1 class="text-blue-150 text-sm font-bold">{{comment_row.lastName}}</h1>
            <h1 class="text-yellow-150 text-xs">Internal Accreditor</h1>
          </div>
        </div>
        <div class="flex items-end flex-col text-xs text-gray-150">
          <h1>{{comment_row.createdDate}}</h1>
          <h1>12:00 pm</h1>
        </div>
      </div>
      <div class="flex w-full">
        <p class="text-blue-150">
            {{comment_row.comment}}
          <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. -->
        </p>
      </div>
      <div class="flex items-center flex-row space-x-2">
        <img src="/icons/icon7_eye_open.svg" class="w-4 h-4" />
        <h1 class="text-xs text-yellow-150">5</h1>
      </div>
    </div>
  </div>
</template>

<script>
import api from '../api'
export default {
    props:{
        selectedAreaID: String
    },
    data(){
        return{
            Comments:{
                id:'',
                programLevelAreaID:'',
                createdDate: '',
                modifiedDate: '',
                comment: '',
                accreditorEmail: '',
            }
        }
    },
    methods:{
        getComments(e){
            api
                .get("api/getComments", e.programLevelAreaID)
                .then(response => {
                    this.Comments = response.data;
                    console.log("Fetched");
                    console.log(response.data);
                })
                .catch(errors => {
                    console.log(errors.response);
                });
        },
    },
    mounted(){
        this.getComments(this.selectedAreaID);
    }
};
</script>

<style>
</style>