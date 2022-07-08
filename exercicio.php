<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/exercicio.css" />

    <title>Curso PHP</title>
  </head>
  <body class="exercicio">
    <header class="cabecalho">
      <h1>Exercícios PHP</h1>
      <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde a">Sem formatação</a>
        <a href="index.php" class="vermelho a">Voltar</a>
    </nav>
    <main class="principal">
      <div class="conteudo">
        <?php 
          include( __DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
        ?>
      </div>
    </main>

    <footer class="rodape">
      Estudo <?= date('Y'); ?>
    </footer>
  </body>
</html>
