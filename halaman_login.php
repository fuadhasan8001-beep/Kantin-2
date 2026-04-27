<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Login - Kantin Kita</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Be_Vietnam_Pro:wght@400;500;600;700&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
              "spacing": {},
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
        .focus-within-accent:focus-within {
            border-left: 2px solid #b22204;
        }
        .error-shake {
            animation: shake 0.4s cubic-bezier(.36,.07,.19,.97) both;
        }
        @keyframes shake {
            10%, 90% { transform: translate3d(-1px, 0, 0); }
            20%, 80% { transform: translate3d(2px, 0, 0); }
            30%, 50%, 70% { transform: translate3d(-4px, 0, 0); }
            40%, 60% { transform: translate3d(4px, 0, 0); }
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
</head>
<body class="bg-surface font-body text-on-surface selection:bg-primary-fixed selection:text-on-primary-fixed">
<!-- TopAppBar for Logo Context -->
<header class="bg-white/80 dark:bg-stone-900/80 backdrop-blur-xl shadow-sm shadow-orange-900/5 flex items-center justify-between px-6 py-4 w-full fixed top-0 z-50">
<div class="flex items-center gap-2">
<span class="text-orange-700 dark:text-orange-500 font-extrabold text-xl font-headline tracking-tight">Kantin Kita</span>
</div>
<div class="flex items-center">
<button class="text-orange-700 font-bold font-headline transition-opacity hover:opacity-80 active:scale-95 duration-150">Help</button>
</div>
</header>
<main class="min-h-screen flex items-center justify-center pt-20 pb-12 px-4">
<!-- Main Login Card with Asymmetric Layout Hint -->
<div class="w-full max-w-5xl grid grid-cols-1 md:grid-cols-2 gap-0 overflow-hidden rounded-[2rem] shadow-2xl shadow-on-surface/5 bg-surface-container-lowest border border-outline-variant/10">
<!-- Left Side: Visual Hero (Desktop Only) -->
<div class="hidden md:block relative overflow-hidden h-full">
<div class="absolute inset-0 bg-gradient-to-tr from-primary/40 to-transparent z-10"></div>
<img class="absolute inset-0 w-full h-full object-cover" data-alt="Gourmet fusion dish with vibrant vegetables and grilled protein served on a minimalist ceramic plate with soft side lighting and artistic plating" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBq2mtg2Wl5JjaUlKEn9kSdV12_7p2BCKHdzs1Ydy8nRtRK0lHiHsTg5WWvLZCKChRE6gZf05qWHzhstq-Ap2dvM19ztJaotoU53vRPQhtYMjZ3KA07x4elrPX2sCZy8PR9NfifeRduNdsbWAdPXAJquaWhymIp9FmeIIkcUrjxuCWLg3vrFekQh9x_dhT5cJWkK8urp2QNBZ-KRqdzkm53zOTZcmpLCXy89i9WHdysYU584kZQ1zJ4nqr5QSslxHVSmKEydp8JeH0"/>
<div class="absolute bottom-12 left-12 right-12 z-20">
<h2 class="text-4xl font-headline font-bold text-white leading-tight mb-4 drop-shadow-lg">Discover the best flavors in your neighborhood.</h2>
<p class="text-white/90 text-lg font-medium drop-shadow-md">Curated kitchens, exceptional tastes.</p>
</div>
</div>
<!-- Right Side: Login Form -->
<div class="p-8 md:p-12 lg:p-16 flex flex-col justify-center">
<div class="mb-10">
<h1 class="text-3xl font-headline font-extrabold text-on-surface tracking-tight mb-2">Welcome Back</h1>
<p class="text-on-surface-variant font-body">Please enter your details to sign in.</p>
</div>
<form class="space-y-6" id="loginForm">
<!-- Email/Phone Input -->
<div class="space-y-2">
<label class="text-[11px] font-label font-bold uppercase tracking-widest text-on-surface-variant px-1" for="email">Email or Phone Number</label>
<div class="relative flex items-center bg-surface-container-highest rounded-xl focus-within-accent transition-all group" id="emailContainer">
<span class="material-symbols-outlined absolute left-4 text-outline group-focus-within:text-primary transition-colors">alternate_email</span>
<input class="w-full bg-transparent border-none focus:ring-0 py-4 pl-12 pr-4 text-on-surface placeholder:text-outline font-body" id="email" placeholder="name@example.com" required="" type="text"/>
</div>
<p class="text-[10px] text-error px-1 hidden" id="emailError">Please enter a valid email or phone number.</p>
</div>
<!-- Password Input -->
<div class="space-y-2">
<div class="flex justify-between items-center px-1">
<label class="text-[11px] font-label font-bold uppercase tracking-widest text-on-surface-variant" for="password">Password</label>
<a class="text-[11px] font-label font-bold uppercase tracking-widest text-primary hover:text-primary-container transition-colors" href="lupa_password.php" id="forgotPasswordLink">Forgot Password?</a>
</div>
<div class="relative flex items-center bg-surface-container-highest rounded-xl focus-within-accent transition-all group" id="passwordContainer">
<span class="material-symbols-outlined absolute left-4 text-outline group-focus-within:text-primary transition-colors">lock</span>
<input class="w-full bg-transparent border-none focus:ring-0 py-4 pl-12 pr-12 text-on-surface placeholder:text-outline font-body" id="password" placeholder="••••••••" required="" type="password"/>
<button class="absolute right-4 text-outline hover:text-on-surface transition-colors" id="togglePassword" type="button">
<span class="material-symbols-outlined" id="passwordIcon">visibility</span>
</button>
</div>
<p class="text-[10px] text-error px-1 hidden" id="passwordError">Password must be at least 6 characters.</p>
</div>
<!-- Login Button -->
<button class="w-full bg-gradient-to-br from-primary to-primary-container text-on-primary font-headline font-bold py-4 rounded-full shadow-lg shadow-primary/20 transition-all hover:opacity-90 active:scale-[0.98] mt-4 flex items-center justify-center gap-2" id="loginButton" type="submit">
<span>Login</span>
</button>
</form>
<!-- Divider -->
<!-- Social Logins -->
<!-- Register Footer -->
<p class="mt-10 text-center text-sm font-body text-on-surface-variant">
                    Don't have an account? 
<a class="text-primary font-bold hover:underline decoration-2 underline-offset-4 ml-1" href="halaman_daftar.php" id="registerLink">Register</a>
</p>
</div>
</div>
</main>
<!-- Footer decoration (Editorial Space) -->
<footer class="max-w-5xl mx-auto px-6 pb-8 flex flex-col md:flex-row items-center justify-between text-[11px] font-label font-bold uppercase tracking-widest text-outline">
<div class="flex gap-6 mb-4 md:mb-0">
<a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
<a class="hover:text-primary transition-colors" href="#">Terms of Service</a>
</div>
<div class="flex items-center gap-2">
<span>© 2024 Kantin Kita</span>
<span class="w-1 h-1 rounded-full bg-outline-variant"></span>
<span>Handcrafted Flavors</span>
</div>
</footer>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const loginForm = document.getElementById('loginForm');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const togglePasswordBtn = document.getElementById('togglePassword');
        const passwordIcon = document.getElementById('passwordIcon');
        
        const emailError = document.getElementById('emailError');
        const passwordError = document.getElementById('passwordError');
        const emailContainer = document.getElementById('emailContainer');
        const passwordContainer = document.getElementById('passwordContainer');

        const registerLink = document.getElementById('registerLink');
        const forgotPasswordLink = document.getElementById('forgotPasswordLink');

        // Navigation links
        registerLink.addEventListener('click', (e) => {
            e.preventDefault();
window.location.href = 'halaman_daftar.php';
        });

        forgotPasswordLink.addEventListener('click', (e) => {
            e.preventDefault();
window.location.href = 'lupa_password.php';
        });

        // Toggle password visibility
        togglePasswordBtn.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            passwordIcon.textContent = type === 'password' ? 'visibility' : 'visibility_off';
        });

        // Validation and Mock Login logic
        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            let isValid = true;
            const emailValue = emailInput.value.trim();
            const passwordValue = passwordInput.value;

            // Simple validation
            if (!emailValue) {
                showError(emailContainer, emailError);
                isValid = false;
            } else {
                hideError(emailContainer, emailError);
            }

            if (passwordValue.length < 6) {
                showError(passwordContainer, passwordError);
                isValid = false;
            } else {
                hideError(passwordContainer, passwordError);
            }

            if (isValid) {
                const loginBtn = document.getElementById('loginButton');
                loginBtn.disabled = true;
                loginBtn.innerHTML = '<span class="material-symbols-outlined animate-spin">progress_activity</span>';

                // Mock Credential Logic
                setTimeout(() => {
                    if (emailValue === 'seller@kantinkita.com') {
window.location.href = 'penjual/dashboard_penjual.php'; // Seller Dashboard
                    } else {
window.location.href = 'index.php'; // User Home
                    }
                }, 800);
            }
        });

        function showError(container, errorText) {
            container.classList.add('border', 'border-error', 'error-shake');
            errorText.classList.remove('hidden');
            setTimeout(() => container.classList.remove('error-shake'), 400);
        }

        function hideError(container, errorText) {
            container.classList.remove('border', 'border-error');
            errorText.classList.add('hidden');
        }

        // Real-time validation clearing
        emailInput.addEventListener('input', () => hideError(emailContainer, emailError));
        passwordInput.addEventListener('input', () => {
            if (passwordInput.value.length >= 6) {
                hideError(passwordContainer, passwordError);
            }
        });
    });
</script>
</body></html>