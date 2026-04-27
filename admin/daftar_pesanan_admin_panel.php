<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Order Management | The Culinary Curator</title>
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
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        body { font-family: 'Be Vietnam Pro', sans-serif; }
        h1, h2, h3, .headline { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-surface-container-lowest text-on-surface">
<!-- TopAppBar -->
<header class="fixed top-0 w-full z-50 bg-white/80 dark:bg-stone-950/80 backdrop-blur-md shadow-sm dark:shadow-none">
<div class="flex justify-between items-center px-6 py-4 w-full max-w-7xl mx-auto">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-orange-700 text-2xl">restaurant_menu</span>
<h1 class="text-xl font-extrabold tracking-tighter text-orange-700">The Culinary Curator</h1>
</div>
<div class="flex items-center gap-4">
<button class="p-2 rounded-full hover:bg-stone-100 transition-colors active:scale-95">
<span class="material-symbols-outlined text-stone-500">notifications</span>
</button>
<div class="h-8 w-8 rounded-full bg-surface-container-highest overflow-hidden">
<img alt="Admin Profile" class="w-full h-full object-cover" data-alt="Professional headshot of a female culinary administrator with a friendly expression in a clean studio setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA008PASaBuTF8vUmzj2ifGjasYaB4BVAvjEMSjGWAesXpO6Wiep-sG3LXgIV4ummpDWHH-Q4fCXgMYEnBDtRV0IwoNnYyvYdPV9Q9R-o2RgjFXBuy9mPeOju0E-QmaOhsfdw2ooyCUASMEYyxJSnPcDpldGcv3tL9DVZXiZBNlHuAfPRDg97D6Un3TsGtCR62hxs2LJyxAnjA-f_b9dArAPZIcfyT3R5Cvv1GWLM8lLiRkPUaulGxdCSvN4q8YF2JyDqfhEGiYNjU"/>
</div>
</div>
</div>
</header>
<!-- NavigationDrawer (Sidebar) - Desktop Only -->
<aside class="hidden md:flex flex-col h-screen fixed left-0 top-0 border-r border-stone-200 dark:border-stone-800 bg-stone-50 dark:bg-stone-950 h-full w-72 rounded-r-2xl pt-20">
<div class="px-6 py-8 flex items-center gap-4">
<div class="w-12 h-12 rounded-xl bg-primary flex items-center justify-center text-white font-bold text-lg">CA</div>
<div>
<p class="font-bold text-orange-700 text-lg leading-tight">Culinary Admin</p>
<p class="text-stone-500 text-xs font-medium uppercase tracking-wider">Seller Portal</p>
</div>
</div>
<nav class="flex flex-col gap-1">
<a class="text-stone-600 dark:text-stone-400 hover:bg-stone-200 dark:hover:bg-stone-800 rounded-lg mx-2 my-1 px-4 py-3 flex items-center gap-3 font-medium text-sm transition-all" href="admin_dashboard_overview.php">
<span class="material-symbols-outlined">dashboard</span>
                Dashboard
            </a>
<a class="text-stone-600 dark:text-stone-400 hover:bg-stone-200 dark:hover:bg-stone-800 rounded-lg mx-2 my-1 px-4 py-3 flex items-center gap-3 font-medium text-sm transition-all" href="admin_manajemen_menu_pesanan.php">
<span class="material-symbols-outlined">menu_book</span>
                Menu Management
            </a>
<!-- Active State: Orders -->
<a class="bg-orange-600 text-white shadow-lg shadow-orange-700/20 rounded-lg mx-2 my-1 px-4 py-3 flex items-center gap-3 font-medium text-sm" href="daftar_pesanan_admin_panel.php">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">list_alt</span>
                Orders
            </a>
<a class="text-stone-600 dark:text-stone-400 hover:bg-stone-200 dark:hover:bg-stone-800 rounded-lg mx-2 my-1 px-4 py-3 flex items-center gap-3 font-medium text-sm transition-all" href="moderasi_analitik_admin.php">
<span class="material-symbols-outlined">insights</span>
                Analytics
            </a>
<a class="text-stone-600 dark:text-stone-400 hover:bg-stone-200 dark:hover:bg-stone-800 rounded-lg mx-2 my-1 px-4 py-3 flex items-center gap-3 font-medium text-sm transition-all" href="admin_promo_pengaturan.php">
<span class="material-symbols-outlined">settings</span>
                Settings
            </a>
</nav>
</aside>
<!-- Main Canvas -->
<main class="md:ml-72 pt-24 pb-32 px-6 min-h-screen bg-surface">
<div class="max-w-6xl mx-auto">
<!-- Hero Header Section -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10">
<div>
<h2 class="text-4xl font-bold tracking-tight text-on-surface mb-2">Manajemen Pesanan</h2>
<p class="text-stone-500 font-medium">Kelola pesanan pelanggan dan pantau status pengiriman Anda secara real-time.</p>
</div>
<div class="flex gap-3">
<div class="bg-surface-container-high rounded-xl px-4 py-2 flex items-center gap-2">
<span class="material-symbols-outlined text-orange-700">filter_list</span>
<span class="text-sm font-semibold text-on-surface">Filter</span>
</div>
<div class="bg-orange-700 text-white rounded-full px-6 py-2.5 font-bold text-sm shadow-md flex items-center gap-2 active:scale-95 transition-transform">
<span class="material-symbols-outlined">download</span>
                        Ekspor Laporan
                    </div>
</div>
</div>
<!-- Dashboard Stats Summary -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
<div class="bg-white p-6 rounded-2xl shadow-sm border-l-4 border-stone-300">
<p class="text-xs uppercase tracking-widest font-bold text-stone-400 mb-1">Total Menunggu</p>
<p class="text-3xl font-black text-stone-700">12</p>
</div>
<div class="bg-white p-6 rounded-2xl shadow-sm border-l-4 border-yellow-400">
<p class="text-xs uppercase tracking-widest font-bold text-stone-400 mb-1">Total Diproses</p>
<p class="text-3xl font-black text-yellow-600">08</p>
</div>
<div class="bg-white p-6 rounded-2xl shadow-sm border-l-4 border-green-500">
<p class="text-xs uppercase tracking-widest font-bold text-stone-400 mb-1">Total Selesai Hari Ini</p>
<p class="text-3xl font-black text-green-700">45</p>
</div>
</div>
<!-- Orders Table Container -->
<div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-stone-100">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low text-stone-600">
<th class="px-6 py-5 font-bold text-xs uppercase tracking-widest">Nama Pembeli</th>
<th class="px-6 py-5 font-bold text-xs uppercase tracking-widest">Produk</th>
<th class="px-6 py-5 font-bold text-xs uppercase tracking-widest">Total Harga</th>
<th class="px-6 py-5 font-bold text-xs uppercase tracking-widest">Status</th>
<th class="px-6 py-5 font-bold text-xs uppercase tracking-widest text-right">Aksi</th>
</tr>
</thead>
<tbody class="divide-y divide-stone-100">
<!-- Order Row 1 -->
<tr class="hover:bg-stone-50/50 transition-colors group">
<td class="px-6 py-6">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-stone-200 overflow-hidden">
<img alt="User" class="w-full h-full object-cover" data-alt="Portrait of a young man with glasses and a friendly smile, casual professional look" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIU6H_tAm3Tm30cQHTrz6oMCSVv_OAR-235oeZJej5ugTRQMIikru0Ai7zUndxyrS7FjbIfEI-ylPny-rI_2mQ6nkix8TAGji8d-3rkP5gezoD51UKn_c48XmQ1Rkis63sKpt97uRBgXryz28kAmz9LAR5pKoTlkVy77zxubH3XSRBfXrgOoHlUu1qlMUR1gI5u8QEs_jJZ0CpyeY1hNpRtEVTnH0Rj-G7JykkN78bd2W_Z2EFhw8DyhP7VTHXg-5jzcx2y9kzS8w"/>
</div>
<div>
<p class="font-bold text-on-surface">Budi Darmawan</p>
<p class="text-xs text-stone-400">#ORD-2023-0492</p>
</div>
</div>
</td>
<td class="px-6 py-6">
<div class="flex flex-col">
<span class="font-medium text-stone-700">Wagyu Truffle Bowl</span>
<span class="text-xs text-stone-400">2x Porsi • Extra Spicy</span>
</div>
</td>
<td class="px-6 py-6 font-bold text-on-surface">Rp 245.000</td>
<td class="px-6 py-6">
<span class="inline-flex items-center px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-stone-100 text-stone-500">
<span class="w-1.5 h-1.5 rounded-full bg-stone-400 mr-2"></span>
                                        Menunggu
                                    </span>
</td>
<td class="px-6 py-6 text-right space-x-2">
<button class="text-orange-700 text-xs font-bold hover:underline">Ubah Status</button>
<button class="bg-stone-100 text-stone-600 px-4 py-2 rounded-lg text-xs font-bold hover:bg-stone-200 transition-colors">Lihat Detail</button>
</td>
</tr>
<!-- Order Row 2 -->
<tr class="hover:bg-stone-50/50 transition-colors group">
<td class="px-6 py-6">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-stone-200 overflow-hidden">
<img alt="User" class="w-full h-full object-cover" data-alt="Professional woman with a confident smile, warm lighting, natural corporate background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnSCVEa4rdJ_XXGPNmG2bdZmE-gqkZBEu6PXpJNoLkAvN5fqkTtgd2b-tplQmDp6kbeOeZsxqueX1oCP1o6tN3uFdDelMDRBW3RbJNiPqzoAzwFP1Pwq0REgrhMb31xX2mAOVgEctpBzMS9UkGdH4icb6I_pHGHKI0CkRE_AhoxUKE8wxMd5Y560Vh-zGyOE66RsW1n35q9y_e9KGKFg9ITLLpgSVUj1v0V7AVO3TGSPgSQT4LLpWVLLL5pHc3fvDntwwBl5LkTSM"/>
</div>
<div>
<p class="font-bold text-on-surface">Siti Aminah</p>
<p class="text-xs text-stone-400">#ORD-2023-0488</p>
</div>
</div>
</td>
<td class="px-6 py-6">
<div class="flex flex-col">
<span class="font-medium text-stone-700">Salmon Aburi Nigiri</span>
<span class="text-xs text-stone-400">1x Set (12 pcs)</span>
</div>
</td>
<td class="px-6 py-6 font-bold text-on-surface">Rp 320.000</td>
<td class="px-6 py-6">
<span class="inline-flex items-center px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-yellow-100 text-yellow-700">
<span class="w-1.5 h-1.5 rounded-full bg-yellow-500 mr-2"></span>
                                        Diproses
                                    </span>
</td>
<td class="px-6 py-6 text-right space-x-2">
<button class="text-orange-700 text-xs font-bold hover:underline">Ubah Status</button>
<button class="bg-stone-100 text-stone-600 px-4 py-2 rounded-lg text-xs font-bold hover:bg-stone-200 transition-colors">Lihat Detail</button>
</td>
</tr>
<!-- Order Row 3 -->
<tr class="hover:bg-stone-50/50 transition-colors group">
<td class="px-6 py-6">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-stone-200 overflow-hidden">
<img alt="User" class="w-full h-full object-cover" data-alt="Smiling young man with beard and mustache, bright indoor natural light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIXSVVd4SLdzC78gJSuJQVLjbK8Z3e1fqi44yxTYeAQu2iVKMhpsDYKkL2agYrGYl21PHAipw1-yfZkRWSZGDfK8qm6CfFoXQ3ay_3jJVjE6SgHjPh09i3BoMYbLTodDQ8X_cNsMKTrP2YKPpkG3_cCFzgcKrnFCRmcAAlM0nc1NasKGCng52ZsF-e8iy2Z9nls7mY9QKn5r30TBtphc_hCxrY1BaGJ1SY7uzU_kwtkmypA1eWhg6YcuxC2YS8NQfb4tQv9u2L58Y"/>
</div>
<div>
<p class="font-bold text-on-surface">Raka Pratama</p>
<p class="text-xs text-stone-400">#ORD-2023-0485</p>
</div>
</div>
</td>
<td class="px-6 py-6">
<div class="flex flex-col">
<span class="font-medium text-stone-700">Artisan Charcoal Pizza</span>
<span class="text-xs text-stone-400">1x Large • Thin Crust</span>
</div>
</td>
<td class="px-6 py-6 font-bold text-on-surface">Rp 185.000</td>
<td class="px-6 py-6">
<span class="inline-flex items-center px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-green-100 text-green-700">
<span class="w-1.5 h-1.5 rounded-full bg-green-500 mr-2"></span>
                                        Selesai
                                    </span>
</td>
<td class="px-6 py-6 text-right space-x-2">
<button class="text-orange-700 text-xs font-bold hover:underline">Ubah Status</button>
<button class="bg-stone-100 text-stone-600 px-4 py-2 rounded-lg text-xs font-bold hover:bg-stone-200 transition-colors">Lihat Detail</button>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="px-6 py-4 bg-stone-50 flex items-center justify-between">
<p class="text-xs text-stone-500 font-medium">Menampilkan 3 dari 128 pesanan</p>
<div class="flex items-center gap-2">
<button class="p-2 rounded-lg hover:bg-stone-200 disabled:opacity-50 transition-colors" disabled="">
<span class="material-symbols-outlined text-sm">chevron_left</span>
</button>
<span class="text-xs font-bold px-3 py-1 bg-orange-700 text-white rounded-md shadow-sm">1</span>
<span class="text-xs font-bold px-3 py-1 text-stone-500 hover:bg-stone-200 rounded-md cursor-pointer transition-colors">2</span>
<span class="text-xs font-bold px-3 py-1 text-stone-500 hover:bg-stone-200 rounded-md cursor-pointer transition-colors">3</span>
<button class="p-2 rounded-lg hover:bg-stone-200 transition-colors">
<span class="material-symbols-outlined text-sm">chevron_right</span>
</button>
</div>
</div>
</div>
</div>
</main>
<!-- BottomNavBar - Mobile Only -->
<nav class="md:hidden fixed bottom-0 left-0 w-full flex justify-around items-center px-4 pb-6 pt-3 bg-white/80 dark:bg-stone-900/80 backdrop-blur-xl shadow-[0_-8px_32px_rgba(0,0,0,0.06)] z-50 rounded-t-[32px]">
<a class="flex flex-col items-center justify-center text-stone-400 px-5 py-2 hover:text-orange-600 transition-all active:scale-90" href="admin_dashboard_overview.php">
<span class="material-symbols-outlined">home</span>
<span class="font-['Plus_Jakarta_Sans'] text-[11px] font-semibold uppercase tracking-widest mt-1">Home</span>
</a>
<a class="flex flex-col items-center justify-center bg-orange-50 dark:bg-orange-950/30 text-orange-700 dark:text-orange-400 rounded-2xl px-5 py-2 active:scale-90 transition-transform" href="daftar_pesanan_admin_panel.php">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">receipt_long</span>
<span class="font-['Plus_Jakarta_Sans'] text-[11px] font-semibold uppercase tracking-widest mt-1">Orders</span>
</a>
<a class="flex flex-col items-center justify-center text-stone-400 px-5 py-2 hover:text-orange-600 transition-all active:scale-90" href="admin_manajemen_menu_pesanan.php">
<span class="material-symbols-outlined">shopping_cart</span>
<span class="font-['Plus_Jakarta_Sans'] text-[11px] font-semibold uppercase tracking-widest mt-1">Cart</span>
</a>
<a class="flex flex-col items-center justify-center text-stone-400 px-5 py-2 hover:text-orange-600 transition-all active:scale-90" href="manajemen_user_admin_panel.php">
<span class="material-symbols-outlined">person</span>
<span class="font-['Plus_Jakarta_Sans'] text-[11px] font-semibold uppercase tracking-widest mt-1">Profile</span>
</a>
</nav>
</body></html>