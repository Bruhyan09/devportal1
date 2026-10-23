<?php $pid='php/utilidade';$title='PHP — Utilidade';require __DIR__.'/../includes/header.php'; ?>
<section class="hero"><h1>PHP: principal utilidade</h1><p class="lead">Fazer o servidor decidir o que mostrar e guardar, antes de enviar a página ao usuário.</p></section>
<h2>O que o PHP resolve</h2>
<ul>
  <li><strong>Páginas dinâmicas:</strong> o mesmo arquivo gera conteúdo diferente por usuário, data ou dado.</li>
  <li><strong>Reuso de estrutura:</strong> cabeçalho, menu e rodapé escritos uma vez com <code>include</code>.</li>
  <li><strong>Formulários e segurança:</strong> validação, upload, autenticação e hash de senha.</li>
  <li><strong>Dados:</strong> conexão com MySQL/PostgreSQL via PDO e consumo de APIs.</li>
</ul>
<div class="callout">Regra de ouro: <strong>nunca confie em dados vindos do usuário</strong>. Valide na entrada e escape na saída.</div>
<h2>Exemplo: reuso com include</h2>
<?php code(<<<'C'
<?php $titulo = 'Contato'; include 'includes/header.php'; ?>
<h1>Fale conosco</h1>
<?php include 'includes/footer.php'; ?>
C, 'php'); ?>
<h2>Exemplo: escapar saída (evita XSS)</h2>
<?php code(<<<'C'
<?php
$comentario = $_POST['comentario'] ?? '';
echo '<p>' . htmlspecialchars($comentario, ENT_QUOTES, 'UTF-8') . '</p>';
C, 'php'); ?>

<?php require __DIR__.'/../includes/footer.php'; ?>
