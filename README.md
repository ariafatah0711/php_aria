A. pengenalan PHP
- PHP => singkatan dari PHP: Hypertext Preprocessor
- dikhususkan untuk web development
- open source => php.net atau https://github.com/php/php-src

- proses development php
file.php di execute dan di proses oleh php lalu akan tampil/result di outputnya

B. yang dibuat di php
- server-side scripting => untuk membuat aplikasi server side
    - dan digunakan sebagai aplikasi web menggunakan bantuan browser
- command line scripting => digunakan untuk membuat progam berbasis command line, tanpa harus menggunakan web server
- dekstop application => membuat aplikasi dekstop menggunakan PHP-GTK

C. menginstall php
- jika manual tidak terlalu mudah
- jika ingin mudah dapat menggunakan XAMPP
- aplikasi XAMPP => mem-bundle PHP, MySQL, MariaDB, Apache HTTPD, dll
- tutor install ada di yt dan jika telah selesai kita bisa buat path untuk php

D. install PHP di terminal
- pergi ke bash.rc / zarsrc gittu gw lupa
- lalu nano bash.rc dan tambahkan
```export PATH="/opt/lampp/bin:$PATH"```

- lalu restart terminal dan jangan lupa nyalain si xampp
- dengan cara
```
$ sudo /opt/lampp/lampp start
$ sudo /opt/lampp/manager-linux-x64.run

$ sudo /opt/lampp/lamp stop // jika ingin berhenti
```
- dan cek php nya dengan cara
```php --version```