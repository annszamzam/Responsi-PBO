<?php

// import data/person.php
require "data/person.php";
// buat object baru dari kelas person
$person1 = new person("annas zam zam", "seluma");
// manipulasi properti nama, alamat, negara
$person1->nama = "annas zam zam";
// menampilkan hasil
echo "nama = {$person1->nama}";
