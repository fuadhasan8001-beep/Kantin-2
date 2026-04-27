<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200..800&amp;family=Be+Vietnam+Pro:wght@100..900&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
</head>
<body class="bg-surface text-on-surface flex min-h-screen">
<!-- SideNavBar Component -->
<aside class="h-screen w-64 fixed left-0 top-0 flex flex-col bg-surface-container-lowest dark:bg-surface-container-low border-r-0 z-50">
<div class="flex flex-col h-full p-4 gap-2">
<!-- Header Section -->
<div class="px-4 py-6 mb-4">
<h1 class="text-xl font-black text-primary tracking-tighter">Kantin Kita</h1>
<p class="text-xs font-medium text-on-surface-variant/70 uppercase tracking-widest mt-1">Seller Center</p>
</div>
<!-- Main Navigation Tabs -->
<nav class="flex-1 space-y-1">
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-all active:scale-[0.98] duration-150 font-['Plus_Jakarta_Sans'] font-medium text-sm" href="dashboard_penjual.php">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                    Dashboard
                </a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-all active:scale-[0.98] duration-150 font-['Plus_Jakarta_Sans'] font-medium text-sm" href="kelola_menu_penjual.php">
<span class="material-symbols-outlined" data-icon="restaurant_menu">restaurant_menu</span>
                    Kelola Menu
                </a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-all active:scale-[0.98] duration-150 font-['Plus_Jakarta_Sans'] font-medium text-sm" href="pesanan_masuk_penjual.php">
<span class="material-symbols-outlined" data-icon="pending_actions">pending_actions</span>
                    Pesanan Masuk
                </a>
<a class="flex items-center gap-3 px-4 py-3 bg-primary/10 text-primary rounded-xl font-bold font-['Plus_Jakarta_Sans'] text-sm active:scale-[0.98] duration-150" href="riwayat_pesanan_penjual.php">
<span class="material-symbols-outlined" data-icon="history" style="font-variation-settings: 'FILL' 1;">history</span>
                    Riwayat Pesanan
                </a>
</nav>
<!-- Footer Navigation -->
<div class="pt-4 mt-4 border-t border-surface-container-high">
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-error hover:bg-error-container/20 transition-all active:scale-[0.98] duration-150 font-['Plus_Jakarta_Sans'] font-medium text-sm" href="../halaman_login.php">
<span class="material-symbols-outlined" data-icon="logout">logout</span>
                    Logout
                </a>
</div>
</div>
</aside>
<!-- Main Content Canvas -->
<main class="ml-64 flex-1 min-h-screen">
<!-- TopNavBar Component -->
<header class="bg-surface/80 dark:bg-surface-container-lowest/80 backdrop-blur-xl sticky top-0 z-40 w-full px-8 py-4 flex justify-between items-center shadow-sm dark:shadow-none">
<div class="flex items-center gap-4">
<div class="relative group">
<span class="absolute inset-y-0 left-3 flex items-center text-on-surface-variant">
<span class="material-symbols-outlined text-lg">search</span>
</span>
<input class="pl-10 pr-4 py-2 bg-surface-container-high border-none rounded-full text-sm focus:ring-2 focus:ring-primary w-64 transition-all" placeholder="Cari ID pesanan atau nama..." type="text"/>
</div>
</div>
<div class="flex items-center gap-4">
<button class="p-2 hover:bg-primary/5 rounded-full transition-colors active:scale-95 duration-200">
<span class="material-symbols-outlined text-on-surface-variant">notifications</span>
</button>
<button class="p-2 hover:bg-primary/5 rounded-full transition-colors active:scale-95 duration-200">
<span class="material-symbols-outlined text-on-surface-variant">settings</span>
</button>
<div class="h-8 w-8 rounded-full overflow-hidden border-2 border-primary/20">
<img alt="Seller Profile Avatar" class="h-full w-full object-cover" data-alt="Professional headshot of a friendly Indonesian female culinary entrepreneur with a warm smile and professional attire" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCK3I8nTONspcCK0Qxuv5rPj554mYdGIurj1M_F6BenvampmjHXu3UwMlfyidmHQxcaTQNgawE2NTgBGWQ1x0OurQuG46Py3FfsFDIiYW6MVUemEpF0jg0Ybs39Ksc_HIPVWXd5JT83KLcfnansQXOMm2gdvBB-t1hXObJ-3oendQSkNlPU3dxu26WBGiQQ6h_YKg6GiUPOSHav_3xtTQ09dAonGCyTNc78qEcI9EovF3sz7JB6QH12DneYIkQiaJ03nII1WMJMsPs"/>
</div>
</div>
</header>
<div class="p-8 max-w-7xl mx-auto space-y-8">
<!-- Header Section -->
<section>
<h2 class="text-3xl font-extrabold text-on-surface tracking-tight">Riwayat Pesanan</h2>
<p class="text-on-surface-variant mt-1">Lihat catatan pesanan yang telah selesai.</p>
</section>
<!-- Summary Bento Grid -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-surface-container-low p-6 rounded-2xl flex flex-col justify-between">
<div>
<span class="bg-tertiary/10 text-tertiary px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-4 inline-block">Total Selesai</span>
<h3 class="text-4xl font-black text-on-surface mt-2">1,284</h3>
</div>
<p class="text-xs text-on-surface-variant mt-4 flex items-center gap-1">
<span class="material-symbols-outlined text-xs text-green-600">trending_up</span>
<span class="text-green-600 font-bold">+12%</span> dari bulan lalu
                    </p>
</div>
<div class="bg-primary p-6 rounded-2xl flex flex-col justify-between relative overflow-hidden group">
<div class="absolute -right-4 -top-4 opacity-10 group-hover:scale-110 transition-transform duration-500">
<span class="material-symbols-outlined text-9xl text-on-primary" style="font-variation-settings: 'opsz' 48;">payments</span>
</div>
<div class="relative z-10">
<span class="bg-on-primary/20 text-on-primary px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-4 inline-block">Total Pendapatan</span>
<h3 class="text-4xl font-black text-on-primary mt-2 italic">Rp 42.8M</h3>
</div>
<p class="text-xs text-on-primary/80 mt-4 relative z-10">Terhitung dari pesanan berstatus Selesai</p>
</div>
<div class="bg-surface-container-highest p-6 rounded-2xl flex flex-col justify-between border-l-4 border-primary">
<div>
<span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-4 inline-block">Bulan Ini</span>
<h3 class="text-3xl font-bold text-on-surface mt-2">Rp 4.250.000</h3>
</div>
<div class="flex -space-x-2 mt-4">
<img alt="User" class="h-6 w-6 rounded-full border-2 border-surface-container-highest" data-alt="Portrait of a young man smiling softly, soft natural lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCa1VRFbZqC-GAVe7mnfyo7YzoQHAalw_8w942D6XP2cHmDrRfJiuXvU_C72YwxfwE_Qkl_G1AvlsCvZsaG_XtfWRgZCNYSx9TsIx0fzF3ra9dkW_d-eyh58xnDctsT4_IaPPKYo8DO8rREqehXNFlvuvU6-ne1UsTJRvYa6aMvIAoK2ln9FRSUfaII81p8KQuSvMMQ8uuIhHmLVcfTYxbc3yqF52yxrjvQJtOW8zpAVwHYT5bnxdcUmfKn_S6TjYXsoOSt_YNMYx8"/>
<img alt="User" class="h-6 w-6 rounded-full border-2 border-surface-container-highest" data-alt="Portrait of a woman with vibrant smile, bright sunny outdoor background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIW7QmpXiHL0byF3lPkpIiCaZ9nleN2Ha-MyikeorxoUws_Wv_KtucNdYSMHhcmfCzbdzksMkF0uz5fRxKtbMVPeTazK0WQADzSXNHITgsTrqaFnAXmIjsmnFwf1c6pP0RIjENs1Z8KNU9q8zmjc6NiJWodwATxQ6gSM6kHfy_iMMa5U9UTHpUXzNy7IxzDoKK-KaWY91O6EpHkTrWOwsTfyu9f6nZVAJeo7_c6N4khgIuQVwlU6Ruvc4tJBW4ezozsdTG2F1pN7Y"/>
<div class="h-6 w-6 rounded-full bg-primary/20 border-2 border-surface-container-highest flex items-center justify-center text-[8px] font-bold text-primary">+45</div>
</div>
</div>
</section>
<!-- Filters and Table -->
<section class="bg-surface-container-low rounded-3xl overflow-hidden shadow-sm">
<div class="p-6 flex flex-wrap items-center justify-between gap-4 border-b border-surface-container-high bg-surface-container-lowest">
<div class="flex items-center gap-3">
<div class="flex items-center bg-surface-container-high rounded-xl p-1">
<button class="px-4 py-2 text-sm font-bold bg-primary text-on-primary rounded-lg">Semua</button>
<button class="px-4 py-2 text-sm font-medium text-on-surface-variant hover:text-primary transition-colors">Hari Ini</button>
<button class="px-4 py-2 text-sm font-medium text-on-surface-variant hover:text-primary transition-colors">Minggu Ini</button>
</div>
<button class="flex items-center gap-2 px-4 py-2 bg-surface-container-high rounded-xl text-sm font-medium text-on-surface hover:bg-surface-container-highest transition-colors">
<span class="material-symbols-outlined text-lg">calendar_today</span>
                            01 Jan 2024 - 31 Jan 2024
                        </button>
</div>
<button class="flex items-center gap-2 px-4 py-2 bg-primary/5 text-primary rounded-full text-sm font-bold hover:bg-primary/10 transition-colors">
<span class="material-symbols-outlined text-lg">file_download</span>
                        Export Laporan
                    </button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-lowest">
<th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant opacity-70">Tanggal</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant opacity-70">Order ID</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant opacity-70">Pelanggan</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant opacity-70">Menu</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant opacity-70">Total Harga</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant opacity-70">Status</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant opacity-70 text-right">Aksi</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container-high">
<!-- Order Row 1 -->
<tr class="hover:bg-surface-container-high/30 transition-colors group">
<td class="px-6 py-5 whitespace-nowrap">
<div class="text-sm font-medium text-on-surface">15 Jan 2024</div>
<div class="text-[10px] text-on-surface-variant">14:32 WIB</div>
</td>
<td class="px-6 py-5 whitespace-nowrap">
<span class="text-sm font-mono text-primary font-bold">#KK-92834</span>
</td>
<td class="px-6 py-5 whitespace-nowrap">
<div class="flex items-center gap-3">
<div class="h-8 w-8 rounded-full bg-surface-container-highest flex items-center justify-center overflow-hidden">
<img alt="User" class="h-full w-full object-cover" data-alt="Portrait of a smiling young man in a casual blue shirt, bright office background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB5eL30L3ZZUAEc26qv9F1aE5cRqCAMb8JBbMH8e9fdNCkaYSP9JDUdSQJKaH-EA2Z_vAGZSEPYJ459YXDiN0f9FZD08mu1iNrKlvXMjm8SNLmOhM1AGLD0GMVCj-iik4laBqGHaM_4GI7xTMvGUUMHwW9AIePl9Df_-owsGyQyerQdRoQ6wh21R_7sLmCBpfbXlROZe1SpzORUa3enoGtggpgjZ1h17m9ti0pFwHQZ_KOpn8wEeR59n8RfopZ-qRfwsZDnqL3d1os"/>
</div>
<div class="text-sm font-semibold text-on-surface">Budi Sudarsono</div>
</div>
</td>
<td class="px-6 py-5">
<div class="text-sm text-on-surface truncate max-w-[200px]">2x Nasi Goreng Spesial, 1x Es Teh Manis</div>
</td>
<td class="px-6 py-5 whitespace-nowrap">
<div class="text-sm font-black text-on-surface">Rp 55.000</div>
</td>
<td class="px-6 py-5 whitespace-nowrap">
<span class="px-3 py-1 bg-green-100 text-green-700 text-[10px] font-black uppercase rounded-full border border-green-200">Selesai</span>
</td>
<td class="px-6 py-5 text-right whitespace-nowrap">
<button class="p-2 hover:bg-primary/10 rounded-full text-on-surface-variant hover:text-primary transition-all active:scale-90">
<span class="material-symbols-outlined text-xl">visibility</span>
</button>
</td>
</tr>
<!-- Order Row 2 -->
<tr class="hover:bg-surface-container-high/30 transition-colors group">
<td class="px-6 py-5 whitespace-nowrap">
<div class="text-sm font-medium text-on-surface">15 Jan 2024</div>
<div class="text-[10px] text-on-surface-variant">12:15 WIB</div>
</td>
<td class="px-6 py-5 whitespace-nowrap">
<span class="text-sm font-mono text-primary font-bold">#KK-92831</span>
</td>
<td class="px-6 py-5 whitespace-nowrap">
<div class="flex items-center gap-3">
<div class="h-8 w-8 rounded-full bg-surface-container-highest flex items-center justify-center overflow-hidden">
<img alt="User" class="h-full w-full object-cover" data-alt="Studio portrait of a woman with short hair, neutral background, artistic lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4Xdl9l_edpTRf6X7VBk-vy2RWGoqEirrCV026wUBiW8ngf-Mw-gDZCFLn2Ea0WuM3CPmYrKp6POQB07DV9BS8VI0xnm_s_h5yTXxnXFyXGXNUmkUNdHV1cod-Z1qT7b2fqvtRGJ9PZLW13LwqF5Q-HXmv_ulyYWz3m4EJvlHYL9qgVyAg1iw17L4QLhmgvkvZxYQ5V-rtfWyJrZKE9ZCG9Tq_GbSAwC2-AIZs8n_9pQGNbahMMpaQOVf7Ig53vHM6Ri6jvvBwkSo"/>
</div>
<div class="text-sm font-semibold text-on-surface">Siti Aminah</div>
</div>
</td>
<td class="px-6 py-5">
<div class="text-sm text-on-surface truncate max-w-[200px]">1x Ayam Bakar Madu, 1x Jus Alpukat</div>
</td>
<td class="px-6 py-5 whitespace-nowrap">
<div class="text-sm font-black text-on-surface">Rp 42.500</div>
</td>
<td class="px-6 py-5 whitespace-nowrap">
<span class="px-3 py-1 bg-green-100 text-green-700 text-[10px] font-black uppercase rounded-full border border-green-200">Selesai</span>
</td>
<td class="px-6 py-5 text-right whitespace-nowrap">
<button class="p-2 hover:bg-primary/10 rounded-full text-on-surface-variant hover:text-primary transition-all active:scale-90">
<span class="material-symbols-outlined text-xl">visibility</span>
</button>
</td>
</tr>
<!-- Order Row 3 -->
<tr class="hover:bg-surface-container-high/30 transition-colors group">
<td class="px-6 py-5 whitespace-nowrap">
<div class="text-sm font-medium text-on-surface">14 Jan 2024</div>
<div class="text-[10px] text-on-surface-variant">19:45 WIB</div>
</td>
<td class="px-6 py-5 whitespace-nowrap">
<span class="text-sm font-mono text-primary font-bold">#KK-92810</span>
</td>
<td class="px-6 py-5 whitespace-nowrap">
<div class="flex items-center gap-3">
<div class="h-8 w-8 rounded-full bg-surface-container-highest flex items-center justify-center overflow-hidden text-primary font-bold text-xs">
                                            RH
                                        </div>
<div class="text-sm font-semibold text-on-surface">Rizky Hakim</div>
</div>
</td>
<td class="px-6 py-5">
<div class="text-sm text-on-surface truncate max-w-[200px]">3x Sate Ayam (10 tsk), 3x Lontong</div>
</td>
<td class="px-6 py-5 whitespace-nowrap">
<div class="text-sm font-black text-on-surface">Rp 84.000</div>
</td>
<td class="px-6 py-5 whitespace-nowrap">
<span class="px-3 py-1 bg-green-100 text-green-700 text-[10px] font-black uppercase rounded-full border border-green-200">Selesai</span>
</td>
<td class="px-6 py-5 text-right whitespace-nowrap">
<button class="p-2 hover:bg-primary/10 rounded-full text-on-surface-variant hover:text-primary transition-all active:scale-90">
<span class="material-symbols-outlined text-xl">visibility</span>
</button>
</td>
</tr>
<!-- Order Row 4 -->
<tr class="hover:bg-surface-container-high/30 transition-colors group">
<td class="px-6 py-5 whitespace-nowrap">
<div class="text-sm font-medium text-on-surface">14 Jan 2024</div>
<div class="text-[10px] text-on-surface-variant">11:02 WIB</div>
</td>
<td class="px-6 py-5 whitespace-nowrap">
<span class="text-sm font-mono text-primary font-bold">#KK-92799</span>
</td>
<td class="px-6 py-5 whitespace-nowrap">
<div class="flex items-center gap-3">
<div class="h-8 w-8 rounded-full bg-surface-container-highest flex items-center justify-center overflow-hidden">
<img alt="User" class="h-full w-full object-cover" data-alt="Portrait of a person with glasses and a friendly smile, clean minimalist studio background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBYV-_I1AnJUULOZ7wvpGONhsKl5kkYEUpZr5ToeetHKQ_CXX9vQRFnaPlaEboSfGiZlm-XRnlXqA3qptrWzvK3W4hgkBuKGIOvzwRxt6sKgroph3RhvP8luNu8ATgtWsYEGuh0DyjsgzAk3goPJ-z58PogPJY7DN-9mukD8-3It3EmAM7tZb3lM4XA1hNa8oHRnZ7wAOD2cnPdoE05vr1UcPSwUC8mWQtkuc_ctuflGjX4ElZ5ZiPf7w73Q_My4yF3hbwcUM4n0gc"/>
</div>
<div class="text-sm font-semibold text-on-surface">Andi Pratama</div>
</div>
</td>
<td class="px-6 py-5">
<div class="text-sm text-on-surface truncate max-w-[200px]">1x Gado-Gado Lontong</div>
</td>
<td class="px-6 py-5 whitespace-nowrap">
<div class="text-sm font-black text-on-surface">Rp 18.000</div>
</td>
<td class="px-6 py-5 whitespace-nowrap">
<span class="px-3 py-1 bg-green-100 text-green-700 text-[10px] font-black uppercase rounded-full border border-green-200">Selesai</span>
</td>
<td class="px-6 py-5 text-right whitespace-nowrap">
<button class="p-2 hover:bg-primary/10 rounded-full text-on-surface-variant hover:text-primary transition-all active:scale-90">
<span class="material-symbols-outlined text-xl">visibility</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="p-6 flex items-center justify-between bg-surface-container-lowest">
<p class="text-xs text-on-surface-variant font-medium">Menampilkan 1-4 dari 1,284 pesanan</p>
<div class="flex gap-2">
<button class="w-10 h-10 flex items-center justify-center rounded-xl bg-surface-container-high text-on-surface-variant hover:bg-primary hover:text-on-primary transition-all">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="w-10 h-10 flex items-center justify-center rounded-xl bg-primary text-on-primary font-bold shadow-md shadow-primary/20">1</button>
<button class="w-10 h-10 flex items-center justify-center rounded-xl bg-surface-container-high text-on-surface-variant hover:bg-primary hover:text-on-primary transition-all font-bold">2</button>
<button class="w-10 h-10 flex items-center justify-center rounded-xl bg-surface-container-high text-on-surface-variant hover:bg-primary hover:text-on-primary transition-all font-bold">3</button>
<button class="w-10 h-10 flex items-center justify-center rounded-xl bg-surface-container-high text-on-surface-variant hover:bg-primary hover:text-on-primary transition-all">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
</section>
</div>
</main>
<!-- Contextual FAB - Suppression on History Page (As per mandate) -->
</body></html>