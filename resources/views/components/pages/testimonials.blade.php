@php
    $testimonials = [
        [
            'name' => 'María González',
            'role' => 'Novia',
            'content' =>
                'El pastel de mi boda fue simplemente espectacular. No solo era hermoso, sino que el sabor superó todas nuestras expectativas. Todos nuestros invitados preguntaron por la pastelería.',
            'rating' => 5,
        ],
        [
            'name' => 'Carlos Rodríguez',
            'role' => 'Evento Corporativo',
            'content' =>
                'Contratamos sus servicios para nuestro aniversario empresarial y quedamos encantados. Profesionalismo, puntualidad y un producto de calidad excepcional.',
            'rating' => 5,
        ],
        [
            'name' => 'Ana Martínez',
            'role' => 'Cumpleaños infantil',
            'content' =>
                'Mi hija quedó fascinada con su pastel de cumpleaños. La atención al detalle y la creatividad en el diseño fueron increíbles. Definitivamente volveremos.',
            'rating' => 5,
        ],
    ];

    // SVG de la estrella llena
    $starIcon = '
        <svg xmlns="http://www.w3.org/2000/svg" 
             class="h-5 w-5 fill-primary text-primary" 
             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <polygon points="12 2 15 9 22 9 17 14 19 22 12 18 5 22 7 14 2 9 9 9 12 2"/>
        </svg>
    ';
@endphp

<section id="testimonios" class="py-20 lg:py-32">
    <div class="container mx-auto px-4">

        {{-- Title --}}
        <div class="mb-12 text-center">
            <h2 class="mb-4 text-balance text-3xl font-bold text-foreground lg:text-5xl">
                Lo que dicen nuestros clientes
            </h2>
            <p class="mx-auto max-w-2xl text-pretty text-lg leading-relaxed text-muted-foreground">
                La satisfacción de nuestros clientes es nuestra mejor carta de presentación
            </p>
        </div>

        {{-- Testimonials Grid --}}
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            @foreach ($testimonials as $test)
                <div class="rounded-xl border bg-card transition-shadow hover:shadow-lg">
                    <div class="p-6 pt-6">

                        {{-- Stars --}}
                        <div class="mb-4 flex gap-1">
                            @for ($i = 0; $i < $test['rating']; $i++)
                                {!! $starIcon !!}
                            @endfor
                        </div>

                        {{-- Content --}}
                        <p class="mb-4 leading-relaxed text-muted-foreground">
                            {{ $test['content'] }}
                        </p>

                        {{-- Footer --}}
                        <div class="border-t border-border pt-4">
                            <p class="font-semibold text-foreground">{{ $test['name'] }}</p>
                            <p class="text-sm text-muted-foreground">{{ $test['role'] }}</p>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>
