<section id="inicio" class="relative overflow-hidden bg-gradient-to-b from-accent/30 to-background py-20 lg:py-32">
    <div class="container mx-auto px-4">
        <div class="grid items-center gap-12 lg:grid-cols-2">

            {{-- TEXT CONTENT --}}
            <div class="flex flex-col gap-6">
                <h1 class="text-balance text-4xl font-bold leading-tight tracking-tight text-foreground lg:text-6xl">
                    Endulza tus momentos especiales
                </h1>

                <p class="text-pretty text-lg leading-relaxed text-muted-foreground lg:text-xl">
                    Creamos pasteles artesanales únicos para bodas, cumpleaños y eventos especiales.
                    Cada creación es una obra de arte hecha con amor y los mejores ingredientes.
                </p>

                {{-- BUTTONS --}}
                <div class="flex flex-col gap-4 sm:flex-row">

                    {{-- Primary Button --}}
                    <a href="#contacto"
                        class="text-base px-6 py-3 rounded-md bg-primary text-primary-foreground hover:bg-primary/90 text-center transition">
                        Ver nuestros pasteles
                    </a>

                    {{-- WhatsApp Button --}}
                    <a href="https://api.whatsapp.com/send?phone=+593991339408&text=Hola, me gustaria Obtener más información" target="_blank" rel="noopener noreferrer"
                        class="text-base px-6 py-3 rounded-md border border-input bg-whatsapp hover:bg-whatsapp text-foreground flex items-center justify-center transition">

                        {{-- MessageCircle Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                        </svg>

                        Contactar por WhatsApp
                    </a>
                </div>

                {{-- STATISTICS --}}
                <div class="flex gap-8 pt-4">
                    <div>
                        <div class="text-3xl font-bold text-primary">10+</div>
                        <div class="text-sm text-muted-foreground">Años de experiencia</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-primary">500+</div>
                        <div class="text-sm text-muted-foreground">Clientes felices</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-primary">100%</div>
                        <div class="text-sm text-muted-foreground">Artesanal</div>
                    </div>
                </div>
            </div>

            {{-- IMAGE --}}
            <div class="relative aspect-square overflow-hidden rounded-2xl">
                <img src="{{asset('images/elegant-floral-wedding-cake.jpg')}}" alt="Pastel elegante de bodas"
                    class="h-full w-full object-cover" />
            </div>

        </div>
    </div>
</section>
