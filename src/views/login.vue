<template>
   <nav class=" py-4 shadow-lg  bg-white fixed w-full">
    <div class="w-80">
    <img class="w-full  h-full" src="BUlogo.png">
    </div>
  </nav>
  <div class="flex justify-center  py-20 items-center h-screen flex-grow bg-gradient-to-bl from-blue-150 to-gray-150  focus:from-blue-150 focus:to-blue-150  "  >
    <div class="flex justify-evenly items-center flex-col h-99 w-auto px-20  mt-20 rounded-xl bg-white
       md:h-85 md:px-10
     ">
      <div class="flex flex-col justify-center items-center">
      <h1 class="font-semibold  text-blue-150 text-2xl">Bicol University</h1>
      <h1 class="font-semibold text-yellow-150 text-2xl">Online Accreditation System</h1>  
      </div>
       <div class="flex flex-col justify-center items-center">
      <h1 class="font-bold  text-blue-150   text-4xl">Welcome!</h1>
      <h1 class="font-semibold text-blue-150 text-xl">Please log in to your account</h1>  
      </div>
      <div class="flex flex-col space-y-3">
        <div>
           <h1 class="text-lg text-blue-150">Email</h1>
      <div class="flex items-center shadow-3xl px-2 w-80 border-2 border-blue-150 rounded-lg">
        <span class="material-icons text-blue-150">
          email
          </span>
        <input placeholder="Place enter your Email" type="email" class=" shadow-lg
         placeholder-blue-150 h-10 px-3 italic text-sm w-full rounded-lg focus:outline-none"/> 
      </div>
        </div>
        <div>
          <h1 class="text-lg text-blue-150">Password</h1>
      <div class="flex items-center px-2 shadow-3xl w-80 border-2 border-blue-150 rounded-lg">
        <span class="material-icons text-blue-150">
          vpn_key
          </span>
        <input placeholder="Place enter your Email" :type="type_pass" class=" shadow-lg
         placeholder-blue-150 h-10 px-3 italic text-sm w-full rounded-lg focus:outline-none"/> 
         <img @click="visible()" :src='icon6' class="cursor-pointer fill-current text-blue-150"/>
      </div>
        </div>
       
      </div>
      <router-link to="/dashboard">
      <button class=" flex justify-center font-semibold  space-x-2 py-5 rounded-lg items-center h-8 w-32 text-white bg-gradient-to-r from-indigo-700 to-blue-150">
       <h1> Login</h1>
        <span class="material-icons">
        logout
        </span>
      </button>
      </router-link>
      <div class=" flex flex-col justify-center items-center text-sm text-yellow-150">
        <h1>Forgot password and doesn’t have an account?</h1>
        <h1>Please contact the admin</h1>
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
     n:0,
     type_pass:'password',
     icon6:'/icons/icon6_eye_close.svg',
    }
  },
  methods:{
    visible(){
      if(this.n==0){
        this.n=1
        this.icon6='/icons/icon7_eye_open.svg'
        this.type_pass="text"
      }
      else{
        this.n=0
        this.icon6='/icons/icon6_eye_close.svg'
        this.type_pass="password"
      }
    }    
  } 
}
</script>
