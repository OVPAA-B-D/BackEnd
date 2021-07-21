<template>
   <nav class=" py-4 shadow-lg  bg-white fixed w-full">
    <div class="w-80">
    <img class="w-full  h-full" src="BUlogo.png">
    </div>
  </nav>

 
  <div class="flex font-roboto  pt-16  min-h-screen  ">
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
      <div class=" text-white space-y-2 pt-24 flex-grow ">
          <div class=" cursor-pointer flex items-center gap-4 pl-4">
            <span class="material-icons">
            dashboard
            </span>
            Dashboard
          </div>
          <div class=" flex cursor-pointer w-91 items-center gap-4 bg-yellow-150 space-x-1 shadow-3xl pl-4 py-3 " > 
            <i class="fas fa-network-wired"></i>
            Accreditation Management</div>
      </div>
        
      <div class="relative w-full flex-grow">
      <div class="w-2/3 absolute bottom-8 drop-shadow-2xl text-white flex items-center space-x-2 pl-4 float-left bg-yellow-150 self-start rounded-r-full  py-3   text-center   ">
        <span class="material-icons transform rotate-180 ">
        logout
      </span>
        <h1 class="cursor-pointer  uppercase">Log out</h1>
      </div>
      </div>
    </div>
    <div class="flex flex-col flex-nowrap  w-full">
      <div class="w-full relative shadow-lg -z-1 bg-gradient-to-r from-white to-blue-150  pl-4 pt-7">
        <div class="flex items-center justify-between pr-5">
        <h1 class="text-2xl text-blue-150 font-normal">Accreditation Management/<a class="font-bold">Information Technology</a></h1>
 
        </div>
      <div class="mt-24 pb-3 cursor-wait">
        <h1 class="text-yellow-150 text-4xl">Level 1 Accreditation</h1>
        <h3 class="text-blue-150 text-5xl">Information Technology</h3>
      </div>
        <div class=" items-center cursor-pointer absolute bottom-0 h-17 flex justify-evenly rounded-t-full right-10 bg-white w-37 ">
          <img class="w-7.5 h-7.5" src="/icons/icon2.svg">
           <img class="w-7.5 h-7.5" src="/icons/icon3.svg">
        </div>
      </div>
      <div class="  flex-col h-full pt-10 p-5 space-y-3">
        <div class=" flex justify-between items-center">
            <div class="flex space-x-2">
                
          <button class=" bg-blue-500  space-x-2
          flex justify-evenly items-center text-white px-3 text-center">
            <p class="material-icons  text-lg ">add_circle_outline</p> <p>Add</p>
          </button>
          <button class=" bg-green-150  space-x-2
          flex justify-evenly items-center text-white px-3 text-center">
            <p class="material-icons  text-sm ">border_color</p> <p  class="text-sm">Rename</p>
          </button>
          <button class=" bg-red-150   space-x-2
          flex justify-evenly items-center text-white px-3 text-center">
            <p class="material-icons  text-sm ">delete</p> <p class="text-sm">Delete</p>
          </button>
            </div>
          <div class="space-x-2  font-normal text-xl flex justify-between items-center h-9 pl-0.5 pr-2 text-white bg-blue-150 ">
            <input type="text" placeholder="Search" class="
            placeholder-blue-150
             pl-3 text-sm text-gray-150 h-8  focus:outline-none" />
            <span class="material-icons">
              search
            </span>
          </div>
        </div>
          <div class="flex-wrap rounded-lg p-0.6 bg-gradient-to-r from-blue-150 to-yellow-150 ">
            <div class=" bg-white gap-y-2 flex flex-col justify-items-start    h-96  p-4 ">
               <div class=" flex space-x-2 items-center">
                   <div class="w-4-h-4">
                   <img src="/icons/icon1.svg">
                   </div>
                   <h1 class="text-blue-150 text-lg">Infomation Technology</h1>
               </div>
                <div class="flex flex-wrap gap-x-4">
                  
                     <div v-for="folderx in folderLevel" :key="folderx.id">
                  <div class="w-10">
                      
                  <img src="/icons/icon4.svg"/>
                
                  </div>
                    <h1>{{folderx.floder_name}}</h1>
                    </div>
                </div>
                
             
          </div>
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
     folderLevel:[ 
     {
       id:1,
       floder_name:'Level 1'
     },
     
     {
       id:2,
       floder_name:'Level 2'
     },
     
     {
       id:3,
       floder_name:'Level 3'
     },
     
     {
       id:4,
       floder_name:'Level 4'
     },
     
     {
       id:5,
       floder_name:'Level 5'
     },
    
     
     ]
    }

  }
}
</script>
