<html>
  <head>
    <meta charset="utf-8" />
    <title>App validação de login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>

    </style>
  </head>

  <body>
    <div class="container mt-2">    
        <?php
          echo '<div class="column border p-5">'; 
            echo "<h2 class='text-danger text-center'>Dados do usuario</h2>";
            foreach ($_POST as $chave => $valor){
              echo "<p class='text-info'> {$chave}: {$valor} </p>";
            }
          echo "</div>"
        ?>
      </div>
  </body>
</html>
