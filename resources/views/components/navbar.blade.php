<!-- resources/views/components/navbar/navbar.blade.php -->
<nav class="sticky top-0 bg-gray-900 py-1">
    <div class="max-w-full mx-auto pr-2 lg:pr-8 md:pr-6">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-12 w-12 ml-6"  style="margin-top: -4px"
                        src="https://res.cloudinary.com/dnnhnqiym/image/upload/v1695073721/Logo_500x500_px_1_anm35t.png"
                        alt="Workflow logo">
                </div>
                <div class="hidden md:block" style="margin-left: -12px" >
                    <div class="ml-10 flex items-baseline">
                        <a href=""
                            class="px-3 py-2 rounded-md text-md font-medium text-gray-300 bg-teal-800 focus:outline-none focus:text-white focus:bg-gray-700">
                            CO-LANCE
                        </a>
                        <a href="{{route('wallets.index')}}"
                            class="px-3 py-2 rounded-md text-md font-medium text-gray-300 bg-teal-800 focus:outline-none focus:text-white focus:bg-gray-700">
                            Wallet
                        </a>
                        <a href=""
                            class="ml-4 px-3 py-2 rounded-md text-md font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">
                            Offers
                        </a>
                        <a href=""
                            class="ml-4 px-3 py-2 rounded-md text-md font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">
                            About
                        </a>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                <div>
    <button class="h-6 w-6">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="white">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
        </svg>
       <!--  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd" />
        </svg> -->
    </button>
</div>
                    <button
                        class="p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-gray-700"
                        aria-label="Notifications">
                        <svg
                class="h-6 w-6"
                stroke="currentColor"
                fill="none"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                ></path>
              </svg>
                    </button>
                    <a href="{{ url('/auth') }}">
                        <button
                            class="bg-transparent hover:bg-teal-800 text-teal-700 font-semibold hover:text-white py-2 px-4 border border-teal-500 hover:border-transparent rounded">
                            Login
                        </button>
                    </a>
                    <!-- Profile dropdown -->
                    <div class="ml-3 relative" x-data="{ open: false }">
                        <div>
                            <
                        </div>
                        <!-- Dropdown menu -->
                        <div x-show="open" @click.away="open = false"
                            class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                            <div class="py-1" role="none">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem">Your Profile</a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem">Settings</a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem">Sign out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button id="mobile-menu-button"
                    class="inline-flex mr-3 items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white">
                    <svg id="mobile-menu-icon" class="h-8 w-8" stroke="currentColor" fill="none" viewBox="0 0 24 24" x-show="!open">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
</svg>
<svg id="close-menu-icon" class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24" x-show="open">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
</svg>
                </button>
            </div>
        </div>
    </div>
    <div id="mobile-menu" class="hidden md:hidden">
        <div class="px-2 pt-2 pb-3 sm:px-3">
            <a href=""
                class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">
                Dashboard
            </a>
            <a href=""
                class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">
                Offers
            </a>
            <a href=""
                class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">
                About
            </a>
        </div>
        <div class="pt-4 pb-3 border-t border-gray-700">
            <div class="flex items-center px-5">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium leading-none text-white">
                        Tom Cook
                    </div>
                    <div class="mt-1 text-sm font-medium leading-none text-gray-400">
                        tom@example.com
                    </div>
                    
                   
                  
                </div>
            </div>
            <div class="mt-3 px-2">
          <a
            href="#"
            class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700"
            >Your Profile</a
          >
          <a
            href="#"
            class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700"
            >Settings</a
          >
          <a
            href="#"
            class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700"
            >Sign out</a
          >
        </div>
        </div>
    </div>
</nav>

<script>
    // JavaScript to toggle mobile menu visibility
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuIcon = document.getElementById('mobile-menu-icon');
    const closeMenuIcon = document.getElementById('close-menu-icon');

    mobileMenuButton.addEventListener('click', () => {
        const isOpen = mobileMenu.classList.contains('hidden');
        mobileMenu.classList.toggle('hidden');
        mobileMenuIcon.style.display = isOpen ? 'none' : 'block';
        closeMenuIcon.style.display = isOpen ? 'block' : 'none';
    });

    // Hide the close icon initially
    closeMenuIcon.style.display = 'none';
</script>


