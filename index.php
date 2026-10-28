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
	</style>
</head>
<body>
	<div class="card">
		<h1>Welcome to Enigma</h1>
		<p class="tag">Play our games, early and often!</p>
		<nav>
			<a class="play" href="synchrotron.html">Synchrotron<span>Daily word-circuit puzzle</span></a>
			<a class="play" href="berserker.html">Berserker Sudoku<span>Sudoku with a vicious twist</span></a>
			<a class="play" href="numerals.html">Numeral Puzzles<span>Numbers, cleverly arranged</span></a>
		</nav>
		<!-- small class="info">Upload index.php and the game file (synchrotron.html). The game file currently redirects to the original (synchrotron_4.html) to preserve the original content.</small -->
	</div>
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
