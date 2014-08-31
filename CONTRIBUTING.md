Ranting Waktu
============

# Daftar Isi

+ [Instalasi Menggunakan Vagrant](#instalasi-menggunakan-vagrant)
+ [Konsep-konsep](#konsep-konsep)

# Instalasi Menggunakan Vagrant

Pada dasarnya vagrant hanyalah menggabungkan virtual machine (dalam hal ini menggunakan VirtualBox) ke dalam host agar memiliki environment yang tidak berubah-rubah antar developer. Komponen-komponen seperti composer, git, apache2, mysql tidak perlu diinstall di mesin host karena sudah diinstall di dalam virtual machine.

Istilah yang digunakan:

1. Host machine: Sistem operasi utama
2. Guest machine: Sistem operasi yang terinstall di virtual machine

Syarat yang diperlukan adalah:

1. [Sourctree](http://www.sourcetreeapp.com/)
2. [Vagrant](http://vagrantup.com)
3. [VirtualBox](https://www.virtualbox.org/)

Untuk melakukannya:

+ Terlebih dahulu unduh dan pasang [Vagrant](http://vagrantup.com). 
+ Masuk ke direktori kerja Anda, ini bisa dimana saja. Dan kemudian clone git repository ini.
```
$ https://git clone https://github.com/fathur/rantingwaktu.git
```
+ Setelah vagrant terinstall ketikkan
```
$ vagrant up
```
+ Kemudian masuk ke virtual machine vagrant menggunakan
```
$ vagrant ssh
```
+ Setelah masuk di dalam virtual machine, lakukan instalasi laravel dengan mengetikkan:
```
$ cd /vagrant
$ composer install
```
+ Selanjutnya buka browser Anda di host machine dan ketikkan __http://localhost:1914/__
+ Dan Anda dapat melakukan pekerjaan developing di mesin host Anda. Selamat mengerjakan.

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