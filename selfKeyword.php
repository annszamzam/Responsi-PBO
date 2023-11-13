<?php

// import data/person.php
require "data/person.php";
// buat object baru dari kelas person
$person1 = new Person("annas zam zam","seluma");
// panggil function
$person1->sayHello("annas zam zam");
// panggil self keyword
$person1->info() . PHP_EOL;
