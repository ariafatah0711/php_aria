    -A. prototype => bentuk dasar dari sebuah aplikasi
    - prototype agar mudah di pahami flow aplikasi nya
    - dari prototype kita juga bisa melihat data yang dibutuhkan, business logic apa yang dibutuhkan, dan seperti apa tampilanya

B. membuat project
    - membuat file App.php
    - membuat model =>  data dari app
    - menentukan business logic => yaitu berisi funtcion atau fitur yang ada pada app
    - menentukan view => 3 display(layar tampilkan todolist, menambah, dan menghapus)

C. Implementasikan
    - menampilkan todo list => membuat funtion for di busines logic show
        - lalu test menampilkan todo list
    - menambahkan todo list => membuat function untuk menambahkan todo list di busines logic add
        - test menambah todo list
    - menghapus todo list => membutuhkan nomer todo list yang akan di hapus
        - test menghapus todo list

D. Helper
    - input data di php menggunakan fgets() di taruh di Helper > Input.php

E. view todo list
    - view menampilkan todolist => membuat pilihan add remove dan exit
        - test view menampilkan todo list
    - view menambah todo list => membuat inputan teks todo list
        - test view menambah todo list
    - view menghapus todo list => membuat inputan pilihan nomer todo list yang ingin di hapus
        - test view menghapus todo list

    - test seluruh aplikasi todo list