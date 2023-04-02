<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MyTicket.com</title>
  <link rel="icon" href="../Project-myTicket/Assets/Imgs/logo.png" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="stylesheet" href="../../styles/home.css" />
  <link rel="stylesheet" href="./filmes.css" />
</head>

<body>
  <div class="container-global">
    <header class="container-fluid header">
      <div class="logo-area">
        <a href="../main/main.html.php" onclick="voltar()">FreeStreaming.com</a>
        <figure>
          <img src="../../Assets/Imgs/logo.png" alt="" />
        </figure>
      </div>

      <nav>
        <ul class="nav-items">
          <li><a class="link-nav-items" href="" data-toggle="modal" data-target="#modalLogin">Login</a></li>
          <li><a class="link-nav-items" href="" data-toggle="modal" data-target="#modalSingUp">Sing up</a></li>
          <li><a class="link-nav-items" href="" data-toggle="modal" data-target="#modalFaleConosco">Fale Conosco</a>
          </li>
        </ul>
      </nav>
    </header>

    <main>
      <div class="container-fluid container-cinema">
        <div class="container-title">
          <a href="../../pages/main/main.html.php">
            <button>Back</button>
          </a>
          <h1>Filmes</h1>
        </div>

        <article class="card card-filme">
          <img class="card-img-top avatar" />
          <div class="card-body">
            <h5>AVATAR 2</h5>
          </div>
        </article>

        <article class="card card-filme">
          <img class="card-img-top sing2" />
          <div class="card-body">
            <h5>SING 2</h5>
          </div>
        </article>

        <article class="card card-filme">
          <img class="card-img-top megan" />
          <div class="card-body">
            <h5>M E G A N</h5>
          </div>
        </article>
      </div>
    </main>
  </div>

  <?PHP include('../modal/modal.html.php') ?>
</body>

<script src="./Script/script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>