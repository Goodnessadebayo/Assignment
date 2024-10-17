<?php
$username='root';
$password='';
$server='localhost';
$DBname='advanceproject';

$conn=mysqli_connect($server,$username,$password,$DBname) or die(mysqli_error($conn));