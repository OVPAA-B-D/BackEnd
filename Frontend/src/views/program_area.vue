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
      <div class="flex flex-col items-center" v-for="personal in personalInfo">
      <h1  class="uppercase text-white text-lg font-bold"> {{ personal.firstName }} {{ personal.lastName }}</h1>
      <h1 class="text-sm text-white">({{ personal.roleType }})</h1>
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
      <div @click="logout" class="w-2/3 absolute bottom-8 drop-shadow-2xl text-white flex items-center space-x-2 pl-4 float-left bg-yellow-150 self-start rounded-r-full  py-3   text-center   ">
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
        <h1 class="text-2xl text-blue-150 font-normal">Accreditation Management/<a class="font-bold">{{programName}}</a></h1>
        </div>
      <div class="pb-3">
        <h1 class="text-yellow-150 text-xl" v-for=" levelName in levels ">{{levelName.level}} Accreditation</h1>
        <h3 class="text-blue-150 text-4xl">{{programName}}</h3>
        <h1 class="text-lg text-blue-150">Chairman in charge</h1>
       <span class="flex justify-start text-xs text-yellow-150 items-center gap-x-1">
            <img src="/icons/icon16_man.svg"><h1>{{firstName}} {{lastName}}</h1>
        </span>
        <span class="flex justify-start text-xs text-yellow-150 items-center gap-x-1">
            <img src="/icons/icon17_contact.svg"><h1>{{contactNumber}}</h1>
        </span>
         <span class="flex justify-start text-xs text-yellow-150 items-center gap-x-1">
            <img src="/icons/icon18_inbox.svg"><h1>{{email}}</h1>
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
                
          <button @click=" show_add_area=!show_add_area" class=" bg-blue-500  space-x-2
          flex justify-evenly items-center text-white px-3 text-center">
            <p class="material-icons  text-lg ">add_circle_outline</p> <p>Add</p>
          </button>
          <button @click="rename_folder(folder_id,folder_name)" v-if="btn_enable=='on'" class=" bg-green-150  space-x-2
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
            <div class="flex overflow-auto bg-gradient-to-b from-blue-150 to-yellow-150 rounded-md gap-y-2  justify-items-start  w-full p-0.5 h-full">
               <div class="flex flex-grow relative flex-col bg-white w-2/3 rounded-md pl-4 h-full">
                  <button  @click="btn_enable='off',show_default()" :class="{outline: bg_btn === 0 }" class="absolute border-none w-full h-full  inset-0 "></button>

               <div class=" flex sticky w-max top-0 mt-4 space-x-2 items-center">
                   <router-link to="/program_level"> <div class=" cursor-pointer w-4-h-4">
                   <img src="/icons/icon1_arrow_back.svg">
                   </div></router-link>
                   <h1 class="text-blue-150 text-lg cursor-pointer">
                       <router-link to="/home_admin"> <a class="hover:underline">{{programName}}</a></router-link > >
                   
                    <a class="font-bold " v-for=" levelName in levels ">{{levelName.level}}</a></h1>
               </div>
                <div class=" items-start flex-row  flex flex-wrap relative pl-7 " >
                 <button  @click="btn_enable='off',isActive_function('btn1'),show_default()" 
                      :class="{outline: bg_btn===0 }" class="absolute w-full h-full   inset-0 "></button>

                 <div @click="isActive_function('btn2'),btn_enable='on',folder_id='pname',folder_name='newpname'" :class="{outline: bg_btn === 'btn2' }" class=" flex flex-col  
                    justify-center w-28  mt-10 hover:bg-gray-200 mr-2 relative  border-yellow-150 cursor-pointer">                
                 
                 <div @dblclick="routing('/admin_program_performance_profile')"
                  class="w-full p-2  z-20 flex justify-center">
                  <img   class="w-16" src="icons/icon21.png">
                  </div>
                    <span class="flex flex-col text-blue-150 text-center  justify-center w-full">
                    <label ><h1 id="pname">PPP</h1></label>
                    <input id="newpname" value="PPP" type="text" class="hidden text-center focus:outline-none border-2 border-black h-5"/>
                  </span>
                  </div>
                     <div v-for="folderx in folderLevelArea" :key="folderx.id" class="  relative  text-sm text-blue-250 z-10   w-28 h-auto  text-center justify-center items-center">
                      <button  @click="btn_enable='off',isActive_function('btn1'),show_default()" 
                      :class="{outline: bg_btn===0 }" class="absolute w-full h-full  inset-0 -z-1"></button>

                  <div @click="isActive_function(folderx.id),btn_enable='on',index_array(folderx.id),folder_id=folderx.id,folder_name=folderx.id+'x',rename_folder,detailing()" :class="{outline: bg_btn === folderx.id }" class=" flex flex-col  justify-center w-28  mt-10 hover:bg-gray-200 mr-2 border-yellow-150 cursor-pointer">
                <div @dblclick="routing('/program_parameter'),perform()"  class="w-full p-2 flex justify-center">
                  <img   class="w-16" src="icons/icon15.png">
                  </div>
                    <span class="flex flex-col   justify-center w-full">
                    <label :for="folderx.id"><h1 :id="folderx.id">{{folderx.areaLabel}}</h1></label>
                    <input  v-model="folderx.programLevelAreaID" :id="folderx.id+'x'"  type="text" class="hidden text-center focus:outline-none border-2 border-black h-5"/>
                  </span>
                  </div>
                  
                    </div>
                </div>
                
               </div>
             <div v-if="show_details" class="w-1/3  h-full bg-gradient-to-b pl-0.5 rounded-l-md from-blue-150 to-yellow-150">
                  <div class="  overflow-auto pb-3 flex flex-col flex-grow rounded-md w-full bg-gray-100 h-full">
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
             <div class="flex flex-col gap-y-3 w-83 pb-8 bg-white shadow-3xl rounded-2xl">
                   <div class="flex justify-between rounded-t-2xl px-10 shadow-3xl items-center h-12  bg-gradient-to-r from-blue-150 via-gray-300  to-yellow-150">
                  <h1 v-if="update_button" class="text-xl text-white">Add Accreditor</h1>
                  <h1 v-else class="text-xl text-white">Editting Information</h1>
                  <button @click="show_add_accre=!show_add_accre" class=" text-white text-lg ">
                    Close
                  </button>
                 </div>
                 <form @submit.prevent="confirmation=!confirmation" id="task_force_form">
                  <div class="flex items-center pt-3 px-10 gap-4 justify-between flex-wrap">
                      <div>
                        <h1 class="text-blue-150 text-sm">Firstname</h1>
                        <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                        <input v-model="accreditorMember.firstName" required  type="text"  class="italic  text-blue-150 w-75 px-4 rounded-sm  h-12 
                        focus:outline-none cursor-text "/>
                       </div>
                       </div>
                        <div>
                        <h1 class="text-blue-150 text-sm">Email</h1>
                        <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                        <input v-model="accreditorMember.email" required  type="text"  class="italic  text-blue-150 w-75 px-4 rounded-sm  h-12 
                        focus:outline-none cursor-text "/>
                       </div>
                       </div>
                      <div>
                        <h1 class="text-blue-150 text-sm">Middle name</h1>
                        <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                        <input v-model="accreditorMember.middleName" required  type="text"  class="italic  text-blue-150 w-75 px-4 rounded-sm  h-12 
                        focus:outline-none cursor-text "/>
                       </div>
                      </div>
                      <div>
                        <h1 class="text-blue-150 text-sm">Role</h1>
                        <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                        <select v-model="accreditorMember.roleType" required class="fill-current italic text-blue-150 w-75 px-4 rounded-sm  h-12 focus:outline-none cursor-pointer">
                          <option selected disabled value="">Select accreditor's role</option>
                          <option>Internal accreditor</option>
                          <option>External accreditor</option>
                      </select>
                      </div>
                      </div>
                       <div>
                        <h1 class="text-blue-150 text-sm">Last name</h1>
                          <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                        <input v-model="accreditorMember.lastName" required  type="text"  class="italic  text-blue-150 w-75 px-4 rounded-sm  h-12 
                        focus:outline-none cursor-text "/>
                       </div>
                       </div>
                       <div>
                        <h1 class="text-blue-150 text-sm">Contact Number</h1>
                          <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                        <input v-model="accreditorMember.contactNumber" required type="number"  class="italic  text-blue-150 w-75 px-4 rounded-sm  h-12 
                        focus:outline-none cursor-text "/>
                       </div>
                       </div>
                      <div class="w-full flex gap-x-2 justify-end">
                        <button v-if="update_button" @click="text_modal='add a new Accreditor'" class="flex items-center justify-center px-5 gap-2  w-24 h-8 text-white bg-blue-250"> 
                       <img src="icons/icon12_add.svg"/>
                    Add
                    </button>
                    <button disabled v-else  class="flex items-center justify-center px-5 gap-2  w-24 h-8 text-white bg-gray-400"> 
                    <img src="icons/icon12_add.svg"/>
                    Add
                    </button>
                    <button disabled v-if="update_button" class="flex items-center justify-center px-5 gap-2 text-white  w-24 h-8  bg-gray-400"> 
                    <span class="material-icons">
                      refresh 
                      </span>
                       Update
                    </button>
                    <button  @click="text_modal='update this field'" v-else class="flex items-center justify-center px-5 gap-2 text-white  w-24 h-8  bg-blue-150"> 
                    <span class="material-icons">
                      refresh 
                      </span>
                       Update
                    </button>
                       </div>
                  </div>
                  </form>
                  <div class="flex flex-col px-10">
                  <h1 class="text-lg text-blue-150 font-bold">Accreditors</h1>
                  <div class="overflow-y-auto h-28 gap-y-4 flex flex-col ">
                       <div class=" border-b-2 border-yellow-150 flex justify-between" v-for="accreditor in accreditorMembers" :key="accreditor.id">
                        <div class="flex justify-start gap-x-4 w-3/4 pr-10">
                            <h1 class="text-sm text-blue-150">{{accreditor.firstName}} {{accreditor.lastName}}</h1>
                            <h1 class="text-sm text-yellow-150">{{accreditor.email}}</h1>
                            <h1 class="text-sm text-yellow-150">{{accreditor.roleType}}</h1>
                            <h1 class="text-sm text-yellow-150">{{accreditor.contactNumber}}</h1>
                        </div>   
                        <div >                     
                            <button @click="edit_update(accreditor.id),update_button=!update_button" class=" w-20  text-white border-2 bg-blue-150">Edit</button>
                            <button @click="confirmation_deletion=!confirmation_deletion,text_modal='to delete this member'" class=" w-20  text-white border-2 bg-red-150">Delete</button>
                        </div>
                        </div>   
                  </div>
                  </div>
             </div>
             </div>

<!--Add Area-->
           <div v-if=" show_add_area" class="fixed z-10  flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
             <div class="w-97 flex flex-col bg-white pb-3 gap-y-3 shadow-3xl rounded-3xl">
                    <div class="flex justify-between rounded-t-2xl px-4 shadow-3xl items-center h-12  bg-gradient-to-r from-blue-150 via-gray-300  to-yellow-150">
                          <h1 class="text-lg text-white">Add Area</h1>
                            <button @click="show_add_area=!show_add_area" class="text-white text-lg">
                                CLOSE 
                            </button>
                    </div>
                    <div class="flex px-4 space-x-7 justify-start items-center">
                      <div class="w-full">
                      <h1 class="text-blue-150">Area</h1>
                      <div class="p-0.5 bg-gradient-to-b from-blue-150 to-yellow-150 rounded-md">
                     <input placeholder="Area Name" type="text" class=" pl-3 placeholder-blue-150 rounded-md w-full text-blue-150 h-12 focus:outline-none " v-model="area.areaLabel"/>
                      </div>
                      </div>
                    </div>
                    <div class="w-full px-4 flex justify-end">
                    <button @click="addArea(),show_add_area=!show_add_area"  class="text-white w-20 py-2 flex space-x-1 rounded-lg  justify-center items-center  bg-blue-150 px-4 text-sm">
                      <img src="/icons/icon12_add.svg" class="w-4 h-4"/>
                      <h1>Add</h1>
                      </button>
                    </div>
             </div>
          
            
          </div>
             
             <!--Confimation-->
            <div v-if="confirmation" class="fixed z-30 flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
                 <div class=" flex flex-col justify-start relative
                  gap-y-3  w-23 h-60 bg-white  shadow-3xl rounded-xl">
                  <div class="bg-blue-150 rounded-t-xl h-10 w-full"></div>
                  <div class="flex w-full  gap-x-3 pl-10  mt-3 items-center">
                      <img class="w-16" src="icons/icon_confirmation_blue.svg"/>
                    <div class="flex flex-col">
                      <h1 class="text-xl font-bold text-blue-150">You are about to {{text_modal}}</h1>
                      <h1 class="text-blue-150 ">After your confirmation, you can still make changes to the information.</h1>
                    </div>
                  </div>
                  <div class="flex justify-end absolute right-10 bottom-10">
                    <div class="flex gap-x-1">
                      <button @click="confirmation=!confirmation,update_button=true,addAccreditorMember(),updateAccreditorMember(),function_reset(),disabling_btn=true" class="px-1 rounded-md border-2 border-blue-150  text-white bg-blue-150">Confirm</button>
                      <button @click="confirmation=!confirmation" class="px-1 rounded-md text-blue-150 bg-white border-2 border-blue-150">Cancel</button>
                    </div>
                  </div>
                 </div>
           </div>
           <!--Delete-->
           <div v-if="confirmation_deletion" class="fixed z-30 flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
                 <div class=" flex flex-col justify-start relative
                  gap-y-3  w-23 h-60 bg-white  shadow-3xl rounded-xl">
                  <div class="bg-red-150 rounded-t-xl h-10 w-full"></div>
                  <div class="flex w-full  gap-x-3 pl-10  mt-3 items-center">
                      <img class="w-16" src="icons/icon_warning_red.svg"/>
                    <div class="flex flex-col">
                      <h1 class="text-xl font-bold text-red-150">Delete Warning</h1>
                      <h1 class="text-red-150 text-lg">You are about to {{text_modal}}.</h1>
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
import api from "../api"
// import det from "../programLevel.vue"
export default {
  props: ['btnText'],
  components:{
    Details,
    Comments
  },
  data(){
    return{
      levels: [],
      
         confirmation_deletion:false,
        confirmation:false,
        show_details:false,
        btn_enable:'off',
        text_modal:'',
        update_button:true,
        show_add_area:false,
        component:"Details",
        linkto:'',
        index:'',
        folder_id:'',
        folder_name:'',
        prev_folder_id:'',
        prev_name_id:'',
        show_add_accre:false,
        confirm_accre:false,
        activeBtn:0,
        
       
         programName: '',
        firstName: '',
        lastName: '',
        contactNumber: '',
        email: '',
        levels: [],
        tempLevel: [],

	addProgramLevelArea:{
          programLevelID: '',
          programLevelAreaID: '',
          accreditorEmail: '',
          roleDescription: '',
          areaID: '',
          modifiedBy: '',
        //  activeStatus: '',

        },

        filteredAddAccreditorMember:{
          programLevelID: '',
          programLevelAreaID: '',
          accreditorEmail: '',
          roleDescription: '',
          areaID: '',
          modifiedBy: '',
        //  activeStatus: '',

        },

        bg_btn:0,
        status:'',
        owner:'',
        location:'',
        accessed:'',
        created:'',

        area: {
          areaID: '',
          areaLabel: '',
        },
        formArea: new FormData(),
        filterredarea: [{
          areaID: '',
          areaLabel: '',
        }],


         personalInfo: {
        firstName: "",
        lastName: "",
        roleType: "",
      },
      accreditorMember: {
        firstName: "",
        middleName: "",
        lastName: "",
        contactNumber: "",
        email: "",
        roleType: "",
      },

      accreditorMembers: {
        firstName: "",
        middleName: "",
        lastName: "",
        contactNumber: "",
        email: "",
        roleType: "",
      },
        folder_details:[
          {
            id: 'ID',
            status:'To be Graded',
            owner:'Admin',
            location:'Level 1 Folder',
            modified:'July 12,2021',
            accessed:'Pedro Penduko',
            created:'Admin',
          }
        ],
     folderArea:[{}],
     folderLevelArea:[],
     folder_icon:'/icons/icon15.png'
    }
  },
  methods:{
     getPersonal() {
      var personal = JSON.parse(localStorage.getItem("Personal"));
      console.log(personal);
      api
        .get("/api/getUser", { params: { email: personal.email } })
        .then((res) => {
          this.personalInfo = res.data;

          console.log(this.personalInfo);
        });

         api.get("/api/getAccreditorMembers").then((res) =>{
             this.accreditorMembers = res.data;
              console.log(this.accreditorMembers);
           });

           api.get("/api/getAreas").then((res)=>{
             this.area = res.data;
             this.filterredarea = res.data;
             // this.folderLevelArea=res.data;
             console.log("Area Saved: ",this.area);
           });

	     var programdata = JSON.parse(localStorage.getItem("ProgramData"));
             this.programName = programdata.programName;
             this.email = programdata.email;
             this.firstName = programdata.firstName;
             this.lastName = programdata.lastName;
             this.contactNumber = programdata.contactNumber;

             var programLevelID = JSON.parse(localStorage.getItem('levelID'));
              console.log("programLevelID", programLevelID);
               api
               .get("/api/getProgramLevelID", {params:{programLevelID}})
               .then((res) => {
                  this.levels = res.data;

                  console.log("Level", this.levels);
        });


    },
    logout(){
      localStorage.removeItem("Personal");
       this.$router.push({ path: "login" });
   },
    genAreaID(){
      
       var arrFiltered_area=[];
        console.log("boom",this.filterredarea);
        if(this.filterredarea !=""){
          
            console.log("asdasdas");
            this.filterredarea.forEach((value,index) => {
            arrFiltered_area.push(value);
            });
            console.log("asd",arrFiltered_area[0].areaID);
            const arrAreaID = arrFiltered_area[arrFiltered_area.length-1].areaID.split("-");
            var areaNumber = parseInt(arrAreaID[1]);          
            areaNumber++;
            var areaNumberString = areaNumber.toString();
            
            while (areaNumberString.length < arrAreaID[1].length) areaNumberString = "0" + areaNumberString;
            
            this.area.areaID = "ARE-" +areaNumberString;
     
         }
          else{
              this.area.areaID = "ARE-00001";
              
          }

    },

   addArea(){
      this.genAreaID();
      console.log("Area: Not Save", this.area);
      this.formArea.append("areaID", this.area.areaID);
      this.formArea.append("areaLabel", this.area.areaLabel);

      console.log("Area: Not Save", this.formArea);
      api.post("/api/Area", this.formArea).then((res)=>{
        console.log("Area: ",res);
      }).catch((res)=>{
        this.errors=error.res;
      });
   },
   
    addAccreditorMember() {
     // this.taskForceMember.roleType = this.selectedroleType;
      console.log(this.accreditorMember);
      api
        .post("/api/Member", this.accreditorMember)
        .then((res) => {
          console.log(res);
        })
        .catch((errors) => {
          this.errors = errors.res;
        });
        api
        .post("/api/UserAuthentication", this.accreditorMember)
        .then((res) => {
          console.log(res);
          location.reload();
        })
        .catch((errors) => {
          this.errors = errors.res;
        });
	
	this.addProgramLevelArea.accreditorEmail = this.accreditorMember.email;
        this.addProgramLevelArea.roleDescription = this.accreditorMember.roleType;
        this.addProgramLevelArea.areaID = document.getElementById("selected_folder").value;
        this.addProgramLevelArea.programLevelID = JSON.parse(localStorage.getItem('levelID'));
      
        this.genProgramLevelID();

       var personal = JSON.parse(localStorage.getItem('Personal'));
        this.addProgramLevelArea.modifiedBy = personal.email;
        console.log("AreaID: ", this.addProgramLevelArea.areaID);
        api.post("/api/ProgramLevelArea", this.addProgramLevelArea).then((res)=>{
          console.log("Program Level Area", res);
        });

        api.post("/api/Accreditor",this.addProgramLevelArea).then((res)=>{
          console.log("Accreditor",res);
        });
     
         
    },

	genProgramLevelID(){

      this.filteredAddAccreditorMember = this.tempLevel;
          var arrFiltered_LevelArea=[];
        console.log("boom",this.filteredAddAccreditorMember);
        if(this.filteredAddAccreditorMember !=""){
          
            console.log("asdasdas");
            this.filteredAddAccreditorMember.forEach((value,index) => {
            arrFiltered_LevelArea.push(value);
            });
            console.log("asd",arrFiltered_LevelArea[0].programLevelAreaID);
            const arrProgramLevelAreaID = arrFiltered_LevelArea[arrFiltered_LevelArea.length-1].programLevelAreaID.split("-");
            var programLevelAreaNumber = parseInt(arrProgramLevelAreaID[1]);          
            programLevelAreaNumber++;
            var programLevelAreaNumberString = programLevelAreaNumber.toString();
            
            while (programLevelAreaNumberString.length < arrProgramLevelAreaID[1].length) programLevelAreaNumberString = "0" + programLevelAreaNumberString;
            
            this.addProgramLevelArea.programLevelAreaID = "PLA-" +programLevelAreaNumberString;
     
         }
          else{
              this.addProgramLevelArea.programLevelAreaID = "PLA-00001";
              
          }

    },
    edit_update(e){
      let index=this.accreditorMembers.findIndex(x => x.id===e)
      this.accreditorMember.firstName=this.accreditorMembers[index].firstName;
      this.accreditorMember.lastName=this.accreditorMembers[index].lastName;
      this.accreditorMember.middleName=this.accreditorMembers[index].middleName;
      this.accreditorMember.email=this.accreditorMembers[index].email;
      this.accreditorMember.contactNumber=this.accreditorMembers[index].contactNumber;
    },

    updateAccreditorMember() {
     // this.taskForceMember.roleType = this.selectedroleType;
      console.log(this.accreditorMember);
      api
        .post("/api/userInformation", this.accreditorMember)
        .then((res) => {
          console.log(res);
        })
        .catch((errors) => {
          this.errors = errors.res;
        });
  
    },
    fetchareas(){
    let temp = [];
      api.get('api/getProgramLevelArea').then(response => {
        // get body data
        temp= response.data;
        temp.forEach((value, index) => {
        if(value.programLevelID === JSON.parse(localStorage.getItem('levelID'))){
          console.log("values", value);
          this.folderLevelArea.push(value)
        }
        });

        console.log("Areas", this.folderLevelArea);
    })
    },
    perform(){
              localStorage.setItem("areaID", JSON.stringify(this.folderLeverArea[this.index].areaID));
              console.log(this.folderLevelArea[this.index].programLevelID);
              // localStorage.setItem("code", res.data.code);
              // this.$router.push({ name: "verifyemail" });
    },
     routing(e){
      this.$router.push(e)
    },
   show_default(){
         let prev_f=document.getElementById(this.prev_folder_id)
          let prev_n=document.getElementById(this.prev_name_id)
          prev_f.style.display='block'
          prev_n.style.display='none'
          this.prev_folder_id='',
          this.prev_name_id=''
    },
   rename_folder(e,n){
        let x=document.getElementById(e)
        let y=document.getElementById(n)
        if(this.prev_folder_id==''){
        x.style.display = "none";
        y.style.display='block'
        this.prev_folder_id=e;
        this.prev_name_id=n;
        }
        else{
          let prev_f=document.getElementById(this.prev_folder_id)
          let prev_n=document.getElementById(this.prev_name_id)
            x.style.display = "none";
            y.style.display='block';
            prev_f.style.display='block';
            prev_n.style.display='none';
            this.prev_folder_id=e;
            this.prev_name_id=n;
        }
      
    },
    function_reset(){
       document.getElementById('task_force_form').reset();
       this.accreditorMember.firstName='';
      this.accreditorMember.lastName='';
      this.accreditorMember.middleName='';
      this.accreditorMember.email='';
      this.accreditorMember.contactNumber='';
     },
    index_array(e){
         this.index=this.folderArea.findIndex(x => x.id===e)
        
     },
     detailing(){ 
       this.folder_details[0].folder_name=this.folderArea[this.index].level
       this.folder_details[0].folder_image=this.folderArea[this.index].programLevelAreaID 
       this.folder_details[0].status=this.folderArea[this.index].programLevelAreaID
       this.folder_details[0].owner=this.folderArea[this.index].owner
       this.folder_details[0].modified=this.folderArea[this.index].modified
       this.folder_details[0].location=this.folderArea[this.index].location
       this.folder_details[0].accessed=this.folderArea[this.index].accessed
       this.folder_details[0].created=this.folderArea[this.index].created
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
  },
  created(){
    this.fetchareas();
    this.getPersonal();
    // console.log("sana magana", this.sendID);
    // this.fetchbenchmarks();
  }
}
</script>
