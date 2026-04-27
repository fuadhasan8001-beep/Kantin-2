<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>User Management - The Culinary Curator</title>
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
        body {
            font-family: 'Be Vietnam Pro', sans-serif;
            background-color: #fff8f6;
            color: #271815;
        }
        h1, h2, h3, .brand-font {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>
<body class="flex min-h-screen">
<!-- NavigationDrawer (Shared Component) -->
<aside class="flex flex-col h-screen fixed left-0 top-0 border-r border-stone-200 dark:border-stone-800 bg-stone-50 dark:bg-stone-950 h-full w-72 rounded-r-2xl z-40">
<div class="px-6 py-8">
<div class="flex items-center gap-3 mb-10">
<span class="material-symbols-outlined text-3xl text-orange-700" style="font-variation-settings: 'FILL' 1;">restaurant_menu</span>
<span class="text-lg font-black text-orange-700 tracking-tighter brand-font">The Culinary Curator</span>
</div>
<div class="flex items-center gap-4 mb-8 p-3 rounded-xl bg-surface-container-low">
<div class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-white font-bold overflow-hidden">
<img alt="Admin Portrait" class="w-full h-full object-cover" data-alt="professional portrait of a culinary administrator in a modern office setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCG0ktSjd0beRjzdYibKWZ-4eQ-8FU95N3_mDPzoiXTEnLfdNo6n_ADQjiBCUxaSfJ4SrRal6IKGSTknV2o4HmL_2UHN0BWeK9vbHEKY1399rakXojl_NDeBDNj1lLcSfZLOxtunboOKQc7_iftU99M2MK3cP7FPyEh8AvChrE6zrJo4lT75qx3fzM3gFMkQGPV3P9rDVm0CZli8Xb6FJNlEYgLPtiRJlQHprj3w9gt7lxRZLjIT8sBG708iQd3M3C9x9cR_mocQcA"/>
</div>
<div>
<p class="font-['Plus_Jakarta_Sans'] text-sm font-medium text-orange-700">Culinary Admin</p>
<p class="text-xs text-stone-500">Seller Portal</p>
</div>
</div>
<nav class="space-y-1">
<a class="text-stone-600 dark:text-stone-400 hover:bg-stone-200 dark:hover:bg-stone-800 rounded-lg mx-2 my-1 px-4 py-3 flex items-center gap-3 font-['Plus_Jakarta_Sans'] text-sm font-medium transition-all" href="admin_dashboard_overview.php">
<span class="material-symbols-outlined">dashboard</span>
                    Dashboard
                </a>
<a class="bg-orange-600 text-white shadow-lg shadow-orange-700/20 rounded-lg mx-2 my-1 px-4 py-3 flex items-center gap-3 font-['Plus_Jakarta_Sans'] text-sm font-medium" href="manajemen_user_admin_panel.php">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">group</span>
                    User Management
                </a>
<a class="text-stone-600 dark:text-stone-400 hover:bg-stone-200 dark:hover:bg-stone-800 rounded-lg mx-2 my-1 px-4 py-3 flex items-center gap-3 font-['Plus_Jakarta_Sans'] text-sm font-medium transition-all" href="admin_manajemen_menu_pesanan.php">
<span class="material-symbols-outlined">menu_book</span>
                    Menu Management
                </a>
<a class="text-stone-600 dark:text-stone-400 hover:bg-stone-200 dark:hover:bg-stone-800 rounded-lg mx-2 my-1 px-4 py-3 flex items-center gap-3 font-['Plus_Jakarta_Sans'] text-sm font-medium transition-all" href="daftar_pesanan_admin_panel.php">
<span class="material-symbols-outlined">list_alt</span>
                    Orders
                </a>
<a class="text-stone-600 dark:text-stone-400 hover:bg-stone-200 dark:hover:bg-stone-800 rounded-lg mx-2 my-1 px-4 py-3 flex items-center gap-3 font-['Plus_Jakarta_Sans'] text-sm font-medium transition-all" href="moderasi_analitik_admin.php">
<span class="material-symbols-outlined">insights</span>
                    Analytics
                </a>
<a class="text-stone-600 dark:text-stone-400 hover:bg-stone-200 dark:hover:bg-stone-800 rounded-lg mx-2 my-1 px-4 py-3 flex items-center gap-3 font-['Plus_Jakarta_Sans'] text-sm font-medium transition-all" href="admin_promo_pengaturan.php">
<span class="material-symbols-outlined">settings</span>
                    Settings
                </a>
</nav>
</div>
</aside>
<!-- Main Content Canvas -->
<main class="ml-72 flex-1 p-8 pb-24">
<!-- Header Section -->
<header class="flex justify-between items-end mb-10">
<div>
<h1 class="text-4xl font-extrabold tracking-tight text-on-surface mb-2">User Management</h1>
<p class="text-stone-500 font-medium">Oversee your platform's community and access controls.</p>
</div>
<button class="bg-gradient-to-br from-primary to-primary-container text-white px-8 py-4 rounded-full font-bold flex items-center gap-2 shadow-lg shadow-primary/20 active:scale-95 transition-transform">
<span class="material-symbols-outlined">person_add</span>
                Tambah User Baru
            </button>
</header>
<div class="grid grid-cols-12 gap-8">
<!-- Table Section (Bento Style) -->
<div class="col-span-12 lg:col-span-8 space-y-6">
<div class="bg-surface-container-lowest rounded-[32px] p-2 shadow-sm">
<div class="overflow-x-auto">
<table class="w-full text-left border-separate border-spacing-0">
<thead>
<tr>
<th class="px-6 py-5 text-xs font-bold uppercase tracking-widest text-stone-400 border-b border-surface-container-low">Nama</th>
<th class="px-6 py-5 text-xs font-bold uppercase tracking-widest text-stone-400 border-b border-surface-container-low">Email</th>
<th class="px-6 py-5 text-xs font-bold uppercase tracking-widest text-stone-400 border-b border-surface-container-low">Role</th>
<th class="px-6 py-5 text-xs font-bold uppercase tracking-widest text-stone-400 border-b border-surface-container-low text-right">Aksi</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container-low">
<tr class="hover:bg-surface-container-low/30 transition-colors group">
<td class="px-6 py-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-tertiary-fixed flex items-center justify-center text-tertiary font-bold">JD</div>
<span class="font-bold text-on-surface">Julian Decca</span>
</div>
</td>
<td class="px-6 py-5 text-stone-600">julian.decca@curator.com</td>
<td class="px-6 py-5">
<span class="px-3 py-1 rounded-sm bg-primary-fixed text-on-primary-fixed-variant text-xs font-bold uppercase tracking-wider">Admin</span>
</td>
<td class="px-6 py-5 text-right">
<div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 hover:bg-orange-50 text-orange-700 rounded-lg transition-colors">
<span class="material-symbols-outlined text-xl">edit</span>
</button>
<button class="p-2 hover:bg-red-50 text-error rounded-lg transition-colors">
<span class="material-symbols-outlined text-xl">delete</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-surface-container-low/30 transition-colors group">
<td class="px-6 py-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center text-secondary font-bold">MS</div>
<span class="font-bold text-on-surface">Maria Sari</span>
</div>
</td>
<td class="px-6 py-5 text-stone-600">maria.bakery@culinary.id</td>
<td class="px-6 py-5">
<span class="px-3 py-1 rounded-sm bg-surface-container-highest text-on-secondary-container text-xs font-bold uppercase tracking-wider">Penjual</span>
</td>
<td class="px-6 py-5 text-right">
<div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 hover:bg-orange-50 text-orange-700 rounded-lg transition-colors">
<span class="material-symbols-outlined text-xl">edit</span>
</button>
<button class="p-2 hover:bg-red-50 text-error rounded-lg transition-colors">
<span class="material-symbols-outlined text-xl">delete</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-surface-container-low/30 transition-colors group">
<td class="px-6 py-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-tertiary-fixed-dim flex items-center justify-center text-on-tertiary-fixed-variant font-bold">AR</div>
<span class="font-bold text-on-surface">Andi Rizky</span>
</div>
</td>
<td class="px-6 py-5 text-stone-600">andi.rizky@gmail.com</td>
<td class="px-6 py-5">
<span class="px-3 py-1 rounded-sm bg-tertiary-fixed text-on-tertiary-fixed-variant text-xs font-bold uppercase tracking-wider">Pembeli</span>
</td>
<td class="px-6 py-5 text-right">
<div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 hover:bg-orange-50 text-orange-700 rounded-lg transition-colors">
<span class="material-symbols-outlined text-xl">edit</span>
</button>
<button class="p-2 hover:bg-red-50 text-error rounded-lg transition-colors">
<span class="material-symbols-outlined text-xl">delete</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-surface-container-low/30 transition-colors group">
<td class="px-6 py-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center text-primary font-bold">SM</div>
<span class="font-bold text-on-surface">Siti Maemunah</span>
</div>
</td>
<td class="px-6 py-5 text-stone-600">siti.fresh@organic.com</td>
<td class="px-6 py-5">
<span class="px-3 py-1 rounded-sm bg-surface-container-highest text-on-secondary-container text-xs font-bold uppercase tracking-wider">Penjual</span>
</td>
<td class="px-6 py-5 text-right">
<div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 hover:bg-orange-50 text-orange-700 rounded-lg transition-colors">
<span class="material-symbols-outlined text-xl">edit</span>
</button>
<button class="p-2 hover:bg-red-50 text-error rounded-lg transition-colors">
<span class="material-symbols-outlined text-xl">delete</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Stats/Bento Support -->
<div class="grid grid-cols-2 gap-6">
<div class="bg-primary text-white p-8 rounded-[32px] relative overflow-hidden group">
<div class="relative z-10">
<p class="text-sm font-bold uppercase tracking-widest opacity-80 mb-1">Total Users</p>
<h3 class="text-5xl font-black mb-4">1,284</h3>
<div class="flex items-center gap-2 text-sm font-semibold">
<span class="bg-white/20 px-2 py-1 rounded-md text-xs">+12%</span>
<span>this month</span>
</div>
</div>
<span class="material-symbols-outlined absolute -right-4 -bottom-4 text-9xl opacity-10 group-hover:scale-110 transition-transform">group</span>
</div>
<div class="bg-surface-container-high p-8 rounded-[32px] relative overflow-hidden group">
<div class="relative z-10">
<p class="text-sm font-bold uppercase tracking-widest text-stone-500 mb-1">Active Now</p>
<h3 class="text-5xl font-black text-on-surface mb-4">42</h3>
<div class="flex items-center gap-2 text-sm font-semibold text-stone-600">
<div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
<span>Real-time tracking</span>
</div>
</div>
<span class="material-symbols-outlined absolute -right-4 -bottom-4 text-9xl text-primary/5 group-hover:scale-110 transition-transform">bolt</span>
</div>
</div>
</div>
<!-- Form Section -->
<div class="col-span-12 lg:col-span-4">
<div class="sticky top-8 bg-surface-container-high/50 backdrop-blur-md rounded-[32px] p-8 border border-white/50 shadow-xl">
<div class="flex items-center gap-3 mb-8">
<div class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center text-primary shadow-sm">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">add_circle</span>
</div>
<div>
<h2 class="text-xl font-bold tracking-tight">Tambah User</h2>
<p class="text-sm text-stone-500">Konfigurasi akun baru</p>
</div>
</div>
<form class="space-y-6">
<div>
<label class="block text-xs font-bold uppercase tracking-widest text-stone-500 mb-2 ml-1">Nama Lengkap</label>
<div class="relative">
<div class="absolute inset-y-0 left-0 w-1 bg-primary rounded-full my-3"></div>
<input class="w-full bg-surface-container-lowest border-none rounded-xl py-4 pl-6 focus:ring-0 text-on-surface placeholder-stone-300 font-medium transition-all" placeholder="Contoh: Budi Santoso" type="text"/>
</div>
</div>
<div>
<label class="block text-xs font-bold uppercase tracking-widest text-stone-500 mb-2 ml-1">Email Bisnis</label>
<div class="relative">
<input class="w-full bg-surface-container-lowest border-none rounded-xl py-4 px-6 focus:ring-0 text-on-surface placeholder-stone-300 font-medium" placeholder="budi@email.com" type="email"/>
</div>
</div>
<div>
<label class="block text-xs font-bold uppercase tracking-widest text-stone-500 mb-2 ml-1">Password</label>
<div class="relative">
<input class="w-full bg-surface-container-lowest border-none rounded-xl py-4 px-6 focus:ring-0 text-on-surface placeholder-stone-300 font-medium" placeholder="••••••••" type="password"/>
</div>
</div>
<div>
<label class="block text-xs font-bold uppercase tracking-widest text-stone-500 mb-2 ml-1">Akses Role</label>
<select class="w-full bg-surface-container-lowest border-none rounded-xl py-4 px-6 focus:ring-0 text-on-surface font-medium appearance-none">
<option value="pembeli">Pembeli (Default)</option>
<option value="penjual">Penjual (Merchant)</option>
<option value="admin">Admin (Full Access)</option>
</select>
</div>
<div class="pt-4">
<button class="w-full bg-on-surface text-white py-5 rounded-full font-bold shadow-xl hover:bg-stone-800 transition-all active:scale-[0.98]" type="submit">
                                Simpan Data User
                            </button>
<p class="text-center text-xs text-stone-400 mt-4 px-4 leading-relaxed">
                                Dengan menyimpan, user akan menerima email verifikasi secara otomatis.
                            </p>
</div>
</form>
</div>
</div>
</div>
</main>
<!-- Bottom Nav for Mobile view (only visible on small screens) -->
<div class="md:hidden fixed bottom-0 left-0 w-full flex justify-around items-center px-4 pb-6 pt-3 bg-white/80 dark:bg-stone-900/80 backdrop-blur-xl shadow-[0_-8px_32px_rgba(0,0,0,0.06)] z-50 rounded-t-[32px]">
<button class="flex flex-col items-center justify-center text-stone-400 px-5 py-2">
<span class="material-symbols-outlined">home</span>
<span class="font-['Plus_Jakarta_Sans'] text-[10px] font-semibold uppercase tracking-widest mt-1">Home</span>
</button>
<button class="flex flex-col items-center justify-center bg-orange-50 text-orange-700 rounded-2xl px-5 py-2">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">group</span>
<span class="font-['Plus_Jakarta_Sans'] text-[10px] font-semibold uppercase tracking-widest mt-1">Users</span>
</button>
<button class="flex flex-col items-center justify-center text-stone-400 px-5 py-2">
<span class="material-symbols-outlined">shopping_cart</span>
<span class="font-['Plus_Jakarta_Sans'] text-[10px] font-semibold uppercase tracking-widest mt-1">Store</span>
</button>
<button class="flex flex-col items-center justify-center text-stone-400 px-5 py-2">
<span class="material-symbols-outlined">person</span>
<span class="font-['Plus_Jakarta_Sans'] text-[10px] font-semibold uppercase tracking-widest mt-1">Profile</span>
</button>
</div>
</body></html>