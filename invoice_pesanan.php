<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Kantin Kita - Digital Receipt</title>
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
            vertical-align: middle;
        }
        .editorial-shadow {
            box-shadow: 0 24px 48px -12px rgba(39, 24, 21, 0.08);
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background text-on-background font-body min-h-screen selection:bg-primary-fixed selection:text-on-primary-fixed">
<!-- Top Navigation Shell -->
<header class="fixed top-0 w-full flex justify-between items-center px-6 h-16 bg-white/80 backdrop-blur-xl z-50 shadow-[0_8px_30px_rgb(0,0,0,0.04)]">
<div class="flex items-center gap-4">
<button class="p-2 text-slate-500 hover:bg-slate-100/50 transition-colors active:scale-95 duration-200" onclick="window.location.href='index.php'">
<span class="material-symbols-outlined">arrow_back</span>
</button>
<span class="text-xl font-extrabold bg-gradient-to-br from-orange-700 to-red-600 bg-clip-text text-transparent font-headline tracking-tight">Kantin Kita</span>
</div>
<div class="flex items-center gap-3">
<button class="p-2 text-slate-500 hover:bg-slate-100/50 transition-colors active:scale-95 duration-200">
<span class="material-symbols-outlined">share</span>
</button>
<button class="p-2 text-slate-500 hover:bg-slate-100/50 transition-colors active:scale-95 duration-200">
<span class="material-symbols-outlined">more_vert</span>
</button>
</div>
</header>
<main class="pt-24 pb-32 px-4 max-w-2xl mx-auto">
<!-- Success State Indicator -->
<div class="flex flex-col items-center mb-8 text-center">
<div class="w-16 h-16 bg-gradient-to-br from-primary to-primary-container rounded-full flex items-center justify-center text-white mb-4 shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
</div>
<h1 class="font-headline font-bold text-2xl text-on-surface tracking-tight">Payment Successful</h1>
<p class="text-on-surface-variant font-medium mt-1">Order #KK-882910-24</p>
</div>
<!-- Receipt Content -->
<div class="bg-surface-container-lowest rounded-[32px] editorial-shadow overflow-hidden relative">
<!-- Decorative Receipt Jagged Top (Simulated with background pattern or just clean) -->
<div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary/20 via-primary-container/40 to-primary/20"></div>
<div class="p-8">
<!-- Branding & Meta -->
<div class="flex justify-between items-start mb-10">
<div class="space-y-1">
<p class="font-label text-[10px] uppercase tracking-widest font-bold text-primary">Transaction Details</p>
<h2 class="text-on-surface font-headline font-bold text-lg">Central Kitchen Hub</h2>
<p class="text-on-surface-variant text-sm">Building 4, Food Court Area</p>
</div>
<div class="text-right">
<p class="text-on-surface font-semibold text-sm">24 Oct 2023</p>
<p class="text-on-surface-variant text-xs mt-1">12:45 PM</p>
</div>
</div>
<!-- Items List -->
<div class="space-y-6 mb-10">
<!-- Item 1 -->
<div class="flex justify-between items-center">
<div class="flex gap-4">
<div class="w-12 h-12 rounded-xl overflow-hidden flex-shrink-0 bg-surface-container">
<img alt="Nasi Lemak Special" class="w-full h-full object-cover" data-alt="Gourmet nasi lemak plate with fragrant rice, sambal, crispy anchovies and a fried egg on a rustic table" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8PTNGt1MVFhgFzfM5wMsc5a4_Z_L4sPve316dmbs5Srbl_DCztmCB_Toe_cKTRtB4ODOvQWF495aW0tUNBb1Y9iujk8_F1nSx9rgM1ephj5Um7tXGBuz1owy8mYWb9iNUGQY8vxg-1lv91UweyXwT9HuWmB3X0P7gt9pbPRUsZHt4hzkkTH5DT6rk8566CF8ZZ0eYKYDQi-Yh5GinlIP-L6Flv9ydVmTxL_8JHr0OHcXjxVk7YlaeJxuQ2paCLGGT_-bDa-f1hlA"/>
</div>
<div>
<h3 class="text-on-surface font-bold text-sm">Nasi Lemak Special</h3>
<p class="text-on-surface-variant text-xs">x1 · Extra Sambal</p>
</div>
</div>
<p class="text-on-surface font-bold font-headline">Rp32.500</p>
</div>
<!-- Item 2 -->
<div class="flex justify-between items-center">
<div class="flex gap-4">
<div class="w-12 h-12 rounded-xl overflow-hidden flex-shrink-0 bg-surface-container">
<img alt="Iced Jasmine Tea" class="w-full h-full object-cover" data-alt="Refreshing iced tea in a tall glass with floating mint leaves and ice cubes, condensation on the glass" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOJtRRAMeVMPN2Sow4Kqf7035q0I51hi0idvR2wSINT0k95qzYjm7M9W11nCXQInP73XKEZ7fNS63hz4iKrxmLlmA1fO6zIWHGXvyjM1tZnSNe1G4v4Qko140-_r90kNTCQ5cYiP84fncTZ3tdisa0puHUEVT1mI2vrZpYqu84QjREtoHl_44FTJvx2CFkGLtNqHqYRYWlzmMlNIXp9SZ_uVKIWxa9Ooe4pvAhA9MK10zg9C1FCQvuFy5mUDgFWEuGEicaW3QihbA"/>
</div>
<div>
<h3 class="text-on-surface font-bold text-sm">Iced Jasmine Tea</h3>
<p class="text-on-surface-variant text-xs">x1 · Less Sugar</p>
</div>
</div>
<p class="text-on-surface font-bold font-headline">Rp12.000</p>
</div>
<!-- Item 3 -->
<div class="flex justify-between items-center">
<div class="flex gap-4">
<div class="w-12 h-12 rounded-xl overflow-hidden flex-shrink-0 bg-surface-container">
<img alt="Chicken Satay" class="w-full h-full object-cover" data-alt="Grilled chicken satay skewers with thick peanut sauce on a banana leaf, smoky texture visible" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBSTh8IKUdbJ5mxLPzvfyhUU8DClOnhpjj5Idm2kxdncOtMXCFYiDmUIemU17S50gpXZfl4sAJ2vKVkTeMGVlerY_n8zsNdKoHzh7SjeD07ZPvqym2bsR7-HJYEDv2Fbgp4hLqSTOOddaD3zxPROx5vYYx7fec3g4_L3cL447MNjnV6QDh80gJVuzoOduIYGxZxF6vGcLqD9CfP7uR6sYURSz9MEqSgKxVCXH52tWDN0MyB6oKrr6UFxk6KJJuQjh9skoc3-Xn5Ufg"/>
</div>
<div>
<h3 class="text-on-surface font-bold text-sm">Chicken Satay (5 pcs)</h3>
<p class="text-on-surface-variant text-xs">x1 · Original Recipe</p>
</div>
</div>
<p class="text-on-surface font-bold font-headline">Rp25.000</p>
</div>
</div>
<!-- Tonal Separation Line -->
<div class="h-px bg-surface-container-highest w-full mb-8"></div>
<!-- Calculations -->
<div class="space-y-3 mb-10">
<div class="flex justify-between text-sm">
<span class="text-on-surface-variant">Subtotal</span>
<span class="text-on-surface font-medium">Rp69.500</span>
</div>
<div class="flex justify-between text-sm">
<span class="text-on-surface-variant">Tax (10%)</span>
<span class="text-on-surface font-medium">Rp6.950</span>
</div>
<div class="flex justify-between text-sm">
<span class="text-on-surface-variant">Service Fee</span>
<span class="text-on-surface font-medium">Rp2.000</span>
</div>
</div>
<!-- Total Container -->
<div class="bg-surface-container-low rounded-2xl p-6 flex justify-between items-center">
<div>
<p class="font-label text-[10px] uppercase tracking-widest font-bold text-on-surface-variant">Total Amount Paid</p>
<p class="text-on-surface-variant text-xs mt-1">Paid via QRIS</p>
</div>
<div class="text-right">
<p class="text-primary font-headline font-extrabold text-2xl tracking-tighter">Rp78.450</p>
</div>
</div>
</div>
<!-- Receipt Footer Graphic -->
<div class="h-4 bg-surface-container-highest w-full flex items-center justify-center gap-1 opacity-50">
<div class="w-1 h-1 rounded-full bg-on-surface-variant"></div>
<div class="w-1 h-1 rounded-full bg-on-surface-variant"></div>
<div class="w-1 h-1 rounded-full bg-on-surface-variant"></div>
</div>
</div>
<!-- Action Buttons Section -->
<div class="mt-8 flex flex-col sm:flex-row gap-4">
<button class="flex-1 flex items-center justify-center gap-2 bg-gradient-to-br from-primary to-primary-container text-on-primary py-4 px-6 rounded-full font-headline font-bold shadow-lg shadow-primary/20 active:scale-[0.98] transition-all duration-200">
<span class="material-symbols-outlined text-xl">download</span>
<span>Download PDF</span>
</button>
<button class="flex-1 flex items-center justify-center gap-2 bg-surface-container-high text-on-surface py-4 px-6 rounded-full font-headline font-bold hover:bg-surface-container-highest transition-colors active:scale-[0.98]">
<span class="material-symbols-outlined text-xl">print</span>
<span>Cetak Struk</span>
</button>
</div>
<div class="mt-8 text-center">
<p class="text-on-surface-variant text-sm">Have an issue with this order? <a class="text-primary font-bold underline decoration-primary/20 underline-offset-4" href="chat_penjual_pembeli.php">Contact Support</a></p>
</div>
</main>
<!-- Navigation Shell Placeholder (Suppressed per task context as this is a transactional focus screen) -->
<!-- The BottomNavBar is hidden on focus/transactional screens like a Digital Receipt -->
<div class="md:hidden">
<!-- Optional Floating Action if needed, but suppressed here to prioritize focus -->
</div>
</body></html>