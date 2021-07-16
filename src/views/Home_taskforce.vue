<template>
   <nav class=" py-4 shadow-lg  bg-white fixed w-full">
    <div class="w-80">
    <img class="w-full  h-full" src="BUlogo.png">
    </div>
  </nav>

  <!-- MENU -->
  <div class="flex font-roboto -z-1  pt-16  min-h-screen  ">
     <!-- TO FIX: HOVER AND CALL OF ELEMENTS -->
     <div class="w-22 static   flex  flex-col items-center py-5  space-y-2  bg-blue-150  ">
      <div class="w-24 flex items-center border-4 border-white justify-center  bg-yellow-150 cursor-pointer mt-10 h-24 rounded-full">
            <span class="material-icons cursor-poi text-white text-4xl">
                add_photo_alternate
            </span>
      </div>
      <div class="flex flex-col items-center">
      <h1  class="uppercase text-white text-lg font-bold">Do Thirdy</h1>
      <h1 class="text-sm text-white">(Taskforce)</h1>
      </div>
      <div class=" text-white space-y-2 pt-24 flex-grow ">
          <div class=" cursor-pointer flex items-center gap-4 pl-4">
            <i class="fas fa-network-wired"></i>
            Accreditation Management</div>
         <div class=" cursor-pointer flex items-center gap-4 pl-4">
            <img src="/icons/icon8.svg">
            <h1>Public Folder</h1>
          </div>
          <div class=" flex cursor-pointer w-91 items-center gap-4 bg-yellow-150 space-x-1 shadow-3xl pl-4 py-3 " > 
            <img src="/icons/icon20.svg">
            Task Force Members
          </div>
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




  <!-- TASK FORCE ADDING PAGE -->
    <div class="flex flex-col  w-full">
      <div class="w-full  pl-4  pt-7 bg-default bg-cover"  >  
        <div class="flex items-center justify-between pr-5">
        <h1 class="text-2xl text-blue-150 font-normal">Task Force Members/<a class="font-bold">Information Technology</a></h1>
        </div>
        <h1 class="text-5xl text-yellow-150 pt-24 pb-3 ">Task Force Members</h1>
      </div>

<!--  -->
      <div class="  flex-col h-full pt-10 px-4  space-y-3">
        <div class=" flex justify-between  items-center">
            <div class="flex space-x-2 ">  
              <button @click=" show_add_accre=!show_add_accre" class=" bg-blue-500  space-x-2
              flex justify-evenly items-center text-white px-3 text-center">
                <p class="material-icons  text-lg ">add_circle_outline</p> <p>Add Member</p>
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


          <div class=" flex  flex-wrap rounded-lg p-0.6 bg-gradient-to-r from-blue-150 to-yellow-150  h-99">
            <div class=" flex flex-col w-full rounded-lg bg-white justify-center h-full  p-4 ">
              <!-- TO ADD: TABLE HERE -->
            </div>
          </div>


      </div>
    </div>

<!--Add Member-->
           <div v-if=" show_add_accre" class="fixed  flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
             <div class="w-1/2 h-423 pb-6  bg-white p-3 shadow-3xl rounded-3xl">
                    <div class=" h-full ">
                        <div class="flex justify-end p-3">
                            <button @click="show_add_accre=!show_add_accre" class="text-red-150 text-xl">
                                CLOSE 
                            </button>
                        </div>
                        <div class="flex-col   h-minpx-4">
                            <h1 class="text-yellow-150 text-2xl font-normal pb-2"> &ensp;Adding Member</h1>
                            <div class=" px-3  space-y-3 flex-grow">
                                <input type="text" placeholder="First Name" class="italic shadow-lg placeholder-blue-150 h-12 px-3 w-1/3 border-2 border-blue-150 rounded-lg focus:outline-none"/>
                                <input type="text" placeholder="Middle Name" class="italic shadow-lg placeholder-blue-150 h-12 px-3 w-1/3 border-2 border-blue-150 rounded-lg focus:outline-none"/>
                                <input type="text" placeholder="Last Name" class="italic shadow-lg placeholder-blue-150 h-12 px-3 w-1/3 border-2 border-blue-150 rounded-lg focus:outline-none"/>
                                <input type="text" placeholder="Email" class="italic shadow-lg placeholder-blue-150 h-12 px-3 w-full border-2 border-blue-150 rounded-lg focus:outline-none"/>
                                 <select  class=" bg-white text-blue-150 px-3 italic shadow-lg w-full rounded-lg h-12 focus:outline-none cursor-pointer border-2 border-blue-150 bg-white-150">
                                      <option selected disabled class="mt-1"> Select a role for member</option>
                                 </select>
                                 <div class="flex flex-grow justify-end">
                                     <button @click="confirm_accre=!confirm_accre" class="rounded-lg shadow-lg bg-blue-500  space-x-2 flex justify-evenly items-center text-white px-3 text-center">
                                        <p class="material-icons  text-lg ">add_circle_outline</p> <p>Add</p>
                                        </button>
                                 </div>
                            </div>
                        </div>
                    </div>
             </div>
             <!--Confimation-->
             <div v-if="confirm_accre" class=" flex fixed w-screen h-full bg-white bg-opacity-25 justify-center items-center">
              <div  class=" flex flex-col space-y-4 justify-center items-center w-97 h-19 pb-6  bg-white p-3 shadow-3xl rounded-3xl">
                <h1 class=" text-xl text-blue-150">Are you sure to perform this action?</h1>
                <div class="flex w-full text-lg justify-center gap-x-4">
                  <button @click="confirm_accre=!confirm_accre" class="text-white  bg-blue-250 py-1 rounded-lg px-4">Confirm</button>
                  <button @click="confirm_accre=!confirm_accre" class=" text-blue-250 border-2 px-4 rounded-lg py-1 border-blue-250">Cancel</button>
                </div>
             </div>
             </div>
          </div>
          <!----->

  </div>
</template>
<style scoped>
.active{
  padding-bottom:3px;
}
</style>
<script>
// @ is an alias to /src
export default {
  data(){
    return{
        show_add_accre:false,
        confirm_accre:false,
    }
  },
}
</script>