<template>
   <nav class=" py-4 shadow-lg  bg-white fixed w-full z-10" >
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
    <div class="flex flex-col  w-full">
      <div class="w-full flex relative  flex-col h-72 pl-4 pb-3 pt-7 "  > 
          <img :src="bg_image" class=" object-cover absolute  top-0 left-0 w-full h-full -z-1" />
         
        <div class="flex items-center justify-between pr-5">
        <h1 class="text-2xl text-blue-150 font-normal ">Accreditation Management</h1>
        <label for="bg_images" class="cursor-pointer">
        <span type="button" class="flex space-x-2 z-0  drop-shadow-2xl items-center rounded-lg py-2 px-4 text-gray-150 bg-white">
          Change cover
        </span>
        </label>
         <input  @change="change_bgImage"  type="file" id="bg_images" class="hidden" />
        </div>
        <h1 class="text-5xl text-yellow-150 pt-24 pb-3 ">Accreditation Management</h1>
      </div>
      <div class="  flex-col  h-full pt-10 px-4 space-y-3">
        
        <div class=" flex justify-between flex-wrap gap-y-2 flex-shrink  items-center">
          <button @click="show_add=!show_add,image_name=''" class=" bg-indigo-150  py-1 space-x-2
          flex justify-evenly items-center text-white px-3 text-center">
            <p class="material-icons  text-lg ">add_circle_outline</p> <p>Add program</p>
          </button>
          <div class="flex gap-x-4  items-center">
            <select @click="filterObj()" id="filtering"  class=" text-blue-150 w-60 rounded-sm h-9 focus:outline-none cursor-pointer border-2 border-blue-150">
                      <option selected  value="all">All Campus</option>
                      <option value="Main">Main Campus</option>
                      <option value="East">East Campus</option>
                      <option value="Daraga">Daraga Campus</option>
                      <option value="Tabaco">Tabaco Campus</option>
                      <option value="Guinobatan">Guinobatan Campus</option>
                      <option value="Polangui">Polangui Campus</option>
                      <option value="Gubat">Gubat Campus</option>
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
          <div class=" flex  flex-wrap mb-10 rounded-lg p-0.6 bg-gradient-to-r from-blue-150 to-yellow-150  h-99">
            <div class=" flex flex-col w-full rounded-lg bg-white justify-center h-full  p-4 ">
              <div class="w-full cursor-pointer flex justify-end pb-2 pr-5">
                  <img src="/icons/icon5_sort.svg"/>
                  <h1 class="text-yellow-150" >Sort by</h1>
              </div>
              <div class=" h-full flex flex-wrap justify-items-start gap-x-4  overflow-auto  ">
                 <div v-for="programx in filtered_program" :key="programx.id" class="flex justify-evenly " >
             <div class=" p-2 pt-2 w-min relative" style="height:340px" >
               
               <div class="flex  items-center absolute top-0 right-0 ">
                 <div @click="index_array(programx.id),show_edit=!show_edit,image_name=''" class="flex justify-center items-center rounded-full border-4 border-white h-10 w-10 cursor-pointer bg-green-150">
                 <img src="/icons/icon14_edit_image.svg" class="w-4 h-4"/>
               </div>
               <div @click="index_array(programx.id),confirmation_deletion=!confirmation_deletion" class="flex justify-center items-center  rounded-full border-4 cursor-pointer border-white h-10 w-10 bg-red-150">
                  <img src="/icons/icon11_delete.svg"/>
               </div>
               </div>
                <div class=" text-indigo-800 w-19   border-yellow-150 border-4 font-semibold rounded-lg shadow-xl  h-full bg-white bg-opacity-75">          
                  <div class="h-32  border-b-4 border-yellow-150">
                    <img :src="programx.imagefolder" class="object-fill w-full h-full">
                  </div>
                 
                  <div class="px-2">
                  <h1 class="text-lg text-blue-150 font-bold ">{{programx.program_name}}</h1>
                  <h1 class="text-sm text-blue-150">{{programx.Colleges}}</h1>
                  <h1 class="text-xs text-yellow-150">{{programx.address}},{{programx.Campus}} Campus</h1>
                  <h1 class="text-sm text-blue-150">Chairman in Charge</h1>
                  <h1 class="-z-1 absolute bottom-3 text-tiny text-blue-150">LEVEL {{programx.Level}} Accreditation</h1>
                  <div>
                    <span class="flex justify-start text-xs text-yellow-150 items-center gap-x-1">
                      <img src="/icons/icon16_man.svg"><h1>{{programx.chairman_name}}</h1></span>
                    <span class="flex justify-start text-xs text-yellow-150 items-center gap-x-1">
                      <img src="/icons/icon17_contact.svg"><h1>{{programx.chairman_number}}</h1></span>
                     <span class="flex justify-start text-xs text-yellow-150 items-center gap-x-1">
                      <img src="/icons/icon18_inbox.svg"><h1>{{programx.chairman_email}}</h1></span>
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
              
          <div v-if="show_add" class="fixed  flex justify-center bg-gray-200 z-10 h-max w-screen   bg-opacity-50 overflow-y-auto items-center  inset-0">
              <div class="relative rounded-lg flex flex-col shadow-2xl px-3 pb-8 pt-3 bg-white w-82 h-min">
                 <div class="flex justify-between pr-8">
                  <h1 class="text-xl text-yellow-150">Add Program</h1>
                  <button @click="show_add=!show_add" class=" text-red-500 text-lg ">
                    Close
                  </button>
                 </div>
                  <div class="flex gap-5 mt-5 pl-3 flex-wrap">
                      <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Campus</h1>
                      <select id="selected_campus" class="fill-current italic text-blue-150 w-74 px-4 rounded-sm  h-11 focus:outline-none cursor-pointer border-2 border-blue-150">
                      <option selected disabled > Select a Campus</option>
                      <option value="Main">Main Campus</option>
                      <option value="East">East Campus</option>
                      <option value="Daraga">Daraga Campus</option>
                      <option value="Tabaco">Tabaco Campus</option>
                      <option value="Guinobatan">Guinobatan Campus</option>
                      <option value="Polangui">Polangui Campus</option>
                      <option value="Gubat">Gubat Campus</option>
                      </select>
                      </div>
                     <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">College</h1>
                      <select id="selected_college" class="fill-current italic text-blue-150 w-74 px-4 rounded-sm  h-11 focus:outline-none cursor-pointer border-2 border-blue-150">
                      <option selected disabled >Choose a College</option>
                      <option  >College of Science</option>
                      </select>
                      </div>
                     <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Program</h1>
                      <select id="selected_program"  class="fill-current italic text-blue-150 w-74 px-4 rounded-sm  h-11 focus:outline-none cursor-pointer border-2 border-blue-150">
                      <option selected disabled > Choose a Program</option>
                      <option>Computer Science</option>
                      </select>
                      </div>
                      <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Chairmain</h1>
                      <input id="chairmans_name" placeholder="Enter the chairman’s name" type="text"  class="italic placeholder-blue-150 text-blue-150 w-74 px-4 rounded-sm  h-11 focus:outline-none cursor-text border-2 border-blue-150"/>
                      </div>
                     <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Contact number</h1>
                      <input     id="chairmans_number" placeholder="Chairman’s contact number" type="number"  class="italic placeholder-blue-150 text-blue-150 w-74 px-4 rounded-sm  h-11 focus:outline-none cursor-text border-2 border-blue-150"/>
                      </div>
                      
                      <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Email</h1>
                      <input id="chairmans_email" placeholder="Chairman’s E-mail Address" type="text"  class="italic placeholder-blue-150 text-blue-150 w-74 px-4 rounded-sm  h-11 focus:outline-none cursor-text border-2 border-blue-150"/>
                      </div>
                      <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Level</h1>
                      <select id="level" class="fill-current italic text-blue-150 w-74 px-4 rounded-sm  h-11 focus:outline-none cursor-pointer border-2 border-blue-150">
                      <option selected disabled value="" >Level of accreditation</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      </select>
                      </div>
                  </div>
                  <div class="flex absolute items-center bottom-8 right-8 gap-x-2">
                    <div class="flex overflow-hidden w-32   items-end  h-8 border-b-2 border-blue-250">
                      <h1 class="text-yellow-150">File: </h1>
                       <h1 class="text-blue-150">{{image_name}}</h1>
                    </div>
                   <label for="program_image"><span  class="flex items-center select-none cursor-pointer  justify-center  gap-2 border-2 border-blue-150  w-32 h-8 text-blue-250  "> 
                    <img src="icons/icon_change_cover.svg"/>
                    Add Cover
                  </span>
                   </label>
                  <button @click=" confirmation=!confirmation" class="flex items-center justify-center px-5 gap-2 w-32 h-8 text-white bg-blue-250"> 
                    <img src="icons/icon12_add.svg"/>
                    Add
                  </button>
                  <input type="file" class="hidden" id="program_image" @change="add_image"/>
                  </div>
              </div>
              
          </div>
          <!--Edit Folder-->
                
          <div v-if="show_edit" class="fixed  flex justify-center bg-gray-200 z-10 h-max w-screen   bg-opacity-50 overflow-y-auto items-center  inset-0">
              <div class="relative rounded-lg flex flex-col shadow-2xl px-3 pb-8 pt-3 bg-white w-82 h-min">
                 <div class="flex justify-between pr-8">
                  <h1 class="text-xl text-yellow-150">Edit Program</h1>
                  <button @click="show_edit=!show_edit" class=" text-red-500 text-lg ">
                    Close
                  </button>
                 </div>
                  <div class="flex gap-5 mt-5 pl-3 flex-wrap">
                      <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Campus</h1>
                      <select id="edit_selected_campus" class="fill-current italic text-blue-150 w-74 px-4 rounded-sm  h-11 focus:outline-none cursor-pointer border-2 border-blue-150">
                      <option selected disabled :value="program[index].Campus">Select a Campus</option>
                      <option value="Main">Main Campus</option>
                      <option value="East">East Campus</option>
                      <option value="Daraga">Daraga Campus</option>
                      <option value="Tabaco">Tabaco Campus</option>
                      <option value="Guinobatan">Guinobatan Campus</option>
                      <option value="Polangui">Polangui Campus</option>
                      <option value="Gubat">Gubat Campus</option>
                      </select>
                      </div>
                     <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">College</h1>
                      <select  id="edit_selected_college" class="fill-current italic text-blue-150 w-74 px-4 rounded-sm  h-11 focus:outline-none cursor-pointer border-2 border-blue-150">
                      <option selected disabled :value="program[index].Colleges">Choose a College</option>
                      <option  >College of Science</option>
                      <option  >College of Medicine</option>
                      </select>
                      </div>
                     <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Program</h1>
                      <select id="edit_selected_program"  class="fill-current italic text-blue-150 w-74 px-4 rounded-sm  h-11 focus:outline-none cursor-pointer border-2 border-blue-150">
                      <option selected disabled :value="program[index].program_name"> Choose a Program</option>
                      <option>Computer Science</option>
                       <option>Biology</option>
                      </select>
                      </div>
                      <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Chairmain</h1>
                      <input id="edit_chairmans_name" :value="program[index].chairman_name" placeholder="Enter the chairman’s name" type="text"  class="italic placeholder-blue-150 text-blue-150 w-74 px-4 rounded-sm  h-11 focus:outline-none cursor-text border-2 border-blue-150"/>
                      </div>
                     <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Contact number</h1>
                      <input :value="program[index].chairman_number"  id="edit_chairmans_number" placeholder="Chairman’s contact number" type="number"  class="italic placeholder-blue-150 text-blue-150 w-74 px-4 rounded-sm  h-11 focus:outline-none cursor-text border-2 border-blue-150"/>
                      </div>
                      
                      <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Email</h1>
                      <input :value="program[index].chairman_email" id="edit_chairmans_email" placeholder="Chairman’s E-mail Address" type="text"  class="italic placeholder-blue-150 text-blue-150 w-74 px-4 rounded-sm  h-11 focus:outline-none cursor-text border-2 border-blue-150"/>
                      </div>
                      <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Level</h1>
                      <select id="edit_level" class="fill-current italic text-blue-150 w-74 px-4 rounded-sm  h-11 focus:outline-none cursor-pointer border-2 border-blue-150">
                      <option selected disabled :value="program[index].Level">Level of accreditation</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      </select>
                      </div>
                  </div>
                  <div class="flex absolute  bottom-8 right-8 gap-x-2">
                    <div class="flex overflow-hidden w-32   items-end  h-8 border-b-2 border-blue-250">
                      <h1 class="text-yellow-150">File: </h1>
                       <h1 class="text-blue-150">{{image_name}}</h1>
                    </div>
                   <label for="program_image"><span  class="flex items-center select-none cursor-pointer  justify-center  gap-2 border-2 border-blue-150  w-36 h-8 text-blue-250  "> 
                    <img src="icons/icon_change_cover.svg"/>
                    Change Cover
                  </span>
                   </label>
                  <button @click="update_confirmation=!update_confirmation" class="flex items-center justify-center px-5 gap-2 w-36 h-8 text-white bg-blue-250"> 
                    <img src="icons/icon12_add.svg"/>
                    Update
                  </button>
                  <input type="file" class="hidden" id="program_image" @change="change_image"/>
                  </div>
              </div>  
          </div>
          <!----->
          <!---Confirmation-->
            <div v-if="confirmation" class="fixed z-30 flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
                 <div class="flex flex-col items-center justify-center gap-y-3 w-96 h-52 bg-white  shadow-3xl rounded-xl">
                 <h1 class="text-blue-150 text-xl">Are you sure to perform this action?</h1>
                  <span class="flex items-center gap-x-3">
                    <button @click="confirmation=!confirmation,show_success=!show_success,add_program()" class=" select-none bg-blue-250 rounded-lg text-white w-28 h-10">Confirm</button>
                    <button @click="confirmation=!confirmation" class="select-none border-2 rounded-lg border-blue-150 text-blue-250  w-28 h-10">Cancel</button>
                  </span>
                 </div>
           </div>
            <div v-if="update_confirmation" class="fixed z-30 flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
                 <div class="flex flex-col items-center justify-center gap-y-3 w-96 h-52 bg-white  shadow-3xl rounded-xl">
                 <h1 class="text-blue-150 text-xl">Are you sure to perform this action?</h1>
                  <span class="flex items-center gap-x-3">
                    <button @click="update_confirmation=!update_confirmation,show_success=!show_success,update()" class=" select-none bg-blue-250 rounded-lg text-white w-28 h-10">Confirm</button>
                     <button @click="update_confirmation=!update_confirmation" class="select-none border-2 rounded-lg border-blue-150 text-blue-250  w-28 h-10">Cancel</button>
                  </span>
                 </div>
           </div>
          <!---->
           <div v-if="show_success" class="fixed z-30 flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
                 <div class="flex flex-col text-center items-center justify-center gap-y-3 p-3 pb-10  w-60  bg-white  shadow-3xl rounded-xl">
                    <img src="icons/icon_success.svg" class="w-12"/>
                    <h1 class="text-2xl font-bold text-green-150">Success</h1>
                  <span class="w-40"> <h1 class="text-green-150">You have Successfuly added a Program</h1></span>
                  <span class="flex items-center gap-x-3">
                    <button @click="show_success=!show_success" class=" border-2 border-green-150 select-none  rounded-lg text-green-150 w-28 h-10">Close</button>
                   </span>
                 </div>
           </div>
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
           <div v-if="update_show_success" class="fixed z-30 flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
                 <div class="flex flex-col text-center items-center justify-center gap-y-3 p-10 w-80 bg-white  shadow-3xl rounded-xl">
                    <img src="icons/icon_success.svg"/>
                  <span class="w-40"> <h1 class="text-green-150">You have Successfuly added a Program</h1></span>
                  <span class="flex items-center gap-x-3">
                    <button @click="update_show_success=!update_show_success" class=" border-2 border-green-150 select-none  rounded-lg text-green-150 w-28 h-10">Close</button>
                   </span>
                 </div>
           </div>
          <!---Successfuly-->
  </div>
</template>
<style scoped>
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}
</style>
<script>
// @ is an alias to /src

export default {
  created:function(){
    this.filtered_program=this.program
  },
  data(){
    return{
      show_add:false,
      show_edit:false,
      show_success:false,
      confirmation_deletion:false,
      update_show_success:false,
      update_confirmation:false,
      confirmation:false,
      image_name:'',
      bg_image:'img/img2.png',
      program_image:'img/default_cover_image.jpg',
      id_array:'0',
      idn:0,
      index:0,
      filtered_program:[],
      program:[
         {
          id:0,
          program_name:"Information Technology",
           address:"Legazpi City",
          Colleges:"College of Science",
          Campus:'Main',
          Date:'July,30,2021',
          Level:1,
          imagefolder:'img/default_cover_image.jpg',
          chairman_name:'Johann Abad',
          chairman_number:'09021050501',
          chairman_email:'johannabad@gmail.com'
        },
      ]
    }
  },
   methods:{
     add_program(){
       this.idn=this.idn+1
       let n=this.idn
      let new_program=
        {
            'id':n,
            'program_name':document.getElementById("selected_program").value,
            'address':"Legazpi City",
            'Colleges':document.getElementById("selected_college").value,
            'Campus':document.getElementById("selected_campus").value,
            'Date':'July,30,2021',
            'Level':document.getElementById("level").value,
            'imagefolder':this.program_image,
            'chairman_name':document.getElementById("chairmans_name").value,
            'chairman_number':document.getElementById("chairmans_number").value,
            'chairman_email':document.getElementById("chairmans_email").value,
        }
        this.program.push(new_program)
        this.program_image='img/default_cover_image.jpg'

      },
      update(){
          this.program[this.index].id=this.index
          this.program[this.index].program_name=document.getElementById("edit_selected_program").value,
          this.program[this.index].address="Legazpi City",
          this.program[this.index].Colleges=document.getElementById("edit_selected_college").value,
          this.program[this.index].Campus=document.getElementById("edit_selected_campus").value,
          this.program[this.index].Date='July,30,2021',
          this.program[this.index].Level=document.getElementById("edit_level").value,
          this.program[this.index].imagefolder=this.program_image,
          this.program[this.index].chairman_name=document.getElementById("edit_chairmans_name").value,
          this.program[this.index].chairman_number=document.getElementById("edit_chairmans_number").value,
          this.program[this.index].chairman_email=document.getElementById("edit_chairmans_email").value

      },
     index_array(e){
         this.index=this.program.findIndex(x => x.id===e)
     },
      change_image(e){
        this.image_name=''
        const file=e.target.files[0]
        this.program[this.index].imagefolder=URL.createObjectURL(file);
        this.image_name=file.name;
    },
    filterObj(){
      let x=document.getElementById('filtering').value
      if(x=='all'){
         this.filtered_program=[];
         return this.filtered_program=this.program
        }
        this.filtered_program= this.program.filter(trans=>trans.Campus==x)
    },
    add_image(e){
        const file=e.target.files[0]
        this.program_image=URL.createObjectURL(file);
        this.image_name=file.name;
    },
    change_bgImage(e){
       const file=e.target.files[0];
        this.bg_image=URL.createObjectURL(file);
    }
    }
}
</script>
