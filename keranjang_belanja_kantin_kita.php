<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Keranjang Belanja - The Culinary Curator</title>
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
        h1, h2, h3, .headline { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-surface text-on-surface antialiased min-h-screen">
<!-- TopAppBar -->
<header class="fixed top-0 w-full z-50 bg-white/80 dark:bg-stone-950/80 backdrop-blur-md shadow-sm dark:shadow-none">
<div class="flex justify-between items-center px-6 py-4 w-full max-w-7xl mx-auto">
<div class="flex items-center gap-4">
<button class="material-symbols-outlined text-stone-500 hover:bg-stone-100 dark:hover:bg-stone-800 transition-colors p-2 rounded-full active:scale-95 transition-transform duration-200" onclick="window.location.href='index.php'">arrow_back</button>
<span class="text-xl font-extrabold tracking-tighter text-orange-700 dark:text-orange-500">The Culinary Curator</span>
</div>
<div class="flex items-center gap-2">
<button class="material-symbols-outlined text-stone-500 hover:bg-stone-100 dark:hover:bg-stone-800 transition-colors p-2 rounded-full active:scale-95 transition-transform duration-200">notifications</button>
</div>
</div>
</header>
<main class="pt-24 pb-48 px-4 max-w-2xl mx-auto">
<div class="flex items-center justify-between mb-8">
<h1 class="text-2xl font-bold tracking-tight text-on-surface">Keranjang Belanja</h1>
<span class="text-sm font-medium text-stone-500 bg-surface-container px-3 py-1 rounded-full">3 Items</span>
</div>
<!-- Selection Group -->
<div class="flex items-center gap-3 mb-6 px-2">
<input class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary bg-surface-container-lowest" id="select-all" type="checkbox"/>
<label class="text-sm font-semibold uppercase tracking-widest text-stone-500" for="select-all">Pilih Semua</label>
</div>
<!-- Cart Item List -->
<div class="space-y-4">
<!-- Item Card 1 -->
<div class="flex items-center gap-4 bg-surface-container-low p-4 rounded-2xl relative group transition-all duration-300 hover:bg-surface-container-high shadow-sm">
<input checked="" class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary bg-surface-container-lowest" type="checkbox"/>
<div class="w-24 h-24 rounded-xl overflow-hidden flex-shrink-0">
<img alt="Gourmet Pasta" class="w-full h-full object-cover" data-alt="Close-up of artisan pasta with fresh basil and cherry tomatoes on a rustic plate, warm morning light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBGW1SSOuWNi6Jbe89JCn0BU2x7HJbGp2r5k_7f-9xMsIqVVpOhRtCcrNq7gm-UXn9x9GmpPfpPXggXB-hlVWyD9H0tokP1a5DnRaXhDGY3ZMoU7G75apMWfJOSkDYfBJZhMKBgMAeBfHM5pyZPXBdOc_yhVoIQ8ZKo71MEacGZYMPT2b9qNEGN2TALhwMctoarDnx2UHkw-I2KNYqb0w9L2fOqv76kAfDkfLShKZoFtik96ou7_-tWIxb8pImJE_9iG4JMQYVg80w"/>
</div>
<div class="flex-1 min-w-0">
<div class="flex justify-between items-start">
<div>
<h3 class="font-bold text-on-surface truncate">Truffle Tagliatelle</h3>
<p class="text-sm text-stone-500 mt-1">Extra Parmesan</p>
</div>
<button class="material-symbols-outlined text-stone-400 hover:text-error transition-colors">delete</button>
</div>
<div class="mt-4 flex justify-between items-center">
<span class="font-bold text-primary">Rp 145.000</span>
<div class="flex items-center bg-white rounded-full shadow-sm">
<button class="p-1 px-2 text-stone-500 hover:text-primary active:scale-90 transition-transform">
<span class="material-symbols-outlined text-sm">remove</span>
</button>
<span class="px-2 text-sm font-bold w-8 text-center">1</span>
<button class="p-1 px-2 text-stone-500 hover:text-primary active:scale-90 transition-transform">
<span class="material-symbols-outlined text-sm">add</span>
</button>
</div>
</div>
</div>
</div>
<!-- Item Card 2 -->
<div class="flex items-center gap-4 bg-surface-container-low p-4 rounded-2xl relative group transition-all duration-300 hover:bg-surface-container-high shadow-sm">
<input checked="" class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary bg-surface-container-lowest" type="checkbox"/>
<div class="w-24 h-24 rounded-xl overflow-hidden flex-shrink-0">
<img alt="Mediterranean Salad" class="w-full h-full object-cover" data-alt="Vibrant mediterranean salad with chickpeas, olives, and feta cheese, overhead shot, bright natural lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAeqHnUMcdkpiMIj30gFVYcL1YIysihPB_7mBTbESbOgwkjRlGMElC2zeXU6E7iZ92U-wkUxLuEOsXjTGEVpBPHwmZ4WSjm3QNIAFSN2XkSlr_xrv80qsMEniJKk6WPyoLBm0wI9GoVHY-fPyetAMhBhkSMhbqRSGE151Pn1v89MWaNHtJGY0PR0EpIu6haG0h-bHb7KaxgkTkuHFv-4Ba707f6c-84-ip4CdCKBZ9WPei4KovXxktM3gydRkMuhH2se2CbAdd4RL4"/>
</div>
<div class="flex-1 min-w-0">
<div class="flex justify-between items-start">
<div>
<h3 class="font-bold text-on-surface truncate">Salad Mediterania</h3>
<p class="text-sm text-stone-500 mt-1">Tanpa Bawang</p>
</div>
<button class="material-symbols-outlined text-stone-400 hover:text-error transition-colors">delete</button>
</div>
<div class="mt-4 flex justify-between items-center">
<span class="font-bold text-primary">Rp 85.000</span>
<div class="flex items-center bg-white rounded-full shadow-sm">
<button class="p-1 px-2 text-stone-500 hover:text-primary active:scale-90 transition-transform">
<span class="material-symbols-outlined text-sm">remove</span>
</button>
<span class="px-2 text-sm font-bold w-8 text-center">2</span>
<button class="p-1 px-2 text-stone-500 hover:text-primary active:scale-90 transition-transform">
<span class="material-symbols-outlined text-sm">add</span>
</button>
</div>
</div>
</div>
</div>
<!-- Item Card 3 -->
<div class="flex items-center gap-4 bg-surface-container-low p-4 rounded-2xl relative group transition-all duration-300 hover:bg-surface-container-high shadow-sm">
<input class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary bg-surface-container-lowest" type="checkbox"/>
<div class="w-24 h-24 rounded-xl overflow-hidden flex-shrink-0 opacity-60">
<img alt="Classic Espresso" class="w-full h-full object-cover" data-alt="Steam rising from a fresh cup of espresso on a dark wood table with a gold spoon, moody cafe lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuABV-8KKQv591Pq-COA9itV1fK8nqYHLOcDsc8pR5AxTLqeiAil6cHrOSgVbY_4htrXFYoRb9tzWGsDU6fyuMGpRGf4BSegN0SPG3h_iu0WDeVtDYWGuxFmVls0JFfZR8FrAC8KEZPvx6HTToGkrmf-xPk3u-ZQR7ebeG2dBnK_Lu0P_CnjY6dIX0XYGh6oT81-r-tyv-2-zSLT9l_-JsPoDeV3w_derMdaINjGg1C-tZONWl_3NaoYLDahwCap3w4sKMQ8hQhAgBk"/>
</div>
<div class="flex-1 min-w-0">
<div class="flex justify-between items-start">
<div>
<h3 class="font-bold text-on-surface truncate">Nitro Cold Brew</h3>
<p class="text-sm text-stone-500 mt-1">Standard Size</p>
</div>
<button class="material-symbols-outlined text-stone-400 hover:text-error transition-colors">delete</button>
</div>
<div class="mt-4 flex justify-between items-center">
<span class="font-bold text-primary">Rp 42.000</span>
<div class="flex items-center bg-white rounded-full shadow-sm opacity-60">
<button class="p-1 px-2 text-stone-500">
<span class="material-symbols-outlined text-sm">remove</span>
</button>
<span class="px-2 text-sm font-bold w-8 text-center">1</span>
<button class="p-1 px-2 text-stone-500">
<span class="material-symbols-outlined text-sm">add</span>
</button>
</div>
</div>
</div>
</div>
</div>
<!-- Add more items CTA -->
<button class="w-full mt-8 flex items-center justify-center gap-2 py-4 border-2 border-dashed border-outline-variant rounded-2xl text-stone-500 font-semibold hover:border-primary hover:text-primary transition-all" onclick="window.location.href='index.php'">
<span class="material-symbols-outlined">add_circle</span>
            Tambah Item Lainnya
        </button>
</main>
<!-- Bottom Sticky Summary & Checkout -->
<div class="fixed bottom-0 left-0 w-full bg-white/80 dark:bg-stone-900/80 backdrop-blur-xl shadow-[0_-8px_32px_rgba(0,0,0,0.06)] px-6 pb-8 pt-6 z-50">
<div class="max-w-2xl mx-auto space-y-4">
<div class="flex flex-col gap-2">
<div class="flex justify-between items-center text-sm font-medium text-stone-500">
<span>Subtotal</span>
<span>Rp 315.000</span>
</div>
<div class="flex justify-between items-center text-sm font-medium text-stone-500">
<span>Biaya Layanan</span>
<span>Rp 2.000</span>
</div>
<div class="pt-3 flex justify-between items-end">
<span class="text-on-surface font-bold text-lg">Total Harga</span>
<span class="text-primary text-2xl font-extrabold tracking-tight">Rp 317.000</span>
</div>
</div>
<!-- Checkout Button -->
<button class="w-full bg-gradient-to-r from-primary to-primary-container text-white py-4 rounded-full font-bold text-lg shadow-lg shadow-primary/20 active:scale-95 transition-all flex items-center justify-center gap-3" onclick="window.location.href='halaman_pembayaran.php'">
<span>Lanjut ke Pembayaran</span>
<span class="material-symbols-outlined" data-weight="fill">shopping_cart_checkout</span>
</button>
</div>
</div>
<!-- No-line separation via tonal shift at very bottom for modern airiness -->
<div class="fixed bottom-0 left-0 w-full h-2 bg-surface-container-low z-40"></div>
</body></html>