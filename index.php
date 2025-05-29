<?php
include 'conexao.php';
$dados = $conn->query("SELECT * FROM filmes ORDER BY id DESC")->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Direct TV - Avançado</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>🎬 Direct TV</h1>
    <nav>
      <button onclick="filterCategory('Todos')">Todos</button>
      <button onclick="filterCategory('Filmes')">Filmes</button>
      <button onclick="filterCategory('Séries')">Séries</button>
      <a href="admin.php">Painel Admin</a>
    </nav>
  </header>
  <main id="catalogo" class="grid"></main>

  <div id="playerModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closePlayer()">&times;</span>
      <iframe id="videoPlayer" src="" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

  <script>
    const catalogo = <?php echo json_encode($dados); ?>;
  </script>
  <script src="main.js"></script>
</body>
</html>
