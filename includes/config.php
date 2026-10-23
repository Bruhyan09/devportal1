<?php
/**
 * config.php — configuração central e fonte única do menu / índice de busca.
 * Para adicionar uma página, inclua uma linha em $PAGES.
 * Formato: [id, url, título, grupo, palavras-chave]
 */
define('SITE_NAME', 'DevPortal');

$PAGES = [
  ['home',                 '/',                              'Início',                  'Começar',   'home inicio trilha'],
  ['php/index',            '/php/',                          'PHP — Visão geral',       'PHP',       'php quiz exemplo'],
  ['php/utilidade',        '/php/utilidade.php',             'PHP — Utilidade',         'PHP',       'php servidor backend utilidade'],
  ['php/como-funciona',    '/php/como-funciona.php',         'PHP — Como funciona',     'PHP',       'php requisição includes sessão formulário'],
  ['php/onde-usar',        '/php/onde-usar.php',             'PHP — Onde usar',         'PHP',       'php wordpress laravel api mercado'],
  ['css/index',            '/css/',                          'CSS — Visão geral',       'CSS',       'css quiz exemplo estilo'],
  ['css/utilidade',        '/css/utilidade.php',             'CSS — Utilidade',         'CSS',       'css layout design utilidade'],
  ['css/como-funciona',    '/css/como-funciona.php',         'CSS — Como funciona',     'CSS',       'css cascata especificidade flexbox grid'],
  ['css/onde-usar',        '/css/onde-usar.php',             'CSS — Onde usar',         'CSS',       'css responsivo design system tailwind'],
  ['javascript/index',     '/javascript/',                   'JavaScript — Visão geral','JavaScript','javascript js quiz exemplo'],
  ['javascript/utilidade', '/javascript/utilidade.php',      'JavaScript — Utilidade',  'JavaScript','javascript interatividade utilidade'],
  ['javascript/como-funciona','/javascript/como-funciona.php','JavaScript — Como funciona','JavaScript','javascript dom eventos fetch async'],
  ['javascript/onde-usar', '/javascript/onde-usar.php',      'JavaScript — Onde usar',  'JavaScript','javascript react node spa mercado'],
  ['vscode/instalacao',    '/vscode/instalacao.php',         'VS Code — Instalação',    'VS Code',   'vscode instalar extensões php intelephense'],
  ['vscode/estrutura-projeto','/vscode/estrutura-projeto.php','VS Code — Estrutura do projeto','VS Code','pastas estrutura projeto php includes'],
  ['vscode/servidor-local','/vscode/servidor-local.php',     'VS Code — Servidor local','VS Code',   'servidor local php -S localhost terminal'],
  ['deploy/render',        '/deploy/render.php',             'Deploy no Render',        'Deploy',    'render deploy docker github online'],
  ['projetos/index',       '/projetos/',                     'Projetos — Downloads',    'Projetos',  'projetos download zip'],
  ['projetos/projeto-crud','/projetos/projeto-crud.php',     'Projeto CRUD',            'Projetos',  'crud tarefas criar editar excluir'],
  ['projetos/projeto-login','/projetos/projeto-login.php',   'Projeto Login',           'Projetos',  'login cadastro senha hash sessão'],
  ['mercado/index',        '/mercado/',                      'Mercado de trabalho',     'Mercado',   'mercado vagas carreira portfólio github'],
];

/** Bloco de código copiável (o botão "Copiar" é criado pelo main.js). */
function code(string $src, string $lang = ''): void {
  echo '<pre class="code" data-lang="' . htmlspecialchars($lang) . '"><code>' . htmlspecialchars(trim($src)) . "</code></pre>\n";
}

/** Exemplo interativo: textarea editável + botão Executar + resultado (iframe). */
function live(string $src): void {
  echo '<div class="live"><textarea spellcheck="false" aria-label="Código editável">' . htmlspecialchars(trim($src)) . '</textarea>'
     . '<div class="live-bar"><button type="button" class="btn run">▶ Executar</button><span>Edite o código e clique em executar</span></div>'
     . '<iframe sandbox="allow-scripts" title="Resultado"></iframe></div>' . "\n";
}
