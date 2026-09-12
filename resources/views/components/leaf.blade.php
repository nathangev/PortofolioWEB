<section id="leaf-classifier" data-ruler-section data-register="hybrid" class="register-hybrid py-24 px-6 sm:px-12 lg:px-20 border-b border-[#DCE8F5]/20">
    <div class="max-w-5xl">

        <!-- Section Code & Interlocking Register Indicator -->
        <div class="flex flex-wrap items-center justify-between gap-4 border-b border-[#DCE8F5]/20 pb-4 mb-8">
            <div class="flex items-center gap-3 text-xs font-mono">
                <span class="inline-block w-2.5 h-2.5 bg-[#6E9C87]"></span>
                <span class="inline-block w-2.5 h-2.5 bg-[#C98A2E]"></span>
                <span class="text-[#DCE8F5] font-bold">CROSS-DISCIPLINARY HYBRID // 04</span>
                <span class="text-[#DCE8F5]/50">—</span>
                <span class="text-[#DCE8F5]/80">COMPUTER VISION &amp; PATHOLOGY</span>
            </div>
            <div class="text-xs font-mono text-[#DCE8F5]/70">
                ARCHITECTURE: MOBILENETV2 (PYTORCH)
            </div>
        </div>

        <!-- Project Title & Narrative Framing -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 mb-12">
            <div class="lg:col-span-7">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold tracking-tight text-[#DCE8F5] mb-4">
                    Computer Vision Leaf Pathology
                </h2>
                <p class="text-base sm:text-lg font-serif text-[#DCE8F5]/90 leading-relaxed mb-6">
                    Automating foliar symptom diagnosis by extracting visual biomarkers—distinguishing between abiotic nutrient deficiencies and acute biotic pathogens on edge hardware.
                </p>
                <div class="p-4 bg-[#14213B] border-l-3 border-[#C98A2E] border border-[#DCE8F5]/30 text-sm font-serif text-[#DCE8F5] leading-relaxed">
                    <strong>The diagnostic parallel:</strong> In clinical nutrition, a practitioner identifies physical manifestations of systemic malnutrition (e.g. koilonychia for iron depletion, glossitis for vitamin B complex). This neural model applies that exact diagnostic discipline to plants, parsing chlorosis patterns to diagnose soil chemistry deficits.
                </div>
            </div>

            <!-- Technical Spec Box -->
            <div class="lg:col-span-5 flex flex-col justify-between p-6 bg-[#14213B] border border-[#DCE8F5]/40">
                <div>
                    <div class="text-xs font-mono text-[#6E9C87] font-bold mb-3 tracking-wider">
                        MODEL PARAMETERS
                    </div>
                    <ul class="space-y-2.5 text-xs font-mono text-[#DCE8F5]">
                        <li class="flex justify-between border-b border-[#DCE8F5]/10 pb-1.5">
                            <span class="opacity-70">Neural Backbone</span>
                            <span class="font-semibold text-[#DCE8F5]">MobileNetV2 (Transfer Learning)</span>
                        </li>
                        <li class="flex justify-between border-b border-[#DCE8F5]/10 pb-1.5">
                            <span class="opacity-70">Input Resolution</span>
                            <span class="font-semibold">512 × 512 RGB Normalized</span>
                        </li>
                        <li class="flex justify-between border-b border-[#DCE8F5]/10 pb-1.5">
                            <span class="opacity-70">Feature Detection</span>
                            <span class="font-semibold text-[#C98A2E]">Interveinal Chlorosis, Halos</span>
                        </li>
                        <li class="flex justify-between border-b border-[#DCE8F5]/10 pb-1.5">
                            <span class="opacity-70">Classification Task</span>
                            <span class="font-semibold text-[#6E9C87]">Abiotic Stress vs Biotic Infection</span>
                        </li>
                        <li class="flex justify-between border-b border-[#DCE8F5]/10 pb-1.5">
                            <span class="opacity-70">Deployment Runtime</span>
                            <span class="font-semibold">ONNX / Quantized INT8</span>
                        </li>
                    </ul>
                </div>

                <div class="mt-6 pt-4 border-t border-[#DCE8F5]/20">
                    <a href="https://github.com/nathangev" target="_blank" rel="noopener noreferrer" class="btn-action btn-sage w-full justify-center">
                        <span>View model weights &amp; notebook</span>
                        <span aria-hidden="true">↗</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Interactive Visual Diagnostic Inspection Canvas -->
        <div class="mb-14 border border-[#DCE8F5]/30 shadow-[0_8px_32px_rgba(0,0,0,0.4)] overflow-hidden">
            <div class="p-3 bg-[#14213B] border-b border-[#DCE8F5]/20 flex justify-between items-center text-xs font-mono text-[#DCE8F5]">
                <span>DIAGNOSTIC VISUALIZER // FOLIAR SCAN TO NEURAL INFERENCE</span>
                <span class="text-[#C98A2E]">INSPECTION ACTIVE</span>
            </div>
            <div class="bg-[#E6E1D2] p-2 sm:p-4">
                <img 
                    src="{{ asset('assets/leaf/leaf-pathology-diagnostic.svg') }}" 
                    alt="Computer Vision Leaf Pathology Diagnostic and Feature Extraction Visualizer" 
                    class="w-full h-auto object-contain block"
                    loading="lazy"
                >
            </div>
        </div>

        <!-- Technical Inspection Points -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-6 bg-[#14213B] border border-[#6E9C87]/40">
                <div class="text-xs font-mono text-[#6E9C87] font-bold mb-2">
                    BIOMARKER EXTRACTION
                </div>
                <h3 class="text-base font-bold text-[#DCE8F5] mb-2">
                    Distinguishing Nutrient Starvation from Infection
                </h3>
                <p class="text-sm font-serif text-[#DCE8F5]/85 leading-relaxed">
                    Farmers frequently misdiagnose nitrogen and iron chlorosis as bacterial blight, applying costly and toxic fungicides unnecessarily. The model identifies the symmetry and vein-bounded diffusion of chlorosis to rule out random fungal colonization.
                </p>
            </div>

            <div class="p-6 bg-[#14213B] border border-[#C98A2E]/40">
                <div class="text-xs font-mono text-[#C98A2E] font-bold mb-2">
                    EDGE INFERENCE CONSTRAINTS
                </div>
                <h3 class="text-base font-bold text-[#DCE8F5] mb-2">
                    Mobile Quantization for Field Agricultural Scouts
                </h3>
                <p class="text-sm font-serif text-[#DCE8F5]/85 leading-relaxed">
                    By quantizing the PyTorch model weights to 8-bit integers (INT8) and pruning redundant dense layers, inference runs in under 45 milliseconds on standard budget smartphones without requiring cloud API round-trips.
                </p>
            </div>
        </div>

    </div>
</section>
