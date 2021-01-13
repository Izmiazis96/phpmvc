<!-- jika tidak ada file index , maka akses akan di blok -->
Options -Indexes 

<!-- untuk menghindari kata / ambigu -->
Options -Multiviews 
<!-- menulis ulang -->
RewriteEngine On
<!-- jika folder maka abaikan-->
RewriteCond %{REQEUST_FILENAME} !-d
<!-- jika file maka abaikan -->
RewriteCond %{REQEUST_FILENAME} !-f
<!-- regeg (regular expresion) apapun yang ditulis disini ^(.*)$ akan disimpan index.php?url=$1 [L].
[L] jika rule sudah terpenuhi maka jgn jalankan lagi-->
RewriteRule ^(.*)$ index.php?url=$1 [L]

