## Tekstil

Sistem informasi ini merupakan sistem informasi untuk membantu pencatatan produk tekstil atau katalog produk tekstil. 

## Requirements

 NAMA | DOWNLOAD
 ------ | ------ 
 XAMPP | https://www.apachefriends.org/download.html
Visual Studio Code (Text Editor) | https://code.visualstudio.com/download
CodeIgniter | https://codeigniter.com/download
 Template SB Admin 2 | https://github.com/BlackrockDigital/startbootstrap-sb-admin-2/archive/gh-pages.zip

## Implementasi

1.  Membuka XAMPP, klik start pada Apache dan MySQL.
2.  Mendownload repository ini dan simpan ke dalam folder htdocs anda.
3.  Mengakses link _[http://localhost/webtekstil/admin/C_login](http://localhost/webtekstil/admin/C_login/)_  menggunakan browser anda, maka akan muncul halaman Login.
4.  Membuat database baru di PHPMyAdmin dengan cara mengimport file  `tekstil.sql`  lalu beri nama database tersebut dengan nama  _**tekstil**_
5.  Membuka Text Editor (saya menggunakan Visual Studio Code).
6.  Melakukan konfigurasi pada file  `application/config/database.php`  menggunakan Text Editor seperti di bawah ini :
```php
defined('BASEPATH') OR exit('No direct script access allowed');
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'tekstil',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
```
