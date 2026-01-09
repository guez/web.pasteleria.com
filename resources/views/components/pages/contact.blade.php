@php
    // ICONOS SVG
    $icons = [
        'map' => '
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="mt-1 h-5 w-5 text-primary"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path d="M21 10c0 7-9 12-9 12S3 17 3 10a9 9 0 1 1 18 0z"/>
                <circle cx="12" cy="10" r="3"/>
            </svg>
        ',
        'phone' => '
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="mt-1 h-5 w-5 text-primary"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2
                         19.79 19.79 0 0 1-8.63-3.07
                         19.5 19.5 0 0 1-6-6
                         19.79 19.79 0 0 1-3.07-8.67
                         A2 2 0 0 1 4.09 2h3a2 2 0 0 1 2 1.72
                         12.84 12.84 0 0 0 .7 3A2 2 0 0 1 9.42 9
                         L7.72 10.69a16 16 0 0 0 6 6l1.69-1.7
                         a2 2 0 0 1 2.22-.44 12.84 12.84 0 0 0 3 .71
                         A2 2 0 0 1 22 16.92z"/>
            </svg>
        ',
        'mail' => '
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="mt-1 h-5 w-5 text-primary"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <rect x="2" y="4" width="20" height="16" rx="2"/>
                <path d="m22 4-10 9L2 4"/>
            </svg>
        ',
        'clock' => '
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="mt-1 h-5 w-5 text-primary"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"/>
                <path d="M12 6v6l4 2"/>
            </svg>
        ',
        'whatsapp' => '
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="mr-2 h-5 w-5"
                 fill="none" stroke="currentColor" stroke-width="2"
                 stroke-linecap="round" stroke-linejoin="round"
                 viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8
                         8.5 8.5 0 0 1-7.6 4.7
                         8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7
                         a8.38 8.38 0 0 1-.9-3.8
                         8.5 8.5 0 0 1 4.7-7.6
                         8.38 8.38 0 0 1 3.8-.9h.5
                         a8.48 8.48 0 0 1 8 8v.5z" />
            </svg>
        ',
    ];
@endphp

<section id="contacto" class="bg-muted/50 py-20 lg:py-32">
    <div class="container mx-auto px-4">

        {{-- Title --}}
        <div class="mb-12 text-center">
            <h2 class="mb-4 text-balance text-3xl font-bold text-foreground lg:text-5xl">
                Contáctanos
            </h2>
            <p class="mx-auto max-w-2xl text-pretty text-lg leading-relaxed text-muted-foreground">
                Estamos aquí para hacer realidad tus ideas. Cuéntanos sobre tu próximo evento
            </p>
        </div>

        <div class="grid gap-8 lg:grid-cols-3">

            {{-- FORMULARIO --}}
            <div class="space-y-6 lg:col-span-2">
                <div class="rounded-xl border bg-card">
                    <div class="p-6 border-b">
                        <h3 class="text-xl font-semibold">Envíanos un mensaje</h3>
                        <p class="text-sm text-muted-foreground">
                            Completa el formulario y nos pondremos en contacto contigo
                        </p>
                    </div>

                    <div class="p-6">
                        <form method="POST" class="space-y-4">
                            @csrf

                            <div class="grid gap-4 md:grid-cols-2">

                                <div class="space-y-2">
                                    <label for="name" class="text-sm font-medium">Nombre completo</label>
                                    <input type="text" id="name" name="name" placeholder="Tu nombre" required
                                        class="w-full rounded-md border bg-background px-3 py-2 text-sm outline-none focus:ring focus:ring-primary/20">
                                </div>

                                <div class="space-y-2">
                                    <label for="email" class="text-sm font-medium">Email</label>
                                    <input type="email" id="email" name="email" placeholder="tu@email.com"
                                        required
                                        class="w-full rounded-md border bg-background px-3 py-2 text-sm outline-none focus:ring focus:ring-primary/20">
                                </div>

                            </div>

                            <div class="space-y-2">
                                <label for="phone" class="text-sm font-medium">Teléfono</label>
                                <input type="tel" id="phone" name="phone" placeholder="+1 234 567 890"
                                    required
                                    class="w-full rounded-md border bg-background px-3 py-2 text-sm outline-none focus:ring focus:ring-primary/20">
                            </div>

                            <div class="space-y-2">
                                <label for="message" class="text-sm font-medium">Cuéntanos sobre tu evento</label>
                                <textarea id="message" name="message" rows="5"
                                    placeholder="Describe el tipo de pastel que necesitas, fecha del evento, número de personas, etc." required
                                    class="w-full rounded-md border bg-background px-3 py-2 text-sm outline-none focus:ring focus:ring-primary/20"></textarea>
                            </div>

                            <button type="submit"
                                class="w-full rounded-md bg-primary px-4 py-3 text-center text-white text-lg font-medium hover:bg-primary/90 transition">
                                Enviar mensaje
                            </button>

                        </form>
                    </div>
                </div>
            </div>

            {{-- INFO DE CONTACTO + WHATSAPP --}}
            <div class="space-y-6">

                <div class="rounded-xl border bg-card p-6">

                    <h3 class="mb-6 text-xl font-semibold">Información de contacto</h3>

                    <div class="space-y-4">

                        {{-- DIRECCIÓN --}}
                        <div class="flex items-start gap-3">
                            {!! $icons['map'] !!}
                            <div>
                                <p class="font-medium text-foreground">Dirección</p>
                                <p class="text-sm text-muted-foreground">Av. Principal 3, Machala, Ecuador</p>
                            </div>
                        </div>

                        {{-- TELÉFONO --}}
                        <div class="flex items-start gap-3">
                            {!! $icons['phone'] !!}
                            <div>
                                <p class="font-medium text-foreground">Teléfono</p>
                                <p class="text-sm text-muted-foreground">+593 99 133 9408</p>
                            </div>
                        </div>

                        {{-- EMAIL --}}
                        <div class="flex items-start gap-3">
                            {!! $icons['mail'] !!}
                            <div>
                                <p class="font-medium text-foreground">Email</p>
                                <p class="text-sm text-muted-foreground">info@dulcearte.com</p>
                            </div>
                        </div>

                        {{-- HORARIO --}}
                        <div class="flex items-start gap-3">
                            {!! $icons['clock'] !!}
                            <div>
                                <p class="font-medium text-foreground">Horario</p>
                                <p class="text-sm text-muted-foreground">Lun - Vie: 9:00 - 18:00</p>
                                <p class="text-sm text-muted-foreground">Sáb: 10:00 - 14:00</p>
                            </div>
                        </div>

                    </div>

                </div>

                {{-- BOTÓN WHATSAPP --}}
                <a href="https://wa.me/1234567890" target="_blank" rel="noopener noreferrer"
                    class="w-full flex items-center justify-center rounded-md bg-whatsapp px-4 py-3 text-secondary-foreground hover:bg-whatsapp/90 transition text-lg font-medium">

                    {!! $icons['whatsapp'] !!}
                    Chatear por WhatsApp
                </a>

            </div>

        </div>

    </div>
</section>
