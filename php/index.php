<?php $pid='php/index';$title='PHP — Visão geral';require __DIR__.'/../includes/header.php'; ?>
<section class="hero"><h1>PHP</h1><p class="lead">Linguagem de servidor criada para a web. Roda 100% nos servidores que respondem às requisições do navegador.</p></section>
<div class="grid">
  <a class="card" href="/php/utilidade.php"><h3>Principal utilidade</h3><p>Gerar páginas dinâmicas e processar dados no servidor.</p></a>
  <a class="card" href="/php/como-funciona.php"><h3>Como funciona</h3><p>Ciclo requisição → PHP → resposta HTML.</p></a>
  <a class="card" href="/php/onde-usar.php"><h3>Onde usar</h3><p>WordPress, Laravel, APIs e e-commerce.</p></a>
</div>
<h2>Exemplo para copiar</h2>
<?php code(<<<'C'
<?php
$nome = "Ana";
$hora = (int) date('H');
$saudacao = $hora < 12 ? 'Bom dia' : 'Boa tarde';
echo "<h1>$saudacao, " . htmlspecialchars($nome) . "!</h1>";
C, 'php'); ?>
<h2>Exemplo interativo (mesma lógica em JS)</h2>
<p class="muted">O navegador não executa PHP. Este exemplo reproduz a lógica em JavaScript para você experimentar. Para rodar PHP de verdade, veja o <a href="/vscode/servidor-local.php">servidor local</a>.</p>
<?php live(<<<'C'
<h2 id="s"></h2>
<script>
  const nome = "Ana";
  const hora = new Date().getHours();
  const saudacao = hora < 12 ? 'Bom dia' : 'Boa tarde';
  document.getElementById('s').textContent = saudacao + ', ' + nome + '!';
</script>
C); ?>
<h2>Quiz de PHP</h2>
<div class="quiz" data-quiz="php"></div>

<?php require __DIR__.'/../includes/footer.php'; ?>
