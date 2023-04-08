<?php
require_once 'koneksi.php';

$_iddel = $_GET['iddel'];
$sql = "DELETE FROM kartu WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_iddel]);
header('location:index.php?hal=kartu');
?>