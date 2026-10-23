<?php $pid='vscode/instalacao';$title='VS Code — Instalação';require __DIR__.'/../includes/header.php'; ?>
<section class="hero"><h1>VS Code: instalação e extensões</h1><p class="lead">O editor mais usado do mercado, gratuito e extensível.</p></section>
<ol class="steps">
  <li>Baixe o VS Code em <a href="https://code.visualstudio.com" target="_blank" rel="noopener">code.visualstudio.com</a> e instale.</li>
  <li>Instale o <strong>PHP</strong> (<a href="https://www.php.net/downloads" target="_blank" rel="noopener">php.net</a>; no Windows, XAMPP ou o zip oficial; no Linux/macOS use o gerenciador de pacotes) e confirme com <code>php -v</code> no terminal.</li>
  <li>Instale o <strong>Git</strong> (<a href="https://git-scm.com" target="_blank" rel="noopener">git-scm.com</a>) e crie uma conta no GitHub.</li>
  <li>Instale as extensões abaixo (Ctrl+Shift+X).</li>
</ol>
<h2>Extensões recomendadas</h2>
<div class="table-wrap"><table><tr><th>Extensão</th><th>Para quê</th></tr>
<tr><td>PHP Intelephense</td><td>Autocompletar, erros e navegação em PHP</td></tr>
<tr><td>Live Server</td><td>Recarrega páginas HTML/CSS/JS ao salvar (não executa PHP)</td></tr>
<tr><td>Prettier</td><td>Formatação automática de código</td></tr>
<tr><td>ESLint</td><td>Encontra erros e más práticas em JavaScript</td></tr>
<tr><td>GitLens</td><td>Histórico do Git dentro do editor</td></tr>
<tr><td>Docker</td><td>Útil para o deploy no Render com Dockerfile</td></tr></table></div>
<div class="callout">Atalhos que economizam tempo: <code>Ctrl+P</code> abrir arquivo · <code>Ctrl+Shift+P</code> comandos · <code>Ctrl+`</code> terminal · <code>Alt+↑/↓</code> mover linha.</div>

<?php require __DIR__.'/../includes/footer.php'; ?>
