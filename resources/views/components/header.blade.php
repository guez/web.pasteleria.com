<header x-data="{ mobileMenuOpen: false }"
    class="sticky top-0 z-50 w-full border-b border-border/40 bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
    <div class="container mx-auto flex h-16 items-center justify-between px-4">

        {{-- LOGO --}}
        <a href="/" class="flex items-center space-x-2">
            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-primary">
                <span class="text-xl font-bold text-primary-foreground">🧁</span>
            </div>
            <span class="text-xl font-bold text-foreground">Dulce Arte</span>
        </a>

        {{-- DESKTOP NAVIGATION --}}
        <nav class="hidden items-center gap-6 md:flex">
            <a href="#inicio" class="text-sm font-medium transition-colors hover:text-primary">Inicio</a>
            <a href="#servicios" class="text-sm font-medium transition-colors hover:text-primary">Servicios</a>
            <a href="#galeria" class="text-sm font-medium transition-colors hover:text-primary">Galería</a>
            <a href="#testimonios" class="text-sm font-medium transition-colors hover:text-primary">Testimonios</a>
            <a href="#contacto" class="text-sm font-medium transition-colors hover:text-primary">Contacto</a>
        </nav>

        {{-- DESKTOP BUTTON --}}
        <a href="#contacto"
            class="hidden md:flex items-center justify-center px-5 py-2.5 rounded-md bg-primary text-primary-foreground hover:bg-primary/90 text-sm font-medium transition">
            Hacer pedido
        </a>

        {{-- MOBILE MENU BUTTON --}}
        <button class="md:hidden" @click="mobileMenuOpen = !mobileMenuOpen" aria-label="Toggle menu">
            {{-- Menu Icon --}}
            <svg x-show="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <line x1="4" y1="6" x2="20" y2="6" />
                <line x1="4" y1="12" x2="20" y2="12" />
                <line x1="4" y1="18" x2="20" y2="18" />
            </svg>

            {{-- X Icon --}}
            <svg x-show="mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
            </svg>
        </button>
    </div>

    {{-- MOBILE MENU --}}
    <div x-show="mobileMenuOpen" x-transition class="border-t border-border md:hidden">
        <nav class="container mx-auto flex flex-col gap-4 px-4 py-4">

            <a href="#inicio" class="text-sm font-medium hover:text-primary transition-colors"
                @click="mobileMenuOpen = false">Inicio</a>
            <a href="#servicios" class="text-sm font-medium hover:text-primary transition-colors"
                @click="mobileMenuOpen = false">Servicios</a>
            <a href="#galeria" class="text-sm font-medium hover:text-primary transition-colors"
                @click="mobileMenuOpen = false">Galería</a>
            <a href="#testimonios" class="text-sm font-medium hover:text-primary transition-colors"
                @click="mobileMenuOpen = false">Testimonios</a>
            <a href="#contacto" class="text-sm font-medium hover:text-primary transition-colors"
                @click="mobileMenuOpen = false">Contacto</a>

            {{-- Mobile Button --}}
            <a href="#contacto"
                class="w-full text-center px-5 py-2.5 rounded-md bg-primary text-primary-foreground hover:bg-primary/90 text-sm font-medium transition"
                @click="mobileMenuOpen = false">
                Hacer pedido
            </a>

        </nav>
    </div>

</header>
