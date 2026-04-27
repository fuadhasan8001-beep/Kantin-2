<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Kantin Kita - Home</title>
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
        body { font-family: 'Be Vietnam Pro', sans-serif; }
        h1, h2, h3 { font-family: 'Plus Jakarta Sans', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        #toast {
            visibility: hidden;
            min-width: 250px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 8px;
            padding: 16px;
            position: fixed;
            z-index: 100;
            left: 50%;
            bottom: 100px;
            transform: translateX(-50%);
            font-size: 14px;
        }

        #toast.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein { from {bottom: 0; opacity: 0;} to {bottom: 100px; opacity: 1;} }
        @keyframes fadein { from {bottom: 0; opacity: 0;} to {bottom: 100px; opacity: 1;} }
        @-webkit-keyframes fadeout { from {bottom: 100px; opacity: 1;} to {bottom: 0; opacity: 0;} }
        @keyframes fadeout { from {bottom: 100px; opacity: 1;} to {bottom: 0; opacity: 0;} }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
</head>
<body class="bg-surface-container-lowest text-on-surface">
<div id="toast">Berhasil ditambahkan ke keranjang!</div>
<header class="bg-white/80 dark:bg-stone-900/80 backdrop-blur-md shadow-sm dark:shadow-none docked full-width top-0 sticky z-50">
<div class="flex items-center justify-between px-6 py-4 w-full">
<div class="flex items-center gap-4">
<button class="active:scale-95 duration-200 transition-transform text-orange-700 dark:text-orange-500">
<span class="material-symbols-outlined" data-icon="menu">menu</span>
</button>
<span class="text-2xl font-black tracking-tighter text-orange-700 dark:text-orange-500 font-['Plus_Jakarta_Sans'] cursor-pointer" onclick="location.reload()">Kantin Kita</span>
</div>
<div class="flex-1 max-w-lg mx-6 hidden md:block">
<div class="relative group">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-stone-400 group-focus-within:text-primary transition-colors">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-surface-container-highest border-none rounded-full focus:ring-2 focus:ring-primary/20 text-sm" id="searchInputDesktop" placeholder="Cari makanan favoritmu..." type="text"/>
</div>
</div>
<div class="flex items-center gap-2">
<button class="active:scale-95 duration-200 transition-transform hover:bg-stone-100 dark:hover:bg-stone-800 p-2 rounded-full md:hidden" id="searchBtnMobile">
<span class="material-symbols-outlined text-orange-700 dark:text-orange-500" data-icon="search">search</span>
</button>
<button class="active:scale-95 duration-200 transition-transform hover:bg-stone-100 dark:hover:bg-stone-800 p-2 rounded-full relative">
<span class="material-symbols-outlined text-orange-700 dark:text-orange-500">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-primary rounded-full border-2 border-white"></span>
</button>
</div>
</div>
</header>
<main class="pb-24 max-w-7xl mx-auto">
<div class="px-6 py-4 flex gap-3 overflow-x-auto hide-scrollbar" id="categoryFilters">
<button class="category-chip flex-none px-5 py-2 rounded-sm bg-primary text-on-primary font-semibold text-sm shadow-sm">Favorit</button>
<button class="category-chip flex-none px-5 py-2 rounded-sm bg-surface-container-high text-on-surface-variant hover:bg-surface-container-highest transition-colors font-medium text-sm">Kantin</button>
<button class="category-chip flex-none px-5 py-2 rounded-sm bg-surface-container-high text-on-surface-variant hover:bg-surface-container-highest transition-colors font-medium text-sm">Makanan</button>
<button class="category-chip flex-none px-5 py-2 rounded-sm bg-surface-container-high text-on-surface-variant hover:bg-surface-container-highest transition-colors font-medium text-sm">Minuman</button>
</div>
<section class="px-6 py-8">
<div class="flex items-center justify-between mb-6">
<h3 class="text-xl font-bold tracking-tight border-l-4 border-primary pl-3">Terbaru</h3>
<a class="text-primary font-bold text-sm hover:underline" href="#">Lihat Semua</a>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
<div class="food-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0_2px_12px_rgba(0,0,0,0.04)] hover:shadow-lg transition-shadow group cursor-pointer" onclick="window.location.href='index.php?page=detail_menu'">
<div class="relative aspect-square overflow-hidden">
<img alt="Nasi Goreng Special" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="close-up of nasi goreng with fried egg and crackers on a ceramic plate, warm lighting, appetizing textures" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDen-p4HNP7ZGg5kYNWuligsphnnC4FnRVZCnCSyHbUoaU2xFtZZ9vcVnjiQwdCdgYDkomIHDlodNVdIrFMbKxAQzZ7hUKYiRcmDNla3li6rD0gumfRtIS0BppN46yCpmNlLezr1axRjpniiKhMY8gq0DQy0tBAXHfS1SGnu47c9xZgLvK661Djf-T0brDZK47JiMh1gLZLxxFHr7sG1zx0xTM1Odt6rtS_BGbrF8Zcp4tTF0Zm-BRSWTXkSsKL62vvnV_APfkRkhY"/>
<button class="absolute top-3 right-3 p-2 bg-white/90 backdrop-blur-sm rounded-full text-primary hover:bg-primary hover:text-white transition-colors shadow-sm" onclick="event.stopPropagation()">
<span class="material-symbols-outlined text-[18px]">favorite</span>
</button>
</div>
<div class="p-4">
<h4 class="font-bold text-on-surface line-clamp-1 mb-1">Nasi Goreng Special</h4>
<div class="flex items-center gap-1 mb-3">
<span class="material-symbols-outlined text-yellow-400 text-sm" style='font-variation-settings: "FILL" 1;'>star</span>
<span class="text-xs font-bold text-on-surface-variant">4.8</span>
<span class="text-[10px] text-stone-400 font-medium ml-1">(120+)</span>
</div>
<p class="text-primary font-extrabold text-lg">Rp 25.000</p>
</div>
</div>
<div class="food-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0_2px_12px_rgba(0,0,0,0.04)] hover:shadow-lg transition-shadow group cursor-pointer" onclick="window.location.href='index.php?page=detail_menu'">
<div class="relative aspect-square overflow-hidden">
<img alt="Salad Bowl" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="fresh mediterranean salad bowl with hummus, olives and colorful vegetables, bright daylight, high-end editorial food photography" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAl8Vnd8TBvUfeCH9gAfADb-2TYbrt9CEf00mufMAvJLTMJOdewgO-lE0Z26HOrE4OE6zAQ4GTixqsyffbzb9sYTuc5tCAfsJYYkDr-f-nMnxpUHozeDQKxhHyFtwyFunF55OwJBGqJKdVyLOuQLk7kK16wzoAOMzIA0tCTu9bc1cHuwU5NLXLs0CLQ2A3zFoDok8_eysTkdO3jsabStyEn5Qs7Hhk3jVNsW6uUzPeuUvxYOo4Y6qiG-OL0XYyTjipy-SOhuGPGECY"/>
<button class="absolute top-3 right-3 p-2 bg-white/90 backdrop-blur-sm rounded-full text-stone-300 hover:text-primary transition-colors shadow-sm" onclick="event.stopPropagation()">
<span class="material-symbols-outlined text-[18px]">favorite</span>
</button>
</div>
<div class="p-4">
<h4 class="font-bold text-on-surface line-clamp-1 mb-1">Healthy Salad Bowl</h4>
<div class="flex items-center gap-1 mb-3">
<span class="material-symbols-outlined text-yellow-400 text-sm" style='font-variation-settings: "FILL" 1;'>star</span>
<span class="text-xs font-bold text-on-surface-variant">4.9</span>
<span class="text-[10px] text-stone-400 font-medium ml-1">(85)</span>
</div>
<p class="text-primary font-extrabold text-lg">Rp 32.000</p>
</div>
</div>
<div class="food-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0_2px_12px_rgba(0,0,0,0.04)] hover:shadow-lg transition-shadow group cursor-pointer hidden md:block" onclick="window.location.href='index.php?page=detail_menu'">
<div class="relative aspect-square overflow-hidden">
<img alt="Berry Smoothie" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="vibrant pink berry smoothie in a tall glass with fresh mint and berries, condensation on glass, refreshing look" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBBVtQWITElMKYPgHmPWJUcnDUuu9tW6dkTWiR6ybLP17DqXttGueJNQpVMjfMD4OwITDpnLKEitw82QX6xWJoAooNtVAKaGE2fb5ujvtZqVARXCsMgvFKI7LjrofmKBi3raZDoCUqY3kdSQ5GI79ZPx3Mvn2pbWpwHk9wZpYLhoI_ZiOfZWiqGm3fXS08MAxIEZBSxHUdRF-UoHIdKecNEoLqzEiHEg0TZHQC_rXpv9iMzFrNXI34ZwwGuFDuvbqqJ7K0AmmOEwhw"/>
<button class="absolute top-3 right-3 p-2 bg-white/90 backdrop-blur-sm rounded-full text-stone-300 hover:text-primary transition-colors shadow-sm" onclick="event.stopPropagation()">
<span class="material-symbols-outlined text-[18px]">favorite</span>
</button>
</div>
<div class="p-4">
<h4 class="font-bold text-on-surface line-clamp-1 mb-1">Mixed Berry Smoothie</h4>
<div class="flex items-center gap-1 mb-3">
<span class="material-symbols-outlined text-yellow-400 text-sm" style='font-variation-settings: "FILL" 1;'>star</span>
<span class="text-xs font-bold text-on-surface-variant">4.7</span>
<span class="text-[10px] text-stone-400 font-medium ml-1">(42)</span>
</div>
<p class="text-primary font-extrabold text-lg">Rp 18.000</p>
</div>
</div>
<div class="food-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0_2px_12px_rgba(0,0,0,0.04)] hover:shadow-lg transition-shadow group cursor-pointer hidden md:block" onclick="window.location.href='index.php?page=detail_menu'">
<div class="relative aspect-square overflow-hidden">
<img alt="Cheeseburger" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="gourmet cheeseburger on a brioche bun with melting cheese and fresh lettuce, studio lighting, professional food photo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuARU7g75rmIgRram-rbMS9uviKMeHhgU15Jzd8zCLDbJ3oNy-4vIiT8cy_QIFLXGDuv9jWfn5vSrkLJzer-cyT1WlYij0xRMg8wNNSgmyFo-JvUdh2HAOIEUpOT3OucsuXgW5onZlL4g4rK1Bg77UVvDa9m-Up3_azj-2dEXRS80NHqOMsS2IbahhCLFMfhuc5W1UUo6uPbVBUAuTVOlv8CErka-GHa-dxlYXqJlhOWSzkF3IaJpbXp5Z6CCvyLPKsy9HBGDt6yF_U"/>
<button class="absolute top-3 right-3 p-2 bg-white/90 backdrop-blur-sm rounded-full text-primary hover:bg-primary hover:text-white transition-colors shadow-sm" onclick="event.stopPropagation()">
<span class="material-symbols-outlined text-[18px]" style='font-variation-settings: "FILL" 1;'>favorite</span>
</button>
</div>
<div class="p-4">
<h4 class="font-bold text-on-surface line-clamp-1 mb-1">Classic Beef Burger</h4>
<div class="flex items-center gap-1 mb-3">
<span class="material-symbols-outlined text-yellow-400 text-sm" style='font-variation-settings: "FILL" 1;'>star</span>
<span class="text-xs font-bold text-on-surface-variant">4.6</span>
<span class="text-[10px] text-stone-400 font-medium ml-1">(210)</span>
</div>
<p class="text-primary font-extrabold text-lg">Rp 45.000</p>
</div>
</div>
</div>
</section>
<section class="px-6 py-8">
<div class="flex items-center justify-between mb-6">
<h3 class="text-xl font-bold tracking-tight border-l-4 border-primary pl-3">Rekomendasi Untukmu</h3>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="food-card bg-surface-container-low rounded-3xl p-6 flex items-center gap-6 relative overflow-hidden group border border-transparent hover:border-primary-container transition-all cursor-pointer" onclick="window.location.href='index.php?page=detail_menu'">
<div class="w-32 h-32 flex-none rounded-2xl overflow-hidden shadow-md">
<img alt="Pizza Slice" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="macro photo of a fresh pepperoni pizza slice with melting cheese and herbs, dramatic focus, high contrast" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6uaO3LuWMnFLUmj8LaZ2dBhgddQ4w1MrBvE1rBcGpf7SjkHig7hBdlBOClrc9Z079fCoEymiJ3q03Qy1R5E6CU-k64PfUUl2WpAvdSFfCoAwvjSSxmRtihpWhgJwoszFdmHkwTCk3-FGH9OzSxrDYrdr-fhIdyotLEQo2_5CvsAN2xt7sy7udfaAQOvRnDPf1lQ5zItDmUnsdD6NT3oqc6uclYkxvjuWYcQYR4UzRGg5g7Xs68AUzS1ZqtkjkCI9RpAZgTwdL0Vk"/>
</div>
<div class="flex-1">
<span class="text-[10px] uppercase tracking-widest font-bold text-primary mb-1 block">Best Seller</span>
<h4 class="text-lg font-bold mb-1">Premium Pepperoni Pizza</h4>
<p class="text-xs text-on-surface-variant mb-4 line-clamp-2">Adonan tipis renyah dengan topping keju mozzarella melimpah.</p>
<div class="flex items-center justify-between">
<span class="text-xl font-black text-on-surface">Rp 55.000</span>
<button class="add-to-cart-btn w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center active:scale-90 transition-transform" onclick="handleAddToCart(event)">
<span class="material-symbols-outlined">add</span>
</button>
</div>
</div>
</div>
<div class="food-card bg-surface-container-low rounded-3xl p-6 flex items-center gap-6 relative overflow-hidden group border border-transparent hover:border-primary-container transition-all cursor-pointer" onclick="window.location.href='index.php?page=detail_menu'">
<div class="w-32 h-32 flex-none rounded-2xl overflow-hidden shadow-md">
<img alt="BBQ Ribs" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="tender bbq pork ribs with glossy sauce on a rustic wooden board, dark moody lighting, cinematic food photography" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6h4UBjWN5LOiPwfudlxPf_ngmEhESXryhVf4ebXwu_jFPZNVGW6cODArkURTIRPagSHjqF7EtXHxUwdThjUywU-XOSMU8L8PBr29otPmWQZ5eTXnaTkfT-VaXSArfd0H8RzN2aJZjt9uxZcoMo2TKhQiRbRC6_XXB4SoXZoPZVrSAVlxNoZeQAllooCDd0OLjHjJYBzW7uNosLPGwPT5bWMor5Auog7QRoOVkACe_KoN9BJlKGG0KYHu6-VxQjGgGU9mAiC8aCC0"/>
</div>
<div class="flex-1">
<span class="text-[10px] uppercase tracking-widest font-bold text-tertiary mb-1 block">Most Loved</span>
<h4 class="text-lg font-bold mb-1">Honey BBQ Spare Ribs</h4>
<p class="text-xs text-on-surface-variant mb-4 line-clamp-2">Iga panggang lembut dengan saus BBQ madu rahasia.</p>
<div class="flex items-center justify-between">
<span class="text-xl font-black text-on-surface">Rp 85.000</span>
<button class="add-to-cart-btn w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center active:scale-90 transition-transform" onclick="handleAddToCart(event)">
<span class="material-symbols-outlined">add</span>
</button>
</div>
</div>
</div>
</div>
</section>
</main>
<nav class="fixed bottom-0 left-0 right-0 h-20 flex justify-around items-center px-4 pb-safe bg-white/80 dark:bg-stone-900/80 backdrop-blur-xl z-50 rounded-t-2xl shadow-[0_-4px_24px_rgba(0,0,0,0.04)] md:hidden">
<a class="flex flex-col items-center justify-center text-orange-700 dark:text-orange-500 relative after:content-[''] after:absolute after:bottom-[-4px] after:w-1 after:h-1 after:bg-orange-700 after:rounded-full active:scale-90 duration-200 transition-all" href="#">
<span class="material-symbols-outlined" data-icon="home" style='font-variation-settings: "FILL" 1;'>home</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] font-medium tracking-wide uppercase mt-1">Home</span>
</a>
<a class="flex flex-col items-center justify-center text-stone-400 dark:text-stone-600 hover:text-orange-600 transition-colors active:scale-90 duration-200" href="#" onclick="alert('Pesanan Saya (Orders) Placeholder')">
<span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] font-medium tracking-wide uppercase mt-1">Orders</span>
</a>
<a class="flex flex-col items-center justify-center text-stone-400 dark:text-stone-600 hover:text-orange-600 transition-colors active:scale-90 duration-200" href="index.php?page=keranjang">
<div class="relative">
<span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
<span class="cart-badge absolute -top-1 -right-1 w-4 h-4 bg-primary text-white text-[8px] flex items-center justify-center rounded-full font-bold">3</span>
</div>
<span class="font-['Be_Vietnam_Pro'] text-[10px] font-medium tracking-wide uppercase mt-1">Cart</span>
</a>
<a class="flex flex-col items-center justify-center text-stone-400 dark:text-stone-600 hover:text-orange-600 transition-colors active:scale-90 duration-200" href="#" onclick="alert('Profil Pengguna Placeholder')">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="font-['Be_Vietnam_Pro'] text-[10px] font-medium tracking-wide uppercase mt-1">Profile</span>
</a>
</nav>
<button class="fixed bottom-24 right-6 w-14 h-14 bg-gradient-to-br from-primary to-primary-container text-white rounded-full flex items-center justify-center shadow-xl shadow-primary/20 z-40 active:scale-95 transition-transform md:bottom-10" onclick="alert('Menu Kantin Lengkap')">
<span class="material-symbols-outlined">restaurant_menu</span>
</button>
<script>
    // Toast Notification Logic
    function showToast(message) {
        const toast = document.getElementById("toast");
        toast.innerText = message || "Berhasil ditambahkan!";
        toast.className = "show";
        setTimeout(function(){ toast.className = toast.className.replace("show", ""); }, 3000);
    }

    // Handle Add to Cart
    function handleAddToCart(event) {
        event.stopPropagation();
        showToast("Item ditambahkan ke keranjang!");
        
        // Mocking Cart Badge update
        const badges = document.querySelectorAll('.cart-badge');
        badges.forEach(badge => {
            let count = parseInt(badge.innerText);
            badge.innerText = count + 1;
        });

        // Navigate to Pop Up Pesanan after a short delay
        setTimeout(() => {
            window.location.href = "{{index.php?page=popup_pesanan";
        }, 1000);
    }

    // Category Filtering Mock
    const chips = document.querySelectorAll('.category-chip');
    chips.forEach(chip => {
        chip.addEventListener('click', () => {
            chips.forEach(c => {
                c.classList.remove('bg-primary', 'text-on-primary', 'font-semibold', 'shadow-sm');
                c.classList.add('bg-surface-container-high', 'text-on-surface-variant', 'font-medium');
            });
            chip.classList.add('bg-primary', 'text-on-primary', 'font-semibold', 'shadow-sm');
            chip.classList.remove('bg-surface-container-high', 'text-on-surface-variant', 'font-medium');
            
            console.log('Filtering by:', chip.innerText);
        });
    });

    // Search Functionality Mock
    const searchInput = document.getElementById('searchInputDesktop');
    if(searchInput) {
        searchInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                alert('Mencari: ' + this.value);
            }
        });
    }

    const searchBtnMobile = document.getElementById('searchBtnMobile');
    if(searchBtnMobile) {
        searchBtnMobile.addEventListener('click', () => {
            const query = prompt("Cari apa hari ini?");
            if(query) alert("Hasil pencarian untuk: " + query);
        });
    }
</script>
</body></html>