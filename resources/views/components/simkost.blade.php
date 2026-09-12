<section id="simkost" data-ruler-section data-register="bench" class="register-bench bench-ruled py-24 px-6 sm:px-12 lg:px-20 border-b border-[#1E2320]/20">
    <div class="max-w-5xl">

        <!-- Top Header & Framing -->
        <div class="flex flex-wrap items-center justify-between gap-4 border-b border-[#1E2320]/30 pb-4 mb-8">
            <div class="flex items-center gap-3 text-xs font-mono text-[#1E2320]">
                <span class="inline-block w-2.5 h-2.5 bg-[#C98A2E]"></span>
                <span class="font-bold">SYSTEMS I'VE DESIGNED // 05</span>
                <span>—</span>
                <span>RELATIONAL MODELING &amp; INTERFACE ARCHITECTURE</span>
            </div>
            <div class="text-xs font-mono text-[#1E2320]/70">
                COURSE: FINPRO LAB DATABASE — BINUS UNIVERSITY
            </div>
        </div>

        <!-- Project Title & Honest Framing Note -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 mb-12">
            <div class="lg:col-span-7">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold tracking-tight text-[#1E2320] mb-4">
                    SIMKOST Boarding House System
                </h2>
                <p class="text-base sm:text-lg font-serif text-[#1E2320]/90 leading-relaxed mb-6">
                    A multi-property tenant lifecycle and metered billing platform, structured around a normalized 11-table relational database and a task-oriented Figma prototype.
                </p>
                <div class="p-4 bg-[#FAF9F6] border-l-3 border-[#C98A2E] border border-[#1E2320]/20 text-sm font-serif text-[#1E2320] leading-relaxed">
                    <strong>Honest framing:</strong> Designed and modeled, not shipped. This project was completed as the final laboratory project for Database Systems (FINPRO). The goal was not a quick prototype, but complete 3NF normalization, referential integrity rules, and solving real UX friction in Indonesian boarding-house management.
                </div>
            </div>

            <!-- Fast Technical Metadata Box -->
            <div class="lg:col-span-5 flex flex-col justify-between p-6 bg-[#FAF9F6] border border-[#1E2320]">
                <div>
                    <div class="text-xs font-mono text-[#C98A2E] font-bold mb-3 tracking-wider">
                        DATABASE &amp; DESIGN METRICS
                    </div>
                    <ul class="space-y-2.5 text-xs font-mono text-[#1E2320]">
                        <li class="flex justify-between border-b border-[#1E2320]/10 pb-1.5">
                            <span class="opacity-70">Artifact Type</span>
                            <span class="font-semibold">Relational Schema + Interactive Figma</span>
                        </li>
                        <li class="flex justify-between border-b border-[#1E2320]/10 pb-1.5">
                            <span class="opacity-70">Relational Tables</span>
                            <span class="font-semibold text-[#C98A2E]">11 Tables (Strict 3NF)</span>
                        </li>
                        <li class="flex justify-between border-b border-[#1E2320]/10 pb-1.5">
                            <span class="opacity-70">Integrity Enforcement</span>
                            <span class="font-semibold">Foreign Key Cascades &amp; Immutability</span>
                        </li>
                        <li class="flex justify-between border-b border-[#1E2320]/10 pb-1.5">
                            <span class="opacity-70">Core Modules</span>
                            <span class="font-semibold">Leases, Meter Billing, Maintenance</span>
                        </li>
                    </ul>
                </div>

                <div class="mt-6 pt-4 border-t border-[#1E2320]/20">
                    <a href="https://www.figma.com/design/gkB6gDssRcHJO7qVmjgXiZ/FINPRO-LAB-DATABASE-SIMKOST" target="_blank" rel="noopener noreferrer" class="btn-action btn-bench w-full justify-center">
                        <span>Open the Figma design file</span>
                        <span aria-hidden="true">↗</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- 11-Table ERD Diagram Front & Center -->
        <div class="mb-14 bg-[#FAF9F6] border border-[#1E2320] shadow-[4px_4px_0px_#1E2320] overflow-hidden">
            <div class="p-3 bg-[#1E2320] text-[#E6E1D2] flex justify-between items-center text-xs font-mono">
                <span>ENTITY RELATIONSHIP DIAGRAM // 11 TABLES IN THIRD NORMAL FORM (3NF)</span>
                <span>REFERENTIAL CONSTRAINTS CHECKED</span>
            </div>
            <div class="p-2 sm:p-4 overflow-x-auto">
                <img 
                    src="{{ asset('assets/simkost/simkost-erd-diagram.svg') }}" 
                    alt="SIMKOST 11-table 3NF Relational Database Schema Diagram" 
                    class="w-full h-auto min-w-[700px] object-contain block"
                    loading="lazy"
                >
            </div>
        </div>

        <!-- UX Decisions & Schema Justifications -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-6 bg-[#FAF9F6] border border-[#1E2320]">
                <div class="text-xs font-mono text-[#C98A2E] font-bold mb-2">
                    UX DECISION: TIMELINE OVER FLAT TABLES
                </div>
                <h3 class="text-base font-bold text-[#1E2320] mb-2">
                    Segmented Tenant Lifecycle Cards
                </h3>
                <p class="text-sm font-serif text-[#1E2320]/85 leading-relaxed">
                    Most boarding-house apps display long, unpaginated tables that mix active tenants, pending lease renewals, and past departures. SIMKOST groups tenants chronologically by upcoming contract termination and electricity surcharge reconciliation, cutting overdue notice time in half.
                </p>
            </div>

            <div class="p-6 bg-[#FAF9F6] border border-[#1E2320]">
                <div class="text-xs font-mono text-[#C98A2E] font-bold mb-2">
                    ENGINEERING DECISION: IMMUTABLE LEDGER
                </div>
                <h3 class="text-base font-bold text-[#1E2320] mb-2">
                    Point-in-Time Tariff Snapshots
                </h3>
                <p class="text-sm font-serif text-[#1E2320]/85 leading-relaxed">
                    Electricity per-kWh rates fluctuate over time in Indonesia. The schema prohibits foreign-key references that recalculate older billing statements dynamically; instead, invoices lock both unit rate and kilowatt differential at creation, preventing retroactive accounting corruption.
                </p>
            </div>
        </div>

    </div>
</section>
