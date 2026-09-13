<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $meta['name'] ?? 'Nathan' }} — Systems Architecture & Clinical Nutrition (BINUS Malang)</title>
    <meta name="description" content="Portfolio of Nathanael Gevura (BINUS University Malang). Dual-track systems engineering and clinical health sciences. Offline-first POS, heuristic school meal routing, and foliar pathology AI.">
    
    <!-- Google Fonts: Archivo (Technical Grotesk) & Lora (Editorial Serif) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Lora:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">

    <!-- Styles & Scripts via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#1B2A4A] text-[#DCE8F5] antialiased selection:bg-[#C98A2E] selection:text-white">

    <!-- Fixed 3D Blueprint Background Layer (WebGL, scroll-driven) -->
    <canvas id="scene-3d" aria-hidden="true"></canvas>

    <!-- Hidden SVG Definitions for Cyanotype Duotone Mapping (§4) -->
    <svg class="hidden" aria-hidden="true" width="0" height="0">
        <defs>
            <filter id="cyanotype-duotone" color-interpolation-filters="sRGB">
                <!-- Convert to Grayscale Luminance -->
                <feColorMatrix type="matrix" values="
                    0.2126 0.7152 0.0722 0 0
                    0.2126 0.7152 0.0722 0 0
                    0.2126 0.7152 0.0722 0 0
                    0      0      0      1 0" />
                <!-- Map Shadows to #1B2A4A (27, 42, 74) and Highlights to #DCE8F5 (220, 232, 245) -->
                <feComponentTransfer>
                    <feFuncR type="linear" slope="0.75" intercept="0.10" />
                    <feFuncG type="linear" slope="0.74" intercept="0.16" />
                    <feFuncB type="linear" slope="0.67" intercept="0.29" />
                </feComponentTransfer>
            </filter>
        </defs>
    </svg>

    <!-- Fixed Blueprint Left Wayfinding Ruler Rail -->
    @include('components.ruler')

    <!-- Mobile Slim Progress Line (< 768px) -->
    <div class="mobile-progress-line" aria-hidden="true">
        <div class="mobile-progress-fill"></div>
    </div>

    <!-- Main Content Flow (Offset by left ruler on desktop) -->
    <main id="app-main" class="md:ml-[var(--ruler-width)] min-h-screen">
        @yield('content')
    </main>

</body>
</html>
