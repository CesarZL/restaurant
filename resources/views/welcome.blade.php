<x-guest-layout>
    <div class="max-w-full bg-primary">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 place-items-center relative py-12 px-8 sm:px-12 md:px-24 lg:px-48">
            <div class="col-span-1">
                <button class="text-white font-medium text-lg md:text-xl py-4 px-8 sm:px-10 md:px-14 border-2 border-accent hover:bg-accent hover:text-primary transition duration-300 ease-in-out">
                    +52 834 123 4567
                </button>
            </div>
            <div class="col-span-1 mt-8 lg:mt-0">
                <x-application-logo class="h-40 w-40 md:h-48 md:w-48 text-accent" />
            </div>
            <div class="col-span-1 mt-8 lg:mt-0">
                <button class="bg-accent text-primary font-medium text-lg md:text-xl py-4 px-8 sm:px-10 md:px-14 border-2 border-accent hover:bg-primary hover:text-accent transition duration-300 ease-in-out">
                    Hacer reservación
                </button>
            </div>
        </div>
    </div>
    
    @livewire('navigation-menu')

    <div class="max-w-full bg-primary">
        <div class="container mx-auto px-6 md:px-0 lg:px-0 2xl:px-16">
            <div class="flex flex-col lg:flex-row items-center justify-center lg:justify-between px-2 md:px-0 pt-8">
                <div class="lg:w-5/12 text-center lg:text-left mb-0 lg:mb-11">
                    <h2 class="text-5xl lg:text-7xl xl:text-8xl font-bold text-white font-secondary">
                        Bienvenido a Las Gambas
                    </h2>
                    <p class="text-base lg:text-lg mt-4 max-w-lg text-white py-2">
                        Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s.
                    </p>
                    <div class="mt-6 flex flex-col sm:flex-row sm:justify-center lg:justify-start gap-3">
                        <button
                            class="text-white font-medium text-xl py-4 px-14 border-2 border-accent hover:bg-accent hover:text-primary transition duration-300 ease-in-out">
                            Ver menú
                        </button>
                    </div>
                </div>
                <div class="lg:w-6/12 w-full mt-8 lg:mt-0 lg:-mb-14 lg:order-last flex justify-end">
                    <img src="{{ asset('images/hero.jpg') }}" class="w-full lg:w-11/12 h-auto max-h-[20rem] md:max-h-[25rem] lg:max-h-[32rem] xl:max-h-[44rem] rounded-t-xl lg:rounded-t-full object-cover">
                </div>
            </div>
        </div>
    </div>

    <!-- Sección superior con dos columnas -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12 py-32 max-w-7xl mx-auto bg-background">
        <!-- Columna Ubícanos -->
        <div class="text-center md:text-left">
            <div class="flex items-center justify-center md:justify-start">
                <div class="flex items-center space-x-4">
                    <svg class="w-8 h-8 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-6 8-11a8 8 0 10-16 0c0 5 8 11 8 11z"></path>
                    </svg>
                    <div>
                        <h2 class="text-xl font-semibold">Ubícanos</h2>
                        <p>Calle 25, Cd. Victoria, Tamaulipas</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Columna Reservaciones -->
        <div class="text-center md:text-right">
            <div class="flex items-center justify-center md:justify-end">
                <div class="flex items-center space-x-4">
                    <svg class="w-8 h-8 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a3 3 0 003.22 0L22 8M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H5a2 2 0 00-2 2v5a2 2 0 002 2z"></path>
                    </svg>
                    <div>
                        <h2 class="text-xl font-semibold">Reservaciones especiales</h2>
                        <p>correodeejemplo@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de contenido con imagen y texto -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12 max-w-7xl mx-auto">
        <!-- Columna con imagen -->
        <div>
            <img src="https://via.placeholder.com/600x400" 
            alt="Interior del restaurante" 
            class="w-full h-auto rounded-lg shadow-md">
        </div>
        <!-- Columna con historia -->
        <div class="relative">
            <div class="pl-8">
                <h1 class="text-2xl font-bold mb-4">Nuestra Historia</h1>
                <p class="mb-8">
                    Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content gfsfhere', making it look like readable English. Many desktop publishing packages.
                </p>
                <!-- Línea divisoria vertical -->
                <div class="absolute top-0 left-0 h-full border-l-2 border-gray-300 transform"></div>
                <!-- Fechas e información -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div>
                        <h2 class="text-xl font-semibold">1996</h2>
                        <p>Lorem Ipsum is that it has a more-or-less normal distribution.</p>
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold">2021</h2>
                        <p>Lorem Ipsum is that it has a more-or-less normal content.</p>
                    </div>
                </div>
                <div class="mt-8 flex items-center space-x-2">
                    <p class="text-xl font-semibold">Josefine</p>
                    <svg class="w-12 h-12 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 21l6-18 6 18H6z"></path>
                    </svg>
                </div>
            </div>
            <!-- Firma -->
            
        </div>
    </div>

        
    
    
    
    
    
    
    
</x-guest-layout>
