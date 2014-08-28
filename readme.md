Ranting Waktu
============

# Instalasi

Aplikasi ini menggunakan framework php [Laravel](http://laravel.com/).
Untuk instalasi laravel ke komputer teman-teman tidak cukup hanya menggunakan copy dan paste seperti yang dilakukan framework lainnya, instalasinya menggunakan [composer](https://getcomposer.org/) yaitu php package dependency manager. Sehingga komputer Anda harus terinstall composer.

Hal kedua yang perlu diperhatikan adalah kita menggunakan version control [git](https://www.atlassian.com/git/tutorial). Terdapat banyak version control host, seperti github, bitbucket, dan lain sebagainya, tetapi disini kita menggunakan github.

Untuk editor saya sarankan menggunakan [Sublime Text 3](http://www.sublimetext.com/3), karena terdapat fitur-fitur yang powerfull, memudahkan dan berjalan lebih ringan di komputer. Meskipun tampilannya sangat sederhana.


## Install Composer

### Install composer di Windows

Untuk melakukan instalasi composer di Windows dapat melihat di [dokumentasi ini](https://getcomposer.org/doc/00-intro.md#installation-windows). Cara termudah adalah menggunakan Windows Installer.

### Install composer di Unix
Untuk melakukan instalasi composer di Unix / Linux dapat melihat di [dokumentasi ini](https://getcomposer.org/doc/00-intro.md#installation-nix).


## Install Git

Untuk tingkat advance, git biasanya digunakan menggunakan perintah di terminal. Tetapi terdapat versi GUI-nya juga yang memudahkan. Disini saya menggunakan [Sourcetree](http://www.sourcetreeapp.com/) sebagai GUI , tetapi hanya dapat digunakan di Windows atau Mac, jika teman-teman menggunakan Linux maka silahkan cari alternatifnya.

## Install app

Selanjutnya kita akan melakukan instalasi kode di repository ini di komputer Anda. Yang perlu diperhatikan adalah:

1. PHP yang digunakan sudah menggunakan PHP >= 5.4
2. Terdapat MCrypt PHP Extension
3. Database MySQL Server
4. Koneksi internet (wajib)


Jika menggunakan laravel, kode kita tidak harus diletakkan di webserver root jika masih dalam tahap development. Jadi tidak harus diletakkan di /var/www atau C:\wamp\www atau sebagainya. Kode kita dapat diletakkan di mana saja dalam komputer, itulah kelebihan php >= 5.4 dan Laravel. Maka pilihlah folder yang ingin Anda letakkan.

Selanjutnya buka terminal dan diarahkan ke folder anda dan clone repository ini di komputer Anda.

```
#!bash
$ git clone https://github.com/fathur/rantingwaktu.git
```

Jika berhasil maka kode di repository ini akan tersalin di komputer Anda bersamaan dengan git commit yang pernah dilakukan.

Untuk menjalankan aplikasi ini ketikkan perintah:

```
#!bash
$ php artisan serve
```

Maka webserver kecil yang dikhususkan untuk aplikasi ini telah tersedia. Biasanya dapat diakses menggunakan url http://localhost:8000/, atau sesuaikan dengan informasi yang ditampilkan.


# Konsep-konsep

Laravel menggunakan konsep MVC (Model View Controller) seperti framework PHP pada umumnya. Dan sudah menggunakan konsep [PHP OOP 5](http://php.net/manual/en/language.oop5.php). Dengan kata lain konsep OOP juga harus dipahami selain konsep MVC.

Konsep-konsep yang dipakai antara lain:

1. [Namespace](http://php.net/manual/en/language.namespaces.php)
2. Class
2. [Inheritance](http://php.net/manual/en/language.oop5.inheritance.php)
3. [Exception](http://php.net/manual/en/language.exceptions.php)
4. [Interface](http://php.net/manual/en/language.oop5.interfaces.php)
5. [Trait](http://php.net/manual/en/language.oop5.traits.php)

Konsep yang cukup kompleks adalah ORM (Object Relational Mapping) di Laravel yaitu [Eloquent](http://laravel.com/docs/eloquent).