<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Be+Vietnam+Pro:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
        body { font-family: 'Be Vietnam Pro', sans-serif; }
        h1, h2, h3 { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-surface text-on-surface selection:bg-primary/20">
<!-- TopAppBar Shell Implementation -->
<header class="flex items-center justify-between px-6 py-4 w-full fixed top-0 z-50 bg-white/80 dark:bg-stone-900/80 backdrop-blur-xl shadow-sm shadow-orange-900/5">
<div class="flex items-center gap-4">
<button class="text-orange-700 dark:text-orange-500 hover:opacity-80 transition-opacity active:scale-95 transition-transform duration-150">
<span class="material-symbols-outlined" data-icon="arrow_back">arrow_back</span>
</button>
<h1 class="text-orange-700 dark:text-orange-500 font-['Plus_Jakarta_Sans'] font-bold tracking-tight text-lg">Kantin Kita</h1>
</div>
<div class="w-10"></div> <!-- Spacer for symmetry -->
</header>
<main class="min-h-screen pt-24 pb-12 px-6 flex flex-col max-w-xl mx-auto">
<!-- Hero Visual Section - Editorial Asymmetry -->
<section class="relative mb-12">
<div class="aspect-[4/3] w-full overflow-hidden rounded-xl bg-surface-container-low relative">
<img alt="Warm interior of a modern kitchen" class="w-full h-full object-cover" data-alt="Soft morning sunlight streaming through a clean modern kitchen window onto a wooden table with fresh ingredients" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCEyGpuaJvQyEYB_sQvKPnlgJrcZ5OC8ZxH-CwYHBGiff-wCrxcIZT3aKcd8sJw1v2dQIvkze4cWiGheiQZsF6gaXkOhYGLe3PTU1x7aeCPMJWLkJkwA7uqsbtY5d3VSRZeMw0B4UWrlLDx28JpBnYHorGEqqmfZxoiI_h2_PBzCdXgKBl_fWDel34p1gvoVufF3GPo0YLGNtDQFzsRGreh3zxZ1ToMVOHR8TftbDW2uEjfLQudhVmcrmEJReBaikyZ6eUDrIDScgQ"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface-container-low via-transparent to-transparent"></div>
</div>
<!-- Overlapping Editorial Element -->
<div class="absolute -bottom-6 -right-2 w-24 h-24 bg-primary-container rounded-lg flex items-center justify-center rotate-6 shadow-xl shadow-primary/10">
<span class="material-symbols-outlined text-on-primary-container text-4xl" data-icon="lock_reset" data-weight="fill" style="font-variation-settings: 'FILL' 1;">lock_reset</span>
</div>
</section>
<!-- Content Section -->
<section class="flex flex-col gap-8">
<div class="space-y-4">
<h2 class="text-4xl font-extrabold text-on-surface tracking-tight leading-none">
                    Forgot Password
                </h2>
<p class="text-on-surface-variant font-body leading-relaxed max-w-[85%]">
                    Enter your email to reset your culinary journey access. We'll send a link to get you back to your favorite dishes.
                </p>
</div>
<!-- Form Area - Using Tonal Layering -->
<div class="bg-surface-container-lowest p-8 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.02)] space-y-6">
<div class="space-y-2">
<label class="font-label text-xs font-bold uppercase tracking-widest text-on-surface-variant ml-1" for="email">Email Address</label>
<div class="relative group">
<!-- Custom Focus Accent Bar -->
<div class="absolute left-0 top-0 bottom-0 w-[2px] bg-primary scale-y-0 group-focus-within:scale-y-100 transition-transform duration-300 origin-center rounded-full"></div>
<input class="w-full bg-surface-container-highest border-none rounded-lg px-5 py-4 text-on-surface placeholder:text-on-surface-variant/50 focus:ring-0 transition-all" id="email" placeholder="chef@kantinkita.com" type="email"/>
</div>
</div>
<div class="pt-2">
<!-- Primary CTA with Design System Gradient & Scale Interaction -->
<button class="w-full py-4 rounded-full bg-gradient-to-br from-primary to-primary-container text-on-primary font-headline font-bold text-base shadow-lg shadow-primary/20 active:scale-[0.98] transition-all duration-200">
                        Send Reset Link
                    </button>
</div>
</div>
<!-- Secondary Actions -->
<div class="flex flex-col items-center gap-4 pt-4">
<p class="text-on-surface-variant font-body text-sm">
                    Remembered your password? 
                    <a class="text-primary font-bold hover:underline underline-offset-4 ml-1" href="#">Sign In</a>
</p>
<div class="flex items-center gap-2 text-tertiary">
<span class="material-symbols-outlined text-lg" data-icon="support_agent">support_agent</span>
<span class="text-xs font-label font-bold uppercase tracking-wider">Contact Kitchen Support</span>
</div>
</div>
</section>
<!-- Editorial Spacing/Asymmetry Decoration -->
<div class="mt-16 flex justify-between items-center opacity-30">
<div class="h-px bg-outline-variant flex-grow mr-4"></div>
<span class="material-symbols-outlined text-outline" data-icon="restaurant">restaurant</span>
<div class="h-px bg-outline-variant flex-grow ml-4"></div>
</div>
</main>
<!-- Navigation Shell Suppressed for Transactional Integrity per "Shell Visibility & Relevance" rule -->
</body></html>