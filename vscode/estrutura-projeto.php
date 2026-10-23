<?php $pid='vscode/estrutura-projeto';$title='VS Code — Estrutura do projeto';require __DIR__.'/../includes/header.php'; ?>
<section class="hero"><h1>Como estruturar um projeto PHP</h1><p class="lead">Separe responsabilidades desde o primeiro dia: fica mais fácil manter e publicar.</p></section>
<?php code(<<<'C'
meu-projeto/
├── index.php            ← página inicial
├── includes/            ← pedaços reutilizáveis (header, footer, config)
├── css/ ou assets/css/  ← estilos
├── assets/js/           ← scripts do navegador
├── api/                 ← endpoints que devolvem JSON
├── Dockerfile           ← para o deploy no Render
└── .gitignore           ← não versionar segredos
C, 'estrutura'); ?>
<h2>Boas práticas</h2>
<ul>
  <li>Um arquivo <code>config.php</code> para constantes e configurações (senhas vão em variáveis de ambiente).</li>
  <li>Nomes de arquivos em minúsculas e com hífen: <code>como-funciona.php</code>.</li>
  <li>Use caminhos que começam com <code>/</code> (<code>/assets/css/style.css</code>) para não quebrar em subpastas.</li>
  <li>Commits pequenos e frequentes, com mensagens claras.</li>
</ul>
<h2>Exemplo de include</h2>
<?php code(<<<'C'
<?php
$titulo = 'Minha página';
require __DIR__ . '/includes/header.php';
?>
<h1>Olá!</h1>
<?php require __DIR__ . '/includes/footer.php'; ?>
C, 'php'); ?>

<?php require __DIR__.'/../includes/footer.php'; ?>
