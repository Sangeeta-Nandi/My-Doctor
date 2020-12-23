<?php /*?><?php
session_start();
header("location: index.php");

session_destroy();
?><?php */?>

<?php

session_start();
session_destroy();
echo "<script>window.open('index.php','_self')</script>";




?>