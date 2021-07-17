<template>
   <nav class=" py-4 shadow-lg z-10 bg-white fixed w-full">
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
          <router-link to="/dashboard">
          <div class="  flex cursor-pointer w-91 items-center gap-4  space-x-1  pl-4 py-3">
            <span class="material-icons">
            dashboard
            </span>
            Dashboard
          </div>
          </router-link>
        
        <router-link to="/home_admin"> 
         <div class="  flex cursor-pointer w-91 items-center gap-4  space-x-1  pl-4 py-3 " > 
            <i class="fas fa-network-wired"></i>
            Accreditation Management
        </div></router-link>
          
          <div class=" flex cursor-pointer w-91 items-center gap-4 bg-yellow-150 space-x-1 shadow-3xl pl-4 py-3 " > 
            
            <img src="/icons/icon8_public_folder.svg">
            <h1>Public Folder</h1>
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
    <div class="flex px-8 flex-col  w-full">
    <div class="w-full flex relative h-32  flex-col   pt-7 pb-5 "  > 
        <h1 class="text-blue-150 text-xl">Public Folder/Office</h1>
        <h1 class="text-yellow-150 text-4xl absolute bottom-0">Offices</h1>
      </div>
      <div class="  flex-col  h-full pt-4 space-y-3">
        <div class=" flex justify-between  items-center">
            <div class="flex gap-x-2  items-center">
          <button @click="show_add=!show_add" class=" border-2 border-blue-150 text-blue-150   space-x-2
          flex justify-evenly items-center px-2 text-center">
            <p class="material-icons  text-lg ">add_circle_outline</p> <p>Add Office</p>
          </button>
          </div>
          <div class="space-x-2 cursor-pointer  font-normal text-xl flex justify-between items-center h-9 pl-0.5 pr-2 text-white bg-blue-150 ">
            <input type="text" placeholder="Search" class="
            placeholder-blue-150 pb-1
             pl-3 text-sm text-gray-150 h-8  focus:outline-none" />
            <span class="material-icons">
              search
            </span>
          </div>
        </div>
          <div class=" flex  flex-wrap rounded-lg p-0.6 bg-gradient-to-r from-blue-150 to-yellow-150  h-99">
            <div class=" flex flex-col w-full rounded-lg bg-white h-full  p-4 ">
              <div class="flex w-full gap-x-3 items-center bg-white sticky top-0">
                  <img src="icons/icon1_arrow_back.svg" class="w-6 h-6"/>
                   <select  class=" text-blue-150 w-60 rounded-sm h-9 focus:outline-none cursor-pointer border-2 border-blue-150">
                      <option selected disabled>Filter by</option>
                  </select>
              </div>
              <div class="w-full cursor-pointer select-none flex justify-end pb-2 pr-5">
                  <img src="/icons/icon5_sort.svg"/>
                  <h1 class="text-yellow-150" >Sort by</h1>
              </div>
            <div class=" w-full overflow-y-auto h-full  ">
               <div v-for="officex in offices" :key="officex.office_name" class="border-b pr-3 border-yellow-150" >
                 <div class="flex justify-between  my-3 items-center">
                   <div class="flex space-x-3  items-baseline">
                      <h1 class="text-yellow-150 text-2xl">{{officex.office_name}}</h1>
                      <img @click="edit_office_name=!edit_office_name" src="icons/icon19_rename_orange.svg"  class="cursor-pointer select-none"/>
                      <img src="icons/icon11_delete_red.svg" class="cursor-pointer select-none"/>
                   </div>
                   <button @click="show_add_member=!show_add_member" class=" border-2 border-blue-150 text-blue-150 gap-x-1 px-1
          flex justify-evenly items-center text-center">
            <p class="material-icons  text-xs ">add_circle_outline</p> <p>Add Member</p>
          </button>
                 </div>
                 <div class=" mb-4">
                    <div v-for="memberx in officex.members" :key="memberx.member_name" >
                      <div class="flex justify-between pl-10  pb-1 text-blue-150 items-center">
                        <h1>{{memberx.member_name}}</h1>
                         <h1>{{memberx.email}}</h1>
                         <h1>{{memberx.role}}</h1>
                         <h1>{{memberx.number}}</h1>
                         <span class="flex gap-x-1 ">
                         <button class="flex justify-center items-center bg-green-150 rounded-sm text-white w-20 h-8">
                           <img src="icons/icon14_edit_image.svg" class="w-4"/>
                           <h1>Edit</h1>
                           </button>  <button @click="delete_member=!delete_member" class="flex justify-center items-center bg-red-150 rounded-sm text-white w-20 h-8">
                           <img src="icons/icon11_delete.svg" class="w-4"/>
                           <h1>Delete</h1>
                           </button>
                        </span>
                      </div>
                  </div>
                 </div>
                 
               </div>
               
            </div>
          </div>
          </div>
          
      </div>
    </div>
    <!--Adding Office-->
          <div v-if="show_add" class="fixed  flex justify-center bg-gray-200 z-30 h-max w-screen   bg-opacity-50 overflow-y-auto items-center  inset-0">
              <div class="px-7  rounded-lg shadow-2xl pt-3 pb-9 bg-white w-97 h-min">
                  <div class="flex justify-end">
                  <button @click="show_add=!show_add" class="self-end text-red-500 text-lg ">
                    Close
                  </button>
                  </div>
                <div>
               <span class="mx-5">
                  <h1 class="text-2xl text-yellow-150 ">Adding Office</h1>
               </span>
                <div class="flex flex-col w-full h-full px-8 gap-y-3 ">
                  <span>
                      <h1 class="text-blue-150">Campus</h1>
                    <select  class=" text-blue-250 italic px-3 w-full rounded-lg h-12 focus:outline-none cursor-pointer border-2 border-blue-150">
                      <option selected disabled> Select a campus</option>
                    </select>
                  </span>
                  <span>
                    <h1 class="text-blue-150">Campus</h1>
                    <input type="text" placeholder="Enter office name" class="italic placeholder-blue-250 h-12 px-3 w-full border-2 border-blue-150 rounded-lg focus:outline-none"/>
                  </span>
                    <span class="flex  justify-end">
                    <button class="mt-5 w-20 rounded-sm text-sm gap-x-1 flex items-center justify-center bg-blue-250 text-white">
                       <p class="material-icons  text-lg ">add_circle_outline</p>
                      <h1>Add</h1>
                    </button>
                    </span>
                </div>
              
              </div>
              </div>
          </div>
          <!----->
          <!--Addmember-->
           <div v-if="show_add_member" class="fixed  flex justify-center bg-gray-200 z-30 h-max w-screen   bg-opacity-50 overflow-y-auto items-center  inset-0">
              <div class="pr-6 pl-4 flex relative flex-col gap-y-3  rounded-lg shadow-2xl pt-3 pb-9 bg-white w-max h-80">
                <span class="flex w-full justify-end">
                  <button @click="show_add_member=!show_add_member" class="text-red-150 text-xl">Close</button>
                </span>
                <span>
                  <h1 class="text-yellow-150 text-2xl">Adding Member</h1>
                </span>
                <div class="flex gap-x-3 pl-5 justify-evenly  flex-wrap">
                    <span class="text-blue-150">
                      <h1 class="text-sm">First name</h1>
                      <input type="text" class="h-10 w-60 focus:outline-none pl-3 border-blue-250 border-2 rounded-lg"/>
                    </span>
                     <span class="text-blue-150">
                      <h1 class="text-sm">Middle name</h1>
                      <input type="text" class="h-10 w-60 focus:outline-none pl-3 border-blue-250 border-2 rounded-lg"/>
                    </span>
                    <span class="text-blue-150">
                      <h1 class="text-sm">Last name</h1>
                      <input type="text" class="h-10 w-60 focus:outline-none pl-3 border-blue-250 border-2 rounded-lg"/>
                    </span>
                    
                </div>
                 <div class="flex gap-x-3 pl-5 justify-evenly  flex-wrap">
                    <span class="text-blue-150">
                      <h1 class="text-sm">Role</h1>
                    <select class="h-10 w-60 focus:outline-none pl-3 border-blue-250 border-2 rounded-lg">
                      <option selected disabled>Member’s role</option>
                    </select>  
                    </span>
                     <span class="text-blue-150">
                      <h1 class="text-sm">Email</h1>
                      <input type="text" class="h-10 w-60 focus:outline-none pl-3 border-blue-250 border-2 rounded-lg"/>
                    </span>
                    <span class="text-blue-150">
                      <h1 class="text-sm">Contact number</h1>
                      <input type="text" class="h-10 w-60 focus:outline-none pl-3 border-blue-250 border-2 rounded-lg"/>
                    </span>
                </div>
              <button class="w-28 absolute flex items-center justify-center gap-x-1 bottom-6 rounded-sm  right-4 bg-blue-250 text-white">
              <p class="material-icons  text-lg ">add_circle_outline</p>
               <h1> Add</h1>
              </button>
             </div>
          </div>
          <!----->
        <!--Edit office name-->
                    <div v-if="edit_office_name" class="fixed z-30 flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
                 <div class=" flex flex-col  gap-y-3 w-96 h-52 px-5 py-3 bg-white  shadow-3xl rounded-xl">
                 <span class=" flex justify-end w-full">
                   <h1 @click="edit_office_name=!edit_office_name" class="text-lg cursor-pointer text-red-150">Close</h1>
                 </span>
                 <h1 class="text-yellow-150 text-xl">Rename Office</h1>
                 <div class="w-full relative h-full px-4 ">
                   <h1 class="text-blue-150 text-sm">Office name</h1>
                   <input placeholder="Enter new office name" type="text" class="border-2 italic w-full h-10 pl-3 placeholder-blue-250  focus:outline-none border-blue-250  "/>
                  <button class="bg-blue-250 absolute right-0 bottom-0 rounded-sm text-white w-20 h-6">Update</button>
                 </div>
                 </div>
           </div>
        <!----->
        <!--Delete Member-->
<div v-if="delete_member" class=" flex fixed w-screen h-full bg-white bg-opacity-25 justify-center items-center">
              <div  class=" flex flex-col space-y-4 justify-center items-center w-96 h-52 pb-6  bg-white p-3 shadow-3xl rounded-3xl">
                <h1 class=" text-xl text-blue-150">Do you want to delete this Member?</h1>
                <div class="flex w-full text-lg justify-center gap-x-4">
                  <button @click="delete_member=!delete_member" class="text-white  bg-red-150 py-1 rounded-sm px-4">Confirm</button>
                  <button @click="delete_member=!delete_member" class=" text-blue-250 border-2 px-4 rounded-sm py-1 border-blue-250 font-semibold">Cancel</button>
                </div>
             </div>
             </div>
        <!---->
  </div>
</template>
<style scoped>

</style>
<script>
// @ is an alias to /src

export default {
  data(){
    return{
      bg_image:'img/img2.png',
      show_add:false,
      delete_member:false,
      edit_office_name:false,
      show_add_member:false,
      offices:[
        {
          office_name:'Office of the Vice-President for Academic Affairs',
          members:[
            {member_name:'Member name 1',
            email:'Email',
            role:'Role',
            number:'Number'
            },
             {member_name:'Member name 2',
            email:'Email',
            role:'Role',
            number:'Number'
            },
             {member_name:'Member name 3',
            email:'Email',
            role:'Role',
            number:'Number'
            },
          ]
        },
         {
          office_name:'Office name',
          members:[
            {member_name:'Member name 1',
            email:'Email',
            role:'Role',
            number:'Number'
            },
             {member_name:'Member name 2',
            email:'Email',
            role:'Role',
            number:'Number'
            },
             {member_name:'Member name 3',
            email:'Email',
            role:'Role',
            number:'Number'
            },
          ]
        },
        {
          office_name:'Office name',
          members:[
            {member_name:'Member name 1',
            email:'Email',
            role:'Role',
            number:'Number'
            },
             {member_name:'Member name 2',
            email:'Email',
            role:'Role',
            number:'Number'
            },
             {member_name:'Member name 3',
            email:'Email',
            role:'Role',
            number:'Number'
            },
          ]
        },
      ]
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
