<?php $pid='javascript/como-funciona';$title='JavaScript — Como funciona';require __DIR__.'/../includes/header.php'; ?>
<section class="hero"><h1>JavaScript: como funciona</h1><p class="lead">O navegador carrega o script, monta o DOM e executa seu código em resposta a eventos.</p></section>
<h2>DOM e eventos</h2>
<?php code(<<<'C'
const lista = document.querySelector('#lista');
const li = document.createElement('li');
li.textContent = 'Novo item';
lista.appendChild(li);
C, 'javascript'); ?>
<h2>Assíncrono: fetch + async/await</h2>
<p>Operações lentas (rede) não travam a página: o JavaScript continua e trata o resultado quando chegar.</p>
<?php code(<<<'C'
async function carregar() {
  try {
    const r = await fetch('/api/hora.php');
    if (!r.ok) throw new Error('HTTP ' + r.status);
    console.log(await r.json());
  } catch (e) {
    console.error('Falha:', e.message);
  }
}
C, 'javascript'); ?>
<p>Teste com a API deste portal: <button class="btn small" id="t" type="button">Chamar /api/hora.php</button> <code id="out"></code></p>
<script>document.addEventListener('DOMContentLoaded',()=>{document.getElementById('t').onclick=async()=>{const o=document.getElementById('out');try{const r=await fetch('/api/hora.php');o.textContent=JSON.stringify(await r.json())}catch(e){o.textContent='erro: '+e.message}}})</script>
<h2>Arrays e objetos</h2>
<?php live(<<<'C'
<pre id="o"></pre>
<script>
  const alunos = [{n:'Ana',nota:9},{n:'Beto',nota:6},{n:'Cris',nota:8}];
  const aprovados = alunos.filter(a => a.nota >= 7).map(a => a.n);
  document.getElementById('o').textContent = 'Aprovados: ' + aprovados.join(', ');
</script>
C); ?>

<?php require __DIR__.'/../includes/footer.php'; ?>
