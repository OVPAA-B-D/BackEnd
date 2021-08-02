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
      </div>
      <div class="flex  flex-col h-full pt-10 px-4  space-y-3">
        <div class=" flex justify-between  items-center">
            <div class="flex space-x-2 ">
          <!-- keep empty -->

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
                <div class=" items-start w-full flex-col flex flex-wrap pl-7">
                   <div  class="w-full">
                     <div >
                      <!-- PDF HERE -->
                      <object
                        data='https://pdfjs-express.s3-us-west-2.amazonaws.com/docs/choosing-a-pdf-viewer.pdf'
                        type="application/pdf"
                        width="100%"
                        height="678"
                      >
                      </object>
                    </div>
                   </div>
                </div>
              </div>
        
               </div>
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
  </div>
</template>
<style scoped>
.active{
  padding-bottom:3px;
}
</style>
<script>
// @ is an alias to /src
// import pdfFile from "./Project-Timeline.pdf"
// import PDFJSViewer from './components/PDFJSViewer'

export default { 
  // name: 'app',
  // components: {
  //   PDFJSViewer
  // },
  
  data(){
    return{
      // name: 'Project-Timeline.pdf', //change which pdf file loads
      // path: '.../node_modules/caniuse-lite/data/features/pdf-viewer.js', //path of the PDF.js viewer.html
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
  }
}
</script>
