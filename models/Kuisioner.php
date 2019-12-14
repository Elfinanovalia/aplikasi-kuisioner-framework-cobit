<?php
require_once "models.php";
class Kuisioner extends Models {
  function __construct()
  {
    parent::__construct();
    $this->tabel = "tbl_kuisioner";
    $this->primaryKey = "kuisioner_id";
    $this->kolomBawaanCrud = [
      "responden_id",
      "kuisioner_tgl"
    ];
    // daftar kolom pada tabel kecuali primary keynya
    $this->view = "data_kuisioner";
   
  }
}
