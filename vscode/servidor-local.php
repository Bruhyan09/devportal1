<?php $pid='vscode/servidor-local';$title='VS Code — Servidor local';require __DIR__.'/../includes/header.php'; ?>
<section class="hero"><h1>Rodando o servidor local</h1><p class="lead">O PHP já traz um servidor de desenvolvimento embutido. Não precisa instalar Apache.</p></section>
<ol class="steps">
  <li>Abra a pasta do projeto no VS Code (<em>File → Open Folder</em>).</li>
  <li>Abra o terminal integrado (<code>Ctrl+`</code>).</li>
  <li>Execute o comando abaixo na raiz do projeto.</li>
  <li>Acesse <code>http://localhost:8000</code> no navegador. Edite, salve e atualize a página.</li>
</ol>
<?php code('php -S localhost:8000', 'terminal'); ?>
<div class="callout warn"><strong>Erro "php não é reconhecido"?</strong> O PHP não está no PATH. Reabra o terminal após instalar, ou adicione a pasta do PHP às variáveis de ambiente do sistema.</div>
<p>Para parar o servidor, use <code>Ctrl+C</code>. Para usar outra porta, troque <code>8000</code>.</p>
<p>O Live Server do VS Code <strong>não</strong> executa PHP; use-o só para arquivos HTML/CSS/JS estáticos.</p>

<?php require __DIR__.'/../includes/footer.php'; ?>
