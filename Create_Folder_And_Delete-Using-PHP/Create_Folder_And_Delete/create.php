<?php
$dir = $_POST['folder_name'];
mkdir($dir,777);
header("Location:index.php");
?>
