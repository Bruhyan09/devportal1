<?php $pid='javascript/utilidade';$title='JavaScript — Utilidade';require __DIR__.'/../includes/header.php'; ?>
<section class="hero"><h1>JavaScript: principal utilidade</h1><p class="lead">Reagir ao usuário sem recarregar a página.</p></section>
<ul>
  <li><strong>Interatividade:</strong> menus, abas, modais, quizzes, filtros em tempo real.</li>
  <li><strong>Validação no navegador:</strong> feedback imediato em formulários (sempre revalide no servidor).</li>
  <li><strong>Comunicação com APIs:</strong> buscar e enviar dados com <code>fetch</code>.</li>
  <li><strong>Armazenamento local:</strong> preferências e progresso com <code>localStorage</code>.</li>
</ul>
<h2>Filtro em tempo real</h2>
<?php live(<<<'C'
<input id="q" placeholder="Filtrar frutas…" style="padding:.4rem">
<ul id="l"></ul>
<script>
  const frutas = ['Maçã','Banana','Laranja','Manga','Morango','Uva'];
  const q = document.getElementById('q'), l = document.getElementById('l');
  const draw = () => { l.innerHTML = frutas.filter(f => f.toLowerCase().includes(q.value.toLowerCase())).map(f => '<li>'+f+'</li>').join(''); };
  q.addEventListener('input', draw); draw();
</script>
C); ?>

<?php require __DIR__.'/../includes/footer.php'; ?>
