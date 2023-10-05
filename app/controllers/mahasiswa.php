<?php
//yang akan ditampilkan dibrowse berada difolder controllers


//extends dari folder core dari class Controller
class Mahasiswa extends Controller {
  function index()
  {
    $data["judul"] = "mahasiswa";
    $data["mhs"] = $this->model("Mahasiswa_model")->getAllMahasiswa();
    $this->view("templates/header", $data);
    $this->view("mahasiswa/index", $data);
    $this->view("templates/footer");
  }

  function detail($id)
  {
    $data["judul"] = "detail mahasiswa";
    $data["mhs"] = $this->model("Mahasiswa_model")->getMahasiswaByID($id);
    $this->view("templates/header", $data);
    $this->view("mahasiswa/detail", $data);
    $this->view("templates/footer");
  }

  function tambah()
  {
    if($this->model("Mahasiswa_model")->tambahDataMahasiswa($_POST) > 0){
      Flasher::setFlash("berhasil", "ditambahkan", "green");
      header("LOCATION: ".BASEURL."/mahasiswa");
      exit;
    }else{
      Flasher::setFlash("gagal", "ditambahkan", "red");
      header("LOCATION: ".BASEURL."/mahasiswa");
      exit;
    }
  }

  function hapus($id)
  {
    if($this->model("Mahasiswa_model")->hapusDataMahasiswa($id) > 0){
      Flasher::setFlash("berhasil", "dihapus", "green");
      header("LOCATION: ".BASEURL."/mahasiswa");
      exit;
    }else{
      Flasher::setFlash("gagal", "dihapus", "red");
      header("LOCATION: ".BASEURL."/mahasiswa");
      exit;
    }
  }


  function getubah()
  {
    echo json_encode($this->model("Mahasiswa_model")->getMahasiswaById($_POST["id"]));
  }

  function ubah()
  {
    if($this->model("Mahasiswa_model")->ubahDataMahasiswa($_POST) > 0){
      Flasher::setFlash("berhasil", "ubah", "green");
      header("LOCATION: ".BASEURL."/mahasiswa");
      exit;
    }else{
      Flasher::setFlash("gagal", "ubah", "red");
      header("LOCATION: ".BASEURL."/mahasiswa");
      exit;
    }
  }

  function cari(){
    $data["judul"] = "mahasiswa";
    $data["mhs"] = $this->model("Mahasiswa_model")->cariDataMahasiswa();
    $this->view("templates/header", $data);
    $this->view("mahasiswa/index", $data);
    $this->view("templates/footer");
  }
}