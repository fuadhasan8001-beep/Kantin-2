
 <!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Kantin Kita Admin - Moderation &amp; Analytics</title>
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
<body class="bg-background text-on-background selection:bg-primary-fixed selection:text-on-primary-fixed">
<!-- TopAppBar -->
<header class="fixed top-0 w-full flex justify-between items-center px-6 h-16 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl z-50 shadow-[0_8px_30px_rgb(0,0,0,0.04)] lg:hidden">
<div class="flex items-center gap-4">
<button class="text-orange-800 dark:text-orange-500 active:scale-95 transition-transform duration-200">
<span class="material-symbols-outlined" data-icon="menu">menu</span>
</button>
<h1 class="text-xl font-extrabold bg-gradient-to-br from-orange-700 to-red-600 bg-clip-text text-transparent font-['Plus_Jakarta_Sans'] tracking-tight">Kantin Kita</h1>
</div>
<button class="text-orange-800 dark:text-orange-500 active:scale-95 transition-transform duration-200">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
</header>
<div class="flex min-h-screen">
<!-- NavigationDrawer (Desktop Only) -->
<aside class="hidden lg:flex flex-col p-6 space-y-2 h-screen w-72 rounded-r-3xl sticky top-0 tonal-shift bg-white dark:bg-slate-900 shadow-2xl shadow-orange-900/5 z-40">
<div class="text-2xl font-black text-orange-800 dark:text-orange-500 mb-8 font-['Plus_Jakarta_Sans']">Kantin Kita</div>
<div class="flex items-center gap-4 p-4 mb-6 bg-surface-container-low rounded-2xl">
<div class="w-12 h-12 rounded-full overflow-hidden">
<img class="w-full h-full object-cover" data-alt="close-up portrait of a professional male administrator in a clean office setting with soft natural lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIKZatZ4bJukgrV-gxJTn_vKpEFADlYVo4q3cSb8gDp3diqKjtLsLdE5387GNP4BrA4D-Ei3ecsrPceaqyOB4AncqJg7PvoJPAPW_8iCOMPmOHPTPJlenc6F7lHJv5TMivfI7fwSPJqEECDy9_GhG_ro9cKFEDJFdtHLeJSZNDkt0gcR2lZvRC5n9ZVXrMbcsAY44b0kFidsfEKyLNve0RT6VtAwBvaDWu1LIP_L0aspIdQLtGlXbi4PEY4Z6aAzspdEQ2TVbOm3c"/>
</div>
<div>
<p class="font-bold text-on-surface text-sm">Kantin Admin</p>
<p class="text-xs text-on-surface-variant">System Overseer</p>
</div>
</div>
<nav class="space-y-1">
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-200/50 rounded-xl hover:translate-x-1 transition-all duration-200 font-medium text-sm" href="admin_dashboard_overview.php">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span> Dashboard
                </a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-200/50 rounded-xl hover:translate-x-1 transition-all duration-200 font-medium text-sm" href="admin_manajemen_menu_pesanan.php">
<span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span> Inventory
                </a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-200/50 rounded-xl hover:translate-x-1 transition-all duration-200 font-medium text-sm" href="admin_promo_pengaturan.php">
<span class="material-symbols-outlined" data-icon="monitoring">monitoring</span> Sales Reports
                </a>
<a class="flex items-center gap-3 px-4 py-3 bg-gradient-to-r from-orange-600 to-red-600 text-white rounded-xl shadow-lg shadow-orange-500/20 active:scale-[0.98] transition-all duration-200 font-medium text-sm" href="moderasi_analitik_admin.php">
<span class="material-symbols-outlined" data-icon="gavel" style="font-variation-settings: 'FILL' 1;">gavel</span> Moderation
                </a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-200/50 rounded-xl hover:translate-x-1 transition-all duration-200 font-medium text-sm" href="admin_promo_pengaturan.php">
<span class="material-symbols-outlined" data-icon="payments">payments</span> Commission
                </a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-200/50 rounded-xl hover:translate-x-1 transition-all duration-200 font-medium text-sm" href="admin_promo_pengaturan.php">
<span class="material-symbols-outlined" data-icon="settings">settings</span> Settings
                </a>
</nav>
</aside>
<!-- Main Content Canvas -->
<main class="flex-1 px-4 lg:px-12 pt-24 lg:pt-12 pb-32 lg:pb-12 overflow-x-hidden">
<header class="mb-10">
<p class="text-primary font-bold tracking-widest text-xs uppercase mb-2 font-['Be_Vietnam_Pro']">Administrative Suite</p>
<h2 class="text-4xl lg:text-5xl font-extrabold text-on-surface tracking-tight leading-none mb-4">Moderation &amp; <br class="lg:hidden"/><span class="text-primary-container">Analytics</span></h2>
</header>
<!-- Bento Analytics Grid -->
<div class="grid grid-cols-1 md:grid-cols-12 gap-6 mb-12">
<!-- Produk Terlaris (Featured Chart) -->
<div class="md:col-span-8 bg-surface-container-low rounded-[32px] p-8 relative overflow-hidden flex flex-col justify-between min-h-[400px]">
<div class="flex justify-between items-start mb-8 z-10">
<div>
<h3 class="text-2xl font-bold text-on-surface mb-1">Produk Terlaris</h3>
<p class="text-on-surface-variant text-sm">Top performing culinary delights this month</p>
</div>
<span class="bg-primary/10 text-primary px-4 py-1 rounded-full text-xs font-bold">LIVE DATA</span>
</div>
<div class="flex-1 flex items-end gap-3 lg:gap-6 z-10 pb-4">
<div class="flex-1 flex flex-col items-center gap-3">
<div class="w-full bg-primary rounded-t-2xl transition-all duration-700" style="height: 85%;"></div>
<span class="text-[10px] font-bold text-on-surface-variant truncate w-full text-center">Nasi Goreng</span>
</div>
<div class="flex-1 flex flex-col items-center gap-3">
<div class="w-full bg-primary/60 rounded-t-2xl transition-all duration-700" style="height: 65%;"></div>
<span class="text-[10px] font-bold text-on-surface-variant truncate w-full text-center">Mie Ayam</span>
</div>
<div class="flex-1 flex flex-col items-center gap-3">
<div class="w-full bg-primary/40 rounded-t-2xl transition-all duration-700" style="height: 50%;"></div>
<span class="text-[10px] font-bold text-on-surface-variant truncate w-full text-center">Sate Maranggi</span>
</div>
<div class="flex-1 flex flex-col items-center gap-3">
<div class="w-full bg-primary/30 rounded-t-2xl transition-all duration-700" style="height: 40%;"></div>
<span class="text-[10px] font-bold text-on-surface-variant truncate w-full text-center">Es Teh Manis</span>
</div>
<div class="flex-1 flex flex-col items-center gap-3">
<div class="w-full bg-primary/20 rounded-t-2xl transition-all duration-700" style="height: 30%;"></div>
<span class="text-[10px] font-bold text-on-surface-variant truncate w-full text-center">Ayam Penyet</span>
</div>
</div>
<div class="absolute -right-16 -top-16 w-64 h-64 bg-primary/5 rounded-full blur-3xl"></div>
</div>
<!-- Commission Settings (Square Card) -->
<div class="md:col-span-4 flex flex-col gap-6">
<div class="flex-1 bg-primary text-on-primary rounded-[32px] p-8 flex flex-col justify-between shadow-xl shadow-primary/20">
<div>
<span class="material-symbols-outlined text-4xl mb-4" data-icon="payments">payments</span>
<h3 class="text-xl font-bold mb-2">Commission Rate</h3>
<p class="text-on-primary/80 text-xs">Global platform fee for every successful transaction.</p>
</div>
<div class="mt-6">
<div class="relative group">
<input class="w-full bg-on-primary/10 border-none rounded-2xl py-4 px-6 text-3xl font-black text-on-primary focus:ring-2 focus:ring-on-primary/50 transition-all outline-none" type="text" value="12.5"/>
<span class="absolute right-6 top-1/2 -translate-y-1/2 text-2xl font-bold">%</span>
</div>
<button class="w-full mt-4 bg-white text-primary font-bold py-3 rounded-xl active:scale-[0.98] transition-all text-sm uppercase tracking-widest">Update Rate</button>
</div>
</div>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<!-- Moderation List (Wide) -->
<div class="lg:col-span-2 space-y-6">
<div class="flex items-center justify-between">
<h3 class="text-2xl font-bold text-on-surface">Reports Queue</h3>
<div class="flex gap-2">
<button class="px-4 py-2 bg-surface-container-high rounded-full text-xs font-bold text-primary">All Reports</button>
<button class="px-4 py-2 text-xs font-bold text-on-surface-variant">Sellers Only</button>
</div>
</div>
<div class="space-y-4">
<!-- Reported User Card -->
<div class="bg-white rounded-3xl p-6 flex flex-col md:flex-row md:items-center justify-between gap-6 hover:shadow-lg transition-shadow duration-300">
<div class="flex items-center gap-4">
<div class="w-14 h-14 rounded-2xl bg-surface-container-highest flex items-center justify-center overflow-hidden">
<img class="w-full h-full object-cover" data-alt="headshot of a smiling chef in white uniform with blurred kitchen background and warm lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAEdZDCRq8rYzj4nFxj7rvEQwGNYpVTFOS1zAjmUp9lMWowB8tQ-AK7wPYGhpy_dgX8cCTjyXlA54erA5XB6E31KmAbROV6iEcSYqo4_fsHqeB_RHwNAblVObqlqhEYIqKdGvp28vZOX-KKWRozkyNyV6SCRGVaxUG3aiBqzdKC-I-JTdeTIGoEZVpKssnTpIXmJtvzmufiNytKG0beddQlaMQQTS3jfMIRACruCt30Yqn3FQhshh93Zfrbbwk9rfp0Ee8stZ1Ivv8"/>
</div>
<div>
<p class="font-bold text-on-surface">Warung Bu Endang</p>
<p class="text-xs text-error font-medium flex items-center gap-1">
<span class="material-symbols-outlined text-sm" data-icon="report">report</span> 
                                        3 recent reports: "Inaccurate pricing"
                                    </p>
</div>
</div>
<div class="flex items-center gap-3">
<button class="flex-1 md:flex-none px-6 py-2.5 bg-error/10 text-error font-bold rounded-xl text-xs active:scale-95 transition-all">SUSPEND</button>
<button class="flex-1 md:flex-none px-6 py-2.5 bg-surface-container-highest text-on-surface-variant font-bold rounded-xl text-xs active:scale-95 transition-all">VIEW DETAILS</button>
</div>
</div>
<!-- Reported User Card -->
<div class="bg-white rounded-3xl p-6 flex flex-col md:flex-row md:items-center justify-between gap-6 hover:shadow-lg transition-shadow duration-300 border-l-4 border-orange-500">
<div class="flex items-center gap-4">
<div class="w-14 h-14 rounded-2xl bg-surface-container-highest flex items-center justify-center overflow-hidden">
<img class="w-full h-full object-cover" data-alt="portrait of a young delivery driver wearing a branded cap and polo shirt with bright outdoor morning light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCAabTmeSqn8TdvglLCVHo_TUYGBMX7TaJDaB5HyeTClhV4p9KANJALfTSz4Gj6ZY4V5gcKpLgH0SAz1XpQEEk2JbaFYEPfRDoGJOO6Cj_bvq3bVyOqxsS9PbNjBrVrwoCZwPMnF7JUJpFLz7_PaXunK0Vq6Qb5vqjI4K-oThXmOvoZbSkwZV5S1rcBoenX3VTXBmZM-TDVRQzGm_ZJ-xHn10HalmYxT19g8p3LxxKOgAys-SzWs_P9iUgRQuMkDNm-j58ufcOrccM"/>
</div>
<div>
<p class="font-bold text-on-surface">Driver - Rahmat H.</p>
<p class="text-xs text-on-surface-variant font-medium flex items-center gap-1">
<span class="material-symbols-outlined text-sm" data-icon="history">history</span> 
                                        Under review for "Late delivery"
                                    </p>
</div>
</div>
<div class="flex items-center gap-3">
<button class="flex-1 md:flex-none px-6 py-2.5 bg-primary text-on-primary font-bold rounded-xl text-xs shadow-lg shadow-primary/20 active:scale-95 transition-all">ACTIVATE</button>
<button class="flex-1 md:flex-none px-6 py-2.5 bg-surface-container-highest text-on-surface-variant font-bold rounded-xl text-xs active:scale-95 transition-all">VIEW LOGS</button>
</div>
</div>
</div>
</div>
<!-- Side Info: Activity Log & Peak Time -->
<div class="space-y-8">
<div class="bg-surface-container-highest rounded-[32px] p-6">
<h3 class="text-xl font-bold text-on-surface mb-6 flex items-center gap-2">
<span class="material-symbols-outlined" data-icon="analytics">analytics</span>
                            Analisis Waktu Ramai
                        </h3>
<div class="space-y-4">
<div class="flex items-center gap-3">
<span class="text-xs font-bold text-on-surface-variant w-10">12:00</span>
<div class="flex-1 h-3 bg-white rounded-full overflow-hidden">
<div class="h-full bg-primary" style="width: 95%;"></div>
</div>
<span class="text-xs font-bold text-primary">Peak</span>
</div>
<div class="flex items-center gap-3">
<span class="text-xs font-bold text-on-surface-variant w-10">10:00</span>
<div class="flex-1 h-3 bg-white rounded-full overflow-hidden">
<div class="h-full bg-primary/40" style="width: 45%;"></div>
</div>
<span class="text-xs font-bold text-on-surface-variant">Low</span>
</div>
<div class="flex items-center gap-3">
<span class="text-xs font-bold text-on-surface-variant w-10">17:00</span>
<div class="flex-1 h-3 bg-white rounded-full overflow-hidden">
<div class="h-full bg-primary/70" style="width: 75%;"></div>
</div>
<span class="text-xs font-bold text-on-surface-variant">Mid</span>
</div>
</div>
</div>
<div class="bg-white rounded-[32px] p-6 shadow-sm">
<h3 class="text-xl font-bold text-on-surface mb-6 flex items-center justify-between">
                            Log Aktivitas
                            <span class="material-symbols-outlined text-on-surface-variant" data-icon="more_vert">more_vert</span>
</h3>
<div class="space-y-6 relative before:content-[''] before:absolute before:left-4 before:top-2 before:bottom-2 before:w-[2px] before:bg-surface-container">
<div class="relative pl-10">
<div class="absolute left-0 top-1 w-8 h-8 rounded-full bg-surface-container flex items-center justify-center z-10">
<span class="material-symbols-outlined text-sm" data-icon="shield">shield</span>
</div>
<p class="text-sm font-bold text-on-surface">Suspended Seller #441</p>
<p class="text-xs text-on-surface-variant">Admin: Budi S. • 2 mins ago</p>
</div>
<div class="relative pl-10">
<div class="absolute left-0 top-1 w-8 h-8 rounded-full bg-surface-container flex items-center justify-center z-10">
<span class="material-symbols-outlined text-sm" data-icon="settings">settings</span>
</div>
<p class="text-sm font-bold text-on-surface">Commission Updated</p>
<p class="text-xs text-on-surface-variant">System • 1 hour ago</p>
</div>
<div class="relative pl-10">
<div class="absolute left-0 top-1 w-8 h-8 rounded-full bg-surface-container flex items-center justify-center z-10">
<span class="material-symbols-outlined text-sm" data-icon="person_add">person_add</span>
</div>
<p class="text-sm font-bold text-on-surface">Approved 3 New Sellers</p>
<p class="text-xs text-on-surface-variant">Admin: Budi S. • 4 hours ago</p>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
<!-- BottomNavBar (Mobile Only) -->
<nav class="fixed bottom-0 w-full z-50 flex justify-around items-center px-4 pt-3 pb-6 bg-white/70 dark:bg-slate-900/70 backdrop-blur-2xl lg:hidden shadow-[0_-10px_40px_rgba(0,0,0,0.05)] rounded-t-[32px]">
<a class="flex flex-col items-center justify-center text-slate-400 opacity-60 hover:opacity-100 transition-opacity active:scale-90 transition-all duration-300" href="admin_dashboard_overview.php">
<span class="material-symbols-outlined" data-icon="restaurant">restaurant</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] uppercase tracking-widest font-semibold mt-1">Explore</span>
</a>
<a class="flex flex-col items-center justify-center text-slate-400 opacity-60 hover:opacity-100 transition-opacity active:scale-90 transition-all duration-300" href="daftar_pesanan_admin_panel.php">
<span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] uppercase tracking-widest font-semibold mt-1">Orders</span>
</a>
<a class="flex flex-col items-center justify-center text-orange-700 relative after:content-[''] after:absolute after:-bottom-1 after:w-1 after:h-1 after:bg-orange-600 after:rounded-full active:scale-90 transition-all duration-300" href="moderasi_analitik_admin.php">
<span class="material-symbols-outlined" data-icon="analytics" style="font-variation-settings: 'FILL' 1;">analytics</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] uppercase tracking-widest font-semibold mt-1">Reports</span>
</a>
<a class="flex flex-col items-center justify-center text-slate-400 opacity-60 hover:opacity-100 transition-opacity active:scale-90 transition-all duration-300" href="admin_manajemen_user_penjual.php">
<span class="material-symbols-outlined" data-icon="chat_bubble">chat_bubble</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] uppercase tracking-widest font-semibold mt-1">Chat</span>
</a>
<a class="flex flex-col items-center justify-center text-slate-400 opacity-60 hover:opacity-100 transition-opacity active:scale-90 transition-all duration-300" href="manajemen_user_admin_panel.php">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] uppercase tracking-widest font-semibold mt-1">Profile</span>
</a>
</nav>
</body></html>