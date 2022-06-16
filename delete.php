<?php
    include 'connectiondb.php';
    $did = $_GET['did'];
    $sql=$db->prepare("DELETE FROM item WHERE IID='$did'");
    $sql->execute();
    header('Location: viewdata.php');
?>