import os
import re

# Fix penjual/riwayat_pesanan_penjual.php
file = 'penjual/riwayat_pesanan_penjual.php'
if os.path.exists(file):
    with open(file, 'r', encoding='utf-8') as f:
        content = f.read()
    # Fix sidebar links
    content = content.replace('href="#"\n<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>', 'href="dashboard_penjual.php"\n<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>')
    content = content.replace('href="#"\n<span class="material-symbols-outlined" data-icon="restaurant_menu">restaurant_menu</span>', 'href="kelola_menu_penjual.php"\n<span class="material-symbols-outlined" data-icon="restaurant_menu">restaurant_menu</span>')
    content = content.replace('href="#"\n<span class="material-symbols-outlined" data-icon="pending_actions">pending_actions</span>', 'href="pesanan_masuk_penjual.php"\n<span class="material-symbols-outlined" data-icon="pending_actions">pending_actions</span>')
    content = content.replace('href="#"\n<span class="material-symbols-outlined" data-icon="history" style="font-variation-settings: \'FILL\' 1;">history</span>', 'href="riwayat_pesanan_penjual.php"\n<span class="material-symbols-outlined" data-icon="history" style="font-variation-settings: \'FILL\' 1;">history</span>')
    content = content.replace('href="#"\n<span class="material-symbols-outlined" data-icon="logout">logout</span>', 'href="../halaman_login.php"\n<span class="material-symbols-outlined" data-icon="logout">logout</span>')
    with open(file, 'w', encoding='utf-8') as f:
        f.write(content)
    print(f"Fixed {file}")

# Fix penjual/pesanan_masuk_penjual.php
file = 'penjual/pesanan_masuk_penjual.php'
if os.path.exists(file):
    with open(file, 'r', encoding='utf-8') as f:
        content = f.read()
    content = content.replace('href="#"\n<span class="material-symbols-outlined">dashboard</span>', 'href="dashboard_penjual.php"\n<span class="material-symbols-outlined">dashboard</span>')
    content = content.replace('href="#"\n<span class="material-symbols-outlined">restaurant_menu</span>', 'href="kelola_menu_penjual.php"\n<span class="material-symbols-outlined">restaurant_menu</span>')
    content = content.replace('href="#"\n<span class="material-symbols-outlined">pending_actions</span>', 'href="pesanan_masuk_penjual.php"\n<span class="material-symbols-outlined">pending_actions</span>')
    content = content.replace('href="#"\n<span class="material-symbols-outlined">history</span>', 'href="riwayat_pesanan_penjual.php"\n<span class="material-symbols-outlined">history</span>')
    content = content.replace('href="#"\n<span class="material-symbols-outlined">logout</span>', 'href="../halaman_login.php"\n<span class="material-symbols-outlined">logout</span>')
    with open(file, 'w', encoding='utf-8') as f:
        f.write(content)
    print(f"Fixed {file}")

# Fix penjual/manajemen_produk_seller_center.php - sidebar
file = 'penjual/manajemen_produk_seller_center.php'
if os.path.exists(file):
    with open(file, 'r', encoding='utf-8') as f:
        content = f.read()
    content = content.replace('href="#"\n<span class="material-symbols-outlined mr-3" data-icon="dashboard">dashboard</span>', 'href="dashboard_penjual.php"\n<span class="material-symbols-outlined mr-3" data-icon="dashboard">dashboard</span>')
    content = content.replace('href="#"\n<span class="material-symbols-outlined mr-3" data-icon="menu_book">menu_book</span>', 'href="kelola_menu_penjual.php"\n<span class="material-symbols-outlined mr-3" data-icon="menu_book">menu_book</span>')
    content = content.replace('href="#"\n<span class="material-symbols-outlined mr-3" data-icon="list_alt">list_alt</span>', 'href="pesanan_masuk_penjual.php"\n<span class="material-symbols-outlined mr-3" data-icon="list_alt">list_alt</span>')
    content = content.replace('href="#"\n<span class="material-symbols-outlined mr-3" data-icon="insights">insights</span>', 'href="riwayat_pesanan_penjual.php"\n<span class="material-symbols-outlined mr-3" data-icon="insights">insights</span>')
    content = content.replace('href="#"\n<span class="material-symbols-outlined mr-3" data-icon="settings">settings</span>', 'href="dashboard_penjual.php"\n<span class="material-symbols-outlined mr-3" data-icon="settings">settings</span>')
    with open(file, 'w', encoding='utf-8') as f:
        f.write(content)
    print(f"Fixed {file}")

print("Done fixing remaining seller pages!")

