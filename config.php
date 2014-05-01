<?php

function url($x = '') {
	$url = $_SERVER['REQUEST_URI'];
	foreach (glob('*.php') as $file) {
		$needle = substr($file, 0, -4) . "/";
		if ($needle === "" || substr($url, -strlen($needle)) === $needle) {
			return "../$x";
		} else {
			return "./$x";
		}
	}
};

?>