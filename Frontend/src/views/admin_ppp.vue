<template>
   <nav  class=" py-4 shadow-lg  bg-white fixed w-full z-10">
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
           <img @click="show_details=!show_details" class="w-8 h-8" src="/icons/icon_info.svg">
        </div>
      </div>
      <div class="  flex-col h-full pt-10 px-4  space-y-3">
        <div class=" flex justify-between  items-center">
            <div class="flex space-x-2 ">
           <label for="file_upload">     
          <span class=" cursor-pointer bg-blue-500  space-x-1
          flex justify-evenly items-center text-white px-0.5 text-center">
            <p class="material-icons  text-lg ">add_circle_outline</p> <p>Upload File</p>
          </span></label>
          <input id="file_upload" type="file" class="hidden"/>
          <button @click="rename_folder" v-if="btn_enable=='on'" class=" bg-green-150  space-x-2
          flex justify-evenly items-center text-white px-3 text-center">
            <p class="material-icons  text-sm ">border_color</p> <p  class="text-sm">Rename</p>
          </button>
          <button v-else class=" bg-gray-150 cursor-not-allowed  space-x-2
          flex justify-evenly items-center text-white px-3 text-center">
            <p class="material-icons  text-sm ">border_color</p> <p  class="text-sm">Rename</p>
          </button>
          
          <button v-if="btn_enable=='on'" @click="confirmation_deletion=!confirmation_deletion,text_modal='to delete this folder'" class=" bg-red-150   space-x-2
          flex justify-evenly items-center text-white px-3 text-center">
            <p class="material-icons  text-sm ">delete</p> <p class="text-sm">Delete</p>
          </button>
          <button v-else-if="btn_enable=='off'" class=" bg-gray-150   space-x-2
          flex justify-evenly items-center cursor-not-allowed text-white px-3 text-center">
            <p class="material-icons  text-sm ">delete</p> <p class="text-sm">Delete</p>
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
            <div class="flex overflow-auto bg-gradient-to-b from-blue-150 to-yellow-150 rounded-md gap-y-2  justify-items-start  w-full p-0.5 h-full">
               <div class="flex flex-grow relative flex-col overflow-auto bg-white w-2/3 rounded-md pl-4 h-full">
                  <button  @click="btn_enable='off',show_default(),isActive1_function('btn1')" :class="{outline: bg_btn === 0 }"
                   class="absolute border-none w-full h-full cursor-default  inset-0 "></button>

               <div class=" flex sticky w-max top-0 mt-4 space-x-2 items-center">
                   <router-link to="/program_area"> <div class=" cursor-pointer w-4-h-4">
                   <img src="/icons/icon1_arrow_back.svg">
                   </div></router-link>
                   <h1 class="text-blue-150 text-lg cursor-pointer">
                       <router-link to="/home_admin"> <a class="hover:underline">Infomation Technology</a></router-link > >
                   
                    <a class="font-bold ">Program Performance Profile</a></h1>
               </div>
                <div class=" items-start w-full mt-10 ml-10 flex flex-col flex-wrap relative " >
                    <button  @click="btn_enable='off',isActive1_function('btn1'),show_default()" 
                    :class="{outline: bg_btn===0 }" class="absolute w-full h-full  cursor-default  inset-0 "></button>

                     <div v-for="folderx in folderArea" :key="folderx.id" class="  relative 
                      text-sm text-blue-250 z-10   text-center justify-start ">
                      <button  @click="btn_enable='off',isActive1_function('btn1'),show_default()"
                       :class="{outline: bg_btn===0 }" class="absolute  cursor-default w-full h-full  inset-0 -z-1"></button>

                  <div @click="isActive1_function(folderx.id),btn_enable='on',folder_id=folderx.id" :class="{outline: bg_btn === folderx.id }"
                   class=" flex justify-start w-full cursor-pointer">
                 <div 
                  @click="index_array(folderx.id),rename_folder" 
                   class="p-2 flex ">
                  <img   class="w-8" src="icons/icon13_pdf.svg" >
                  </div>
                    <span class="flex flex-col text-gray-500    justify-center">
                    <label :for="folderx.id">
                      <h1 class="cursor-pointer hover:underline" :id="folderx.id">{{folderx.floder_name}}</h1></label>
                    <input  v-model="folderx.floder_name" :id="folderx.id+'x'"  type="text" class="hidden text-center focus:outline-none border-2 border-black h-5"/>
                  </span>
                  </div>
                  
                    </div>
                </div>
                
               </div>
             <div v-if="show_details" class="w-1/3  h-full bg-gradient-to-b pl-0.5 rounded-l-md from-blue-150 to-yellow-150">
                  <div class="  overflow-auto flex flex-col flex-grow rounded-md w-full bg-gray-100 h-full">
                        <div class="flex justify-end items-center p-4">
                  
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

             <!--Confimation-->
          
           <!--Delete-->
           <div v-if="confirmation_deletion" class="fixed z-30 flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
                 <div class=" flex flex-col justify-start relative
                  gap-y-3  w-23 h-60 bg-white  shadow-3xl rounded-xl">
                  <div class="bg-red-150 rounded-t-xl h-10 w-full"></div>
                  <div class="flex w-full  gap-x-3 pl-10  mt-3 items-center">
                      <img class="w-16" src="icons/icon_warning_red.svg"/>
                    <div class="flex flex-col">
                      <h1 class="text-xl font-bold text-red-150">Delete Warning</h1>
                      <h1 class="text-red-150 text-lg">You are about to delete this file.</h1>
                      <h1 class="text-red-150 text-lg">This process cannot be undone.</h1>
                    </div>
                  </div>
                  <div class="flex justify-end absolute right-10 bottom-10">
                    <div class="flex gap-x-1">
                      <button @click="confirmation_deletion=!confirmation_deletion" class="px-1 rounded-md w-16 border-2 border-red-150  text-white bg-red-150">Confirm</button>
                      <button @click="confirmation_deletion=!confirmation_deletion" class="px-1 rounded-md w-16 text-red-150 bg-white border-2 border-red-150">Cancel</button>
                    </div>
                  </div>
                 </div>
           </div>
           <!----->
           <!----->

  </div>
</template>
<style scoped>
.active{
  padding-bottom:3px;
}
.outline h1{
  text-decoration: underline;
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
        confirmation:false,
        show_details:false,
        btn_enable:'off',
        text_modal:'',
        update_button:true,
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
        status:'Pwede na',
        owner:'Juan Tamad',
        modified:'July 12,2021',
        location:'/Information/Level',
        accessed:'Pedro Penduko',
        created:'Admin',
     }
                                  
     ]
    }

  },
  methods:{
    routing(){
      this.$router.push('/program_parameter')
    },
    show_default(){
         let prev_f=document.getElementById(this.prev_folder_id)
          let prev_n=document.getElementById(this.prev_name_id)
          prev_f.style.display='block'
          prev_n.style.display='none'
          this.prev_folder_id=''
          this.prev_name_id=''
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
       isActive1_function(el){
       if(el=='btn1'){
      this.bg_btn= 0;
      }
      else {
        this.bg_btn= el;
        }
      },
  }
}
</script>
