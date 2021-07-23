<template>
   <nav  class=" py-4 shadow-lg  bg-white fixed w-full z-10">
    <div class="w-80">
    <img class="w-full  h-full" src="BUlogo.png">
    </div>
  </nav>
  <div class="flex font-roboto  pt-16  min-h-screen  ">
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
            <div class=" flex cursor-pointer w-91 items-center gap-4 bg-yellow-150 space-x-1 shadow-3xl pl-4 py-3 " > 
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

    <div class="flex flex-col flex-nowrap  w-full">
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
          <img @click="show_details=!show_details" class="w-7.5 h-7.5" src="/icons/icon2_comment.svg">
           <img @click="show_details=!show_details" class="w-7.5 h-7.5" src="/icons/icon3_details.svg">
        </div>
      </div>
      <div class="  flex-col h-full pt-10 px-4  space-y-3">
        <div class=" flex justify-between  items-center">
            <div class="flex space-x-2 ">
                
          <button class=" bg-blue-500  space-x-2
          flex justify-evenly items-center text-white px-3 text-center">
            <p class="material-icons  text-lg ">add_circle_outline</p> <p>Add</p>
          </button>
          <button @click="rename_folder" v-if="btn_enable=='on'" class=" bg-green-150  space-x-2
          flex justify-evenly items-center text-white px-3 text-center">
            <p class="material-icons  text-sm ">border_color</p> <p  class="text-sm">Rename</p>
          </button>
          <button v-else class=" bg-gray-150 cursor-not-allowed  space-x-2
          flex justify-evenly items-center text-white px-3 text-center">
            <p class="material-icons  text-sm ">border_color</p> <p  class="text-sm">Rename</p>
          </button>
          
          <button v-if="btn_enable=='on'" @click="confirmation_deletion=!confirmation_deletion" class=" bg-red-150   space-x-2
          flex justify-evenly items-center text-white px-3 text-center">
            <p class="material-icons  text-sm ">delete</p> <p class="text-sm">Delete</p>
          </button>
          <button v-else-if="btn_enable=='off'" class=" bg-gray-150   space-x-2
          flex justify-evenly items-center cursor-not-allowed text-white px-3 text-center">
            <p class="material-icons  text-sm ">delete</p> <p class="text-sm">Delete</p>
          </button>
          <button @click=" show_add_accre=!show_add_accre" class=" text-blue-150   space-x-2 border-2 border-blue-150 rounded-full
          flex justify-center items-center bg-white px-3 text-center">
            <p class="material-icons  text-sm ">add_circle_outline</p> <p class="text-sm">Add Accreditor</p>
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
            <div class="flex overflow-auto bg-gradient-to-b from-blue-150 to-yellow-150 rounded-xl gap-y-2  justify-items-start  w-full p-0.6 h-full">
               <div class="flex flex-grow relative flex-col bg-white w-2/3 rounded-l-xl pl-4 h-full">
                  <button  @click="btn_enable='off',show_default()" :class="{outline: bg_btn === 0 }" class="absolute border-none w-full h-full  inset-0 "></button>

               <div class=" flex sticky w-max top-0 mt-4 space-x-2 items-center">
                   <router-link to="/home_taskforce"> <div class=" cursor-pointer w-4-h-4">
                   <img src="/icons/icon1_arrow_back.svg">
                   </div></router-link>
                   <h1 class="text-blue-150 text-lg cursor-pointer">
                       <router-link to="/home_taskforce"> <a class="hover:underline">Infomation Technology</a></router-link > >
                   
                    <a class="font-bold ">Level 1</a></h1>
               </div>
                <div class=" items-start flex-row flex flex-wrap relative pl-7 " >
                    <button  @click="btn_enable='off',isActive_function('btn1'),show_default()" :class="{outline: bg_btn ===0 }" class="absolute w-full h-full  inset-0 "></button>

                     <div v-for="folderx in folderArea" :key="folderx.id" class=" relative  text-sm text-blue-250 z-10   w-28 h-auto  text-center justify-center items-center">
                      <button  @click="btn_enable='off',isActive_function('btn1'),show_default()" :class="{outline: bg_btn ===0 }" class="absolute w-full h-full  inset-0 -z-1"></button>

                  <div  class=" flex justify-center w-28 mt-10 hover:border-2 mr-2 border-yellow-150 cursor-pointer">
                      
               <router-link :to="linkto"> 
                 <div @dblclick="linkto='/program_parameter_taskforce'"
                  @click="btn_enable='on',index_array(folderx.id),isActive_function(folderx.id),folder_id=folderx.id,rename_folder" :class="{outline: activeBtn === folderx.id }" class="w-full p-2 flex justify-center">
                  <img   class="w-16" :src="folderx.folder_icon">
                  </div>
              </router-link>
                  </div>
                  <span class="flex flex-col   justify-center w-full  ">
                    <label :for="folderx.id"><h1 :id="folderx.id">{{folderx.floder_name}}</h1></label>
                    <input  v-model="folderx.floder_name" :id="folderx.id+'x'"  type="text" class="hidden text-center focus:outline-none border-2 border-black h-5"/>
                  </span>
                    </div>
                </div>
                
               </div>
             <div v-if="show_details" class="w-1/3  h-full bg-gradient-to-b pl-0.6 rounded-l-xl from-blue-150 to-yellow-150">
                  <div class="  overflow-auto pb-3 flex flex-col flex-grow rounded-xl w-full bg-gray-100 h-full">
                        <div class="flex justify-between items-center p-4">
                  <h1 class="font-bold text-yellow-150">
                  folder name
                  </h1>
                <img src="icons/icon_close_x.svg" class="cursor-pointer" @click="show_details=!show_details" >
                </div>
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
                         <div class=" bg-white p-3  flex-col items-center  rounded-xl flex h-full m-5">
                           
                           <component :is="component" :listdata="folder_details"/>
                           
                        </div>
                  </div>
              </div>
          </div>
          </div> 
      </div>
    </div>
     <!--Add Accreditor-->
           <div v-if=" show_add_accre" class="fixed z-30 flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
               <div class="flex flex-col gap-y-3 w-83 bg-white p-10 shadow-3xl rounded-xl">
                  <span class="flex items-center justify-between w-full ">
                    <h1 class=" text-yellow-150 text-lg">Adding Task Force</h1>
                    <h1 @click="show_add_accre=!show_add_accre" class=" cursor-pointer text-red-150 text-lg">Close</h1>
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
                      <span>
                        <h1 class="text-blue-150 text-sm">Contact number</h1>
                        <input  type="number"  class="italic text-blue-150 w-75 px-4 rounded-sm  h-11 focus:outline-none cursor-text border-2 border-blue-150"/>
                      </span>
                      <div class="w-full flex justify-end">
                        <button @click="confirm_accre=!confirm_accre" class="flex items-center justify-center px-5 gap-2  w-24 h-8 text-white text-sm bg-blue-250"> 
                    <img src="icons/icon12_add.svg" class="w-4"/>
                    Add
                    </button>
                       </div>
                  </div>
                  <h1 class="text-lg text-blue-150 font-bold">Task Force</h1>
                  <div class="overflow-y-auto px-4 h-28 gap-y-4 flex flex-col ">
                       <div class=" border-b-2 border-yellow-150 flex justify-between">
                        <div class="flex justify-between gap-x-10 w-3/4 pr-10">
                            <h1 class="text-lg text-blue-150">Name</h1>
                            <h1 class="text-lg text-yellow-150">Email</h1>
                            <h1 class="text-lg text-yellow-150">Role</h1>
                            
                        </div>   
                        <div >                     
                            <button class=" w-20  text-white border-2 bg-blue-250">Edit</button>
                            <button @click="confirmation_deletion=!confirmation_deletion" class=" w-20  text-white border-2 bg-red-150">Delete</button>
                        </div>
                        </div>
                          
                        
                         <div class=" border-b-2 border-yellow-150 flex justify-between">
                        <div class="flex justify-between gap-x-10 w-3/4 pr-10">
                            <h1 class="text-lg text-blue-150">Name</h1>
                            <h1 class="text-lg text-yellow-150">Email</h1>
                            <h1 class="text-lg text-yellow-150">Role</h1>
                            
                        </div>   
                        <div >                     
                            <button class=" w-20  text-white border-2 bg-blue-250">Edit</button>
                            <button @click="confirmation_deletion=!confirmation_deletion" class=" w-20  text-white border-2 bg-red-150">Delete</button>
                        </div>
                        </div>
                        <div class=" border-b-2 border-yellow-150 flex justify-between">
                        <div class="flex justify-between gap-x-10 w-3/4 pr-10">
                            <h1 class="text-lg text-blue-150">Name</h1>
                            <h1 class="text-lg text-yellow-150">Email</h1>
                            <h1 class="text-lg text-yellow-150">Role</h1>
                            
                        </div>   
                        <div >                     
                            <button class=" w-20  text-white border-2 bg-blue-250">Edit</button>
                            <button @click="confirmation_deletion=!confirmation_deletion" class=" w-20  text-white border-2 bg-red-150">Delete</button>
                        </div>
                        </div>
                           <div class=" border-b-2 border-yellow-150 flex justify-between">
                        <div class="flex justify-between gap-x-10 w-3/4 pr-10">
                            <h1 class="text-lg text-blue-150">Name</h1>
                            <h1 class="text-lg text-yellow-150">Email</h1>
                            <h1 class="text-lg text-yellow-150">Role</h1>
                            
                        </div>   
                        <div >                     
                            <button class=" w-20  text-white border-2 bg-blue-250">Edit</button>
                            <button @click="confirmation_deletion=!confirmation_deletion" class=" w-20  text-white border-2 bg-red-150">Delete</button>
                        </div>
                        </div>
                  </div>
             </div>
             <!--Confimation-->
             <div v-if="confirm_accre" class=" flex fixed w-screen h-full bg-white bg-opacity-25 justify-center items-center">
              <div  class=" flex flex-col space-y-4 justify-center items-center w-96 h-52 pb-6  bg-white p-3 shadow-3xl rounded-3xl">
                <h1 class=" text-xl text-blue-150">Are you sure to perform this action?</h1>
                <div class="flex w-full text-lg justify-center gap-x-4">
                  <button @click="confirm_accre=!confirm_accre" class="text-white  bg-blue-250 py-1 rounded-lg px-4">Confirm</button>
                  <button @click="confirm_accre=!confirm_accre" class=" text-blue-250 border-2 px-4 rounded-lg py-1 border-blue-250">Cancel</button>
                </div>
             </div>
             </div>
          </div>
          <!----->
          <!--Delete-->
           <div v-if="confirmation_deletion" class="fixed z-30 flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
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
</template>
<style scoped>
.active{
  padding-bottom:3px;
}
.outline{
  border:solid 1px;

  border-color:#F37123 ;
}

button.outline{
  border:solid 0px;

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
        confirmation_deletion:false,
        show_details:false,
        btn_enable:'off',
        component:"Details",
        linkto:'',
        index:'',
        folder_id:'',
        prev_folder_id:'',
        prev_name_id:'',
        show_add_accre:false,
        confirm_accre:false,
        activeBtn:0,
        bg_btn:0,
        status:'',
        owner:'',
        location:'',
        accessed:'',
        created:'',
        folder_details:[
          {
            status:'To be Graded',
            owner:'Admin',
            location:'Level 1 Folder',
            modified:'July 12,2021',
            accessed:'Pedro Penduko',
            created:'Admin',
          }
        ],
     folderArea:[ 
     {
       id:1,
       floder_name:'Program Performance Profile',
        folder_icon:'/icons/icon21.png',
        status:'Pwede na',
        owner:'Juan Tamad',
        modified:'July 12,2021',
        location:'/Information/Level',
        accessed:'Pedro Penduko',
        created:'Admin',
     },
      {
       id:2,
       floder_name:'Area 1',
        folder_icon:'/icons/icon15.png',
        status:'Pwede na',
        owner:'Juan Tamad',
        modified:'July 12,2021',
        location:'/Information/Level',
        accessed:'Pedro Penduko',
        created:'Admin',
     },
     
     {
       id:3,
        floder_name:'Area 2',
        folder_icon:'/icons/icon15.png',
        status:'Pwede na',
        owner:'Juan Tamad',
        modified:'July 12,2021',
        location:'/Information/Level',
        accessed:'Pedro Penduko',
        created:'Admin',
     },
     
     {
        id:4,
        floder_name:'Area 3',
        folder_icon:'/icons/icon15.png',
        status:'Pwede na',
        owner:'Juan Tamad',
        modified:'July 12,2021',
        location:'/Information/Level',
        accessed:'Pedro Penduko',
        created:'Admin',
     },
     
     {
        id:5,
        floder_name:'Area 4',
        folder_icon:'/icons/icon15.png',
        status:'Pwede na',
        owner:'Juan Tamad',
        modified:'July 12,2021',
        location:'/Information/Level',
        accessed:'Pedro Penduko',
        created:'Admin',
     },
     
     {
        id:6,
        floder_name:'Area 5',
        folder_icon:'/icons/icon15.png',
        status:'Pwede na',
        owner:'Juan Tamad',
        modified:'July 12,2021',
        location:'/Information/Level',
        accessed:'Pedro Penduko',
        created:'Admin',
     },
    {
        id:7,
        floder_name:'Area 6',
        folder_icon:'/icons/icon15.png',
        status:'Pwede na',
        owner:'Juan Tamad',
        modified:'July 12,2021',
        location:'/Information/Level',
        accessed:'Pedro Penduko',
        created:'Admin',
     },
    {
        id:8,
        floder_name:'Area 7',
        folder_icon:'/icons/icon15.png',
        status:'Pwede na',
        owner:'Juan Tamad',
        modified:'July 12,2021',
        location:'/Information/Level',
        accessed:'Pedro Penduko',
        created:'Admin',
     }, 
     {
        id:9,
        floder_name:'Area 8',
        folder_icon:'/icons/icon15.png',
        status:'Pwede na',
        owner:'Juan Tamad',
        modified:'July 12,2021',
        location:'/Information/Level',
        accessed:'Pedro Penduko',
        created:'Admin',
     },
     {
        id:10,
        floder_name:'Area 9',
        folder_icon:'/icons/icon15.png',
        status:'Pwede na',
        owner:'Juan Tamad',
        modified:'July 12,2021',
        location:'/Information/Level',
        accessed:'Pedro Penduko',
        created:'Admin',
     },
      {
        id:11,
        floder_name:'Area 10',
        folder_icon:'/icons/icon15.png',
        status:'Pwede na',
        owner:'Juan Tamad',
        location:'/Information/Level',
        accessed:'Pedro Penduko',
        created:'Admin',
                 
     },
     
     ]
    }

  },
  methods:{
    show_default(){
         let prev_f=document.getElementById(this.prev_folder_id)
          let prev_n=document.getElementById(this.prev_name_id)
          prev_f.style.display='block'
          prev_n.style.display='none'
    },
    rename_folder(e){
        let x=document.getElementById(this.folder_id)
        let y=document.getElementById(this.folder_id+'x')
        if(this.prev_folder_id==''){
        x.style.display = "none";
        y.style.display='block'
        this.prev_folder_id=this.folder_id;
        this.prev_name_id=this.folder_id+'x';
        }
        else{
          let prev_f=document.getElementById(this.prev_folder_id)
          let prev_n=document.getElementById(this.prev_name_id)
            x.style.display = "none";
            y.style.display='block';
            prev_f.style.display='block';
            prev_n.style.display='none';
            this.prev_folder_id=this.folder_id;
            this.prev_name_id=this.folder_id+'x';
        }
      
    },
    index_array(e){
         this.index=this.folderArea.findIndex(x => x.id===e)
        
     },
    display_details(e){
    const index=this.folderArea.findIndex(x => x.id===e)
    },
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
