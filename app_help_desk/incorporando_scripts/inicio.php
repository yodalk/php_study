<?php
    try {
        include("menu.php");
        echo '<br/><hr/>';
    } catch(Exception $e) {
        echo "<span style='color: red'>O menu não pode ser incluso!</span><br/>";
        print_r($e);
    }
?>
<h2>Conteúdo da página (Inicio)</h2>