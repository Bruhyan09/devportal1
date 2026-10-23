<?php $pid='projetos/projeto-crud';$title='Projeto CRUD';require __DIR__.'/../includes/header.php'; ?>
<section class="hero"><h1>Projeto: CRUD de tarefas</h1><p class="lead">Create, Read, Update, Delete: a base de quase todo sistema.</p></section>
<h2>Demonstração</h2>
<iframe class="demo-frame" src="/assets/downloads/src/crud.html" title="Demo do CRUD"></iframe>
<p><a class="btn" href="/assets/downloads/projeto-crud.zip" download>Baixar projeto (.zip)</a></p>
<h2>Código completo</h2>
<?php code(file_get_contents(__DIR__ . '/../assets/downloads/src/crud.html'), 'html'); ?>
<h2>O que você aprende</h2>
<ul><li>Estado em um array de objetos e renderização por função.</li><li>Persistência com <code>localStorage</code> + <code>JSON.stringify/parse</code>.</li><li>Escape de texto com <code>textContent</code> (evita XSS).</li></ul>

<?php require __DIR__.'/../includes/footer.php'; ?>
