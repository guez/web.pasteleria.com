<footer class="border-t border-border bg-card">
    <div class="container mx-auto px-4 py-12">

        <div class="grid gap-8 md:grid-cols-4">

            {{-- LOGO Y DESCRIPCIÓN --}}
            <div>
                <div class="mb-4 flex items-center space-x-2">
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-primary">
                        <span class="text-xl font-bold text-primary-foreground">🧁</span>
                    </div>
                    <span class="text-xl font-bold text-foreground">Dulce Arte</span>
                </div>

                <p class="text-sm leading-relaxed text-muted-foreground">
                    Creando momentos dulces e inolvidables desde 2014
                </p>
            </div>

            {{-- NAVEGACIÓN --}}
            <div>
                <h3 class="mb-4 text-sm font-semibold text-foreground">Navegación</h3>

                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="#inicio" class="text-muted-foreground transition-colors hover:text-primary">Inicio</a>
                    </li>
                    <li>
                        <a href="#servicios"
                            class="text-muted-foreground transition-colors hover:text-primary">Servicios</a>
                    </li>
                    <li>
                        <a href="#galeria"
                            class="text-muted-foreground transition-colors hover:text-primary">Galería</a>
                    </li>
                    <li>
                        <a href="#contacto"
                            class="text-muted-foreground transition-colors hover:text-primary">Contacto</a>
                    </li>
                </ul>
            </div>

            {{-- SERVICIOS --}}
            <div>
                <h3 class="mb-4 text-sm font-semibold text-foreground">Servicios</h3>

                <ul class="space-y-2 text-sm text-muted-foreground">
                    <li>Pasteles de Boda</li>
                    <li>Pasteles de Cumpleaños</li>
                    <li>Eventos Corporativos</li>
                    <li>Cupcakes Gourmet</li>
                </ul>
            </div>

            {{-- REDES SOCIALES --}}
            <div>
                <h3 class="mb-4 text-sm font-semibold text-foreground">Síguenos</h3>

                <div class="flex gap-4">

                    {{-- Facebook --}}
                    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer"
                        class="text-muted-foreground transition-colors hover:text-primary">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                        </svg>

                        <span class="sr-only">Facebook</span>
                    </a>

                    {{-- Instagram --}}
                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer"
                        class="text-muted-foreground transition-colors hover:text-primary">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                        </svg>

                        <span class="sr-only">Instagram</span>
                    </a>

                    {{-- Twitter --}}
                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer"
                        class="text-muted-foreground transition-colors hover:text-primary">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M23 3a10.9 10.9 0 0 1-3.14 1.53A4.48 4.48 0 0 0 12 8v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                        </svg>

                        <span class="sr-only">Twitter</span>
                    </a>

                </div>
            </div>

        </div>

        <div class="mt-8 border-t border-border pt-8 text-center text-sm text-muted-foreground">
            <p>&copy; {{ date('Y') }} Dulce Arte. Todos los derechos reservados.</p>
        </div>

    </div>
</footer>
