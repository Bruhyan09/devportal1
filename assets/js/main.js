/* DevPortal — main.js
   Módulos: menu · progresso · copiar · exemplos ao vivo · quiz · busca · feedback */
(() => {
  const $ = (s, r = document) => r.querySelector(s);
  const $$ = (s, r = document) => [...r.querySelectorAll(s)];
  const store = {
    get(k, d) { try { const v = JSON.parse(localStorage.getItem(k)); return v ?? d; } catch { return d; } },
    set(k, v) { try { localStorage.setItem(k, JSON.stringify(v)); } catch {} }
  };
  const INDEX = window.SITE_INDEX || [];

  /* ---------- Menu mobile ---------- */
  const side = $('#sidebar');
  $('#menu-btn').addEventListener('click', () => side.classList.toggle('open'));
  document.addEventListener('click', e => {
    if (side.classList.contains('open') && !side.contains(e.target) && e.target.id !== 'menu-btn') side.classList.remove('open');
  });

  /* ---------- Progresso (páginas visitadas) ---------- */
  const pid = document.body.dataset.page;
  let seen = store.get('visited', []);
  if (pid && !seen.includes(pid)) { seen.push(pid); store.set('visited', seen); }
  function paintProgress() {
    const pct = INDEX.length ? Math.round(seen.length / INDEX.length * 100) : 0;
    $('#progress-bar').style.width = pct + '%';
    $('#progress').setAttribute('aria-valuenow', pct);
    $('#progress-text').textContent = `Progresso: ${seen.length}/${INDEX.length} páginas (${pct}%)`;
    $$('#sidebar a[data-id]').forEach(a => a.classList.toggle('done', seen.includes(a.dataset.id)));
  }
  paintProgress();
  $('#reset-progress').addEventListener('click', () => {
    if (confirm('Zerar progresso e notas dos quizzes?')) { seen = []; store.set('visited', []); store.set('quiz', {}); paintProgress(); }
  });

  /* ---------- Botão copiar ---------- */
  $$('pre.code').forEach(pre => {
    const b = document.createElement('button');
    b.className = 'copy'; b.type = 'button'; b.textContent = 'Copiar';
    b.addEventListener('click', async () => {
      try { await navigator.clipboard.writeText($('code', pre).innerText); b.textContent = 'Copiado ✓'; }
      catch { b.textContent = 'Selecione e copie'; }
      setTimeout(() => (b.textContent = 'Copiar'), 1600);
    });
    pre.appendChild(b);
  });

  /* ---------- Exemplos interativos (HTML/CSS/JS em iframe isolado) ---------- */
  $$('.live').forEach(box => {
    const ta = $('textarea', box), fr = $('iframe', box);
    const run = () => { fr.srcdoc = ta.value; };
    $('.run', box).addEventListener('click', run);
    ta.addEventListener('keydown', e => {            // Ctrl+Enter executa
      if (e.ctrlKey && e.key === 'Enter') run();
      if (e.key === 'Tab') { e.preventDefault(); const s = ta.selectionStart; ta.setRangeText('  ', s, ta.selectionEnd, 'end'); }
    });
    run();
  });

  /* ---------- Quiz ---------- */
  const QUIZZES = {
    php: [
      { q: 'Onde o código PHP é executado?', o: ['No navegador', 'No servidor', 'No banco de dados', 'No VS Code'], a: 1 },
      { q: 'Qual função cria um hash seguro de senha?', o: ['md5()', 'base64_encode()', 'password_hash()', 'crypt_simple()'], a: 2 },
      { q: 'Para reaproveitar header e rodapé em várias páginas, use:', o: ['include / require', 'echo', 'define', 'unset'], a: 0 }
    ],
    css: [
      { q: 'Qual propriedade ativa o Flexbox?', o: ['position: flex', 'display: flex', 'float: flex', 'layout: flex'], a: 1 },
      { q: 'O que significa "cascata" no CSS?', o: ['Animações em sequência', 'Regras combinadas por origem, especificidade e ordem', 'Carregar CSS em paralelo', 'Herança de HTML'], a: 1 },
      { q: 'Qual abordagem escreve o estilo base para celular e amplia em telas maiores?', o: ['Desktop-first', 'Mobile-first com min-width', 'Somente px fixos', 'Tabelas de layout'], a: 1 }
    ],
    javascript: [
      { q: 'Qual método seleciona o primeiro elemento que casa com um seletor CSS?', o: ['getElement()', 'querySelector()', 'findCss()', 'select()'], a: 1 },
      { q: 'Para buscar dados de uma API de forma assíncrona:', o: ['fetch()', 'sleep()', 'include()', 'require_once()'], a: 0 },
      { q: 'localStorage guarda dados:', o: ['Só até fechar a aba', 'No navegador, de forma persistente', 'No servidor PHP', 'No GitHub'], a: 1 }
    ]
  };
  $$('.quiz').forEach(box => {
    const key = box.dataset.quiz, qs = QUIZZES[key] || []; let i = 0, score = 0;
    const draw = () => {
      if (i >= qs.length) {
        const all = store.get('quiz', {}); all[key] = score; store.set('quiz', all);
        box.innerHTML = `<h3>Resultado: ${score}/${qs.length}</h3><p>${score === qs.length ? 'Perfeito! Você domina o básico desta seção.' : 'Revise as páginas da seção e tente de novo.'}</p><button class="btn" type="button">Refazer</button>`;
        $('button', box).onclick = () => { i = 0; score = 0; draw(); };
        return;
      }
      const q = qs[i], best = store.get('quiz', {})[key];
      box.innerHTML = `<p class="muted small">Quiz · pergunta ${i + 1} de ${qs.length}${best != null ? ` · melhor nota: ${best}/${qs.length}` : ''}</p><p class="q"></p>`;
      $('.q', box).textContent = q.q;
      q.o.forEach((txt, n) => {
        const b = document.createElement('button');
        b.className = 'opt'; b.type = 'button'; b.textContent = txt;
        b.onclick = () => {
          $$('.opt', box).forEach(x => (x.disabled = true));
          b.classList.add(n === q.a ? 'right' : 'wrong');
          if (n === q.a) score++; else $$('.opt', box)[q.a].classList.add('right');
          const next = document.createElement('button');
          next.className = 'btn'; next.type = 'button'; next.textContent = i + 1 < qs.length ? 'Próxima' : 'Ver resultado';
          next.onclick = () => { i++; draw(); }; box.appendChild(next);
        };
        box.appendChild(b);
      });
    };
    draw();
  });

  /* ---------- Busca em tempo real ---------- */
  const inp = $('#search'), res = $('#search-results');
  const norm = s => s.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
  inp.addEventListener('input', () => {
    const t = norm(inp.value.trim()); res.innerHTML = '';
    if (!t) { res.hidden = true; return; }
    const hits = INDEX.filter(p => norm(`${p.title} ${p.group} ${p.kw}`).includes(t)).slice(0, 8);
    res.hidden = false;
    if (!hits.length) { res.innerHTML = '<li class="muted small" style="padding:.5rem">Nada encontrado.</li>'; return; }
    hits.forEach(p => { const li = document.createElement('li'); li.innerHTML = `<a href="${p.url}"></a>`; $('a', li).textContent = p.title; res.appendChild(li); });
  });
  document.addEventListener('keydown', e => { if (e.key === '/' && document.activeElement.tagName !== 'TEXTAREA' && document.activeElement.tagName !== 'INPUT') { e.preventDefault(); side.classList.add('open'); inp.focus(); } });

  /* ---------- Feedback / comentários (localStorage) ---------- */
  const fb = $('#feedback');
  if (fb) {
    fb.innerHTML = `<form class="fb-form"><input name="n" placeholder="Seu nome (opcional)" maxlength="40"><textarea name="m" rows="3" placeholder="Escreva sua dúvida, sugestão ou elogio" required maxlength="500"></textarea><button class="btn" type="submit">Enviar comentário</button></form><div id="fb-list"></div>`;
    const list = $('#fb-list', fb);
    const render = () => {
      const items = store.get('feedback', []); list.innerHTML = '';
      if (!items.length) { list.innerHTML = '<p class="muted">Ainda não há comentários. Seja o primeiro.</p>'; return; }
      items.slice().reverse().forEach((c, idx) => {
        const d = document.createElement('div'); d.className = 'fb-item';
        d.innerHTML = '<strong></strong> <small></small><p></p><button class="btn ghost small" type="button">Excluir</button>';
        $('strong', d).textContent = c.n || 'Anônimo'; $('small', d).textContent = c.d; $('p', d).textContent = c.m;
        $('button', d).onclick = () => { const a = store.get('feedback', []); a.splice(a.length - 1 - idx, 1); store.set('feedback', a); render(); };
        list.appendChild(d);
      });
    };
    $('form', fb).addEventListener('submit', e => {
      e.preventDefault(); const f = e.target, a = store.get('feedback', []);
      a.push({ n: f.n.value.trim(), m: f.m.value.trim(), d: new Date().toLocaleString('pt-BR') });
      store.set('feedback', a); f.reset(); render();
    });
    render();
  }

  /* ---------- Entrada suave dos cards (uma vez, ao carregar) ---------- */
  $$('.grid .card').forEach((c, i) => { c.classList.add('reveal'); c.style.animationDelay = i * 60 + 'ms'; });
})();
