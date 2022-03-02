# PROGAM UKK PAKET 3 RPL 2022
Program ini dibuat berdasarkan soal Uji Kompetensi Keahlian jurusan Rekayasa Perangkat Lunak tahun 2022.

Ini merupakan aplikasi untuk sistem restoran dimana pelanggan dapat memesan makanan ataupun minuman langsung melalui website di handphone nya dengan membuat akun terlebih dahulu. Aplikasi yang saya buat berbasis Web dan menggunakan Native PHP. Saya tidak terlalu mempedulikan tampilan yang ada di website ini, semuanya ala kadarnya.

## Hak Akses atau Priviliges
|X                 |Pesan             |Home              |Menu              |Pesan             |Transaksi         |Omset             |Meja              |User              |Order             |
|:----------------:|:----------------:|:----------------:|:----------------:|:----------------:|:----------------:|:----------------:|:----------------:|:----------------:|:----------------:|
|Admin             |:x:               |:heavy_check_mark:|:heavy_check_mark:|:x:               |:heavy_check_mark:|:heavy_check_mark:|:heavy_check_mark:|:heavy_check_mark:|:heavy_check_mark:|
|Owner             |:x:               |:heavy_check_mark:|:heavy_check_mark:|:x:               |:heavy_check_mark:|:heavy_check_mark:|:heavy_check_mark:|:x:               |:x:               |
|Kasir             |:x:               |:heavy_check_mark:|:x:               |:x:               |:heavy_check_mark:|:x:               |:heavy_check_mark:|:x:               |:heavy_check_mark:|
|Pelanggan         |:heavy_check_mark:|:heavy_check_mark:|:heavy_check_mark:|:heavy_check_mark:|:x:               |:x:               |:x:               |:x:               |:x:               |

## Cara Menggunakan
### Via Download

1. Klik tombol Code hijau di repository ini, lalu klik Download ZIP dan simpan di folder yang diinginkan.
2. Buka folder tersebut, lalu extract file .zip tersebut.
3. Copy folder hasil extract file .zip tersebut lalu paste di root folder atau di c:/xampp/htdocs.

### Via CLI
Pertama, Membuat Directory/Folder lalu masuk folder.

    mkdir nama_folder
    cd nama_folder 
    
Kedua, clone repository.

    git clone https://github.com/strbagus/UKK-P3.git

## Catatan
+ import sql ke phpmyadmin.
+ file database sql berada di folder assets.
+ ubah file config.php pada baris kedua menjadi '$conn = new mysqli("localhost", "root", "", "db_restoukk");' atau menyesuaikan.
+ semua password dari user adalah username ditambah 123 contoh: username="bagus" password="bagus123".

## Tambahan
+ Framework CSS menggunakan [Bootstrap](https://getbootstrap.com/docs/5.0/getting-started/introduction/ "Bootstrap 5").
+ Icon menggunakan [Fontawesome](https://fontawesome.com/v5/search "Fontawesome 5").
+ Table menggunakan [Datatables](https://www.datatables.net/ "Datatables").
