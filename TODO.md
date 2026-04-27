# TODO - Routing Fix Progress

## Status: ✅ COMPLETE

### Buyer Flow (index.php)
- [x] Bottom nav: Home (active), Orders, Cart, Profile
- [x] Cart badge links to keranjang
- [x] Food cards link to detail_menu
- [x] "Lihat Semua" links to index (self)
- [x] Add to cart redirects to popup_pesanan
- [x] Floating action button links to menu

### Auth Flow
- [x] halaman_login.php: Register link → halaman_daftar.php
- [x] halaman_login.php: Forgot password → lupa_password.php
- [x] halaman_login.php: Login redirects to index (buyer) or dashboard_penjual (seller)
- [x] halaman_daftar.php: Login link → halaman_login.php
- [x] lupa_password.php: Back to login → halaman_login.php

### Buyer Pages
- [x] detail_menu.php: Back button → index.php
- [x] detail_menu.php: Cart icon → keranjang_belanja_kantin_kita.php
- [x] keranjang_belanja_kantin_kita.php: Back button → index.php
- [x] keranjang_belanja_kantin_kita.php: Checkout button → halaman_pembayaran.php
- [x] halaman_pembayaran.php: Back button → keranjang_belanja_kantin_kita.php
- [x] halaman_pembayaran.php: Payment success → index.php
- [x] invoice_pesanan.php: Back button → index.php
- [x] pusat_notifikasi_pembeli.php: Bottom nav links
- [x] beri_rating_ulasan.php: Back button → index.php
- [x] chat_penjual_pembeli.php: Back button → index.php

### Seller Flow (penjual/)
- [x] dashboard_penjual.php: Sidebar links
- [x] dashboard_penjual.php: Bottom nav links
- [x] kelola_menu_penjual.php: Sidebar links
- [x] pesanan_masuk_penjual.php: Sidebar links
- [x] riwayat_pesanan_penjual.php: Sidebar links
- [x] dashboard_stok_penjual.php: Sidebar links
- [x] manajemen_produk_seller_center.php: Sidebar links
- [x] manajemen_produk_seller_center.php: Bottom nav links

### Admin Flow (admin/)
- [x] admin_dashboard_overview.php: Sidebar links
- [x] admin_manajemen_menu_pesanan.php: Sidebar links
- [x] admin_promo_pengaturan.php: Sidebar links
- [x] manajemen_user_admin_panel.php: Sidebar links
- [x] admin_manajemen_user_penjual.php: Sidebar links
- [x] daftar_pesanan_admin_panel.php: Sidebar links
- [x] daftar_pesanan_admin_panel.php: Bottom nav links
- [x] moderasi_analitik_admin.php: Sidebar links
- [x] moderasi_analitik_admin.php: Bottom nav links

### Remaining (Non-critical)
- [ ] halaman_login.php: Privacy Policy link (placeholder - no page exists)
- [ ] halaman_login.php: Terms of Service link (placeholder - no page exists)

## Verification
- [x] No href="#" navigation links remain (except legal placeholders)
- [x] No {{DATA:SCREEN:...}} placeholder patterns remain
- [x] No onclick="alert('...Placeholder...')" patterns remain

