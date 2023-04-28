<?php
    try {
        include('menu.php');
    } catch(Exception $e) {
        echo "<span style='color: red'>O menu não pode ser encontrado!</span><br/>";
        print_r($e);
    }