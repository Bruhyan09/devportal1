<?php $pid='javascript/index';$title='JavaScript — Visão geral';require __DIR__.'/../includes/header.php'; ?>
<section class="hero"><h1>JavaScript</h1><p class="lead">A linguagem do navegador, que também roda em servidores com Node.js.</p></section>
<div class="grid">
  <a class="card" href="/javascript/utilidade.php"><h3>Principal utilidade</h3><p>Tornar a página interativa.</p></a>
  <a class="card" href="/javascript/como-funciona.php"><h3>Como funciona</h3><p>DOM, eventos, fetch e async.</p></a>
  <a class="card" href="/javascript/onde-usar.php"><h3>Onde usar</h3><p>Front-end, Node, mobile e automações.</p></a>
</div>
<h2>Exemplo para copiar</h2>
<?php code(<<<'C'
const botao = document.querySelector('#salvar');
botao.addEventListener('click', () => {
  localStorage.setItem('nome', 'Ana');
  alert('Salvo!');
});
C, 'javascript'); ?>
<h2>Exemplo interativo: contador</h2>
<?php live(<<<'C'
<button id="b" style="font-size:1rem;padding:.5rem 1rem">Cliques: 0</button>
<script>
  let n = 0;
  const b = document.getElementById('b');
  b.addEventListener('click', () => { n++; b.textContent = 'Cliques: ' + n; });
</script>
C); ?>
<h2>Quiz de JavaScript</h2>
<div class="quiz" data-quiz="javascript"></div>

<?php require __DIR__.'/../includes/footer.php'; ?>
