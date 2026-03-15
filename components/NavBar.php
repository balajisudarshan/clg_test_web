<nav class="bg-blue-900 shadow-lg">
  <div class="max-w-7xl mx-auto px-6">

    <div class="flex items-center justify-center h-16">


      <div class="hidden md:flex items-center gap-10 text-white font-medium">

        <a href="#" class="relative group">
          Home
          <span class="absolute left-0 bottom-[-4px] w-0 h-[2px] bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
        </a>

        <a href="#" class="relative group">
          About
          <span class="absolute left-0 bottom-[-4px] w-0 h-[2px] bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
        </a>

        <a href="#" class="relative group">
          Admissions
          <span class="absolute left-0 bottom-[-4px] w-0 h-[2px] bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
        </a>

        <a href="#" class="relative group">
          Academics
          <span class="absolute left-0 bottom-[-4px] w-0 h-[2px] bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
        </a>

        <a href="#" class="relative group">
          Departments
          <span class="absolute left-0 bottom-[-4px] w-0 h-[2px] bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
        </a>

        <a href="#" class="relative group">
          Placements
          <span class="absolute left-0 bottom-[-4px] w-0 h-[2px] bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
        </a>

        <a href="#" class="relative group">
          Sports
          <span class="absolute left-0 bottom-[-4px] w-0 h-[2px] bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
        </a>

        <a href="#" class="relative group">
          Contact
          <span class="absolute left-0 bottom-[-4px] w-0 h-[2px] bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
        </a>

      </div>

      <button id="menuBtn" class="md:hidden text-white">
        <svg id="openIcon" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        <svg id="closeIcon" class="w-7 h-7 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>

    </div>

  </div>

  <div id="mobileMenu" class="hidden md:hidden bg-blue-950 border-t border-blue-800">

    <div class="flex flex-col text-white text-lg font-medium px-6 py-4 gap-4">

      <a href="#" class="hover:text-blue-400">Home</a>
      <a href="#" class="hover:text-blue-400">About</a>
      <a href="#" class="hover:text-blue-400">Admissions</a>
      <a href="#" class="hover:text-blue-400">Academics</a>
      <a href="#" class="hover:text-blue-400">Departments</a>
      <a href="#" class="hover:text-blue-400">Placements</a>
      <a href="#" class="hover:text-blue-400">Sports</a>
      <a href="#" class="hover:text-blue-400">Contact</a>

    </div>

  </div>

</nav>

<script>
const menuBtn = document.getElementById("menuBtn")
const mobileMenu = document.getElementById("mobileMenu")
const openIcon = document.getElementById("openIcon")
const closeIcon = document.getElementById("closeIcon")

menuBtn.addEventListener("click", () => {
mobileMenu.classList.toggle("hidden")
openIcon.classList.toggle("hidden")
closeIcon.classList.toggle("hidden")
})
</script>