<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>The Culinary Curator - Dashboard Manajemen Produk</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Be+Vietnam+Pro:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "on-primary-fixed": "#3e0500",
                      "primary-container": "#d63c1e",
                      "inverse-surface": "#3e2c29",
                      "on-tertiary-container": "#fbfcff",
                      "on-secondary": "#ffffff",
                      "on-primary-container": "#fffbff",
                      "surface-container-highest": "#f9dcd6",
                      "on-surface-variant": "#5b403b",
                      "inverse-primary": "#ffb4a4",
                      "on-secondary-container": "#762616",
                      "surface-variant": "#f9dcd6",
                      "surface-bright": "#fff8f6",
                      "primary": "#b22204",
                      "tertiary-fixed": "#c2e8ff",
                      "primary-fixed": "#ffdad3",
                      "error": "#ba1a1a",
                      "surface": "#fff8f6",
                      "surface-dim": "#f0d4ce",
                      "tertiary-container": "#007ea7",
                      "outline-variant": "#e3beb6",
                      "on-tertiary-fixed": "#001e2c",
                      "on-surface": "#271815",
                      "surface-container": "#ffe9e5",
                      "on-background": "#271815",
                      "error-container": "#ffdad6",
                      "inverse-on-surface": "#ffede9",
                      "on-primary": "#ffffff",
                      "surface-container-lowest": "#ffffff",
                      "surface-container-low": "#fff0ee",
                      "secondary": "#9c4230",
                      "on-tertiary-fixed-variant": "#004d67",
                      "on-secondary-fixed-variant": "#7d2c1b",
                      "on-primary-fixed-variant": "#8d1600",
                      "surface-container-high": "#ffe2dc",
                      "tertiary": "#006385",
                      "on-tertiary": "#ffffff",
                      "surface-tint": "#b62506",
                      "primary-fixed-dim": "#ffb4a4",
                      "outline": "#8f7069",
                      "on-secondary-fixed": "#3e0500",
                      "on-error-container": "#93000a",
                      "tertiary-fixed-dim": "#76d1ff",
                      "secondary-fixed-dim": "#ffb4a4",
                      "on-error": "#ffffff",
                      "secondary-container": "#ff8f77",
                      "secondary-fixed": "#ffdad3",
                      "background": "#fff8f6"
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
        h1, h2, h3, .brand-font { font-family: 'Plus Jakarta Sans', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #e3beb6; border-radius: 10px; }
    </style>
</head>
<body class="bg-surface text-on-surface antialiased">
<!-- TopAppBar -->
<header class="fixed top-0 w-full z-50 bg-white/80 dark:bg-stone-950/80 backdrop-blur-md shadow-sm dark:shadow-none">
<div class="flex justify-between items-center px-6 py-4 w-full max-w-7xl mx-auto">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-orange-700 dark:text-orange-500 text-2xl" data-icon="restaurant_menu">restaurant_menu</span>
<span class="text-xl font-extrabold tracking-tighter text-orange-700 dark:text-orange-500">The Culinary Curator</span>
</div>
<div class="flex items-center gap-4">
<button class="p-2 rounded-full hover:bg-stone-100 dark:hover:bg-stone-800 transition-colors active:scale-95 duration-200">
<span class="material-symbols-outlined text-stone-500 dark:text-stone-400" data-icon="search">search</span>
</button>
<button class="p-2 rounded-full hover:bg-stone-100 dark:hover:bg-stone-800 transition-colors active:scale-95 duration-200">
<span class="material-symbols-outlined text-stone-500 dark:text-stone-400" data-icon="notifications">notifications</span>
</button>
<div class="hidden md:flex items-center gap-3 pl-4 border-l border-outline-variant/30">
<div class="text-right">
<p class="text-sm font-bold text-on-surface">Admin Curator</p>
<p class="text-[10px] uppercase tracking-widest text-outline font-semibold">Seller Portal</p>
</div>
<img class="w-10 h-10 rounded-full object-cover" data-alt="professional portrait of a culinary administrator in a bright office setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBf_-GgeqEGM1eOfYWvvJhyPYV9xyQtr1KWso28czrKnDVfeNrTVtU2nWu2fL8K6lAtGSyku18taNvaV2UaiHfrJ5hrYuTijosXYfjYVA00q5ee7qsVw0L6iC74cHvaZZgxI0tWzIP9gdv3UFkN8C3Mw42LH0Jj6r6wCjc67MxgDC5F10JdyLi9Z16IkIjvKlADo8OEkeuXM1J9hFge452f02ckpbzvuGpf2Lic75AmE4JYEgCkt_kkqSEiecbOBYrHKKlJ08gxJLo"/>
</div>
</div>
</div>
</header>
<!-- NavigationDrawer (Desktop Only) -->
<aside class="hidden md:flex flex-col h-screen fixed left-0 top-0 w-72 bg-stone-50 dark:bg-stone-950 border-r border-stone-200 dark:border-stone-800 z-40 pt-24">
<nav class="flex-1 px-4 space-y-2">
<a class="flex items-center text-stone-600 dark:text-stone-400 hover:bg-stone-200 dark:hover:bg-stone-800 rounded-lg mx-2 my-1 px-4 py-3 font-medium transition-all" href="dashboard_penjual.php">
<span class="material-symbols-outlined mr-3" data-icon="dashboard">dashboard</span>
                Dashboard
            </a>
<a class="flex items-center bg-orange-600 text-white shadow-lg shadow-orange-700/20 rounded-lg mx-2 my-1 px-4 py-3 font-medium transition-all" href="manajemen_produk_seller_center.php">
<span class="material-symbols-outlined mr-3" data-icon="menu_book">menu_book</span>
                Menu Management
            </a>
<a class="flex items-center text-stone-600 dark:text-stone-400 hover:bg-stone-200 dark:hover:bg-stone-800 rounded-lg mx-2 my-1 px-4 py-3 font-medium transition-all" href="pesanan_masuk_penjual.php">
<span class="material-symbols-outlined mr-3" data-icon="list_alt">list_alt</span>
                Orders
            </a>
<a class="flex items-center text-stone-600 dark:text-stone-400 hover:bg-stone-200 dark:hover:bg-stone-800 rounded-lg mx-2 my-1 px-4 py-3 font-medium transition-all" href="riwayat_pesanan_penjual.php">
<span class="material-symbols-outlined mr-3" data-icon="insights">insights</span>
                Analytics
            </a>
<a class="flex items-center text-stone-600 dark:text-stone-400 hover:bg-stone-200 dark:hover:bg-stone-800 rounded-lg mx-2 my-1 px-4 py-3 font-medium transition-all" href="dashboard_penjual.php">
<span class="material-symbols-outlined mr-3" data-icon="settings">settings</span>
                Settings
            </a>
</nav>
<div class="p-6">
<div class="bg-orange-50 dark:bg-orange-950/20 p-4 rounded-2xl">
<p class="text-xs font-bold text-orange-700 uppercase tracking-tighter mb-1">Status Toko</p>
<div class="flex items-center gap-2">
<div class="w-2 h-2 rounded-full bg-green-500"></div>
<span class="text-sm font-medium text-on-surface">Buka Sekarang</span>
</div>
</div>
</div>
</aside>
<!-- Main Canvas -->
<main class="md:ml-72 pt-24 pb-32 px-6 lg:px-12 max-w-7xl mx-auto min-h-screen">
<!-- Dashboard Header & CTA -->
<section class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
<div>
<h1 class="text-4xl font-extrabold tracking-tight text-on-surface mb-2">Manajemen Produk</h1>
<p class="text-outline max-w-md">Kurasi koleksi hidangan terbaik Anda. Atur stok, harga, dan varian dengan mudah untuk pengalaman pelanggan yang maksimal.</p>
</div>
<button class="bg-gradient-to-tr from-primary to-primary-container text-white px-8 py-4 rounded-full font-bold shadow-xl shadow-primary/20 flex items-center gap-3 active:scale-95 transition-transform">
<span class="material-symbols-outlined" data-icon="add">add</span>
                Tambah Produk
            </button>
</section>
<!-- Bento Grid Statistics -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
<div class="bg-surface-container-low p-6 rounded-[24px] relative overflow-hidden group">
<div class="relative z-10">
<p class="text-sm font-semibold uppercase tracking-widest text-outline mb-4">Total Menu</p>
<h3 class="text-5xl font-black text-on-surface">42</h3>
<p class="text-xs text-orange-700 font-bold mt-2">+5 menu bulan ini</p>
</div>
<span class="material-symbols-outlined absolute -bottom-4 -right-4 text-9xl text-orange-200/20 rotate-12 group-hover:scale-110 transition-transform" data-icon="restaurant">restaurant</span>
</div>
<div class="bg-surface-container-high p-6 rounded-[24px] flex flex-col justify-between">
<div>
<p class="text-sm font-semibold uppercase tracking-widest text-outline mb-4">Stok Rendah</p>
<div class="flex items-center gap-3">
<h3 class="text-5xl font-black text-primary">03</h3>
<span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-xs font-bold uppercase tracking-tighter">Perlu Restok</span>
</div>
</div>
<div class="flex -space-x-2 mt-4">
<img class="w-8 h-8 rounded-full border-2 border-white" data-alt="bowl of healthy salad with avocado and egg" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1jlGtBhU4mLDfRfOcgyvxC-PN87YkHdlQI0aluw-JdSeKlmTyPJNkWLO2AdEZfd704P6eT4kwQm_3zRWCFQP_72G4GkC8txijMv-NKBTF2Oe2rWzw_EZjKOGzGYX75VnHwFISTfD3lX9KEIQFbcZQDb0oWDyC59vgK_NGO7QTr1g9pJGIM9jh6mfU09y2sW6NLYjZPKeEp7PtnL17Osywjmuo8SrUISpUaC-XTtcXdT2xaf-6nU0brNR_IbEeKmyCVvb-v2cEs8w"/>
<img class="w-8 h-8 rounded-full border-2 border-white" data-alt="stacked fluffy pancakes with syrup and berries" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_8HiFEJYmgOfDeq8s9STps7rhTu-478q-CkyLrAr5_npYNpjzKed_iZrHt_hpQuxwwvGwMatfAaooSDn_cD3EYxInHYtkHU4c7yaOkR4Iq-SSoB731c03-ljRn24O7uRFxyG_EIuV2-GCwFb96ToiGL76TX9rnqnCvyexicwYpwDOpWKj3R1BUmbt7QaYqMNGcmq1g2qdXzlHd4OQpYz1MR6tKARF8n9wL0czsir06qEKXXwINQJ0-vg1KrByGIeVFgeV4g6TgwU"/>
</div>
</div>
<div class="bg-tertiary-container p-6 rounded-[24px] text-white">
<p class="text-sm font-semibold uppercase tracking-widest opacity-80 mb-4">Pendapatan Menu</p>
<h3 class="text-4xl font-black mb-1">Rp 12.4M</h3>
<p class="text-xs opacity-70">Estimasi nilai inventory saat ini</p>
<div class="mt-6 flex justify-end">
<span class="material-symbols-outlined text-4xl" data-icon="trending_up">trending_up</span>
</div>
</div>
</section>
<!-- Product Grid - Asymmetric Layout -->
<section class="mb-16">
<div class="flex items-center justify-between mb-8">
<h2 class="text-2xl font-bold tracking-tight">Katalog Produk</h2>
<div class="flex gap-2">
<button class="bg-surface-container-highest p-2 rounded-lg text-primary"><span class="material-symbols-outlined" data-icon="grid_view">grid_view</span></button>
<button class="hover:bg-surface-container-high p-2 rounded-lg text-outline transition-colors"><span class="material-symbols-outlined" data-icon="list">list</span></button>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Product Card 1 -->
<div class="bg-surface-container-lowest rounded-[32px] overflow-hidden group shadow-[0_8px_32px_rgba(39,24,21,0.04)] hover:shadow-[0_24px_48px_rgba(39,24,21,0.08)] transition-all duration-500">
<div class="h-64 relative overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="exquisite plate of roasted salmon with seasonal vegetables and microgreens" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFkMIw_LOwKMV-upDX44XisqjUE4jBFhvPxk7rMgFirPI2P0u5mQLYrciquzTSPjuy_wH7hszei8XruLtVqy_ZAhgyovTaQo4qWxEa3ikE95JzRO2535HNl3fdlAKM6Z5vCBQNgs7_Pt0bZSkg6e2n112OSK8aCV74Mrhudluz8xA9NYxP4sH0Ub6qUGzRPXaqVTtk8E8gojDLpp5gYjVtKdfZQNDb6_tyDkoLEA2gAZJ9Fm3MJ35emlxPTZo8PrdBuUXeQ-NV4X8"/>
<div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest text-primary">Utama</div>
</div>
<div class="p-8">
<div class="flex justify-between items-start mb-4">
<div>
<h3 class="text-xl font-bold text-on-surface group-hover:text-primary transition-colors mb-1">Grilled Salmon Zen</h3>
<p class="text-xs text-outline font-medium">Japanese Fusion • Seafood</p>
</div>
<span class="text-lg font-black text-orange-700">Rp 185rb</span>
</div>
<div class="flex items-center justify-between pt-4 border-t border-dashed border-outline-variant/40">
<div class="flex flex-col">
<span class="text-[10px] uppercase font-bold text-outline tracking-wider">Stok Tersedia</span>
<span class="text-sm font-black">24 Porsi</span>
</div>
<div class="flex gap-2">
<button class="w-10 h-10 rounded-xl bg-surface-container-low flex items-center justify-center text-outline hover:bg-primary/10 hover:text-primary transition-all"><span class="material-symbols-outlined text-sm" data-icon="edit">edit</span></button>
<button class="w-10 h-10 rounded-xl bg-surface-container-low flex items-center justify-center text-outline hover:bg-error/10 hover:text-error transition-all"><span class="material-symbols-outlined text-sm" data-icon="delete">delete</span></button>
</div>
</div>
</div>
</div>
<!-- Product Card 2 -->
<div class="bg-surface-container-lowest rounded-[32px] overflow-hidden group shadow-[0_8px_32px_rgba(39,24,21,0.04)] hover:shadow-[0_24px_48px_rgba(39,24,21,0.08)] transition-all duration-500">
<div class="h-64 relative overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="premium wagyu beef skewers sizzling on an open flame grill" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbgdtzGPTTURd4zJeys4EqGjZh94t62YKYBfz9M7OkfyQ8-sroJtt0U-cLis4SfEnmz-Xx9_hVm7EfRMrykWdtzB6EgcEuGNVwWjDlBZwIF1o2rKigc8VfRiglEEhq8SYywoJUkS-3rsHI_qSq9KfGEwZWS16ZNfOBaCnlFGP0sHLgfkRFDlOBK7mkvSoB4jeV7gQoCuW7OzNqYesZiWcP230Nijm4P8fze78Zd6CCBKfYWf3OuURIw0c1_gf6HhXsqQhUvAJ4c3A"/>
<div class="absolute top-4 right-4 bg-primary px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest text-white shadow-lg">Terlaris</div>
</div>
<div class="p-8">
<div class="flex justify-between items-start mb-4">
<div>
<h3 class="text-xl font-bold text-on-surface group-hover:text-primary transition-colors mb-1">A5 Wagyu Kushiyaki</h3>
<p class="text-xs text-outline font-medium">Binchotan Grill • Beef</p>
</div>
<span class="text-lg font-black text-orange-700">Rp 420rb</span>
</div>
<div class="flex items-center justify-between pt-4 border-t border-dashed border-outline-variant/40">
<div class="flex flex-col">
<span class="text-[10px] uppercase font-bold text-outline tracking-wider">Stok Tersedia</span>
<span class="text-sm font-black text-error">03 Porsi</span>
</div>
<div class="flex gap-2">
<button class="w-10 h-10 rounded-xl bg-surface-container-low flex items-center justify-center text-outline hover:bg-primary/10 hover:text-primary transition-all"><span class="material-symbols-outlined text-sm" data-icon="edit">edit</span></button>
<button class="w-10 h-10 rounded-xl bg-surface-container-low flex items-center justify-center text-outline hover:bg-error/10 hover:text-error transition-all"><span class="material-symbols-outlined text-sm" data-icon="delete">delete</span></button>
</div>
</div>
</div>
</div>
<!-- Product Card 3 -->
<div class="bg-surface-container-lowest rounded-[32px] overflow-hidden group shadow-[0_8px_32px_rgba(39,24,21,0.04)] hover:shadow-[0_24px_48px_rgba(39,24,21,0.08)] transition-all duration-500">
<div class="h-64 relative overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="fresh garden salad with vibrant citrus slices and balsamic glaze drizzle" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6CYak557pcxtPknEoBJN25P1JyM11fRI0X95iLFsBeyS9ucF0LwPHeY3vjS0ey3ZF1YVIiBpWk6AKp1U0_M4d-SYeuMCmgRqRkchPay1_qB7Lbezvn21SdNqQp5EyG2GdWIHrsKUKHRINPkHEfmJSPzmqBaK45IpZ4TUUmNTDka0e-JniDhWASHs2FfAaS-3wq1j2Y4gJiB7dvMnCKhx78lwu8F3B0t1hRhVD_NsiJi6Tt5UHbh4jPGrfWYE-utZCx-nTkhLourQ"/>
</div>
<div class="p-8">
<div class="flex justify-between items-start mb-4">
<div>
<h3 class="text-xl font-bold text-on-surface group-hover:text-primary transition-colors mb-1">Citrus Harvest Salad</h3>
<p class="text-xs text-outline font-medium">Organic • Vegan</p>
</div>
<span class="text-lg font-black text-orange-700">Rp 75rb</span>
</div>
<div class="flex items-center justify-between pt-4 border-t border-dashed border-outline-variant/40">
<div class="flex flex-col">
<span class="text-[10px] uppercase font-bold text-outline tracking-wider">Stok Tersedia</span>
<span class="text-sm font-black">Unlimited</span>
</div>
<div class="flex gap-2">
<button class="w-10 h-10 rounded-xl bg-surface-container-low flex items-center justify-center text-outline hover:bg-primary/10 hover:text-primary transition-all"><span class="material-symbols-outlined text-sm" data-icon="edit">edit</span></button>
<button class="w-10 h-10 rounded-xl bg-surface-container-low flex items-center justify-center text-outline hover:bg-error/10 hover:text-error transition-all"><span class="material-symbols-outlined text-sm" data-icon="delete">delete</span></button>
</div>
</div>
</div>
</div>
</div>
</section>
</main>
<!-- Overlay / Modal for Add Product (Shown by default for visual task representation) -->
<div class="fixed inset-0 z-[100] flex items-center justify-center px-4 md:px-0">
<div class="absolute inset-0 bg-stone-900/60 backdrop-blur-sm"></div>
<div class="relative bg-white dark:bg-stone-900 w-full max-w-2xl max-h-[921px] overflow-hidden rounded-[32px] shadow-2xl flex flex-col">
<!-- Modal Header -->
<div class="px-8 py-6 flex items-center justify-between border-b border-stone-100 dark:border-stone-800">
<h2 class="text-2xl font-bold tracking-tight text-on-surface">Tambah Produk Baru</h2>
<button class="w-10 h-10 rounded-full hover:bg-stone-100 dark:hover:bg-stone-800 transition-colors flex items-center justify-center">
<span class="material-symbols-outlined" data-icon="close">close</span>
</button>
</div>
<!-- Modal Content -->
<div class="flex-1 overflow-y-auto p-8 custom-scrollbar">
<form class="space-y-8">
<!-- Image Upload Section -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="md:col-span-1">
<div class="w-full aspect-square rounded-3xl bg-surface-container-highest flex flex-col items-center justify-center text-outline cursor-pointer border-2 border-dashed border-outline-variant hover:border-primary transition-colors group">
<span class="material-symbols-outlined text-4xl mb-2 group-hover:scale-110 transition-transform" data-icon="add_photo_alternate">add_photo_alternate</span>
<p class="text-[10px] uppercase font-bold text-center px-4">Unggah Foto Utama</p>
</div>
</div>
<div class="md:col-span-2 space-y-4">
<div>
<label class="block text-[10px] uppercase font-black text-outline tracking-widest mb-2">Nama Produk</label>
<div class="relative">
<div class="absolute left-0 top-0 bottom-0 w-1 bg-primary rounded-l-full"></div>
<input class="w-full bg-surface-container-highest border-none rounded-r-xl px-6 py-3 focus:ring-0 text-sm font-medium" placeholder="Contoh: Lobster Thermidor Special" type="text"/>
</div>
</div>
<div>
<label class="block text-[10px] uppercase font-black text-outline tracking-widest mb-2">Harga (IDR)</label>
<input class="w-full bg-surface-container-low border-none rounded-xl px-6 py-3 focus:ring-0 text-sm font-medium" placeholder="150000" type="number"/>
</div>
</div>
</div>
<div>
<label class="block text-[10px] uppercase font-black text-outline tracking-widest mb-2">Deskripsi Produk</label>
<textarea class="w-full bg-surface-container-low border-none rounded-2xl px-6 py-4 focus:ring-0 text-sm font-medium resize-none" placeholder="Ceritakan keistimewaan bahan dan rasa hidangan ini..." rows="4"></textarea>
</div>
<!-- Varian Section -->
<div>
<div class="flex items-center justify-between mb-4">
<label class="text-[10px] uppercase font-black text-outline tracking-widest">Input Varian</label>
<button class="text-xs font-bold text-primary flex items-center gap-1" type="button">
<span class="material-symbols-outlined text-sm" data-icon="add_circle">add_circle</span>
                                Tambah Tipe Varian
                            </button>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-3">
<div class="bg-primary text-white p-3 rounded-xl flex items-center justify-between">
<span class="text-xs font-bold">Pedas</span>
<span class="material-symbols-outlined text-sm cursor-pointer" data-icon="cancel">cancel</span>
</div>
<div class="bg-surface-container-high text-on-surface p-3 rounded-xl flex items-center justify-between">
<span class="text-xs font-bold">Sedang</span>
<span class="material-symbols-outlined text-sm cursor-pointer" data-icon="cancel">cancel</span>
</div>
<div class="bg-surface-container-high text-on-surface p-3 rounded-xl flex items-center justify-between">
<span class="text-xs font-bold">Original</span>
<span class="material-symbols-outlined text-sm cursor-pointer" data-icon="cancel">cancel</span>
</div>
</div>
</div>
<div class="grid grid-cols-2 gap-6">
<div>
<label class="block text-[10px] uppercase font-black text-outline tracking-widest mb-2">Stok Awal</label>
<input class="w-full bg-surface-container-low border-none rounded-xl px-6 py-3 focus:ring-0 text-sm font-medium" type="number" value="0"/>
</div>
<div>
<label class="block text-[10px] uppercase font-black text-outline tracking-widest mb-2">SKU (Opsional)</label>
<input class="w-full bg-surface-container-low border-none rounded-xl px-6 py-3 focus:ring-0 text-sm font-medium" placeholder="SKU-123" type="text"/>
</div>
</div>
</form>
</div>
<!-- Modal Footer -->
<div class="px-8 py-6 bg-surface-container-low/50 flex items-center justify-end gap-4">
<button class="px-6 py-3 text-sm font-bold text-outline hover:text-on-surface transition-colors">Batalkan</button>
<button class="bg-gradient-to-tr from-primary to-primary-container text-white px-10 py-3 rounded-full font-bold shadow-lg shadow-primary/20 active:scale-95 transition-transform">Simpan Produk</button>
</div>
</div>
</div>
<!-- BottomNavBar (Mobile Only) -->
<nav class="md:hidden fixed bottom-0 left-0 w-full flex justify-around items-center px-4 pb-6 pt-3 bg-white/80 dark:bg-stone-900/80 backdrop-blur-xl shadow-[0_-8px_32px_rgba(0,0,0,0.06)] z-50 rounded-t-[32px]">
<a class="flex flex-col items-center justify-center text-stone-400 dark:text-stone-500 px-5 py-2 hover:text-orange-600 transition-all active:scale-90" href="dashboard_penjual.php">
<span class="material-symbols-outlined" data-icon="home">home</span>
<span class="font-['Plus_Jakarta_Sans'] text-[11px] font-semibold uppercase tracking-widest mt-1">Home</span>
</a>
<a class="flex flex-col items-center justify-center text-stone-400 dark:text-stone-500 px-5 py-2 hover:text-orange-600 transition-all active:scale-90" href="pesanan_masuk_penjual.php">
<span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
<span class="font-['Plus_Jakarta_Sans'] text-[11px] font-semibold uppercase tracking-widest mt-1">Orders</span>
</a>
<a class="flex flex-col items-center justify-center bg-orange-50 dark:bg-orange-950/30 text-orange-700 dark:text-orange-400 rounded-2xl px-5 py-2 hover:text-orange-600 transition-all active:scale-90" href="manajemen_produk_seller_center.php">
<span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
<span class="font-['Plus_Jakarta_Sans'] text-[11px] font-semibold uppercase tracking-widest mt-1">Menu</span>
</a>
<a class="flex flex-col items-center justify-center text-stone-400 dark:text-stone-500 px-5 py-2 hover:text-orange-600 transition-all active:scale-90" href="../halaman_login.php">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="font-['Plus_Jakarta_Sans'] text-[11px] font-semibold uppercase tracking-widest mt-1">Profile</span>
</a>
</nav>
</body></html>