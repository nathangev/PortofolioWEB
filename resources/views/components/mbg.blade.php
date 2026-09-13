<section id="mbg-logistics" data-ruler-section data-register="hybrid" class="register-hybrid py-24 px-6 sm:px-12 lg:px-20">
    <div class="max-w-5xl">

        <!-- Section Code & Interlocking Register Indicator -->
        <div class="flex flex-wrap items-center justify-between gap-4 border-b border-[#DCE8F5]/20 pb-4 mb-8">
            <div class="flex items-center gap-3 text-xs font-mono">
                <span class="inline-block w-2.5 h-2.5 bg-[#C98A2E]"></span>
                <span class="inline-block w-2.5 h-2.5 bg-[#6E9C87]"></span>
                <span class="text-[#DCE8F5] font-bold">CROSS-DISCIPLINARY HYBRID // 03</span>
                <span class="text-[#DCE8F5]/50">—</span>
                <span class="text-[#DCE8F5]/80">BLUEPRINT &amp; BENCH OVERLAY</span>
            </div>
            <div class="text-xs font-mono text-[#DCE8F5]/70">
                APPLICATION: NATIONAL NUTRITION LOGISTICS (MBG)
            </div>
        </div>

        <!-- Project Title & Narrative Framing -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 mb-12">
            <div class="lg:col-span-7">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold tracking-tight text-[#DCE8F5] mb-4">
                    MBG Smart Logistics
                </h2>
                <p class="text-base sm:text-lg font-serif text-[#DCE8F5]/90 leading-relaxed mb-6">
                    Route optimization for Indonesia's national Makan Bergizi Gratis program—dispatching hot, perishable school meals from central kitchens (SPPG) across congested urban corridors.
                </p>
                <div class="p-4 bg-[#14213B] border-l-3 border-[#6E9C87] border border-[#DCE8F5]/30 text-sm font-serif text-[#DCE8F5] leading-relaxed">
                    <strong>Where two fields converge:</strong> A standard routing algorithm minimizes kilometers. A food-safety routing algorithm enforces a hard thermal deadline: packed meals lose ~0.14°C/minute, requiring drop-offs to finish within 120 minutes before morning recess to guarantee zero foodborne risk.
                </div>
            </div>

            <!-- Fast Technical Metadata Box -->
            <div class="lg:col-span-5 flex flex-col justify-between p-6 bg-[#14213B] border border-[#DCE8F5]/40">
                <div>
                    <div class="text-xs font-mono text-[#6E9C87] font-bold mb-3 tracking-wider">
                        OPTIMIZATION PARAMETERS
                    </div>
                    <ul class="space-y-2.5 text-xs font-mono text-[#DCE8F5]">
                        <li class="flex justify-between border-b border-[#DCE8F5]/10 pb-1.5">
                            <span class="opacity-70">Logistics Hub</span>
                            <span class="font-semibold text-[#C98A2E]">SPPG Kitchen (2,400 meals/day)</span>
                        </li>
                        <li class="flex justify-between border-b border-[#DCE8F5]/10 pb-1.5">
                            <span class="opacity-70">Delivery Nodes</span>
                            <span class="font-semibold">Malang School Clusters</span>
                        </li>
                        <li class="flex justify-between border-b border-[#DCE8F5]/10 pb-1.5">
                            <span class="opacity-70">Algorithm</span>
                            <span class="font-semibold text-[#DCE8F5]">VRPTW Heuristic (Time Windows)</span>
                        </li>
                        <li class="flex justify-between border-b border-[#DCE8F5]/10 pb-1.5">
                            <span class="opacity-70">Thermal Limit</span>
                            <span class="font-semibold text-[#6E9C87]">&lt; 120 min post-packing</span>
                        </li>
                        <li class="flex justify-between border-b border-[#DCE8F5]/10 pb-1.5">
                            <span class="opacity-70">Delivery Deadline</span>
                            <span class="font-semibold">09:15–10:00 WIB (Recess)</span>
                        </li>
                    </ul>
                </div>

                <div class="mt-6 pt-4 border-t border-[#DCE8F5]/20">
                    <a href="https://github.com/nathangev" target="_blank" rel="noopener noreferrer" class="btn-action btn-amber w-full justify-center">
                        <span>View the repository</span>
                        <span aria-hidden="true">↗</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Live Application Screenshot (Route Engine UI) -->
        <div class="mb-14 border border-[#DCE8F5]/30 shadow-[0_8px_32px_rgba(0,0,0,0.4)] overflow-hidden">
            <div class="p-3 bg-[#14213B] border-b border-[#DCE8F5]/20 flex justify-between items-center text-xs font-mono text-[#DCE8F5]">
                <span>APLIKASI LANGSUNG // ENGINE RUTE OSRM + AI</span>
                <span class="text-[#6E9C87]">SCREENSHOT ASLI</span>
            </div>
            <div class="bg-[#1B2A4A] p-2 sm:p-4">
                <img 
                    src="{{ asset('assets/mbg/mbg-app.png') }}" 
                    alt="Tampilan aplikasi MBG Smart Logistics: engine rute OSRM dan panel analisis" 
                    class="w-full h-auto object-contain block"
                    loading="lazy"
                >
            </div>
        </div>

        <!-- Analytical Engineering Breakdown -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-6 bg-[#14213B] border border-[#C98A2E]/50">
                <div class="text-xs font-mono text-[#C98A2E] font-bold mb-2">
                    CONSTRAINT A: TRAFFIC &amp; TIME WINDOWS
                </div>
                <h3 class="text-base font-bold text-[#DCE8F5] mb-2">
                    Staggered Elementary &amp; Junior High Breaks
                </h3>
                <p class="text-sm font-serif text-[#DCE8F5]/85 leading-relaxed">
                    Elementary schools in Malang release for meal distribution at 09:15 WIB, while junior high schools release at 09:45 WIB. The route solver schedules early nodes to prioritize lower grades, calculating localized congestion factors on collector roads.
                </p>
            </div>

            <div class="p-6 bg-[#14213B] border border-[#6E9C87]/50">
                <div class="text-xs font-mono text-[#6E9C87] font-bold mb-2">
                    CONSTRAINT B: MICROBIAL &amp; THERMAL KINETICS
                </div>
                <h3 class="text-base font-bold text-[#DCE8F5] mb-2">
                    Active Heat Threshold Retention
                </h3>
                <p class="text-sm font-serif text-[#DCE8F5]/85 leading-relaxed">
                    Ready-to-eat warm meals packaged in standard insulated crates degrade towards the temperature danger zone (5°C to 60°C) if transit extends past two hours. The objective function penalizes any route segment where cumulative transit exceeds 110 minutes.
                </p>
            </div>
        </div>

    </div>
</section>
