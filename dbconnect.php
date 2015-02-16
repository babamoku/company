<?php
$db = mysqli_connect('localhost', 'root', '') or die(mysqli_connect_error());
mysqli_select_db('company');
mysqli_query('SET NAMES UTF8');
?>