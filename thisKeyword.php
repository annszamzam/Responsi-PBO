<?php

// import data/person.php
require "data/person.php";

// buat object dari kelas person
$person1 = new person("annas zam zam", "seluma");

// tambahkan value nama di object
$person1->nama = "annas zam zam";

// panggil function sayHelloNull dengan parameter
$person1->sayHelloNull("M Hidayat Pahlevi");

// buat object dari kelas person
$person2 = new person("M Hidayat Pahlevi", "curup");

// tambahkan value nama di object
$person2->nama = "dayat";

// panggil function sayHelloNull dengan parameter null
$person2->sayHelloNull(null);
