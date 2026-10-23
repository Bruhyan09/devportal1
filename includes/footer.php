</main>
<script>
  // Índice de busca/progresso gerado a partir de includes/config.php
  window.SITE_INDEX = <?= json_encode(array_map(fn($p) => ['id'=>$p[0],'url'=>$p[1],'title'=>$p[2],'group'=>$p[3],'kw'=>$p[4]], $PAGES), JSON_UNESCAPED_UNICODE) ?>;
</script>
<script src="/assets/js/main.js" defer></script>
</body>
</html>
