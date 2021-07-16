<template>
   <nav class=" py-4 shadow-lg  bg-white fixed w-full">
    <div class="w-80">
    <img class="w-full  h-full" src="BUlogo.png">
    </div>
  </nav>

  <!-- MENU -->
  <div class="flex font-roboto -z-1  pt-16  min-h-screen  ">
    
     <div class="w-22 static   flex  flex-col items-center py-5  space-y-2  bg-blue-150  ">
      <div class="w-24 flex items-center border-4 border-white justify-center  bg-yellow-150 cursor-pointer mt-10 h-24 rounded-full">
            <span class="material-icons cursor-poi text-white text-4xl">
                add_photo_alternate
            </span>
      </div>
      <div class="flex flex-col items-center">
      <h1  class="uppercase text-white text-lg font-bold">Julie Magdasok</h1>
      <h1 class="text-sm text-white">(External Accreditor)</h1>
      </div>
      <div class=" text-white space-y-2 pt-24 flex-grow ">
          
         
          <div class=" flex cursor-pointer w-91 items-center gap-4 bg-yellow-150 space-x-1 shadow-3xl pl-4 py-3 " > 
            <img src="/icons/icon20.svg">
            Accreditation Management
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


 <!-- banner -->
    <div class="flex flex-col  w-full">
      <div class="w-full  pl-10  pt-10  bg-default bg-cover"  >  
        <div class="flex items-center justify-between pr-5">
        <h1 class="text-2xl text-blue-150 font-normal">Accreditation Management/
        <a class="font-bold text-yellow-150 font-normal ">Level 1 Accreditation<br></a></h1></div>
        <h2 class="text-5xl text-yellow-150 pt-5 pb-3 ">Information Technology</h2>
          <h3 class="text-2xl text-blue-150 font-normal">Chairman in charge<br></h3>
       <h3 class="text-1xl text-yellow-150 font-normal font-bold">Johann Abad<br></h3>
          <h3 class="text-1xl text-yellow-150 font-normal font-bold">091234567<br></h3>
           <h3 class="text-1xl text-yellow-150 font-normal font-bold">Johannabad@gmail.com <br></h3>
          
      </div>

<!--  -->

        

      <div class="  flex-col h-full pt-10 px-4  space-y-3">
        <div class=" flex justify-between  items-center">
            <div class="flex space-x-2 ">  
             </div>

<!--icon
        <div class=" items-center cursor-pointer absolute bottom-0 h-17 flex justify-evenly rounded-t-full right-10 bg-white w-37 ">
          <img class="w-7.5 h-7.5" src="/icons/icon2.svg">
           <img class="w-7.5 h-7.5" src="/icons/icon3.svg">
        </div>-->



          <div class="space-x-2  font-normal text-xl flex justify-center items-center p-0.5  pr-2 text-white bg-blue-150 ">
            <input type="text" placeholder="Search" class="
            placeholder-blue-150
             pl-3 text-sm text-gray-150 h-8  focus:outline-none" />
            <span class="material-icons cursor-pointer">
              search
            </span>
          </div>
        </div>


          <div class=" flex  flex-wrap rounded-lg p-0.6 bg-gradient-to-r from-blue-150 to-yellow-150  h-99">
            <div class=" flex flex-col w-full rounded-lg bg-white justify-top h-full  p-4 ">

            <!--viewarea-->

            <h1> Information Technology/Area </h1>
              <div class=" items-center flex-row flex flex-wrap pl-7">
                     <div v-for="folderx in folderArea" :key="folderx.id" class=" text-center justify-center items-center ">
                  <div class=" flex justify-center w-28 mt-10 hover:border-2 mr-2 border-yellow-150 cursor-pointer">
                  
  
              <router-link to="/">  <img :src="folderx.folder_icon"></router-link>
                
                  </div>
                    <h1>{{folderx.floder_name}}</h1>
                    </div>
                </div>
                
             

            

              
             
                  
           










    
    
           </div> 
         
            </div>
          </div>


      </div>
    </div>



   







          <!----->

  
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
        folder_icon:'/icons/icon4.svg',
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
    }
  },
}
</script>