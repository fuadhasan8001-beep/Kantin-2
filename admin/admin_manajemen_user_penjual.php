<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Management Portal - Kantin Kita</title>
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
<body class="bg-surface text-on-surface">
<!-- SideNavBar Shell -->
<aside class="h-screen w-64 fixed left-0 top-0 flex flex-col bg-slate-50 dark:bg-slate-900 z-50 font-['Plus_Jakarta_Sans'] text-sm tracking-tight">
<div class="flex flex-col h-full py-6 px-4">
<div class="mb-10 px-4">
<div class="text-xl font-bold text-sky-600 dark:text-sky-400 tracking-tighter">Kantin Kita</div>
<div class="text-[10px] uppercase tracking-widest text-slate-400 mt-1">Management Portal</div>
</div>
<nav class="flex-1 space-y-1">
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-sky-500 transition-colors hover:bg-slate-100 dark:hover:bg-slate-800/50 rounded-lg group" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-sky-600 dark:text-sky-400 font-semibold border-l-4 border-sky-500 bg-sky-50/50 dark:bg-sky-900/20 group" href="#">
<span class="material-symbols-outlined" data-icon="group">group</span>
<span>Management User</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-sky-500 transition-colors hover:bg-slate-100 dark:hover:bg-slate-800/50 rounded-lg group" href="#">
<span class="material-symbols-outlined" data-icon="storefront">storefront</span>
<span>Management Penjual</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-sky-500 transition-colors hover:bg-slate-100 dark:hover:bg-slate-800/50 rounded-lg group" href="#">
<span class="material-symbols-outlined" data-icon="restaurant_menu">restaurant_menu</span>
<span>Management Menu</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-sky-500 transition-colors hover:bg-slate-100 dark:hover:bg-slate-800/50 rounded-lg group" href="#">
<span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
<span>Pesanan</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-sky-500 transition-colors hover:bg-slate-100 dark:hover:bg-slate-800/50 rounded-lg group" href="#">
<span class="material-symbols-outlined" data-icon="analytics">analytics</span>
<span>Laporan</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-sky-500 transition-colors hover:bg-slate-100 dark:hover:bg-slate-800/50 rounded-lg group" href="#">
<span class="material-symbols-outlined" data-icon="sell">sell</span>
<span>Promo</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-sky-500 transition-colors hover:bg-slate-100 dark:hover:bg-slate-800/50 rounded-lg group" href="#">
<span class="material-symbols-outlined" data-icon="rate_review">rate_review</span>
<span>Review</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-sky-500 transition-colors hover:bg-slate-100 dark:hover:bg-slate-800/50 rounded-lg group" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span>Pengaturan</span>
</a>
</nav>
<div class="mt-auto pt-6 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3 px-4">
<img class="w-10 h-10 rounded-full object-cover" data-alt="portrait of a professional male administrator in a clean office setting with soft natural lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAE99jqbkPIkjiPrTWzK1AQrcW_88hLoyJFYy5ZDEMUyPdOYvN5L-M7YgcUDcPX9i4W9c8FxkK2R_Y5QaOB4EM0eirYT8brcWJ7MSrRBto61tl9wDwqRWMtC9tbPevdTe0WKRdgLo6ym_WAFDftv9qqlg4Tt4nX1P5QAiXKQSlNMgON9QyWhfwRm2KpLY2OR9Rr45qaxMSpDQMwhKm04mpNJi6SlROpO4qPfK6loP3aX7xkwMZ0e8LuMbeLqCa8NPI-vEVCbEw2JlE"/>
<div class="overflow-hidden">
<p class="font-bold text-slate-900 dark:text-white truncate">Admin Utama</p>
<p class="text-xs text-slate-500 truncate">Super Admin</p>
</div>
</div>
</div>
</div>
</aside>
<!-- TopNavBar Shell -->
<header class="fixed top-0 right-0 w-[calc(100%-16rem)] h-16 z-40 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border-b border-slate-100/50 dark:border-slate-800/50 shadow-sm dark:shadow-none flex items-center justify-between px-8 font-['Be_Vietnam_Pro'] text-sm">
<div class="flex items-center flex-1 max-w-lg">
<div class="relative w-full">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">search</span>
<input class="w-full bg-slate-100 dark:bg-slate-800 border-none rounded-full py-2 pl-10 pr-4 focus:ring-2 focus:ring-sky-500/20 text-slate-900 dark:text-white outline-none transition-all" placeholder="Cari user, penjual, atau toko..." type="text"/>
</div>
</div>
<div class="flex items-center gap-4">
<button class="hover:text-sky-500 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-full p-2 transition-all active:scale-95">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<button class="hover:text-sky-500 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-full p-2 transition-all active:scale-95">
<span class="material-symbols-outlined" data-icon="apps">apps</span>
</button>
<div class="h-8 w-px bg-slate-200 dark:bg-slate-800 mx-2"></div>
<img alt="Admin User Profile" class="w-8 h-8 rounded-full border-2 border-sky-100 dark:border-sky-900" data-alt="close-up profile photo of a male professional with a friendly expression and blurry background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCSK72LMAK3dGkK-kldMMiws7PvazXP-zzo6JMbDmwzLe0xyeV40M6c_Lf9AxNNFTP0uHl6-6lPXK6EOu6FNg_32aRFD7e7EUKpc5HDQB1ueguG-FO7SYkto3o4FWsDG6OTG3hox8PyoYudPB1skvXSK9ee4zE7TLosk96SwPPhkqUZGmnvMOCYR0RseXw9LGd_ljuT4K2sSUaeUwRmK-236-ShTvaIgHC_ZWyGI82d-YHrnrIJ4hMZbHokvElHpQaLW4_tsBWNvcw"/>
</div>
</header>
<!-- Main Content Canvas -->
<main class="ml-64 pt-16 min-h-screen bg-surface">
<div class="p-8 max-w-7xl mx-auto">
<!-- Page Header -->
<div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4">
<div>
<h1 class="text-3xl font-extrabold text-on-surface tracking-tight mb-2">Manajemen Entitas</h1>
<p class="text-slate-500 max-w-xl">Kelola data pengguna dan mitra penjual dalam satu pusat kendali untuk menjaga ekosistem Kantin Kita tetap sehat.</p>
</div>
<div class="flex items-center gap-2">
<button class="bg-primary hover:bg-primary-container text-white px-6 py-2.5 rounded-full font-semibold flex items-center gap-2 transition-all active:scale-95 shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-lg" data-icon="add">add</span>
                        Tambah Baru
                    </button>
</div>
</div>
<!-- Tabs Section -->
<div class="mb-8 bg-surface-container-low p-1.5 rounded-xl inline-flex w-full md:w-auto">
<button class="flex-1 md:flex-none px-8 py-2.5 rounded-lg bg-white shadow-sm text-sky-600 font-bold transition-all">
                    Daftar User
                </button>
<button class="flex-1 md:flex-none px-8 py-2.5 rounded-lg text-slate-500 hover:text-sky-600 font-medium transition-all">
                    Daftar Penjual
                </button>
</div>
<!-- Filter Bar -->
<div class="flex flex-wrap items-center justify-between gap-4 mb-6">
<div class="flex items-center gap-3 overflow-x-auto pb-2 md:pb-0 no-scrollbar">
<button class="px-4 py-1.5 rounded-sm bg-primary text-white text-xs font-bold uppercase tracking-wider">Semua</button>
<button class="px-4 py-1.5 rounded-sm bg-surface-container-high text-on-surface text-xs font-bold uppercase tracking-wider hover:bg-surface-container-highest transition-colors">Aktif</button>
<button class="px-4 py-1.5 rounded-sm bg-surface-container-high text-on-surface text-xs font-bold uppercase tracking-wider hover:bg-surface-container-highest transition-colors">Nonaktif</button>
<button class="px-4 py-1.5 rounded-sm bg-surface-container-high text-on-surface text-xs font-bold uppercase tracking-wider hover:bg-surface-container-highest transition-colors">Menunggu Verifikasi</button>
</div>
<div class="flex items-center gap-2 text-sm text-slate-400">
<span class="material-symbols-outlined text-lg">filter_list</span>
<span>Tampilkan: 10 Entri</span>
</div>
</div>
<!-- Tables Grid (Bento Style Layout) -->
<div class="grid grid-cols-1 gap-8">
<!-- Users Table Card -->
<section class="bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden">
<div class="px-6 py-4 bg-slate-50/50 flex items-center justify-between">
<h2 class="font-bold text-slate-800">Daftar Pengguna Aktif</h2>
<button class="text-sky-600 text-sm font-semibold hover:underline">Lihat Semua</button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low border-b border-surface-container">
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Nama User</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Email</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Status</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Joined Date</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container">
<tr class="hover:bg-slate-50/80 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-sky-100 flex items-center justify-center text-sky-700 font-bold text-xs">AS</div>
<span class="font-semibold text-slate-900">Ahmad Subarjo</span>
</div>
</td>
<td class="px-6 py-4 text-slate-600 italic">ahmad.subarjo@email.com</td>
<td class="px-6 py-4">
<span class="px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 text-[10px] font-bold uppercase">Aktif</span>
</td>
<td class="px-6 py-4 text-slate-500">12 Okt 2023</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-2">
<button class="p-2 text-sky-600 hover:bg-sky-50 rounded-lg transition-all" title="Detail">
<span class="material-symbols-outlined text-lg">visibility</span>
</button>
<button class="p-2 text-error hover:bg-error-container/20 rounded-lg transition-all" title="Block">
<span class="material-symbols-outlined text-lg">block</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-slate-50/80 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center text-orange-700 font-bold text-xs">BK</div>
<span class="font-semibold text-slate-900">Budi Kusuma</span>
</div>
</td>
<td class="px-6 py-4 text-slate-600 italic">budi.k@provider.net</td>
<td class="px-6 py-4">
<span class="px-3 py-1 rounded-full bg-slate-100 text-slate-500 text-[10px] font-bold uppercase">Nonaktif</span>
</td>
<td class="px-6 py-4 text-slate-500">05 Nov 2023</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-2">
<button class="p-2 text-sky-600 hover:bg-sky-50 rounded-lg transition-all">
<span class="material-symbols-outlined text-lg">visibility</span>
</button>
<button class="p-2 text-emerald-600 hover:bg-emerald-50 rounded-lg transition-all">
<span class="material-symbols-outlined text-lg">check_circle</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</section>
<!-- Sellers Table Card -->
<section class="bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden">
<div class="px-6 py-4 bg-slate-50/50 flex items-center justify-between border-l-4 border-primary">
<h2 class="font-bold text-slate-800">Manajemen Mitra Penjual</h2>
<div class="flex items-center gap-2">
<span class="flex h-2 w-2 rounded-full bg-primary animate-pulse"></span>
<span class="text-xs font-semibold text-primary">3 Perlu Verifikasi</span>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low border-b border-surface-container">
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Nama Toko</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Pemilik</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Status</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container">
<tr class="hover:bg-slate-50/80 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-4">
<img class="w-12 h-12 rounded-lg object-cover" data-alt="a small cozy food stall with a bright menu and traditional Indonesian decorations in warm evening light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPsI9APGqtzkyf8lN9MghTG9ne3mXec-veTIA21AcXWa8LLqfv1tTYWdJsECQ1gDcTMuK4wZ_UkdujBS58Zo99voaA-HsKvHxu-aiTUiMNIoMhSCtMeImfzaYaygIC7Tc-dX1MrnW_IwOwopYntuO1CwFqyUuKFuS3q5-AjAn_ZsUH4m1-vPKZCOkYEQqAS8SrVxexN-e4fjaL7Ngch_i0x69ba5VQfIGoRAhKJ0HopxN978rypHKe_LxA9qM_Y5jNLOgZuvIME3A"/>
<div>
<span class="font-bold text-slate-900 block">Warung Padang Raya</span>
<span class="text-xs text-slate-400">ID: SL-00921</span>
</div>
</div>
</td>
<td class="px-6 py-4 text-slate-700 font-medium">Siti Aminah</td>
<td class="px-6 py-4">
<div class="flex flex-col gap-1">
<span class="w-fit px-3 py-0.5 rounded-sm bg-tertiary-fixed text-tertiary font-bold text-[10px] uppercase">Verified</span>
<span class="text-[10px] text-slate-400 flex items-center gap-1">
<span class="material-symbols-outlined text-[10px]">star</span> 4.8 Rating
                                            </span>
</div>
</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-2">
<button class="px-4 py-1.5 text-xs font-bold text-sky-600 hover:bg-sky-50 rounded-sm border border-sky-100 transition-all">Detail</button>
<button class="px-4 py-1.5 text-xs font-bold text-error hover:bg-error-container/10 rounded-sm border border-error/10 transition-all">Suspend</button>
</div>
</td>
</tr>
<tr class="bg-orange-50/30">
<td class="px-6 py-4">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center">
<span class="material-symbols-outlined text-slate-400">store</span>
</div>
<div>
<span class="font-bold text-slate-900 block">Bakso Mas Giri</span>
<span class="text-xs text-slate-400 italic">Menunggu berkas...</span>
</div>
</div>
</td>
<td class="px-6 py-4 text-slate-700 font-medium">Sugiri Hartono</td>
<td class="px-6 py-4">
<span class="px-3 py-1 rounded-full bg-secondary-container text-white text-[10px] font-bold uppercase">Pending</span>
</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-2">
<button class="px-4 py-1.5 bg-tertiary text-white text-xs font-bold rounded-sm shadow-md shadow-tertiary/20 hover:scale-105 active:scale-95 transition-all">Verify Now</button>
<button class="p-2 text-slate-400 hover:text-slate-600 transition-all">
<span class="material-symbols-outlined">more_vert</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-slate-50/80 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-4">
<img class="w-12 h-12 rounded-lg object-cover" data-alt="a plate of delicious traditional dessert with colorful ingredients and artful presentation on a dark ceramic dish" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC9gACwGlqXgsiFoysWZecmVLjsccd8NKZ6eYC2q0mqrczKFVyPc7ocz0SUYd_sGRBOLQtw5SiT2V7BAtY_ygD8yryB6F2WamV6xPR2HJSxiip0kCexKNqQeppyf9iTQvmky8vhAvRPm-myRr9JUC0Q4GOH-Jfdt6FJRGKJ9HZEWF0URp11F-9kIn6Y0nrse9I8EPA8qQVXf-dUG1BZboy7awjOliyY8XzaIpVd1rMPG_CvBTQdwbwAiVsHWi-IshUjVxPEajAXi4E"/>
<div>
<span class="font-bold text-slate-900 block">Es Dawet Ayu</span>
<span class="text-xs text-slate-400">ID: SL-00944</span>
</div>
</div>
</td>
<td class="px-6 py-4 text-slate-700 font-medium">Larasati Putri</td>
<td class="px-6 py-4">
<span class="w-fit px-3 py-0.5 rounded-sm bg-tertiary-fixed text-tertiary font-bold text-[10px] uppercase">Verified</span>
</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-2">
<button class="px-4 py-1.5 text-xs font-bold text-sky-600 hover:bg-sky-50 rounded-sm border border-sky-100 transition-all">Detail</button>
<button class="px-4 py-1.5 text-xs font-bold text-error hover:bg-error-container/10 rounded-sm border border-error/10 transition-all">Suspend</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</section>
</div>
<!-- Footer Pagination (Asymmetric Style) -->
<div class="mt-8 flex flex-col md:flex-row items-center justify-between gap-6 px-4">
<p class="text-sm text-slate-400 italic">Menampilkan 5 dari total 1,280 entri terdaftar.</p>
<div class="flex items-center gap-1.5">
<button class="p-2 rounded-lg text-slate-400 hover:bg-slate-100 transition-all">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="w-10 h-10 rounded-lg bg-sky-600 text-white font-bold flex items-center justify-center shadow-lg shadow-sky-600/20">1</button>
<button class="w-10 h-10 rounded-lg hover:bg-slate-100 text-slate-600 font-semibold flex items-center justify-center transition-all">2</button>
<button class="w-10 h-10 rounded-lg hover:bg-slate-100 text-slate-600 font-semibold flex items-center justify-center transition-all">3</button>
<span class="mx-2 text-slate-300">...</span>
<button class="w-10 h-10 rounded-lg hover:bg-slate-100 text-slate-600 font-semibold flex items-center justify-center transition-all">42</button>
<button class="p-2 rounded-lg text-slate-400 hover:bg-slate-100 transition-all">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
</div>
</main>
</body></html>