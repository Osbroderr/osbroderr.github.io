<?php

$file = 'index.php';

header('Content-Disposition: attachment; filename="'.basename($file).'"');
header('Content-Type: application/octet-stream');
header('Content-Length: ' . filesize($file));
readfile($file);

?>
