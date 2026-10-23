<?php $pid='php/onde-usar';$title='PHP — Onde usar';require __DIR__.'/../includes/header.php'; ?>
<section class="hero"><h1>PHP: onde usar no mercado</h1><p class="lead">PHP está em uma parcela enorme da web, e há vagas de manutenção e de projetos novos.</p></section>
<div class="grid">
  <div class="card"><h3>WordPress e WooCommerce</h3><p>Temas, plugins e lojas virtuais. Muita demanda de agências e freelancers.</p></div>
  <div class="card"><h3>Laravel / Symfony</h3><p>Frameworks modernos para sistemas, SaaS e APIs com padrões profissionais.</p></div>
  <div class="card"><h3>APIs REST</h3><p>Back-end para apps mobile e front-ends em JavaScript, respondendo JSON.</p></div>
  <div class="card"><h3>Sistemas internos</h3><p>ERPs, painéis administrativos, relatórios e integrações com pagamento.</p></div>
</div>
<h2>Exemplo: endpoint JSON</h2>
<?php code(<<<'C'
<?php
header('Content-Type: application/json; charset=utf-8');
$produtos = [['id'=>1,'nome'=>'Teclado'], ['id'=>2,'nome'=>'Mouse']];
echo json_encode($produtos, JSON_UNESCAPED_UNICODE);
C, 'php'); ?>
<div class="callout">Próximo passo: aprenda <strong>PDO + MySQL</strong>, depois <strong>Laravel</strong>. Veja o <a href="/mercado/">mercado de trabalho</a>.</div>

<?php require __DIR__.'/../includes/footer.php'; ?>
