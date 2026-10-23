<?php $pid='css/index';$title='CSS — Visão geral';require __DIR__.'/../includes/header.php'; ?>
<section class="hero"><h1>CSS</h1><p class="lead">A linguagem que define a aparência e o layout de qualquer página web.</p></section>
<div class="grid">
  <a class="card" href="/css/utilidade.php"><h3>Principal utilidade</h3><p>Separar visual de conteúdo.</p></a>
  <a class="card" href="/css/como-funciona.php"><h3>Como funciona</h3><p>Seletores, cascata, Flexbox e Grid.</p></a>
  <a class="card" href="/css/onde-usar.php"><h3>Onde usar</h3><p>Sites responsivos, design systems, e-mails.</p></a>
</div>
<h2>Exemplo para copiar</h2>
<?php code(<<<'C'
.botao{
  background:#3b82f6; color:#fff; padding:.6rem 1.2rem;
  border:0; border-radius:8px; transition:background .2s;
}
.botao:hover{ background:#60a5fa; }
C, 'css'); ?>
<h2>Exemplo interativo: mude as cores</h2>
<?php live(<<<'C'
<style>
  .botao{background:#3b82f6;color:#fff;padding:.6rem 1.2rem;border:0;border-radius:8px;font-size:1rem;transition:all .2s}
  .botao:hover{background:#60a5fa;transform:translateY(-2px)}
</style>
<button class="botao">Passe o mouse</button>
C); ?>
<h2>Quiz de CSS</h2>
<div class="quiz" data-quiz="css"></div>

<?php require __DIR__.'/../includes/footer.php'; ?>
