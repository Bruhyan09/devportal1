<?php $pid='projetos/index';$title='Projetos — Downloads';require __DIR__.'/../includes/header.php'; ?>
<section class="hero"><h1>Projetos práticos</h1><p class="lead">Baixe, abra no VS Code, entenda cada parte e depois modifique.</p></section>
<div class="grid">
  <div class="card"><h3>CRUD de tarefas</h3><p>Criar, listar, editar e excluir com JavaScript e localStorage.</p>
    <a class="btn small" href="/projetos/projeto-crud.php">Ver projeto</a> <a class="btn small ghost" href="/assets/downloads/projeto-crud.zip" download>Baixar .zip</a></div>
  <div class="card"><h3>Sistema de login</h3><p>Cadastro, entrada e sessão, com boas práticas explicadas.</p>
    <a class="btn small" href="/projetos/projeto-login.php">Ver projeto</a> <a class="btn small ghost" href="/assets/downloads/projeto-login.zip" download>Baixar .zip</a></div>
</div>
<h2>Desafios para evoluir</h2>
<ul><li>Adicionar categorias e filtro por status no CRUD.</li><li>Trocar o localStorage por uma API PHP que grava em JSON ou MySQL.</li><li>Fazer o login usar <code>password_hash</code> e sessões PHP de verdade.</li></ul>

<?php require __DIR__.'/../includes/footer.php'; ?>
