<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&amp;family=Be+Vietnam+Pro:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "surface-container-low": "#fff0ee",
                    "primary-fixed": "#ffdad3",
                    "secondary-fixed": "#ffdad3",
                    "secondary-fixed-dim": "#ffb4a4",
                    "inverse-primary": "#ffb4a4",
                    "secondary": "#9c4230",
                    "secondary-container": "#ff8f77",
                    "surface-container-lowest": "#ffffff",
                    "on-secondary-fixed-variant": "#7d2c1b",
                    "on-secondary": "#ffffff",
                    "on-error": "#ffffff",
                    "surface-bright": "#fff8f6",
                    "outline": "#8f7069",
                    "error": "#ba1a1a",
                    "on-primary": "#ffffff",
                    "error-container": "#ffdad6",
                    "surface-container-high": "#ffe2dc",
                    "surface-dim": "#f0d4ce",
                    "on-secondary-container": "#762616",
                    "primary-container": "#d63c1e",
                    "on-primary-fixed": "#3e0500",
                    "primary": "#b22204",
                    "surface-tint": "#b62506",
                    "inverse-on-surface": "#ffede9",
                    "on-background": "#271815",
                    "surface-container": "#ffe9e5",
                    "on-error-container": "#93000a",
                    "tertiary-container": "#007ea7",
                    "outline-variant": "#e3beb6",
                    "background": "#fff8f6",
                    "surface": "#fff8f6",
                    "tertiary-fixed": "#c2e8ff",
                    "on-tertiary-container": "#fbfcff",
                    "on-primary-fixed-variant": "#8d1600",
                    "on-surface": "#271815",
                    "on-primary-container": "#fffbff",
                    "on-secondary-fixed": "#3e0500",
                    "surface-variant": "#f9dcd6",
                    "on-surface-variant": "#5b403b",
                    "inverse-surface": "#3e2c29",
                    "primary-fixed-dim": "#ffb4a4"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "fontFamily": {
                    "headline": ["Plus Jakarta Sans"],
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
<header class="bg-white/80 backdrop-blur-md text-orange-700 font-['Plus_Jakarta_Sans'] font-bold tracking-tight text-lg shadow-sm sticky top-0 z-50 flex items-center justify-between px-6 py-4 w-full">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-2xl">menu</span>
<span class="text-2xl font-black tracking-tighter text-orange-700">Kantin Kita</span>
</div>
<span class="material-symbols-outlined">search</span>
</header>
<main class="p-6 max-w-4xl mx-auto pb-32">
<section class="mb-8">
<h1 class="text-3xl font-extrabold tracking-tight mb-4">Featured Dishes</h1>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Product Card Trigger -->
<div class="bg-surface-container-low rounded-xl overflow-hidden shadow-sm flex flex-col md:flex-row relative group cursor-pointer border border-transparent hover:border-primary/20 transition-all">
<img alt="Special Nasi Goreng" class="w-full md:w-48 h-48 object-cover" data-alt="Gourmet Nasi Goreng served on a ceramic plate with a fried egg, fresh cucumbers, and crackers, overhead warm lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBaYGSjAP-jy9HoyQaoo4htZIwBbhnYfNP94p5chyaV1u3iyUYdY1ObJtLD5rfe3NLw6ruFKGokvF582Zz0a_nrTZuAzfvVC-LOEdBJWiLymKcRbsiwO_15yLlPh-NzB-bXEC28JTydAF-Is_wFLD8tGkfxsDxkoSbD4V-LbiGbl8jxOwhpRPiyKj49vcUyvsN2EhEqLGUSkNFJhODTs4WL2zTaA9_stD8bw1oOGZCb4WirVNDzUIdp_c7f4t6tosIodeuK8Jxk_Ic"/>
<div class="p-6 flex flex-col justify-between flex-grow">
<div>
<div class="flex justify-between items-start mb-2">
<h3 class="text-xl font-bold text-on-surface">Nasi Goreng Spesial</h3>
<span class="bg-primary-container text-on-primary-container px-2 py-1 rounded text-xs font-bold tracking-widest uppercase">Popular</span>
</div>
<p class="text-on-surface-variant text-sm line-clamp-2 mb-4 leading-relaxed">Nasi goreng bumbu rempah otentik dengan telur mata sapi, ayam suwir, dan kerupuk udang renyah.</p>
</div>
<div class="flex items-baseline gap-2">
<span class="text-lg font-bold text-primary">Rp 28.000</span>
</div>
</div>
</div>
<div class="bg-surface-container-low rounded-xl overflow-hidden shadow-sm flex flex-col md:flex-row relative group cursor-pointer border border-transparent hover:border-primary/20 transition-all">
<img alt="Beef Kwetiau" class="w-full md:w-48 h-48 object-cover" data-alt="Stir-fried beef kwetiau with bean sprouts and green onions, vibrant colors, rustic cafe setting, soft natural light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAj3w0uonIYvhn_mFu_z6AMJTtcTbT1KXNtoXjQsM5o8RJ9CKFWxwzH7RWeEKhGuVp_DzRZwcqWh_NTY8fpiV4dxyOki5pRHyFjqx5xUAjPWV-fqe7Q1_FgwIMADcR0do_6qxnZk7QXywxFxFPqbPasZG1e7E4fsy2dnVIICSkW42UtiBvMP5gSrdliFJ22oANnyodmPIytAZI_4NXGO5c4ev_exreEVTw7yvbT1zvco5zrXvYLaTiipgYZBUIayxFZxfw_OpRoXco"/>
<div class="p-6 flex flex-col justify-between flex-grow">
<div>
<h3 class="text-xl font-bold text-on-surface mb-2">Kwetiau Sapi Siram</h3>
<p class="text-on-surface-variant text-sm line-clamp-2 mb-4 leading-relaxed">Mie lebar kenyal dengan kuah kental gurih dan irisan daging sapi empuk melimpah.</p>
</div>
<div class="flex items-baseline gap-2">
<span class="text-lg font-bold text-primary">Rp 35.000</span>
</div>
</div>
</div>
</div>
</section>
</main>
<!-- Modal Backdrop -->
<div class="fixed inset-0 bg-on-surface/20 backdrop-blur-sm z-[60] flex items-end md:items-center justify-center p-0 md:p-4">
<!-- Bottom Sheet / Modal Container -->
<div class="bg-surface-container-lowest w-full max-w-lg rounded-t-3xl md:rounded-3xl shadow-2xl overflow-hidden max-h-[795px] flex flex-col animate-in fade-in slide-in-from-bottom-10 duration-300">
<!-- Hero Image Header -->
<div class="relative h-64 md:h-56 shrink-0">
<img alt="Nasi Goreng" class="w-full h-full object-cover" data-alt="Close up of a premium nasi goreng dish with golden fried egg and aromatic herbs, rich textures and warm studio lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHIx6ty5_4Db_yzbjZ6Q-4sRaDlj2hAu8iZMZEQmPQcF4pTiEJtyIQWrl9DVq1RurVcUFYOnC2CEDMSfKN0tLI8k66V0WYcIpkInRDknbEVyEyt_kNgx_91XFnLmWRPmKrey52W-djKYJiTevNafuD-U_aGY_hQtqon5P--EGZbby5EyogZ4GxfyrZTy1gfh5zsTAOfBDJPoiP-bJC7Ai2j4UMMNH4APXRejpqRDcJ3I5Ji6hUr9LoqVvk3kpovA6_MX1XbDPJPcs"/>
<div class="absolute top-4 right-4">
<button class="bg-white/20 backdrop-blur-xl text-white p-2 rounded-full active:scale-90 transition-transform">
<span class="material-symbols-outlined">close</span>
</button>
</div>
<div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-surface-container-lowest to-transparent"></div>
</div>
<!-- Content Canvas -->
<div class="px-6 pb-6 overflow-y-auto">
<div class="mb-6">
<div class="flex justify-between items-start gap-4">
<h2 class="text-2xl font-extrabold text-on-surface leading-tight">Nasi Goreng Spesial</h2>
<span class="text-xl font-bold text-primary shrink-0">Rp 28.000</span>
</div>
<p class="text-on-surface-variant mt-2 text-sm leading-relaxed">
                        Perpaduan nasi goreng rempah dengan bumbu rahasia Kantin Kita, disajikan dengan telur, ayam, dan sayuran segar.
                    </p>
</div>
<!-- Spicy Level Options (Checkboxes Styled as Chips) -->
<div class="mb-8">
<div class="flex items-center gap-2 mb-4">
<span class="material-symbols-outlined text-primary text-xl">local_fire_department</span>
<h4 class="font-bold text-on-surface tracking-tight">Level Pedas</h4>
<span class="text-xs bg-surface-container-high px-2 py-0.5 rounded-sm text-on-surface-variant font-medium ml-auto">Pilih Satu</span>
</div>
<div class="grid grid-cols-3 gap-3">
<label class="relative group cursor-pointer">
<input checked="" class="peer hidden" name="spicy" type="radio"/>
<div class="bg-surface-container-high peer-checked:bg-primary peer-checked:text-on-primary py-3 rounded-lg text-center font-bold text-sm transition-all group-active:scale-95 border border-transparent">
                                Mild
                            </div>
</label>
<label class="relative group cursor-pointer">
<input class="peer hidden" name="spicy" type="radio"/>
<div class="bg-surface-container-high peer-checked:bg-primary peer-checked:text-on-primary py-3 rounded-lg text-center font-bold text-sm transition-all group-active:scale-95 border border-transparent">
                                Medium
                            </div>
</label>
<label class="relative group cursor-pointer">
<input class="peer hidden" name="spicy" type="radio"/>
<div class="bg-surface-container-high peer-checked:bg-primary peer-checked:text-on-primary py-3 rounded-lg text-center font-bold text-sm transition-all group-active:scale-95 border border-transparent">
                                Hot
                            </div>
</label>
</div>
</div>
<!-- Add-ons Selection -->
<div class="mb-8">
<h4 class="font-bold text-on-surface tracking-tight mb-4 flex items-center gap-2">
<span class="material-symbols-outlined text-secondary text-xl">add_circle</span>
                        Tambahan (Opsional)
                    </h4>
<div class="space-y-3">
<label class="flex items-center justify-between p-4 bg-surface-container-low rounded-xl cursor-pointer group active:bg-surface-container-high transition-colors">
<div class="flex items-center gap-3">
<input class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary" type="checkbox"/>
<span class="font-medium text-on-surface">Telur Ceplok</span>
</div>
<span class="text-sm font-bold text-on-surface-variant">+Rp 5.000</span>
</label>
<label class="flex items-center justify-between p-4 bg-surface-container-low rounded-xl cursor-pointer group active:bg-surface-container-high transition-colors">
<div class="flex items-center gap-3">
<input class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary" type="checkbox"/>
<span class="font-medium text-on-surface">Extra Kerupuk</span>
</div>
<span class="text-sm font-bold text-on-surface-variant">+Rp 3.000</span>
</label>
</div>
</div>
<!-- Special Notes -->
<div class="mb-8">
<h4 class="font-bold text-on-surface tracking-tight mb-2">Catatan Pesanan</h4>
<div class="relative">
<div class="absolute inset-y-0 left-0 w-1 bg-primary rounded-l-md"></div>
<textarea class="w-full bg-surface-container-highest border-none rounded-r-xl focus:ring-0 text-sm p-4 h-24 placeholder:text-on-surface-variant/50" placeholder="Contoh: Tanpa daun seledri, pisahkan sambal..."></textarea>
</div>
</div>
</div>
<!-- Footer Action Area -->
<div class="p-6 bg-surface-container-low flex flex-col gap-4 shadow-[0_-8px_32px_rgba(0,0,0,0.05)]">
<div class="flex items-center justify-between">
<div class="flex items-center bg-surface-container-highest rounded-full p-1 border border-outline-variant/30">
<button class="w-10 h-10 flex items-center justify-center text-primary active:scale-90 transition-transform">
<span class="material-symbols-outlined">remove</span>
</button>
<span class="w-12 text-center font-bold text-lg">1</span>
<button class="w-10 h-10 flex items-center justify-center text-primary active:scale-90 transition-transform">
<span class="material-symbols-outlined">add</span>
</button>
</div>
<div class="text-right">
<p class="text-xs text-on-surface-variant uppercase font-bold tracking-widest">Total Harga</p>
<p class="text-xl font-black text-on-surface">Rp 28.000</p>
</div>
</div>
<button class="w-full bg-gradient-to-br from-primary to-primary-container text-on-primary py-4 rounded-full font-bold text-lg shadow-lg shadow-primary/20 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
<span class="material-symbols-outlined">shopping_basket</span>
                    Tambah ke keranjang
                </button>
</div>
</div>
</div>
<!-- Navigation Shell (Platform Specific) -->
<nav class="md:hidden fixed bottom-0 left-0 right-0 h-20 flex justify-around items-center px-4 pb-safe bg-white/80 dark:bg-stone-900/80 backdrop-blur-xl z-50 rounded-t-2xl shadow-[0_-4px_24px_rgba(0,0,0,0.04)]">
<div class="flex flex-col items-center justify-center text-orange-700 dark:text-orange-500 relative after:content-[''] after:absolute after:bottom-[-4px] after:w-1 after:h-1 after:bg-orange-700 after:rounded-full">
<span class="material-symbols-outlined">home</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] font-medium tracking-wide uppercase">Home</span>
</div>
<div class="flex flex-col items-center justify-center text-stone-400">
<span class="material-symbols-outlined">receipt_long</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] font-medium tracking-wide uppercase">Orders</span>
</div>
<div class="flex flex-col items-center justify-center text-stone-400">
<span class="material-symbols-outlined">shopping_cart</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] font-medium tracking-wide uppercase">Cart</span>
</div>
<div class="flex flex-col items-center justify-center text-stone-400">
<span class="material-symbols-outlined">person</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] font-medium tracking-wide uppercase">Profile</span>
</div>
</nav>
</body></html>