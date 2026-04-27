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
          }
        }
      }
    </script>
<style>
        body { font-family: 'Be Vietnam Pro', sans-serif; }
        h1, h2, h3, .headline { font-family: 'Plus Jakarta Sans', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .star-active { font-variation-settings: 'FILL' 1; }
        .glass-effect { backdrop-filter: blur(20px); }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-surface text-on-surface min-h-screen">
<!-- Top Navigation (Shell Implementation) -->
<header class="fixed top-0 w-full flex justify-between items-center px-6 h-16 bg-white/80 backdrop-blur-xl z-50 shadow-[0_8px_30px_rgb(0,0,0,0.04)]">
<div class="flex items-center gap-4">
<button class="active:scale-95 transition-transform duration-200 text-orange-800">
<span class="material-symbols-outlined" data-icon="close">close</span>
</button>
<h1 class="text-xl font-extrabold bg-gradient-to-br from-orange-700 to-red-600 bg-clip-text text-transparent font-['Plus_Jakarta_Sans'] tracking-tight">Kantin Kita</h1>
</div>
<div class="flex items-center gap-2">
<button class="text-orange-800 active:scale-95 transition-transform duration-200">
<span class="material-symbols-outlined" data-icon="help_outline">help_outline</span>
</button>
</div>
</header>
<main class="pt-24 pb-32 px-6 max-w-2xl mx-auto">
<!-- Hero Order Context -->
<section class="mb-12">
<div class="flex items-start gap-6">
<div class="relative w-32 h-32 rounded-xl overflow-hidden shadow-lg transform -rotate-2">
<img alt="Delicious salad bowl" class="w-full h-full object-cover" data-alt="Close-up of a vibrant Mediterranean salad bowl with grilled halloumi, cherry tomatoes, and balsamic glaze on a ceramic plate." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOZNAMPIcvQQxcIsB_6fX08GBr1QYz9i0yNputmFZZoSd9R_qFAA-RLvyh_R9eQYmwZyzarv4HKrDDna9DbypD1n_hk5Ldz8HFXt7bE4JK2ZB3bheCxzxGLiLcVVVbUv7lk5phJ8SCjooqhrfgUYQTo4r6becGQBdzBQF3TfmPMf5vIiSnFJUMfa2qBwlunOu_GuVnhUQB-bZ2dDf29cCsxpzw0Zxrx834XO4pvdzQHHOaJyVfdI-AB0d8LrsWs1AhYM7mgAcNQdw"/>
</div>
<div class="flex-1 pt-2">
<span class="inline-block px-3 py-1 bg-surface-container text-primary font-bold text-[10px] uppercase tracking-widest rounded mb-2">Order #KK-2910</span>
<h2 class="text-3xl font-extrabold tracking-tight text-on-surface mb-1">Crispy Halloumi Bowl</h2>
<p class="text-on-surface-variant text-sm font-medium">Restoran Selera Nusantara</p>
</div>
</div>
</section>
<!-- Rating Section -->
<section class="mb-10 text-center">
<h3 class="text-lg font-bold mb-4">Bagaimana rasa makanannya?</h3>
<div class="flex justify-center gap-3">
<button class="text-primary active:scale-90 transition-all">
<span class="material-symbols-outlined !text-4xl star-active" data-icon="star" data-weight="fill" style="font-variation-settings: 'FILL' 1;">star</span>
</button>
<button class="text-primary active:scale-90 transition-all">
<span class="material-symbols-outlined !text-4xl star-active" data-icon="star" data-weight="fill" style="font-variation-settings: 'FILL' 1;">star</span>
</button>
<button class="text-primary active:scale-90 transition-all">
<span class="material-symbols-outlined !text-4xl star-active" data-icon="star" data-weight="fill" style="font-variation-settings: 'FILL' 1;">star</span>
</button>
<button class="text-primary active:scale-90 transition-all">
<span class="material-symbols-outlined !text-4xl star-active" data-icon="star" data-weight="fill" style="font-variation-settings: 'FILL' 1;">star</span>
</button>
<button class="text-primary-fixed-dim active:scale-90 transition-all">
<span class="material-symbols-outlined !text-4xl" data-icon="star">star</span>
</button>
</div>
<p class="text-primary font-bold mt-4 text-sm tracking-wide">Sangat Enak!</p>
</section>
<!-- Review Text Input -->
<section class="space-y-6">
<div class="relative group">
<div class="absolute left-0 top-0 bottom-0 w-1 bg-primary group-focus-within:h-full h-0 transition-all duration-300"></div>
<textarea class="w-full min-h-[160px] bg-surface-container-highest border-none rounded-xl p-5 text-on-surface placeholder:text-outline focus:ring-0 transition-all" placeholder="Ceritakan pengalaman rasa Anda secara detail..."></textarea>
</div>
<!-- Image Upload Area -->
<div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
<button class="aspect-square bg-surface-container-high rounded-xl flex flex-col items-center justify-center gap-2 border-2 border-dashed border-outline-variant hover:border-primary transition-colors active:scale-95 overflow-hidden group">
<span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors" data-icon="add_a_photo">add_a_photo</span>
<span class="text-[10px] font-bold uppercase tracking-wider text-outline group-hover:text-primary transition-colors">Tambah Foto</span>
</button>
<!-- Mockup of uploaded image -->
<div class="aspect-square relative rounded-xl overflow-hidden shadow-sm group">
<img alt="Food close up" class="w-full h-full object-cover" data-alt="Close-up of a steaming hot bowl of noodles with fresh herbs, shot from a high angle in natural window light." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCgEy45q3BxfeGGx_7OXthOwV83cBQ013t8ap5uDgFObbl0-NYZRXKoQ8Wis4p1DRMNeJjp6Eazu8a_GF8tfSZvym3bmWh3KGgZjImKkO0YHPTYkCCjJIuA1LVeZ9yHsjYrDz_KIkGwFuzgguCFPWgGsCCgBRK8UzLFenqjgdLjQ-MfJJzcgllpa18RkH-Twf_FzT5UbSUjBU2-jMD4yt_A76JfLOCLv-LJuvmcmixBVNyrvMoBiDFpEU1Su3sASdVJvVz3TPZGsKU"/>
<button class="absolute top-2 right-2 bg-on-surface/80 text-white w-6 h-6 rounded-full flex items-center justify-center backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity">
<span class="material-symbols-outlined !text-sm" data-icon="close">close</span>
</button>
</div>
</div>
</section>
<!-- Selection Chips for Quick Feedback -->
<section class="mt-10">
<h4 class="text-xs font-bold uppercase tracking-widest text-on-surface-variant mb-4">Topik Pilihan</h4>
<div class="flex flex-wrap gap-2">
<button class="px-4 py-2 bg-primary text-on-primary rounded-lg text-sm font-semibold transition-all">Porsi Kenyang</button>
<button class="px-4 py-2 bg-surface-container-high text-on-surface-variant rounded-lg text-sm font-medium hover:bg-surface-container-highest transition-all">Packaging Rapi</button>
<button class="px-4 py-2 bg-surface-container-high text-on-surface-variant rounded-lg text-sm font-medium hover:bg-surface-container-highest transition-all">Bumbu Meresap</button>
<button class="px-4 py-2 bg-surface-container-high text-on-surface-variant rounded-lg text-sm font-medium hover:bg-surface-container-highest transition-all">Pengiriman Cepat</button>
</div>
</section>
</main>
<!-- Bottom Action Bar (Floating Gradient CTA) -->
<footer class="fixed bottom-0 w-full p-6 bg-gradient-to-t from-surface via-surface to-transparent z-40">
<div class="max-w-2xl mx-auto">
<button class="w-full py-4 bg-gradient-to-br from-primary to-primary-container text-on-primary rounded-full font-bold text-lg shadow-lg shadow-primary/20 active:scale-[0.98] transition-all duration-200 flex items-center justify-center gap-3">
<span>Kirim Review</span>
<span class="material-symbols-outlined" data-icon="send">send</span>
</button>
<p class="text-center text-[10px] text-outline font-medium mt-4 uppercase tracking-[0.2em]">Kantin Kita • Kurasi Rasa Terbaik</p>
</div>
</footer>
<!-- Decorative Editorial Elements -->
<div class="fixed top-40 -right-12 w-64 h-64 bg-primary/5 rounded-full blur-[100px] pointer-events-none -z-10"></div>
<div class="fixed bottom-20 -left-20 w-80 h-80 bg-tertiary/5 rounded-full blur-[120px] pointer-events-none -z-10"></div>
</body></html>