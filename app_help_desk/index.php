<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="<span style='color: red'>A imagem da logo não pode ser encontrada!</span>">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
  
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                <label for="email">Email:</label>
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <label for="password">Senha:</label>
                    <input name="password" type="password" class="form-control" placeholder="Senha">
                </div>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
              <?php if(isset($_GET['login']) && $_GET['login'] == 'error') ?>
                  <p class="text-danger d-inline-block">Email ou senha invalido</p>
            </div><!-- End card body -->
          </div><!-- End card -->
        </div><!-- End card Login -->

      </div><!-- End card row -->
    </div><!-- End card container -->
  
  </body>
</html>