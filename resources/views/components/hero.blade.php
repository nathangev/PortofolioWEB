<section id="hero" data-ruler-section data-register="blueprint" class="register-blueprint blueprint-grid min-h-screen flex flex-col justify-between py-12 px-6 sm:px-12 lg:px-20 border-b border-[#DCE8F5]/20">
    
    <!-- Top System Header Annotation -->
    <header class="flex flex-wrap items-center justify-between gap-4 border-b border-[#DCE8F5]/20 pb-4 text-xs font-mono">
        <div class="flex items-center gap-3">
            <span class="inline-block w-2 h-2 bg-[#C98A2E]"></span>
            <span class="tracking-wide">SYS_ARCH // DUAL-DISCIPLINE PORTFOLIO</span>
        </div>
        <div class="flex items-center gap-6 opacity-75">
            <span>BINUS UNIVERSITY @ MALANG</span>
            <span>SEMESTER 05 // 2024–2025</span>
        </div>
    </header>

    <!-- Center Hero Stage: 3D Blueprint Scan & Tilted Plane (§4) -->
    <div class="hero-stage py-10 my-auto">
        <!-- SVG Leader Lines Dynamic Canvas -->
        <svg class="leader-line-svg" aria-hidden="true"></svg>

        <!-- Callout Badges: each one is a jump link into the matching section.
             SVG leader lines connect these anchor points back to the photo plane. -->
        <a href="#bridge" class="leader-callout hidden md:block" data-anchor="tl" style="top: 18%; left: 8%;" aria-label="Jump to The Bridge section">
            <span class="leader-callout-code">SPEC_01 // THE BRIDGE ↗</span>
            why both fields
        </a>

        <a href="#toko-pos" class="leader-callout hidden md:block" data-anchor="tr" style="top: 22%; right: 8%;" aria-label="Jump to shipped systems and experience">
            <span class="leader-callout-code">SPEC_02 // EXPERIENCE ↗</span>
            systems I've shipped
        </a>

        <a href="#education" class="leader-callout hidden md:block" data-anchor="bl" style="bottom: 18%; left: 10%;" aria-label="Jump to Education section">
            <span class="leader-callout-code">SPEC_03 // EDUCATION ↗</span>
            BINUS &amp; Petra 4
        </a>

        <a href="#contact" class="leader-callout hidden md:block" data-anchor="br" style="bottom: 20%; right: 10%;" aria-label="Jump to Contact section">
            <span class="leader-callout-code">SPEC_04 // CONTACT ↗</span>
            email &amp; repositories
        </a>

        <!-- The Tilted Blueprint Sheet -->
        <div class="blueprint-plane relative p-3 sm:p-4 bg-[#14213B] border border-[#DCE8F5]/40 max-w-[340px] sm:max-w-[380px] w-full mx-auto">
            <!-- Corner Engineering Pins -->
            <div class="corner-pin tl"></div>
            <div class="corner-pin tr"></div>
            <div class="corner-pin bl"></div>
            <div class="corner-pin br"></div>

            <!-- Single Scan-line Sweep (§4 & §7) -->
            <div class="scanline-sweep"></div>

            <!-- Portrait Photo with Cyanotype Duotone Filter -->
            <div class="relative overflow-hidden aspect-[3/4] bg-[#1B2A4A] border border-[#DCE8F5]/20">
                <img 
                    src="{{ asset('assets/portrait.jpg') }}" 
                    alt="Nathan — Portrait Cyanotype Scan" 
                    class="cyanotype-filter w-full h-full object-cover object-center"
                    loading="eager"
                >
                <!-- Subtle Coordinate Watermark -->
                <div class="absolute bottom-2 right-2 text-[9px] font-mono text-[#DCE8F5]/60 bg-[#1B2A4A]/80 px-1.5 py-0.5 border border-[#DCE8F5]/20">
                    SCAN_ID: NG-2024-MLG
                </div>
            </div>

            <!-- Plane Bottom Annotation -->
            <div class="mt-3 pt-2 border-t border-[#DCE8F5]/20 flex justify-between items-center text-[10.5px] font-mono opacity-80">
                <span>NATHANAEL GEVURA</span>
                <span>BINUS ID // MALANG</span>
            </div>
        </div>
    </div>

    <!-- Hero Narrative Bottom Block: Nathan — one real sentence (§3.5) -->
    <div class="max-w-3xl pt-8 border-t border-[#DCE8F5]/20">
        <div class="text-xs font-mono text-[#C98A2E] mb-2 tracking-wide">
            PERSONA IDENTIFIER // DUAL-TRACK FOCUS
        </div>
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold tracking-tight text-[#DCE8F5] mb-4">
            Nathan
        </h1>
        <p class="text-base sm:text-lg text-[#DCE8F5]/90 font-serif leading-relaxed mb-6">
            A university student at BINUS Malang operating between software architecture and clinical food systems—engineering offline-first retail databases, heuristic logistics for national meal programs, and foliar pathology classifiers.
        </p>

        <!-- Quick Jump Links (Direct action labels) -->
        <div class="flex flex-wrap items-center gap-3 text-xs font-mono">
            <a href="#toko-pos" class="btn-action btn-blueprint">
                <span>View shipped POS system</span>
            </a>
            <a href="#mbg-logistics" class="btn-action btn-amber">
                <span>Explore MBG logistics model</span>
            </a>
            <a href="#simkost" class="btn-action btn-blueprint">
                <span>Inspect SIMKOST ERD</span>
            </a>
        </div>
    </div>

</section>
