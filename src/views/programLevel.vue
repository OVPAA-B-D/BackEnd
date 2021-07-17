<template>
   <nav class=" py-4 shadow-lg  bg-white z-30 fixed w-full">
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
     <div class=" text-white gap-y-3 pt-24 flex flex-col flex-grow ">
          
          <router-link to="/dashboard">
          <div class=" flex cursor-pointer w-91 items-center gap-4  space-x-1  pl-4 py-3 ">
            <span class="material-icons">
            dashboard
            </span>
            Dashboard
          </div>
          </router-link>
          <div class=" flex cursor-pointer w-91 items-center gap-4 bg-yellow-150 space-x-1 shadow-3xl pl-4 py-3 " > 
             <i class="fas fa-network-wired"></i>
            Accreditation Management
        </div> 
        <router-link to="/public_folder">
       <div class=" flex cursor-pointer w-91 items-center gap-4  space-x-1  pl-4 py-3 " > 
             <img src="/icons/icon8_public_folder.svg">
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
    <div class="flex flex-col flex-nowrap   w-full">
      <div class="w-full cursor-default h-72 relative shadow-lg pl-4 pt-7">
        <img src="img/img3.jpg" class=" object-cover absolute  top-0 left-0 w-full h-full -z-1" />
        <div class="flex items-center justify-between pr-5">
        <h1 class="text-2xl text-blue-150 font-normal">Accreditation Management/<a class="font-bold">Information Technology</a></h1>
        </div>
      <div class="pb-3">
        <h1 class="text-yellow-150 text-xl">Level 1 Accreditation</h1>
        <h3 class="text-blue-150 text-4xl">Information Technology</h3>
        <h1 class="text-lg text-blue-150">Chairman in charge</h1>
       <span class="flex justify-start text-xs text-yellow-150 items-center gap-x-1">
            <img src="/icons/icon16_man.svg"><h1>Johann Abad</h1>
        </span>
        <span class="flex justify-start text-xs text-yellow-150 items-center gap-x-1">
            <img src="/icons/icon17_contact.svg"><h1>0902105050</h1>
        </span>
         <span class="flex justify-start text-xs text-yellow-150 items-center gap-x-1">
            <img src="/icons/icon18_inbox.svg"><h1>johann@gmail.com</h1>
        </span>
        <h1></h1>
      </div>
        <div class=" items-center cursor-pointer absolute bottom-0 h-17 flex justify-evenly  rounded-tl-2xl rounded-tr-2xl  right-10 bg-white w-37 ">
          <img class="w-7.5 h-7.5" src="/icons/icon2_comment.svg">
           <img class="w-7.5 h-7.5" src="/icons/icon3_details.svg">
        </div>
      </div>
      <div class="  flex-col h-full pt-10 px-4  space-y-3">
        <div class=" flex justify-between  items-end">
            <div class="flex space-x-2 ">
                <button @click="show_add_Taskforce=!show_add_Taskforce" class=" text-blue-150   space-x-2 border-2 border-blue-150 rounded-full
          flex justify-center items-center bg-white py-1 px-3 text-center">
            <p class="material-icons  text-sm ">add_circle_outline</p> <p class="text-sm">Add Taskforce</p>
          </button>
            </div>
          <div class="space-x-2  font-normal text-xl flex justify-center items-center p-0.5  pr-2 text-white bg-blue-150 ">
            <input type="text" placeholder="Search" class="
            placeholder-blue-150
             pl-3 text-sm text-gray-150 h-8  focus:outline-none" />
            <span class="material-icons cursor-pointer">
              search
            </span>
          </div>
        </div>
          <div class="flex flex-row h-99  bg-gradient-to-b from-blue-150 to-yellow-150 rounded-xl  p-0.6 ">
            <div class=" bg-white rounded-xl overflow-auto   gap-y-2 flex flex-col justify-items-start  flex-grow  h-full  p-4 ">
               <div class=" flex sticky top-0 space-x-2 items-center">
                   <div class=" cursor-pointer w-4 h-4">
                   <img src="/icons/icon1_arrow_back.svg">
                   </div>
                   
                    <h1 class="sticky top-0 text-blue-150 text-lg cursor-pointer">
                       <router-link to="/home_admin"> <a class="hover:underline">Infomation Technology</a></router-link >
                   </h1>
                
                  
               </div>
                <div class=" flex-row flex flex-wrap pl-7">
                  
                     <div v-for="folderx in folderArea" :key="folderx.id" class="text-center justify-center items-center">
                  <div class=" flex flex-col items-center justify-start w-28  h-auto  mt-10  mr-2cursor-pointer">
                      
                  <router-link to="/program_area"> <img :src="folderx.folder_image" class="w-16"/></router-link>
                <h1 class="text-blue-150">{{folderx.floder_name}}</h1>
                  </div>
                    
                    </div>
                </div>
                
             
          </div>
          </div> 
      </div>
    </div>
        <!--Add task force-->
           <div v-if=" show_add_Taskforce" class="fixed z-30 flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
             <div class="flex flex-col gap-y-3 w-83 bg-white p-10 shadow-3xl rounded-xl">
                  <span class="flex items-center justify-between w-full ">
                    <h1 class=" text-yellow-150 text-lg">Adding Task Force</h1>
                    <h1 @click="show_add_Taskforce=!show_add_Taskforce" class=" cursor-pointer text-red-150 text-lg">Close</h1>
                  </span>
                  <div class="flex items-center gap-4 justify-between flex-wrap">
                      <span>
                        <h1 class="text-blue-150 text-sm">Firstname</h1>
                        <input  type="text"  class="italic  text-blue-150 w-75 px-4 rounded-sm  h-11 focus:outline-none cursor-text border-2 border-blue-150"/>
                      </span>
                        <span>
                        <h1 class="text-blue-150 text-sm">Email</h1>
                        <input  type="email"  class="italic  text-blue-150 w-75 px-4 rounded-sm  h-11 focus:outline-none cursor-text border-2 border-blue-150"/>
                      </span>
                      <span>
                        <h1 class="text-blue-150 text-sm">Middle name</h1>
                        <input  type="text"  class="italic  text-blue-150 w-75 px-4 rounded-sm  h-11 focus:outline-none cursor-text border-2 border-blue-150"/>
                      </span>
                      <span>
                         <select  class="fill-current italic text-blue-150 w-75 px-4 rounded-sm  h-11 focus:outline-none cursor-pointer border-2 border-blue-150">
                      <option selected disabled >Select task force role</option>
                      </select>
                      </span>
                      <span>
                        <h1 class="text-blue-150 text-sm">Last name</h1>
                        <input  type="text"  class="italic  text-blue-150 w-75 px-4 rounded-sm  h-11 focus:outline-none cursor-text border-2 border-blue-150"/>
                      </span>
                      <span class="">
                        <button @click="confirmation=!confirmation" class="flex items-center justify-center px-5 gap-2  w-24 h-8 text-white bg-blue-250"> 
                    <img src="icons/icon20.svg"/>
                    Add
                    </button>
                       </span>
                  </div>
                  <h1 class="text-lg text-blue-150 font-bold">Task Force</h1>
                  <div class="px-4 h-28 gap-y-4 flex flex-col overflow-y-auto">
                        <span class="flex justify-between border-b-2 border-yellow-150">
                            <h1 class="text-lg text-blue-150">Name</h1>
                            <h1 class="text-lg text-yellow-150">Email</h1>
                            <h1 class="text-lg text-yellow-150">Role</h1>
                        </span>
                         <span class="flex justify-between border-b-2 border-yellow-150">
                            <h1 class="text-lg text-blue-150">Name</h1>
                            <h1 class="text-lg text-yellow-150">Email</h1>
                            <h1 class="text-lg text-yellow-150">Role</h1>
                        </span>
                         <span class="flex justify-between border-b-2 border-yellow-150">
                            <h1 class="text-lg text-blue-150">Name</h1>
                            <h1 class="text-lg text-yellow-150">Email</h1>
                            <h1 class="text-lg text-yellow-150">Role</h1>
                        </span>
                           <span class="flex justify-between border-b-2 border-yellow-150">
                            <h1 class="text-lg text-blue-150">Name</h1>
                            <h1 class="text-lg text-yellow-150">Email</h1>
                            <h1 class="text-lg text-yellow-150">Role</h1>
                        </span>
                  </div>
             </div>
             <!--Confimation-->
            <div v-if="confirmation" class="fixed z-30 flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
                 <div class="flex flex-col items-center justify-center gap-y-3 w-96 h-52 bg-white  shadow-3xl rounded-xl">
                 <h1 class="text-blue-150 text-xl">Are you sure to perform this action?</h1>
                  <span class="flex items-center gap-x-3">
                    <button @click="confirmation=!confirmation" class=" select-none bg-blue-250 rounded-lg text-white w-28 h-10">Confirm</button>
                    <button @click="confirmation=!confirmation" class="select-none border-2 rounded-lg border-blue-150 text-blue-250  w-28 h-10">Cancel</button>
                  </span>
                 </div>
           </div>
          </div>
          <!----->
          <!----->

  </div>
</template>
<style scoped>

</style>
<script>
// @ is an alias to /src

export default {
  data(){
    return{
        show_add_Taskforce:false,
        confirmation:false,  
     folderArea:[ 
     {
       id:1,
       folder_image:'/icons/icon21.png',
       floder_name:'Preliminary Survey Visit'
     },
     
     {
       id:2,
       folder_image:'/icons/icon15.png',
       floder_name:'Level 1'
     },
     
     {
       id:3,
       folder_image:'/icons/icon15.png',
       floder_name:'Level 2'
     },
     
     {
       id:4,
       folder_image:'/icons/icon15.png',
       floder_name:'Level 3'
     },
      
     {
       id:5,
       folder_image:'/icons/icon15.png',
       floder_name:'Level 4'
     },
     
     ]
    }

  }
}
</script>
