<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Kantin Kita - Management Portal</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Be_Vietnam_Pro:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "tertiary-fixed": "#c2e8ff",
                    "surface-container-highest": "#f9dcd6",
                    "secondary": "#9c4230",
                    "primary-fixed": "#ffdad3",
                    "primary-fixed-dim": "#ffb4a4",
                    "surface-variant": "#f9dcd6",
                    "inverse-on-surface": "#ffede9",
                    "on-surface-variant": "#5b403b",
                    "surface-container-low": "#fff0ee",
                    "surface-container": "#ffe9e5",
                    "on-error": "#ffffff",
                    "on-tertiary-fixed-variant": "#004d67",
                    "secondary-container": "#ff8f77",
                    "surface-container-lowest": "#ffffff",
                    "primary": "#b22204",
                    "tertiary-fixed-dim": "#76d1ff",
                    "secondary-fixed-dim": "#ffb4a4",
                    "on-background": "#271815",
                    "on-secondary": "#ffffff",
                    "on-tertiary": "#ffffff",
                    "outline-variant": "#e3beb6",
                    "on-tertiary-container": "#fbfcff",
                    "on-surface": "#271815",
                    "inverse-primary": "#ffb4a4",
                    "on-tertiary-fixed": "#001e2c",
                    "on-primary": "#ffffff",
                    "error-container": "#ffdad6",
                    "outline": "#8f7069",
                    "on-primary-fixed-variant": "#8d1600",
                    "on-secondary-fixed": "#3e0500",
                    "error": "#ba1a1a",
                    "surface-tint": "#b62506",
                    "on-primary-container": "#fffbff",
                    "tertiary-container": "#007ea7",
                    "primary-container": "#d63c1e",
                    "inverse-surface": "#3e2c29",
                    "on-error-container": "#93000a",
                    "surface": "#fff8f6",
                    "secondary-fixed": "#ffdad3",
                    "on-secondary-fixed-variant": "#7d2c1b",
                    "surface-bright": "#fff8f6",
                    "background": "#fff8f6",
                    "tertiary": "#006385",
                    "on-primary-fixed": "#3e0500",
                    "on-secondary-container": "#762616",
                    "surface-dim": "#f0d4ce",
                    "surface-container-high": "#ffe2dc"
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body { font-family: 'Be Vietnam Pro', sans-serif; }
        h1, h2, h3 { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-surface-container-lowest text-on-surface">
<!-- SideNavBar -->
<aside class="h-screen w-64 fixed left-0 top-0 flex flex-col bg-slate-50 dark:bg-slate-900 font-['Plus_Jakarta_Sans'] text-sm tracking-tight z-50">
<div class="flex flex-col h-full py-6 px-4">
<div class="mb-10 px-4">
<div class="text-xl font-bold text-sky-600 dark:text-sky-400 tracking-tighter">Kantin Kita</div>
<div class="text-[10px] uppercase tracking-[0.2em] text-slate-400 font-bold mt-1">Management Portal</div>
</div>
<nav class="flex-1 space-y-1">
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-sky-500 transition-colors hover:bg-slate-100 dark:hover:bg-slate-800/50 rounded-lg" href="admin_dashboard_overview.php">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-sky-500 transition-colors hover:bg-slate-100 dark:hover:bg-slate-800/50 rounded-lg" href="manajemen_user_admin_panel.php">
<span class="material-symbols-outlined" data-icon="group">group</span>
<span>Management User</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-sky-500 transition-colors hover:bg-slate-100 dark:hover:bg-slate-800/50 rounded-lg" href="admin_manajemen_user_penjual.php">
<span class="material-symbols-outlined" data-icon="storefront">storefront</span>
<span>Management Penjual</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-sky-500 transition-colors hover:bg-slate-100 dark:hover:bg-slate-800/50 rounded-lg" href="admin_manajemen_menu_pesanan.php">
<span class="material-symbols-outlined" data-icon="restaurant_menu">restaurant_menu</span>
<span>Management Menu</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-sky-500 transition-colors hover:bg-slate-100 dark:hover:bg-slate-800/50 rounded-lg" href="daftar_pesanan_admin_panel.php">
<span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
<span>Pesanan</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-sky-600 dark:text-sky-400 font-semibold border-l-4 border-sky-500 bg-sky-50/50 dark:bg-sky-900/20" href="admin_promo_pengaturan.php">
<span class="material-symbols-outlined" data-icon="analytics">analytics</span>
<span>Laporan</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-sky-500 transition-colors hover:bg-slate-100 dark:hover:bg-slate-800/50 rounded-lg" href="admin_promo_pengaturan.php">
<span class="material-symbols-outlined" data-icon="sell">sell</span>
<span>Promo</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-sky-500 transition-colors hover:bg-slate-100 dark:hover:bg-slate-800/50 rounded-lg" href="../beri_rating_ulasan.php">
<span class="material-symbols-outlined" data-icon="rate_review">rate_review</span>
<span>Review</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-sky-500 transition-colors hover:bg-slate-100 dark:hover:bg-slate-800/50 rounded-lg" href="admin_promo_pengaturan.php">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span>Pengaturan</span>
</a>
</nav>
<div class="mt-auto pt-6 px-4">
<div class="flex items-center gap-3 p-3 bg-white dark:bg-slate-800 rounded-xl shadow-sm">
<img class="w-10 h-10 rounded-full object-cover" data-alt="professional portrait of a male administrative manager in a modern office setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBwn4oLud0ci3W-BQOeBMdmKX_qxftaP6TpOQW58f0QoeLUphF5jd7W1ez8llmMkxlFU2fP6-X-P99l0TKKrxuwJda-YMfx7zuHb2jZcZFqOUVdVTGiX-btdnlrvB7PLJHsIYDtFRIjUQ1E1FPcOERaFwfGnGIk8xJKo8T66w9aRZdVkz6-PIrTDZn-KtKU55CxK_nnUenCc_-Lu8kmUjLLx2p_IZQaJ81zC5vMzdFA_E8tAsRImHS5Z0t4aNqApo6pEfb7q9hhg3I"/>
<div class="overflow-hidden">
<p class="font-bold truncate">Admin Kantin</p>
<p class="text-[10px] text-slate-400 truncate">Super Admin</p>
</div>
</div>
</div>
</div>
</aside>
<!-- Main Content Area -->
<main class="ml-64 min-h-screen pb-12">
<!-- TopNavBar -->
<header class="fixed top-0 right-0 w-[calc(100%-16rem)] h-16 z-40 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border-b border-slate-100/50 dark:border-slate-800/50 shadow-sm dark:shadow-none flex items-center justify-between px-8 font-['Be_Vietnam_Pro'] text-sm">
<div class="flex items-center bg-slate-100 dark:bg-slate-800 rounded-full px-4 py-2 w-96">
<span class="material-symbols-outlined text-slate-400 mr-2" data-icon="search">search</span>
<input class="bg-transparent border-none focus:ring-0 w-full text-xs" placeholder="Cari laporan atau data promo..." type="text"/>
</div>
<div class="flex items-center gap-4">
<button class="hover:text-sky-500 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-full p-2 transition-all">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<button class="hover:text-sky-500 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-full p-2 transition-all">
<span class="material-symbols-outlined" data-icon="apps">apps</span>
</button>
<div class="h-8 w-[1px] bg-slate-200 dark:bg-slate-700 mx-2"></div>
<div class="flex items-center gap-2">
<span class="font-medium">Administrator</span>
<div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white text-[10px] font-bold">AK</div>
</div>
</div>
</header>
<!-- Canvas -->
<div class="mt-24 px-8 space-y-10">
<!-- Section 2: Financial Report Summary (First for Visibility) -->
<section>
<div class="flex items-end justify-between mb-6">
<div>
<h2 class="text-2xl font-bold tracking-tight text-on-background">Laporan Keuangan</h2>
<p class="text-on-surface-variant text-sm mt-1">Ringkasan pendapatan platform dan komisi admin</p>
</div>
<div class="flex gap-3">
<button class="flex items-center gap-2 px-4 py-2 rounded-full border border-outline-variant text-sm font-medium hover:bg-surface-container-low transition-colors">
<span class="material-symbols-outlined text-sm" data-icon="picture_as_pdf">picture_as_pdf</span>
                            PDF
                        </button>
<button class="flex items-center gap-2 px-4 py-2 rounded-full border border-outline-variant text-sm font-medium hover:bg-surface-container-low transition-colors">
<span class="material-symbols-outlined text-sm" data-icon="table_view">table_view</span>
                            Excel
                        </button>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-surface-container-low rounded-2xl p-6 relative overflow-hidden group">
<div class="relative z-10">
<p class="text-sm font-medium text-on-surface-variant uppercase tracking-wider">Total Pendapatan Platform</p>
<h3 class="text-3xl font-extrabold mt-2 text-primary">Rp 45.230.000</h3>
<p class="text-xs text-green-600 mt-4 flex items-center gap-1">
<span class="material-symbols-outlined text-xs" data-icon="trending_up">trending_up</span>
                                +12.5% dari bulan lalu
                            </p>
</div>
<span class="material-symbols-outlined absolute -bottom-4 -right-4 text-9xl text-primary/5 group-hover:scale-110 transition-transform duration-500" data-icon="payments">payments</span>
</div>
<div class="bg-surface-container-low rounded-2xl p-6 relative overflow-hidden group">
<div class="relative z-10">
<p class="text-sm font-medium text-on-surface-variant uppercase tracking-wider">Komisi Admin (10%)</p>
<h3 class="text-3xl font-extrabold mt-2 text-tertiary">Rp 4.523.000</h3>
<p class="text-xs text-on-surface-variant mt-4">Bersih setelah biaya transaksi</p>
</div>
<span class="material-symbols-outlined absolute -bottom-4 -right-4 text-9xl text-tertiary/5 group-hover:scale-110 transition-transform duration-500" data-icon="account_balance_wallet">account_balance_wallet</span>
</div>
<div class="bg-surface-container-low rounded-2xl p-6 relative overflow-hidden group">
<div class="relative z-10">
<p class="text-sm font-medium text-on-surface-variant uppercase tracking-wider">Total Pesanan Selesai</p>
<h3 class="text-3xl font-extrabold mt-2 text-on-surface">1,284</h3>
<p class="text-xs text-on-surface-variant mt-4 flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-green-500"></span> 98% Tingkat keberhasilan
                            </p>
</div>
<span class="material-symbols-outlined absolute -bottom-4 -right-4 text-9xl text-on-surface/5 group-hover:scale-110 transition-transform duration-500" data-icon="task_alt">task_alt</span>
</div>
</div>
</section>
<!-- Section 1: Promo Management -->
<section class="grid grid-cols-1 lg:grid-cols-12 gap-8">
<div class="lg:col-span-4 space-y-6">
<div class="bg-surface rounded-2xl p-6 border-l-4 border-primary shadow-sm">
<h3 class="text-lg font-bold mb-6">Buat Promo Baru</h3>
<form class="space-y-4">
<div class="space-y-1">
<label class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest pl-1">Nama Promo</label>
<input class="w-full bg-surface-container-highest border-none rounded-lg focus:ring-0 text-sm py-3 px-4" placeholder="Contoh: Promo Tanggal Muda" type="text"/>
</div>
<div class="grid grid-cols-2 gap-4">
<div class="space-y-1">
<label class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest pl-1">Diskon (%)</label>
<input class="w-full bg-surface-container-highest border-none rounded-lg focus:ring-0 text-sm py-3 px-4" placeholder="10" type="number"/>
</div>
<div class="space-y-1">
<label class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest pl-1">Max Potongan</label>
<input class="w-full bg-surface-container-highest border-none rounded-lg focus:ring-0 text-sm py-3 px-4" placeholder="10000" type="number"/>
</div>
</div>
<div class="space-y-1">
<label class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest pl-1">Periode Promo</label>
<div class="flex items-center bg-surface-container-highest rounded-lg px-3">
<span class="material-symbols-outlined text-sm text-on-surface-variant" data-icon="calendar_today">calendar_today</span>
<input class="bg-transparent border-none focus:ring-0 text-xs w-full py-3 px-2" type="date"/>
</div>
</div>
<button class="w-full mt-4 bg-gradient-to-r from-primary to-primary-container text-white font-bold py-3 rounded-full shadow-lg hover:opacity-90 active:scale-95 transition-all">
                                Publikasikan Promo
                            </button>
</form>
</div>
</div>
<div class="lg:col-span-8">
<div class="bg-white dark:bg-slate-800 rounded-2xl overflow-hidden shadow-sm">
<div class="p-6 flex items-center justify-between border-b border-slate-50 dark:border-slate-700">
<h3 class="font-bold">Promo Aktif</h3>
<button class="text-xs text-primary font-bold hover:underline">Lihat Semua History</button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead class="bg-slate-50 dark:bg-slate-900/50">
<tr>
<th class="px-6 py-4 text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">Promo</th>
<th class="px-6 py-4 text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">Diskon</th>
<th class="px-6 py-4 text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">Berakhir</th>
<th class="px-6 py-4 text-[10px] font-bold text-on-surface-variant uppercase tracking-widest text-center">Status</th>
<th class="px-6 py-4"></th>
</tr>
</thead>
<tbody class="divide-y divide-slate-50 dark:divide-slate-700">
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/50 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-primary-fixed flex items-center justify-center text-primary">
<span class="material-symbols-outlined" data-icon="loyalty">loyalty</span>
</div>
<div>
<p class="font-bold text-sm">Diskon Kilat Siang</p>
<p class="text-[10px] text-slate-400">Kode: KILAT12</p>
</div>
</div>
</td>
<td class="px-6 py-4">
<span class="text-sm font-bold text-primary">15%</span>
</td>
<td class="px-6 py-4 text-xs">25 Oct 2023</td>
<td class="px-6 py-4 text-center">
<span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[10px] font-bold uppercase tracking-wider">Aktif</span>
</td>
<td class="px-6 py-4 text-right">
<button class="p-2 hover:bg-slate-100 rounded-full transition-colors">
<span class="material-symbols-outlined text-slate-400" data-icon="more_vert">more_vert</span>
</button>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/50 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-tertiary-fixed flex items-center justify-center text-tertiary">
<span class="material-symbols-outlined" data-icon="restaurant">restaurant</span>
</div>
<div>
<p class="font-bold text-sm">Gratis Ongkir Kantin</p>
<p class="text-[10px] text-slate-400">Kode: ONGKIRFREE</p>
</div>
</div>
</td>
<td class="px-6 py-4">
<span class="text-sm font-bold text-tertiary">100%</span>
</td>
<td class="px-6 py-4 text-xs">30 Oct 2023</td>
<td class="px-6 py-4 text-center">
<span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[10px] font-bold uppercase tracking-wider">Aktif</span>
</td>
<td class="px-6 py-4 text-right">
<button class="p-2 hover:bg-slate-100 rounded-full transition-colors">
<span class="material-symbols-outlined text-slate-400" data-icon="more_vert">more_vert</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</section>
<!-- Section 3: System Settings -->
<section>
<h2 class="text-xl font-bold mb-6 text-on-background">Pengaturan Sistem</h2>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- Branding Settings -->
<div class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-sm space-y-6">
<div class="flex items-center gap-3 mb-2">
<span class="material-symbols-outlined text-primary" data-icon="brand_awareness">brand_awareness</span>
<h3 class="font-bold">Identitas Aplikasi</h3>
</div>
<div class="space-y-4">
<div class="flex items-center gap-4">
<div class="w-16 h-16 rounded-2xl bg-surface-container flex items-center justify-center relative group">
<span class="material-symbols-outlined text-2xl text-on-surface-variant" data-icon="image">image</span>
<button class="absolute inset-0 bg-black/40 rounded-2xl opacity-0 group-hover:opacity-100 flex items-center justify-center text-white transition-opacity">
<span class="material-symbols-outlined text-sm" data-icon="edit">edit</span>
</button>
</div>
<div class="flex-1">
<p class="text-xs font-bold text-on-surface-variant">Logo Aplikasi</p>
<p class="text-[10px] text-slate-400 mt-1">Format PNG, Max 2MB. 512x512px disarankan.</p>
</div>
</div>
<div class="space-y-1">
<label class="text-[10px] font-bold text-on-surface-variant uppercase">Nama Aplikasi</label>
<input class="w-full bg-slate-50 border-none rounded-lg focus:ring-0 text-sm" type="text" value="Kantin Kita"/>
</div>
</div>
</div>
<!-- Financial Settings -->
<div class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-sm space-y-6">
<div class="flex items-center gap-3 mb-2">
<span class="material-symbols-outlined text-primary" data-icon="settings_suggest">settings_suggest</span>
<h3 class="font-bold">Biaya &amp; Komisi</h3>
</div>
<div class="space-y-4">
<div class="space-y-1">
<label class="text-[10px] font-bold text-on-surface-variant uppercase">Admin Fee (Platform %)</label>
<div class="flex items-center bg-slate-50 rounded-lg pr-4">
<input class="w-full bg-transparent border-none focus:ring-0 text-sm" type="number" value="10"/>
<span class="text-sm font-bold text-slate-400">%</span>
</div>
</div>
<div class="space-y-1">
<label class="text-[10px] font-bold text-on-surface-variant uppercase">Minimal Penarikan (Rp)</label>
<input class="w-full bg-slate-50 border-none rounded-lg focus:ring-0 text-sm" type="number" value="50000"/>
</div>
</div>
</div>
<!-- Operational Settings -->
<div class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-sm space-y-6">
<div class="flex items-center gap-3 mb-2">
<span class="material-symbols-outlined text-primary" data-icon="power_settings_new">power_settings_new</span>
<h3 class="font-bold">Status Operasional</h3>
</div>
<div class="flex flex-col gap-4">
<div class="flex items-center justify-between p-4 bg-green-50 rounded-xl">
<div>
<p class="text-sm font-bold text-green-800">Sistem Buka</p>
<p class="text-[10px] text-green-600">Aplikasi dapat diakses publik</p>
</div>
<div class="w-12 h-6 bg-green-500 rounded-full relative shadow-inner cursor-pointer">
<div class="absolute right-1 top-1 w-4 h-4 bg-white rounded-full shadow"></div>
</div>
</div>
<div class="p-4 bg-slate-50 rounded-xl space-y-2">
<p class="text-xs font-bold text-on-surface-variant">Mode Pemeliharaan</p>
<p class="text-[10px] text-slate-400 italic">Aktifkan untuk menutup semua akses sementara saat update sistem.</p>
<button class="w-full mt-2 py-2 border-2 border-primary text-primary font-bold text-xs rounded-lg hover:bg-primary hover:text-white transition-all">
                                    Aktifkan Maintenance
                                </button>
</div>
</div>
</div>
</div>
<div class="mt-8 flex justify-end">
<button class="flex items-center gap-2 px-8 py-3 bg-on-surface text-white font-bold rounded-full hover:scale-105 active:scale-95 transition-all shadow-xl">
<span class="material-symbols-outlined" data-icon="save">save</span>
                        Simpan Semua Perubahan
                    </button>
</div>
</section>
</div>
</main>
</body></html>