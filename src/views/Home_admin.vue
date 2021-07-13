<template>
   <nav class=" py-4 shadow-lg  bg-white fixed w-full" style="z-index:1">
    <div class="w-80">
    <img class="w-full  h-full" src="BUlogo.png">
    </div>
  </nav>

 
  <div class="flex font-roboto -z-1  pt-16  min-h-screen  ">
     
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
    <div class="flex flex-col  w-full">
      <div class="w-full  pl-4  pt-7 bg-default bg-cover"  >  
        <div class="flex items-center justify-between pr-5">
        <h1 class="text-2xl text-blue-150 font-normal">Accreditation Management</h1>
        <button class="flex space-x-2 z-0  drop-shadow-2xl items-center rounded-lg py-2 px-4 text-gray-150 bg-white">
          Change cover
        </button>
        </div>
        <h1 class="text-5xl text-yellow-150 pt-24 pb-3 ">Accreditation Management</h1>
      </div>
      <div class="  flex-col  h-full pt-10 px-4 space-y-3">
        
        <div class=" flex justify-between  items-center">
          <button @click="show_add=!show_add" class=" bg-indigo-150  py-1 space-x-2
          flex justify-evenly items-center text-white px-3 text-center">
            <p class="material-icons  text-lg ">add_circle_outline</p> <p>Add program</p>
          </button>
          <div class="flex gap-x-4  items-center">
            <select  class=" text-blue-150 w-60 rounded-sm h-9 focus:outline-none cursor-pointer border-2 border-blue-150">
                      <option selected disabled>Filter by</option>
            </select>
          <div class="space-x-2 cursor-pointer  font-normal text-xl flex justify-between items-center h-9 pl-0.5 pr-2 text-white bg-blue-150 ">
            <input type="text" placeholder="Search" class="
            placeholder-blue-150 pb-1
             pl-3 text-sm text-gray-150 h-8  focus:outline-none" />
            <span class="material-icons">
              search
            </span>
          </div>
          </div>
        </div>
          <div class=" flex  flex-wrap rounded-lg p-0.6 bg-gradient-to-r from-blue-150 to-yellow-150  h-99">
            <div class=" flex flex-col w-full rounded-lg bg-white justify-center h-full  p-4 ">
              <div class="w-full flex justify-end pb-2 pr-5">
                  <img src="/icons/icon5.svg"/>
                  <h1 class="text-yellow-150" >Sort by</h1>
              </div>
              <div class=" h-full grid grid-row-auto grid-cols-4   gap-5  overflow-auto  ">
                 <div v-for="programx in program" :key="programx.id" class="flex justify-evenly " >
             <div class=" p-2 pt-2  w-min relative" style="z-index:2">
               <div class="flex  items-center absolute top-0 right-0 ">
                 <div class="flex justify-center items-center rounded-full border-4 border-white h-10 w-10 cursor-pointer bg-green-150">
                  <label for="file_image" ><img src="/icons/icon19.svg"/></label>
                  <input @click="change_image" type="file" id="file_image" class="hidden"/>
               </div>
               <div class="flex justify-center items-center  rounded-full border-4 cursor-pointer border-white h-10 w-10 bg-red-150">
                  <img src="/icons/icon11.svg"/>
               </div>
               </div>
               
                <div class=" text-indigo-800 w-19   border-yellow-150 border-4 font-semibold rounded-lg shadow-xl  h-full bg-white bg-opacity-75">          
                  <div class="h-32 border-b-4 border-yellow-150">
                    <img :src="programx.imagefolder">
                  </div>
                  <div class="px-2">
                  <h1 class="text-lg text-blue-150 font-bold ">{{programx.program_name}}</h1>
                  <h1 class="text-sm text-blue-150">{{programx.Colleges}}</h1>
                  <h1 class="text-xs text-yellow-150">{{programx.address}},{{programx.Campus}} Campus</h1>
                  <h1 class="text-sm text-blue-150">Chairman in Charge</h1>
                  <h1 class="-z-1 absolute bottom-3 text-tiny text-blue-150">LEVEL {{programx.Level}} Accreditation</h1>
                  <div v-for="chairmanx in programx.chairman_incharge" :key="chairmanx.chairman_name">
                    <span class="flex justify-start text-xs text-yellow-150 items-center gap-x-1">
                      <img src="/icons/icon16.svg"><h1>{{chairmanx.chairman_name}}</h1></span>
                    <span class="flex justify-start text-xs text-yellow-150 items-center gap-x-1">
                      <img src="/icons/icon17.svg"><h1>{{chairmanx.charirman_number}}</h1></span>
                     <span class="flex justify-start text-xs text-yellow-150 items-center gap-x-1">
                      <img src="/icons/icon18.svg"><h1>{{chairmanx.chairman_email}}</h1></span>
                  </div>
                   <h1 class="flex-wrap text-blue-150  text-lg "> Level {{programx.Level}}<br> Accreditation</h1>
                  </div>
                 <router-link to="/program_level">
                  <div class="absolute w-17 justify-evenly border-4 border-white  text-sm rounded-br-xl rounded-tl-xl bg-yellow-150 text-white pb-2 cursor-pointer flex items-center  bottom-0 right-0">
                     <h1 class="font-normal">Open File</h1>
                  <i class=" far fa-folder-open"></i>
                  </div>
                 </router-link>
                </div>
             </div>
              </div>
              </div>
          </div>
          </div>
      </div>
    </div>
              
          <div v-if="show_add" class="fixed  flex justify-center bg-gray-200 z-50 h-max w-screen   bg-opacity-50 overflow-y-auto items-center  inset-0">
              <div class="relative rounded-lg flex flex-col shadow-2xl px-3 pb-8 pt-3 bg-white w-82 h-min">
                 <div class="flex justify-between pr-8">
                  <h1 class="text-xl text-yellow-150">Add Program</h1>
                  <button @click="show_add=!show_add" class=" text-red-500 text-lg ">
                    Close
                  </button>
                 </div>
                  <div class="flex gap-5 mt-5 pl-3 flex-wrap">
                      <select  class="fill-current text-blue-150 w-74 px-4 rounded-sm  h-11 focus:outline-none cursor-pointer border-2 border-blue-150">
                      <option selected disabled >Campus</option>
                      </select>
                       <select  class=" text-blue-150 w-74 pl-4 rounded-sm h-11 focus:outline-none cursor-pointer border-2 border-blue-150">
                      <option selected disabled>Colleges</option>
                      </select>
                      <select  class=" text-blue-150 w-74 pl-4 rounded-sm h-11 focus:outline-none cursor-pointer border-2 border-blue-150">
                      <option selected disabled>Program</option>
                      </select>
                      <input placeholder="Chairmain" type="text"  class="placeholder-blue-150 text-blue-150 w-74 px-4 rounded-sm  h-11 focus:outline-none cursor-text border-2 border-blue-150"/>
                      <input placeholder="Contact No." type="text"  class=" placeholder-blue-150 fill-current text-blue-150 w-74 px-4 rounded-sm  h-11 focus:outline-none cursor-text border-2 border-blue-150"/>
                      <input placeholder="E-mail" type="text"  class=" placeholder-blue-150 text-blue-150 w-74 px-4 rounded-sm  h-11 focus:outline-none cursor-text border-2 border-blue-150"/>
                       <select  class=" text-blue-150 w-74 pl-4 rounded-sm h-11 focus:outline-none cursor-pointer border-2 border-blue-150">
                      <option selected disabled>Level</option>
                      </select>
                  </div>
                  <button class=" absolute right-8 bottom-10 w-24 h-8 text-white bg-blue-250"> Add</button>
              </div>
              
          </div>
  </div>
</template>
<style scoped>

</style>
<script>
// @ is an alias to /src

export default {
  data(){
    return{
      show_add:false,
      program:[
         {
          id:2,
          program_name:"Information Technology",
           address:"Legazpi City",
          Colleges:"College of Science",
          Campus:'Main',
          Date:'July,30,2021',
          Level:1,
          imagefolder:'',
          chairman_incharge:[
            {
            chairman_name:'Johann Abad',
            charirman_number:'09021050501',
            chairman_email:'johannabad@gmail.com'
            }
          ]
        },
        {
          id:2,
          program_name:"Information Technology",
           address:"Legazpi City",
          Colleges:"College of Science",
          Campus:'Main',
          Date:'July,30,2021',
          Level:1,
          chairman_incharge:[
            {
            chairman_name:'Johann Abad',
            charirman_number:'09021050501',
            chairman_email:'johannabad@gmail.com'
            }
          ]
        },
        {
          id:3,
          program_name:"BS Biology",
           address:"Legazpi City",
          Colleges:"College of Science",
          Campus:'Main',
          Date:'July,30,2021',
          Level:1,
          chairman_incharge:[
            {
            chairman_name:'Johann Abad',
            charirman_number:'09021050501',
            chairman_email:'johannabad@gmail.com'
            }
          ]
        }
        ,
        {
          id:3,
          program_name:"BS Biology",
           address:"Legazpi City",
          Colleges:"College of Science",
          Campus:'Main',
          Date:'July,30,2021',
          Level:1,
          chairman_incharge:[
            {
            chairman_name:'Johann Abad',
            charirman_number:'09021050501',
            chairman_email:'johannabad@gmail.com'
            }
          ]
        }
        ,
        {
          id:3,
          program_name:"BS Biology",
           address:"Legazpi City",
          Colleges:"College of Science",
          Campus:'Main',
          Date:'July,30,2021',
          Level:1,
          chairman_incharge:[
            {
            chairman_name:'Johann Abad',
            charirman_number:'09021050501',
            chairman_email:'johannabad@gmail.com'
            }
          ]
        }
        ,
        {
           id:3,
          program_name:"BS Biology",
           address:"Legazpi City",
          Colleges:"College of Science",
          Campus:'Main',
          Date:'July,30,2021',
          Level:1,
          chairman_incharge:[
            {
            chairman_name:'Johann Abad',
            charirman_number:'09021050501',
            chairman_email:'johannabad@gmail.com'
            }
          ]
        }
        ,
        {
          id:3,
          program_name:"BS Biology",
           address:"Legazpi City",
          Colleges:"College of Science",
          Campus:'Main',
          Date:'July,30,2021',
          Level:1,
          chairman_incharge:[
            {
            chairman_name:'Johann Abad',
            charirman_number:'09021050501',
            chairman_email:'johannabad@gmail.com'
            }
          ]
        }
        ,
        {
          id:3,
          program_name:"BS Biology",
           address:"Legazpi City",
          Colleges:"College of Science",
          Campus:'Main',
          Date:'July,30,2021',
          Level:1,
          chairman_incharge:[
            {
            chairman_name:'Johann Abad',
            charirman_number:'09021050501',
            chairman_email:'johannabad@gmail.com'
            }
          ]
        }
      ]
    }

  },
   methods:{
       change_image(e){
        const file=e.target.files[0]
        this.program[e].imagefolder=URL.createObjectURL(file);
    }
    }
}
</script>
