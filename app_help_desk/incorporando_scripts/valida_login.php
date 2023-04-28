<?php
    try {
        include("menu.php");
        echo "<br/><hr/>";
    } catch(Exception $e) {
        echo "Menu não pode ser incluso!";
        print_r($e);
    }