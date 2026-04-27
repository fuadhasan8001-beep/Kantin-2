<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Kantin Kita - Seller Dashboard</title>
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
<body class="bg-surface text-on-surface min-h-screen">
<!-- TopAppBar -->
<header class="fixed top-0 w-full flex justify-between items-center px-6 h-16 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] z-50">
<div class="flex items-center gap-4">
<button class="text-orange-800 dark:text-orange-500 hover:bg-slate-100/50 p-2 rounded-full transition-colors active:scale-95">
<span class="material-symbols-outlined" data-icon="menu">menu</span>
</button>
<span class="text-xl font-extrabold bg-gradient-to-br from-orange-700 to-red-600 bg-clip-text text-transparent font-['Plus_Jakarta_Sans'] tracking-tight">Kantin Kita</span>
</div>
<div class="flex items-center gap-2">
<button class="text-orange-800 dark:text-orange-500 hover:bg-slate-100/50 p-2 rounded-full transition-colors active:scale-95">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
</div>
</header>
<div class="flex pt-16 pb-20 md:pb-0">
<!-- NavigationDrawer (Sidebar) -->
<aside class="hidden lg:flex flex-col p-6 space-y-2 h-screen w-72 fixed left-0 bg-white dark:bg-slate-900 shadow-2xl shadow-orange-900/5">
<div class="mb-8 p-4 bg-surface-container rounded-2xl flex items-center gap-3">
<div class="w-12 h-12 rounded-xl bg-primary flex items-center justify-center overflow-hidden">
<img alt="Admin" class="w-full h-full object-cover" data-alt="close-up portrait of a professional chef in a white uniform smiling warmly in a bright commercial kitchen" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAO1YgTXrMwp9Gm2FX0M8UtSsiW-tGE0sVYI6A5kNvkqfX-wHrIhoJ8r4h_P1pnGE9onHEdpgeoMP1wg7Nuw9eAwUFE_Z7ckvcU5ilqdKkyCw7LXnGiGt1TejIst2HCzZwXer_oo1beSBa5JTjamNpeAIQUEpenY0DCc1_KaYN9iDNGehQAkBHAOf6deUHyytXQNQ1hxpr7sTmUb1yvubALqQ2fYl09LWI_a79o2BwwI00ps0btZnL3yNm_YNilDktiHLrkKmsjh9s"/>
</div>
<div>
<p class="text-sm font-bold font-headline">Kantin Admin</p>
<p class="text-xs text-on-surface-variant">System Overseer</p>
</div>
</div>
<nav class="space-y-1">
<a class="flex items-center gap-3 px-4 py-3 bg-gradient-to-r from-orange-600 to-red-600 text-white rounded-xl shadow-lg shadow-orange-500/20 font-medium text-sm transition-all active:scale-[0.98]" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-200/50 dark:hover:bg-slate-800/50 rounded-xl font-medium text-sm transition-transform hover:translate-x-1" href="#">
<span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
<span>Inventory</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-200/50 dark:hover:bg-slate-800/50 rounded-xl font-medium text-sm transition-transform hover:translate-x-1" href="#">
<span class="material-symbols-outlined" data-icon="monitoring">monitoring</span>
<span>Sales Reports</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-200/50 dark:hover:bg-slate-800/50 rounded-xl font-medium text-sm transition-transform hover:translate-x-1" href="#">
<span class="material-symbols-outlined" data-icon="gavel">gavel</span>
<span>Moderation</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-200/50 dark:hover:bg-slate-800/50 rounded-xl font-medium text-sm transition-transform hover:translate-x-1" href="#">
<span class="material-symbols-outlined" data-icon="payments">payments</span>
<span>Commission</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-200/50 dark:hover:bg-slate-800/50 rounded-xl font-medium text-sm transition-transform hover:translate-x-1" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span>Settings</span>
</a>
</nav>
</aside>
<!-- Main Content Area -->
<main class="flex-1 lg:ml-72 px-4 md:px-8 py-8 space-y-8 max-w-7xl">
<!-- Welcome Section -->
<section class="flex flex-col md:flex-row justify-between items-start md:items-end gap-4">
<div>
<h1 class="text-3xl font-extrabold tracking-tight text-on-surface">Dashboard Overview</h1>
<p class="text-on-surface-variant">Here is what's happening in your kitchen today.</p>
</div>
<div class="flex bg-surface-container-high rounded-lg p-1">
<button class="px-4 py-2 text-xs font-bold uppercase tracking-widest bg-primary text-on-primary rounded-sm shadow-sm">Daily</button>
<button class="px-4 py-2 text-xs font-bold uppercase tracking-widest text-on-surface-variant">Weekly</button>
<button class="px-4 py-2 text-xs font-bold uppercase tracking-widest text-on-surface-variant">Monthly</button>
</div>
</section>
<!-- Earnings Bento Grid -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Main Chart Card -->
<div class="md:col-span-2 bg-white rounded-3xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] relative overflow-hidden">
<div class="flex justify-between items-center mb-8">
<div>
<p class="text-sm text-on-surface-variant font-label uppercase tracking-widest">Total Earnings</p>
<h2 class="text-4xl font-black text-on-surface">Rp 4.280.000</h2>
</div>
<div class="text-right">
<span class="inline-flex items-center text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-full">+12.5%</span>
</div>
</div>
<!-- Placeholder Chart visualization using Flexbars -->
<div class="flex items-end justify-between h-48 gap-2">
<div class="flex-1 bg-surface-container rounded-t-lg h-[40%]"></div>
<div class="flex-1 bg-surface-container rounded-t-lg h-[65%]"></div>
<div class="flex-1 bg-surface-container rounded-t-lg h-[50%]"></div>
<div class="flex-1 bg-primary rounded-t-lg h-[85%] relative group">
<div class="absolute -top-10 left-1/2 -translate-x-1/2 bg-on-surface text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">Rp 820k</div>
</div>
<div class="flex-1 bg-surface-container rounded-t-lg h-[60%]"></div>
<div class="flex-1 bg-surface-container rounded-t-lg h-[75%]"></div>
<div class="flex-1 bg-surface-container rounded-t-lg h-[45%]"></div>
</div>
</div>
<!-- Secondary Stats Stack -->
<div class="space-y-6">
<div class="bg-surface-container-low rounded-3xl p-6 flex flex-col justify-between h-40">
<span class="material-symbols-outlined text-orange-700" data-icon="receipt_long">receipt_long</span>
<div>
<p class="text-3xl font-extrabold">124</p>
<p class="text-sm font-label uppercase tracking-tighter text-on-surface-variant">Active Orders</p>
</div>
</div>
<div class="bg-tertiary/10 rounded-3xl p-6 flex flex-col justify-between h-40">
<span class="material-symbols-outlined text-tertiary" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<div>
<p class="text-3xl font-extrabold">4.9</p>
<p class="text-sm font-label uppercase tracking-tighter text-on-surface-variant">Avg. Rating</p>
</div>
</div>
</div>
</section>
<!-- Quick Actions & Status Updates -->
<section class="space-y-4">
<h3 class="text-xl font-bold px-1">Active Processing</h3>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<div class="bg-white p-5 rounded-2xl shadow-sm border-l-4 border-orange-200 flex items-center justify-between group hover:shadow-md transition-all">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-xl bg-orange-100 flex items-center justify-center text-orange-700">
<span class="material-symbols-outlined" data-icon="restaurant">restaurant</span>
</div>
<div>
<p class="text-sm font-bold">Nasi Goreng Spesial</p>
<p class="text-xs text-on-surface-variant">#ORD-2044 • Table 04</p>
</div>
</div>
<button class="bg-primary hover:bg-primary-container text-white text-xs font-bold px-4 py-2 rounded-full transition-transform active:scale-95">Diproses</button>
</div>
<div class="bg-white p-5 rounded-2xl shadow-sm border-l-4 border-yellow-200 flex items-center justify-between group hover:shadow-md transition-all">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-xl bg-yellow-50 flex items-center justify-center text-yellow-700">
<span class="material-symbols-outlined" data-icon="shopping_bag">shopping_bag</span>
</div>
<div>
<p class="text-sm font-bold">Ayam Geprek Sambal</p>
<p class="text-xs text-on-surface-variant">#ORD-2041 • Pickup</p>
</div>
</div>
<button class="bg-yellow-600 hover:bg-yellow-700 text-white text-xs font-bold px-4 py-2 rounded-full transition-transform active:scale-95">Siap Diambil</button>
</div>
<div class="bg-white p-5 rounded-2xl shadow-sm border-l-4 border-green-200 flex items-center justify-between group hover:shadow-md transition-all">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center text-green-700">
<span class="material-symbols-outlined" data-icon="check_circle">check_circle</span>
</div>
<div>
<p class="text-sm font-bold">Mie Ayam Jamur</p>
<p class="text-xs text-on-surface-variant">#ORD-2039 • Table 12</p>
</div>
</div>
<button class="bg-green-600 hover:bg-green-700 text-white text-xs font-bold px-4 py-2 rounded-full transition-transform active:scale-95">Selesai</button>
</div>
</div>
</section>
<!-- Stock Management Section -->
<section class="bg-white rounded-[32px] p-8 shadow-[0_8px_30px_rgb(0,0,0,0.02)]">
<div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
<div>
<h3 class="text-2xl font-extrabold tracking-tight">Stock Management</h3>
<p class="text-on-surface-variant">Inventory alerts and automatic tracking.</p>
</div>
<button class="flex items-center gap-2 bg-surface-container-highest px-6 py-3 rounded-full text-sm font-bold hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                        Update Inventory
                    </button>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Low Stock Alert Item -->
<div class="relative bg-surface p-5 rounded-2xl overflow-hidden group">
<div class="absolute top-0 right-0 p-3">
<span class="flex h-2 w-2">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
<span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
</span>
</div>
<img alt="Salad" class="w-full h-32 object-cover rounded-xl mb-4 grayscale-[0.2] group-hover:grayscale-0 transition-all" data-alt="high-angle studio shot of a fresh garden salad with tomatoes, cucumbers, and olive oil dressing in a ceramic bowl" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_69T2t600nrFwJdmmcoSUlZi2xejB_ZdwygA7t3hs6duuen5IaCWGo92jG5xIQll2CLFfxON8n-YkN2_j8qQ2lmL08smEg3X_SRfDdcsDawFEID2semPvWYqTvkyrK7bpW0XvNU3lSrmwKbX79PDVwPfqk64SPPWm-ToA54tzWlmaYmMz048XuR8tsfkC0O6Fz1qNilxTJQO8TFxzf8zy-O_oBkzFXr6F1scGrK1ZtoC1av6TLHqJRZMZJGz6jCFyeaIC-X9q9w8"/>
<h4 class="font-bold text-sm">Garden Mix Salad</h4>
<div class="flex justify-between items-center mt-2">
<span class="text-xs text-red-600 font-bold">Only 3 Left</span>
<span class="text-xs font-label uppercase text-on-surface-variant">Daily Stock</span>
</div>
<div class="mt-4 w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
<div class="bg-red-500 h-full w-[15%]"></div>
</div>
</div>
<!-- Out of Stock Item -->
<div class="bg-surface p-5 rounded-2xl opacity-60 relative grayscale group">
<div class="absolute inset-0 flex items-center justify-center z-10 pointer-events-none">
<span class="bg-on-surface/90 text-white px-4 py-2 rounded-lg font-bold text-xs uppercase tracking-widest rotate-[-12deg]">Stok Habis</span>
</div>
<img alt="Soda" class="w-full h-32 object-cover rounded-xl mb-4" data-alt="cold refreshing soda glass with condensation and ice cubes against a vibrant orange studio background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCbJyw2AJJq4naz28vQJ52As36xArhCf__gOXgOAHF6X3VZgzSft3pzxXVu8zBRPAxlkLZ-oitbQmHrPodiDoYeO-P8G2kwKGXbSkP7lbymgJwOIoClJgwDcdQwnzm4y1X9rIBmO1fAvwZOSY4iIzI0F1cAVb4UsXSZ67vFQ4MYz7rKwpTIZc9JphXmF-_F9wcU9Nn01qcoJbQFNahUhA7Y1StuIg37Z6HcdQLrzRTwEas57Enrvc7oioW9Vp0jxP62KVqvUdQ3N_U"/>
<h4 class="font-bold text-sm">Lemon Iced Tea</h4>
<div class="flex justify-between items-center mt-2">
<span class="text-xs text-on-surface-variant">0 In Stock</span>
<span class="text-xs font-label uppercase text-on-surface-variant">Beverages</span>
</div>
</div>
<!-- Normal Stock Item -->
<div class="bg-surface p-5 rounded-2xl group">
<img alt="Pizza" class="w-full h-32 object-cover rounded-xl mb-4" data-alt="top view of a rustic sourdough pizza with fresh mozzarella and basil leaves on a wooden paddle" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAGENVECcHsS4a4H7nw-faY1Yua-QDQZY6n4kzKAoLYjdQBtwlgFAVlLStwlMpoD8uV1JndFP_JUpPvFiDcnUdBaOD9BW6ARHP_ltn35UIF9TUi7ecsKU_GjJtnhO9xdCHBm_8RnwvnU-wp_Gr0H3mgjQdG2KfzTU7JEddalruok0ej_5G_I35QTrY7268AE9Q7wj4MH2IpBkg2h3yhz4GMuH9K6_CnHKGZ-m356KDVjg_mtyGpz9WoB_MZTQJXCaHqCYK3Yk-jG4E"/>
<h4 class="font-bold text-sm">Margherita Pizza</h4>
<div class="flex justify-between items-center mt-2">
<span class="text-xs text-green-600 font-bold">42 In Stock</span>
<span class="text-xs font-label uppercase text-on-surface-variant">Main Dish</span>
</div>
<div class="mt-4 w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
<div class="bg-green-500 h-full w-[80%]"></div>
</div>
</div>
<!-- Normal Stock Item -->
<div class="bg-surface p-5 rounded-2xl group">
<img alt="Noodles" class="w-full h-32 object-cover rounded-xl mb-4" data-alt="close-up of spicy ramen noodles with soft boiled egg and spring onions in a deep ceramic bowl" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBa3m-7x3mrkeZdOSuKjFeGePCs684bVTkvJIQCaTCQKJkAvoXTDPD3Kz78mFlbb8aVZiSZdAQLJC41G71itl2ohDbSJ0r3GZWIHwbD_hqitG9phk91AgXY_Pi5x0-4TcBQRirBqj-1HEapZvwi3HqeUvNgXqAhfRy2bvRkPXB176dCHW1MKjE6ANQ3-HbsEtAPri6Aaxo2hCCQUn0bxLQ6SUpiUR2CY0C4vZ1VQSsDcYDpp0xBDF_426QZGgwuPmxk4TLJMwLoE_M"/>
<h4 class="font-bold text-sm">Spicy Beef Ramen</h4>
<div class="flex justify-between items-center mt-2">
<span class="text-xs text-green-600 font-bold">28 In Stock</span>
<span class="text-xs font-label uppercase text-on-surface-variant">Soup</span>
</div>
<div class="mt-4 w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
<div class="bg-green-500 h-full w-[60%]"></div>
</div>
</div>
</div>
</section>
</main>
</div>
<!-- BottomNavBar (Mobile) -->
<nav class="md:hidden fixed bottom-0 w-full z-50 flex justify-around items-center px-4 pt-3 pb-6 bg-white/70 dark:bg-slate-900/70 backdrop-blur-2xl shadow-[0_-10px_40px_rgba(0,0,0,0.05)] rounded-t-[32px]">
<a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 opacity-60 hover:opacity-100 transition-all duration-300 active:scale-90" href="#">
<span class="material-symbols-outlined" data-icon="restaurant">restaurant</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] uppercase tracking-widest font-semibold mt-1">Explore</span>
</a>
<a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 opacity-60 hover:opacity-100 transition-all duration-300 active:scale-90" href="#">
<span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] uppercase tracking-widest font-semibold mt-1">Orders</span>
</a>
<a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 opacity-60 hover:opacity-100 transition-all duration-300 active:scale-90" href="#">
<span class="material-symbols-outlined" data-icon="chat_bubble">chat_bubble</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] uppercase tracking-widest font-semibold mt-1">Chat</span>
</a>
<a class="flex flex-col items-center justify-center text-orange-700 dark:text-orange-400 relative after:content-[''] after:absolute after:-bottom-1 after:w-1 after:h-1 after:bg-orange-600 after:rounded-full transition-all duration-300 active:scale-90" href="#">
<span class="material-symbols-outlined" data-icon="analytics" style="font-variation-settings: 'FILL' 1;">analytics</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] uppercase tracking-widest font-semibold mt-1">Reports</span>
</a>
<a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 opacity-60 hover:opacity-100 transition-all duration-300 active:scale-90" href="#">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] uppercase tracking-widest font-semibold mt-1">Profile</span>
</a>
</nav>
</body></html>