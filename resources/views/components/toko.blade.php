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
                    Aplikasi kasir dan manajemen toko untuk retail yang menjual barang dengan masa kedaluwarsa. Dibuat agar tetap bisa dipakai walau koneksi internet putus-nyambung, tanpa membuat data stok jadi kacau.
                </p>
                <div class="p-4 bg-[#FAF9F6] border-l-3 border-[#C98A2E] border border-[#1E2320]/20 text-sm font-serif text-[#1E2320] leading-relaxed">
                    <strong>Tantangan utamanya:</strong> menggabungkan antrean transaksi offline di sisi klien (IndexedDB) dengan aturan stok FIFO berbasis batch dan tanggal kedaluwarsa di server, plus tiga peran pengguna yang aksesnya dipisah ketat.
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

        <!-- Live Application Screenshot Front & Center -->
        <div class="mb-14 bg-[#FAF9F6] border border-[#1E2320] shadow-[4px_4px_0px_#1E2320] overflow-hidden">
            <div class="p-3 bg-[#1E2320] text-[#E6E1D2] flex justify-between items-center text-xs font-mono">
                <span>APLIKASI LANGSUNG // HALAMAN LOGIN POS</span>
                <span>SCREENSHOT ASLI</span>
            </div>
            <div class="p-2 sm:p-4">
                <img 
                    src="{{ asset('assets/toko/toko-login.png') }}" 
                    alt="Tampilan login aplikasi Toko Sumber Makmur POS" 
                    class="w-full h-auto object-contain block"
                    loading="lazy"
                >
            </div>
        </div>

        <!-- Tiga Peran Pengguna di Dalam Toko -->
        <div class="mb-6">
            <div class="text-xs font-mono text-[#1E2320]/70 font-bold tracking-wider">
                TIGA PERAN PENGGUNA DI DALAM TOKO
            </div>
            <p class="text-sm font-serif text-[#1E2320]/80 mt-1">
                Setiap akun hanya bisa mengakses fitur sesuai tugasnya, jadi tanggung jawab tiap orang jelas dan tidak saling tumpang tindih.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 bg-[#FAF9F6] border border-[#1E2320]">
                <div class="text-xs font-mono text-[#C98A2E] font-bold mb-2">
                    01 // ADMIN (OWNER)
                </div>
                <h3 class="text-base font-bold text-[#1E2320] mb-2">
                    Pemilik Toko
                </h3>
                <p class="text-sm font-serif text-[#1E2320]/85 leading-relaxed">
                    Punya akses penuh ke seluruh sistem. Owner mengatur harga jual, mengelola akun pegawai, dan memantau laporan penjualan serta keuangan toko secara menyeluruh untuk mengambil keputusan bisnis.
                </p>
            </div>

            <div class="p-6 bg-[#FAF9F6] border border-[#1E2320]">
                <div class="text-xs font-mono text-[#C98A2E] font-bold mb-2">
                    02 // ADMIN GUDANG
                </div>
                <h3 class="text-base font-bold text-[#1E2320] mb-2">
                    Pengelola Stok
                </h3>
                <p class="text-sm font-serif text-[#1E2320]/85 leading-relaxed">
                    Bertanggung jawab atas barang masuk. Admin gudang mencatat stok baru per batch beserta tanggal kedaluwarsanya dan memeriksa persediaan, tanpa bisa mengakses menu kasir atau harga.
                </p>
            </div>

            <div class="p-6 bg-[#FAF9F6] border border-[#1E2320]">
                <div class="text-xs font-mono text-[#C98A2E] font-bold mb-2">
                    03 // KASIR
                </div>
                <h3 class="text-base font-bold text-[#1E2320] mb-2">
                    Petugas Penjualan
                </h3>
                <p class="text-sm font-serif text-[#1E2320]/85 leading-relaxed">
                    Menangani transaksi di depan. Kasir melayani penjualan ke pelanggan, memproses pembayaran, dan melihat riwayat transaksinya sendiri, tanpa akses ke pengaturan stok maupun laporan keuangan.
                </p>
            </div>
        </div>

    </div>
</section>
