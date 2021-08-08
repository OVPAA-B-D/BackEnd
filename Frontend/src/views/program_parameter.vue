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
      <div class="flex flex-col items-center" v-for="personal in personalInfo">
      <h1  class="uppercase text-white text-lg font-bold">{{ personal.firstName }} {{ personal.lastName }}</h1>
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
      <div class="flex  flex-col h-full pt-10 px-4  space-y-3">
        <div class=" flex justify-between  items-center">
            <div class="flex space-x-2 ">
          <button @click=" show_add_parameter=!show_add_parameter" class=" text-blue-150   space-x-2 border-2 border-blue-150 rounded-full
          flex justify-center items-center bg-white py-1 px-3 text-center">
            <p class="material-icons  text-sm ">add_circle_outline</p> <p class="text-sm">Add Parameter</p>
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
          <div class="flex flex-row h-99 w-fullrounded-xl  p-1 ">
            <div class="bg-gradient-to-b from-blue-150 to-yellow-150 rounded-md gap-y-2 flex  justify-items-start  w-full p-0.5 h-full">
               <div class="bg-white  h-full overflow-auto  w-2/3 flex flex-grow flex-wrap rounded-md pl-4">
             <div class=" w-full">
                    <div class=" flex py-3 sticky top-1   w-full  bg-white  space-x-2 items-center" style="z-index:1" >
                   <div class=" cursor-pointer w-4-h-4">
                   <router-link to="/program_area">
                   <img src="/icons/icon1_arrow_back.svg">
                   </router-link>
                   </div>
                   <div class="flex sticky top-0 bg-white justify-start gap-x-2 text-blue-150 text-lg">
                    <router-link to="/home_admin"> <a class="hover:underline cursor-pointer">{{programName}}</a></router-link>>
                    <router-link to="/program_area"><a class=" hover:underline" v-for=" levelName in levels ">{{levelName.level}}</a></router-link>>
                    <a class="font-bold cursor-default" v-for="area in areas">{{area.areaLabel}}</a>
                    </div>
                 </div>
                <div class=" items-start w-full flex-col flex flex-wrap pl-7" v-for="(parameter, index) in parameters" v-bind:key="parameter.parameterID">
                   <div  class="w-full flex flex-col gap-y-3 pr-4">
                     <div class="flex flex-shrink items-center py-2 justify-between">
                       <span class="flex items-baseline gap-x-3">
                        <h1 id="parameterLabel" class=" text-2xl text-blue-150 font-bold">{{letters[index]}}: {{parameter.parameterLabel}}</h1>
                        <input type="text" class="focus:outline-none border-2 border-blue-150 text-blue-150 pl-3 hidden" id="parameterName" value="Parameter name"/>
                        <img v-if="param_edit" @click="param_edit=!param_edit,show_input('parameterLabel','parameterName')" src="/icons/icon19_rename_orange.svg" class="cursor-pointer"/>
                        <button v-else @click="param_edit=!param_edit,show_input('parameterLabel','parameterName')"
                         class=" w-5 text-center
                          material-icons justify-center  opacity-75 flex  rounded-full
                           bg-green-150 text-white cursor-pointer text-sm hover:opacity-100 " >
                           download_done
                        </button>
                        <img @click="confirmation_deletion=!confirmation_deletion,text_modal='delete this Parameter'" src="/icons/icon11_delete_red.svg" class="cursor-pointer" />
                        <h1  class="text-green-150">Completed</h1>
                      </span>
                      <button @click="show_add_benchmark=!show_add_benchmark,addBenchmark(parameter.parameterID)" v-bind:key="parameter.parameterID" class="border-2 flex  px-2   items-center mr-4 border-blue-150 ">
                        <img src="icons/icon12_add_blue.svg" class="w-4 "/>
                        <h1 class="text-blue-150">Add Bechmark</h1></button>
                    </div>
                    <div >
                        <div v-for="(benchmark, bindex) in benchmarks" v-bind:key="benchmark.benchmarkID" class=" pl-4 w-full flex gap-x-1 flex-row justify-between items-center ">
                          <span class="flex items-baseline"  v-if="benchmark.parameterID===parameter.parameterID" >
                            <h1 id="bench1" class="text-xl text-yellow-150">{{letters[index]}}{{bindex+1}}: {{benchmark.benchmarkLabel}}</h1>
                            <input type="text" class="focus:outline-none border-2 border-yellow-150 text-yellow-150 pl-3 hidden"
                             id="bench1_input" value="Benchmark A1"/>
                            <img v-if="bench_edit" src="/icons/icon19yellow.svg" class="cursor-pointer" @click="bench_edit=!bench_edit,show_input('bench1','bench1_input')"/>
                            <button v-else  @click="bench_edit=!bench_edit,show_input('bench1','bench1_input')" class=" w-5 text-center ml-2
                              material-icons justify-center  opacity-75 flex  rounded-full
                              bg-green-150 text-white cursor-pointer text-sm hover:opacity-100 " >
                              download_done
                            </button>
                          </span>
                          <div class="  flex gap-x-1 mb-0.5" v-if="benchmark.parameterID===parameter.parameterID">
                              <button class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-blue-150 ">
                              <img src="/icons/icon10_open_file.svg" class="w-5 h-5"/>
                                open file</button>
                             <button @click="show_add_edit_row=!show_add_edit_row" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-green-150 ">
                              <img src="/icons/icon9_move_row.svg" class="w-5 h-5"/>
                                move row</button>
                             <button @click="confirmation_deletion=!confirmation_deletion,text_modal='delete this Benchmark'" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-red-150 ">
                              <img src="/icons/icon11_delete.svg" class="w-5 h-5"/>
                                delete file</button>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
        
               </div>
             <div v-if="show_details" class=" flex w-1/3 h-full rounded-xl bg-white ">
              <div class=" h-full   flex pl-0.5 rounded-md flex-grow bg-gradient-to-b from-blue-150 to-yellow-150">
                  <div class="  overflow-auto pb-3 flex flex-col flex-grow rounded-md w-full bg-gray-100 h-full">
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
                        <!-- <div class="w-full h-12 flex rounded-lg justify-center items-center border-blue-150 border-2"> -->
                          <!-- <h1 class="text-2xl text-blue-150">E</h1> -->
                        <input :value="letters[parameters.length]"  placeholder="E" type="text" class="text-2xl placeholder-blue-150 text-blue-150 w-16 h-12 flex rounded-lg text-center items-center focus:outline-none" disabled/>

                        <!-- </div> -->
                      </div>
                      <div class="w-full">
                      <h1 class="text-blue-150">Label</h1>
                     <input v-model="storeParameter.parameterLabel" placeholder="Parameter Description" type="text" class=" pl-3 placeholder-blue-100 rounded-lg w-full text-blue-150 h-12 focus:outline-none border-2 border-blue-150"/>
                      </div>
                    </div>
                    <div class="w-full flex justify-end">
                    <button @click="addParameter" class="text-white w-20 py-2 flex space-x-1 rounded-lg  justify-center items-center  bg-blue-150 px-4 text-sm">
                      <img src="/icons/icon12_add.svg" class="w-4 h-4"/>
                      <h1>Add</h1>
                      </button>
                    </div>
             </div>
          
            
          </div>
       
          <!---Add Benchmark--->
            <div v-if=" show_add_benchmark" class="fixed z-10  flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
             <div class="w-97 flex flex-col bg-white pb-3  gap-y-3 shadow-3xl rounded-3xl">
                    <div class="flex justify-between rounded-t-2xl px-4 shadow-3xl items-center h-12  bg-gradient-to-r from-blue-150 via-gray-300  to-yellow-150">
                          <h1 class=" text-lg text-white">Add Benchmark</h1>
                            <button @click="show_add_benchmark=!show_add_benchmark" class="text-white text-lg">
                                CLOSE 
                            </button>
                    </div>
                    <div class="flex px-4 flex-col gap-y-3 justify-start items-center">
                      
                       <div class="w-full">
                        <h1 class="text-blue-150 ">Label</h1>
                        <div class="bg-gradient-to-b from-blue-150 to-yellow-150 p-0.5 rounded-md ">
                      <input v-model="storeBenchmark.benchmarkLabel" placeholder="Description of  new benchmark" type="text" class="placeholder-blue-150
                       w-full rounded-md focus:outline-none text-blue-150 px-2 h-12">
                         </div>
                      </div>
                    </div>
                    <div class="w-full px-4 flex justify-end">
                    <button @click="confirmation=!confirmation,text_modal='add a new Benchmark'" class="text-white w-20 py-2 flex space-x-1 rounded-lg  justify-center items-center  bg-blue-150 px-4 text-sm">
                      <img src="/icons/icon12_add.svg" class="w-4 h-4"/>
                      <h1>Add</h1>
                      </button>
                    </div>
             </div>
          
            
          </div>
          <!---->
          <!--Edit Row-->
             <!-- <div v-if=" show_add_edit_row" class="fixed z-10  flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
             <div class="drag w-97 h-72 flex flex-col relative bg-white pb-5 gap-y-3 shadow-3xl rounded-3xl">
                    <div class=" flex justify-between rounded-t-2xl px-4 shadow-3xl items-center h-12  bg-gradient-to-r from-blue-150 via-gray-300  to-yellow-150">
                          <h1 class=" text-lg text-white">Edit Row</h1>
                            <button @click="show_add_edit_row=!show_add_edit_row" class="text-white text-lg">
                                CLOSE 
                            </button>
                    </div>
                    <h1 class="text-blue-250 ml-4 font-bold text-lg">Parameter name</h1>
                    <div class="flex flex-col gap-y-3 justify-start items-center">
                    <div class="flex h-full overflow-auto w-full items-center gap-x-2">                           
                       <draggable 
                          v-model="myArray" 
                          group="people" 
                          @start="drag=true" 
                          @end="drag=false" 
                          item-key="id" class=" w-full containerDiv cursor-grab flex flex-col justify-center gap-y-1">
                          <template #item="{element}" class="">
                          <div class=" flex text-yellow-150 border-b-2 border-yellow-150 justify-center items-center text-lg h-10 w-ful ">
                            <h1>{{element.name}}</h1>
                            </div>
                          </template>
                          </draggable>
                    </div>                       
                    </div>
                   <button @click="confirmation=!confirmation,text_modal='update this field'" class="w-20 rounded-md  bg-blue-150 text-white absolute right-4 bottom-5">update</button>
             </div>
          </div> -->
          <!---->
          <!----confirmation-->
           <div v-if="confirmation" class="fixed z-30 flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
                  <div class=" flex flex-col justify-start relative
                  gap-y-3  w-23 h-60 bg-white  shadow-3xl rounded-xl">
                  <div class="bg-blue-150 rounded-t-xl h-10 w-full"></div>
                  <div class="flex w-full  gap-x-3 pl-10  mt-3 items-center">
                      <img class="w-16" src="icons/icon_confirmation.svg"/>
                    <div class="flex flex-col">
                      <h1 class="text-xl font-bold text-blue-150">You are about to {{text_modal}}</h1>
                      <h1 class="text-blue-150 ">After your confirmation, you can still make changes to the information.</h1>
                    </div>
                  </div>
                  <div class="flex justify-end absolute right-10 bottom-10">
                    <div class="flex gap-x-1">
                      <button @click="confirmation=!confirmation,saveBenchmark()" class="px-1 rounded-md border-2 border-blue-150  text-white bg-blue-150">Confirm</button>
                      <button @click="confirmation=!confirmation" class="px-1 rounded-md text-blue-150 bg-white border-2 border-blue-150">Cancel</button>
                    </div>
                  </div>
                 </div>
           </div>
          <!---->
          <!--Delete--->
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
      letters:['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'],
      storeParameter:{parameterID:'',parameterLabel: '',areaID: ''},
      storeBenchmark:{benchmarkID:'',benchmarkLabel: '',parameterID: ''},
      parameters: [],
      benchmarks: [],
        component:"Details",
        show_add_parameter:false,
        show_add_benchmark:false,
        show_add_edit_row:false,
        show_details:false,
        confirmation_deletion:false,
        confirmation:false,
        // myArray:[
        //   {name:'Benchmark 1',id:0},
        //   {name:'Benchmark 2',id:1},
        //   {name:'Benchmark 3',id:2},
          
        // ],

         programName: '',
        firstName: '',
        lastName: '',
        contactNumber: '',
        email: '',
        levels: [],
        areas: [],

      filteredParameter:{
        parameterID: '',
        parameterLabel: '',
        areaID: '',
      },
      filteredBenchmark:{
        benchmarkID: '',
        benchmarkLabel: '',
        parameterID: '',
      },
         personalInfo: {
        firstName: "",
        lastName: "",
        roleType: "",
      },
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
     Parameter:[]
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
           var areaID = JSON.parse(localStorage.getItem('areaID'));
              console.log("areaID", areaID);
               api
               .get("/api/getAreaID", {params:{areaID}})
               .then((res) => {
                  this.areas = res.data;

                  console.log("areas ", this.areas);
        });


    },
    
  logout(){
      localStorage.removeItem("Personal");
       this.$router.push({ path: "login" });
   },
    fetchparameters(){
    let temp = [];
        console.log("parameters");
      api.get('api/getParameter').then(response => {
        temp= response.data;
        this.filteredParameter=response.data;
        temp.forEach((value, index) => {
        if(value.areaID === JSON.parse(localStorage.getItem('areaID'))){
          return this.parameters.push(value)
        }
        });
    });
    },
    fetchbenchmarks(){
        console.log("benchmarks");
      api.get('api/getBenchmark').then(response => {
        this.benchmarks= response.data;
        this.filteredBenchmark=response.data;
        console.log('benchmarks' ,this.benchmarks);
        return this.benchmarks;
    });
    },

     genParameterID(){
      
       var arrFiltered_parameter=[];
        console.log("boom",this.filteredParameter);
        if(this.filteredParameter !=""){
          
            console.log("asdasdas");
            this.filteredParameter.forEach((value,index) => {
            arrFiltered_parameter.push(value);
            });
            console.log("asd",arrFiltered_parameter[0].parameterID);
            const arrParameterID = arrFiltered_parameter[arrFiltered_parameter.length-1].parameterID.split("-");
            var parameterNumber = parseInt(arrParameterID[1]);          
            parameterNumber++;
            var parameterNumberString = parameterNumber.toString();
            
            while (parameterNumberString.length < arrParameterID[1].length) parameterNumberString = "0" + parameterNumberString;
            
            this.storeParameter.parameterID = "PAR-" +parameterNumberString;
     
         }
          else{
              this.storeParameter.parameterID = "PAR-00001";
              
          }

    },

     genBenchmarkID(){
      
       var arrFiltered_benchmark=[];
        console.log("boom",this.filteredBenchmark);
        if(this.filteredBenchmark !=""){
          
            console.log("asdasdas");
            this.filteredBenchmark.forEach((value,index) => {
            arrFiltered_benchmark.push(value);
            });
            console.log("asd",arrFiltered_benchmark[0].benchmarkID);
            const arrBenchmarkID = arrFiltered_benchmark[arrFiltered_benchmark.length-1].benchmarkID.split("-");
            var benchmarkNumber = parseInt(arrBenchmarkID[1]);          
            benchmarkNumber++;
            var benchmarkNumberString = benchmarkNumber.toString();
            console.log("benchmark:",benchmarkNumber);
            while (benchmarkNumberString.length < arrBenchmarkID[1].length) benchmarkNumberString = "0" + benchmarkNumberString;
            
            this.storeBenchmark.benchmarkID = "BMK-" +benchmarkNumberString;
     
         }
          else{
              this.storeBenchmark.benchmarkID = "BMK-00001";
              
          }

    },

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
       isActive_function(el){
       if(el=='btn1'){
      this.activeBtn= 0;
      }
      else {
        this.activeBtn= el;
        }
      },
      addParameter(){
      this.storeParameter.areaID = JSON.parse(localStorage.getItem('areaID'));
      this.genParameterID();
      api.post('/api/Parameter', this.storeParameter).then(()=>{
          this.show_add_parameter = false;
          location.reload();

        });
      },
      addBenchmark(parameterID){
      this.storeBenchmark.parameterID = parameterID;
      // console.log("Add Benchmark Function" , this.storeBenchmark.parameterID);
    },
    saveBenchmark(){
     // this.storeBenchmark.benchmarkID = this.parameterID + 1;

      // console.log("SaveFunction" , this.storeBenchmark);
      this.genBenchmarkID();
      api.post('/api/Benchmark', this.storeBenchmark).then(()=>{
      this.show_add_benchmark = false;
         // location.reload();
        });
    }
  },
  created(){
    this.fetchparameters();
    this.fetchbenchmarks();
     this.getPersonal();
  }
}
</script>
