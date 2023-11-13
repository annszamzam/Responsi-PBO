<?php

// import data/person.php
require "data/Manager.php";

// buat object new manager dan tambahakan value nama kemudian panggil function
$manager1 = new manager();
$manager1->nama = "annas";
$manager1->sayHello("dayat");

// buat object new vicepresident dan tambahakan value nama kemudian panggil function
$vicePresident1= new vicePresident();
$vicePresident1->nama = "dayat";
$vicePresident1->alamat = "curup";
$vicePresident1->sayHello("annas");
