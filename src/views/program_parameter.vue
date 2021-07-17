<template>
   <nav  class=" py-4  shadow-lg   bg-white fixed w-full" style="z-index:1" >
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
          <img class="w-7.5 h-7.5" src="/icons/icon2_comment.svg">
           <img class="w-7.5 h-7.5" src="/icons/icon3_details.svg">
        </div>
      </div>
      <div class="  flex-col h-full pt-10 px-4  space-y-3">
        <div class=" flex justify-between  items-center">
            <div class="flex space-x-2 ">
          <button @click=" show_add_parameter=!show_add_parameter" class=" text-blue-150   space-x-2 border-2 border-blue-150 rounded-full
          flex justify-center items-center bg-white px-3 text-center">
            <p class="material-icons  text-sm ">add_circle_outline</p> <p class="text-sm">Add Parameter</p>
          </button>
           <button @click=" show_add_benchmark=!show_add_benchmark" class=" text-blue-150   space-x-2 border-2 border-blue-150 rounded-full
          flex justify-center items-center bg-white px-3 text-center">
            <p class="material-icons  text-sm ">add_circle_outline</p> <p class="text-sm">Add Benchmark</p>
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
          <div class="flex flex-row h-99   rounded-xl  p-1 ">
            <div class="bg-gradient-to-b from-blue-150 to-yellow-150 rounded-l-xl gap-y-2 flex flex-col justify-items-start  w-2/3 py-0.6 pl-0.6 h-full">
               <div class="bg-white  h-full overflow-auto  w-full flex flex-wrap rounded-l-xl pl-4">
                   <div class=" w-full">
                    <div class=" flex py-3 sticky top-1   w-full  bg-white  space-x-2 items-center" style="z-index:0" >
                   <div class=" cursor-pointer w-4-h-4">
                   <img src="/icons/icon1_arrow_back.svg">
                   </div>
                   <div class="flex sticky top-0 bg-white justify-start text-blue-150 text-lg cursor-pointer">
                    <router-link to="/home_admin"> <a class="hover:underline">Infomation Technology</a></router-link>>
                    <router-link to="/program_level"><a class="font-bold hover:underline">Level 1</a></router-link>>
                    <router-link to="/program_area"><a class="font-bold hover:underline">Area 1</a></router-link>
                    </div>
                 </div>
                <div class=" items-start w-full flex-col flex flex-wrap pl-7">
                   <div v-for="parameterx in Parameter" :key="parameterx.id" class="w-full">
                     <div class="flex  items-baseline space-x-3">
                      <h1 class=" text-2xl text-blue-150 font-bold">Parameter {{parameterx.parameter_name}}</h1>
                      <img src="/icons/icon19_rename_orange.svg"/>
                     <h1 v-if="parameterx.status=='Completed'" class="text-green-400">{{parameterx.status}}</h1>
                     <h1 v-else-if="parameterx.status=='Incomplete'" class="text-yellow-150">{{parameterx.status}}</h1>
                     <h1 v-else class="text-red-700">{{parameterx.status}}</h1>
                    </div>
                    <div v-for="benchx in parameterx.benchmarks" :key="benchx.benchmark_name">
                        <div class=" pl-4 w-full flex gap-2 flex-row justify-between items-center ">
                          <span class="flex items-baseline">
                            <h1 class="text-xl text-yellow-150">Benchmark {{benchx.benchmark_name}}</h1>
                            <img src="/icons/icon19yellow.svg"/>
                          </span>
                            <div class="  flex space-x-3 mb-0.5">
                              <button class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-blue-150 ">
                              <img src="/icons/icon10_open_file.svg" class="w-5 h-5"/>
                                open file</button>
                             <button @click="show_add_edit_row=!show_add_edit_row" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-green-150 ">
                              <img src="/icons/icon9_move_row.svg" class="w-5 h-5"/>
                                move row</button>
                              <button class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-red-150 ">
                              <img src="/icons/icon11_delete.svg" class="w-5 h-5"/>
                                delete file</button>
                            </div>
                        </div>
                    </div>
                   </div>
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
     <!--Add Parameter-->
           <div v-if=" show_add_parameter" class="fixed z-10  flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
             <div class="w-97 flex flex-col bg-white p-5 gap-y-3 shadow-3xl rounded-3xl">
                    <div class=" flex justify-between items-center">
                          <h1 class="font-bold text-lg text-yellow-150">Add Parameter</h1>
                            <button @click="show_add_parameter=!show_add_parameter" class="text-red-150 text-lg">
                                CLOSE 
                            </button>
                    </div>
                    <div class="flex space-x-7 justify-start items-center">
                      <div>
                        <h1 class="text-blue-150">Parameter</h1>
                        <div class="w-full h-12 flex rounded-lg justify-center items-center border-blue-150 border-2">
                          <h1 class="text-2xl text-blue-150">E</h1>
                        </div>
                      </div>
                      <div class="w-full">
                      <h1 class="text-blue-150">Label</h1>
                     <input placeholder="Parameter Description" type="text" class=" pl-3 placeholder-blue-150 rounded-lg w-full text-blue-150 h-12 focus:outline-none border-2 border-blue-150"/>
                      </div>
                    </div>
                    <div class="w-full flex justify-end">
                    <button class="text-white w-20 py-2 flex space-x-1 rounded-lg  justify-center items-center  bg-blue-150 px-4 text-sm">
                      <img src="/icons/icon12_add.svg" class="w-4 h-4"/>
                      <h1>Add</h1>
                      </button>
                    </div>
             </div>
          
            
          </div>
       
          <!---Add Benchmark--->
            <div v-if=" show_add_benchmark" class="fixed z-10  flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
             <div class="w-97 flex flex-col bg-white p-5 gap-y-3 shadow-3xl rounded-3xl">
                    <div class=" flex justify-between items-center">
                          <h1 class="font-bold text-lg text-yellow-150">Add Benchmark</h1>
                            <button @click="show_add_benchmark=!show_add_benchmark" class="text-red-150 text-lg">
                                CLOSE 
                            </button>
                    </div>
                    <div class="flex flex-col gap-y-3 justify-start items-center">
                      <div class="w-full">
                        <h1 class="text-blue-150 ">Parameter</h1>
                      <select class="border-2 border-blue-150 focus:outline-none text-blue-150 px-2 h-12 w-full">
                          <option disabled selected>Choose a paramater where you want to insert benchmark</option>
                      </select>
                      </div>
                       <div class="w-full">
                        <h1 class="text-blue-150 ">After row</h1>
                      <select class="border-2 w-full border-blue-150 focus:outline-none text-blue-150 px-2 h-12">
                          <option disabled selected>Choose a benchmark </option>
                      </select>
                      </div>
                       <div class="w-full">
                        <h1 class="text-blue-150 ">Label</h1>
                      <input placeholder="Description of  new benchmark" type="text" class="placeholder-blue-150 border-2 w-full border-blue-150 focus:outline-none text-blue-150 px-2 h-12">
                         
                      </div>
                    </div>
                    <div class="w-full flex justify-end">
                    <button class="text-white w-20 py-2 flex space-x-1 rounded-lg  justify-center items-center  bg-blue-150 px-4 text-sm">
                      <img src="/icons/icon12_add.svg" class="w-4 h-4"/>
                      <h1>Add</h1>
                      </button>
                    </div>
             </div>
          
            
          </div>

          <!---->
          <!--Edit Row-->
             <div v-if=" show_add_edit_row" class="fixed z-10  flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
             <div class="w-97 flex flex-col bg-white p-5 gap-y-3 shadow-3xl rounded-3xl">
                    <div class=" flex justify-between items-center">
                          <h1 class="font-bold text-lg text-yellow-150">Edit Row</h1>
                            <button @click="show_add_edit_row=!show_add_edit_row" class="text-red-150 text-lg">
                                CLOSE 
                            </button>
                    </div>
                    <div class="flex flex-col gap-y-3 justify-start items-center">
                      <div class="w-full">
                        <div class="flex gap-x-3 text-blue-150 justify-start items-center">
                          <div class="flex items-center gap-x-2">
                            <input type="radio" checked  name="row" class=" border-2 border-blue-150"/> <h1>Before</h1>
                          </div>
                          <div class="flex items-center gap-x-2">
                            <input type="radio" name="row" /> <h1>After</h1>
                          </div>
                          
                        </div>
                      <select class="border-2 border-blue-150 focus:outline-none text-blue-150 px-2 h-12 w-full">
                          <option disabled selected>Choose a benchmark</option>
                      </select>
                      </div>
                       
                    </div>
                    <div class="w-full flex justify-end">
                    <button class="text-white w-20 py-2 flex space-x-1 rounded-lg  justify-center items-center  bg-blue-150 px-4 text-sm">
                      <img src="/icons/icon12.svg" class="w-4 h-4"/>
                      <h1>Add</h1>
                      </button>
                    </div>
             </div>
          
            
          </div>
          <!---->

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
        show_add_parameter:false,
        show_add_benchmark:false,
        show_add_edit_row:false,
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
     Parameter:[ 
     {
       id:1,
       parameter_name:'A',
       status:'Completed',
       benchmarks:[
           {benchmark_name:'A1'},
           {benchmark_name:'A2'},
           {benchmark_name:'A3'},
            {benchmark_name:'A3'}
       ]
     },
      {
       id:2,
       parameter_name:'B',
        status:'Incomplete',
       benchmarks:[
           {benchmark_name:'B1'},
           {benchmark_name:'B2'},
           {benchmark_name:'B3'}
       ]
     },
      {
       id:3,
       parameter_name:'C',
        status:'No file found',
       benchmarks:[
           {benchmark_name:'C1'},
           {benchmark_name:'C2'},
           {benchmark_name:'C3'}
       ]
     },
      {
       id:4,
       parameter_name:'D',
        status:'Completed',
       benchmarks:[
           {benchmark_name:'D1'},
           {benchmark_name:'D2'},
           {benchmark_name:'D3'}
       ]
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
