<?php
//yang akan ditampilkan dibrowse berada difolder controllers


class About extends Controller{
  function index(){
    $data["judul"] = "about";
    $this->view("templates/header", $data);
    $this->view("about/index");
    $this->view("templates/footer");

  }

  function page(){
    $data["judul"] = "page";
    $this->view("templates/header", $data);
    $this->view("about/page");
    $this->view("templates/footer");
  }
}