<?php
     
class Mahasiswa_model {
  private $table = "mvc";
  private $db;

  function __construct()
  {
    $this->db = new Database;
  }


  function getAllMahasiswa()
  {
    $this->db->query("SELECT * FROM ". $this->table);
    return $this->db->resultSet();
  }

  function getMahasiswaById($id)
  {
    $this->db->query("SELECT * FROM ". $this->table." WHERE id=:id");
    $this->db->bind("id", $id);
    return $this->db->single();
  }

  function tambahDataMahasiswa($data){
    $query = "INSERT INTO mvc VALUES (NULL, :nama, :kota, :email, :jurusan)";
    $this->db->query($query);
    $this->db->bind("nama", $data["nama"]);
    $this->db->bind("kota", $data["kota"]);
    $this->db->bind("email", $data["email"]);
    $this->db->bind("jurusan", $data["jurusan"]);

    $this->db->execute();
    return $this->db->rowCount();
  }

  function hapusDataMahasiswa($id)
  {
    $query = "DELETE FROM mvc WHERE id = :id";
    $this->db->query($query);
    $this->db->bind("id", $id);

    $this->db->execute();
    return $this->db->rowCount();
  }

  function ubahDataMahasiswa($data){
    $query = "UPDATE mvc SET nama = :nama, kota = :kota, email = :email, jurusan = :jurusan WHERE id = :id";
    $this->db->query($query);
    $this->db->bind("id", $data["id"]);
    $this->db->bind("nama", $data["nama"]);
    $this->db->bind("kota", $data["kota"]);
    $this->db->bind("email", $data["email"]);
    $this->db->bind("jurusan", $data["jurusan"]);

    $this->db->execute();
    return $this->db->rowCount();
  }
  function cariDataMahasiswa()
  {
    $keyword = $_POST["cari"];
    $query = "SELECT * FROM mvc WHERE nama LIKE :cari";
    $this->db->query($query);
    $this->db->bind("cari", "%$keyword%");
    return $this->db->resultSet();

  }





}