<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Register - Kantin Kita</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@700;800&amp;family=Be+Vietnam+Pro:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "inverse-primary": "#ffb4a4",
                        "inverse-surface": "#3e2c29",
                        "surface": "#fff8f6",
                        "surface-container-highest": "#f9dcd6",
                        "secondary-container": "#ff8f77",
                        "on-tertiary-container": "#fbfcff",
                        "on-primary-fixed-variant": "#8d1600",
                        "tertiary-fixed": "#c2e8ff",
                        "surface-container-high": "#ffe2dc",
                        "background": "#fff8f6",
                        "tertiary-container": "#007ea7",
                        "surface-container-low": "#fff0ee",
                        "on-tertiary-fixed-variant": "#004d67",
                        "primary": "#b22204",
                        "tertiary-fixed-dim": "#76d1ff",
                        "secondary-fixed-dim": "#ffb4a4",
                        "on-secondary-fixed-variant": "#7d2c1b",
                        "inverse-on-surface": "#ffede9",
                        "surface-container": "#ffe9e5",
                        "on-secondary-container": "#762616",
                        "surface-container-lowest": "#ffffff",
                        "primary-fixed": "#ffdad3",
                        "on-surface": "#271815",
                        "on-error": "#ffffff",
                        "on-secondary": "#ffffff",
                        "tertiary": "#006385",
                        "on-error-container": "#93000a",
                        "on-secondary-fixed": "#3e0500",
                        "on-primary-fixed": "#3e0500",
                        "secondary": "#9c4230",
                        "on-primary": "#ffffff",
                        "outline-variant": "#e3beb6",
                        "error-container": "#ffdad6",
                        "on-tertiary": "#ffffff",
                        "surface-dim": "#f0d4ce",
                        "on-tertiary-fixed": "#001e2c",
                        "on-primary-container": "#fffbff",
                        "primary-fixed-dim": "#ffb4a4",
                        "on-surface-variant": "#5b403b",
                        "surface-tint": "#b62506",
                        "outline": "#8f7069",
                        "primary-container": "#d63c1e",
                        "surface-bright": "#fff8f6",
                        "on-background": "#271815",
                        "surface-variant": "#f9dcd6",
                        "error": "#ba1a1a",
                        "secondary-fixed": "#ffdad3"
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
        body {
            font-family: 'Be Vietnam Pro', sans-serif;
            background-color: #fff8f6;
        }
        h1, h2, h3 {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .editorial-gradient {
            background: linear-gradient(135deg, #b22204 0%, #d63c1e 100%);
        }
        .glass-header {
            backdrop-filter: blur(20px);
        }
        .input-focus-bar:focus-within {
            border-left: 2px solid #b22204;
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-surface text-on-surface antialiased min-h-screen flex flex-col">
<!-- TopAppBar -->
<header class="bg-white/80 dark:bg-stone-900/80 backdrop-blur-xl flex items-center justify-between px-6 py-4 w-full fixed top-0 z-50 shadow-sm shadow-orange-900/5">
<div class="flex items-center gap-4">
<button class="text-orange-700 dark:text-orange-500 hover:opacity-80 transition-opacity Active: scale-95 transition-transform duration-150">
<span class="material-symbols-outlined">arrow_back</span>
</button>
<span class="text-orange-700 dark:text-orange-500 font-extrabold text-xl font-['Plus_Jakarta_Sans'] tracking-tight">Kantin Kita</span>
</div>
</header>
<main class="flex-grow pt-24 pb-12 px-6 max-w-xl mx-auto w-full">
<!-- Editorial Hero Section -->
<div class="mb-10 relative">
<div class="absolute -top-12 -left-12 w-64 h-64 bg-primary/5 rounded-full blur-3xl -z-10"></div>
<h1 class="text-4xl font-extrabold tracking-tight text-on-surface mb-2">Create Account</h1>
<p class="text-on-surface-variant font-medium opacity-80">Join our curated culinary community today.</p>
</div>
<!-- Form Section -->
<form class="space-y-6">
<!-- Full Name -->
<div class="space-y-2 group">
<label class="block text-[10px] uppercase tracking-widest font-bold text-on-surface-variant px-1">Full Name</label>
<div class="relative bg-surface-container-highest rounded-xl overflow-hidden transition-all duration-200 input-focus-bar">
<input class="w-full bg-transparent border-none focus:ring-0 px-5 py-4 text-on-surface placeholder:text-outline-variant font-medium" placeholder="Enter your full name" type="text"/>
</div>
</div>
<!-- Email / Phone -->
<div class="space-y-2">
<label class="block text-[10px] uppercase tracking-widest font-bold text-on-surface-variant px-1">Email or Phone</label>
<div class="relative bg-surface-container-highest rounded-xl overflow-hidden transition-all duration-200 input-focus-bar">
<input class="w-full bg-transparent border-none focus:ring-0 px-5 py-4 text-on-surface placeholder:text-outline-variant font-medium" placeholder="name@example.com" type="text"/>
</div>
</div>
<!-- Asymmetric Grid for Passwords -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Password -->
<div class="space-y-2">
<label class="block text-[10px] uppercase tracking-widest font-bold text-on-surface-variant px-1">Password</label>
<div class="relative bg-surface-container-highest rounded-xl overflow-hidden transition-all duration-200 input-focus-bar">
<input class="w-full bg-transparent border-none focus:ring-0 px-5 py-4 text-on-surface placeholder:text-outline-variant font-medium" placeholder="••••••••" type="password"/>
</div>
</div>
<!-- Confirm Password -->
<div class="space-y-2">
<label class="block text-[10px] uppercase tracking-widest font-bold text-on-surface-variant px-1">Confirm Password</label>
<div class="relative bg-surface-container-highest rounded-xl overflow-hidden transition-all duration-200 input-focus-bar">
<input class="w-full bg-transparent border-none focus:ring-0 px-5 py-4 text-on-surface placeholder:text-outline-variant font-medium" placeholder="••••••••" type="password"/>
</div>
</div>
</div>
<!-- Terms & Conditions (Contextual Detail) -->
<div class="flex items-start gap-3 px-1 py-2">
<input class="mt-1 rounded-sm border-outline-variant text-primary focus:ring-primary/20 bg-surface" id="terms" type="checkbox"/>
<label class="text-xs text-on-surface-variant leading-relaxed" for="terms">
                    By registering, you agree to our <span class="text-tertiary font-bold">Terms of Service</span> and <span class="text-tertiary font-bold">Privacy Policy</span>.
                </label>
</div>
<!-- Register Button -->
<button class="editorial-gradient w-full py-4 rounded-full text-on-primary font-bold tracking-wide shadow-lg shadow-primary/20 hover:opacity-90 active:scale-[0.98] transition-all duration-150" type="submit">
                Register
            </button>
</form>
<!-- Social Login / Divider Section -->
<div class="mt-10 pt-8 border-t border-surface-container-high text-center">
<p class="text-sm text-on-surface-variant font-medium">
                Already have an account? 
                <a class="text-primary font-bold hover:underline ml-1" href="#">Login</a>
</p>
</div>
<!-- Editorial Visual Element (Asymmetric Placement) -->
<div class="mt-16 relative overflow-hidden rounded-3xl h-48 bg-surface-container-low flex items-center group">
<div class="absolute inset-0 z-0">
<img alt="Artisan food arrangement" class="w-full h-full object-cover opacity-30 grayscale group-hover:grayscale-0 transition-all duration-700" data-alt="Top-down view of artisan healthy food bowl with fresh ingredients on a light textured tabletop with warm natural light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBBqfNDhoZqj2R-SZgMB6HH4lPjxtLyFgpi_xfgrHc-XKCp6Mfz7J-9GzCT7BH_6vzc2wx090T_H2w6XBEi5uZ2nlWopMaKR4PzdI9g27P7RPN90vRwW1LIZFPaJBAuyMNlSoby-NfhjEd6YoxOa2SQYYG7ZRPDE6DMnq7LKJW9dg80BUvdu36tSdSNp_ni4HkM6psUuLkpZZjBgmiIaXArWQ6A4CcqbhhFkSzbYBc15RsPahbiQn6Vxkbtir2dkgyGsSLTSkd3fl4"/>
</div>
<div class="relative z-10 p-8">
<h3 class="text-xl font-bold text-on-surface max-w-[200px]">Freshness delivered to your doorstep.</h3>
</div>
</div>
</main>
<!-- Visual Footer Accent -->
<footer class="mt-auto py-8 text-center">
<div class="flex justify-center gap-6 mb-4 opacity-40">
<span class="material-symbols-outlined text-on-surface-variant" data-icon="restaurant">restaurant</span>
<span class="material-symbols-outlined text-on-surface-variant" data-icon="local_shipping">local_shipping</span>
<span class="material-symbols-outlined text-on-surface-variant" data-icon="star">star</span>
</div>
<p class="text-[10px] uppercase tracking-[0.2em] font-bold text-on-surface-variant/40">© 2024 Kantin Kita Culinary Group</p>
</footer>
</body></html>