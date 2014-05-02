<?php require 'config.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>KeyboardGuide</title>
	<meta charset="utf-8">
	<style><?= file_get_contents('style.css') ?></style>
	<script src="http://antimatter15.github.io/weppy/weppy.js"></script>
</head>
<body>
	<h1>KeyboardGuide</h1>
	<nav>
		<a href="<?=url('about/')?>">About</a><a href="<?=url('add/')?>">Add keyboard</a>
	</nav>

	<p><b style="font-weight:500">KeyboardGuide</b> is a website <em>in the works</em>, <em>under construction</em>, and <em>under way</em>.  Help us make the awesomest mechanical keyboard comparison site, check out the <a href="https://github.com/jocap/keyboardguide">GitHub repository</a>!
</body>
</html>