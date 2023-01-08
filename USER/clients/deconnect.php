<?php
session_start();

if (isset($_SESSION['clientSession'])){

    $_SESSION['clientSession'] = array();

    session_destroy();

    header("Location: ../index.php");
}

?>