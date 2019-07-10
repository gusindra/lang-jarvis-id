<?php
return array(
	'menu' => array(
                    'general' => 'General',
					'payment' => 'Pembayaran',
					'account' => 'Akun & Billing',
					'tax' => 'Pajak',
					'admin' => 'Administrator',
					'notif' => 'Email Notifikasi',
					'file' => 'Pengaturan File',
					'domain' => 'Domain',
					'info' => 'Info Update',
					'analytic' => 'Google Analytic',
				),
	'tax' => array(
                    'title' => 'Pengaturan Pajak',
					'desc' => 'Pengaturan tentang besarnya pajak dan metode pembayarannya',
					'tax' => 'Besar Pajak',
					'active' => 'Aktifkan Pajak',
					'tax_des' => 'Pajak akan dikenakan sekian % dari total belanja customer',
				),
	'index' => array(
                    'title' => 'Tentang Toko',
					'desc' => 'Pengaturan informasi tentang toko online (optimasi SEO)',
					'input_store_name' => 'Nama Toko',
					'input_store_title' => 'Judul Toko',
					'input_store_keyword' => 'Keyword Toko',
					'input_store_desc' => 'Deskripsi Toko',
					'info_store_desc' => 'Deskripsi toko ini akan menjadi acuan untuk ditampilkan di mesin pencari (Google, Bing, Yahoo, dll)',
					
					'title_2' => 'Kontak Toko Online',
					'desc_2' => 'Data toko online untuk pelayanan kostumer & kontak',
					'input_store_phone' => 'Telepon',
					'input_store_handphone' => 'Handphone',
					'input_store_bbm' => 'Pin Blackberry',
					'input_store_email' => 'Email Toko',
					'input_store_ym' => 'Yahoo Messenger ID',
					'info_sosmed' => 'Informasi Sosial Media Toko dari Menu <a href="/admin/themes"><b>Tema</b></a> > <b>Setting Tema</b> > <b>Sosial Media</b>',

					'title_3' => 'Alamat Toko',
					'desc_3' => 'Alamat toko yang tampil pada Website dan Invoice Order',
					'country' => 'Negara',
					'province' => 'Provinsi',
					'city' => 'Kota',
					'state' => 'Kecamatan',
					'select_country' => '-- Pilih Negara --',
					'select_province' => '-- Pilih Provinsi --',
					'select_city' => '-- Pilih Kota --',
					'select_state' => '-- Pilih Kecamatan --',
					'address' => 'Alamat Lengkap',
					'sample_address' => 'Contoh: Jalan Dewi Sartika, Denpasar, Bali',
					'poscode' => 'Kodepos',
					'map' => 'Kordinat Peta',
					'find_map' => ' Cari Lokasi Dengan Map',
					'help_map' => 'Drag dan Drop Marker untuk menentukan posisi di Map',
					'info_map' => 'Koordinat berdasarkan alamat lengkap diatas',

					'title_4' => 'Standar Format',
					'desc_4' => 'Standar dan Format akan digunakan untuk pengaturan di toko online anda.',
					'invoice' => 'Format Awalan Invoice (Kode Order)',
					'sample_invoice' => 'Contoh: # menjadi #234235',
					'timezone' => 'Zona Waktu',
					'system_unit' => 'Sistem Unit',
					'currency' => 'Mata Uang',
					'lang' => 'Bahasa',
					'unique_code' => 'Kode Unik Pembayaran Order',
					'info_unique_code' => 'Akan menambahkan angka acak saat pelanggan melakukan order di toko kamu.',

					'title_5' => 'Maintenance Mode',
					'desc_5' => 'Maintenance Mode adalah fitur dimana website anda akan hanya menampilkan halaman <i>maintenance</i> (perbaikan) didalam toko kamu.',
					'info_maintenance' => '(klik disini) Centang untuk mengaktifkan mode maintenance'
				),
	
	'checkout' => array(
                    'title' => 'Metode Pembayaran',
					'desc' => 'Pengaturan tentang metode pembayaran yang digunakan Toko Online dengan pelanggan.',
					'tranfer_bank' => 'Tranfer Bank',
					'desc_tranfer_bank' => 'Pembayaran Bank Transfer secara konvensional dapat anda atur disini.',
					'bank' => 'Bank',
					'bank_account' => 'No. Rekening',
					'bank_name_account' => 'Atas Nama',
					'delete' => 'Hapus',
					'no_bank' => 'Akun bank masih kosong',
					'upgrade_bank' => '* Toko anda hanya bisa menggunakan satu akun bank saja? Upgrade toko anda untuk menikmati full fitur Jarvis Store.',
					'title_2' => 'Refund, Privacy dan TOS',
					'desc_2' => 'Pengaturan untuk isi mengenai Refund, Privasi, Syarat dan Ketentuan',
					'refund' => 'Refund Policy',
					'info_refund' => 'Metode dan cara refund yang anda gunakan',
					'policy' => 'Privacy Policy',
					'info_policy' => 'Data customer apa yang anda simpan ke sistem',
					'service' => 'Syarat dan Ketentuan',
					'info_service' => 'Peraturan-peraturan',
					'sample' => 'Butuh Contoh ? Klik di sini',
				),
	'account' => array(
                    'msg_fail' => 'Kami mengalami kesalahan sebagai berikut:',
					'msg_success' => 'Update berhasil di lakukan..',
					'msg_fail_billing' => 'Maaf, Billing anda tidak berhasil dikirim..',
					'msg_success_billing' => 'Terima Kasih, Billing anda telah dikirimkan..',
					'msg_fail_konfirm' => 'Maaf, Konfirmasi billing anda gagal..',
					'msg_success_konfirm' => 'Terima Kasih, Billing anda sudah berhasil dikonfirmasi..',
					'title' => 'Tentang Akun',
					'desc' => 'Rangkuman tentang akun anda',
					'register_date' => 'Terdaftar Tanggal',
					'owner' => 'Pemilik Akun',
					'close_account' => 'Nonaktifkan Toko Saya',
					'billing' => 'Tagihan Perpanjangan Selanjutnya',
					'free_plan' => 'Paket Gratis',
					'free_forever' => ' kamu menggunakan paket <b>Free Pack</b> dimulai dari ',
					'active_pack' => ' kamu menggunakan paket <b>:pack</b> aktif sampai dengan ',
					'trial' => 'Full Trial sampai',
					'active_to' => 'aktif sampai',
					'title_2' => 'Billing Info',
					'desc_2' => 'Tentang data penagihan untuk perpanjangan penggunaan sistem',
					'will_expire' => 'Silakan pilih salah satu paket dibawah ini untuk mengingkatkan kapasitas toko anda.',
					'expired' => 'Yuk pilih paket kita yang lain dan dapatkan ekstra kapasitas dan fitur lainnya di Jarvis Store.',
					'upgrade' => 'Mau upgrade fitur toko ini? Silakan pilih salah satu paket dibawah ini.',
					'download' => 'Tentang data penagihan untuk perpanjangan penggunaan sistem',
					'active' => 'Aktif',
					'order_now' => 'Pesan Sekarang!',
					'title_3' => 'Member & Affiliate',
					'desc_3' => 'Halaman member Jarvis Store & Afiliasi',
					'go_to_aff' => 'Menuju ke halaman member & Afiliasi Jarvis Store',
					'title_4' => 'Tutup Akun dan Toko di Jarvis Store',
					'desc_4' => 'Menutup Akun akan membuat toko anda tidak dapat di akses, menonaktifkan semua fitur dan menghapus semua data (laporan dan gambar) yang ada ditoko anda.',
					'reason' => 'Alasan penutupan',
					'option1' => 'Memiliki Akun/Toko lain',
					'option2' => 'Tidak menggerti menggunakan Jarvis Store',
					'info_option2' => 'Lihat Channel Bantuan Jarvis Store atau <a style=\'cursor: pointer;\' id=\'bantuan1\'><strong>kilk di sini</strong>',
					'option3' => 'Lain-lain',
					'label_option3' => 'Berikan keterangan tambahan lainnya :',
					'info_option3' => 'penjelasan..',
					'disable' => 'Batalkan Notifikasi (Subsriber, Reminder, Update) ke Email saya',
				),
	'notification' => array(
                    'title' => 'Template Email',
					'desc' => 'Pengaturan untuk template email, anda harus mengerti <b>Sistem Blade Templating</b> untuk melakukan edit template.',
					'desc2' => 'Silakan kirim email ke <a href=\'mailto:support@jarvis-store.com\'>support@jarvis-store.com</a> untuk dapat membantu permasalahan editing template.',
					'subject' => 'Subject Email',
					'content' => 'Isi Email:',
					'title_2' => 'Email Admin',
					'desc_2' => 'Email admin yang akan mendapat notifikasi',
					'email' => 'Email Admin',
				),
	'domain' => array(
                    'title' => 'Pengaturan Domain',
					'desc' => 'Pengaturan tentang domain toko jarvis anda dan domain sendiri',
					'domain_jarvis' => 'Domain Jarvis Store',
					'upgrade' => 'Mau pakai domain sendiri? Silakan upgrade ke paket berbayar dari Menu <b>Pengaturan</b> > <b>Akun</b> ',
					'order' => 'Buat domain baru ? Silakan Pesan disini',
					'parking' => 'Punya domain sendiri, silakan Parking dibawah ini !',
				),
	'info' => array(
                    'title' => 'Informasi Update',
					'desc' => 'Pertanyaan mengenai info dan update dapat di kirim ke <a href="mailto:info@jarvis-store.com">info@jarvis-store.com</a> atau tombol Bantuan yg ada di atas.',
					'aff_jarvis' => 'Sekarang Jarvis Store memiliki program afiliasi yang sangat menguntungkan buat kamu. Dapatkan pemasukan tambahan hanya dengan memberikan referral untuk menggunakan Jarvis Store. Yuk gabung, selengkapnya LIHAT DISINI (ini link menuju ke : <a href="http://jarvis-store.com/partner/afiliasi" target="_blank">http://jarvis-store.com/partner/afiliasi</a> )',
					'help' => 'Bantuan',
					'step1' => 'Ini adalah nama toko kamu. Klik pada bagian ini untuk melihat toko online kamu.',
					'step2' => 'Tour adalah bantuan langsung untuk pengguna awal. Seperti yang kamu lihat di layar saat ini.',
					'step3' => 'Mengalami kesuliatan ? Gunakan tombol ini untuk melihat tutorial, melaporakan gangguan dan chat dengan tim kami.',
					'step4' => 'Kamu dapat melihat sisa kuota produk dan kapasitas penyimpanan toko online disini.',
					'step5' => 'Klik pada bagian ini untuk melihat toko online kamu.',
					'step6' => 'Kamu dapat mengubah kontak dan data profil disini. <br>Kami akan menghubungi kamu jika ada info menarik.',
					'step7' => 'Menu <span style=\'font-weight: bold;font-style: italic;\'>Dashboard</span> berisi statistik pengunjung dan order yang masuk pada hari ini.',
					'step8' => 'Menu order berisi semua order yang masuk, baik yang pending, diproses, terkirim, maupun yang telah batal.<br> Kamu juga bisa menambah order melalui menu ini.',
					'step9' => 'Menu pelanggan berisi semua daftar pelanggan kamu, baik itu <span style=\'font-weight: bold;font-style: italic;\'>guest, member</span> ataupun mitra/<span style=\'font-weight: bold;font-style: italic;\'>reseller</span>.<br> Kamu dapat menambah, mengubah dan menghapus data pelanggan dari menu ini.',
					'step10' => 'Menu katalog berisi 3 sub menu, yaitu menu untuk menambah, mengubah atau menghapus Produk, Kategori dan Koleksi.',
					'step11' => 'Menu diskon berisi semua diskon yang aktif dan tidak aktif. Kamu bisa membuat kode diskon disini.',
					'step12' => 'Menu ekspedisi adalah tempat mengatur jenis dan tarif pengiriman untuk toko kamu.',
					'step13' => 'Menu <span style=\'font-weight: bold;font-style: italic;\'>Blog</span> digunakan untuk memposting tulisan-tulisan untuk blog toko kamu.',
					'step14' => 'Menu halaman berisi semua daftar halaman yang digunakan oleh toko kamu. Kamu juga bisa menambah halaman sebanyak-banyaknya disini.',
					'step15' => 'Menu tautan berguna untuk mengatur grup tautan dan pembuatan tautan ke halaman-halaman web yang kamu inginkan.',
					'step16' => 'Menu testimonial berisi semua testimonial yang masuk. Kamu bisa memilih testimonial mana saja yang akan ditampilkan di toko kamu.',
					'step17' => 'Menu laporan berisi 3 jenis laporan, yaitu produk, order dan pembayaran.<br> Masing-masing memiliki laporan yang bisa kamu unduh dan cetak.',
					'step18' => 'Menu <span style=\'font-weight: bold;font-style: italic;\'>power-up / apps</span> berisi daftar power-up / apps yang telah terpasang di toko kamu.',
					'step19' => 'Menu statistik berisi data statistik yang lebih lengkap dari pengunjung toko online kamu.',
					'step20' => 'Menu tema berisi semua tema yang telah terpasang. Penyesuaian tampilan, layout dan warna toko bisa kamu lakukan pada menu ini.',
					'step21' => 'Menu pengaturan berisi berbagai macam pengaturan dan data informasi tentang toko online kamu. Mulai dari <ul><li>Profil toko,</li><li>Kontak toko,</li><li>Jenis pembayaran yang digunakan,</li><li>Pajak,</li><li>Format email notifikasi,</li><li>Info akun/paket yang anda gunakan,</li><li>Pengaturan file,</li><li>Pengaturan domain,</li><li>Info update dari kamu.</li></ul>.',

				),
	'administrator' => array(
                    'breadcrumb_1' => 'Pengaturan',
                    'breadcrumb_2' => 'Administrator',
					'breadcrumb_3' => 'Daftar Administrator Toko',
					'breadcrumb_4' => 'Edit Administrator Toko',
					'breadcrumb_5' => 'Tambah Administrator Toko',

					'data_admin' => 'Data Administrator',
					'data_general' => 'Data Umum',
					'data_standard' => 'Data standar Admin Toko',
					'data_contact' => 'Data Kontak',
					'data_info_contact' => 'Informasi Kontak',
					'data_other' => 'Data Lainnya',
					'data_addtional' => 'Data tambahan',

					'authorization' => 'Hak Akses',
					'author_full' => 'Akses Penuh',
					'author_catalog' => 'Akses Produk, Kategori, Koleksi',
					'author_content' => 'Akses Halaman, Blog, Tautan, Testimonial',
					'author_sales' => 'Akses Order, Pelanggan, dan Diskon',

					'nama' => 'Nama',
					'email' => 'Email',
					'phone' => 'Telepon',
					'position' => 'Posisi',
					'login' => 'Login Terakhir',
					'action' => 'Action',

				),
);
