<?php $pid='css/como-funciona';$title='CSS — Como funciona';require __DIR__.'/../includes/header.php'; ?>
<section class="hero"><h1>CSS: como funciona</h1><p class="lead">O navegador casa seletores com elementos e resolve conflitos pela cascata.</p></section>
<h2>Regra, seletor e declaração</h2>
<?php code(<<<'C'
h1 { color: #60a5fa; font-size: 2rem; }
/* seletor { propriedade: valor; } */
C, 'css'); ?>
<h2>Cascata e especificidade</h2>
<p>Quando duas regras atingem o mesmo elemento, vence a de maior <strong>especificidade</strong> (id &gt; classe &gt; tag). Em empate, vale a última declarada. Prefira classes e evite <code>!important</code>.</p>
<h2>Modelo de caixa</h2>
<p>Todo elemento é uma caixa: conteúdo + <code>padding</code> + <code>border</code> + <code>margin</code>. Use <code>box-sizing: border-box</code> para que a largura inclua padding e borda.</p>
<h2>Flexbox (1 dimensão) e Grid (2 dimensões)</h2>
<?php live(<<<'C'
<style>
  .flex{display:flex;gap:8px;justify-content:space-between;margin-bottom:12px}
  .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(90px,1fr));gap:8px}
  .flex div,.grid div{background:#3b82f6;color:#fff;padding:12px;border-radius:6px;text-align:center;font-family:sans-serif}
</style>
<div class="flex"><div>Flex 1</div><div>Flex 2</div><div>Flex 3</div></div>
<div class="grid"><div>A</div><div>B</div><div>C</div><div>D</div><div>E</div></div>
C); ?>
<h2>Mobile-first com media queries</h2>
<?php code(<<<'C'
.menu{ display:none; }                 /* celular */
@media (min-width: 960px){
  .menu{ display:flex; }               /* desktop */
}
C, 'css'); ?>

<?php require __DIR__.'/../includes/footer.php'; ?>
