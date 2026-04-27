<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
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
<body class="bg-surface text-on-surface min-h-screen flex">
<!-- SideNavBar Component -->
<aside class="h-screen w-64 fixed left-0 top-0 flex flex-col bg-surface-container-lowest dark:bg-surface-container-low border-r-0 z-50">
<div class="p-6">
<h1 class="text-xl font-black text-primary tracking-tighter">Kantin Kita</h1>
<p class="text-xs font-semibold text-on-surface-variant uppercase tracking-widest mt-1">Seller Center</p>
</div>
<nav class="flex flex-col h-full p-4 gap-2">
<!-- Dashboard -->
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-all rounded-xl font-medium active:scale-[0.98] duration-150" href="dashboard_penjual.php">
<span class="material-symbols-outlined">dashboard</span>
<span class="font-['Plus_Jakarta_Sans'] text-sm">Dashboard</span>
</a>
<!-- Kelola Menu (ACTIVE) -->
<a class="flex items-center gap-3 px-4 py-3 bg-primary/10 text-primary rounded-xl font-bold active:scale-[0.98] duration-150 transition-all" href="kelola_menu_penjual.php">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">restaurant_menu</span>
<span class="font-['Plus_Jakarta_Sans'] text-sm">Kelola Menu</span>
</a>
<!-- Pesanan Masuk -->
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-all rounded-xl font-medium active:scale-[0.98] duration-150" href="pesanan_masuk_penjual.php">
<span class="material-symbols-outlined">pending_actions</span>
<span class="font-['Plus_Jakarta_Sans'] text-sm">Pesanan Masuk</span>
</a>
<!-- Riwayat Pesanan -->
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-all rounded-xl font-medium active:scale-[0.98] duration-150" href="riwayat_pesanan_penjual.php">
<span class="material-symbols-outlined">history</span>
<span class="font-['Plus_Jakarta_Sans'] text-sm">Riwayat Pesanan</span>
</a>
<div class="mt-auto pt-4 border-t border-outline-variant/10">
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-error hover:bg-error-container/20 transition-all rounded-xl font-medium active:scale-[0.98] duration-150" href="../halaman_login.php">
<span class="material-symbols-outlined">logout</span>
<span class="font-['Plus_Jakarta_Sans'] text-sm">Logout</span>
</a>
</div>
</nav>
</aside>
<!-- Main Content Canvas -->
<main class="flex-1 ml-64 min-h-screen">
<!-- TopAppBar Component -->
<header class="bg-surface/80 backdrop-blur-xl sticky top-0 z-40 px-8 py-6 flex justify-between items-center shadow-sm">
<div class="flex flex-col">
<h2 class="text-2xl font-extrabold text-on-surface tracking-tight font-['Plus_Jakarta_Sans']">Kelola Menu</h2>
<p class="text-on-surface-variant text-sm font-medium">Kelola daftar menu dan stok makanan Anda.</p>
</div>
<div class="flex items-center gap-4">
<button class="bg-gradient-to-br from-primary to-primary-container text-on-primary px-6 py-3 rounded-full flex items-center gap-2 font-bold shadow-md hover:shadow-lg transition-all active:scale-95 duration-200">
<span class="material-symbols-outlined">add</span>
<span>Tambah Menu Baru</span>
</button>
<div class="flex gap-2">
<button class="p-2 text-on-surface-variant hover:bg-primary/5 rounded-full transition-colors active:scale-95">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="p-2 text-on-surface-variant hover:bg-primary/5 rounded-full transition-colors active:scale-95">
<span class="material-symbols-outlined">settings</span>
</button>
</div>
</div>
</header>
<!-- Content Body -->
<div class="p-8">
<!-- Filter & Search Row -->
<div class="mb-8 flex flex-col md:flex-row gap-4 items-center justify-between">
<div class="flex gap-2 p-1 bg-surface-container-low rounded-xl">
<button class="px-5 py-2 bg-primary text-on-primary rounded-lg text-sm font-semibold shadow-sm transition-all">Semua</button>
<button class="px-5 py-2 text-on-surface-variant hover:text-on-surface transition-all text-sm font-semibold">Makanan</button>
<button class="px-5 py-2 text-on-surface-variant hover:text-on-surface transition-all text-sm font-semibold">Minuman</button>
<button class="px-5 py-2 text-on-surface-variant hover:text-on-surface transition-all text-sm font-semibold">Camilan</button>
</div>
<div class="relative w-full md:w-80">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-surface-container-highest border-none rounded-xl text-sm focus:ring-0 focus:border-l-2 focus:border-primary transition-all" placeholder="Cari menu..." type="text"/>
</div>
</div>
<!-- Menu Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-8">
<!-- Menu Card 1 -->
<div class="bg-surface-container-low rounded-xl overflow-hidden flex flex-col transition-all hover:translate-y-[-4px]">
<div class="relative h-48 w-full">
<img class="w-full h-full object-cover" data-alt="Appetizing Indonesian Ayam Penyet with sambal, fresh cucumber, and fried tofu on a rustic plate" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCPDcfesksVQ68W9GFM53ks0i81b3fCUA0G7p6vkJsBYo6fLJPc0Ckwm61eWkG8WrvlVx4GWZ5L7YmZODKFDq9Z_w5E0jWNhnN6c1HSCCYmhcj10yfM3bFQgyQkYqNxVpvSe2ON12KlkqDXVoIfH8o95laIMhOiPtiePUiVgVEH1ECTSP_GJKVIUiVosGj49deuuB2AlRZ8oc-bluefDp1pN4gbVx8Ig153NJFNTfLDniVjb5ri4vGs6ANGIt8t5djoVL0S7faDTpQ"/>
<div class="absolute top-3 right-3">
<span class="px-3 py-1 bg-green-100 text-green-800 text-[10px] font-extrabold uppercase tracking-widest rounded-full flex items-center gap-1 shadow-sm">
<span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                                Tersedia
                            </span>
</div>
</div>
<div class="p-5 flex-1 flex flex-col">
<div class="flex justify-between items-start mb-4">
<div>
<h3 class="text-lg font-bold text-on-surface leading-tight">Nasi Ayam Penyet</h3>
<p class="text-xs text-on-surface-variant font-medium mt-1">Spicy grilled chicken with savory sambal</p>
</div>
</div>
<div class="mt-auto flex justify-between items-end">
<span class="text-xl font-extrabold text-primary">Rp 20.000</span>
<div class="flex gap-2">
<button class="p-2 bg-surface-container-highest text-tertiary rounded-lg hover:bg-tertiary-container/10 transition-colors active:scale-95">
<span class="material-symbols-outlined">edit</span>
</button>
<button class="p-2 bg-surface-container-highest text-error rounded-lg hover:bg-error-container/20 transition-colors active:scale-95">
<span class="material-symbols-outlined">delete</span>
</button>
</div>
</div>
</div>
</div>
<!-- Menu Card 2 -->
<div class="bg-surface-container-low rounded-xl overflow-hidden flex flex-col transition-all hover:translate-y-[-4px]">
<div class="relative h-48 w-full">
<img class="w-full h-full object-cover" data-alt="Freshly squeezed orange juice in a crystal glass with ice and mint leaf on a sunny table" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCumpFi0n4jr_KI6s6xEp4x3iYY2LheyEmitmZgw-FUeNLeA47YzXATfrsi_n6eNwgi8_CkEoP_p7swZBySHTeRtyTKZiXr0S2k0kOHskV9QHlxRCAUMOa8pWCdSxf6hzSgYSggYu-m80FJShHohB5N9dmYuCd9zOkw6GsA3KiKYj3zLaqrNA_mgQnbDgNBBFL23ePoDCdjL1hD4K59AkP1F7AMIyK-pfnWVmebYdsV54UAeabG1BggfwUC-KykiXa23BMhf6_mpVo"/>
<div class="absolute top-3 right-3">
<span class="px-3 py-1 bg-green-100 text-green-800 text-[10px] font-extrabold uppercase tracking-widest rounded-full flex items-center gap-1 shadow-sm">
<span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                                Tersedia
                            </span>
</div>
</div>
<div class="p-5 flex-1 flex flex-col">
<div class="flex justify-between items-start mb-4">
<div>
<h3 class="text-lg font-bold text-on-surface leading-tight">Es Jeruk Segar</h3>
<p class="text-xs text-on-surface-variant font-medium mt-1">100% pure orange juice with ice</p>
</div>
</div>
<div class="mt-auto flex justify-between items-end">
<span class="text-xl font-extrabold text-primary">Rp 12.000</span>
<div class="flex gap-2">
<button class="p-2 bg-surface-container-highest text-tertiary rounded-lg hover:bg-tertiary-container/10 transition-colors active:scale-95">
<span class="material-symbols-outlined">edit</span>
</button>
<button class="p-2 bg-surface-container-highest text-error rounded-lg hover:bg-error-container/20 transition-colors active:scale-95">
<span class="material-symbols-outlined">delete</span>
</button>
</div>
</div>
</div>
</div>
<!-- Menu Card 3 -->
<div class="bg-surface-container-low rounded-xl overflow-hidden flex flex-col transition-all hover:translate-y-[-4px]">
<div class="relative h-48 w-full">
<img class="w-full h-full object-cover filter grayscale-[0.3] brightness-75" data-alt="Golden brown fried rice with prawns and vegetables served on a banana leaf" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCrbGXmi5enge7hIqP-WL3cybehGcmMOggBRC55aUrdxtRb4RxzkFVbAgMgfrnaSMT85rtJ3Bm_m3cPZEW9Gkg2ioakJkFADakZc0ABDZV1PgbyqBKawoSuqCrn-yGD3hgZ43iH9Us9lGVWZsPT2O6vE4-CgNbONw29_20PSQNw1cxxnhbyWZ3XyAWUh9C6qMF3_UXu-nr-HdPyD_loTWD8VJe9VbZOhwkFcr3r8UCExlAErTwM-yRumEi0dXpY_uV6jXXQR4AmZIA"/>
<div class="absolute inset-0 bg-on-surface/40 flex items-center justify-center">
<span class="px-4 py-2 bg-error text-on-error text-xs font-black uppercase tracking-widest rounded-lg shadow-xl">
                                Stok Habis
                            </span>
</div>
<div class="absolute top-3 right-3">
<span class="px-3 py-1 bg-red-100 text-red-800 text-[10px] font-extrabold uppercase tracking-widest rounded-full flex items-center gap-1 shadow-sm">
<span class="w-1.5 h-1.5 bg-red-500 rounded-full"></span>
                                Habis
                            </span>
</div>
</div>
<div class="p-5 flex-1 flex flex-col">
<div class="flex justify-between items-start mb-4">
<div>
<h3 class="text-lg font-bold text-on-surface/50 leading-tight">Nasi Goreng Spesial</h3>
<p class="text-xs text-on-surface-variant/50 font-medium mt-1">Signature fried rice with seafood</p>
</div>
</div>
<div class="mt-auto flex justify-between items-end">
<span class="text-xl font-extrabold text-on-surface/30">Rp 25.000</span>
<div class="flex gap-2">
<button class="p-2 bg-surface-container-highest text-tertiary rounded-lg hover:bg-tertiary-container/10 transition-colors active:scale-95">
<span class="material-symbols-outlined">edit</span>
</button>
<button class="p-2 bg-surface-container-highest text-error rounded-lg hover:bg-error-container/20 transition-colors active:scale-95">
<span class="material-symbols-outlined">delete</span>
</button>
</div>
</div>
</div>
</div>
<!-- Menu Card 4 -->
<div class="bg-surface-container-low rounded-xl overflow-hidden flex flex-col transition-all hover:translate-y-[-4px]">
<div class="relative h-48 w-full">
<img class="w-full h-full object-cover" data-alt="Traditional Indonesian Gado-gado salad with peanut sauce and crackers on a wooden bowl" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAOvxxiXPf-ZDc6nC3xSa7vgGBuhTR85LcCmKZiDxYFHoPxkX9i_3aaClMqz3hdVH-sluD0FNHgN62wBf774wI7tBQF2HHFGV5sFak_xp3y2lfHaF4EmqwXOM51T0mJoyQ9eGMW3YGVZ0-RKJiznbnDkINLRhP3ls-FWzrw2XAZDlKBAdAAxSdR9FTbYPkwMywutfBJJdc5N9vtwUduwAkM9lYksGSHO3O-OPeRlTVJ55BBZ1ofGus89959DCWntT76Z08k3DQup2Q"/>
<div class="absolute top-3 right-3">
<span class="px-3 py-1 bg-green-100 text-green-800 text-[10px] font-extrabold uppercase tracking-widest rounded-full flex items-center gap-1 shadow-sm">
<span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                                Tersedia
                            </span>
</div>
</div>
<div class="p-5 flex-1 flex flex-col">
<div class="flex justify-between items-start mb-4">
<div>
<h3 class="text-lg font-bold text-on-surface leading-tight">Gado-gado Betawi</h3>
<p class="text-xs text-on-surface-variant font-medium mt-1">Mixed vegetables with creamy peanut sauce</p>
</div>
</div>
<div class="mt-auto flex justify-between items-end">
<span class="text-xl font-extrabold text-primary">Rp 18.000</span>
<div class="flex gap-2">
<button class="p-2 bg-surface-container-highest text-tertiary rounded-lg hover:bg-tertiary-container/10 transition-colors active:scale-95">
<span class="material-symbols-outlined">edit</span>
</button>
<button class="p-2 bg-surface-container-highest text-error rounded-lg hover:bg-error-container/20 transition-colors active:scale-95">
<span class="material-symbols-outlined">delete</span>
</button>
</div>
</div>
</div>
</div>
<!-- Menu Card 5 -->
<div class="bg-surface-container-low rounded-xl overflow-hidden flex flex-col transition-all hover:translate-y-[-4px]">
<div class="relative h-48 w-full">
<img class="w-full h-full object-cover" data-alt="Bowl of creamy vanilla ice cream topped with chocolate drizzle and a cherry" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBH_oiJbH8spB0ryzeNCpNEL-ld_BeRNPSNAcIo8a0L7B_c1SEjlF_qdY0GdYdjf17qoowIFOY4YFPb1zybyp_bQxp7pwBTMHspFbzGekNwvZv59Aiz2IgmzEHX8riaHxf014A48HLbCKz9veLwLEXO5DvGdmHQ9HgNz2S-L25H7BQioP-H4QlbEOH_S5M7NGsmhQn2XHcvPOHfU0IqG_dIXtVXus8kp3h9MqTUXFgM4fpslePsbq2IVnwWEIpiWtlmKFbDKskWd3I"/>
<div class="absolute top-3 right-3">
<span class="px-3 py-1 bg-green-100 text-green-800 text-[10px] font-extrabold uppercase tracking-widest rounded-full flex items-center gap-1 shadow-sm">
<span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                                Tersedia
                            </span>
</div>
</div>
<div class="p-5 flex-1 flex flex-col">
<div class="flex justify-between items-start mb-4">
<div>
<h3 class="text-lg font-bold text-on-surface leading-tight">Es Krim Vanila</h3>
<p class="text-xs text-on-surface-variant font-medium mt-1">Premium vanilla bean ice cream</p>
</div>
</div>
<div class="mt-auto flex justify-between items-end">
<span class="text-xl font-extrabold text-primary">Rp 15.000</span>
<div class="flex gap-2">
<button class="p-2 bg-surface-container-highest text-tertiary rounded-lg hover:bg-tertiary-container/10 transition-colors active:scale-95">
<span class="material-symbols-outlined">edit</span>
</button>
<button class="p-2 bg-surface-container-highest text-error rounded-lg hover:bg-error-container/20 transition-colors active:scale-95">
<span class="material-symbols-outlined">delete</span>
</button>
</div>
</div>
</div>
</div>
<!-- Empty State / Add New Card (Asymmetric Layout) -->
<div class="group border-2 border-dashed border-outline-variant rounded-xl flex flex-col items-center justify-center p-8 hover:bg-surface-container-low hover:border-primary transition-all cursor-pointer">
<div class="w-16 h-16 rounded-full bg-surface-container-highest flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-primary/10 transition-all">
<span class="material-symbols-outlined text-primary text-4xl">add_circle</span>
</div>
<h3 class="text-lg font-bold text-on-surface text-center">Tambah Menu Baru</h3>
<p class="text-sm text-on-surface-variant text-center mt-2 max-w-[180px]">Mulai berjualan dengan menambahkan menu spesial Anda.</p>
</div>
</div>
</div>
</main>
</body></html>