<?php
// Menu lateral: agrupa $PAGES por grupo e marca a página ativa.
$groups = [];
foreach ($PAGES as $p) { $groups[$p[3]][] = $p; }
?>
<aside id="sidebar">
  <a class="logo" href="/"><span class="logo-mark">&lt;/&gt;</span> <?= SITE_NAME ?></a>
  <div class="search">
    <input id="search" type="search" placeholder="Buscar no conteúdo…" autocomplete="off" aria-label="Buscar">
    <ul id="search-results" hidden></ul>
  </div>
  <nav>
    <?php foreach ($groups as $g => $items): ?>
      <p class="nav-group"><?= htmlspecialchars($g) ?></p>
      <?php foreach ($items as $p): ?>
        <a href="<?= $p[1] ?>" data-id="<?= $p[0] ?>" class="<?= $p[0] === $pid ? 'active' : '' ?>"><?= htmlspecialchars($p[2]) ?></a>
      <?php endforeach; ?>
    <?php endforeach; ?>
  </nav>
  <p id="progress-text" class="muted small"></p>
  <button id="reset-progress" class="btn ghost small" type="button">Zerar progresso</button>
</aside>
