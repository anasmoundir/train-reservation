<?php 
if(isset($_POST["promoteBtnUser"])){

    $idOfUser = $_POST["idOfUser"];

    include "../config/db.php";
    include "./promote-classe.php";

    $user = new promoteUser();
    $user->promote($idOfUser);

    header("location:./users.php");



}