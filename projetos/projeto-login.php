<?php $pid='projetos/projeto-login';$title='Projeto Login';require __DIR__.'/../includes/header.php'; ?>
<section class="hero"><h1>Projeto: sistema de login</h1><p class="lead">Cadastro, login e área protegida.</p></section>
<div class="callout warn"><strong>Importante:</strong> esta demo guarda tudo no navegador para fins didáticos. Em um sistema real, a autenticação é feita no servidor, com <code>password_hash()</code>, <code>password_verify()</code> e sessões PHP. Veja o exemplo abaixo.</div>
<h2>Demonstração (front-end)</h2>
<iframe class="demo-frame" src="/assets/downloads/src/login.html" title="Demo de login"></iframe>
<p><a class="btn" href="/assets/downloads/projeto-login.zip" download>Baixar projeto (.zip)</a></p>
<h2>Versão de servidor com PHP</h2>
<?php code(<<<'C'
<?php
session_start();
// Em produção, o hash vem do banco de dados.
$usuarios = ['ana@email.com' => password_hash('senha123', PASSWORD_DEFAULT)];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $senha = $_POST['senha'] ?? '';
    if ($email && isset($usuarios[$email]) && password_verify($senha, $usuarios[$email])) {
        session_regenerate_id(true);        // evita fixação de sessão
        $_SESSION['user'] = $email;
        header('Location: /painel.php'); exit;
    }
    $erro = 'E-mail ou senha incorretos.';  // mensagem genérica de propósito
}
C, 'php'); ?>
<h2>Código da demo</h2>
<?php code(file_get_contents(__DIR__ . '/../assets/downloads/src/login.html'), 'html'); ?>

<?php require __DIR__.'/../includes/footer.php'; ?>
