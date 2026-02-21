<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuansa Islam - Transformasi Dakwah Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; scroll-behavior: smooth; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800">

    <nav class="bg-white/80 backdrop-blur-md py-4 px-8 flex justify-between items-center shadow-sm sticky top-0 z-50">
        <div class="text-2xl font-bold text-emerald-800 tracking-tight">NUANSA<span class="text-amber-500">ISLAM</span></div>
        
        <div class="hidden md:flex gap-8 font-semibold text-sm uppercase tracking-wider">
            <a href="/" class="text-emerald-900 hover:text-emerald-600 transition">Beranda</a>
            <a href="/tentang" class="text-slate-500 hover:text-emerald-600 transition">Tentang Kami</a>
            <a href="/donasi" class="text-slate-500 hover:text-emerald-600 transition">Donasi</a>
        </div>

        <div class="flex items-center gap-4">
            @if (Route::has('login'))
                <div class="flex gap-4 mr-2 border-r pr-4 border-gray-200 text-sm font-bold">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-emerald-700">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-slate-600 hover:text-emerald-600">Masuk</a>
                    @endauth
                </div>
            @endif
            <a href="https://wa.me/628123456789" target="_blank" class="bg-emerald-700 text-white px-6 py-2.5 rounded-full hover:bg-emerald-800 shadow-lg shadow-emerald-200 transition-all font-bold text-sm">
                Hubungi Kami
            </a>
        </div>
    </nav>

    <header class="py-28 px-6 text-center bg-gradient-to-br from-emerald-900 via-emerald-800 to-emerald-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <svg viewBox="0 0 100 100" class="w-full h-full"><circle cx="50" cy="50" r="40" fill="none" stroke="white" stroke-width="0.2" stroke-dasharray="1 3"/></svg>
        </div>

        <div class="relative z-10">
            <span class="bg-amber-500/20 text-amber-400 px-4 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-[0.2em] mb-6 inline-block border border-amber-500/30">
                Membangun Peradaban Digital
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-[1.1]">
                Menebar Manfaat, <br> <span class="text-amber-400">Menyambung Umat.</span>
            </h1>
            <p class="text-lg opacity-80 max-w-2xl mx-auto mb-10 leading-relaxed font-light">
                Nuansa Islam hadir sebagai ekosistem terpadu untuk mendukung ibadah harian Anda melalui integrasi teknologi dan nilai keislaman yang autentik.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <button class="bg-amber-500 text-emerald-950 px-10 py-4 rounded-xl font-bold hover:bg-amber-400 transition-all hover:-translate-y-1 shadow-2xl shadow-amber-900/20">Pelajari Program</button>
                <button class="bg-white/10 backdrop-blur-md border border-white/20 px-10 py-4 rounded-xl font-bold hover:bg-white/20 transition-all">Kontribusi Dakwah</button>
            </div>
        </div>
    </header>

    <section class="py-16 px-6 max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 -mt-16 relative z-20">
        
        <div class="relative overflow-hidden rounded-[2rem] shadow-2xl text-white min-h-[450px] flex flex-col justify-end p-8 group border border-white/10">
            <img src="{{ asset('waktu solat.jpg') }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Background">
            <div class="absolute inset-0 bg-gradient-to-t from-emerald-950 via-emerald-950/60 to-transparent"></div>
            
            <div class="relative z-10 w-full">
                <div class="w-12 h-1 bg-amber-400 mb-4 rounded-full"></div>
                <h3 class="font-bold text-2xl mb-1">Penjadwalan Ibadah</h3>
                <p id="city-name" class="text-[10px] text-amber-400 mb-6 font-bold tracking-widest uppercase italic">Memuat Lokasi...</p>
                
                <div class="space-y-3 bg-white/10 backdrop-blur-xl p-5 rounded-2xl border border-white/10 shadow-inner">
                    <div class="flex justify-between items-center border-b border-white/10 pb-2 text-sm">
                        <span class="opacity-70">Subuh</span> <span id="fajr" class="font-bold">--:--</span>
                    </div>
                    <div class="flex justify-between items-center border-b border-white/10 pb-2 text-sm">
                        <span class="opacity-70">Dzuhur</span> <span id="dhuhr" class="font-bold">--:--</span>
                    </div>
                    <div class="flex justify-between items-center border-b border-white/10 pb-2 text-sm">
                        <span class="opacity-70">Ashar</span> <span id="asr" class="font-bold">--:--</span>
                    </div>
                    <div class="flex justify-between items-center border-b border-white/10 pb-2 text-sm">
                        <span class="opacity-70">Maghrib</span> <span id="maghrib" class="font-bold">--:--</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="opacity-70">Isya</span> <span id="isha" class="font-bold">--:--</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative overflow-hidden rounded-[2rem] shadow-2xl text-white min-h-[450px] flex flex-col justify-end p-8 group border border-white/10">
            <img src="{{ asset('kajian.jpg') }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Background">
            <div class="absolute inset-0 bg-gradient-to-t from-emerald-950 via-emerald-950/60 to-transparent"></div>
            
            <div class="relative z-10">
                <div class="w-12 h-1 bg-amber-400 mb-4 rounded-full"></div>
                <h3 class="font-bold text-2xl mb-2 text-white">Literasi Islam</h3>
                <p class="opacity-80 text-sm mb-8 leading-relaxed font-light">Perdalam pemahaman keagamaan melalui pustaka digital yang dibimbing oleh asatidz kompeten di bidangnya.</p>
                <button class="w-full py-4 bg-emerald-700/80 backdrop-blur-md border border-white/20 text-white font-bold rounded-xl hover:bg-emerald-600 transition-all duration-300 shadow-xl">Akses Perpustakaan</button>
            </div>
        </div>

        <div class="relative overflow-hidden rounded-[2rem] shadow-2xl text-white min-h-[450px] flex flex-col justify-end p-8 group border border-white/10">
            <img src="{{ asset('zakat.jpeg') }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Background">
            <div class="absolute inset-0 bg-gradient-to-t from-emerald-950 via-emerald-950/60 to-transparent"></div>
            
            <div class="relative z-10">
                <div class="w-12 h-1 bg-amber-400 mb-4 rounded-full"></div>
                <h3 class="font-bold text-2xl mb-2 text-white">Filantropi Digital</h3>
                <p class="opacity-80 text-sm mb-8 leading-relaxed font-light">Layanan perhitungan dan penyaluran filantropi Islam secara transparan, amanah, dan tepat sasaran.</p>
                <a href="/donasi" class="block w-full py-4 bg-amber-500 text-emerald-950 text-center font-bold rounded-xl hover:bg-amber-400 transition-all shadow-xl shadow-amber-900/20">Mulai Kontribusi</a>
            </div>
        </div>

    </section>

    <footer class="bg-emerald-900 text-white pt-16 pb-8 px-8 mt-20">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12 text-left">
            
            <div>
                <h4 class="text-amber-400 font-bold text-lg mb-6 underline decoration-2 underline-offset-8">About Us</h4>
                <p class="text-xs leading-relaxed opacity-90 mb-6">
                    NUANSA ISLAM dibentuk untuk memudahkan umat dalam mengakses informasi jadwal sholat, literasi islam, dan penyaluran filantropi secara modern dan transparan.
                </p>
                <div class="space-y-3 text-[11px]">
                    <p><span class="text-amber-400">📞</span> (021) 77 811 933 (General)</p>
                    <p><span class="text-emerald-400 font-bold">WA</span> 0878 7600 1222 (Layanan Muzaki)</p>
                    <p><span class="text-emerald-400 font-bold">WA</span> 0877 2059 5747 (Layanan Mustahik)</p>
                    <p><span class="text-amber-400">✉️</span> nuansaislam@baznas.go.id</p>
                </div>
            </div>

            <div>
                <h4 class="text-amber-400 font-bold text-lg mb-6 underline decoration-2 underline-offset-8">Program</h4>
                <ul class="space-y-3 text-sm opacity-90">
                    <li><a href="#" class="hover:text-amber-400 transition">Nuansa Sejahtera</a></li>
                    <li><a href="#" class="hover:text-amber-400 transition">Nuansa Peduli</a></li>
                    <li><a href="#" class="hover:text-amber-400 transition">Nuansa Cerdas</a></li>
                    <li><a href="#" class="hover:text-amber-400 transition">Nuansa Sehat</a></li>
                    <li><a href="#" class="hover:text-amber-400 transition">Nuansa Taqwa</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-amber-400 font-bold text-lg mb-6 underline decoration-2 underline-offset-8">Quick Links</h4>
                <ul class="space-y-3 text-sm opacity-90">
                    <li><a href="/donasi" class="hover:text-amber-400 transition">Donasi</a></li>
                    <li><a href="#" class="hover:text-amber-400 transition">Zakat</a></li>
                    <li><a href="#" class="hover:text-amber-400 transition">Infaq</a></li>
                    <li><a href="#" class="hover:text-amber-400 transition">Kurban</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-amber-400 font-bold text-lg mb-6 underline decoration-2 underline-offset-8">YouTube</h4>
                <div class="rounded-xl overflow-hidden shadow-lg border-2 border-white/10 relative group aspect-video bg-black">
                    <img src="https://img.youtube.com/vi/dQw4w9WgXcQ/maxresdefault.jpg" alt="Video Thumbnail" class="w-full h-full object-cover opacity-70 group-hover:opacity-100 transition">
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white text-xs shadow-xl">▶</div>
                    </div>
                </div>
                <p class="text-[9px] mt-3 opacity-60 text-center uppercase tracking-widest font-bold">Dokumentasi Penyaluran</p>
            </div>
        </div>

        <div class="mt-16 pt-8 border-t border-white/10 text-center">
            <p class="text-[10px] opacity-60 tracking-[0.3em] uppercase">
                © 2026 Created with NUANSA ISLAM Digital Team
            </p>
        </div>
    </footer>

    <a href="https://wa.me/628123456789" target="_blank" class="fixed bottom-6 right-6 bg-emerald-500 text-white px-6 py-3 rounded-full shadow-2xl hover:bg-emerald-400 transition-all font-bold flex items-center gap-2 z-50 text-sm">
        <span class="text-lg">💬</span> Konsultasi
    </a>

    <script>
        async function getJadwal() {
            try {
                const today = new Date();
                const dateString = today.getFullYear() + '/' + (today.getMonth() + 1) + '/' + today.getDate();
                const response = await fetch(`https://api.myquran.com/v2/sholat/jadwal/1301/${dateString}`);
                const data = await response.json();
                
                if(data.status) {
                    const jadwal = data.data.jadwal;
                    document.getElementById('city-name').innerText = `LOKASI: ${data.data.lokasi}`;
                    document.getElementById('fajr').innerText = jadwal.subuh;
                    document.getElementById('dhuhr').innerText = jadwal.dzuhur;
                    document.getElementById('asr').innerText = jadwal.ashar;
                    document.getElementById('maghrib').innerText = jadwal.maghrib;
                    document.getElementById('isha').innerText = jadwal.isya;
                }
            } catch (error) {
                document.getElementById('city-name').innerText = "DATA TIDAK TERSEDIA";
            }
        }
        getJadwal();
    </script>
</body>
</html>