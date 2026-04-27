<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Checkout - Kantin Kita</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Be+Vietnam+Pro:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                        "surface-container-highest": "#f9dcd6",
                        "tertiary-fixed-dim": "#76d1ff",
                        "on-tertiary-fixed": "#001e2c",
                        "on-tertiary-fixed-variant": "#004d67",
                        "on-tertiary": "#ffffff",
                        "tertiary": "#006385",
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
        .active-icon {
            font-variation-settings: 'FILL' 1;
        }
        body {
            font-family: 'Be Vietnam Pro', sans-serif;
            background-color: #fff8f6;
            color: #271815;
        }
        h1, h2, h3 {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .editorial-shadow {
            box-shadow: 0 24px 48px -12px rgba(39, 24, 21, 0.08);
        }
        .asymmetric-border {
            border-left: 2px solid #b22204;
        }
    </style>
<style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>
<body class="bg-background min-h-screen pb-32">
<!-- TopAppBar -->
<header class="bg-white/80 backdrop-blur-md sticky top-0 z-50 shadow-sm">
<div class="flex items-center justify-between px-6 py-4 w-full">
<div class="flex items-center gap-4">
<button class="active:scale-95 duration-200 transition-transform p-2 hover:bg-stone-100 rounded-full" onclick="window.location.href='{{DATA:SCREEN:SCREEN_27}}'">
<span class="material-symbols-outlined text-on-surface">arrow_back</span>
</button>
<h1 class="text-orange-700 font-['Plus_Jakarta_Sans'] font-bold tracking-tight text-lg">Checkout</h1>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-orange-700">security</span>
<span class="text-[10px] font-bold uppercase tracking-widest text-orange-700">Secure Payment</span>
</div>
</div>
</header>
<main class="max-w-2xl mx-auto px-6 py-8">
<!-- Order Summary Section -->
<section class="mb-10">
<h2 class="text-2xl font-extrabold tracking-tight mb-6 flex items-center gap-2">
                Order Summary
                <span class="h-1 w-8 bg-primary rounded-full"></span>
</h2>
<!-- Canteen Group 1 -->
<div class="bg-surface-container-lowest rounded-2xl p-6 mb-4 shadow-sm border-l-4 border-primary">
<div class="flex justify-between items-center mb-4">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary">storefront</span>
<h3 class="font-bold text-on-surface">Nasi Campur Ibu Sri</h3>
</div>
<span class="text-xs font-bold text-stone-400 bg-surface-container-high px-2 py-1 rounded">CANTEEN A</span>
</div>
<div class="space-y-4">
<div class="flex items-start justify-between gap-4">
<div class="flex gap-4">
<img class="w-16 h-16 rounded-xl object-cover" data-alt="traditional Indonesian nasi campur dish with various side dishes and spicy sambal on a ceramic plate" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOvSVlO5fnuIEqm9yF1bshPDgmr3fc2LOGSFnyzBfI9cKJ8TIdaJ3WSYx1EPmshrKYKAx13ees9ofV9VfzqkCFS-BiH2yu_ubIG6LXonI80R23xWnLP4KVNShSdXDJw5f0FG-cd_iT6ExJI1D4wclYUoYkSWxwqZ-0B6ZqaiHgCoW8wy88ayvkVcBtxCIl-hXLrJtbpmiXGZkVvkw7G-MokqD2AhZyyWj1g196LvSW2OruZcApgGi-xRsqfL6ZgjSMBPpunoKYNnk"/>
<div>
<p class="font-bold text-on-surface">Nasi Campur Spesial</p>
<p class="text-sm text-stone-500">Extra Sambal, No Peanuts</p>
</div>
</div>
<p class="font-bold text-primary">Rp 25.000</p>
</div>
<div class="flex items-start justify-between gap-4">
<div class="flex gap-4">
<img class="w-16 h-16 rounded-xl object-cover" data-alt="refreshing iced tea in a tall glass with condensation and fresh mint leaves" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8IzK0jkgRWTVBJvDy4IwjEThtKWZXoSqVCqCjp_yJuom718O2JaXsOC48BvWN1-I9qsbl_3hJ2mT4WC1EKGzyirRuskKbzgtxWm7w5RqnPTGW7G_bPsIlDoZJKRt9OzDsb6eCPZZqWHxPEiZr8Bh2smT6Tn3gwyxsvz9xTSatR3mK-i1nlIWcmTKeaY8-Bp-G-hp9SNu-UyfOffbD05kP9V2xHQTF1mHa6ZVT3bVmboUFp92luMW1J0HieJMUgpc3Sw1yQ65O1g0"/>
<div>
<p class="font-bold text-on-surface">Es Teh Manis</p>
<p class="text-sm text-stone-500">Less Sugar</p>
</div>
</div>
<p class="font-bold text-primary">Rp 5.000</p>
</div>
</div>
</div>
<!-- Canteen Group 2 -->
<div class="bg-surface-container-lowest rounded-2xl p-6 shadow-sm border-l-4 border-tertiary">
<div class="flex justify-between items-center mb-4">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-tertiary">bakery_dining</span>
<h3 class="font-bold text-on-surface">Kopi &amp; Roti Jani</h3>
</div>
<span class="text-xs font-bold text-stone-400 bg-surface-container-high px-2 py-1 rounded">CANTEEN B</span>
</div>
<div class="space-y-4">
<div class="flex items-start justify-between gap-4">
<div class="flex gap-4">
<img class="w-16 h-16 rounded-xl object-cover" data-alt="gourmet artisan toast with creamy avocado spread and poached egg on top" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxQcIlmPkNcfflbZMNOPZWIBuJMDhwj2_NaqRnjyzZjOA3vrXWfUOwwhJNln5K3QGYA6SP-7Jw4-2g-4FfNm5DlMrlwd1CP7--R_6hydnNns-ExzgcIdxGZckwa5sGe3pE2wePKxhsw8kyvMR65GswbtrVGogkF6n0cj9YB1hNoy7Sq7xjAImvPW8b_Pj3p1u1P5_5PZ0KpKgaY__6jE6GmRDE89GyHA4a4wveCaeeMiXzU8HakAoD0TLKfNuWVSjsMCMnT2e24Ys"/>
<div>
<p class="font-bold text-on-surface">Roti Bakar Cokelat</p>
<p class="text-sm text-stone-500">Thick cut, Extra Crunchy</p>
</div>
</div>
<p class="font-bold text-primary">Rp 18.000</p>
</div>
</div>
</div>
</section>
<!-- Payment Method Section -->
<section class="mb-10">
<h2 class="text-2xl font-extrabold tracking-tight mb-6">Payment Method</h2>
<div class="grid grid-cols-1 gap-4">
<!-- E-Wallet Option -->
<div class="payment-option relative group" onclick="selectPayment(this)">
<input checked="" class="peer hidden" id="ewallet" name="payment" type="radio"/>
<label class="flex flex-col p-5 bg-surface-container-lowest rounded-2xl border-2 border-primary bg-primary/5 peer-checked:border-primary peer-checked:bg-primary/5 transition-all cursor-pointer" for="ewallet">
<div class="flex justify-between items-center mb-3">
<span class="material-symbols-outlined text-primary active-icon">account_balance_wallet</span>
<span class="check-icon material-symbols-outlined text-primary opacity-100">check_circle</span>
</div>
<span class="font-bold text-on-surface">E-Wallet</span>
<span class="text-xs text-stone-500 mt-1">Balance: Rp 124.500</span>
</label>
</div>
<!-- Cash Option -->
<div class="payment-option relative group" onclick="selectPayment(this)">
<input class="peer hidden" id="cash" name="payment" type="radio"/>
<label class="flex flex-col p-5 bg-surface-container-lowest rounded-2xl border-2 border-transparent hover:border-stone-200 transition-all cursor-pointer" for="cash">
<div class="flex justify-between items-center mb-3">
<span class="material-symbols-outlined text-stone-400">payments</span>
<span class="check-icon material-symbols-outlined text-primary opacity-0">check_circle</span>
</div>
<span class="font-bold text-on-surface">Tunai (Cash)</span>
<span class="text-xs text-stone-500 mt-1">Bayar langsung di kantin</span>
</label>
</div>
</div>
</section>
<!-- Price Breakdown Section -->
<section class="bg-white rounded-2xl p-8 mb-6 editorial-shadow">
<h2 class="text-lg font-bold mb-6 text-on-surface">Payment Details</h2>
<div class="space-y-4">
<div class="flex justify-between text-stone-600">
<span class="font-medium">Subtotal (3 items)</span>
<span class="font-headline font-semibold">Rp 48.000</span>
</div>
<div class="flex justify-between text-stone-600">
<span class="font-medium">Service Fee</span>
<span class="font-headline font-semibold">Rp 2.000</span>
</div>
<div class="flex justify-between text-stone-600">
<span class="font-medium">Platform Discount</span>
<span class="font-headline font-semibold text-tertiary">-Rp 5.000</span>
</div>
<div class="pt-4 mt-4 border-t border-stone-100 flex justify-between items-end">
<div>
<p class="text-xs font-bold text-stone-400 uppercase tracking-widest mb-1">Total Amount</p>
<p class="text-3xl font-black text-on-surface tracking-tighter">Rp 45.000</p>
</div>
<div class="text-right">
<p class="text-[10px] text-stone-400 leading-tight">Tax included where<br/>applicable</p>
</div>
</div>
</div>
</section>
<!-- Security Note -->
<div class="flex items-center gap-3 px-4 text-stone-500">
<span class="material-symbols-outlined text-sm">lock</span>
<p class="text-[11px] leading-relaxed">Your transaction is encrypted and secured. By clicking "Konfirmasi Pembayaran", you agree to our Terms of Service and Privacy Policy.</p>
</div>
</main>
<!-- Bottom Action Bar -->
<div class="fixed bottom-0 left-0 right-0 p-6 bg-white/90 backdrop-blur-xl border-t border-stone-100/50 z-50">
<div class="max-w-2xl mx-auto">
<button class="w-full py-4 rounded-full bg-gradient-to-r from-primary to-primary-container text-white font-bold text-lg tracking-wide shadow-lg shadow-primary/20 active:scale-95 duration-200 transition-all flex items-center justify-center gap-3" onclick="handlePayment()">
<span>Konfirmasi Pembayaran</span>
<span class="material-symbols-outlined">arrow_forward</span>
</button>
</div>
</div>
<script>
        function selectPayment(element) {
            // Unselect all
            document.querySelectorAll('.payment-option').forEach(opt => {
                const label = opt.querySelector('label');
                const check = opt.querySelector('.check-icon');
                const icon = opt.querySelector('.material-symbols-outlined:first-child');
                
                label.classList.remove('border-primary', 'bg-primary/5');
                label.classList.add('border-transparent');
                check.classList.add('opacity-0');
                check.classList.remove('opacity-100');
                icon.classList.remove('text-primary', 'active-icon');
                icon.classList.add('text-stone-400');
            });

            // Select clicked one
            const label = element.querySelector('label');
            const check = element.querySelector('.check-icon');
            const icon = element.querySelector('.material-symbols-outlined:first-child');
            const input = element.querySelector('input');
            
            input.checked = true;
            label.classList.add('border-primary', 'bg-primary/5');
            label.classList.remove('border-transparent');
            check.classList.remove('opacity-0');
            check.classList.add('opacity-100');
            icon.classList.add('text-primary', 'active-icon');
            icon.classList.remove('text-stone-400');
        }

        function handlePayment() {
            // Using a simple alert for success and then redirecting
            alert('Pembayaran Berhasil! Pesanan Anda sedang diproses.');
            window.location.href = '{{DATA:SCREEN:SCREEN_26}}';
        }
    </script>
</body></html>