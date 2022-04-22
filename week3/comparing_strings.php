<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Comparison Results</title>
</head>
<body>
    <?php
    $first = $_POST["first"];
    $second = $_POST["second"];
    print ("First = $first and Second=$second </br>");
    if ($first < $second){
        print ("$first is less then $second");
    }
    if ($first == $second){
        print ("$first and $second is equal");
    }
    if ($first > $second){
        print ("$first is lager than $second");
    }
    ?>
</body>
</html>