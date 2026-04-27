<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Kantin Kita Admin - Monitor Menu &amp; Transaksi</title>
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
<body class="bg-surface text-on-surface">
<!-- SideNavBar Shell -->
<aside class="h-screen w-64 fixed left-0 top-0 flex flex-col bg-slate-50 dark:bg-slate-900 font-['Plus_Jakarta_Sans'] text-sm tracking-tight z-50">
<div class="flex flex-col h-full py-6 px-4">
<div class="flex items-center gap-3 px-2 mb-10">
<div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center text-white shadow-lg">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">restaurant</span>
</div>
<div>
<div class="text-xl font-bold text-sky-600 dark:text-sky-400 tracking-tighter">Kantin Kita</div>
<div class="text-[10px] text-slate-500 uppercase tracking-widest font-bold">Management Portal</div>
</div>
</div>
<nav class="flex-1 space-y-1">
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 hover:text-sky-500 transition-colors hover:bg-slate-100" href="admin_dashboard_overview.php">
<span class="material-symbols-outlined">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 hover:text-sky-500 transition-colors hover:bg-slate-100" href="manajemen_user_admin_panel.php">
<span class="material-symbols-outlined">group</span>
<span>Management User</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 hover:text-sky-500 transition-colors hover:bg-slate-100" href="admin_manajemen_user_penjual.php">
<span class="material-symbols-outlined">storefront</span>
<span>Management Penjual</span>
</a>
<!-- Active Tab: Management Menu -->
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-sky-600 dark:text-sky-400 font-semibold border-l-4 border-sky-500 bg-sky-50/50 dark:bg-sky-900/20 scale-98 active:scale-95 transition-transform" href="admin_manajemen_menu_pesanan.php">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">restaurant_menu</span>
<span>Management Menu</span>
</a>
<!-- Active Intent Fallback for Pesanan -->
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 hover:text-sky-500 transition-colors hover:bg-slate-100" href="daftar_pesanan_admin_panel.php">
<span class="material-symbols-outlined">shopping_cart</span>
<span>Pesanan</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 hover:text-sky-500 transition-colors hover:bg-slate-100" href="moderasi_analitik_admin.php">
<span class="material-symbols-outlined">analytics</span>
<span>Laporan</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 hover:text-sky-500 transition-colors hover:bg-slate-100" href="admin_promo_pengaturan.php">
<span class="material-symbols-outlined">sell</span>
<span>Promo</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 hover:text-sky-500 transition-colors hover:bg-slate-100" href="../beri_rating_ulasan.php">
<span class="material-symbols-outlined">rate_review</span>
<span>Review</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 hover:text-sky-500 transition-colors hover:bg-slate-100" href="admin_promo_pengaturan.php">
<span class="material-symbols-outlined">settings</span>
<span>Pengaturan</span>
</a>
</nav>
<div class="mt-auto p-4 bg-white/50 rounded-2xl border border-slate-100">
<div class="flex items-center gap-3">
<img class="w-10 h-10 rounded-full object-cover shadow-sm" data-alt="Professional portrait of a male administrative manager with a clean workspace in the background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBGtRkQrngD_e1wznnkJMV8FcHDZfWsVrTkduWBJ4XFLLgNFA_RZ62ZqdNthKOx3GgU9X3BTNppThVyUC4i26-KBW0uY9sbF-6gM4TEPN23jm-jbKaUCPSBmlzXhKw2O4STFIUAfK3UDaHwPYBuNJnMPbglVQBwZ9RuhLSJ9mYgA_rmb14kr8ehdfAs5wvAqTshGUEKl70Wtsv81q0wiVL_pgYbRCqqC933p6pkd1sMoydY8tBr-vaaof6KCNBdn5Tjlb4RLAEEB1o"/>
<div class="overflow-hidden">
<p class="font-bold text-slate-800 truncate">Admin Budi</p>
<p class="text-[10px] text-slate-500">Super Admin</p>
</div>
</div>
</div>
</div>
</aside>
<!-- Main Canvas -->
<main class="ml-64 min-h-screen">
<!-- TopNavBar Shell -->
<header class="fixed top-0 right-0 w-[calc(100%-16rem)] h-16 z-40 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border-b border-slate-100/50 flex items-center justify-between px-8">
<div class="flex items-center gap-4 flex-1">
<div class="relative w-full max-w-md">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-slate-100 border-none rounded-full text-sm focus:ring-2 focus:ring-primary/20 placeholder:text-slate-400" placeholder="Search by ID or Menu Name..." type="text"/>
</div>
</div>
<div class="flex items-center gap-4">
<button class="hover:text-sky-500 hover:bg-slate-50 rounded-full p-2 transition-all">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="hover:text-sky-500 hover:bg-slate-50 rounded-full p-2 transition-all">
<span class="material-symbols-outlined">apps</span>
</button>
<div class="h-8 w-[1px] bg-slate-200 mx-2"></div>
<img class="w-8 h-8 rounded-full object-cover" data-alt="Close up of a professional user profile image" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqHEiuhGp-9fQkDzHbFS829pewbK8iBTGof95OtLacT_WiaiqEXzP3GnnvBCowToUQV6CD_adC-xSHzxJTPtrl6nIJTgFB2PUerYe1o0ezVS55CpNiBBtXMoN1Yy3z1Tynoat0sR3JYNG7lBW3Yyo8l-Cr-qGPw17eEs3YHFiHhbztzOHp9S6Z_yzAlpFakZKbQw6ZuCC3tQ3eWuv1ivRl2BkObBN1UTQhXuVfazixI3zw1YbRi3CgrRfBxO8W7IYUGIwY0OrZtq0"/>
</div>
</header>
<!-- Content Area -->
<div class="pt-24 px-8 pb-12 space-y-8">
<!-- Page Title -->
<div class="flex items-end justify-between">
<div>
<h1 class="text-3xl font-extrabold text-on-surface tracking-tight">Monitor Menu &amp; Transaksi</h1>
<p class="text-slate-500 font-medium">Real-time overview of your digital food ecosystem.</p>
</div>
<div class="flex gap-3">
<button class="flex items-center gap-2 px-4 py-2 bg-white text-on-surface border border-slate-200 rounded-lg text-sm font-semibold hover:bg-slate-50 transition-all">
<span class="material-symbols-outlined text-sm">filter_list</span> Filter
                    </button>
<button class="flex items-center gap-2 px-5 py-2 bg-gradient-to-br from-primary to-primary-container text-white rounded-full text-sm font-bold shadow-lg shadow-primary/20 active:scale-95 transition-all">
<span class="material-symbols-outlined text-sm">add</span> Tambah Menu
                    </button>
</div>
</div>
<!-- Bento Layout Content -->
<div class="grid grid-cols-12 gap-6">
<!-- Section 1: All Menus Table -->
<div class="col-span-12 lg:col-span-12 bg-surface-container-low rounded-3xl p-6 shadow-sm">
<div class="flex items-center justify-between mb-6">
<h2 class="text-xl font-bold flex items-center gap-2">
<span class="w-2 h-6 bg-primary rounded-full"></span>
                            Daftar Semua Menu
                        </h2>
<span class="text-xs font-bold px-3 py-1 bg-primary/10 text-primary rounded-full uppercase tracking-widest">48 Total Items</span>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-separate border-spacing-y-3">
<thead>
<tr class="text-slate-500 text-[11px] uppercase tracking-wider font-bold">
<th class="px-4 pb-2">Menu</th>
<th class="px-4 pb-2">Penjual</th>
<th class="px-4 pb-2">Kategori</th>
<th class="px-4 pb-2">Harga</th>
<th class="px-4 pb-2">Status Stok</th>
<th class="px-4 pb-2 text-right">Aksi</th>
</tr>
</thead>
<tbody>
<!-- Row 1 -->
<tr class="bg-white rounded-2xl shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] transition-all hover:scale-[1.005]">
<td class="px-4 py-4 rounded-l-2xl">
<div class="flex items-center gap-3">
<img class="w-12 h-12 rounded-xl object-cover" data-alt="Vibrant poke bowl with fresh salmon, edamame, and mango on a white background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBqlQoD60IQANCNsoif5iHoz7OhFNMZ-yDkseeop_-9o6AR1FILyhykLrR6VentbBeaa4w-EKB4j4Q3bq8Ce8uYKzhJWXfzFQUDCK-tYNSiHOj6PGA4RKIA0N0-a64FZyF8r99SFdnLU1OFa-yfuXn5vLjhOPdRGJLjPg0Q94feD2InENSz1-0l6Moh8DQ1IU_BF68F2UWL4wk2KhDQLt7xcgQlr0CSn1kBLu3LpRSvGTkdrYw_XlcEcdV0-Eg_-sMucxxdGHTtnzg"/>
<div>
<div class="font-bold text-on-surface">Salmon Poke Bowl</div>
<div class="text-xs text-slate-400">ID: MN-001</div>
</div>
</div>
</td>
<td class="px-4 py-4 text-sm font-medium">Healthy Greens</td>
<td class="px-4 py-4">
<span class="px-3 py-1 bg-surface-container-high rounded-md text-[10px] font-bold text-on-surface-variant uppercase">Seafood</span>
</td>
<td class="px-4 py-4 font-bold text-primary">Rp 45.000</td>
<td class="px-4 py-4">
<div class="flex items-center gap-1.5 text-green-600 text-xs font-bold">
<span class="w-2 h-2 rounded-full bg-green-500"></span> Tersedia
                                        </div>
</td>
<td class="px-4 py-4 rounded-r-2xl text-right">
<button class="p-2 hover:bg-error/10 text-error rounded-full transition-colors">
<span class="material-symbols-outlined">delete</span>
</button>
</td>
</tr>
<!-- Row 2 -->
<tr class="bg-white rounded-2xl shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] transition-all hover:scale-[1.005]">
<td class="px-4 py-4 rounded-l-2xl">
<div class="flex items-center gap-3">
<img class="w-12 h-12 rounded-xl object-cover" data-alt="Gourmet pepperoni pizza with melty cheese and fresh basil" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0727ZATlcFVv2N04iUjPyJ8YFa3Rj9_FEn40KeBRlIbn-uOVtt1kETqXk7_JsgB7aIKRTu1VOH9188w6vEeiBsrs2OGK_FFQvbBFcWnzlZWUa8aUNvL-6DAADzhwxT9fB87flPRNRWQsro2csbGeSPD2bz1owYU7lvgtoFg-4Ml-FlZZ7A-hZyzHAK3POU0s8s7aSgzrzv6Yj-eMthgaBI33LP1oJ9CVJkCEI8U-8MvQiNJEKaK92RD993XWbXF7OOwmnNFm9f9w"/>
<div>
<div class="font-bold text-on-surface">Pepperoni Pizza XL</div>
<div class="text-xs text-slate-400">ID: MN-012</div>
</div>
</div>
</td>
<td class="px-4 py-4 text-sm font-medium">Pizza Hub</td>
<td class="px-4 py-4">
<span class="px-3 py-1 bg-surface-container-high rounded-md text-[10px] font-bold text-on-surface-variant uppercase">Italian</span>
</td>
<td class="px-4 py-4 font-bold text-primary">Rp 120.000</td>
<td class="px-4 py-4">
<div class="flex items-center gap-1.5 text-orange-600 text-xs font-bold">
<span class="w-2 h-2 rounded-full bg-orange-500 animate-pulse"></span> Stok Rendah
                                        </div>
</td>
<td class="px-4 py-4 rounded-r-2xl text-right">
<button class="p-2 hover:bg-error/10 text-error rounded-full transition-colors">
<span class="material-symbols-outlined">delete</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Section 2: All Orders Table -->
<div class="col-span-12 bg-white rounded-3xl p-8 shadow-sm border border-slate-100">
<div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
<div>
<h2 class="text-xl font-bold flex items-center gap-2">
<span class="w-2 h-6 bg-tertiary rounded-full"></span>
                                Monitoring Pesanan Terbaru
                            </h2>
<p class="text-xs text-slate-400 mt-1">Updates every 30 seconds</p>
</div>
<div class="flex items-center gap-3">
<div class="flex bg-slate-100 p-1 rounded-xl">
<button class="px-4 py-1.5 bg-white text-xs font-bold rounded-lg shadow-sm text-primary">Semua</button>
<button class="px-4 py-1.5 text-xs font-bold text-slate-500 hover:text-primary transition-colors">Pending</button>
<button class="px-4 py-1.5 text-xs font-bold text-slate-500 hover:text-primary transition-colors">Sukses</button>
</div>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead>
<tr class="text-slate-400 text-[11px] uppercase tracking-wider font-bold border-b border-slate-50">
<th class="px-2 py-4">Order ID</th>
<th class="px-2 py-4">Pembeli</th>
<th class="px-2 py-4">Penjual</th>
<th class="px-2 py-4">Total Amount</th>
<th class="px-2 py-4">Status</th>
<th class="px-2 py-4">Waktu</th>
<th class="px-2 py-4 text-right">Detail</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-50">
<!-- Order 1 -->
<tr>
<td class="px-2 py-5">
<span class="font-bold text-on-surface">#KK-98421</span>
</td>
<td class="px-2 py-5">
<div class="flex items-center gap-2">
<div class="w-7 h-7 rounded-full bg-secondary/10 flex items-center justify-center text-[10px] font-bold text-secondary">RA</div>
<span class="text-sm font-medium">Rizky Amalia</span>
</div>
</td>
<td class="px-2 py-5 text-sm text-slate-600">Bakso Solo Pak Kumis</td>
<td class="px-2 py-5 font-bold text-on-surface">Rp 34.500</td>
<td class="px-2 py-5">
<span class="px-3 py-1 bg-amber-50 text-amber-600 rounded-full text-[10px] font-bold border border-amber-100 uppercase">Menunggu</span>
</td>
<td class="px-2 py-5 text-xs text-slate-400">2 Mins ago</td>
<td class="px-2 py-5 text-right">
<button class="text-sky-500 hover:underline text-xs font-bold">Manage</button>
</td>
</tr>
<!-- Order 2 -->
<tr>
<td class="px-2 py-5">
<span class="font-bold text-on-surface">#KK-98418</span>
</td>
<td class="px-2 py-5">
<div class="flex items-center gap-2">
<div class="w-7 h-7 rounded-full bg-primary/10 flex items-center justify-center text-[10px] font-bold text-primary">DP</div>
<span class="text-sm font-medium">Dimas Pratama</span>
</div>
</td>
<td class="px-2 py-5 text-sm text-slate-600">Ayam Geprek Juara</td>
<td class="px-2 py-5 font-bold text-on-surface">Rp 82.000</td>
<td class="px-2 py-5">
<span class="px-3 py-1 bg-sky-50 text-sky-600 rounded-full text-[10px] font-bold border border-sky-100 uppercase">Diproses</span>
</td>
<td class="px-2 py-5 text-xs text-slate-400">14 Mins ago</td>
<td class="px-2 py-5 text-right">
<button class="text-sky-500 hover:underline text-xs font-bold">Manage</button>
</td>
</tr>
<!-- Order 3 -->
<tr>
<td class="px-2 py-5">
<span class="font-bold text-on-surface">#KK-98410</span>
</td>
<td class="px-2 py-5">
<div class="flex items-center gap-2">
<div class="w-7 h-7 rounded-full bg-tertiary/10 flex items-center justify-center text-[10px] font-bold text-tertiary">SI</div>
<span class="text-sm font-medium">Siti Indah</span>
</div>
</td>
<td class="px-2 py-5 text-sm text-slate-600">Es Teh Indonesia</td>
<td class="px-2 py-5 font-bold text-on-surface">Rp 12.000</td>
<td class="px-2 py-5">
<span class="px-3 py-1 bg-green-50 text-green-600 rounded-full text-[10px] font-bold border border-green-100 uppercase">Selesai</span>
</td>
<td class="px-2 py-5 text-xs text-slate-400">45 Mins ago</td>
<td class="px-2 py-5 text-right">
<button class="text-sky-500 hover:underline text-xs font-bold">Manage</button>
</td>
</tr>
<!-- Order 4 -->
<tr>
<td class="px-2 py-5">
<span class="font-bold text-on-surface">#KK-98405</span>
</td>
<td class="px-2 py-5">
<div class="flex items-center gap-2">
<div class="w-7 h-7 rounded-full bg-slate-100 flex items-center justify-center text-[10px] font-bold text-slate-400">JW</div>
<span class="text-sm font-medium">Joko Widodo</span>
</div>
</td>
<td class="px-2 py-5 text-sm text-slate-600">Bakmie GM</td>
<td class="px-2 py-5 font-bold text-on-surface">Rp 56.700</td>
<td class="px-2 py-5">
<span class="px-3 py-1 bg-red-50 text-red-600 rounded-full text-[10px] font-bold border border-red-100 uppercase">Dibatalkan</span>
</td>
<td class="px-2 py-5 text-xs text-slate-400">1 Hour ago</td>
<td class="px-2 py-5 text-right">
<button class="text-sky-500 hover:underline text-xs font-bold">Manage</button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="mt-8 flex items-center justify-between border-t border-slate-50 pt-6">
<span class="text-xs font-medium text-slate-400">Menampilkan 1-10 dari 4,203 pesanan</span>
<div class="flex gap-2">
<button class="p-2 border border-slate-200 rounded-lg text-slate-400 hover:bg-slate-50 transition-all">
<span class="material-symbols-outlined text-sm">chevron_left</span>
</button>
<button class="px-3 py-1 bg-primary text-white rounded-lg text-xs font-bold">1</button>
<button class="px-3 py-1 hover:bg-slate-50 text-slate-600 rounded-lg text-xs font-bold">2</button>
<button class="px-3 py-1 hover:bg-slate-50 text-slate-600 rounded-lg text-xs font-bold">3</button>
<button class="p-2 border border-slate-200 rounded-lg text-slate-400 hover:bg-slate-50 transition-all">
<span class="material-symbols-outlined text-sm">chevron_right</span>
</button>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- FAB Overlay for Quick Actions (Hidden by default as per rule if strictly internal management, but here for utility if needed on Home/Dashboard context) -->
<!-- Suppressed based on "Contextual FAB Suppression" since this is a Details/Management screen -->
</body></html>