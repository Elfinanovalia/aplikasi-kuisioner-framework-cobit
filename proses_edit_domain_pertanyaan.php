<?php
require_once "models/DomainPernyataan.php";
$domain = new DomainPernyataan();
$domain->editData($_POST['domain_id'], [
  "domain_nama" => $_POST['domain_nama'],
  "domain_keterangan" => $_POST['domain_keterangan'],
]);
header("Location: tampil_domain_pernyataan.php");
?>
