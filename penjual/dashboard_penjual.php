<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
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
          },
        },
      }
    </script>
<style>
        body { font-family: 'Be Vietnam Pro', sans-serif; }
        h1, h2, h3 { font-family: 'Plus Jakarta Sans', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-surface text-on-surface">
<div class="flex min-h-screen">
<!-- SideNavBar -->
<aside class="h-screen w-64 fixed left-0 top-0 flex flex-col bg-surface-container-lowest dark:bg-surface-container-low border-r-0 bg-surface-container-low flat no shadows">
<div class="flex flex-col h-full p-4 gap-2">
<!-- Brand Header -->
<div class="px-4 py-6 mb-4">
<h1 class="text-xl font-black text-primary font-['Plus_Jakarta_Sans']">Kantin Kita</h1>
<p class="text-xs font-medium text-on-surface-variant font-['Plus_Jakarta_Sans'] uppercase tracking-widest">Seller Center</p>
</div>
<!-- Seller Profile Card -->
<div class="mx-2 mb-6 p-4 rounded-xl bg-surface-container-high">
<div class="flex items-center gap-3">
<img class="w-10 h-10 rounded-full object-cover" data-alt="Professional chef portrait in a clean modern kitchen setting with warm sunlight" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8o8TQYUCwrEVlbutRvyxJ0RP-CQ47A-aiVPmA7s_12L9U8FENwFGlBCFiiwQSJlhUZyoyyydLxxNNaHkgEwFLoTNfXTEm3AstSW9JF-IEFO0O8x3A7jsFVXv5GIIChoglTXih6ma6aHDXQvHn014oErTzqE_RqaLcEba3IQyLMtoUrA7QVOIoKYHI0f1a3zC_oasegB1PcB8xlVC1B8TxggdWx04PXvIIwGwuIT-OCDJtbSD4j_Xg5xvEgJjQ-IqaiW9HzSTrBHE"/>
<div>
<p class="text-[10px] font-bold text-on-surface-variant uppercase tracking-tighter">Selamat Datang</p>
<p class="text-sm font-bold text-on-surface truncate">kantin_barokah</p>
</div>
</div>
</div>
<!-- Navigation Tabs -->
<nav class="flex-1 space-y-1" id="sidebar-nav">
<a class="nav-item flex items-center gap-3 px-4 py-3 bg-primary/10 text-primary rounded-xl font-bold font-['Plus_Jakarta_Sans'] text-sm active:scale-[0.98] duration-150 transition-all" data-target="dashboard" href="dashboard_penjual.php">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span>Dashboard</span>
</a>
<a class="nav-item flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-all font-['Plus_Jakarta_Sans'] text-sm active:scale-[0.98] duration-150" data-target="kelola-menu" href="kelola_menu_penjual.php">
<span class="material-symbols-outlined" data-icon="restaurant_menu">restaurant_menu</span>
<span>Kelola Menu</span>
</a>
<a class="nav-item flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-all font-['Plus_Jakarta_Sans'] text-sm active:scale-[0.98] duration-150" data-target="pesanan-masuk" href="pesanan_masuk_penjual.php">
<span class="material-symbols-outlined" data-icon="pending_actions">pending_actions</span>
<span>Pesanan Masuk</span>
</a>
<a class="nav-item flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-all font-['Plus_Jakarta_Sans'] text-sm active:scale-[0.98] duration-150" data-target="riwayat-pesanan" href="riwayat_pesanan_penjual.php">
<span class="material-symbols-outlined" data-icon="history">history</span>
<span>Riwayat Pesanan</span>
</a>
</nav>
<!-- Footer Action -->
<div class="mt-auto pt-4 border-t border-outline-variant/20">
<a class="flex items-center gap-3 px-4 py-3 text-error hover:bg-error/5 rounded-xl font-bold font-['Plus_Jakarta_Sans'] text-sm transition-all active:scale-[0.98]" href="../halaman_login.php">
<span class="material-symbols-outlined" data-icon="logout">logout</span>
<span>Logout</span>
</a>
</div>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 ml-64 p-8 bg-surface">
<!-- Header Section -->
<header class="mb-10">
<div class="flex justify-between items-end">
<div>
<h2 class="text-3xl font-extrabold text-on-surface tracking-tight font-display">Dashboard Penjual</h2>
<p class="text-on-surface-variant mt-1">Halo <span class="font-bold text-primary">kantin_barokah</span>, berikut ringkasan kantin Anda hari ini.</p>
</div>
<div class="flex gap-2">
<button class="p-2 rounded-full hover:bg-surface-container-high transition-colors text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<button class="p-2 rounded-full hover:bg-surface-container-high transition-colors text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
</button>
</div>
</div>
</header>
<!-- Stat Cards Bento Grid -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
<!-- Stat Card: Total Menu -->
<div class="p-6 rounded-2xl bg-tertiary-fixed shadow-sm border border-tertiary/10 flex flex-col justify-between">
<div class="flex justify-between items-start">
<div class="p-2 bg-tertiary-container/10 rounded-xl">
<span class="material-symbols-outlined text-tertiary-container" data-icon="menu_book">menu_book</span>
</div>
<span class="text-[10px] font-bold text-tertiary-container uppercase tracking-wider bg-tertiary-container/10 px-2 py-1 rounded-full">Aktif</span>
</div>
<div class="mt-8">
<p class="text-sm font-medium text-on-tertiary-fixed-variant">Total Menu Aktif</p>
<h3 class="text-4xl font-black text-on-tertiary-fixed font-display mt-1">24</h3>
</div>
</div>
<!-- Stat Card: Pending Orders -->
<div class="p-6 rounded-2xl bg-secondary-fixed shadow-sm border border-secondary/10 flex flex-col justify-between">
<div class="flex justify-between items-start">
<div class="p-2 bg-secondary/10 rounded-xl">
<span class="material-symbols-outlined text-secondary" data-icon="hourglass_empty">hourglass_empty</span>
</div>
<span class="text-[10px] font-bold text-secondary uppercase tracking-wider bg-secondary/10 px-2 py-1 rounded-full">Proses</span>
</div>
<div class="mt-8">
<p class="text-sm font-medium text-on-secondary-fixed-variant">Pesanan Perlu Diproses</p>
<h3 class="text-4xl font-black text-on-secondary-fixed font-display mt-1">5</h3>
</div>
</div>
<!-- Stat Card: Revenue -->
<div class="p-6 rounded-2xl bg-surface-container-high shadow-sm border border-primary/5 flex flex-col justify-between overflow-hidden relative">
<div class="absolute -right-4 -top-4 opacity-5">
<span class="material-symbols-outlined text-[120px]" data-icon="payments">payments</span>
</div>
<div class="flex justify-between items-start relative z-10">
<div class="p-2 bg-primary/10 rounded-xl">
<span class="material-symbols-outlined text-primary" data-icon="payments">payments</span>
</div>
<span class="text-[10px] font-bold text-primary uppercase tracking-wider bg-primary/10 px-2 py-1 rounded-full">Pendapatan</span>
</div>
<div class="mt-8 relative z-10">
<p class="text-sm font-medium text-on-surface-variant">Total Pendapatan</p>
<h3 class="text-2xl font-black text-on-surface font-display mt-1">Rp 1.250.000</h3>
</div>
</div>
</section>
<!-- Quick Access Section -->
<section>
<div class="flex items-center gap-4 mb-6">
<h2 class="text-xl font-bold text-on-surface tracking-tight">Akses Cepat</h2>
<div class="h-[2px] flex-1 bg-surface-container-high rounded-full overflow-hidden">
<div class="h-full w-16 bg-primary-container"></div>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
<button class="group flex items-center justify-between p-5 bg-primary rounded-2xl text-on-primary font-bold transition-all hover:shadow-lg hover:shadow-primary/20 active:scale-95" onclick="window.location.href='kelola_menu_penjual.php'">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined p-2 bg-white/20 rounded-xl" data-icon="add_circle">add_circle</span>
<span class="font-['Plus_Jakarta_Sans']">Tambah Menu Baru</span>
</div>
<span class="material-symbols-outlined opacity-0 group-hover:opacity-100 transition-opacity" data-icon="arrow_forward">arrow_forward</span>
</button>
<button class="group flex items-center justify-between p-5 bg-tertiary-container rounded-2xl text-on-tertiary-container font-bold transition-all hover:shadow-lg hover:shadow-tertiary-container/20 active:scale-95" onclick="window.location.href='pesanan_masuk_penjual.php'">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined p-2 bg-white/20 rounded-xl" data-icon="shopping_basket">shopping_basket</span>
<span class="font-['Plus_Jakarta_Sans']">Cek Pesanan Masuk</span>
</div>
<span class="material-symbols-outlined opacity-0 group-hover:opacity-100 transition-opacity" data-icon="arrow_forward">arrow_forward</span>
</button>
<button class="group flex items-center justify-between p-5 bg-surface-container-highest rounded-2xl text-on-surface font-bold transition-all hover:bg-surface-variant active:scale-95" onclick="window.location.href='riwayat_pesanan_penjual.php'">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined p-2 bg-on-surface/5 rounded-xl" data-icon="assignment">assignment</span>
<span class="font-['Plus_Jakarta_Sans']">Lihat Riwayat</span>
</div>
<span class="material-symbols-outlined opacity-0 group-hover:opacity-100 transition-opacity" data-icon="arrow_forward">arrow_forward</span>
</button>
</div>
</section>
<!-- Bottom Content (Asymmetric Feature) -->
<section class="mt-12 grid grid-cols-1 lg:grid-cols-5 gap-8">
<!-- Recent Orders Preview -->
<div class="lg:col-span-3 bg-surface-container-low rounded-3xl p-8">
<div class="flex justify-between items-center mb-8">
<h3 class="font-bold text-lg text-on-surface">Pesanan Terbaru</h3>
<a class="text-sm font-bold text-primary flex items-center gap-1 hover:underline" href="pesanan_masuk_penjual.php">Semua Pesanan <span class="material-symbols-outlined text-sm" data-icon="chevron_right">chevron_right</span></a>
</div>
<div class="space-y-4">
<!-- Order Item -->
<div class="flex items-center gap-4 p-4 rounded-2xl bg-surface-container-lowest hover:bg-surface-container transition-colors cursor-pointer" onclick="window.location.href='pesanan_masuk_penjual.php'">
<div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary font-bold">#01</div>
<div class="flex-1">
<h4 class="font-bold text-on-surface">Nasi Goreng Spesial + Telur</h4>
<p class="text-xs text-on-surface-variant">Meja 05 • 12:45 WIB</p>
</div>
<div class="text-right">
<p class="font-bold text-primary">Rp 25.000</p>
<span class="text-[10px] px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-container font-bold uppercase">Proses</span>
</div>
</div>
<!-- Order Item -->
<div class="flex items-center gap-4 p-4 rounded-2xl bg-surface-container-lowest hover:bg-surface-container transition-colors cursor-pointer" onclick="window.location.href='pesanan_masuk_penjual.php'">
<div class="w-12 h-12 rounded-xl bg-tertiary/10 flex items-center justify-center text-tertiary font-bold">#02</div>
<div class="flex-1">
<h4 class="font-bold text-on-surface">Ayam Geprek Sambal Matah</h4>
<p class="text-xs text-on-surface-variant">Meja 12 • 12:40 WIB</p>
</div>
<div class="text-right">
<p class="font-bold text-primary">Rp 22.000</p>
<span class="text-[10px] px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-container font-bold uppercase">Proses</span>
</div>
</div>
</div>
</div>
<!-- Featured Analytics Promo -->
<div class="lg:col-span-2 relative overflow-hidden rounded-3xl bg-primary-container p-8 flex flex-col justify-end min-h-[320px]">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover mix-blend-overlay opacity-40" data-alt="Close-up of vibrant healthy Indonesian culinary dish with rich textures and professional lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBFeqlViBHHBwr6wnZgeaf-8GQtlSF6lcy5OPmRz9UtRjbyuojkFkB8TnAF9qAdQYYPjDUmtfPgfsYqkibjkTadLIKt1N5eq3ehQ9zjaNsH6bUhdDjsKTxu3Jz1W_poXrNmvHS5tz2hy3Y5t2Xv3rC4A51JYMdOl_IOVFXbimjLHTDQIOIk_i7ECnFmtVaapue3BFPMbY2jHeju0UY42CuN_7YeTW6J2tf8CQMycY7PXSxJ4DD0BdTrDse3ecZoMaQST7Wb6CCB_fg"/>
</div>
<div class="relative z-10 text-on-primary-container">
<h3 class="text-2xl font-black font-display leading-tight">Pantau Performa Kantin Anda Lebih Detail</h3>
<p class="mt-2 text-sm text-on-primary-container/80">Analisis menu terpopuler dan jam ramai pengunjung untuk tingkatkan omzet.</p>
<button class="mt-6 px-6 py-3 bg-white text-primary rounded-full font-bold text-sm shadow-md active:scale-95 transition-transform" onclick="window.location.href='riwayat_pesanan_penjual.php'">
                            Buka Laporan
                        </button>
</div>
</div>
</section>
</main>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navItems = document.querySelectorAll('.nav-item');
        
        // Handle Sidebar Navigation Clicks and Active States
        navItems.forEach(item => {
            item.addEventListener('click', function(e) {
                // Update active styles immediately for better UX before navigation
                navItems.forEach(nav => {
                    nav.classList.remove('bg-primary/10', 'text-primary', 'font-bold');
                    nav.classList.add('text-on-surface-variant');
                });
                this.classList.remove('text-on-surface-variant');
                this.classList.add('bg-primary/10', 'text-primary', 'font-bold');
            });
        });

        // Set active item based on current data-target (simulating routing logic)
        // Since we are on Dashboard, "dashboard" is active.
        const currentTarget = "dashboard"; 
        navItems.forEach(item => {
            if(item.getAttribute('data-target') === currentTarget) {
                item.classList.add('bg-primary/10', 'text-primary', 'font-bold');
                item.classList.remove('text-on-surface-variant');
            } else {
                item.classList.remove('bg-primary/10', 'text-primary', 'font-bold');
                item.classList.add('text-on-surface-variant');
            }
        });
    });
</script>
</body></html>