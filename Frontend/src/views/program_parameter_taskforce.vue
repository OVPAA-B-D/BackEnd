<template>
   <nav  class=" py-4  shadow-lg   bg-white fixed w-full" style="z-index:1" >
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
           <img @click="show_details=!show_details" class="w-8 h-8" src="/icons/icon_info.svg">
        </div>
      </div>
      <div class="flex  flex-col h-full pt-10 px-4  space-y-3">
        <div class=" flex justify-between  items-center">
            <div class="flex space-x-2 ">
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
          <div class="flex flex-row h-99 w-fullrounded-xl  p-1 ">
            <div class="bg-gradient-to-b from-blue-150 to-yellow-150 rounded-xl gap-y-2 flex  justify-items-start  w-full p-0.6 h-full">
               <div class="bg-white  h-full overflow-auto  w-2/3 flex flex-grow flex-wrap rounded-l-xl pl-4">
             <div class=" w-full">
                    <div class=" flex py-3 sticky top-1   w-full  bg-white  space-x-2 items-center" style="z-index:0" >
                   <div class=" cursor-pointer w-4-h-4">
                   <router-link to="/program_area">
                   <img src="/icons/icon1_arrow_back.svg">
                   </router-link>
                   </div>
                   <div class="flex sticky top-0 bg-white justify-start gap-x-2 text-blue-150 text-lg">
                    <router-link to="/home_taskforce"> <a class="hover:underline cursor-pointer">Infomation Technology</a></router-link>>
                    <router-link to="/home_taskforce"><a class=" hover:underline">Level 1</a></router-link>>
                    <a class="font-bold cursor-default">Area 1</a>
                    </div>
                 </div> 
    
                <div v-for="parameterx in Parameter"
                    :key="parameterx.id" class="items-start w-full flex-col flex flex-wrap pl-7">
                   <div class="w-full">
                     <div class="flex flex-shrink items-center p-2 justify-between">
                       <span class="flex items-baseline gap-x-3">
                        <h1 id="parameterLabel" class=" text-2xl text-blue-150 font-bold">{{parameterx.parameterLabel}}</h1>
                       
                        <h1  class="text-green-150">Completed</h1>
                      </span>
                    </div>
                   <div v-for="benchmarkx in myArray"
                    :key="benchmarkx.id">
                    <div v-if="benchmarkx.parameterID == parameterx.parameterID">
                    <div class="mr-4">
                        <div class=" pl-4 w-full flex gap-2 flex-row justify-between items-center ">
                          <span class="flex items-baseline">
                            <h1 class="text-xl text-yellow-150">{{benchmarkx.benchmarkLabel}}</h1>
                          
                          </span>
                            <div class="  flex space-x-3 mb-0.5">
                            <label for="add_file" class="cursor-pointer"><span type="button" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-blue-150 ">
                             <img src="/icons/upload.svg" class="w-5 h-5"/>
                              Upload
                              </span>
                             </label>
                             <input  @change="add_files"  type="file" id="add_file" class="hidden" />
                             <button @click="show_add_edit_row=!show_add_edit_row" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-green-150 ">
                              Submit<img src="/icons/submit.svg" class="w-5 h-5"/></button>
                              <button @click="confirmation_deletion=!confirmation_deletion" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-red-150 ">
                              Unsubmit <img src="/icons/unsubmit.svg" class="w-5 h-5"/></button>
                            </div>
                        </div>
                        <br>
                        <div class="bg-gradient-to-b from-blue-150 to-yellow-150 rounded-xl gap-y-2 flex  justify-items-start  w-full p-0.6 h-full">
                          <div class="bg-white  h-full overflow-auto  w-2/3 flex flex-grow flex-wrap rounded-l-xl pl-4">
                            <div class=" w-full ">
                             <div v-for="file in files" :key="file.name" class="">
                             
                              <!--  -->
                              <div class=" flex text-yellow-150 justify-left items-center text-lg h-10 w-full ">
                                <input type="checkbox" id="" name="taskforce1" value="" class="inline">
                                <button @click="confirmation_deletion=!confirmation_deletion" class="rounded-sm py-1 px-2 inline">
                                <img src="/icons/icon-del.svg" class="w-5 h-5"/></button>
                                <img src="icons/icon13.svg" class="w-4 inline"/>{{file.name}}
                          
                             </div>
                            </div>
                          </div>
                        </div>
                       </div>  
                     </div>
                   </div>
                 </div>              
               </div>
             </div>
           </div>
          </div>
        <br>
             <div v-if="show_details" class=" flex w-1/3 h-full rounded-xl bg-white ">
              <div class=" h-full   flex pl-0.6 rounded-xl flex-grow bg-gradient-to-b from-blue-150 to-yellow-150">
                  <div class="  overflow-auto pb-3 flex flex-col flex-grow rounded-2xl w-full bg-gray-100 h-full">
                        <div class="flex justify-between items-center p-4">
                  <h1 class="font-bold text-yellow-150">
                  Parameter
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
                    <div class=" p-3 bg-white flex-col items-center  rounded-xl flex flex-grow m-5">
                           
                           <component :is="component" :listdata="folder_details"/>
                           
                   </div>
                </div>
              </div>
             </div>
          </div>
        </div> 
      </div>
    </div>
    
       
          <!---->
          <!--Delete--->
           <div v-if="confirmation_deletion" class="fixed z-30 flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
                 <div class="flex flex-col items-center text-center justify-center gap-y-3 w-96 h-52 bg-white  shadow-3xl rounded-xl">
                 <h1 class="text-red-150 text-xl">Are you sure you want to perform this action?</h1>
                  <h1 class="text-red-150">This action cannot be undone.</h1>
                  <span class="flex items-center gap-x-3">
                    <button @click="confirmation_deletion=!confirmation_deletion" class=" select-none bg-red-150 rounded-lg text-white w-28 h-10">Confirm</button>
                    <button @click="confirmation_deletion=!confirmation_deletion" class="select-none border-2 rounded-lg border-blue-150 text-blue-250  w-28 h-10">Cancel</button>
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
</style>
<script>
// @ is an alias to /src
import Details from "./details.vue"
import Comments from "./comments.vue"
import draggable from 'vuedraggable'
import api from '../api'
export default {
  components:{
    Details,
    Comments,
    draggable
  },
 
  data(){
    return{
      drag:false,
        component:"Details",
        show_add_parameter:false,
        show_add_benchmark:false,
        show_add_edit_row:false,
        show_details:false,
        confirmation_deletion:false,
        confirmation:false,
        myArray:[],
        activeBtn:0,
        bg_button:0,
      
        
          folder_details:[
          {
         id:'',
       folder_image:'',
       folder_name:'',
       status:'',
        owner:'',
        location:'',
        accessed:'',
        created:'',
          }
        ],
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
     Parameter:[],
      files:null,
     
    }
  },
  methods:{
      show_input(id1,id2){
        let x=document.getElementById(id1)
        let y=document.getElementById(id2)
        if (x.style.display === "none") {
        x.style.display = "block";
        } else {
        x.style.display = "none";
        }
        if (y.style.display === "block") {
        y.style.display = "none";
        } else {
        y.style.display = "block";
        }
      },
      change_component(e){
          if(e=='details'){
            this.component='Details'
          }
          else{
            this.component='Comments'
          }
      },
      add_files(e){
        this.files=e.target.files;
        this.files=URL.createObjectURL(files);

       },
      isActive_function(el){
       if(el=='btn1'){
      this.activeBtn= 0;
      }
      else {
        this.activeBtn= el;
        }
      },
      fetchParameters(){
      api
        .get("api/getParameter")
        .then(response => {
          this.Parameter= response.data;
          console.log(response.data);
        }) 
        .catch(errors => {
          console.log(errors.response);
        });
    },
    fetchBenchmark(){
        api
        .get("api/getBenchmark")
        .then(response => {
          this.myArray= response.data;
          console.log(response.data);
        })
        .catch(errors => {
          console.log(errors.response);
        });
    },

    //uploadFile(){
        //api.post("api/ProgramLevelBenchmark", this.pdfArray)
        //.then((response)=>{
          //this.pdfArray=response.data;
          //console.log(response.data);
       // }).catch(errors => {
         // console.log(errors.response);
        //});
    //},
  },
  mounted(){
    this.fetchParameters(); 
    this.fetchBenchmark(); 
  
  }
}
</script>
