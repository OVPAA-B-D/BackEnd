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
                    <router-link to="/home_admin"> <a class="hover:underline cursor-pointer">Infomation Technology</a></router-link>>
                    <router-link to="/program_level"><a class=" hover:underline">Level 1</a></router-link>>
                    <a class="font-bold cursor-default">Area 1</a>
                    </div>
                 </div>
                <div class=" items-start w-full flex-col flex flex-wrap pl-7">
                   <div  class="w-full">
                     <div class="flex flex-shrink items-center p-2 justify-between">
                       <span class="flex items-baseline gap-x-3">
                        <h1 id="parameterLabel" class=" text-2xl text-blue-150 font-bold">Parameter A</h1>
                        <input type="text" class="focus:outline-none border-2 border-black text-blue-150 pl-3 hidden" id="parameterName" value="Parameter name"/>
                        <img  @click="show_input('parameterLabel','parameterName')" src="/icons/icon19_rename_orange.svg" class="cursor-pointer"/>
                        <img @click="confirmation_deletion=!confirmation_deletion" src="/icons/icon11_delete_red.svg" class="cursor-pointer" />
                        <h1  class="text-green-150">Completed</h1>
                      </span>
                      <button @click="show_add_benchmark=!show_add_benchmark" class="border-2 flex  px-2   items-center mr-4 border-blue-150 "> 
                        <img src="icons/icon12_add_blue.svg" class="w-4 "/>
                        <h1 class="text-blue-150">Add Bechmark</h1></button>
                    </div>
                    <div class="mr-4">
                        <div class=" pl-4 w-full flex gap-2 flex-row justify-between items-center ">
                          <span class="flex items-baseline">
                            <h1 id="bench1" class="text-xl text-yellow-150">Benchmark A1</h1>
                            <input type="text" class="focus:outline-none border-2 border-black text-yellow-150 pl-3 hidden"
                             id="bench1_input" value="Benchmark A1"/>
                            <img  src="/icons/icon19yellow.svg" class="cursor-pointer" @click="show_input('bench1','bench1_input')"/>
                          </span>
                            <div class="  flex space-x-3 mb-0.5">
                              <button class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-blue-150 ">
                              <img src="/icons/icon10_open_file.svg" class="w-5 h-5"/>
                                open file</button>
                             <button @click="show_add_edit_row=!show_add_edit_row" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-green-150 ">
                              <img src="/icons/icon9_move_row.svg" class="w-5 h-5"/>
                                move row</button>
                             <button @click="confirmation_deletion=!confirmation_deletion" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-red-150 ">
                              <img src="/icons/icon11_delete.svg" class="w-5 h-5"/>
                                delete file</button>
                            </div>
                        </div>
                    </div>
                    <div class="mr-4">
                        <div class=" pl-4 w-full flex gap-2 flex-row justify-between items-center ">
                          <span class="flex items-baseline">
                            <h1 class="text-xl text-yellow-150">Benchmark A2</h1>
                            <img src="/icons/icon19yellow.svg"/>
                          </span>
                            <div class="  flex space-x-3 mb-0.5">
                              <button class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-blue-150 ">
                              <img src="/icons/icon10_open_file.svg" class="w-5 h-5"/>
                                open file</button>
                             <button @click="show_add_edit_row=!show_add_edit_row" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-green-150 ">
                              <img src="/icons/icon9_move_row.svg" class="w-5 h-5"/>
                                move row</button>
                              <button @click="confirmation_deletion=!confirmation_deletion" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-red-150 ">
                              <img src="/icons/icon11_delete.svg" class="w-5 h-5"/>
                                delete file</button>
                            </div>
                        </div>
                    </div>
                    <div class="mr-4">
                        <div class=" pl-4 w-full flex gap-2 flex-row justify-between items-center ">
                          <span class="flex items-baseline">
                            <h1 class="text-xl text-yellow-150">Benchmark A3</h1>
                            <img src="/icons/icon19yellow.svg"/>
                          </span>
                            <div class="  flex space-x-3 mb-0.5">
                              <button class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-blue-150 ">
                              <img src="/icons/icon10_open_file.svg" class="w-5 h-5"/>
                                open file</button>
                             <button @click="show_add_edit_row=!show_add_edit_row" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-green-150 ">
                              <img src="/icons/icon9_move_row.svg" class="w-5 h-5"/>
                                move row</button>
                              <button @click="confirmation_deletion=!confirmation_deletion" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-red-150 ">
                              <img src="/icons/icon11_delete.svg" class="w-5 h-5"/>
                                delete file</button>
                            </div>
                        </div>
                    </div>
                    

                   </div>
                </div>
                 <div class=" items-start w-full flex-col flex flex-wrap pl-7">
                   <div  class="w-full ">
                     <div class="flex items-center p-2 justify-between">
                       <span class="flex items-baseline gap-x-3">
                        <h1 class=" text-2xl text-blue-150 font-bold">Parameter B</h1>
                        <img src="/icons/icon19_rename_orange.svg"/>
                        <img src="/icons/icon11_delete_red.svg" />
                        <h1  class="text-green-250">Incomplete</h1>
                      </span>
                     <button @click="show_add_benchmark=!show_add_benchmark" class="border-2 flex  px-2   items-center mr-4 border-blue-150 "> 
                        <img src="icons/icon12_add_blue.svg" class="w-4"/>
                        <h1 class="text-blue-150">Add Bechmark</h1></button>
                    </div>
                    <div class="mr-4">
                        <div class=" pl-4 w-full flex gap-2 flex-row justify-between items-center ">
                          <span class="flex items-baseline">
                            <h1 class="text-xl text-yellow-150">Benchmark B1</h1>
                            <img src="/icons/icon19yellow.svg"/>
                          </span>
                            <div class="  flex space-x-3 mb-0.5">
                              <button class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-blue-150 ">
                              <img src="/icons/icon10_open_file.svg" class="w-5 h-5"/>
                                open file</button>
                             <button @click="show_add_edit_row=!show_add_edit_row" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-green-150 ">
                              <img src="/icons/icon9_move_row.svg" class="w-5 h-5"/>
                                move row</button>
                              <button @click="confirmation_deletion=!confirmation_deletion" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-red-150 ">
                              <img src="/icons/icon11_delete.svg" class="w-5 h-5"/>
                                delete file</button>
                            </div>
                        </div>
                    </div>
                    <div class="mr-4">
                        <div class=" pl-4 w-full flex gap-2 flex-row justify-between items-center ">
                          <span class="flex items-baseline">
                            <h1 class="text-xl text-yellow-150">Benchmark B2</h1>
                            <img src="/icons/icon19yellow.svg"/>
                          </span>
                            <div class="  flex space-x-3 mb-0.5">
                              <button class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-gray-150 ">
                              <img src="/icons/icon_empty_folder.svg" class="w-5 h-5"/>
                                open file</button>
                             <button @click="show_add_edit_row=!show_add_edit_row" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-green-150 ">
                              <img src="/icons/icon9_move_row.svg" class="w-5 h-5"/>
                                move row</button>
                              <button @click="confirmation_deletion=!confirmation_deletion" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-red-150 ">
                              <img src="/icons/icon11_delete.svg" class="w-5 h-5"/>
                                delete file</button>
                            </div>
                        </div>
                    </div>
                    <div class="mr-4">
                        <div class=" pl-4 w-full flex gap-2 flex-row justify-between items-center ">
                          <span class="flex items-baseline">
                            <h1 class="text-xl text-yellow-150">Benchmark B3</h1>
                            <img src="/icons/icon19yellow.svg"/>
                          </span>
                            <div class="  flex space-x-3 mb-0.5">
                              <button class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-gray-150 ">
                              <img src="/icons/icon_empty_folder.svg" class="w-5 h-5"/>
                                open file</button>
                             <button @click="show_add_edit_row=!show_add_edit_row" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-green-150 ">
                              <img src="/icons/icon9_move_row.svg" class="w-5 h-5"/>
                                move row</button>
                              <button @click="confirmation_deletion=!confirmation_deletion" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-red-150 ">
                              <img src="/icons/icon11_delete.svg" class="w-5 h-5"/>
                                delete file</button>
                            </div>
                        </div>
                    </div>
                   </div>
                </div>
                 <div class=" items-start w-full flex-col flex flex-wrap pl-7">
                   <div  class="w-full">
                   <div class="flex items-center p-2 justify-between">
                       <span class="flex items-baseline gap-x-3">
                        <h1 class=" text-2xl text-blue-150 font-bold">Parameter C</h1>
                        <img src="/icons/icon19_rename_orange.svg"/>
                         <img src="/icons/icon11_delete_red.svg" />
                        <h1  class="text-red-150">No File Found</h1>
                      </span>
                      <button @click="show_add_benchmark=!show_add_benchmark" class="border-2 flex  px-2   items-center mr-4 border-blue-150 "> 
                        <img src="icons/icon12_add_blue.svg" class="w-4"/>
                        <h1 class="text-blue-150">Add Bechmark</h1></button>
                    </div>
                    <div class="mr-4">
                        <div class=" pl-4 w-full flex gap-2 flex-row justify-between items-center ">
                          <span class="flex items-baseline">
                            <h1 class="text-xl text-yellow-150">Benchmark C1</h1>
                            <img src="/icons/icon19yellow.svg"/>
                          </span>
                            <div class="  flex space-x-3 mb-0.5">
                              <button class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-gray-150 ">
                              <img src="/icons/icon_empty_folder.svg" class="w-5 h-5"/>
                                open file</button>
                             <button @click="show_add_edit_row=!show_add_edit_row" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-green-150 ">
                              <img src="/icons/icon9_move_row.svg" class="w-5 h-5"/>
                                move row</button>
                              <button @click="confirmation_deletion=!confirmation_deletion" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-red-150 ">
                              <img src="/icons/icon11_delete.svg" class="w-5 h-5"/>
                                delete file</button>
                            </div>
                        </div>
                    </div>
                    <div class="mr-4">
                        <div class=" pl-4 w-full flex gap-2 flex-row justify-between items-center ">
                          <span class="flex items-baseline">
                            <h1 class="text-xl text-yellow-150">Benchmark C2</h1>
                            <img src="/icons/icon19yellow.svg"/>
                          </span>
                            <div class="  flex space-x-3 mb-0.5">
                              <button class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-gray-150 ">
                              <img src="/icons/icon_empty_folder.svg" class="w-5 h-5"/>
                                open file</button>
                             <button @click="show_add_edit_row=!show_add_edit_row" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-green-150 ">
                              <img src="/icons/icon9_move_row.svg" class="w-5 h-5"/>
                                move row</button>
                              <button @click="confirmation_deletion=!confirmation_deletion" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-red-150 ">
                              <img src="/icons/icon11_delete.svg" class="w-5 h-5"/>
                                delete file</button>
                            </div>
                        </div>
                    </div>
                    <div class="mr-4">
                        <div class=" pl-4 w-full flex gap-2 flex-row justify-between items-center ">
                          <span class="flex items-baseline">
                            <h1 class="text-xl text-yellow-150">Benchmark C3</h1>
                            <img src="/icons/icon19yellow.svg"/>
                          </span>
                            <div class="  flex space-x-3 mb-0.5">
                              <button class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-gray-150 ">
                              <img src="/icons/icon_empty_folder.svg" class="w-5 h-5"/>
                                open file</button>
                             <button @click="show_add_edit_row=!show_add_edit_row" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-green-150 ">
                              <img src="/icons/icon9_move_row.svg" class="w-5 h-5"/>
                                move row</button>
                              <button @click="confirmation_deletion=!confirmation_deletion" class="text-white flex items-center gap-x-2 rounded-sm py-1 px-2 bg-red-150 ">
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
                        <h1 class="text-blue-150 ">Label</h1>
                      <input placeholder="Description of  new benchmark" type="text" class="placeholder-blue-150 border-2 w-full border-blue-150 focus:outline-none text-blue-150 px-2 h-12">
                         
                      </div>
                    </div>
                    <div class="w-full flex justify-end">
                    <button @click="confirmation=!confirmation" class="text-white w-20 py-2 flex space-x-1 rounded-lg  justify-center items-center  bg-blue-150 px-4 text-sm">
                      <img src="/icons/icon12_add.svg" class="w-4 h-4"/>
                      <h1>Add</h1>
                      </button>
                    </div>
             </div>
          
            
          </div>

          <!---->
          <!--Edit Row-->
             <div v-if=" show_add_edit_row" class="fixed z-10  flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
             <div class="drag w-97 h-72 flex flex-col relative bg-white p-5 gap-y-3 shadow-3xl rounded-3xl">
                    <div class=" flex justify-between items-center">
                          <h1 class="font-bold text-lg text-yellow-150">Edit Row</h1>
                            <button @click="show_add_edit_row=!show_add_edit_row" class="text-red-150 text-lg">
                                CLOSE 
                            </button>
                    </div>
                    <h1 class="text-blue-250 font-bold text-lg">Parameter name</h1>
                    <div class="flex flex-col gap-y-3 justify-start items-center">
                    <div class="flex h-full overflow-auto w-full items-center gap-x-2">                           
                       <draggable 
                          v-model="myArray" 
                          group="people" 
                          @start="drag=true" 
                          @end="drag=false" 
                          item-key="id" class=" w-full flex flex-col justify-center gap-y-1">
                          <template #item="{element}" class="">
                          <div class="flex cursor-move text-yellow-150 border-b-2 border-yellow-150 justify-center items-center text-lg h-10 w-ful ">
                            <h1>{{element.name}}</h1>
                            </div>
                          </template>
                          </draggable>
                    </div>                       
                    </div>
                   
             </div>
          </div>
          <!---->
          <!----confirmation-->
           <div v-if="confirmation" class="fixed z-30 flex justify-center bg-gray-200  w-screen   bg-opacity-50  items-center  inset-0">
                 <div class="flex flex-col items-center text-center justify-center gap-y-3 w-96 h-52 bg-white  shadow-3xl rounded-xl">
                 <h1 class="text-blue-150 text-xl">Are you sure you want to perform this action?</h1>
                  <span class="flex items-center gap-x-3">
                    <button @click="confirmation=!confirmation" class=" select-none bg-blue-250 rounded-lg text-white w-28 h-10">Confirm</button>
                    <button @click="confirmation=!confirmation" class="select-none border-2 rounded-lg border-blue-150 text-blue-250  w-28 h-10">Cancel</button>
                  </span>
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
        myArray:[
          {name:'Benchmark 1',id:0},
          {name:'Benchmark 2',id:1},
          {name:'Benchmark 3',id:2},
          
        ],
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
