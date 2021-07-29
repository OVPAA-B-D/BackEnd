<template>
  <nav class="py-4 shadow-lg bg-white fixed w-full" style="z-index: 1">
    <div class="w-80">
      <img class="w-full h-full" src="BUlogo.png" />
    </div>
  </nav>

  <div class="flex font-roboto pt-16 min-h-screen">
    <div
      class="w-22 static flex flex-col items-center py-5 space-y-2 bg-blue-150"
    >
      <div
        class="
          w-24
          flex
          items-center
          border-4 border-white
          justify-center
          bg-yellow-150
          cursor-pointer
          mt-10
          h-24
          rounded-full
        "
      >
        <span class="material-icons cursor-poi text-white text-4xl">
          add_photo_alternate
        </span>
      </div>
      <div class="flex flex-col items-center">
        <h1 class="uppercase text-white text-lg font-bold">Brody Corpuz</h1>
        <h1 class="text-sm text-white">(External Accreditor)</h1>
      </div>
      <div class="text-white gap-y-3 pt-24 flex flex-col flex-grow">
        <div
          class="
            flex
            cursor-pointer
            w-91
            items-center
            gap-4
            bg-yellow-150
            space-x-1
            shadow-3xl
            pl-4
            py-3
          "
        >
          <i class="fas fa-network-wired"></i>
          Accreditation Management
        </div>
      </div>

      <div class="relative w-full flex-grow">
        <router-link to="/">
          <div
            class="
              w-2/3
              absolute
              bottom-8
              drop-shadow-2xl
              text-white
              flex
              items-center
              space-x-2
              pl-4
              float-left
              bg-yellow-150
              self-start
              rounded-r-full
              py-3
              text-center
            "
          >
            <span class="material-icons transform rotate-180"> logout </span>
            <h1 class="cursor-pointer uppercase">Log out</h1>
          </div>
        </router-link>
      </div>
    </div>
    <div class="flex flex-col flex-nowrap w-full">
      <div
        class="
          w-full
          relative
          shadow-lg
          -z-1
          bg-gradient-to-r
          from-white
          to-blue-150
          pl-4
          pt-7
        "
      >
        <div class="flex items-center justify-between pr-5">
          <h1 class="text-2xl text-blue-150 font-normal">
            Accreditation Management/<a class="font-bold"
              >Level 1 Accreditation</a
            >
          </h1>
        </div>
        <div class="mt-10 pb-4 cursor-wait">
          <h1 class="text-yellow-150 text-4xl">Information Technology</h1>
          <h3 class="text-blue-150 text-2xl">Chairman In Charge</h3>
            <!-- </span> -->
        <span class="flex justify-start text-xs text-yellow-150 items-center gap-x-1">
            <img src="/icons/icon17_contact.svg"><h1>0902105050</h1>
        </span>
         <span class="flex justify-start text-xs text-yellow-150 items-center gap-x-1">
            <img src="/icons/icon18_inbox.svg"><h1>johannAbad@gmail.com</h1>
        </span>
        </div>
        <div
          class="
            items-center
            cursor-pointer
            absolute
            bottom-0
            h-17
            flex
            justify-evenly
            rounded-t-full
            right-10
            bg-white
            w-37
          "
        >
          <img class="w-7.5 h-7.5" src="/icons/icon2.svg" />
          <img class="w-7.5 h-7.5" src="/icons/icon3.svg" />
        </div>
      </div>
      <div class="flex-col h-full pt-10 px-4 space-y-3">
        <div class="flex justify-between items-center">
          <div class="flex space-x-2"></div>
          <div
            class="
              space-x-2
              font-normal
              text-xl
              flex
              justify-center
              items-center
              p-0.5
              pr-2
              text-white
              bg-blue-150
            "
          >
            <input
              type="text"
              placeholder="Search"
              class="
                placeholder-blue-150
                pl-3
                text-sm text-gray-150
                h-8
                focus:outline-none
              "
            />
            <span class="material-icons cursor-pointer"> search </span>
          </div>
        </div>
        <div class="flex flex-row h-99 rounded-xl p-1">
          <div
            class="
              bg-gradient-to-b
              from-blue-150
              to-yellow-150
              rounded-l-xl
              gap-y-2
              flex flex-col
              justify-items-start
              w-2/3
              py-0.6
              pl-0.6
              h-full
            "
          >
            <div
              class="
                bg-white
                h-full
                overflow-auto
                w-full
                flex flex-wrap
                rounded-l-xl
                pl-4
              "
            >
              <div class="w-full">
                <div
                  class="
                    flex
                    py-3
                    sticky
                    top-1
                    w-full
                    bg-white
                    space-x-2
                    items-center
                  "
                  style="z-index: 0"
                >
                  <div class="cursor-pointer w-4-h-4">
                    <img src="/icons/icon1.svg" />
                  </div>
                  <div
                    class="
                      flex
                      sticky
                      top-0
                      bg-white
                      justify-start
                      text-blue-150 text-lg
                      cursor-pointer
                    "
                  >
                    <a class="hover:underline">Infomation Technology > </a>
                    <a class="font-bold">Level 1> </a>
                    <router-link to="/home_accreditor"
                      ><a class="font-bold hover:underline"
                        >Area 1</a
                      ></router-link
                    >
                  </div>
                </div>
                <div class="items-start w-full flex-col flex flex-wrap pl-7">
                  <div
                    v-for="parameterx in Parameter"
                    :key="parameterx.id"
                    class="w-full"
                  >
                    <div class="flex items-end space-x-3">
                      <h1 class="text-2xl text-blue-150 font-bold">
                        Parameter {{ parameterx.parameter_name }}
                      </h1>
                    </div>
                    <div
                      v-for="benchx in parameterx.benchmarks"
                      :key="benchx.benchmark_name"
                    >
                      <div
                        class="
                          pl-4
                          w-full
                          flex
                          gap-2
                          flex-row
                          justify-between
                          items-center
                        "
                      >
                        <h1 class="text-xl text-yellow-150">
                          Benchmark {{ benchx.benchmark_name }}
                        </h1>
                        <div class="flex space-x-3 mb-0.5">
                          <div></div>
                          
                             <router-link to="/viewfiles_accreditor">
                          <button
                            class="
                              text-white
                              flex
                              items-center
                              gap-x-2
                              rounded-sm
                              py-1
                              px-2
                              bg-blue-150
                              cursor-pointer
                            "
                          >
                            <img src="/icons/icon10.svg" class="w-15 h-6" />
                            open file
                          </button> 
                          </router-link>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="flex w-1/3 h-full rounded-xl bg-white">
            <div
              class="
                h-full
                flex
                p-1
                rounded-xl
                flex-grow
                bg-gradient-to-b
                from-blue-150
                to-yellow-150
              "
            >
              <div
                class="
                  overflow-auto
                  pb-3
                  flex flex-col flex-grow
                  rounded-2xl
                  w-full
                  bg-gray-100
                  h-full
                "
              >
                <div
                  class="
                    px-4
                    pt-2
                    sticky
                    top-0
                    flex
                    bg-gray-100
                    justify-between
                  "
                >
                  <div
                    @click="isActive_function('btn1')"
                    :class="{ active: activeBtn === 0 }"
                    class="
                      select-none
                      cursor-pointer
                      flex
                      w-36
                      bg-gradient-to-r
                      from-blue-150
                      to-yellow-150
                    "
                  >
                    <div
                      @click="change_component('details')"
                      class="bg-gray-100 flex justify-center w-full h-full"
                    >
                      <h1
                        class="text-xl text-blue-150 font-bold cursor-pointer"
                      >
                        Details
                      </h1>
                    </div>
                  </div>
                  <div
                    @click="isActive_function('btn2')"
                    :class="{ active: activeBtn === 'btn2' }"
                    class="
                      flex
                      select-none
                      cursor-pointer
                      w-36
                      bg-gradient-to-r
                      from-blue-150
                      to-yellow-150
                    "
                  >
                    <div
                      @click="change_component('comments')"
                      class="bg-gray-100 flex w-full h-full justify-center"
                    >
                      <h1 class="text-xl text-blue-150 font-bold">Comments</h1>
                    </div>
                  </div>
                </div>
                <div class="flex-col items-center rounded-xl flex h-full m-5">
                  <component :is="component" />
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
.active {
  padding-bottom: 3px;
}
</style>
<script>
// @ is an alias to /src
import Details from "./details.vue";
import Comments from "./comments.vue";
export default {
  components: {
    Details,
    Comments,
  },
  data() {
    return {
      component: "Details",

      activeBtn: 0,
      Accreditor: [
        {
          id: 1,
          accreditor_name: "Padre D Amaso",
          role: "External",
        },
        {
          id: 2,
          accreditor_name: "Juan Dela Cruz",
          role: "Internal",
        },
        {
          id: 3,
          accreditor_name: "Joan D First",
          role: "Internal",
        },
        {
          id: 3,
          accreditor_name: "Joan D First",
          role: "Internal",
        },
        {
          id: 3,
          accreditor_name: "Joan D First",
          role: "Internal",
        },
        {
          id: 3,
          accreditor_name: "Joan D First",
          role: "s",
        },
        {
          id: 3,
          accreditor_name: "Joan D First",
          role: "s",
        },
        {
          id: 3,
          accreditor_name: "Joan D First",
          role: "s",
        },
      ],
      Parameter: [
        {
          id: 1,
          parameter_name: "A",
          status: "Completed",
          benchmarks: [
            { benchmark_name: "A1" },
            { benchmark_name: "A2" },
            { benchmark_name: "A3" },
          ],
        },
        {
          id: 2,
          parameter_name: "B",
          status: "Incomplete",
          benchmarks: [
            { benchmark_name: "B1" },
            { benchmark_name: "B2" },
            { benchmark_name: "B3" },
          ],
        },
        {
          id: 3,
          parameter_name: "C",
          status: "No file found",
          benchmarks: [
            { benchmark_name: "C1" },
            { benchmark_name: "C2" },
            { benchmark_name: "C3" },
          ],
        },
        {
          id: 4,
          parameter_name: "D",
          status: "Completed",
          benchmarks: [
            { benchmark_name: "D1" },
            { benchmark_name: "D2" },
            { benchmark_name: "D3" },
          ],
        },
      ],
    };
  },
  methods: {
    change_component(e) {
      if (e == "details") {
        this.component = "Details";
      } else {
        this.component = "Comments";
      }
    },
    isActive_function(el) {
      if (el == "btn1") {
        this.activeBtn = 0;
      } else {
        this.activeBtn = el;
      }
    },
  },
};
</script>
