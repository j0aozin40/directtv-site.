<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $usuario = $_POST["usuario"];
  $senha = $_POST["senha"];
  if ($usuario === "admin" && $senha === "12345") {
    $_SESSION["logado"] = true;
    header("Location: admin.php");
  } else {
    $erro = "Credenciais inválidas!";
  }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><title>Login</title></head>
<body style="text-align:center; padding:50px;">
  <h1>Login</h1>
  <?php if(isset($erro)) echo "<p style='color:red;'>$erro</p>"; ?>
  <form method="POST">
    <input name="usuario" placeholder="Usuário"><br><br>
    <input name="senha" type="password" placeholder="Senha"><br><br>
    <button type="submit">Entrar</button>
  </form>
</body>
</html>
