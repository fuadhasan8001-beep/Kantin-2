<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Kantin Kita - Pesanan Masuk</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Be+Vietnam+Pro:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary-container": "#fffbff",
                        "on-surface-variant": "#5b403b",
                        "on-error": "#ffffff",
                        "secondary-fixed-dim": "#ffb4a4",
                        "on-tertiary": "#ffffff",
                        "on-error-container": "#93000a",
                        "secondary-fixed": "#ffdad3",
                        "secondary": "#9c4230",
                        "inverse-on-surface": "#ffede9",
                        "inverse-primary": "#ffb4a4",
                        "surface-bright": "#fff8f6",
                        "on-primary": "#ffffff",
                        "primary": "#b22204",
                        "on-secondary": "#ffffff",
                        "on-primary-fixed-variant": "#8d1600",
                        "error-container": "#ffdad6",
                        "surface-container-high": "#ffe2dc",
                        "on-secondary-container": "#762616",
                        "surface-container-highest": "#f9dcd6",
                        "on-tertiary-container": "#fbfcff",
                        "background": "#fff8f6",
                        "surface-container-low": "#fff0ee",
                        "tertiary-fixed-dim": "#76d1ff",
                        "on-surface": "#271815",
                        "surface-container-lowest": "#ffffff",
                        "tertiary-container": "#007ea7",
                        "outline-variant": "#e3beb6",
                        "on-tertiary-fixed": "#001e2c",
                        "on-primary-fixed": "#3e0500",
                        "outline": "#8f7069",
                        "tertiary-fixed": "#c2e8ff",
                        "tertiary": "#006385",
                        "surface": "#fff8f6",
                        "error": "#ba1a1a",
                        "secondary-container": "#ff8f77",
                        "surface-tint": "#b62506",
                        "on-secondary-fixed-variant": "#7d2c1b",
                        "surface-container": "#ffe9e5",
                        "surface-variant": "#f9dcd6",
                        "primary-fixed": "#ffdad3",
                        "on-background": "#271815",
                        "surface-dim": "#f0d4ce",
                        "primary-fixed-dim": "#ffb4a4",
                        "on-tertiary-fixed-variant": "#004d67",
                        "on-secondary-fixed": "#3e0500",
                        "primary-container": "#d63c1e",
                        "inverse-surface": "#3e2c29"
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
                }
            }
        }
    </script>
<style>
        body { font-family: 'Be Vietnam Pro', sans-serif; }
        .font-headline { font-family: 'Plus Jakarta Sans', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-surface text-on-surface">
<!-- Sidebar Navigation -->
<aside class="h-screen w-64 fixed left-0 top-0 flex flex-col bg-surface-container-lowest border-r-0 bg-surface-container-low z-50">
<div class="p-6">
<h1 class="text-xl font-black text-primary font-headline">Kantin Kita</h1>
<p class="text-xs font-medium text-on-surface-variant/70 tracking-wider uppercase">Seller Center</p>
</div>
<nav class="flex flex-col h-full p-4 gap-2">
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-all font-['Plus_Jakarta_Sans'] font-medium text-sm active:scale-[0.98] duration-150" href="#">
<span class="material-symbols-outlined">dashboard</span>
                Dashboard
            </a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-all font-['Plus_Jakarta_Sans'] font-medium text-sm active:scale-[0.98] duration-150" href="#">
<span class="material-symbols-outlined">restaurant_menu</span>
                Kelola Menu
            </a>
<a class="flex items-center gap-3 px-4 py-3 bg-primary/10 text-primary rounded-xl font-bold font-['Plus_Jakarta_Sans'] text-sm active:scale-[0.98] duration-150" href="#">
<span class="material-symbols-outlined">pending_actions</span>
                Pesanan Masuk
            </a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-all font-['Plus_Jakarta_Sans'] font-medium text-sm active:scale-[0.98] duration-150" href="#">
<span class="material-symbols-outlined">history</span>
                Riwayat Pesanan
            </a>
<div class="mt-auto pt-4 border-t border-outline-variant/10">
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-all font-['Plus_Jakarta_Sans'] font-medium text-sm active:scale-[0.98] duration-150" href="#">
<span class="material-symbols-outlined">logout</span>
                    Logout
                </a>
</div>
</nav>
</aside>
<!-- Main Content Area -->
<main class="ml-64 min-h-screen bg-surface">
<!-- Top Nav Bar -->
<header class="bg-surface/80 backdrop-blur-xl sticky top-0 z-40 shadow-sm flex justify-between items-center w-full px-8 py-4">
<div class="flex flex-col">
<h2 class="text-2xl font-extrabold text-primary tracking-tighter font-headline">Pesanan Masuk</h2>
<p class="text-sm text-on-surface-variant font-medium">Kelola pesanan pelanggan yang masuk hari ini.</p>
</div>
<div class="flex items-center gap-4">
<div class="relative group">
<div class="flex items-center gap-2 px-4 py-2 bg-surface-container-high rounded-full transition-colors group-hover:bg-primary/5 cursor-pointer">
<img alt="Seller Profile Avatar" class="w-8 h-8 rounded-full object-cover border-2 border-primary-container" data-alt="close up professional portrait of a smiling Indonesian chef in a clean white kitchen setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8bF4_Ug_-YrVCW_a6RPDloVK3KfVTxtFfc0KsMS7T_v7JWoBymX5wE0JUrlgEbUYU29MwfstESsELwhVdyUrMKOAxoSYbvrfDqvwpftLFJaAGnt_5i3x5B0kxFzQ8Q1sizYVcglqxWYftiHM_3wGIeCtvoxfmayTSHJWIYEb70RYkauveQUH704WrXv2m2wuoNZ_UjCOcc8jbgFP1-YlNu0rwsP9AFNwC7amFFRgJkLlAR5Q1RV5EIJUyfAd-f8tHMBs9E_-N30M"/>
<span class="text-sm font-semibold text-on-surface">Warung Bu Endang</span>
<span class="material-symbols-outlined text-sm">keyboard_arrow_down</span>
</div>
</div>
<button class="w-10 h-10 rounded-full flex items-center justify-center bg-surface-container-high text-on-surface-variant hover:bg-primary/10 transition-colors">
<span class="material-symbols-outlined">notifications</span>
</button>
</div>
</header>
<!-- Page Canvas -->
<div class="p-8 max-w-6xl mx-auto">
<!-- Filter / Statistics Section (Editorial Spacing) -->
<div class="flex items-end justify-between mb-8">
<div class="grid grid-cols-3 gap-6 w-full max-w-2xl">
<div class="bg-primary/5 p-5 rounded-2xl border-l-4 border-primary">
<p class="text-xs font-bold text-primary tracking-widest uppercase mb-1">Total Hari Ini</p>
<p class="text-3xl font-extrabold text-on-surface font-headline tracking-tight">24</p>
</div>
<div class="bg-tertiary/5 p-5 rounded-2xl border-l-4 border-tertiary">
<p class="text-xs font-bold text-tertiary tracking-widest uppercase mb-1">Konfirmasi</p>
<p class="text-3xl font-extrabold text-on-surface font-headline tracking-tight">8</p>
</div>
<div class="bg-secondary-container/10 p-5 rounded-2xl border-l-4 border-secondary">
<p class="text-xs font-bold text-secondary tracking-widest uppercase mb-1">Pendapatan</p>
<p class="text-3xl font-extrabold text-on-surface font-headline tracking-tight">Rp 842k</p>
</div>
</div>
<div class="flex gap-2 mb-1">
<button class="px-4 py-2 rounded-sm bg-primary text-on-primary text-sm font-bold shadow-md">Semua</button>
<button class="px-4 py-2 rounded-sm bg-surface-container-high text-on-surface-variant text-sm font-medium hover:bg-primary/5 transition-colors">Menunggu</button>
<button class="px-4 py-2 rounded-sm bg-surface-container-high text-on-surface-variant text-sm font-medium hover:bg-primary/5 transition-colors">Diproses</button>
</div>
</div>
<!-- Orders List (Asymmetric Editorial Style) -->
<div class="space-y-6">
<!-- Order Card 1: Urgent / New -->
<div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm flex flex-col md:flex-row gap-6 relative overflow-hidden group hover:shadow-md transition-all border-l-[6px] border-primary">
<div class="flex-1">
<div class="flex items-center gap-3 mb-4">
<span class="text-xs font-bold bg-primary-container text-on-primary-container px-3 py-1 rounded-full">NEW ORDER</span>
<span class="text-sm font-bold text-on-surface-variant">#ORD-20231012-001</span>
<span class="text-xs text-on-surface-variant/60 ml-auto flex items-center gap-1">
<span class="material-symbols-outlined text-sm">schedule</span>
                                2 menit yang lalu
                            </span>
</div>
<div class="flex items-start gap-4">
<div class="w-12 h-12 rounded-full bg-surface-container-high flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary">person</span>
</div>
<div class="flex-1">
<h3 class="text-lg font-bold text-on-surface font-headline">Budi Santoso</h3>
<p class="text-sm text-on-surface-variant mb-4">Meja 12 (Dine-in)</p>
<div class="bg-surface-container-low/50 p-4 rounded-lg">
<ul class="space-y-2">
<li class="flex justify-between items-center text-sm">
<span class="font-medium text-on-surface"><span class="text-primary font-bold">2x</span> Nasi Goreng Spesial</span>
<span class="text-on-surface-variant">Rp 56.000</span>
</li>
<li class="flex justify-between items-center text-sm">
<span class="font-medium text-on-surface"><span class="text-primary font-bold">1x</span> Teh Manis Hangat</span>
<span class="text-on-surface-variant">Rp 8.000</span>
</li>
<li class="flex justify-between items-center text-sm border-t border-outline-variant/20 pt-2 mt-2">
<span class="font-bold text-on-surface">Total Pesanan</span>
<span class="font-bold text-primary text-base">Rp 64.000</span>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="md:w-64 flex flex-col justify-between border-l border-outline-variant/20 md:pl-6 pt-6 md:pt-0">
<div class="space-y-4">
<div>
<p class="text-[10px] font-bold text-on-surface-variant tracking-widest uppercase mb-1">Status Pembayaran</p>
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-sm bg-tertiary-fixed text-on-tertiary-fixed text-xs font-bold uppercase">
<span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                    Lunas
                                </span>
</div>
<div>
<p class="text-[10px] font-bold text-on-surface-variant tracking-widest uppercase mb-1">Status Pesanan</p>
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-sm bg-primary/10 text-primary text-xs font-bold uppercase">
                                    Menunggu Konfirmasi
                                </span>
</div>
</div>
<div class="flex flex-col gap-2 mt-6">
<button class="w-full py-3 bg-gradient-to-r from-primary to-primary-container text-on-primary rounded-full font-bold text-sm shadow-lg shadow-primary/20 active:scale-95 transition-all">
                                Terima Pesanan
                            </button>
<button class="w-full py-2 bg-transparent text-error font-semibold text-sm hover:bg-error/5 rounded-full transition-all">
                                Tolak
                            </button>
</div>
</div>
</div>
<!-- Order Card 2: Processing -->
<div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm flex flex-col md:flex-row gap-6 relative overflow-hidden group hover:shadow-md transition-all border-l-[6px] border-tertiary">
<div class="flex-1">
<div class="flex items-center gap-3 mb-4">
<span class="text-xs font-bold bg-tertiary-container text-on-tertiary-container px-3 py-1 rounded-full uppercase">Processing</span>
<span class="text-sm font-bold text-on-surface-variant">#ORD-20231012-015</span>
<span class="text-xs text-on-surface-variant/60 ml-auto flex items-center gap-1">
<span class="material-symbols-outlined text-sm">schedule</span>
                                15 menit yang lalu
                            </span>
</div>
<div class="flex items-start gap-4">
<div class="w-12 h-12 rounded-full bg-surface-container-high flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-tertiary">person</span>
</div>
<div class="flex-1">
<h3 class="text-lg font-bold text-on-surface font-headline">Siska Putri</h3>
<p class="text-sm text-on-surface-variant mb-4">Takeaway</p>
<div class="bg-surface-container-low/50 p-4 rounded-lg">
<ul class="space-y-2">
<li class="flex justify-between items-center text-sm">
<span class="font-medium text-on-surface"><span class="text-tertiary font-bold">1x</span> Ayam Bakar Taliwang</span>
<span class="text-on-surface-variant">Rp 42.000</span>
</li>
<li class="flex justify-between items-center text-sm">
<span class="font-medium text-on-surface"><span class="text-tertiary font-bold">1x</span> Es Kelapa Muda</span>
<span class="text-on-surface-variant">Rp 15.000</span>
</li>
<li class="flex justify-between items-center text-sm border-t border-outline-variant/20 pt-2 mt-2">
<span class="font-bold text-on-surface">Total Pesanan</span>
<span class="font-bold text-tertiary text-base">Rp 57.000</span>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="md:w-64 flex flex-col justify-between border-l border-outline-variant/20 md:pl-6 pt-6 md:pt-0">
<div class="space-y-4">
<div>
<p class="text-[10px] font-bold text-on-surface-variant tracking-widest uppercase mb-1">Status Pembayaran</p>
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-sm bg-tertiary-fixed text-on-tertiary-fixed text-xs font-bold uppercase">
<span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                    Lunas
                                </span>
</div>
<div>
<p class="text-[10px] font-bold text-on-surface-variant tracking-widest uppercase mb-1">Status Pesanan</p>
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-sm bg-tertiary/10 text-tertiary text-xs font-bold uppercase">
                                    Diproses
                                </span>
</div>
</div>
<div class="flex flex-col gap-2 mt-6">
<button class="w-full py-3 border-2 border-tertiary text-tertiary rounded-full font-bold text-sm hover:bg-tertiary/5 active:scale-95 transition-all">
                                Update Status
                            </button>
</div>
</div>
</div>
<!-- Order Card 3: COD / Pending Payment -->
<div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm flex flex-col md:flex-row gap-6 relative overflow-hidden group hover:shadow-md transition-all border-l-[6px] border-on-surface-variant/20">
<div class="flex-1">
<div class="flex items-center gap-3 mb-4">
<span class="text-xs font-bold bg-surface-container-highest text-on-surface-variant px-3 py-1 rounded-full uppercase">COD</span>
<span class="text-sm font-bold text-on-surface-variant">#ORD-20231012-012</span>
<span class="text-xs text-on-surface-variant/60 ml-auto flex items-center gap-1">
<span class="material-symbols-outlined text-sm">schedule</span>
                                45 menit yang lalu
                            </span>
</div>
<div class="flex items-start gap-4">
<div class="w-12 h-12 rounded-full bg-surface-container-high flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-on-surface-variant">person</span>
</div>
<div class="flex-1">
<h3 class="text-lg font-bold text-on-surface font-headline">Dewi Lestari</h3>
<p class="text-sm text-on-surface-variant mb-4">Meja 5 (Dine-in)</p>
<div class="bg-surface-container-low/50 p-4 rounded-lg">
<ul class="space-y-2">
<li class="flex justify-between items-center text-sm">
<span class="font-medium text-on-surface"><span class="text-secondary font-bold">1x</span> Soto Ayam Lamongan</span>
<span class="text-on-surface-variant">Rp 28.000</span>
</li>
<li class="flex justify-between items-center text-sm">
<span class="font-medium text-on-surface"><span class="text-secondary font-bold">1x</span> Jeruk Peras</span>
<span class="text-on-surface-variant">Rp 12.000</span>
</li>
<li class="flex justify-between items-center text-sm border-t border-outline-variant/20 pt-2 mt-2">
<span class="font-bold text-on-surface">Total Pesanan</span>
<span class="font-bold text-secondary text-base">Rp 40.000</span>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="md:w-64 flex flex-col justify-between border-l border-outline-variant/20 md:pl-6 pt-6 md:pt-0">
<div class="space-y-4">
<div>
<p class="text-[10px] font-bold text-on-surface-variant tracking-widest uppercase mb-1">Status Pembayaran</p>
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-sm bg-error-container text-on-error-container text-xs font-bold uppercase">
<span class="material-symbols-outlined text-xs">pending</span>
                                    Belum Bayar
                                </span>
</div>
<div>
<p class="text-[10px] font-bold text-on-surface-variant tracking-widest uppercase mb-1">Status Pesanan</p>
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-sm bg-surface-container-highest text-on-surface-variant text-xs font-bold uppercase">
                                    Menunggu Konfirmasi
                                </span>
</div>
</div>
<div class="flex flex-col gap-2 mt-6">
<button class="w-full py-3 bg-gradient-to-r from-primary to-primary-container text-on-primary rounded-full font-bold text-sm shadow-lg shadow-primary/20 active:scale-95 transition-all">
                                Terima Pesanan
                            </button>
<button class="w-full py-2 bg-transparent text-error font-semibold text-sm hover:bg-error/5 rounded-full transition-all">
                                Tolak
                            </button>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- FAB for quick actions - only on relevant pages -->
<button class="fixed bottom-8 right-8 w-14 h-14 bg-gradient-to-tr from-primary to-primary-container text-on-primary rounded-full flex items-center justify-center shadow-xl hover:scale-110 active:scale-95 transition-all z-50">
<span class="material-symbols-outlined text-3xl">add</span>
</button>
</body></html>