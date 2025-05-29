<?php
session_start();
if (!isset($_SESSION["logado"])) {
  header("Location: login.php");
  exit;
}
include 'conexao.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $titulo = $_POST["titulo"];
  $capa = $_POST["capa"];
  $link = $_POST["link"];
  $categoria = $_POST["categoria"];
  $conn->query("INSERT INTO filmes (titulo, capa, link, categoria) VALUES ('$titulo', '$capa', '$link', '$categoria')");
  header("Location: admin.php");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Painel Admin</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header><h1>Painel de Administração</h1></header>
  <main style="padding:20px;">
    <form method="POST">
      <input type="text" name="titulo" placeholder="Título" required><br><br>
      <input type="text" name="capa" placeholder="URL da capa" required><br><br>
      <input type="text" name="link" placeholder="Link do player (embed)" required><br><br>
      <select name="categoria">
        <option value="Filmes">Filmes</option>
        <option value="Séries">Séries</option>
      </select><br><br>
      <button type="submit">Adicionar</button>
    </form>
    <br><a href="logout.php">Sair</a>
  </main>
</body>
</html>
