<?php
/**
 * Helper functions
 */

function loadTemplate($templateName, $args = null) {
	$data = $args;
	include (__ROOT__ . '/templates/' . $templateName);
}

function loadController($controllerName) {
	include (__ROOT__ . '/controller/' . $controllerName . '.php');
}