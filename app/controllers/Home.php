<?php
//yang akan ditampilkan dibrowse berada difolder controllers


class Home extends Controller {
  function index()
  {
    $data["judul"] = "Home";
    $data["nama"] = $this->model("User_model")->getUser();
    $this->view("templates/header", $data);
    $this->view("home/index", $data);
    $this->view("templates/footer");
  }
}