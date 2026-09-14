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
		body{font-family:Arial,Helvetica,sans-serif;margin:0;min-height:100vh;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,#f4fbff,#fffaf3)}
		.card{max-width:760px;padding:34px;border-radius:12px;background:#fff;box-shadow:0 12px 30px rgba(11,22,46,0.08);text-align:center}
		h1{margin:0 0 8px;font-size:34px}
		p{color:#444;margin:8px 0 0}
		a.play{display:block;margin-top:20px;padding:12px 20px;background:#0b79ff;color:#fff;text-decoration:none;border-radius:8px;font-weight:600}
		a.play:hover{opacity:.95}
		small.info{display:block;margin-top:14px;color:#777}
	</style>
</head>
<body>
	<div class="card">
		<h1>Welcome to Enigma</h1>
		<p>Play our games, early and often!</p>
		<a class="play" href="synchrotron.html">Synchrotron</a>
		<a class="play" href="berserker.html">Berserker Sudoku</a>
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
