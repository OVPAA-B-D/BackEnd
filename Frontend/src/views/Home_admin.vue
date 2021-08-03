<template>
   <nav class=" py-4 shadow-lg  bg-white fixed w-full z-10" >
    <div class="w-80">
    <img class="w-full  h-full" src="BUlogo.png">
    </div>
  </nav>

 
  <div class="flex font-roboto -z-1  pt-16  min-h-screen  ">
     
     <div class="w-22 static   flex  flex-col items-center py-5  space-y-2  bg-blue-150  ">
      <div class="w-24 flex items-center border-4 border-white justify-center  bg-yellow-150 cursor-pointer mt-10 h-24 rounded-full">
            <span class="material-icons cursor-pointer text-white text-4xl">
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
      <div class="w-2/3 absolute bottom-8 drop-shadow-2xl text-white flex items-center space-x-2 pl-4 float-left bg-yellow-150 self-start rounded-r-full  py-3   text-center   " @click="logout">
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
          <div class=" flex  flex-wrap mb-10 rounded-md p-0.5 bg-gradient-to-r from-blue-150 to-yellow-150  h-99">
            <div class=" flex flex-col w-full rounded-md bg-white justify-center h-full  p-4 ">
              <div class="w-full cursor-pointer flex justify-end pb-2 pr-5">
                  <img src="/icons/icon5_sort.svg" class="cursor-pointer"/>
                  <h1 class="text-yellow-150 cursor-pointer" >Sort by</h1>
              </div>
              <div class=" h-full flex flex-wrap justify-items-start gap-x-4  overflow-auto  ">
               <!----->  <div v-for="programx in filtered_program" :key="programx.programID" class="flex justify-evenly " >
             <div class=" p-2 pt-2 w-min relative" style="height:340px" >
               
               <div class="flex  items-center absolute top-0 right-0 ">
                 <div @click="index_array(programx.programID),show_edit=!show_edit,image_name=''" class="flex justify-center items-center rounded-full border-4 border-white h-10 w-10 cursor-pointer bg-green-150">
                 <img src="/icons/icon14_edit_image.svg" class="w-4 h-4"/>
               </div>
               <div @click="index_array(programx.programID),confirmation_deletion=!confirmation_deletion" class="flex  justify-center items-center  rounded-full border-4 cursor-pointer border-white h-10 w-10 bg-red-150">
                  <img src="/icons/icon11_delete.svg"/>
               </div>
               </div>
                <div class=" text-indigo-800 w-19   border-yellow-150 border-4 font-semibold rounded-lg shadow-xl  h-full bg-white bg-opacity-75">          
                  <div class="h-32  border-b-4 border-yellow-150">
                    <!-- <img :src="program[0].imagefolder" class="object-fill w-full h-full"> -->
                  </div>
                 
                  <div class="px-2">
                  <h1 class="text-lg text-blue-150 font-bold ">{{programx.programName}}</h1>
                  <h1 class="text-sm text-blue-150">{{programx.collegeName}}</h1>
                  <h1 class="text-xs text-yellow-150">{{programx.campusName}} Campus</h1>
                  <h1 class="text-sm text-blue-150">Chairman in Charge</h1>
                  <h1 class="-z-1 absolute bottom-3 text-tiny text-blue-150">LEVEL {{programx.level}} Accreditation</h1>
                  <div>
                    <span class="flex justify-start text-xs text-yellow-150 items-center gap-x-1">
                      <img src="/icons/icon16_man.svg"><h1>{{programx.chairmanName}}</h1></span>
                    <span class="flex justify-start text-xs text-yellow-150 items-center gap-x-1">
                      <img src="/icons/icon17_contact.svg"><h1>{{programx.contactNumber}}</h1></span>
                     <span class="flex justify-start text-xs text-yellow-150 items-center gap-x-1">
                      <img src="/icons/icon18_inbox.svg"><h1>{{programx.email}}</h1></span>
                  </div>
                   <h1 class="flex-wrap text-blue-150  text-lg "> Level {{programx.level}}<br> Accreditation</h1>
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
              <div class="relative rounded-2xl  flex flex-col shadow-2xl bg-white w-82 pb-8 h-min">
               <form @submit.prevent="confirmation=!confirmation">
                 <div class="flex justify-between rounded-t-2xl px-4 shadow-3xl items-center h-12  bg-gradient-to-r from-blue-150 via-gray-300  to-yellow-150">
                  <h1 class="text-xl text-white">Add Program</h1>
                  <button @click="show_add=!show_add" class=" text-white text-lg ">
                    Close
                  </button>
                 </div>
                
                  <div class="flex gap-5 mt-5 justify-center flex-wrap">
                      <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Campus</h1>
                       <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                      <select  id="selected_campus" required class="fill-current   italic text-blue-150 w-74 px-4 rounded-md  h-12 focus:outline-none cursor-pointer " @change="getCampusCode()">
                      <option selected disabled value=""> Select a Campus</option>
                      <option v-for="campus in campuses" v-bind:key="campus.id" v-bind:value="campus.campusCode"> {{ campus.campusName }}</option>
                      
                      </select>
                       </div>
                      </div>
                     <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">College</h1>
                       <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                      <select  id="selected_college" required class="fill-current italic text-blue-150 w-74 px-4 rounded-sm  h-12 focus:outline-none cursor-pointer" @change="getProgramCode()">
                      <option selected disabled value="" >Choose a College</option>
                      <option  v-for="college in colleges" v-bind:key="college.id" v-bind:value="college.collegeCode"> {{ college.collegeName }}</option>
                      </select>
                      </div>
                      </div>
                     <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Program</h1>
                        <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                      <select  id="selected_program" required class="fill-current italic text-blue-150 w-74 px-4 rounded-sm  h-12 focus:outline-none cursor-pointer">
                      <option selected disabled value="" > Choose a Program</option>
                      <option v-for="program in programs" v-bind:key="program.id" v-bind:value="program.programCode"> {{ program.programName }}</option>
                      </select>
                      </div>
                      </div>
                      <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Chairman's firstname</h1>
                      <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                        <input v-model="addProgram.firstName" required id="chairmans_name" placeholder="Enter the chairman’s firstname" type="text"
                          class="italic placeholder-blue-150 text-blue-150 w-74 px-4 rounded-sm  h-12 focus:outline-none cursor-text "/>
                      </div>
                      </div>
                      <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Chairman's lastname</h1>
                      <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                        <input v-model="addProgram.lastName" id="chairmans_name" placeholder="Enter the chairman’s lastname" type="text"
                          class="italic placeholder-blue-150 text-blue-150 w-74 px-4 rounded-sm  h-12 focus:outline-none cursor-text "/>
                      </div>
                      </div>
                      <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Chairman's middlename</h1>
                      <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                        <input v-model="addProgram.middleName" required id="chairmans_name" placeholder="Enter the chairman’s middlename" type="text"
                          class="italic placeholder-blue-150 text-blue-150 w-74 px-4 rounded-sm  h-12 focus:outline-none cursor-text "/>
                      </div>
                      </div>
                     <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Contact number</h1>
                        <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                        <input v-model="addProgram.contactNumber" required id="chairmans_number" placeholder="Chairman’s contact number" type="number"
                          class="italic placeholder-blue-150 text-blue-150 w-74 px-4 rounded-sm  h-12 focus:outline-none cursor-text "/>
                        </div>
                        </div>
                      
                      <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Email</h1>
                      <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                      <input v-model="addProgram.email" id="chairmans_email" placeholder="Chairman’s E-mail Address" type="text" 
                       class="italic placeholder-blue-150 text-blue-150 w-74 px-4 rounded-sm  h-12 focus:outline-none cursor-text "/>
                      </div>
                      </div>
                      <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Level</h1>
                       <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                      <select id="level" required class="fill-current italic text-blue-150 w-74 px-4 rounded-sm  h-12 focus:outline-none cursor-pointer">
                      <option selected disabled value="" >Level of accreditation</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      </select>
                      </div>
                      </div>
                  </div>
                 
                  <div class="flex justify-end pt-5  pr-5">
                  <div class="flex self-right items-center  gap-x-2">
                    <div class="flex overflow-hidden w-32   items-end  h-8 border-b-2 border-blue-250">
                      <h1 class="text-yellow-150">File: </h1>
                       <h1 class="text-blue-150">{{imageName}}</h1>
                    </div>
                   <label for="program_image"><span  class="flex items-center select-none cursor-pointer  justify-center  gap-2 border-2 border-blue-150  w-32 h-8 text-blue-250  "> 
                    <img src="icons/icon_change_cover.svg"/>
                    Add Cover
                  </span>
                   </label>
                  <button type="submit" value="Submit"  @click=" text_modal='add a new Program'" class="flex items-center justify-center px-5 gap-2 w-32 h-8 text-white bg-blue-250"> 
                    <img src="icons/icon12_add.svg"/>
                    Add
                  </button>
                  <input type="file" class="hidden" id="program_image" @change="add_image"/>
                  </div>
                  </div>
                  </form>
              </div>
              
          </div>
          <!--Edit Folder-->
                
          <div v-if="show_edit" class="fixed  flex justify-center bg-gray-200 z-10 h-max w-screen   bg-opacity-50 overflow-y-auto items-center  inset-0">
              <div class="relative rounded-2xl  flex flex-col shadow-2xl bg-white w-82 pb-8 h-min">
                 <form @submit.prevent="confirmation=!confirmation">
                 <div class="flex justify-between rounded-t-2xl px-4 shadow-3xl items-center h-12  bg-gradient-to-r from-blue-150 via-gray-300  to-yellow-150">
                  <h1 class="text-xl text-white">Add Program</h1>
                  <button @click="show_edit=!show_edit" class=" text-white text-lg ">
                    Close
                  </button>
                 </div>
                
                  <div class="flex gap-5 mt-5 justify-center flex-wrap">
                      <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Campus</h1>
                       <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                      <select  id="selected_campus" required class="fill-current   italic text-blue-150 w-74 px-4 rounded-md  h-12 focus:outline-none cursor-pointer ">
                      <option selected disabled value=""> Select a Campus</option>
                      <option value="Main">Main Campus</option>
                      <option value="East">East Campus</option>
                      <option value="Daraga">Daraga Campus</option>
                      <option value="Tabaco">Tabaco Campus</option>
                      <option value="Guinobatan">Guinobatan Campus</option>
                      <option value="Polangui">Polangui Campus</option>
                      <option value="Gubat">Gubat Campus</option>
                      </select>
                       </div>
                      </div>
                     <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">College</h1>
                       <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                      <select  id="selected_college" required class="fill-current italic text-blue-150 w-74 px-4 rounded-sm  h-12 focus:outline-none cursor-pointer">
                      <option selected disabled value="" >Choose a College</option>
                      <option  >College of Science</option>
                      </select>
                      </div>
                      </div>
                     <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Program</h1>
                        <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                      <select  id="selected_program" required class="fill-current italic text-blue-150 w-74 px-4 rounded-sm  h-12 focus:outline-none cursor-pointer">
                      <option selected disabled value="" > Choose a Program</option>
                      <option>Computer Science</option>
                      </select>
                      </div>
                      </div>
                      <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Chairman's firstname</h1>
                      <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                        <input  required id="chairmans_name" placeholder="Enter the chairman’s firstname" type="text"
                          class="italic placeholder-blue-150 text-blue-150 w-74 px-4 rounded-sm  h-12 focus:outline-none cursor-text "/>
                      </div>
                      </div>
                      <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Chairman's lastname</h1>
                      <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                        <input id="chairmans_name" placeholder="Enter the chairman’s lastname" type="text"
                          class="italic placeholder-blue-150 text-blue-150 w-74 px-4 rounded-sm  h-12 focus:outline-none cursor-text "/>
                      </div>
                      </div>
                      <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Chairman's middlename</h1>
                      <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                        <input required id="chairmans_name" placeholder="Enter the chairman’s middlename" type="text"
                          class="italic placeholder-blue-150 text-blue-150 w-74 px-4 rounded-sm  h-12 focus:outline-none cursor-text "/>
                      </div>
                      </div>
                     <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Contact number</h1>
                        <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                        <input  required id="chairmans_number" placeholder="Chairman’s contact number" type="number"
                          class="italic placeholder-blue-150 text-blue-150 w-74 px-4 rounded-sm  h-12 focus:outline-none cursor-text "/>
                        </div>
                        </div>
                      
                      <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Email</h1>
                      <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                      <input id="chairmans_email" placeholder="Chairman’s E-mail Address" type="text" 
                       class="italic placeholder-blue-150 text-blue-150 w-74 px-4 rounded-sm  h-12 focus:outline-none cursor-text "/>
                      </div>
                      </div>
                      <div class="flex flex-col">
                       <h1 class="text-blue-150 text-sm italic">Level</h1>
                       <div class=" bg-gradient-to-b p-0.5 rounded-md from-blue-150 to-yellow-150">
                      <select id="level" required class="fill-current italic text-blue-150 w-74 px-4 rounded-sm  h-12 focus:outline-none cursor-pointer">
                      <option selected disabled value="" >Level of accreditation</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      </select>
                      </div>
                      </div>
                  </div>
                 
                  <div class="flex justify-end pt-5  pr-5">
                  <div class="flex self-right items-center  gap-x-2">
                    <div class="flex overflow-hidden w-32   items-end  h-8 border-b-2 border-blue-250">
                      <h1 class="text-yellow-150">File: </h1>
                       <h1 class="text-blue-150">{{image_name}}</h1>
                    </div>
                   <label for="program_image"><span  class="flex items-center select-none cursor-pointer  justify-center  gap-2 border-2 border-blue-150  w-32 h-8 text-blue-250  "> 
                    <img src="icons/icon_change_cover.svg"/>
                    Add Cover
                  </span>
                   </label>
                  <button type="submit" value="Submit"  @click=" text_modal='update this Program'" class="flex items-center justify-center px-5 gap-2 w-32 h-8 text-white bg-blue-250"> 
                   <span class="material-icons">
                    autorenew
                    </span>
                    Update
                  </button>
                  <input type="file" class="hidden" id="program_image" @change="add_image"/>
                  </div>
                  </div>
                  </form>
              </div>  
          </div>
          <!----->
          <!---Confirmation-->
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
                      <button @click="confirmation=!confirmation,add_program()" class="px-1 rounded-md border-2 border-blue-150  text-white bg-blue-150">Confirm</button>
                      <button @click="confirmation=!confirmation" class="px-1 rounded-md text-blue-150 bg-white border-2 border-blue-150">Cancel</button>
                    </div>
                  </div>
                 </div>
           </div>
            <div v-if="update_confirmation" class="fixed z-30 flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
                 <div class="flex flex-col items-center justify-center gap-y-3 w-96 h-52 bg-white  shadow-3xl rounded-xl">
                 <h1 class="text-blue-150 text-xl">Are you sure to perform this action?</h1>
                  <span class="flex items-center gap-x-3">
                    <button @click="update_confirmation=!update_confirmation,update()"
                     class=" select-none bg-blue-250 rounded-lg text-white w-28 h-10">Confirm</button>
                     <button @click="update_confirmation=!update_confirmation"
                      class="select-none border-2 rounded-lg border-blue-150 text-blue-250  w-28 h-10">Cancel</button>
                  </span>
                 </div>
           </div>
          <!---->
           <div v-if="show_success" class="fixed z-30 flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
                 <div class=" flex flex-col justify-start relative
                  gap-y-3  w-23 h-60 bg-white  shadow-3xl rounded-xl">
                  <div class="bg-green-150 rounded-t-xl h-10 w-full"></div>
                  <div class="flex w-full  gap-x-3 pl-10  mt-3 items-center">
                      <img class="w-16" src="icons/icon_success.svg"/>
                    <div class="flex flex-col">
                      <h1 class="text-xl font-bold text-green-150">Succesful!</h1>
                      <h1 class="text-green-150 ">You have successfully added a program. </h1>
                    </div>
                  </div>
                  <div class="flex justify-end absolute right-10 bottom-10">
                    <div class="flex gap-x-1">
                      <button @click="show_success=!show_success" 
                      class="px-1 rounded-md text-green-150 bg-white border-2 border-green-150">Cancel</button>
                    </div>
                  </div>
                 </div>
           </div>
              <!--Delete--->
           <div v-if="confirmation_deletion" class="fixed z-30 flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
                <div class=" flex flex-col justify-start relative
                  gap-y-3  w-23 h-60 bg-white  shadow-3xl rounded-xl">
                  <div class="bg-red-150 rounded-t-xl h-10 w-full"></div>
                  <div class="flex w-full  gap-x-3 pl-10  mt-3 items-center">
                      <img class="w-16" src="icons/icon_warning_red.svg"/>
                    <div class="flex flex-col">
                      <h1 class="text-xl font-bold text-red-150">Delete Warning</h1>
                      <h1 class="text-red-150 text-lg">You are about to delete this Program.</h1>
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
import api from '../api';
// @ is an alias to /src

export default {
  created:function(){
    this.filtered_program=this.program
  },
  data(){
    return{
      Level:"",
      show_add:false,
      show_edit:false,
      show_success:false,
      confirmation_deletion:false,
      update_show_success:false,
      update_confirmation:false,
      confirmation:false,
      bg_image:'img/img2.png',
      program_image:'img/default_cover_image.jpg',
      id_array:'0',
      index:0,
      imageName:"",
      campuses:[],
      colleges:[],
      programs:[],
      tblprogramDatabase:[],
      filtered_program:[{
        programID: "",
        programName: "",
        collegeName: "",
        campusName: "",
        level:"",
        chairmanName:"",
        contactNumber:"",
        email:"",
        coverImage:"",

       }],
       personalInfo: {
        firstName: "",
        lastName: "",
        roleType: "",
      },
      getLevel:[{
          programLevelID:"",
          programID:"",
          level:"",
          levelStatus:"",
      }],
      
      addLevel:{
          programLevelID:"",
          programID:"",
          level:"",
          levelStatus:"",
      },
      addProgram:{
          programID:"4",
          programName:"",
          collegeName:"",
          campusName:"",
          contactNumber:"",
          lastName:"",
          firstName:"",
          middleName:"",
          email:"",
          roleType:"task force",
          coverImage:"",
      },
      addTaskforce:{
          programID:"",
          taskforceEmail:"",
          roleDescription:"Chairman",
      }

    }
  },
  
   
  

   methods:{

     getCampus(){
        api.get("/api/getCampuses").then((res)=>{
          this.campuses = res.data; 

          console.log("Campuses:", this.campuses);
        });
     },

     getCampusCode(){
       var getCampusCode = document.getElementById("selected_campus").value;
        api.get("/api/getColleges", {params:{campusCode: getCampusCode}}).then((res)=>{
          this.colleges = res.data; 

          console.log("Colleges:", this.colleges);
        });

     },

     getProgramCode(){
       var getCollegeCode = document.getElementById("selected_college").value;
       console.log("CollegeCode:", getCollegeCode);
        api.get("/api/getPrograms", {params:{collegeCode: getCollegeCode}}).then((res)=>{
          this.programs = res.data; 

          console.log("Programs:", this.programs);
        });
     },




     getPersonal(){
        var personal = JSON.parse(localStorage.getItem("Personal"));
                 console.log(personal);
           api.get("/api/getUser", {params:{email:personal.email}}).then((res)=>{
               this.personalInfo = res.data;
         

               console.log(this.personalInfo);
           });
       },

     add_program(){
          
       
            this.addProgram.programName = document.getElementById("selected_program").value;
            this.addProgram.collegeName=document.getElementById("selected_college").value;
            this.addProgram.campusName=document.getElementById("selected_campus").value;
            this.Level= document.getElementById("level").value;
            //this.addProgram.imageFile= this.imageName;
        
        //this.program.push(new_program)
        //this.program_image='img/default_cover_image.jpg'
          api
              .post("api/Program", this.addProgram)
              .then((response) => {
          
              })
              .catch((errors) => {
          this.errors = errors.response;
             });
          api
              .post("api/Member",this.addProgram)
              .then((response) => {
          
              })
              .catch((errors) => {
          this.errors = errors.response;
             });
          
          this.addTaskforce.programID = this.addProgram.programID;
          this.addTaskforce.taskforceEmail = this.addProgram.email;
          api
              .post("api/TaskForce",this.addTaskforce)
              .then((response) => {
          
              })
              .catch((errors) => {
          this.errors = errors.response;
             });

             api.post("api/UserAuthentication", this.addProgram)
             .then((response)=>{

             })
             .catch((errors) => {
               this.erros = errors.response;
             });


            const Levels =["Preliminary Survey Visit", "Level 1", "Level 2", "Level 3", "Level 4"];
            var i= 0;
            for(var i= 0; i<=4;i++){
              if( i < parseInt(this.Level)){
                this.addLevel.programLevelID= i;
                this.addLevel.programID = this.addProgram.programID;
                this.addLevel.level = Levels[i];
                this.addLevel.levelStatus = "passed";
              }
              else if(i == parseInt(this.Level)){
                this.addLevel.programLevelID= i;
                this.addLevel.programID = this.addProgram.programID;
                this.addLevel.level = Levels[i];
                this.addLevel.levelStatus = "unlocked";
              }
              else if(i > parseInt(this.Level)){
                this.addLevel.programLevelID= i;
                this.addLevel.programID = this.addProgram.programID;
                this.addLevel.level = Levels[i];
                this.addLevel.levelStatus = "locked";
              }
              api
                .post("api/ProgramLevel",this.addLevel)
                .then((response) => {
            
                })
                .catch((errors) => {
            this.errors = errors.response;
              });

            }
          

      },

       retrieve(){

          // const getProgram = api.get('api/getProgram');
          // const getTaskForceChairman = api.get('api/getTaskForceChairman');
          // const getLevelUnlocked = api.get('api/getLevelUnlocked');
          
          // api.all([getProgram, getTaskForceChairman, getLevelUnlocked])
          //     .then(
          // api 
          //     .spread((...responses) => {
          //           this.filtered_program = responses[0];
          //           this.getLevel = responses[2];

          //           console.log(this.filtered_program);
          //           consile.log(this .getLevel);

          // })).catch(errors=>{
          //     this.errors = errors.response;
          // });


          api
              .get("api/getProgram")
              .then (response => {

                this.filtered_program = response.data;
             
                console.log("Program",this.filtered_program );
              });
          api
              .get("api/getTaskForceChairman")
              .then (response => {

              
             
                console.log("Taskforce",response.data);
              });
          api
              .get("api/getLevelUnlocked")
              .then(response=>{

                this.getLevel= response.data;

                console.log("Level",this.getLevel);
                
              });

          

              
      },
    

      level(){
        let arrFiltered_program=[];
        let arrGetLevel=[];
        
        this.filtered_program.forEach((value,index) => {
          arrFiltered_program.push(value);
        });
        this.getLevel.forEach((value,index)=>{
          
          arrGetLevel.push(value);
        });
        console.log("lvl",arrFiltered_program);
        if (arrFiltered_program.programID == arrGetLevel.programID){

        }
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
    },
     created(){
        this.retrieve();
        this.getPersonal();
        this.getCampus();
      }
}



</script>
