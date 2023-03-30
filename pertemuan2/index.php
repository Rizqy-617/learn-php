<?php
  // Pertemuan 2 - PHP Dasar
  // Sintaks PHP

  // Standar Output
  // echo, print, print_r
  // var_dump (digunakan untuk melihat isi dari suatu variable)

  echo "Rizqy Andriansyah"; // Akan mencetak string di layar
  print_r("Rizqy Andriansyah");
  var_dump("Rizqy Andriansyah");// Akan menampilkan tipe datanya, panjang value nya, dan value nya

  // Penulisan sintaks PHP
  // 1. PHP di dalam HTML
  // 2. HTML di dalam PHP

  //Variable dan data types
  // Variable
  $name = "Rizqy Andriansyah";

  echo "Halo, nama saya $name"; //Interpolasi

  //Operator Penggabung String / Concatenation
  // Bentuknya adalah titik .
  $first_name = "Rizqy";
  $last_name = "Andriansyah";

  echo $first_name . " " . $last_name;
?>
