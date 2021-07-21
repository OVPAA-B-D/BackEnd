<template>
   <nav class=" py-4 shadow-lg  bg-white fixed w-full">
    <div class="w-80">
    <img class="w-full  h-full" src="BUlogo.png">
    </div>
  </nav>

 
  <div class="flex font-roboto  pt-16  min-h-screen  ">
    <div class="w-1/4  flex  flex-col items-center py-5 overflow-hidden space-y-2  bg-blue-150  ">
      <div class="w-24 mt-10 h-24 rounded-full">
      <img class="w-full border-4 border-white rounded-full h-full" src="/img/img1.jpg">
      </div>
      <div class="flex flex-col items-center">
      <h1  class="uppercase text-white text-lg font-bold">Michael Cinco</h1>
      <h1 class="text-sm text-white">(Admin)</h1>
      </div>
      <div class="w-full  text-white space-y-2 pt-24 pb-36 ">
          <div class=" flex items-center gap-4 pl-4">
            <span class="material-icons">
            dashboard
            </span>
            Dashboard
          </div>
          <div class=" flex items-center gap-4 bg-yellow-150 space-x-1 shadow-2xl pl-4 py-4 " > 
            <i class="fas fa-network-wired"></i>
            Accreditation Management</div>
      </div>
    
      
      <div class="w-2/3 drop-shadow-2xl text-white flex items-center space-x-2 pl-4 float-left bg-yellow-150 self-start rounded-r-full  py-3   text-center   ">
        <span class="material-icons transform rotate-180 ">
        logout
      </span>
        <h1 class="cursor-pointer  uppercase">Log out</h1>
      </div>
    
     
    </div>
    <div class="flex flex-col flex-nowrap  w-full">
      <div class="w-full  pl-4 pt-7" style="background-image: url(/img/img2.png)">
        <div class="flex items-center justify-between pr-5">
        <h1 class="text-2xl text-blue-150 font-normal">Accreditation Management</h1>
        <button class="flex space-x-2 drop-shadow-2xl items-center rounded-lg py-2 px-4 text-gray-150 bg-white">
          <h1>Change cover</h1>
        </button>
        </div>
        <h1 class="text-5xl text-yellow-150 pt-24 pb-3 ">Accreditation Management</h1>
      </div>
      <div class="  flex-col h-full pt-10 p-5 space-y-3">
        <div class=" flex justify-between items-center">
          <button @click="show_add=!show_add" class=" bg-blue-500  py-1 space-x-2
          flex justify-evenly items-center text-white px-3 text-center">
            <p class="material-icons  text-lg ">add_circle_outline</p> <p>Add program</p>
          </button>
          <div class="space-x-2  font-normal text-xl flex justify-between items-center h-9 pl-0.5 pr-2 text-white bg-blue-150 ">
            <input type="text" placeholder="Search" class="
            placeholder-blue-150
             pl-3 text-sm text-gray-150 h-8 w- focus:outline-none" />
            <span class="material-icons">
              search
            </span>
          </div>
        </div>
          <div class="flex-wrap rounded-lg p-0.6 bg-gradient-to-r from-blue-150 to-yellow-150 ">
            <div class=" bg-white gap-y-2 justify-center grid overflow-auto grid-cols-4  h-96  p-4 ">
              <div v-for="programx in program" :key="programx.id" class=" " >
             <div class=" pr-2 w-min  relative">
                <div class=" text-indigo-800 border-yellow-150 border-4 w-56 font-semibold rounded-lg shadow-xl h-60  bg-white bg-opacity-75">
                  <div class=" h-32 bg-white p-1 border-b-4 border-yellow-150">

                  </div>
                  <div class=" pl-2">
                  <h1 class="text-lg text-blue-150 font-bold ">{{programx.program_name}}</h1>
                  <h1 class="text-xs text-blue-150">{{programx.Colleges}}</h1>
                  <h1 class="text-tiny text-yellow-150">{{programx.address}},{{programx.Campus}} Campus</h1>
                  <h1 class="text-tiny text-yellow-150">{{programx.Date}}</h1>
                  <h1 class=" absolute bottom-3 text-tiny text-blue-150">LEVEL {{programx.Level}} Accreditation</h1>
                  
                  </div>
                  <div class="absolute w-17 justify-evenly border-4 border-white  text-sm rounded-br-xl rounded-tl-xl bg-yellow-150 text-white pb-2 cursor-pointer flex items-center  bottom-0 right-0">
                     <h1 class="font-normal">Open File</h1>
                  <i class=" far fa-folder-open"></i>
                   
                  </div>
                </div>
             </div>
              </div>
              
          </div>
          </div>
          
          <div v-if="show_add" class="fixed  flex justify-center bg-gray-200 z-100 h-max w-screen   bg-opacity-50 overflow-y-auto items-center  inset-0">
              <div class=" rounded-lg shadow-2xl px-3 pt-3 pb-4 bg-white w-97 h-min">
                  <button @click="show_add=!show_add" class=" text-red-500 text-lg float-right">
                    Close
                  </button>
                  <div>
                <h1 class="block mt-16 ml-5 text-2xl text-yellow-150 ">Adding Program</h1>
                <div class="mt-4 px-5 space-y-2">
                    <input type="text" placeholder="Course" class=" placeholder-blue-150 h-12 px-3 w-full border-2 border-blue-150 rounded-lg focus:outline-none"/>
                    <select  class=" text-blue-150 px-3 w-full rounded-lg h-12 focus:outline-none cursor-pointer border-2 border-blue-150">
                      <option selected disabled> Campus</option>
                    </select>
                    <select  class=" text-blue-150 px-3 w-full rounded-lg h-12 focus:outline-none cursor-pointer border-2 border-blue-150">
                      <option selected disabled class="mt-1"> Level</option>
                    </select>
                   
                    <button class="float-right px-6 rounded-lg mt-5 text-lg bg-blue-150 text-white">
                      Add
                    </button>
                </div>
              </div>
              </div>
              
          </div>
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
          id:1,
          program_name:"Computer Science",
          address:"Legazpi City",
          Colleges:"College of Science",
          Campus:'Main',
          Date:'July,30,2021',
          Level:1
        },
        {
          id:2,
          program_name:"Information Technology",
           address:"Legazpi City",
          Colleges:"College of Science",
          Campus:'Main',
          Date:'July,30,2021',
          Level:1
        },
        {
          id:3,
          program_name:"BS Biology",
           address:"Legazpi City",
          Colleges:"College of Science",
          Campus:'Main',
          Date:'July,30,2021',
          Level:1
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
        }
        ,
        {
          id:3,
          program_name:"BS Biology",
           address:"Legazpi City",
          Colleges:"College of Science",
          Campus:'Main',
          Date:'July,30,2021',
          Level:1
        }
        ,
        {
           id:3,
          program_name:"BS Biology",
           address:"Legazpi City",
          Colleges:"College of Science",
          Campus:'Main',
          Date:'July,30,2021',
          Level:1
        }
        ,
        {
          id:3,
          program_name:"BS Biology",
           address:"Legazpi City",
          Colleges:"College of Science",
          Campus:'Main',
          Date:'July,30,2021',
          Level:1
        }
        ,
        {
          id:3,
          program_name:"BS Biology",
           address:"Legazpi City",
          Colleges:"College of Science",
          Campus:'Main',
          Date:'July,30,2021',
          Level:1
        }
      ]
    }

  }
}
</script>
