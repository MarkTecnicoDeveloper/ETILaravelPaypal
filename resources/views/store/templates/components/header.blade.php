<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile Buttons -->
                <button id="mobile-menu" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main Menu</span>
                    <svg id="mobile-icon-close" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="mobile-icon-open" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <a href="#">
                        <img class="block lg:hidden h-8 w-auto" src="{{ url('assets/img/etifavicon.png') }}" alt="EspecializaTi">
                    </a>
                    <a href="#">
                        <img class="hidden lg:block h-8 w-auto" src="{{ url('assets/img/etilogo.png') }}" alt="EspecializaTi">
                    </a>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <a href="#" class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white transition-all">
                    Meu Carrinho
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span class="bg-gray-900 px-3 py-1 rounded-full text-white">0</span>
                </a>
                <div class="ml-3 relative">
                    <div>
                        <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </button>
                    </div>
                    <div id="user-menu" class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Perfil</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Alterar Senha</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 border-t-2" role="menuitem" tabindex="-1" id="user-menu-item-2">Sair</a>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div class="sm:hidden hidden" id="mobile-menu-content">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
        </div>
    </div>
</nav>

@push('headerScripts')
    <script>
        
        var mobileState = false;
        var userMenuState = false;

        var btnMobile = document.querySelector('#mobile-menu');
        var iconMobileOpen = document.querySelector('#mobile-icon-open');
        var iconMobileClose = document.querySelector('#mobile-icon-close');
        var menuMobile = document.querySelector('#mobile-menu-content');
        var userMenuButton = document.querySelector('#user-menu-button');
        var userMenu = document.querySelector('#user-menu');

        btnMobile.addEventListener('click', () => {
            if(!mobileState) {
                mobileState = true;
                iconMobileClose.classList.remove('block');
                iconMobileClose.classList.add('hidden');
                iconMobileOpen.classList.remove('hidden');
                iconMobileOpen.classList.add('block');
                menuMobile.classList.remove('hidden');
                menuMobile.classList.add('block');
            } else {
                mobileState = false;
                iconMobileClose.classList.remove('hidden');
                iconMobileClose.classList.add('block');
                iconMobileOpen.classList.remove('block');
                iconMobileOpen.classList.add('hidden');
                menuMobile.classList.remove('block');
                menuMobile.classList.add('hidden');
            }
        });

        userMenuButton.addEventListener('click', () => {
            if(!userMenuState) {
                userMenuState = true;
                userMenu.classList.remove('hidden');
                userMenu.classList.add('block');
            } else {
                userMenuState = false;
                userMenu.classList.remove('block');
                userMenu.classList.add('hidden');
            }
        });
        
    </script>
@endpush