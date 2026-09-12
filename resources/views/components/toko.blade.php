<section id="toko-pos" data-ruler-section data-register="bench" class="register-bench bench-ruled py-24 px-6 sm:px-12 lg:px-20 border-b border-[#1E2320]/20">
    <div class="max-w-5xl">

        <!-- Top Header & Framing -->
        <div class="flex flex-wrap items-center justify-between gap-4 border-b border-[#1E2320]/30 pb-4 mb-8">
            <div class="flex items-center gap-3 text-xs font-mono text-[#1E2320]">
                <span class="inline-block w-2.5 h-2.5 bg-[#C98A2E]"></span>
                <span class="font-bold">SYSTEMS I'VE SHIPPED // 02</span>
                <span>—</span>
                <span>PRODUCTION-READY ARCHITECTURE</span>
            </div>
            <div class="text-xs font-mono text-[#1E2320]/70">
                COURSE: SOFTWARE ENGINEERING SEMESTER 4
            </div>
        </div>

        <!-- Project Title & Core Framing -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 mb-12">
            <div class="lg:col-span-7">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold tracking-tight text-[#1E2320] mb-4">
                    Toko Sumber Makmur POS
                </h2>
                <p class="text-base sm:text-lg font-serif text-[#1E2320]/90 leading-relaxed mb-6">
                    A retail management platform engineered around a real physical store constraint: selling perishable goods reliably through intermittent internet connectivity without inventory corruption.
                </p>
                <div class="p-4 bg-[#FAF9F6] border-l-3 border-[#C98A2E] border border-[#1E2320]/20 text-sm font-serif text-[#1E2320] leading-relaxed">
                    <strong>The core engineering challenge:</strong> Combining an offline-first client sync queue (IndexedDB) with strict server-side FIFO batch expiry logic, matching an academic diagram specification (Use Case, ERD, Class, Activity, and Sequence) across 6 rigid modules.
                </div>
            </div>

            <!-- Fast Technical Metadata Box -->
            <div class="lg:col-span-5 flex flex-col justify-between p-6 bg-[#FAF9F6] border border-[#1E2320]">
                <div>
                    <div class="text-xs font-mono text-[#C98A2E] font-bold mb-3 tracking-wider">
                        SYSTEM ARCHITECTURE SPEC
                    </div>
                    <ul class="space-y-2.5 text-xs font-mono text-[#1E2320]">
                        <li class="flex justify-between border-b border-[#1E2320]/10 pb-1.5">
                            <span class="opacity-70">Client Frontend</span>
                            <span class="font-semibold">Vue 3 (Composition) + Vite</span>
                        </li>
                        <li class="flex justify-between border-b border-[#1E2320]/10 pb-1.5">
                            <span class="opacity-70">State &amp; Offline Queue</span>
                            <span class="font-semibold">Pinia + IndexedDB</span>
                        </li>
                        <li class="flex justify-between border-b border-[#1E2320]/10 pb-1.5">
                            <span class="opacity-70">Backend Engine</span>
                            <span class="font-semibold">Laravel 11 REST API</span>
                        </li>
                        <li class="flex justify-between border-b border-[#1E2320]/10 pb-1.5">
                            <span class="opacity-70">Database</span>
                            <span class="font-semibold">SQLite (Relational 3NF)</span>
                        </li>
                        <li class="flex justify-between border-b border-[#1E2320]/10 pb-1.5">
                            <span class="opacity-70">Access Control</span>
                            <span class="font-semibold">3-Role Strict RBAC</span>
                        </li>
                    </ul>
                </div>

                <div class="mt-6 pt-4 border-t border-[#1E2320]/20">
                    <a href="https://github.com/nathangev/Toko_SE_Semester4" target="_blank" rel="noopener noreferrer" class="btn-action btn-amber w-full justify-center">
                        <span>View the repo</span>
                        <span aria-hidden="true">↗</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Dashboard / Architecture SVG Graphic Front & Center -->
        <div class="mb-14 bg-[#FAF9F6] border border-[#1E2320] shadow-[4px_4px_0px_#1E2320] overflow-hidden">
            <div class="p-3 bg-[#1E2320] text-[#E6E1D2] flex justify-between items-center text-xs font-mono">
                <span>TERMINAL VIEW // OFFLINE QUEUE TO FIFO PIPELINE</span>
                <span>DIAGRAM VERIFIED</span>
            </div>
            <div class="p-2 sm:p-4">
                <img 
                    src="{{ asset('assets/toko/toko-pos-schema.svg') }}" 
                    alt="Toko Sumber Makmur POS Architecture and FIFO Queue Diagram" 
                    class="w-full h-auto object-contain block"
                    loading="lazy"
                >
            </div>
        </div>

        <!-- Specific Technical Proof Points (Checked Facts, No Adjectives) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 bg-[#FAF9F6] border border-[#1E2320]">
                <div class="text-xs font-mono text-[#C98A2E] font-bold mb-2">
                    01 // OFFLINE QUEUE
                </div>
                <h3 class="text-base font-bold text-[#1E2320] mb-2">
                    IndexedDB Sales Buffer
                </h3>
                <p class="text-sm font-serif text-[#1E2320]/85 leading-relaxed">
                    Transactions generated during network drops persist in client-side IndexedDB storage. Once connectivity returns, an atomic manual synchronization dispatch verifies prices and writes sales items sequentially without packet loss.
                </p>
            </div>

            <div class="p-6 bg-[#FAF9F6] border border-[#1E2320]">
                <div class="text-xs font-mono text-[#C98A2E] font-bold mb-2">
                    02 // EXPIRY LOGIC
                </div>
                <h3 class="text-base font-bold text-[#1E2320] mb-2">
                    FIFO Batch Depletion
                </h3>
                <p class="text-sm font-serif text-[#1E2320]/85 leading-relaxed">
                    Inventory is partitioned by intake batches and explicit expiry dates. Checkouts automatically draw stock from the oldest unexpired batch first, preventing aged goods from lingering in storage.
                </p>
            </div>

            <div class="p-6 bg-[#FAF9F6] border border-[#1E2320]">
                <div class="text-xs font-mono text-[#C98A2E] font-bold mb-2">
                    03 // LEDGER INTEGRITY
                </div>
                <h3 class="text-base font-bold text-[#1E2320] mb-2">
                    RET- Prefix Stock Batching
                </h3>
                <p class="text-sm font-serif text-[#1E2320]/85 leading-relaxed">
                    Customer returns do not mutate historical transaction tables. The returns module instantiates a dedicated <code class="text-[#C98A2E] font-mono">RET-</code> batch with isolated quantity tracking to maintain audit trail correctness.
                </p>
            </div>
        </div>

    </div>
</section>
