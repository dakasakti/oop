# Materi OOP

- Video https://www.youtube.com/watch?v=_P2t0lCzU-Q
- Slide https://docs.google.com/presentation/d/1gmLOCKyxyvnOVKHwhv-c7RuNlG69zfwcnX1ioPep3Do/edit?usp=sharing

# OOP

OOP adalah sudut pandang bahasa pemograman yang berkonsep object. istilah yang perlu dimengerti dalam oop adalah Object dan Class.

## Object

Object adalah data yang berisikan field/attribut/properties dan method/function/behavior.

## Class

Class adalah blueprint/prototype/cetakan untuk membuat object. class berisikan deklarasi semua properties dan method yang dimiliki oleh object. sebuah class bisa membuat object tanpa batas.

## Type Declaration (Mengecek tipe data)

Jika kita mencoba mengubah properties dengan type yang berbeda, maka otomatis error.
PHP memiliki fitur type juggling, yang secara otomatis bisa mengkonversi ke tipe data lain.

## This Keyword

Saat membuat kode di dalam function di dalam class, kita bisa gunakan kata kunci this untuk mengakses object saat ini.

## Constant

membuat constant menggunakan function define(). Namun sejak php 7.4 kita bisa gunakan kata kunci const yang mirip variable tanpa menggunakan tanda $.

## Self Keyword

Saat membuat kode di dalam function di dalam class, kita bisa gunakan kata kunci self untuk mengakses class saat ini.

## Constructor

function yang akan dipanggil saat pertama kali object dibuat.

## Destructor

function yang akan dipanggil ketika object dihapus dari memory. untuk destructor kita tidak boleh menambahkan argument. contoh penggunaan untuk menutup koneksi ke db atau menutup proses menulis ke file.

## Inheritance (Pewarisan)

kemampuan untuk menurunkan sebuah class ke class lain (class Parent dan class Child).
class child hanya bisa punya satu class Parent, namun satu class Parent bisa punya banyak class child.

## Namespace

kita bisa menyimpan class-class di dalam namespace.

## Use Keyword

mengimport class, function atau constant

## Visibility (Access Modifier)

kemampuan properties atau method dapat diakses dari mana saja. secara default adalah public.

- Modifier - Class - Subclass - World
- Public - Y - Y - Y
- Protected - Y - Y - N
- Private - Y - N - N

## Function Overriding

kemampuan mendeklarasikan ulang function di child class, yang sudah ada di parent class.

## Parent Keyword

untuk akses function milik class parent bisa menggunakan kata kunci parent

## Polymorphism

berasal dari bahasa yunani yang berarti banyak bentuk.
dalam oop adalah kemampuan sebuah object berubah bentuk menjadi bentuk lain.
erat hubungannya dengan inheritance.

## Type Check & Casts

pengecekan tipe data dengan menggunakan instanceof yang menghasilkan boolean.

## Abstract Class

class tersebut tidak bisa dibuat sebagai object secara langsung, hanya bisa diturunkan (hanya sebagai kontrak untuk child class)

## Getter dan Setter (Encapsulation)

memastikan data sensitif sebuah object tersembunyi dari akses luar. dengan tujuan agar data sebuah object tetap baik dan valid.

## Interface (Kontrak)

semua method otomatis abstract. di interface kita tidak boleh memiliki properties, dan hanya boleh constant.
untuk mewariskan interface kita tidak menggunakan extends melainkan implements.

## Interface Inheritance

child class hanya bisa punya satu class parent. berbeda dengan interface sebuah child class bisa implement lebih dari satu parent interface.

- Parent - Child
- Interface & Interface = extends
- Interface & Class = implements

## Trait

Trait mirip abstract class, kita bisa membuat konkrit function atau abstract function yang membedakan adalah kita bisa menambahkan ke dalam class lebih dari satu. trait mirip exstenstion.
secara sederhana digunakan untuk menyimpan function-function yang bisa digunakan ulang di beberapa class.

## Trait Overriding

ParentClass => Trait => ChildClass

## Final Class

kata kunci final digunakan di class. yang mengakhiri pewarisan.

## Anonymous Class

kemampuan mendeklarasikan class, sekaligus menginstansiasi objectnya secara langsung.

## Static Keyword

digunakan untuk membuat properties atau function di class bisa diakses langsung tanpa menginstansiasi class terlebih dahulu. namun ingat saat kita buat static, secara otomatis itu tidak akan berhubungan lagi dengan class instance yang kita buat.

cara akses static sama seperti akses constant (::)

## Std Class

class kosong bawaan dari PHP yang biasanya digunakan ketika kita melakukan konversi dari tipe lain menjadi object.

## Object Iteration (manual)

yang bisa di iterate hanya akses public makanya kita akan pakai Iterator Aggregate (Array Iterator) agar semuanya bisa dipakai.

## Generator (otomatis)

Membuat iterator secara otomatis dengan menggunakan kata kunci yield

## Object Cloning

menggunakan perintah clone untuk membuat duplikasi

## Comparing Object

membanding dua object (== equals atau === identity)

## Magic Function

function-function yang sudah ditentukan kegunaannya di PHP.

- "\_\_toString()" => representasi string sebuah object.
- "\_\_invoke()" => fungsi yang dieksekusi ketika object dianggap function.
- "\_\_debugInfo()" => biasa yang kita gunakan var_dump() yang memanggil fungsi ini.

silahkan baca https://www.php.net/manual/en/language.oop5.magic.php

## Overloading (Dinamis)

kemampuan secara dinamis membuat properties atau function, overloading ini erat kaitannya dengan magic function.

### Bagian Properties

- "\_\_set($name, $value); void" => mengubah properties
- "\_\_get($name):mixed" => mengakses properties
- "\_\_isset($name) bool => mengecek isset() atau empty() properties
- "\_\_unset($name) : void" => menggunakan unset() properties

### Bagian Function

- "\_\_call($name, $arguments) : mixed" => dieksekusi
- "static \_\_callStatic($name, $arguments) : mixed" => dieksekusi

## Covariance

memungkinkan kita mengoveride return function yang diparent dengan return value yang lebih spesifik

## Contravariance

kebalikannya

## Datetime

memanipulasi data waktu

- "setTime($hour, $minute, $second)" => waktu
- "setDate($year, $month, $day)" => tanggal
- "setTimestamp($unix)" => unix timestamp

## Exception (error)

- TRY, CATCH, FINALLY
- getTrace() => debuging exception

## Regular Expression

digunakan untuk melakukan pencarian di string menggunakan pola tertentu.

- detail https://www.php.net/manual/en/pcre.pattern.php

contoh :

- "preg_match($pattern, $subject) => match pattern
- "preg_match_all($pattern, $subject) => match pattern
- "preg_replace($pattern, $replacment, $subject) => mereplace
- "preg_split($pattern, $subject) => nenitibg pattern menjadi array

## Reflection

membaca struktur kode pada saat aplikasi sedang berjalan. fitur yang bisa digunakan saat kita membuat framework atau library.
detail https://www.php.net/manual/en/book.reflection.php
