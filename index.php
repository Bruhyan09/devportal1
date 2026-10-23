<?php $pid='home';$title='Início';require __DIR__.'/includes/header.php'; ?>
<section class="hero">
  <h1>Aprenda PHP, CSS e JavaScript e coloque seu site no ar</h1>
  <p class="lead">Um caminho prático, do VS Code ao deploy no Render, com exemplos que você edita e executa aqui mesmo. Feito para quem já sabe HTML e quer entrar no mercado.</p>
  <a class="btn" href="/php/">Começar pelo PHP</a> <a class="btn ghost" href="/deploy/render.php">Ir direto ao deploy</a>
</section>
<h2>Trilha sugerida</h2>
<ol class="steps">
  <li><strong>Prepare o ambiente.</strong> Instale o VS Code, as extensões e rode um servidor local. <a href="/vscode/instalacao.php">Começar</a></li>
  <li><strong>Estude as três tecnologias.</strong> Para cada uma: utilidade, como funciona e onde usar. <a href="/php/">PHP</a> · <a href="/css/">CSS</a> · <a href="/javascript/">JavaScript</a></li>
  <li><strong>Construa.</strong> Baixe e modifique um CRUD e um sistema de login. <a href="/projetos/">Projetos</a></li>
  <li><strong>Publique.</strong> Suba o projeto para o GitHub e para o Render. <a href="/deploy/render.php">Deploy</a></li>
  <li><strong>Prepare-se para vagas.</strong> Portfólio, GitHub e entrevistas. <a href="/mercado/">Mercado</a></li>
</ol>
<h2>O que cada tecnologia faz</h2>
<div class="grid">
  <a class="card" href="/php/"><h3>PHP</h3><p>Roda no servidor: organiza páginas, processa formulários, conversa com banco de dados e APIs.</p></a>
  <a class="card" href="/css/"><h3>CSS</h3><p>Controla layout, cores, tipografia e responsividade, e anima a interface.</p></a>
  <a class="card" href="/javascript/"><h3>JavaScript</h3><p>Dá comportamento no navegador: eventos, validações, requisições sem recarregar a página.</p></a>
</div>
<div class="callout"><strong>Dica:</strong> pressione <code>/</code> para buscar qualquer assunto. Seu progresso fica salvo neste navegador, e a barra no topo mostra quanto você já percorreu.</div>
<h2>Comentários e sugestões</h2>
<div id="feedback"></div>

<?php require __DIR__.'/includes/footer.php'; ?>
