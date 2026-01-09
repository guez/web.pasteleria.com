@php
    $services = [
        [
            'icon' => 'cake',
            'title' => 'Pasteles de Boda',
            'description' => 'Diseños elegantes y personalizados para tu día especial. Desde clásicos hasta modernos.',
        ],
        [
            'icon' => 'heart',
            'title' => 'Pasteles de Cumpleaños',
            'description' => 'Celebra con estilo. Pasteles temáticos y personalizados para todas las edades.',
        ],
        [
            'icon' => 'gift',
            'title' => 'Eventos Corporativos',
            'description' => 'Impresiona a tus clientes con pasteles profesionales para eventos empresariales.',
        ],
        [
            'icon' => 'sparkles',
            'title' => 'Cupcakes Gourmet',
            'description' => 'Deliciosos cupcakes artesanales en sabores únicos y decoraciones espectaculares.',
        ],
        [
            'icon' => 'users',
            'title' => 'Mesas Dulces',
            'description' => 'Montajes completos con variedad de postres para todo tipo de celebraciones.',
        ],
        [
            'icon' => 'star',
            'title' => 'Diseños Personalizados',
            'description' => 'Convierte tu idea en realidad. Trabajamos contigo para crear algo único.',
        ],
    ];

    // SVG ICONS
    $icons = [
        'cake' =>
            '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M12 2a4 4 0 0 0-4 4c0 2 4 6 4 6s4-4 4-6a4 4 0 0 0-4-4z"/><path d="M20 22v-7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v7"/><path d="M4 18h16"/></svg>',

        'heart' =>
            '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M20.8 4.6a5.5 5.5 0 0 0-8.3 0L12 5.1l-.5-.5a5.5 5.5 0 0 0-8.3 7.3l8.8 9.2 8.8-9.2a5.5 5.5 0 0 0 0-7.3z"/></svg>',

        'gift' =>
            '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M12 7v14"/><path d="M2 12h20"/><path d="M12 7a3 3 0 1 1 3-3"/><path d="M12 7a3 3 0 1 0-3-3"/></svg>',

        'sparkles' =>
            '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M12 3v3"/><path d="M17.8 5.2l-2.1 2.1"/><path d="M21 12h-3"/><path d="M17.8 18.8l-2.1-2.1"/><path d="M12 21v-3"/><path d="M6.2 18.8l2.1-2.1"/><path d="M3 12h3"/><path d="M6.2 5.2l2.1 2.1"/><circle cx="12" cy="12" r="3"/></svg>',

        'users' =>
            '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="9" cy="7" r="4"/><path d="M17 11a4 4 0 1 0-3.1 6.6"/><path d="M2 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"/><path d="M17 21v-2a4 4 0 0 0-3.1-3.9"/></svg>',

        'star' =>
            '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><polygon points="12 2 15 9 22 9 17 14 19 22 12 18 5 22 7 14 2 9 9 9 12 2"/></svg>',
    ];
@endphp

<section id="servicios" class="py-20 lg:py-32">
    <div class="container mx-auto px-4">

        {{-- Title --}}
        <div class="mb-12 text-center">
            <h2 class="mb-4 text-balance text-3xl font-bold text-foreground lg:text-5xl">
                Nuestros Servicios
            </h2>
            <p class="mx-auto max-w-2xl text-pretty text-lg leading-relaxed text-muted-foreground">
                Ofrecemos una amplia variedad de servicios de repostería para hacer de tu evento algo inolvidable
            </p>
        </div>

        {{-- Services Grid --}}
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            @foreach ($services as $service)
                <div class="rounded-xl border bg-card p-6 transition-shadow hover:shadow-lg">

                    {{-- Icon --}}
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary/10">
                        {!! $icons[$service['icon']] !!}
                    </div>

                    {{-- Title --}}
                    <h3 class="text-xl font-semibold text-foreground">
                        {{ $service['title'] }}
                    </h3>

                    {{-- Description --}}
                    <p class="mt-2 text-base leading-relaxed text-muted-foreground">
                        {{ $service['description'] }}
                    </p>
                </div>
            @endforeach

        </div>
    </div>
</section>
