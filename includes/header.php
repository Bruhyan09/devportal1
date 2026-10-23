<?php require_once __DIR__ . '/config.php';
$pid   = $pid   ?? 'home';
$title = $title ?? SITE_NAME; ?>
<!DOCTYPE html>
<html lang="pt-BR" data-theme="dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($title) ?> · <?= SITE_NAME ?></title>
  <meta name="description" content="Portal educativo: PHP, CSS e JavaScript na prática, do VS Code ao deploy no Render.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body data-page="<?= htmlspecialchars($pid) ?>">
<div id="progress" role="progressbar" aria-label="Progresso geral"><span id="progress-bar"></span></div>
<button id="menu-btn" type="button" aria-label="Abrir menu">☰</button>
<?php include __DIR__ . '/nav.php'; ?>
<main class="content">
