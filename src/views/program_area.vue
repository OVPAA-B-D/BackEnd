<template>
   <nav  class=" py-4 shadow-lg  bg-white fixed w-full">
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
          <div class=" flex cursor-pointer w-91 items-center gap-4  space-x-1  pl-4 py-3 ">
            <span class="material-icons">
            dashboard
            </span>
            Dashboard
          </div>
          <div class=" flex cursor-pointer w-91 items-center gap-4 bg-yellow-150 space-x-1 shadow-3xl pl-4 py-3 " > 
             <i class="fas fa-network-wired"></i>
            Accreditation Management
        </div> 
        <router-link to="/public_folder">
       <div class=" flex cursor-pointer w-91 items-center gap-4  space-x-1  pl-4 py-3 " > 
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
      <div class="  flex-col h-full pt-10 px-4  space-y-3">
        <div class=" flex justify-between  items-center">
            <div class="flex space-x-2 ">
                
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
          <button @click=" show_add_accre=!show_add_accre" class=" text-blue-150   space-x-2 border-2 border-blue-150 rounded-full
          flex justify-center items-center bg-white px-3 text-center">
            <p class="material-icons  text-sm ">add_circle_outline</p> <p class="text-sm">Add Accreditor</p>
          </button>
           <button class=" text-blue-150   space-x-2 border-2 border-blue-150 rounded-full
          flex justify-center items-center bg-white px-3 text-center">
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
          <div class="flex flex-row h-99   rounded-xl bg-white p-1 ">
            <div class="overflow-auto bg-gradient-to-b from-blue-150 to-yellow-150 rounded-l-xl gap-y-2 flex flex-col justify-items-start  w-2/3 py-0.6 pl-0.6 h-full">
               <div class="bg-white w-full rounded-l-xl pl-4 h-full">
               <div class=" flex sticky top-0 mt-4 space-x-2 items-center">
                   <div class=" cursor-pointer w-4-h-4">
                   <img src="/icons/icon1.svg">
                   </div>
                   <h1 class="text-blue-150 text-lg cursor-pointer">
                       <router-link to="/home_admin"> <a class="hover:underline">Infomation Technology</a></router-link > >
                   
                    <router-link to="/program_level"><a class="font-bold hover:underline">Level 1</a></router-link></h1>
               </div>
                <div class=" items-center flex-row flex flex-wrap pl-7">
                     <div v-for="folderx in folderArea" :key="folderx.id" class=" text-center justify-center items-center">
                  <div class=" flex justify-center w-28 mt-10 hover:border-2 mr-2 border-yellow-150 cursor-pointer">
                      
               <router-link to="/program_parameter">  <img :src="folderx.folder_icon"></router-link>
                
                  </div>
                    <h1>{{folderx.floder_name}}</h1>
                    </div>
                </div>
                
               </div>
             
          </div>
          <div class=" flex w-1/3 h-full rounded-xl bg-white ">
              <div class=" h-full   flex p-1 rounded-xl flex-grow bg-gradient-to-b from-blue-150 to-yellow-150">
                  <div class="  overflow-auto pb-3 flex flex-col flex-grow rounded-2xl w-full bg-gray-100 h-full">
                        <div class="px-4 pt-2 sticky top-0 flex bg-gray-100 justify-between"> 
                        <div @click="isActive_function('btn1')" :class="{active: activeBtn === 0 }" class="select-none cursor-pointer flex  w-36 bg-gradient-to-r  from-blue-150 to-yellow-150 ">
                           <div @click="change_component('details')" class="bg-gray-100 flex   justify-center w-full  h-full">
                               <h1 class="text-xl text-blue-150 font-bold cursor-pointer">Details</h1>
                            </div> 
                        </div>
                        <div  @click=" isActive_function('btn2')" :class="{active: activeBtn === 'btn2' }"  class=" flex select-none cursor-pointer  w-36 bg-gradient-to-r  from-blue-150 to-yellow-150 ">
                           <div @click="change_component('comments')" class="bg-gray-100 flex  w-full h-full justify-center ">
                               <h1 class="text-xl text-blue-150 font-bold">Comments</h1>
                            </div> 
                        </div>
                        </div>
                         <div class="  flex-col items-center  rounded-xl flex h-full m-5">
                           
                           <component :is="component"/>
                           
                        </div>
                  </div>
              </div>
          </div>
          </div> 
      </div>
    </div>
     <!--Add Accreditor-->
           <div v-if=" show_add_accre" class="fixed  flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
             <div class="w-97 h-97 pb-6  bg-white p-3 shadow-3xl rounded-3xl">
                    <div class=" h-full ">
                        <div class="flex justify-end p-3">
                            <button @click="show_add_accre=!show_add_accre" class="text-red-150 text-xl">
                                CLOSE 
                            </button>
                        </div>
                        <div class="flex-col   h-minpx-4">
                            <h1 class="text-yellow-150 text-2xl font-normal pb-2"> Adding Accreditor</h1>
                            <div class=" px-3  space-y-3 flex-grow">
                                <input type="text" placeholder="Email" class="italic shadow-lg placeholder-blue-150 h-12 px-3 w-full border-2 border-blue-150 rounded-lg focus:outline-none"/>
                                <input type="text" placeholder="Full Name" class="italic shadow-lg placeholder-blue-150 h-12 px-3 w-full border-2 border-blue-150 rounded-lg focus:outline-none"/>
                                   <select  class=" text-blue-150 px-3 italic shadow-lg w-full rounded-lg h-12 focus:outline-none cursor-pointer border-2 border-blue-150">
                                      <option selected disabled class="mt-1"> Role</option>
                                 </select>
                                 <div class="flex flex-grow justify-end">
                                     <button @click="confirm_accre=!confirm_accre" class="rounded-lg shadow-lg bg-blue-500  space-x-2 flex justify-evenly items-center text-white px-3 text-center">
                                        <p class="material-icons  text-lg ">add_circle_outline</p> <p>Add</p>
                                        </button>
                                 </div>
                            </div>
                        </div>
                        <div class="px-7 mt-4 h-60 space-y-2 overflow-auto w-full">
                            <h1 class="font-bold sticky text-blue-150 pb-3 text-2xl ">Accreditors</h1>
                           
                                 <div v-for="accreditorx in Accreditor" :key="accreditorx" class="">
                                    <div class=" flex mb-5 justify-between border-b-2 border-yellow-150">
                                        <h1 class=" text-blue-150 text-2xl">{{accreditorx.accreditor_name}}</h1>
                                        <div class=" text-xl flex items-center">
                                            <h1 class="text-yellow-150">{{accreditorx.role}}</h1>
                                            <span class="material-icons">
                                                more_horiz
                                            </span>
                                        </div>
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
                  <button @click="confirm_accre=!confirm_accre" class=" text-blue-250 border-2 px-4 rounded-lg py-1 border-blue-250">Confirm</button>
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
import Details from "./details.vue"
import Comments from "./comments.vue"
export default {
  components:{
    Details,
    Comments
  },
  data(){
    return{
        component:"Details",
        show_add_accre:false,
        confirm_accre:false,
        activeBtn:0,
        Accreditor:[
            {
                id:1,
                accreditor_name:'Padre D Amaso',
                role:'External'
            },
            {
                id:2,
                accreditor_name:'Juan Dela Cruz',
                role:'Internal'
            },
            {
                id:3,
                accreditor_name:'Joan D First',
                role:'Internal'
            },
            {
                id:3,
                accreditor_name:'Joan D First',
                role:'Internal'
            },
            {
                id:3,
                accreditor_name:'Joan D First',
                role:'Internal'
            },
            {
                id:3,
                accreditor_name:'Joan D First',
                role:'s'
            },
            {
                id:3,
                accreditor_name:'Joan D First',
                role:'s'
            },
            {
                id:3,
                accreditor_name:'Joan D First',
                role:'s'
            }
        ],
     folderArea:[ 
     {
       id:1,
       floder_name:'PPP',
        folder_icon:'/icons/icon4a.svg',
     },
      {
       id:2,
       floder_name:'Area 1',
        folder_icon:'/icons/icon4.svg',
     },
     
     {
       id:3,
       floder_name:'Area 2',
       folder_icon:'/icons/icon4.svg',
     },
     
     {
       id:4,
       floder_name:'Area 3',
       folder_icon:'/icons/icon4.svg',
     },
     
     {
       id:5,
       floder_name:'Area 4',
       folder_icon:'/icons/icon4.svg',
     },
     
     {
       id:6,
       floder_name:'Area 5',
       folder_icon:'/icons/icon4.svg',
     },
    {
       id:7,
       floder_name:'Area 6',
       folder_icon:'/icons/icon4.svg',
     },
    {
       id:8,
       floder_name:'Area 7',
       folder_icon:'/icons/icon4.svg',
     }, 
     {
       id:9,
       floder_name:'Area 8',
       folder_icon:'/icons/icon4.svg',
     },
     {
       id:10,
       floder_name:'Area 9',
       folder_icon:'/icons/icon4.svg',
     },
      {
       id:11,
       floder_name:'Area 10',
       folder_icon:'/icons/icon4.svg',
     },
     
     ]
    }

  },
  methods:{
      change_component(e){
          if(e=='details'){
            this.component='Details'
          }
          else{
            this.component='Comments'
          }
      },
       isActive_function(el){
       if(el=='btn1'){
      this.activeBtn= 0;
      }
      else {
        this.activeBtn= el;
        }
      },
  }
}
</script>
