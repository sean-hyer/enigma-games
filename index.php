<?php
// Simple landing page for Synchrotron game. Suitable for Hostinger file manager upload.
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Synchrotron — Play Online</title>
	<style>
		*{box-sizing:border-box}
		body{font-family:system-ui,-apple-system,"Segoe UI",Roboto,Arial,sans-serif;margin:0;min-height:100vh;display:flex;align-items:center;justify-content:center;padding:24px;color:#e9ecff;
			background:radial-gradient(circle at 20% 15%,#3b2f8f 0,transparent 45%),radial-gradient(circle at 85% 85%,#0b79ff55 0,transparent 50%),#0d1030}
		.card{width:100%;max-width:560px;padding:40px 32px;border-radius:20px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.15);backdrop-filter:blur(10px);-webkit-backdrop-filter:blur(10px);box-shadow:0 20px 50px rgba(0,0,0,.4);text-align:center}
		h1{margin:0 0 8px;font-size:40px;letter-spacing:.5px;background:linear-gradient(90deg,#8fd3ff,#c9a8ff);-webkit-background-clip:text;background-clip:text;color:transparent}
		p.tag{color:#b8bfe8;margin:0 0 28px;font-size:17px}
		nav{display:flex;flex-direction:column;gap:14px}
		a.play{display:flex;flex-direction:column;gap:2px;padding:16px 20px;color:#fff;text-decoration:none;border-radius:12px;font-weight:700;font-size:19px;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.18);transition:transform .15s,background .15s,box-shadow .15s}
		a.play span{font-weight:400;font-size:14px;color:#b8bfe8}
		a.play:hover,a.play:focus-visible{transform:translateY(-3px);background:linear-gradient(135deg,#0b79ff,#7a5cff);box-shadow:0 10px 24px rgba(11,121,255,.35);outline:none}
		a.play:hover span,a.play:focus-visible span{color:#e9ecff}
		#useless{display:flex;flex-direction:column;gap:2px;width:100%;margin-top:22px;padding:16px 20px;border-radius:12px;border:1px solid rgba(255,255,255,.18);background:rgba(255,255,255,.1);color:#fff;font:inherit;font-size:19px;font-weight:700;cursor:pointer;transition:transform .15s,background .15s,box-shadow .15s}
		#useless span{font-weight:400;font-size:14px;color:#b8bfe8}
		#useless:hover,#useless:focus-visible{transform:translateY(-3px);background:linear-gradient(135deg,#0b79ff,#7a5cff);box-shadow:0 10px 24px rgba(11,121,255,.35);outline:none}
		#useless:hover span,#useless:focus-visible span{color:#e9ecff}
		#useless:disabled{opacity:.5;cursor:default}
		#uselessBox{display:none;position:fixed;left:50%;top:50%;transform:translate(-50%,-50%);z-index:10;width:280px;padding:16px;border-radius:12px;background:#1b1f4d;border:1px solid rgba(255,255,255,.25);box-shadow:0 20px 50px rgba(0,0,0,.6)}
		#uselessBox textarea{width:100%;height:80px;border-radius:8px;border:1px solid rgba(255,255,255,.2);background:#0d1030;color:#e9ecff;padding:8px;font:inherit}
		#uselessClose{position:absolute;top:4px;right:8px;background:none;border:0;color:#e9ecff;font-size:20px;cursor:pointer}
		#fakeCursor{display:none;position:fixed;left:0;top:0;z-index:20;width:0;height:0;pointer-events:none;border-left:7px solid transparent;border-right:7px solid transparent;border-bottom:20px solid #fff;filter:drop-shadow(0 0 2px #000);transform-origin:50% 0;rotate:-25deg;transition:left .9s ease-in-out,top .9s ease-in-out}
	</style>
</head>
<body>
	<div class="card">
		<h1>Welcome to Enigma</h1>
		<p class="tag">Play our games, early and often!</p>
		<nav>
			<a class="play" href="synchrotron.html">Synchrotron<span>Daily word-circuit puzzle</span></a>
			<a class="play" href="berserker.html">Berserker Sudoku<span>Sudoku with a vicious twist</span></a>
			<a class="play" href="numerals.html">Numeral Puzzles<span>Roman Numerals, but... better?</span></a>
		</nav>
		<button id="useless" type="button">Useless button<span>Absolutely no purpose</span></button>
		<!-- small class="info">Upload index.php and the game file (synchrotron.html). The game file currently redirects to the original (synchrotron_4.html) to preserve the original content.</small -->
	</div>
<div id="uselessBox">
	<button id="uselessClose" type="button" aria-label="Close">&times;</button>
	<textarea placeholder="Type something useless..."></textarea>
</div>
<div id="fakeCursor"></div>
<script>
(function(){
  var btn=document.getElementById('useless'),box=document.getElementById('uselessBox'),
      x=document.getElementById('uselessClose'),cur=document.getElementById('fakeCursor');
  btn.addEventListener('click',function(){
    btn.disabled=true;
    box.style.display='block';
    var b=btn.getBoundingClientRect(),c=x.getBoundingClientRect();
    cur.style.transition='none';
    cur.style.left=(b.left+b.width/2)+'px';
    cur.style.top=(b.top+b.height/2)+'px';
    cur.style.display='block';
    void cur.offsetWidth;
    setTimeout(function(){
      cur.style.transition='';
      cur.style.left=(c.left+c.width/2)+'px';
      cur.style.top=(c.top+c.height/2)+'px';
    },700);
    setTimeout(function(){
      x.style.background='rgba(255,255,255,.3)';
    },1600);
    setTimeout(function(){
      box.style.display='none';
      cur.style.display='none';
      x.style.background='none';
      box.querySelector('textarea').value='';
      btn.disabled=false;
    },1900);
  });
})();
</script>
<script>
  window.goatcounter = {
    path: function (p) {
      return (p === '/index.php' || p === '') ? '/' : p;
    }
  };
</script>
<script data-goatcounter="https://enigmagames.goatcounter.com/count"
        async src="//gc.zgo.at/count.js"></script>
</body>
</html>
