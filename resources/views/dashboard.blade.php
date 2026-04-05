<script src="https://cdn.tailwindcss.com"></script>

<x-app-layout>
    <x-slot name="header">
        <div class="bg-white border-b border-slate-200 -mx-4 sm:-mx-8 -mt-6 mb-6 px-8 py-4 flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-rose-600 rounded-lg flex items-center justify-center text-white text-2xl shadow-sm">
                    🌙
                </div>
                <div>
                    <h2 class="text-2xl font-serif font-bold text-slate-800 leading-tight">Nuansa Islam</h2>
                    <p class="text-[10px] uppercase tracking-[0.2em] text-rose-600 font-bold">Menebar Cahaya Sunnah</p>
                </div>
            </div>
            <div class="flex items-center gap-6 text-sm font-medium text-slate-600">
                <span class="hover:text-rose-600 cursor-pointer transition">Beranda</span>
                <span class="hover:text-rose-600 cursor-pointer transition">Kajian</span>
                <span class="hover:text-rose-600 cursor-pointer transition">Donasi</span>
                <div class="h-6 w-[1px] bg-slate-200"></div>
                <span class="text-xs text-slate-400">{{ now()->format('l, d F Y') }}</span>
            </div>
        </div>
    </x-slot>

    <div class="py-6 bg-[#f9f9f9] min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <div class="lg:col-span-2 space-y-8">
                    <div class="relative bg-white border border-slate-200 rounded-sm overflow-hidden shadow-sm group">
                        <div class="h-64 bg-slate-800 relative overflow-hidden">
                            <div class="absolute inset-0 opacity-40 bg-[url('https://images.unsplash.com/photo-1542810634-71277d95dcbb?q=80&w=2070')] bg-cover bg-center group-hover:scale-105 transition-transform duration-700"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                            <div class="absolute bottom-6 left-8 right-8">
                                <span class="bg-rose-600 text-white text-[10px] font-bold px-3 py-1 uppercase mb-3 inline-block">Ramadan Kareem</span>
                                <h3 class="text-3xl font-serif font-bold text-white mb-2 leading-tight">Assalamu'alaikum, {{ Auth::user()->name }}</h3>
                                <p class="text-slate-200 text-sm font-light">"Barangsiapa yang menempuh jalan untuk mencari ilmu, maka Allah akan mudahkan baginya jalan menuju surga."</p>
                            </div>
                        </div>
                        <div class="p-4 bg-rose-50 border-t border-rose-100 flex justify-between items-center">
                            <p class="text-xs font-bold text-rose-800">MAU IKUT DAKWAH KE PULUHAN RIBU ORANG SETIAP HARI?</p>
                            <button class="bg-rose-600 text-white px-4 py-1.5 text-xs font-bold rounded-sm shadow-sm hover:bg-rose-700 transition">Donasi Sekarang!</button>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-4">
                        <div class="bg-white p-5 border-l-4 border-rose-600 shadow-sm">
                            <p class="text-[10px] font-bold text-slate-400 uppercase mb-1">Poin Berkah</p>
                            <h4 class="text-xl font-bold text-slate-800">150 XP</h4>
                        </div>
                        <div class="bg-white p-5 border-l-4 border-emerald-600 shadow-sm">
                            <p class="text-[10px] font-bold text-slate-400 uppercase mb-1">Total Donasi</p>
                            <h4 class="text-xl font-bold text-slate-800">Rp 0</h4>
                        </div>
                        <div class="bg-white p-5 border-l-4 border-amber-500 shadow-sm">
                            <p class="text-[10px] font-bold text-slate-400 uppercase mb-1">Target Ibadah</p>
                            <h4 class="text-xl font-bold text-slate-800">12/15</h4>
                        </div>
                    </div>

                    <div class="bg-white border border-slate-200 shadow-sm">
                        <div class="px-6 py-4 border-b border-slate-100 flex justify-between items-center">
                            <h4 class="font-serif font-bold text-lg text-slate-800 border-l-4 border-rose-600 pl-3">Daftar Hafalan</h4>
                            <button class="text-xs font-bold text-rose-600 hover:underline tracking-widest uppercase">+ Tambah</button>
                        </div>
                        <div class="divide-y divide-slate-100">
                            <div class="p-6 flex justify-between items-center hover:bg-slate-50 transition">
                                <div class="flex gap-4 items-center">
                                    <div class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center font-bold text-slate-400">01</div>
                                    <div>
                                        <h5 class="font-bold text-slate-800">An-Naba' (40 Ayat)</h5>
                                        <p class="text-xs text-emerald-600 font-medium italic">Lancar - Terakhir setor kemarin</p>
                                    </div>
                                </div>
                                <button class="text-slate-300 hover:text-rose-600">⚙️</button>
                            </div>
                            <div class="p-6 flex justify-between items-center hover:bg-slate-50 transition">
                                <div class="flex gap-4 items-center">
                                    <div class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center font-bold text-slate-400">02</div>
                                    <div>
                                        <h5 class="font-bold text-slate-800">An-Nazi'at (46 Ayat)</h5>
                                        <p class="text-xs text-amber-600 font-medium italic">Muraja'ah - Terakhir setor 3 hari lalu</p>
                                    </div>
                                </div>
                                <button class="text-slate-300 hover:text-rose-600">⚙️</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-8">
                    <div class="bg-white border border-slate-200 p-6 text-center shadow-sm">
                        <div class="w-20 h-20 bg-rose-100 rounded-full mx-auto mb-4 flex items-center justify-center text-3xl border-2 border-white ring-2 ring-rose-50 shadow-md">
                            👤
                        </div>
                        <h4 class="font-bold text-slate-800 text-lg leading-tight">{{ Auth::user()->name }}</h4>
                        <p class="text-xs text-slate-400 mb-4">{{ Auth::user()->email }}</p>
                        <div class="pt-4 border-t border-slate-100 grid grid-cols-2 gap-2 text-xs">
                            <div class="bg-slate-50 p-2 rounded">
                                <p class="font-bold text-rose-600">Aktif</p>
                                <p class="text-slate-400">Status</p>
                            </div>
                            <div class="bg-slate-50 p-2 rounded">
                                <p class="font-bold text-rose-600">312310293</p>
                                <p class="text-slate-400">NIM</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border border-slate-200 shadow-sm overflow-hidden">
                        <div class="bg-rose-600 px-6 py-3">
                            <h4 class="text-white font-bold text-sm uppercase tracking-wider">Target Ramadhan</h4>
                        </div>
                        <div class="p-6 space-y-6">
                            <div>
                                <div class="flex justify-between text-xs font-bold mb-2">
                                    <span class="text-slate-600">Khatam Al-Qur'an</span>
                                    <span class="text-rose-600">65%</span>
                                </div>
                                <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                                    <div class="bg-rose-600 h-full w-[65%]"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-xs font-bold mb-2">
                                    <span class="text-slate-600">Sedekah Subuh</span>
                                    <span class="text-rose-600">12/30</span>
                                </div>
                                <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                                    <div class="bg-rose-600 h-full w-[40%]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 space-y-6">
                <div class="flex items-center gap-3">
                    <h4 class="font-serif font-bold text-xl text-slate-800 italic">Muslim Ad</h4>
                    <div class="h-[1px] flex-1 bg-slate-200"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white border border-slate-200 rounded-sm overflow-hidden shadow-sm hover:shadow-md transition">
                        <div class="h-40 bg-rose-100 relative">
                            <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?q=80&w=2070" class="w-full h-full object-cover opacity-80" />
                            <div class="absolute bottom-2 right-2 bg-yellow-400 text-[8px] font-black px-2 py-1 uppercase rounded-sm">Kesempatan Emas</div>
                        </div>
                        <div class="p-5 bg-rose-50/50">
                            <h5 class="font-bold text-sm text-slate-800 mb-3">Mau Ikut Dakwah ke Puluhan Ribu Orang Setiap Hari?</h5>
                            <button class="w-full bg-rose-600 text-white text-[10px] font-black py-2 uppercase rounded-sm hover:bg-rose-700 transition shadow-sm">Donasi Sekarang!</button>
                        </div>
                    </div>

                    <div class="bg-white border border-slate-200 rounded-sm overflow-hidden shadow-sm hover:shadow-md transition">
                        <div class="h-40 bg-emerald-900 flex items-center justify-center p-6 text-center">
                            <h3 class="text-white font-serif font-bold text-xl italic leading-tight">YUK, IKLAN DI MUSLIM AD</h3>
                        </div>
                        <div class="p-5">
                            <p class="text-xs text-slate-500 mb-4 italic">Ditayangkan di 6000+ artikel Islami, capai puluhan ribu pengunjung tiap harinya.</p>
                            <button class="w-full border-2 border-slate-800 text-slate-800 text-[10px] font-black py-2 uppercase rounded-sm hover:bg-slate-800 hover:text-white transition">Info Selengkapnya</button>
                        </div>
                    </div>

                    <div class="bg-white border border-slate-200 rounded-sm overflow-hidden shadow-sm hover:shadow-md transition">
                        <div class="h-40 bg-slate-200 relative">
                            <img src="https://images.unsplash.com/photo-1532622785990-d2c36a76f5a6?q=80&w=2070" class="w-full h-full object-cover" />
                        </div>
                        <div class="p-5">
                            <h5 class="font-bold text-sm text-slate-800 mb-2">Amal Jariyah: Wakaf Al-Qur'an</h5>
                            <div class="flex items-center gap-2 mb-3">
                                <div class="flex-1 bg-slate-100 h-1.5 rounded-full overflow-hidden">
                                    <div class="bg-amber-500 h-full w-[70%]"></div>
                                </div>
                                <span class="text-[9px] font-bold text-slate-400">70%</span>
                            </div>
                            <button class="w-full bg-amber-400 text-slate-900 text-[10px] font-black py-2 uppercase rounded-sm hover:bg-amber-500 transition">Donasi Sekarang!</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-slate-200 pt-8 pb-12 flex flex-col md:flex-row justify-between items-center gap-4 text-slate-400 text-[10px] font-bold uppercase tracking-widest">
                <p>© 2026 Nuansa Islam - Dikembangkan Oleh Doni Perdana (312310293)</p>
                <div class="flex gap-6">
                    <span class="hover:text-rose-600 cursor-pointer">Tentang Kami</span>
                    <span class="hover:text-rose-600 cursor-pointer">Kebijakan Privasi</span>
                    <span class="hover:text-rose-600 cursor-pointer">Hubungi Kami</span>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>