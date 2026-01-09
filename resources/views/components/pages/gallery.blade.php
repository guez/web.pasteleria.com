@php
    $images = [
        ['src' => 'images/chocolate-birthday-cake.jpg', 'alt' => 'Pastel de chocolate'],
        ['src' => 'images/elegant-wedding-cake.png', 'alt' => 'Pastel de bodas'],
        ['src' => 'images/colorful-cupcakes.png', 'alt' => 'Cupcakes variados'],
        ['src' => 'images/strawberry-cake.png', 'alt' => 'Pastel de fresas'],
        ['src' => 'images/custom-themed-cake.jpg', 'alt' => 'Pastel temático'],
        ['src' => 'images/dessert-table.png', 'alt' => 'Mesa dulce'],
    ];
@endphp

<section id="galeria" class="bg-muted/50 py-20 lg:py-32">
    <div class="container mx-auto px-4">

        {{-- Title / Subtitle --}}
        <div class="mb-12 text-center">
            <h2 class="mb-4 text-balance text-3xl font-bold text-foreground lg:text-5xl">
                Galería de Creaciones
            </h2>
            <p class="mx-auto max-w-2xl text-pretty text-lg leading-relaxed text-muted-foreground">
                Explora algunas de nuestras creaciones más recientes
            </p>
        </div>

        {{-- Gallery Grid --}}
        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">

            @foreach ($images as $image)
                <div
                    class="group relative aspect-square overflow-hidden rounded-xl transition-transform hover:scale-[1.02]">

                    <img src="{{ $image['src'] ?: asset('images/placeholder.svg') }}" alt="{{ $image['alt'] }}"
                        class="h-full w-full object-cover transition-transform group-hover:scale-110" />

                    {{-- Hover Overlay --}}
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 transition-opacity group-hover:opacity-100">
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="text-lg font-semibold">{{ $image['alt'] }}</p>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>

    </div>
</section>
