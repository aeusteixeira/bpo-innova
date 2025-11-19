<?php
// Teste do sobre.php
$page_title = 'Teste Sobre';
$page_content = '
<h1>Teste do Sobre.php</h1>
<p>Base path: "' . $base_path . '"</p>
<p>Script: ' . ($_SERVER['SCRIPT_FILENAME'] ?? 'not found') . '</p>
<img src="' . $base_path . 'img/sobre/origem.jpg" style="max-width: 300px;" />
';

include 'template.php';
?>
