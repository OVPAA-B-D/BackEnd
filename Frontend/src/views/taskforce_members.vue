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
            <div class=" flex cursor-pointer w-91 items-center gap-4  space-x-1  pl-4 py-3 " > 
              <img src="/icons/icon8_public_folder.svg">
              <h1>Public Folder</h1>
            </div>
          </router-link>

          <router-link to="/taskforce_members">
            <div class=" flex cursor-pointer w-91 items-center gap-4 bg-yellow-150 space-x-1 shadow-3xl pl-4 py-3 " >
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




  <!-- TASK FORCE ADDING PAGE -->
    <div class="flex flex-col  w-full">

      <div class="w-full  cursor-default h-72 relative shadow-lg px-4 pt-7">
        <img :src="bg_image" class=" object-cover absolute  top-0 left-0 w-full h-full -z-1" />
        <div class="flex items-center justify-between ">
        <h1 class="text-2xl text-blue-150 font-normal ">Task Force Members/<a class="font-bold">Information Technology</a></h1>
         <input   @change="change_bgImage"  type="file" id="bg_images" class="hidden" />
        </div>
      <h1 class="absolute bottom-4 text-yellow-150 text-5xl">Task Force Members</h1>
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
            <div class=" flex flex-col w-full rounded-lg bg-white  h-full  p-4 table-responsive">
              <!-- TO ADD: TABLE HERE -->

              <table class="table">
                <thead class="text-yellow-150 font-normal text-2xl">
                  <tr class="row">
                    <th scope="col"><p class="material-icons float-left"><button><img src="/icons/icon5.svg"></button></p> Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact No.</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="text-blue-150 font-normal text-xl">
                  <tr class="row">
                    <td>
                      <input type="checkbox" id="" name="taskforce1" value="">
                      <label for="taskforce1">&ensp;Jill Smith</label>
                    </td>
                    <td>jill.smith@bicol-u.edu.ph</td>
                    <td>09123456789</td>
                    <td>Co-Chairman</td>
                    <td>
                      <!-- Action Buttons -->
                        <div class="  flex space-x-3 mb-0.5">
                          <button class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-green-150">
                            <p class="material-icons text-sm ">edit</p> <p  class="text-sm">Edit</p>
                          </button>
                          <button @click=" confirmation_deletion=!confirmation_deletion" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-red-150">
                            <p class="material-icons text-sm ">delete</p> <p class="text-sm">Delete</p>
                          </button>
                        </div>
                      <!-- End of Action Buttons -->
                    </td>
                  </tr>
                  <tr class="row">
                    <td>
                      <input type="checkbox" id="" name="taskforce1" value="">
                      <label for="taskforce1">&ensp;Eve Jackson</label>
                    </td>
                    <td>eve.jackson@bicol-u.edu.ph</td>
                    <td>09123456798</td>
                    <td>Chairman</td>
                    <td>
                      <!-- Action Buttons -->
                        <div class="  flex space-x-3 mb-0.5">
                          <button class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-green-150">
                            <p class="material-icons text-sm ">edit</p> <p  class="text-sm">Edit</p>
                          </button>
                          <button @click=" confirmation_deletion=!confirmation_deletion" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-red-150">
                            <p class="material-icons text-sm ">delete</p> <p class="text-sm">Delete</p>
                          </button>
                          
                        </div>
                      <!-- End of Action Buttons -->
                    </td>
                  </tr>
                </tbody>
              </table>



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
                                <input type="text" placeholder="First Name" class="inline italic shadow-lg placeholder-blue-150 h-12 px-3 border-2 border-blue-150 rounded-lg focus:outline-none"/>
                                <input type="text" placeholder="Middle Name" class="inline italic shadow-lg placeholder-blue-150 h-12 px-3 border-2 border-blue-150 rounded-lg focus:outline-none"/>
                                <input type="text" placeholder="Last Name" class="inline  italic shadow-lg placeholder-blue-150 h-12 px-3 border-2 border-blue-150 rounded-lg focus:outline-none"/>
                                <input type="text" placeholder="Email" class="italic shadow-lg placeholder-blue-150 h-12 px-3 w-full border-2 border-blue-150 rounded-lg focus:outline-none"/>
                                 <select  class=" bg-white text-blue-150 px-3 italic shadow-lg w-full rounded-lg h-12 focus:outline-none cursor-pointer border-2 border-blue-150 bg-white-150">
                                      <option selected disabled class="mt-1"> Select a role for member</option>
                                 </select>
                                 <div class="flex flex-grow justify-end">
                                     <button @click=" confirmation=!confirmation" class="rounded-lg shadow-lg bg-blue-500  space-x-2 flex justify-evenly items-center text-white px-3 text-center">
                                        <p class="material-icons  text-lg ">add_circle_outline</p> <p>Add</p>
                                        </button>
                                 </div>
                            </div>
                        </div>
                    </div>
             </div>
<!--Confimation-->
              <div v-if=" confirmation" class="fixed z-30 flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
                  <div class="flex flex-col justify-evenly items-center gap-y-3 py-5 w-80 h-80 bg-white  shadow-3xl rounded-xl">
                  <img src="icons/icon_confirmation.svg" class="w-16">
                  <div class="flex flex-col text-center">
                  <h1 class="text-blue-250 text-xl">You are about to add a Task Force</h1>
                  <span class="px-16">
                  <h1 class="text-sm text-blue-250 text-opacity-80">After your confirmation, you can still make changes to the information.</h1>
                  </span>
                  </div>
                    <span class="flex items-center gap-x-3">
                      <button @click="confirmation=!confirmation" class=" select-none bg-blue-250 rounded-lg text-white w-28 h-10">Confirm</button>
                      <button @click="confirmation=!confirmation" class="select-none border-2 rounded-lg border-blue-150 text-blue-250  w-28 h-10">Cancel</button>
                    </span>
                  </div>
            </div>
<!--Delete-->
            <div v-if=" confirmation_deletion" class="fixed z-30 flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
                  <div class="flex flex-col justify-evenly items-center gap-y-3 py-5 w-80 h-80 bg-white  shadow-3xl rounded-xl">
                  <img src="icons/icon_warning_red.svg" class="w-16">
                  <div class="flex flex-col text-center">
                  <h1 class="text-red-150 text-xl">You are about to delete this member</h1>
                  <span class="px-16">
                  <h1 class="text-sm text-red-150 text-opacity-80">This action cannot be undone.</h1>
                  </span>
                  </div>
                    <span class="flex items-center gap-x-3">
                      <button @click="confirmation_deletion=!confirmation_deletion" class=" select-none bg-red-150 rounded-lg text-white w-28 h-10">Confirm</button>
                      <button @click="confirmation_deletion=!confirmation_deletion" class="select-none border-2 rounded-lg border-red-150 text-red-150  w-28 h-10">Cancel</button>
                    </span>
                  </div>
            </div>
            <!----->
    </div>
  </div>
</template>
<style scoped>
.active{
  padding-bottom:3px;
}
.row{
  border-bottom:1px solid blue;
}
.inline {
  width: 32.2%;
  display:inline-block;
  margin-right:10.355px;
}
.sideBside{
  display:inline-block;
  margin-right:5px;
}
</style>
<script>
// @ is an alias to /src
export default {
  data(){
    return{
      bg_image:'img/bg_plain.svg',
      show_add_accre:false,
      confirm_accre:false,
    }
  },
  methods:{
      change_bgImage(e){
       const file=e.target.files[0];
        this.bg_image=URL.createObjectURL(file);
    }
  }
}
</script>