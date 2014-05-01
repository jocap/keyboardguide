<?php

define('requri', $_SERVER['REQUEST_URI']);

function url($x = '') {
	foreach (glob('*.php') as $file) {
		$needle = substr($file, 0, -4) . "/";
		if ($needle === "" || substr(requri, -strlen($needle)) === $needle) {
			return "../$x";
		} else {
			return "./$x";
		}
	}
};

?>