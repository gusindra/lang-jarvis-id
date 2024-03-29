<?php
return array(
        
        'title'                => 'Data Produk',
        'list'                 => 'Daftar Produk',
        'no_stock'                 => 'Produk kosong',
        'add_product'                 => 'Tambah Produk',
        'add_new_product'                 => '<i class="fa-icon-plus"></i> <span class="hidden-phone hidden-tablet">Tambah Baru</span>',
        'copy_product'                 => '<i class="fa-icon-copy"></i> <span class="hidden-phone hidden-tablet">Copy</span>',
        'edit_product'                 => '<i class="fa-icon-edit"></i> <span class="hidden-phone hidden-tablet">Edit</span>',
        'see_product'                 => '<i class="fa-icon-share-alt"></i> <span class="hidden-phone hidden-tablet">Lihat</span>',
        'eport_data'                 => 'Export Data Produk',
        'import_data'                 => 'Import Data Produk (CSV)',
        'input_csv'                 => 'Masukkan file csv produk',
        'update_same_data'                 => 'Update produk yang sudah ada yang memiliki nama yang sama',
        'sample_csv'                 => 'Contoh Format file csv bisa di download',
        'breadcrumb'    => array(
                'main' => 'Produk',
                'create' => 'Tambah Produk Baru',
                'edit' => 'Edit Produk',
                'copy' => 'Copy Produk',
        ),
        'form_input'  => array(
                'first_title' => 'Detail Produk',
                'first_description' => 'Data produk termasuk nama, produsen, dll',
                        'name' => 'Nama Produk',
                        'description' => 'Diskripsi',
                        'category' => 'Kategori',
                        'brand' => 'Vendor',
                        'edit_category' => 'Ubah Kategori',
                        'select_category' => 'Pilih Kategori',
                        'new_category' => 'Kategori Baru',
                'second_title' => 'Inventori & Varian',
                'second_description' => 'Stok dan pengaturan atribut produk',
                        'price' => 'Harga Jual',
                        'before_price' => 'Harga Coret (Harga Normal/Sebelum Diskon)',
                        'mitra_price' => 'Harga Mitra',
                        'mitra_price_alert' => 'Jika harga mitra/reseller tidak di set, maka harga untuk mitra anda adalah harga jual',
                        'des_mitra_price' => 'Harga mitra akan di pakai jika ada mitra yang berbelanja',
                        'cek_mitra_price' => 'Pakai harga mitra/reseller?',
                        'stock' => 'Stock',
                        'gram' => 'Berat (Gram)',
                        'barcode' => 'Barcode',
                        'optional' => 'Punya Opsi dan Varian? (Stok berdasar opsi) <span class="muted">Max 3 opsi</span>',
                                'option_name' => 'Nama Opsi',
                                'option_value' => 'Value & Stock  <span class="muted">Pisahkan dengan koma (,)',
                                'select' => 'Pilih Opsi...',
                                'color' => 'Warna',
                                'size' => 'Ukuran (Size)',
                                'material' => 'Material (Bahan)',
                                'new_opsi' => 'Buat opsi baru',
                                'add_opsi' => 'Tambah Opsi',
                                'variant' => 'Variant/Opsi',
                                'add_variant' => 'Tambah Varian',
                'third_title' => 'Gambar Produk',
                'third_description' => 'Upload gambar produk ini, anda bisa click atau drop gambar kotak sebelah kanan.',
                'third_description_2' => 'Kamu juga bisa import gambar dari beberapa social media di bawah ini.',
                        'upload' => 'Drop / klik untuk Upload',
                        'main_img' => 'Gambar Utama',
                        'opt_img_1' => 'Gambar Opsional 1',
                        'opt_img_2' => 'Gambar Opsional 2',
                        'opt_img_3' => 'Gambar Opsional 3',
                        'delete' => 'Hapus',
                'fourth_title' => 'Tags & Koleksi',
                'fourth_description' => 'Tag digunakan untuk mengkategorikan produk berdasarkan atribut seperti warna, ukuran, material, dll',
                        'tags' => 'Tag <span class="muted">Pisahkan dengan koma (,)',
                        'collection' => 'Koleksi',
                'fiveth_title' => 'SEO',
                'fiveth_description' => 'Digunakan untuk optimasi mesin pencari (google, yahoo, bing, dll)',
                        'descrip_tag' => 'Deskripsi Meta-Tag',
                        'etc_descrip_tag' => 'contoh: Example Store menyediakan produk sepatu dengan model kekinian',
                        'keyword_tag' => 'Keyword Meta-Tag',
                        'etc_keyword_tag' => 'contoh: Example Store, toko sepatu, sepatu biru, sepatu model kekinian',
                        'keyword' => 'Keyword SEO',
                        'etc_keyword' => 'contoh: sepatu biru, sepatu kat biru, sepatu kekinian',
                        'url' => 'URL & Handle',
                'sixth_title' => 'Visibility (Tampil?)',
                'sixth_description' => 'Status produk ini',
                        'home_page' => 'Home Page<small><em> Produk ini akan muncul khusus di homepage (jika tema yang mendukung)</em></small>',
                        'show' => 'Tampil<small><em> Produk ini akan tampil di semua halaman </em></small>',
                        'not_show' => 'Tidak Tampil<small><em> Produk ini tidak akan tampil di semua halaman </em></small>',
                        'only_one' => 'Anda hanya bisa memilih salah satu saja.',
                        'hot' => 'Produk Terlaris <small><i> Centang jika produk ini salah satu terlaris</i></small>',
                        'new' => 'Produk Baru <small><i> Centang jika produk ini baru</small></i>',
        ),
        'help'    => array(
                'step1' => 'Ini adalah table daftar produk toko anda',
                'step2' => 'lihat produk dan Edit produk',
                'step3' => 'Kamuy dapat tambah produk baru dengan meng-copy data produk yg dipilih',
                'step4' => 'Klik untuk menambah kategori baru',
                'step5' => 'Ini button untuk melakukan pengaturan produk',
                'step6' => 'klik disini untuk memilih semua produk',
                'step7' => 'klik disini untuk menghapus produk yang telah di pilih',
                'step8' => 'klik disini untuk memasukan produk baru',
                'step9' => 'klik disini memfilter produk yg melewati kuota limit produk',
        ),
        'mall'    => array(
                'main' => 'Produk',
                'create' => 'Tambah Produk Baru',
                'edit' => 'Edit Produk',
        ),
        'no_data'       => 'Belum ada data Produk di toko online Anda',
        'message'       => [

                'empty_image' => 'Produk harus memiliki minimal 1 gambar.'
        ]

);
