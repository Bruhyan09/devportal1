<?php $pid='css/utilidade';$title='CSS — Utilidade';require __DIR__.'/../includes/header.php'; ?>
<section class="hero"><h1>CSS: principal utilidade</h1><p class="lead">Transformar HTML em uma interface clara, consistente e adaptável a qualquer tela.</p></section>
<ul>
  <li><strong>Layout:</strong> posicionar blocos com Flexbox e Grid.</li>
  <li><strong>Identidade visual:</strong> cores, fontes e espaçamentos reutilizáveis com variáveis CSS.</li>
  <li><strong>Responsividade:</strong> o mesmo site funcionando de 360px a telas grandes.</li>
  <li><strong>Interação:</strong> hover, foco, transições e animações sem JavaScript.</li>
</ul>
<h2>Variáveis para manter consistência</h2>
<?php code(<<<'C'
:root{ --azul:#3b82f6; --fundo:#1e1e1e; --raio:10px; }
.card{ background:var(--fundo); border:1px solid var(--azul); border-radius:var(--raio); }
C, 'css'); ?>
<?php live(<<<'C'
<style>
  :root{--azul:#3b82f6;--raio:10px}
  body{font-family:sans-serif;background:#1e1e1e;color:#fff;padding:1rem}
  .card{border:1px solid var(--azul);border-radius:var(--raio);padding:1rem;max-width:260px}
</style>
<div class="card"><h3>Card com variáveis</h3><p>Troque --azul para ver tudo mudar.</p></div>
C); ?>

<?php require __DIR__.'/../includes/footer.php'; ?>
