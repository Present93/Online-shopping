<?php

$dbcon=mysqli_connect("localhost","root","","shop")or die(mysql_error());
mysqli_select_db($dbcon,"shop")or die(mysql_error());
?>