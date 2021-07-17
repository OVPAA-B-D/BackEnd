<template>
   <nav class=" py-4 shadow-lg  bg-white fixed w-full" style="z-index:1">
    <div class="w-80">
    <img class="w-full  h-full" src="BUlogo.png">
    </div>
  </nav>

 
  <div class="flex font-roboto -z-1  pt-16  min-h-screen  ">
      <div class="w-22 static   flex  flex-col items-center py-5  space-y-2  bg-blue-150  ">
      <div class="w-24 flex items-center border-4 border-white justify-center  bg-yellow-150 cursor-pointer mt-10 h-24 rounded-full">
            <span class="material-icons cursor-poi text-white text-4xl">
                add_photo_alternate
            </span>
      </div>
      <div class="flex flex-col items-center">
      <h1  class="uppercase text-white text-lg font-bold">Michael Cinco</h1>
      <h1 class="text-sm text-white">(Admin)</h1>
      </div>
      <div class=" text-white gap-y-3 pt-24 flex flex-col flex-grow ">
          <div class="  flex cursor-pointer w-91 items-center gap-4 bg-yellow-150 space-x-1 shadow-3xl pl-4 py-3">
            <span class="material-icons">
            dashboard
            </span>
            Dashboard
          </div>
        
        <router-link to="/home_admin"> 
         <div class="  flex cursor-pointer w-91 items-center gap-4  space-x-1  pl-4 py-3 " > 
            <i class="fas fa-network-wired"></i>
            Accreditation Management
        </div>
        </router-link>
          <router-link to="/public_folder"> 
          <div class="  flex cursor-pointer w-91 items-center gap-4  space-x-1  pl-4 py-3 " > 
            <img src="/icons/icon8.svg">
            <h1>Public Folder</h1>
          </div>
          </router-link>
      </div>
        
      <div class="relative w-full flex-grow">
      <router-link to="/">
      <div class="w-2/3 absolute bottom-8 drop-shadow-2xl text-white flex items-center space-x-2 pl-4 float-left bg-yellow-150 self-start rounded-r-full  py-3   text-center   ">
        <span class="material-icons transform rotate-180 ">
        logout
      </span>
        <h1 class="cursor-pointer  uppercase">Log out</h1>
      </div>
      </router-link>
      </div>
    </div>
    <div class="flex flex-col gap-y-5 pt-7 px-10 pb-10  w-full">
        <div class="flex w-full gap-2 flex-wrap justify-between">
           <div class="flex bg-gradient-to-b rounded-lg from-blue-150 to-yellow-150 h-26 2xl:w-1/2s w-full  p-0.6" >
                <div class="w-full relative flex flex-col rounded-lg h-full p-5 bg-white">
                    <h1 class="text-blue-150 text-3xl ">Electrical Engineering</h1>
                    <h1 class="text-yellow-150 text-xl ">Level 1 Accredetation</h1>
                   
                        <span class="absolute flex-wrap w-52  bottom-5">
                            <h1 class="text-2xl text-yellow-150">90% out of 100%
                            are done</h1>
                        </span>
                        <span class="absolute right-5 bottom-5">
                            <img src="/img/img4.png"/>
                        </span>
                 
                </div>
            </div>
             <div class="flex bg-gradient-to-b rounded-lg from-blue-150 to-yellow-150 h-26 2xl:w-1/2s w-full  p-0.6" >
                <div class="w-full relative flex flex-col rounded-lg h-full p-5 bg-white">
                    <h1 class="text-blue-150 text-3xl ">Computer Science</h1>
                    <h1 class="text-yellow-150 text-xl ">Level 1 Accredetation</h1>
                   
                        <span class="absolute flex-wrap w-52  bottom-5">
                            <h1 class="text-2xl text-yellow-150">90% out of 100%
                            are done</h1>
                        </span>
                        <span class="absolute right-5 bottom-5">
                            <img src="/img/img4.png"/>
                        </span>
                 
                </div>
            </div>
            <div class="flex bg-gradient-to-b rounded-lg from-blue-150 to-yellow-150 h-26  2xl:w-1/2s w-full p-0.6" >
                <div class="w-full relative flex flex-col rounded-lg h-full p-5 bg-white">
                    <h1 class="text-blue-150 text-3xl ">Electrical Engineering</h1>
                    <h1 class="text-yellow-150 text-xl ">Level 1 Accredetation</h1>
                   
                        <span class="absolute flex-wrap w-52  bottom-5">
                            <h1 class="text-2xl text-yellow-150">90% out of 100%
                            are done</h1>
                        </span>
                        <span class="absolute right-5 bottom-5">
                            <img src="/img/img4.png"/>
                        </span>
                 
                </div>
            </div>
             <div class="flex bg-gradient-to-b rounded-lg from-blue-150 to-yellow-150 h-26 2xl:w-1/2s w-full   p-0.6" >
                <div class="w-full relative flex flex-col rounded-lg h-full p-5 bg-white">
                    <h1 class="text-blue-150 text-3xl ">Computer Science</h1>
                    <h1 class="text-yellow-150 text-xl ">Level 1 Accredetation</h1>
                   
                        <span class="absolute flex-wrap w-52  bottom-5">
                            <h1 class="text-2xl text-yellow-150">90% out of 100%
                            are done</h1>
                        </span>
                        <span class="absolute right-5 bottom-5">
                            <img src="/img/img4.png"/>
                        </span>
                 
                </div>
            </div>
        </div>
        <div class="bg-gradient-to-b p-0.6 rounded-lg h-84 w-full  from-blue-150 to-yellow-150">
            <div class="bg-white flex flex-col gap-y-4 overflow-auto w-full pt-5 pl-5 pr-10 h-full rounded-lg">
                <span class=" flex justify-between">
                    <h1 class="text-blue-150 text-xl">List of all Accreditors</h1>
                    <img src="/icons/icon5a.svg"/>
                </span>
                <span class="flex justify-start gap-x-5">
                    <h1 class="text-sm text-yellow-150">Name</h1>
                    <h1 class="text-sm text-yellow-150">Email</h1>
                    <h1 class="text-sm text-yellow-150">College Assign</h1>
                    <h1 class="text-sm text-yellow-150">Course Program</h1>
                    <h1 class="text-sm text-yellow-150">Date</h1>
                </span>
            </div>
        </div>
        <div class="bg-gradient-to-b p-0.6 rounded-lg h-84 w-full  from-blue-150 to-yellow-150">
            <div class="bg-white flex flex-col gap-y-4 overflow-auto w-full pt-5 pl-5 pr-10 h-full rounded-lg">
                <span class=" flex justify-between">
                    <h1 class="text-blue-150 text-xl">List of all Task Force</h1>
                    <img src="/icons/icon5a.svg"/>
                </span>
                <span class="flex justify-start gap-x-5">
                    <h1 class="text-sm text-yellow-150">Name</h1>
                    <h1 class="text-sm text-yellow-150">Email</h1>
                    <h1 class="text-sm text-yellow-150">College Assign</h1>
                    <h1 class="text-sm text-yellow-150">Course Program</h1>
                    <h1 class="text-sm text-yellow-150">Date</h1>
                </span>
            </div>
        </div>
    </div>    
  </div>
</template>
<style scoped>
</style>
<script>
// @ is an alias to /src

export default {
  data(){
    return{
    }

  },
   methods:{
    
    }
}
</script>
