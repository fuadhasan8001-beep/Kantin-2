<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Chat - Kantin Kita</title>
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
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .chat-scroll::-webkit-scrollbar {
            width: 4px;
        }
        .chat-scroll::-webkit-scrollbar-track {
            background: transparent;
        }
        .chat-scroll::-webkit-scrollbar-thumb {
            background: #e3beb6;
            border-radius: 10px;
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-surface font-body text-on-surface">
<!-- TopAppBar Fragment (Contextualized for Chat) -->
<header class="fixed top-0 w-full flex justify-between items-center px-4 h-20 bg-white/80 backdrop-blur-xl z-50 shadow-[0_8px_30px_rgb(0,0,0,0.04)]">
<div class="flex items-center gap-4">
<button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-low transition-colors active:scale-95" onclick="window.location.href='index.php'">
<span class="material-symbols-outlined text-on-surface-variant">arrow_back</span>
</button>
<div class="flex items-center gap-3">
<div class="relative">
<img alt="Seller Avatar" class="w-11 h-11 rounded-full object-cover" data-alt="portrait of a friendly smiling middle-aged chef in a clean white uniform with a soft warm kitchen background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAOvu23qRGUtZswyZY4e4fmk2eFRAhC-DnXpKFcEJYimQiQlDRPHuL8PITh1BShO8LZIunhYBJHfgZLg_XxigdPvTN7AdrdSjAHiNMK6eZH9uIR_wApWOFQyjfUq0wUza2fzyK_upMm7t-s8c6VeMVUwY64Ku2m9X2H3R0h0Or5DsGy7nD1Cus1r3A9DXoD_2OmmADbe6ifvCIbT33_6nWykTIbt639QxYGHqpAwBrXMDi7OvIohJy9YgdmEK2udb5B1fV7rAeUcZw"/>
<div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></div>
</div>
<div>
<h1 class="font-headline font-bold text-base tracking-tight leading-tight">Warung Bu Endang</h1>
<span class="font-label text-[10px] uppercase tracking-widest font-semibold text-green-600 flex items-center gap-1">
                        Online Now
                    </span>
</div>
</div>
</div>
<div class="flex gap-2">
<button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-low transition-colors text-on-surface-variant">
<span class="material-symbols-outlined">call</span>
</button>
<button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-low transition-colors text-on-surface-variant">
<span class="material-symbols-outlined">more_vert</span>
</button>
</div>
</header>
<!-- Chat Canvas -->
<main class="pt-24 pb-28 px-4 max-w-3xl mx-auto flex flex-col gap-6">
<!-- Date Separator -->
<div class="flex justify-center">
<span class="px-4 py-1 rounded-full bg-surface-container-low text-on-surface-variant text-[10px] font-label font-bold uppercase tracking-widest">
                Today
            </span>
</div>
<!-- Incoming Message (Seller) -->
<div class="flex flex-col gap-1 items-start max-w-[85%]">
<div class="flex items-center gap-2 mb-1 px-1">
<span class="text-xs font-headline font-bold text-on-surface-variant">Warung Bu Endang</span>
</div>
<div class="bg-surface-container-high px-5 py-4 rounded-[20px] rounded-tl-none shadow-sm">
<p class="text-sm leading-relaxed">Selamat siang kak! Pesanan Nasi Liwet Spesial-nya sedang kami siapkan ya. Ingin level pedasnya seberapa?</p>
</div>
<span class="text-[10px] font-label text-outline mt-1 px-1">12:30 PM</span>
</div>
<!-- Outgoing Message (Customer) -->
<div class="flex flex-col gap-1 items-end ml-auto max-w-[85%]">
<div class="bg-gradient-to-br from-primary to-primary-container px-5 py-4 rounded-[20px] rounded-tr-none shadow-lg shadow-primary/10">
<p class="text-sm leading-relaxed text-on-primary">Siang Bu! Boleh minta yang pedas sedang saja ya, jangan terlalu banyak cabainya.</p>
</div>
<div class="flex items-center gap-1 mt-1 px-1">
<span class="text-[10px] font-label text-outline">12:32 PM</span>
<span class="material-symbols-outlined text-[14px] text-primary" style="font-variation-settings: 'FILL' 1;">done_all</span>
</div>
</div>
<!-- Editorial Content: Order Summary Card in Chat -->
<div class="bg-surface-container-low p-5 rounded-3xl flex items-center gap-4 border-l-4 border-primary shadow-sm mx-2">
<div class="w-16 h-16 rounded-2xl overflow-hidden flex-shrink-0">
<img alt="Food item" class="w-full h-full object-cover" data-alt="close-up of traditional indonesian nasi liwet with savory toppings and banana leaf garnish in soft focus" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCobFT2-HgNsGhqiT5szS9EV9Hf7pc6Qvn4AGXFpVWRu-uP0Waj_9oDx3hBh-whNzyDY6MLTvjWQA1VGiziuCjcOUF5F16v_xqEtpAnUX5lSR7ltW_GFvZ9B79w_vlfKiIWyXOD_1066ctIFb7knva8Oeqa74L_oOhWE7JERnxVbnOlI8oWM7OwT_SM9L2lg_KpFnAbywt1uzKn4qCFaFppyVqG9Iy_fmqDLrrPEh5olOn2sevaTq7OXg9NhddlgqCmY6Xc49ecicg"/>
</div>
<div class="flex-1">
<p class="font-label text-[10px] uppercase tracking-wider font-bold text-primary mb-1">Active Order #2291</p>
<h3 class="font-headline font-bold text-sm">Nasi Liwet Spesial Komplit</h3>
<p class="text-xs text-on-surface-variant">Rp 35.000 • In Preparation</p>
</div>
<span class="material-symbols-outlined text-outline">chevron_right</span>
</div>
<!-- Incoming Message (Seller) -->
<div class="flex flex-col gap-1 items-start max-w-[85%]">
<div class="bg-surface-container-high px-5 py-4 rounded-[20px] rounded-tl-none shadow-sm">
<p class="text-sm leading-relaxed">Siap kak, dicatat! Untuk tambahan kerupuknya mau yang putih atau kerupuk udang?</p>
</div>
<span class="text-[10px] font-label text-outline mt-1 px-1">12:35 PM</span>
</div>
<!-- Typing Indicator (Subtle UI) -->
<div class="flex items-center gap-2 px-2 opacity-60">
<div class="flex gap-1">
<div class="w-1.5 h-1.5 bg-outline rounded-full animate-pulse"></div>
<div class="w-1.5 h-1.5 bg-outline rounded-full animate-pulse delay-75"></div>
<div class="w-1.5 h-1.5 bg-outline rounded-full animate-pulse delay-150"></div>
</div>
<span class="text-[10px] font-label italic uppercase tracking-wider">Warung Bu Endang is typing...</span>
</div>
</main>
<!-- Message Input Bar (Fixed Bottom) -->
<footer class="fixed bottom-0 w-full bg-white/70 backdrop-blur-2xl px-4 pt-4 pb-8 z-50">
<div class="max-w-3xl mx-auto flex items-end gap-3">
<button class="w-12 h-12 flex items-center justify-center rounded-2xl bg-surface-container-highest text-primary transition-all active:scale-90 mb-0.5">
<span class="material-symbols-outlined">add</span>
</button>
<div class="flex-1 relative group">
<div class="absolute left-0 top-0 bottom-0 w-1 bg-primary rounded-full scale-y-0 group-focus-within:scale-y-100 transition-transform origin-center"></div>
<textarea class="w-full bg-surface-container-highest border-none rounded-[24px] py-3.5 px-6 text-sm focus:ring-0 placeholder:text-outline font-body resize-none min-h-[52px] max-h-32" placeholder="Type your message..." rows="1"></textarea>
</div>
<button class="w-12 h-12 flex items-center justify-center rounded-full bg-gradient-to-br from-primary to-primary-container text-white shadow-lg shadow-primary/20 active:scale-90 transition-all mb-0.5">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">send</span>
</button>
</div>
</footer>
<!-- BottomNavBar Suppressed based on UX Goal: Focused Journey -->
<!-- The user is in a specific chat session, prioritizing content canvas -->
</body></html>