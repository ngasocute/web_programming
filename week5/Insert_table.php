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
    $host = 'localhost';
    $user = 'root';
    $passwd = '16062000';
    $database = 'mydatabase';
    $connect = mysqli_connect($host, $user, $passwd);
    $table_name= 'Products';
    $query = "INSERT INTO $table_name VALUES ('0','$Item','$Cost','$Weight','$Quantity')";
    print "The Query is <i>$query</i><br>";
    mysqli_select_db($connect,$database);
    print '<br><font size="4" color="blue">';
    if (mysqli_query($connect,$query)){
        print "Insert into $database was successful!</font>";
    } else {
        print "Insert into $database failed!</font>";
    } mysqli_close($connect);
    ?>
</body>
</html>