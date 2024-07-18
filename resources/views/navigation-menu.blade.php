<nav x-data="{ open: false }" class="bg-primary border-y border-secondary">
    <!-- Primary Navigation Menu -->
    <div class="max-w-full py-6 mx-auto">
        <div class="flex justify-between items-center px-6 md:px-8 xl:px-12 2xl:px-60">
            <div class="flex items-center">
                <!-- Navigation Links -->
                <div class="hidden lg:flex space-x-8">
                    <x-nav-link href="#inicio" class="font-medium text-lg" :active="request()->routeIs('welcome')">
                        Inicio
                    </x-nav-link>
                    <x-nav-link href="#sobre-nosotros" class="font-medium text-lg">
                        Sobre nosotros
                    </x-nav-link>
                    <x-nav-link href="#menu" class="font-medium text-lg">
                        Menú
                    </x-nav-link>
                    <x-nav-link href="#reservaciones" class="font-medium text-lg">
                        Reservaciones
                    </x-nav-link>
                    <x-nav-link href="#blog" class="font-medium text-lg">
                        Blog
                    </x-nav-link>
                    <x-nav-link href="#galeria" class="font-medium text-lg">
                        Galería
                    </x-nav-link>
                    <x-nav-link href="#contacto" class="font-medium text-lg">
                        Contacto
                    </x-nav-link>
                </div>
            </div>

            <div class="hidden lg:flex items-center ml-6">
                <!-- Social Media Links -->
                <x-nav-link href="#" class="mr-6 text-2xl">
                    <i class="fa-brands fa-instagram"></i>
                </x-nav-link>
                <x-nav-link href="#" class="mr-6 text-2xl">
                    <i class="fa-brands fa-facebook"></i>
                </x-nav-link>
                <x-nav-link href="#" class="mr-6 text-2xl">
                    <i class="fa-brands fa-twitter"></i>
                </x-nav-link>
                <x-nav-link href="#" class="text-2xl">
                    <i class="fa-brands fa-pinterest"></i>
                </x-nav-link>
            </div>

            <!-- Hamburger (Burger Menu) -->
            <div class="flex lg:hidden items-center">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-accent hover:text-primary hover:bg-accent focus:outline-none focus:bg-accent focus:text-primary transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': !open}" class="hidden lg:hidden">
        <div class="pt-2 pb-3 space-y-1 px-4">
            <x-responsive-nav-link href="#inicio" class="font-medium text-lg" :active="request()->routeIs('welcome')">
                Inicio
            </x-responsive-nav-link>
            <x-responsive-nav-link href="#sobre-nosotros" class="font-medium text-lg">
                Sobre nosotros
            </x-responsive-nav-link>
            <x-responsive-nav-link href="#menu" class="font-medium text-lg">
                Menú
            </x-responsive-nav-link>
            <x-responsive-nav-link href="#reservaciones" class="font-medium text-lg">
                Reservaciones
            </x-responsive-nav-link>
            <x-responsive-nav-link href="#blog" class="font-medium text-lg">
                Blog
            </x-responsive-nav-link>
            <x-responsive-nav-link href="#galeria" class="font-medium text-lg">
                Galería
            </x-responsive-nav-link>
            <x-responsive-nav-link href="#contacto" class="font-medium text-lg">
                Contacto
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Social Media Links -->
        <div class="pt-5 pb-3 border-t border-gray-600">
            <div class="flex justify-center">
                <a href="#" class="mr-6 text-2xl text-white hover:text-accent">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#" class="mr-6 text-2xl text-white hover:text-accent">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="#" class="mr-6 text-2xl text-white hover:text-accent">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="#" class="text-2xl text-white hover:text-accent">
                    <i class="fa-brands fa-pinterest"></i>
                </a>
            </div>
        </div>
    </div>
</nav>
