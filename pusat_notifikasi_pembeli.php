<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Be+Vietnam+Pro:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-tertiary": "#ffffff",
                    "on-error-container": "#93000a",
                    "surface-tint": "#b62506",
                    "surface-container-lowest": "#ffffff",
                    "surface-container-low": "#fff0ee",
                    "surface-container-highest": "#f9dcd6",
                    "on-tertiary-fixed-variant": "#004d67",
                    "surface": "#fff8f6",
                    "surface-bright": "#fff8f6",
                    "on-surface-variant": "#5b403b",
                    "primary": "#b22204",
                    "secondary-fixed-dim": "#ffb4a4",
                    "on-primary-fixed": "#3e0500",
                    "background": "#fff8f6",
                    "on-primary-container": "#fffbff",
                    "on-primary": "#ffffff",
                    "surface-container": "#ffe9e5",
                    "on-surface": "#271815",
                    "error": "#ba1a1a",
                    "on-tertiary-container": "#fbfcff",
                    "error-container": "#ffdad6",
                    "tertiary-container": "#007ea7",
                    "on-error": "#ffffff",
                    "primary-container": "#d63c1e",
                    "primary-fixed": "#ffdad3",
                    "inverse-primary": "#ffb4a4",
                    "inverse-surface": "#3e2c29",
                    "primary-fixed-dim": "#ffb4a4",
                    "outline-variant": "#e3beb6",
                    "tertiary-fixed-dim": "#76d1ff",
                    "tertiary": "#006385",
                    "on-secondary-fixed-variant": "#7d2c1b",
                    "on-secondary": "#ffffff",
                    "on-primary-fixed-variant": "#8d1600",
                    "surface-container-high": "#ffe2dc",
                    "on-background": "#271815",
                    "on-tertiary-fixed": "#001e2c",
                    "on-secondary-fixed": "#3e0500",
                    "inverse-on-surface": "#ffede9",
                    "secondary-fixed": "#ffdad3",
                    "secondary": "#9c4230",
                    "tertiary-fixed": "#c2e8ff",
                    "surface-variant": "#f9dcd6",
                    "on-secondary-container": "#762616",
                    "secondary-container": "#ff8f77",
                    "outline": "#8f7069",
                    "surface-dim": "#f0d4ce"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "fontFamily": {
                    "headline": ["Plus Jakarta Sans"],
                    "display": ["Plus Jakarta Sans"],
                    "body": ["Be Vietnam Pro"],
                    "label": ["Be Vietnam Pro"]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body { font-family: 'Be Vietnam Pro', sans-serif; }
        h1, h2, h3 { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background text-on-surface min-h-screen">
<!-- TopAppBar -->
<header class="fixed top-0 w-full flex justify-between items-center px-6 h-16 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl z-50 shadow-[0_8px_30px_rgb(0,0,0,0.04)]">
<button class="text-orange-800 dark:text-orange-500 hover:bg-slate-100/50 dark:hover:bg-slate-800/50 transition-colors active:scale-95 p-2 rounded-full">
<span class="material-symbols-outlined">menu</span>
</button>
<div class="font-['Plus_Jakarta_Sans'] font-bold tracking-tight text-xl font-extrabold bg-gradient-to-br from-orange-700 to-red-600 bg-clip-text text-transparent">
            Kantin Kita
        </div>
<button class="text-orange-700 dark:text-orange-400 font-bold hover:bg-slate-100/50 dark:hover:bg-slate-800/50 transition-colors active:scale-95 p-2 rounded-full">
<span class="material-symbols-outlined">notifications</span>
</button>
</header>
<main class="pt-24 pb-32 px-6 max-w-4xl mx-auto">
<!-- Editorial Header Section -->
<section class="mb-10">
<span class="font-label text-[10px] uppercase tracking-widest font-semibold text-primary mb-2 block">Update Terbaru</span>
<h1 class="text-4xl font-display font-extrabold tracking-tight text-on-surface mb-4">Pemberitahuan</h1>
<p class="text-on-surface-variant font-body max-w-md leading-relaxed">
                Tetap pantau status kuliner pilihan Anda dari dapur kami langsung ke meja Anda.
            </p>
</section>
<!-- Filter Selection Chips -->
<div class="flex gap-3 mb-8 overflow-x-auto pb-2">
<button class="px-6 py-2 bg-primary text-on-primary text-sm font-semibold rounded-lg transition-all shadow-lg shadow-primary/20">Semua</button>
<button class="px-6 py-2 bg-surface-container-high text-on-surface-variant text-sm font-semibold rounded-lg hover:bg-surface-container-highest transition-all">Pesanan</button>
<button class="px-6 py-2 bg-surface-container-high text-on-surface-variant text-sm font-semibold rounded-lg hover:bg-surface-container-highest transition-all">Promo</button>
<button class="px-6 py-2 bg-surface-container-high text-on-surface-variant text-sm font-semibold rounded-lg hover:bg-surface-container-highest transition-all">Info</button>
</div>
<!-- Notifications List (Tonal Layering Layout) -->
<div class="space-y-4">
<!-- Notification Item: Pesanan Selesai (High Priority/Success) -->
<div class="group relative bg-surface-container rounded-2xl p-5 flex gap-5 transition-all hover:translate-x-1">
<div class="flex-shrink-0 w-14 h-14 rounded-xl bg-gradient-to-br from-green-500 to-emerald-600 flex items-center justify-center text-white shadow-lg shadow-green-200">
<span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
</div>
<div class="flex-1">
<div class="flex justify-between items-start mb-1">
<h3 class="font-headline font-bold text-on-surface text-lg">Pesanan Selesai</h3>
<span class="font-label text-[11px] text-on-surface-variant opacity-60">Baru Saja</span>
</div>
<p class="text-on-surface-variant font-body text-sm leading-relaxed mb-3">
                        Nikmati hidangan Anda! Pesanan <span class="font-semibold text-on-surface">#ORD-8821</span> telah berhasil diserahterimakan kepada Anda.
                    </p>
<div class="flex items-center gap-2">
<img class="w-8 h-8 rounded-lg object-cover shadow-sm" data-alt="close up shot of a vibrant healthy salad bowl with avocado and fresh vegetables on a white table" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAOJ8AoQWl52o3gspTU5uU63erG4BsQq14FSCieUUvPyqF3UnABgjq0TWyg-0tarRQvURrblQ87hwTanHGsl8Ea03ablGDIa8egog357N2Gvk3BCgIESp1OohyF-rg3eKLgk6vI5DjNokO1b2YTM1qxOOCQhYoU7WS8WTAr8FJoO4ZJ7ynG2oFAxr0iwP6n2AQWZ3E_S7jHbpuX6dq2WRmAixD8m5R2ya44aJtEzWsQmQuWmKwRvG_PRg6o0dChZQTraBb4-Xv4cY8"/>
<span class="text-xs font-medium text-primary">Beri Rating Sekarang</span>
</div>
</div>
<div class="absolute right-4 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity">
<span class="material-symbols-outlined text-on-surface-variant">chevron_right</span>
</div>
</div>
<!-- Notification Item: Pesanan Diproses -->
<div class="group relative bg-surface-container-low rounded-2xl p-5 flex gap-5 transition-all hover:translate-x-1">
<div class="flex-shrink-0 w-14 h-14 rounded-xl bg-gradient-to-br from-orange-500 to-red-600 flex items-center justify-center text-white shadow-lg shadow-orange-200">
<span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">cooking</span>
</div>
<div class="flex-1">
<div class="flex justify-between items-start mb-1">
<h3 class="font-headline font-bold text-on-surface text-lg">Pesanan Diproses</h3>
<span class="font-label text-[11px] text-on-surface-variant opacity-60">12 Menit Lalu</span>
</div>
<p class="text-on-surface-variant font-body text-sm leading-relaxed">
                        Chef kami sedang menyiapkan <span class="font-semibold text-on-surface">Nasi Goreng Spesial</span> Anda. Harap tunggu sebentar lagi ya!
                    </p>
</div>
</div>
<!-- Notification Item: Pesanan Diterima (Entry State) -->
<div class="group relative bg-surface-container-low rounded-2xl p-5 flex gap-5 transition-all hover:translate-x-1">
<div class="flex-shrink-0 w-14 h-14 rounded-xl bg-surface-container-highest flex items-center justify-center text-primary-container">
<span class="material-symbols-outlined text-2xl">receipt_long</span>
</div>
<div class="flex-1">
<div class="flex justify-between items-start mb-1">
<h3 class="font-headline font-bold text-on-surface text-lg">Pesanan Diterima</h3>
<span class="font-label text-[11px] text-on-surface-variant opacity-60">45 Menit Lalu</span>
</div>
<p class="text-on-surface-variant font-body text-sm leading-relaxed">
                        Pembayaran berhasil terkonfirmasi. Pesanan <span class="font-semibold text-on-surface">#ORD-8819</span> telah masuk ke sistem dapur kami.
                    </p>
</div>
</div>
<!-- Yesterday Section Divider -->
<div class="py-6">
<h4 class="font-label text-[11px] uppercase tracking-[0.2em] font-bold text-on-surface-variant/40">Kemarin</h4>
</div>
<!-- Notification Item: General Promo (Editorial Asymmetry) -->
<div class="relative overflow-hidden bg-white rounded-3xl p-0 flex flex-col md:flex-row shadow-sm">
<div class="w-full md:w-1/3 h-32 md:h-auto overflow-hidden">
<img class="w-full h-full object-cover" data-alt="tender juicy steak being sliced on a wooden board with garlic and herbs, moody lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCwbsK7RbQawhGPGic177zdXTPIYZCfGiYBCuNTCM9gZtIUQNcRqjVlhf8Hy_vhZblnI4SPN7e0gItANZgiRXQn-peqIjuY-HpDapmFhC3PiZ8k044wvPLBRcQue1VqWnYEEk1FIDmvjoi3a9Xnz0HSajIjkmENZYKvf9zJKr6PgdNMo3ySUs3DF7z-S0pnfVclj803cMbSUPISO9jG6hb3H_1vMnbn_1cCJXB3OM3Da6n5qi4NNiMEDjjHW-N6rdoRsDpJpBhhrSs"/>
</div>
<div class="p-6 flex-1 flex flex-col justify-center">
<div class="flex items-center gap-2 mb-2">
<span class="px-2 py-0.5 rounded bg-tertiary-fixed text-[10px] font-bold text-on-tertiary-fixed uppercase">Promo Spesial</span>
<span class="font-label text-[10px] text-on-surface-variant opacity-60">1 Hari Lalu</span>
</div>
<h3 class="font-headline font-bold text-on-surface text-xl mb-1">Steak Dinner? Hemat 30%!</h3>
<p class="text-on-surface-variant font-body text-sm leading-relaxed">
                        Nikmati potongan harga khusus untuk menu steak malam ini. Kode: <span class="font-bold text-primary">LAPERMALEM</span>
</p>
</div>
</div>
<!-- Notification Item: System Update -->
<div class="group relative bg-surface-container-low rounded-2xl p-5 flex gap-5 transition-all hover:translate-x-1 opacity-80">
<div class="flex-shrink-0 w-14 h-14 rounded-xl bg-surface-container-highest flex items-center justify-center text-slate-400">
<span class="material-symbols-outlined text-2xl">update</span>
</div>
<div class="flex-1">
<div class="flex justify-between items-start mb-1">
<h3 class="font-headline font-bold text-on-surface text-lg">Pembaruan Sistem</h3>
<span class="font-label text-[11px] text-on-surface-variant opacity-60">2 Hari Lalu</span>
</div>
<p class="text-on-surface-variant font-body text-sm leading-relaxed">
                        Kami telah meningkatkan stabilitas aplikasi untuk pengalaman pemesanan yang lebih lancar.
                    </p>
</div>
</div>
</div>
</main>
<!-- BottomNavBar (Shared Component) -->
<nav class="fixed bottom-0 w-full z-50 flex justify-around items-center px-4 pt-3 pb-6 bg-white/70 dark:bg-slate-900/70 backdrop-blur-2xl rounded-t-[32px] shadow-[0_-10px_40px_rgba(0,0,0,0.05)] bg-slate-50/50 dark:bg-slate-800/50">
<a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 opacity-60 hover:opacity-100 transition-opacity active:scale-90 duration-300" href="#">
<span class="material-symbols-outlined">restaurant</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] uppercase tracking-widest font-semibold mt-1">Explore</span>
</a>
<a class="flex flex-col items-center justify-center text-orange-700 dark:text-orange-400 relative after:content-[''] after:absolute after:-bottom-1 after:w-1 after:h-1 after:bg-orange-600 after:rounded-full hover:opacity-100 transition-opacity active:scale-90 duration-300" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">receipt_long</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] uppercase tracking-widest font-semibold mt-1">Orders</span>
</a>
<a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 opacity-60 hover:opacity-100 transition-opacity active:scale-90 duration-300" href="#">
<span class="material-symbols-outlined">chat_bubble</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] uppercase tracking-widest font-semibold mt-1">Chat</span>
</a>
<a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 opacity-60 hover:opacity-100 transition-opacity active:scale-90 duration-300" href="#">
<span class="material-symbols-outlined">analytics</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] uppercase tracking-widest font-semibold mt-1">Reports</span>
</a>
<a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 opacity-60 hover:opacity-100 transition-opacity active:scale-90 duration-300" href="#">
<span class="material-symbols-outlined">person</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] uppercase tracking-widest font-semibold mt-1">Profile</span>
</a>
</nav>
</body></html>