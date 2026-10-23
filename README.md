# DevPortal
Portal educativo de PHP, CSS e JavaScript.

## Rodar local
    php -S localhost:8000
Abra http://localhost:8000

## Deploy (Render)
1. `git init && git add . && git commit -m "v1"` e envie para o GitHub.
2. No Render: New → Web Service → escolha o repo → Language: Docker → Create.
(ou use o render.yaml via Blueprint)

## Adicionar página
Crie o arquivo .php (copie uma página existente) e registre em includes/config.php ($PAGES).
