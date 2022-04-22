<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("header.php");
$buy = 2.50;
$sell = 10.00;
print "<br>It is $time.";
print "We have hammers on special for \$$sell!";
$markup = Calc_perc($buy, $sell);
print "<br>Our markup is only $markup%!!";
?>
</body>
</html>