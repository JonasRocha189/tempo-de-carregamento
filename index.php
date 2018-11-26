<?php
include 'funcao.php';

// Define uma constante contendo o microtime atual
define('mTIME', tempoExecucao());
// Sleep for a while
usleep(1000000 * 5);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<img src="imagem.jpg">
</body>
</html>

<?php 


echo gmdate("H:i:s", mTIME);

?>