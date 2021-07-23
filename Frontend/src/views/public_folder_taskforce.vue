<template>
   <nav class=" py-4 shadow-lg  bg-white fixed w-full">
    <div class="w-80">
    <img class="w-full  h-full" src="BUlogo.png">
    </div>
  </nav>

 
  <div class="flex font-roboto -z-1  pt-16  min-h-screen  ">
     
     <!-- MENU -->
      <div class="w-22 static   flex  flex-col items-center py-5  space-y-2  bg-blue-150  ">
        <div class="w-24 flex items-center border-4 border-white justify-center  bg-yellow-150 cursor-pointer mt-10 h-24 rounded-full">
              <span class="material-icons cursor-poi text-white text-4xl">
                  add_photo_alternate
              </span>
        </div>
        <div class="flex flex-col items-center">
        <!-- USER DETAILS -->
          <h1  class="uppercase text-white text-lg font-bold">Do Thirdy</h1>
          <h1 class="text-sm text-white">(Taskforce)</h1>
        <!-- END OF USER DETAILS -->
        </div>
        <div class=" text-white gap-y-3 pt-24 flex flex-col flex-grow ">
          
          <router-link to="/home_taskforce">
            <div class=" flex cursor-pointer w-91 items-center gap-4  space-x-1  pl-4 py-3 " > 
              <i class="fas fa-network-wired"></i>
              Accreditation Management
            </div>
          </router-link>

          <router-link to="/public_folder_taskforce">
            <div class=" flex cursor-pointer w-91 items-center gap-4 bg-yellow-150 space-x-1 shadow-3xl pl-4 py-3 " >
              <img src="/icons/icon8_public_folder.svg">
              <h1>Public Folder</h1>
            </div>
          </router-link>

          <router-link to="/taskforce_members">
            <div class=" flex cursor-pointer w-91 items-center gap-4  space-x-1  pl-4 py-3 " >
              <img src="/icons/icon20.svg">
              Task Force Members
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
    <!-- END OF MENU -->

    <div class="flex flex-col  w-full">
      <div class="w-full  pl-4  pt-7 bg-default bg-cover"  >  
        <div class="flex items-center justify-between pr-5">
        <h1 class="text-2xl text-blue-150 font-normal">Public Folder</h1>
        </div>
        <h1 class="text-5xl text-yellow-150 pt-24 pb-3 ">Public Folder</h1>
      </div>
      <div class="  flex-col  h-full pt-10 px-4 space-y-3">
        <!-- TO FIX: Align SEARCH to right -->
        <div class=" flex justify-between  items-center">
          <div class="space-x-2  font-normal text-xl flex justify-center items-center p-0.5  pr-2 text-white bg-blue-150 ">
            <input type="text" placeholder="Search" class="
            placeholder-blue-150
             pl-3 text-sm text-gray-150 h-8  focus:outline-none" />
            <span class="material-icons cursor-pointer">
              search
            </span>
          </div>
        </div>

          <div class=" flex  flex-wrap rounded-lg p-0.6 bg-gradient-to-r from-blue-150 to-yellow-150  h-99">
            <div class=" flex flex-col w-full rounded-lg bg-white h-full  p-4 ">
              <div class="w-full flex justify-end pb-2 pr-5">
                  <img src="/icons/icon5.svg"/>
                  <h1 class="text-yellow-150" >Sort by</h1>
              </div>
            <div class=" w-full overflow-y-auto h-full ">
                <div class="w-full h-10 bg-white sticky top-0">
                <h1 class="text-xl font-bold text-blue-150">Public Folder</h1>
                </div>
                <div class="flex flex-row  text-blue-150 justify-start flex-wrap gap-x-6">
                <div v-for="folder_filex in file" :key="folder_filex.id" class="flex flex-col items-center">
                    <div class="mt-7 w-16 h-16 flex items-center cursor-pointer justify-end flex-col flex-wrap  ">
                    <img :src="folder_filex.file_image" />
                    </div>
                     <h1 class="select-none ">{{folder_filex.file_name}}</h1>
                </div>
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
      show_add:false,
        file:[
            {   id:1,
                file_image:'/icons/icon15.png',
                file_name:'Public Folder'
            },
             {   id:2,
                file_image:'/icons/icon13.svg',
                file_name:'Public File'
            },
             {   id:3,
                file_image:'/icons/icon13.svg',
                file_name:'Public File'
            },
               
        ]
    }

  }
}
</script>
