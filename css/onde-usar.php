<?php $pid='css/onde-usar';$title='CSS — Onde usar';require __DIR__.'/../includes/header.php'; ?>
<section class="hero"><h1>CSS: onde usar no mercado</h1><p class="lead">Todo projeto web precisa de CSS. A diferença está no nível de domínio.</p></section>
<div class="grid">
  <div class="card"><h3>Sites e landing pages</h3><p>Páginas rápidas, responsivas e com boa acessibilidade.</p></div>
  <div class="card"><h3>Design systems</h3><p>Bibliotecas de componentes reutilizáveis para equipes de produto.</p></div>
  <div class="card"><h3>Tailwind e Bootstrap</h3><p>Frameworks CSS muito pedidos em vagas. Entenda o CSS puro antes.</p></div>
  <div class="card"><h3>Dashboards e apps</h3><p>Layouts complexos com Grid, temas claro/escuro e animações leves.</p></div>
</div>
<div class="callout">Diferencial em entrevistas: acessibilidade (contraste, foco visível), performance e <code>prefers-reduced-motion</code>.</div>
<?php code(<<<'C'
@media (prefers-color-scheme: dark){ :root{ --fundo:#1e1e1e; --texto:#fff; } }
@media (prefers-reduced-motion: reduce){ *{ animation:none !important; } }
C, 'css'); ?>

<?php require __DIR__.'/../includes/footer.php'; ?>
