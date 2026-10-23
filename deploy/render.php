<?php $pid='deploy/render';$title='Deploy no Render';require __DIR__.'/../includes/header.php'; ?>
<section class="hero"><h1>Colocando seu site no ar com o Render</h1><p class="lead">O Render hospeda PHP via Docker. Este portal já inclui <code>Dockerfile</code> e <code>render.yaml</code>.</p></section>
<ol class="steps">
  <li><strong>Suba o código para o GitHub.</strong>
<?php code(<<<'C'
git init
git add .
git commit -m "Primeira versão"
git branch -M main
git remote add origin https://github.com/SEU-USUARIO/devportal.git
git push -u origin main
C, 'terminal'); ?></li>
  <li><strong>Confira o Dockerfile na raiz.</strong>
<?php code(<<<'C'
FROM php:8.3-cli
WORKDIR /app
COPY . /app
EXPOSE 10000
CMD ["sh", "-c", "php -S 0.0.0.0:${PORT:-10000} -t /app"]
C, 'Dockerfile'); ?></li>
  <li><strong>Crie a conta</strong> em <a href="https://render.com" target="_blank" rel="noopener">render.com</a> e conecte o GitHub.</li>
  <li><strong>New → Web Service</strong> e escolha o repositório. Em <em>Language</em>, selecione <strong>Docker</strong>.</li>
  <li><strong>Escolha o plano</strong> (há plano gratuito) e clique em <em>Create Web Service</em>. Aguarde o build.</li>
  <li><strong>Acesse a URL</strong> <code>https://seu-app.onrender.com</code>. A cada <code>git push</code> na branch principal, o Render publica de novo.</li>
</ol>
<h2>Alternativa: Blueprint (render.yaml)</h2>
<?php code(<<<'C'
services:
  - type: web
    name: devportal
    runtime: docker
    plan: free
C, 'yaml'); ?>
<h2>Problemas comuns</h2>
<ul>
  <li><strong>Site fora do ar logo no início:</strong> o servidor precisa escutar em <code>0.0.0.0</code> na porta da variável <code>PORT</code>, como no Dockerfile acima.</li>
  <li><strong>Primeiro acesso lento:</strong> no plano gratuito o serviço pode "dormir" por inatividade e acordar na próxima visita.</li>
  <li><strong>Segredos:</strong> senhas e chaves vão em <em>Environment</em> no painel, nunca no GitHub. Leia com <code>getenv('NOME')</code>.</li>
  <li><strong>Dados do localStorage</strong> ficam no navegador de cada visitante, não no servidor.</li>
</ul>
<div class="callout">Recursos e limites do plano gratuito mudam com o tempo. Confira a documentação oficial do Render antes de publicar algo importante.</div>

<?php require __DIR__.'/../includes/footer.php'; ?>
