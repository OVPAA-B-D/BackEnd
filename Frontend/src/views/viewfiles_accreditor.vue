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
      <h1  class="uppercase text-white text-lg font-bold">Brody Corpuz</h1>
      <h1 class="text-sm text-white">(External Accreditor)</h1>
      </div>
 <div class=" text-white gap-y-3 pt-24 flex flex-col flex-grow ">
        
          <div class=" flex cursor-pointer w-91 items-center gap-4 bg-yellow-150 space-x-1 shadow-3xl pl-4 py-3 " > 
             <i class="fas fa-network-wired"></i>
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
    <div class="flex flex-col flex-nowrap  w-full">
      <div class="w-full relative shadow-lg -z-1 bg-gradient-to-r from-white to-blue-150  pl-4 pt-7">
        <div class="flex items-center justify-between pr-5">
        <h1 class="text-2xl text-blue-150 font-normal">Accreditation Management/<a class="font-bold">Level 1 Accreditation</a></h1>
 
        </div>
      <div class="mt-10 pb-4 cursor-wait">
        <h1 class="text-yellow-150 text-4xl">Information Technology </h1>
        <h3 class="text-blue-150 text-2xl">Chairman In Charge</h3>
        <span class="flex justify-start text-xs text-yellow-150 items-center gap-x-1">
            <img src="/icons/icon16_man.svg"><h1>Johann Abad</h1>
        </span>
        <span class="flex justify-start text-xs text-yellow-150 items-center gap-x-1">
            <img src="/icons/icon17_contact.svg"><h1>0902105050</h1>
        </span>
         <span class="flex justify-start text-xs text-yellow-150 items-center gap-x-1">
            <img src="/icons/icon18_inbox.svg"><h1>johannAbad@gmail.com</h1>
        </span>

       


      </div>

                         
       
      </div>
      <div class="  flex-col h-full pt-3 px-4  space-y-3">
       
          <div class="flex flex-row h-99   w-fullrounded-xl  p-1 ">
            <div class="bg-gradient-to-b from-blue-150 to-yellow-150 rounded-l-xl gap-y-2 flex flex-col justify-items-start  w-full p-0.6 h-full">
               <div class="bg-white  h-full overflow-auto  flex flex-grow  flex-wrap rounded-l-xl pl-4">
                   
              

                               
                               
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


