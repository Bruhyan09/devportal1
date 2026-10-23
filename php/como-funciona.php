<?php $pid='php/como-funciona';$title='PHP — Como funciona';require __DIR__.'/../includes/header.php'; ?>
<section class="hero"><h1>PHP: como funciona</h1><p class="lead">O navegador pede, o servidor executa o PHP e devolve só o resultado (HTML, JSON…).</p></section>
<ol class="steps">
  <li>O usuário acessa <code>/contato.php</code>.</li>
  <li>O servidor web (Apache, Nginx ou o servidor embutido do PHP) entrega o arquivo ao interpretador PHP.</li>
  <li>O PHP executa o código, consulta dados se precisar e monta a resposta.</li>
  <li>O navegador recebe apenas HTML pronto. O código PHP nunca chega ao cliente.</li>
</ol>
<h2>Variáveis superglobais</h2>
<div class="table-wrap"><table><tr><th>Variável</th><th>Conteúdo</th></tr>
<tr><td><code>$_GET</code></td><td>Parâmetros da URL (<code>?id=3</code>)</td></tr>
<tr><td><code>$_POST</code></td><td>Dados de formulários enviados por POST</td></tr>
<tr><td><code>$_SESSION</code></td><td>Dados do usuário mantidos entre requisições</td></tr>
<tr><td><code>$_SERVER</code></td><td>Informações da requisição e do servidor</td></tr></table></div>
<h2>Formulário processado no servidor</h2>
<?php code(<<<'C'
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if (!$email) { $erro = 'E-mail inválido.'; }
    else         { $ok = 'Recebemos: ' . htmlspecialchars($email); }
}
?>
<form method="post">
  <input name="email" type="email" required>
  <button>Enviar</button>
</form>
<?= $erro ?? $ok ?? '' ?>
C, 'php'); ?>
<h2>Sessão e senha</h2>
<?php code(<<<'C'
<?php
session_start();
$hash = password_hash('minhaSenha', PASSWORD_DEFAULT);   // guardar no banco
if (password_verify('minhaSenha', $hash)) { $_SESSION['user'] = 'ana'; }
C, 'php'); ?>

<?php require __DIR__.'/../includes/footer.php'; ?>
