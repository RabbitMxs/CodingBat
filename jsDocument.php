<?php
    session_start();
    if(isset($_SESSION['doc'])){
        $document=$_SESSION['doc'];
        var_dump($document);
    }
?>