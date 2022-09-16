<?php
class Book_model {
private $books = [
[
    "judul" => "hujan",
    "penulis" => "gipin",
    "tanggal_selesai" => "2022-06-22",
],
[
    "judul" => "pulang",
    "penulis" => "Aleandra",
    "tanggal_selesai" => "2022-07-17",
],
[
    "judul" => "Hutan",
    "penulis" => 'Rafly',
    "tanggal_selesai" => "2022-07-30",
],
[
    "judul" => "Disitu ada uang disitu ada saya",
    "penulis" => 'Mulki',
    "tanggal_selesai" => "2021-04-10",
],
[
    "judul" => "Pelawak Masa depan",
    "penulis" => 'Astiya',
    "tanggal_selesai" => "2021-04-10",
],
];

public function getBooks()
{
    return $this->books;
}
}