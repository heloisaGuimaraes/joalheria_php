<?php
function meu_autoloader($classe) {
	include_once "{$classe}.class.php";
}
spl_autoload_register('meu_autoloader');
?>