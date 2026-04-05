<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kisah - Nuansa Islam</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-50 text-slate-800 font-['Plus_Jakarta_Sans']">

    <nav class="bg-white/80 backdrop-blur-md py-4 px-8 shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-emerald-800">NUANSA<span class="text-amber-500">ISLAM</span></a>
            <a href="/" class="text-emerald-700 font-bold text-sm">← Kembali ke Beranda</a>
        </div>
    </nav>

    <main class="py-20 px-6 max-w-4xl mx-auto">
        @if($slug == 'ashabul-kahfi')
            <span class="bg-emerald-100 text-emerald-700 text-[10px] font-bold px-3 py-1 rounded-full uppercase">Kisah Teladan</span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-emerald-900 mt-4 mb-8">Keteguhan Iman Pemuda Ashabul Kahfi</h1>
            <img src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?q=80&w=1470" class="w-full h-[400px] object-cover rounded-[2.5rem] mb-10 shadow-2xl" alt="Gua">
            <div class="prose prose-lg text-slate-600 leading-relaxed space-y-6">
                <p>Kisah ini menceritakan tentang tujuh pemuda yang hidup di masa Raja Diqyanus yang zalim. Mereka dipaksa untuk menyembah berhala, namun mereka memilih untuk mempertahankan tauhid dan melarikan diri ke sebuah gua...</p>
                <p class="font-semibold text-emerald-800 italic">"Dan mereka tinggal dalam gua mereka tiga ratus tahun dan ditambah sembilan tahun lagi." (QS. Al-Kahfi: 25)</p>
                <p>Hikmah yang bisa kita petik adalah bagaimana Allah menjaga hamba-Nya yang bersungguh-sungguh dalam menjaga iman, bahkan dengan cara yang di luar nalar manusia...</p>
            </div>
        @elseif($slug == 'nabi-yusuf')
            <span class="bg-amber-100 text-amber-700 text-[10px] font-bold px-3 py-1 rounded-full uppercase">Kisah Nabi</span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-emerald-900 mt-4 mb-8">Kesabaran Nabi Yusuf as dalam Ujian</h1>
            <img src="https://images.unsplash.com/photo-1509395062183-67c5ad6faff9?q=80&w=1470" class="w-full h-[400px] object-cover rounded-[2.5rem] mb-10 shadow-2xl" alt="Desert">
            <div class="prose prose-lg text-slate-600 leading-relaxed space-y-6">
                <p>Nabi Yusuf as adalah putra dari Nabi Ya'qub as yang memiliki ketampanan luar biasa. Perjalanan hidupnya penuh dengan intrik, mulai dari kecemburuan saudara-saudaranya hingga fitnah dari istri Al-Aziz...</p>
                <p>Meskipun harus mendekam di penjara, beliau tetap menjaga akhlak dan ketakwaannya. Kesabaran tersebut akhirnya membuahkan hasil ketika beliau diangkat menjadi bendahara negara Mesir...</p>
            </div>
        @endif
    </main>

    <footer class="bg-emerald-900 text-white py-10 text-center">
        <p class="text-[10px] opacity-60 tracking-[0.3em] uppercase">Nuansa Islam - Tugas Akhir Doni Perdana</p>
    </footer>

</body>
</html>