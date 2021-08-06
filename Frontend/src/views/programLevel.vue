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
      <div class="flex flex-col items-center" v-for="personal in personalInfo">
      <h1  class="uppercase text-white text-lg font-bold">{{personal.firstName}} {{personal.lastName}}</h1>
      <h1 class="text-sm text-white">({{personal.roleType}})</h1>
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
        <div @click="show_details=!show_details" class=" items-center cursor-pointer absolute bottom-0 h-17 flex justify-evenly  rounded-tl-2xl rounded-tr-2xl  right-10 bg-white w-37 ">
           <img class="w-8 h-8" src="/icons/icon_info.svg">
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
          <div class="flex flex-row h-99  bg-gradient-to-b from-blue-150 to-yellow-150 rounded-md  p-0.5 ">
            <div class=" bg-white  rounded-md overflow-auto  
             gap-y-2 flex flex-col justify-items-start w-2/3  flex-grow  h-full  p-4 ">
               <div class=" flex sticky top-0 space-x-2 items-center">
                   <div class=" cursor-pointer w-4 h-4">
                   <router-link to="/home_admin"> <img src="/icons/icon1_arrow_back.svg"></router-link>
                   </div>
                   
                    <h1 class="sticky top-0 font-bold text-blue-150 text-lg ">
                       Infomation Technology
                   </h1>
                
                  
               </div>
                <div class=" flex-row flex flex-wrap pl-7">
                  
                  


                 <div v-for="folderx in folderArea" :key="folderx.id" class="text-center justify-center items-center">
                  <div @click="isActive_function(folderx.id)" :class="{active: activeBtn === folderx.id }" 
                  class=" flex flex-col cursor-pointer items-center hover:bg-gray-200 justify-start w-32 h-auto  mt-10  mr-2cursor-pointer">
                      
                  <div>
                    <div  @dblclick="routing()"  @click="index_array(folderx.id),detailing(),perform()"  class="p-2 w-16" >
                      <img v-if="folderx.level!='Preliminary Survey Visit'" src="icons/icon15.png">
                      <img v-else:  src="icons/icon21.png">
                    </div>
                    </div>
                   <h1 class="text-blue-150">{{folderx.level}}</h1>
                  </div>
                    
                    </div>
                </div>
                
             
          </div>
            <div v-if="show_details" class="w-1/3  h-full bg-gradient-to-b pl-0.6 rounded-md from-blue-150 to-yellow-150">
              <div class="bg-gray-100 h-full flex flex-col w-full rounded-md">
                <div class="flex justify-between items-center p-4">
                  <h1 class="font-bold text-yellow-150">
                  {{folder_details[0].folder_name}}
                  </h1>
                <img src="icons/icon_close_x.svg" class="cursor-pointer" @click="show_details=!show_details" >
                </div>
                <div class="flex justify-center h-24 items-center">
                <div class="w-16 ">
                  <img :src="folder_details[0].folder_image" class="w-full"/>
                </div>
                </div>
                <div class=" flex  justify-center w-full h-10 rounded-tr-xl bg-gradient-to-r  from-blue-150 to-yellow-150">
                    <div  class="select-none pb-1 cursor-pointer flex  w-full   ">
                        <div  class="bg-gray-100 flex items-center rounded-tr-xl   justify-center w-full  h-full">
                               <h1 class="text-xl text-blue-150 font-bold cursor-pointer">Details</h1>
                        </div> 
                    </div>
                </div>
                <div class="p-4 bg-white h-full">
                    <Details :listdata="folder_details"/>
                </div>
                
              </div>
            </div>
          </div> 
      </div>
    </div>
        <!--Add task force-->
           <div v-if=" show_add_Taskforce" class="fixed z-30 flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
             <div class="flex flex-col gap-y-3 w-83 pb-8 bg-white shadow-3xl rounded-2xl">
              
                   <div class="flex justify-between rounded-t-2xl px-10 shadow-3xl items-center h-12  bg-gradient-to-r from-blue-150 via-gray-300  to-yellow-150">
                  <h1 v-if="update_button" class="text-xl text-white">Add Taskforce</h1>
                  <h1 v-else class="text-xl text-white">Editting Information</h1>
                  <button @click="show_add_Taskforce=!show_add_Taskforce" class=" text-white text-lg ">
                    Close
                  </button>
                 </div>
                 <form @submit.prevent="confirmation=!confirmation" id="task_force_form">
                  <div class="flex items-center pt-3 px-10 gap-4 justify-between flex-wrap">
                      <div>
                        <h1 class="text-blue-150 text-sm">Firstname</h1>
                        <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                        <input required  type="text"  class="italic  text-blue-150 w-75 px-4 rounded-sm  h-12 
                        focus:outline-none cursor-text " v-model="taskForceMember.firstName"/>
                       </div>
                       </div>
                        <div>
                        <h1 class="text-blue-150 text-sm">Email</h1>
                        <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                        <input required type="text"  class="italic  text-blue-150 w-75 px-4 rounded-sm  h-12 
                        focus:outline-none cursor-text " v-model="taskForceMember.email"/>
                       </div>
                       </div>
                      <div>
                        <h1 class="text-blue-150 text-sm">Middle name</h1>
                        <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                        <input  type="text"  class="italic  text-blue-150 w-75 px-4 rounded-sm  h-12 
                        focus:outline-none cursor-text " v-model="taskForceMember.middleName"/>
                       </div>
                      </div>
                      <div>
                        <h1 class="text-blue-150 text-sm">Member</h1>
                        <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                        <select required class="fill-current italic text-blue-250 w-75 px-4 rounded-sm  h-12 focus:outline-none cursor-pointer" v-model="taskForceMember.roleType">
                          <option selected disabled value="" >Select task force role</option>
                          <option>Chairman</option>
                          <option>Member</option>
                      </select>
                      </div>
                      </div>
                       <div>
                        <h1 class="text-blue-150 text-sm">Last name</h1>
                          <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                        <input required type="text"  class="italic  text-blue-150 w-75 px-4 rounded-sm  h-12 
                        focus:outline-none cursor-text " v-model="taskForceMember.lastName"/>
                       </div>
                       </div>
                       <div>
                        <h1 class="text-blue-150 text-sm">Contact Number</h1>
                          <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                        <input v-model="taskForceMember.contactNumber" required  type="number"  class="italic  text-blue-150 w-75 px-4 rounded-sm  h-12 
                        focus:outline-none cursor-text "/>
                       </div>
                       </div>
                      <div class="w-full flex gap-x-2 justify-end">
                        <button type="submit" value="Submit" v-if="update_button" @click="text_modal='add a new Task force'" class="flex items-center justify-center px-5 gap-2  w-24 h-8 text-white bg-blue-250"> 
                       <img src="icons/icon12_add.svg"/>
                    Add
                    </button>
                    <button v-else  class="flex items-center justify-center px-5 gap-2  w-24 h-8 text-white bg-gray-400"> 
                    <img src="icons/icon12_add.svg"/>
                    Add
                    </button>
                    <button v-if="update_button" class="flex items-center justify-center px-5 gap-2 text-white  w-24 h-8  bg-gray-400"> 
                    <span class="material-icons">
                      refresh 
                      </span>
                       Update
                    </button>
                    <button type="submit" value="Submit" @click="text_modal='update this field' ,updateTaskForceMember()" v-else class="flex items-center justify-center px-5 gap-2 text-white  w-24 h-8  bg-blue-150"> 
                    <span class="material-icons">
                      refresh 
                      </span>
                       Update
                    </button>
                       </div>
                  </div>
                  </form>
                  <div class="flex flex-col px-10" >
                  <h1 class="text-lg text-blue-150 font-bold">Task Force</h1>
                  <div class="overflow-y-auto h-28 gap-y-4 flex flex-col " >
                       <div class=" border-b-2 border-yellow-150 flex justify-between" v-for="taskforce in taskForceMembers" :key="taskforce.id">
                        <div class="flex justify-start gap-x-4 w-3  /4 pr-10" >
                            <h1 class="text-sm text-blue-150">{{taskforce.firstName}} {{taskforce.lastName}}</h1>
                            <h1 class="text-sm text-yellow-150">{{taskforce.email}}</h1>
                            <h1 class="text-sm text-yellow-150">{{taskforce.roleType}}</h1>
                            <h1 class="text-sm text-yellow-150">{{taskforce.contactNumber}}</h1>
                        </div>   
                        <div >                     
                            <button @click="update_button=!update_button,editTaskForce(taskforce.id)" class=" w-20  text-white border-2 bg-blue-150" >Edit</button>
                            <button @click="confirmation_deletion=!confirmation_deletion" class=" w-20  text-white border-2 bg-red-150">Delete</button>
                        </div>
                        </div>
          
                  </div>
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
                      <button @click="confirmation=!confirmation,update_button=true,addTaskForceMember(),updateTaskForceMember(),function_reset()" class="px-1 rounded-md border-2 border-blue-150  text-white bg-blue-150">Confirm</button>
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
                      <h1 class="text-red-150 text-lg">You are about to delete this member.</h1>
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
          <!----->
  </div>
</template>
<style scoped>
.active{
  border:solid 1px;
  border-color:#F37123 ;
}
</style>
<script>
// @ is an alias to /src
import Details from './details.vue'
import api from '../api'
export default {
  components:{
Details,
  },
  data(){
    return{
      levels: [],
    profile_pic:'',
        show_details:false,
        show_add_Taskforce:false,
        confirmation:false,  
        confirmation_deletion:false,
        update_button:true,
        link_to:'',
        activeBtn:0,
        welcome:'',
        disabling_btn:true,
        text_modal:'',
        fname:'',
        lname:'',
        mname:'',
        email:'',
        cnumber:'',
        index:'',
        items:['first'],
        folder_details:[
          {
            id:'',
            folder_image:'',
            folder_name:'',
            status:'',
            owner:'',
            modified:'',
            location:'',
            accessed:'',
            created:'',
          }
        ],
        personalInfo: {
            firstName: "",
            lastName: "",
            roleType: "",
        },
   
        taskForceMember: {
        firstName: "",
        middleName: "",
        lastName: "",
        contactNumber: "",
        email: "",
        roleType: "",
      },
        taskForceMembers: {
        firstName: "",
        middleName: "",
        lastName: "",
        contactNumber: "",
        email: "",
        roleType: "",
      },
     folderArea:[],
     sendID: '',
     folder_icon:'/icons/icon15.png'
    }
  },
  methods:{

     getPersonal(){

          
              var personal = JSON.parse(localStorage.getItem("Personal"));
                 console.log(personal);
           api.get("/api/getUser", {params:{email:personal.email}}).then((res)=>{
               this.personalInfo = res.data;
         

               console.log(this.personalInfo);
           });

           api.get("/api/getTaskForceMembers").then((res) =>{
             this.taskForceMembers = res.data;
              console.log(this.taskForceMembers);
           });
           
       },
     addTaskForceMember() {
     // this.taskForceMember.roleType = this.selectedroleType;
      console.log(this.taskForceMember);
      api
        .post("/api/Member", this.taskForceMember)
        .then((res) => {
          console.log(res);
        })
        .catch((errors) => {
          this.errors = errors.res;
        });
        api
        .post("/api/UserAuthentication", this.taskForceMember)
        .then((res) => {
          console.log(res);
          location.reload();
        })
        .catch((errors) => {
          this.errors = errors.res;
        });
     
         
    },
    updateTaskForceMember() {
     // this.taskForceMember.roleType = this.selectedroleType;
      console.log(this.taskForceMember);
      api
        .post("/api/userInformation", this.taskForceMember)
        .then((res) => {
          console.log(res);
          location.reload();
        })
        .catch((errors) => {
          this.errors = errors.res;
        });
        
     
         
    },

    logout(){
      localStorage.removeItem("Personal");
       this.$router.push({ path: "login" });
   },
   editTaskForce(e){
     let index=this.taskForceMembers.findIndex(x => x.id===e)
      this.taskForceMember.firstName=this.taskForceMembers[index].firstName;
      this.taskForceMember.lastName=this.taskForceMembers[index].lastName;
      this.taskForceMember.middleName=this.taskForceMembers[index].middleName;
      this.taskForceMember.email=this.taskForceMembers[index].email;
      this.taskForceMember.contactNumber=this.taskForceMembers[index].contactNumber;

     
   },
    fetchlevels(){

      let temp = [];
        console.log("levels");
      api.get('api/getProgramLevel').then(response => {
        // get body data

       temp= response.data;
        temp.forEach((value, index) => {
        if(value.programID === JSON.parse(localStorage.getItem('programID'))){
          return this.folderArea.push(value)
        }
        });  
        console.log('levels' ,this.folderArea);

    })
    },
    routing(){
        this.$router.push('/program_area')
    },
    function_reset(){
      document.getElementById('task_force_form').reset();
      this.taskForceMember.firstName='';
      this.taskForceMember.lastName='';
      this.taskForceMember.middleName='';
      this.taskForceMember.email='';
      this.taskForceMember.contactNumber='';
     },
    perform(){
              localStorage.setItem("levelID", JSON.stringify(this.folderArea[this.index].programLevelID));
              console.log(this.folderArea[this.index].programLevelID);
              // localStorage.setItem("code", res.data.code);
              // this.$router.push({ name: "verifyemail" });
    },
     index_array(e){
         this.index=this.folderArea.findIndex(x => x.id===e)
     },
     detailing(){ 
       this.folder_details[0].folder_name=this.folderArea[this.index].level
       this.folder_details[0].folder_image=this.folderArea[this.index].folder_image
       this.folder_details[0].status=this.folderArea[this.index].levelStatus
       this.folder_details[0].owner=this.folderArea[this.index].owner
       this.folder_details[0].modified=this.folderArea[this.index].modified
       this.folder_details[0].location=this.folderArea[this.index].location
       this.folder_details[0].accessed=this.folderArea[this.index].accessed
       this.folder_details[0].created=this.folderArea[this.index].created
     },
      isActive_function(el){
        this.activeBtn= el;
    }
  },
  created(){
    this.fetchlevels();
    this.getPersonal();
    
    // this.fetchbenchmarks();
  }
}
</script>
