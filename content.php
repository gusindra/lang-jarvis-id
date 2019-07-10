<?php
return array(
	'seo' => array(
		'title' => 'Jarvis Store - Jasa Pembuatan Website Toko Online Instan Untuk Semua Perangkat | Jasa pembuatan website toko online membantu anda membuat toko online gratis',
        'description' => 'Buat Toko online secara instan, mudah, cepat, fitur lengkap, template keren, ongkir otomatis, payment lengkap dan gratis selamanya.',
        'keywords' => 'jasa toko online, buat toko online, buat toko online instan, jasa toko online murah, jasa toko online instan, toko online responsif, pembuatan toko online, toko online murah, jasa pembuatan toko online, toko online instan, toko online, buat toko online mudah, buat toko online cepat, buat toko online gratis, buat toko online murah, template toko online gratis',
		),
	
	'account_setup' => array(
		'title' => 'Silakan Lengkapi Informasi berikut',
		'address_info' => 'Alamat akan digunakan untuk ekspedisi dan kontak toko anda.',
		'term_info' => 'Dengan membuat akun, berarti anda setuju dengan <a target="_blank" href="'.URL::to('http://www.jarvis-store.com/kebijakan').'">kebijakan layanan</a> kami.',
		'button' => 'Simpan Pengaturan',
		'shop_name' => 'Nama Toko Lengkap',
		'name' => 'Nama Anda',
		'address' => 'Alamat',
		'telp' => 'Telepon',
		'country' => 'Negara',
		'province' => 'Provinsi',
		'city' => 'Kota',
		'zip_code' => 'Kode Pos',
		'shop_category' => 'Kategori Toko',
		'select_country' => '-- Pilih Negara --',
		'select_province' => '-- Pilih Provinsi --',
		'select_city' => '-- Pilih Kota --',
		'select_category' => '-- Pilih Kategori --',
		),
	'homepage' => (include 'frontend/home.php'),
	'feature' => (include 'frontend/feature.php'),
	'portfolio' => (include 'frontend/portfolio.php'),
	'pricing' => (include 'frontend/pricing.php'),
	'template' => (include 'frontend/template.php'),
	'power_up' => (include 'frontend/power_up.php'),
	'partner' => (include 'frontend/partner.php'),
	'karir' => (include 'frontend/karir.php'),
	'error' => (include 'frontend/error.php'),
	'about' => (include 'frontend/about.php'),
	'blog' => (include 'frontend/blog.php'),
	'shop_error' => [
		'403' => [
					'title' => 'Opps, sepertinya kamu tidak bisa mengakses halaman ini.',
					'description' => 'Halaman yang kamu tuju sepertinya tidak dapat di akses. Kamu bisa kembali ke halaman sebelumnya dengan tombol di bawah ini.',
					'back_btn' => 'Kembali'
				],
		'404' => [
					'title' => 'Opps, halaman yang kamu cari tidak ditemukan.',
					'description' => 'Halaman yang kamu tuju sepertinya tidak ditemukan atau sudah di hapus. Kamu bisa kembali ke halaman sebelumnya',
					'back_btn' => 'Kembali'
				],
		'500' => [
			'title' => 'Maaf, sedang terjadi kesalahan.',
			'description' => 'Kami akan segera memperbaiki ini secepatnya, kamu bisa kembali ke halaman sebelumnya atau coba beberapa saat lagi.',
			'back_btn' => 'Kembali'
		],
		'default' => [
			'title' => 'Opps, sedang terjadi kesalahan',
			'description' => 'Kami tidak menemukan halaman yang kamu cari. Kami akan segera memperbaiki masalah ini secepatnya.',
			'back_btn' => 'Kembali'
		],
	],
	'underconstruction' => (include 'error/underconstruction.php'),
	'payment_confirmation' => (include 'frontend/payment_confirmation.php'),
    'login_member' => (include 'frontend/login_member.php'),
    'forget_password' => (include 'frontend/forget_password.php'),
    'upgrade' => (include 'frontend/upgrade.php'),
	'knowledge_base' => (include 'frontend/knowledge_base.php'),
	'login_admin' => (include 'backend_shop/login.php'),
	'shop_admin' => (include 'backend_shop/template.php'),
	'home_admin' => (include 'backend_shop/dashboard.php'),
	'order_admin' => (include 'backend_shop/order.php'),
	'costumer_admin' => (include 'backend_shop/costumer.php'),
	'collection_admin' => (include 'backend_shop/collection.php'),
	'category_admin' => (include 'backend_shop/categories.php'),
	'discount_admin' => (include 'backend_shop/discount.php'),
	'product_admin' => (include 'backend_shop/product.php'),
	'expedisi_admin' => (include 'backend_shop/exspedisi.php'),
	'power_up_admin' => (include 'backend_shop/power_up.php'),
	'blog_admin' => (include 'backend_shop/blog.php'),
	'page_admin' => (include 'backend_shop/pages.php'),
	'link_admin' => (include 'backend_shop/link.php'),
	'testimonial_admin' => (include 'backend_shop/testimonial.php'),
	'setting_admin' => (include 'backend_shop/setting.php'),
	'theme_admin' => (include 'backend_shop/theme.php'),
	'checkout' => (include 'checkout/template.php'),
	'step1' => (include 'checkout/step1.php'),
	'step2' => (include 'checkout/step2.php'),
	'step3' => (include 'checkout/step3.php'),
	'step4' => (include 'checkout/step4.php'),
	'step5' => (include 'checkout/step5.php'),
	'cart' => (include 'checkout/cart.php'),
	'frontend_shop_menu' => array(
		'home' => 'Home',
		'product' => 'Produk',
		'category' => 'Kategori',
		'collection' => 'Koleksi',
	),
	
);
