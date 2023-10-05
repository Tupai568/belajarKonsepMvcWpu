<?php

class Flasher{
  public static function setFlash($pesan, $aksi, $tipe)
  {
    $_SESSION["flash"]  = [
      "pesan" => $pesan,
      "aksi" => $aksi,
      "tipe" => $tipe
    ];
  }

  public static function flash()
  {
    if(isset($_SESSION["flash"])){
      $warna = $_SESSION['flash']['tipe'];
      $text = $_SESSION['flash']['pesan'];
      $ak = $_SESSION['flash']['aksi'];
      echo "<div style='color: ${warna}'> 
            <h3>${text}</h3>
            <h4?>${ak}</h4>
            </div>";
      unset($_SESSION["flash"]);
      
    }
  }
}