<?php

// import data/person.php
require_once "data/Person.php";
// buat define
define("TITLE", "Pemrograman Berorientasi Objek");
// buat const app version
const APP_VERSION = "1.0.0";
// tampilkan hasil
echo TITLE . PHP_EOL;
echo APP_VERSION . PHP_EOL;
echo person::AUTHOR . PHP_EOL;
