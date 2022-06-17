<html>
<head>
    <title></title>
</head>
<body>
<?php
if (array_key_exists("user", $_POST)) {
    $user1 = $_POST["user1"];
    $date1 = $_POST["date1"];
    $user2 = $_POST["user2"];
    $date2 = $_POST["date2"];
} else {
    $user1 = "";
    $user2 = "";
}
?>

<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    <p>User1's name : <input type="text" value="<?php echo $user1 ?>" name="user1"></p>
    <p>User1's birthday: <input type="date" value="<?php echo $user1 ?>" name="date1"></p>
    <p>User2's name : <input type="text" value="<?php echo $user2 ?>" name="user2"></p>
    <p>User2's birthday: <input type="date" value="<?php echo $user2 ?>" name="date2"></p>
    <td><input type="submit" value="Submit"></td>
    <td><input type="reset" value="Reset"></td>
    
</form>

<?php
$today = date("Y-m-d");
$today1 = strtotime($today);
if (array_key_exists("user1", $_POST)) {
    //user1
    $user1 = $_POST["user1"];
    $date1 = $_POST["date1"];
    $dateBirth1 = strtotime($date1);
    $newDate1 = date('l, F d, Y', $dateBirth1);
    print "$newDate1";

    //user2
    $user2 = $_POST["user2"];
    $date2 = $_POST["date2"];
    $dateBirth2 = strtotime($date2);
    $newDate2 = date('l, F d, Y', $dateBirth2);

    //compare 2 user


    $diff = abs($dateBirth2 - $dateBirth1);
    $years = floor($diff / (365 * 60 * 60 * 24));
    $months = floor(($diff - $years * 365 * 60 * 60 * 24)
        / (30 * 60 * 60 * 24));
    $dayDiff = floor(($diff - $years * 365 * 60 * 60 * 24 -
            $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

    //user1 : year
    $yearUser1 = abs($today1 - $dateBirth1);
    $year1 = floor($yearUser1 / (365 * 60 * 60 * 24));

    //user2 : year
    $yearUser2 = abs($today1 - $dateBirth2);
    $year2 = floor($yearUser2 / (365 * 60 * 60 * 24));
//print

    print "<p>User1 's name : $user1</p>";
    print "<p>User1 's birthday : $newDate1</p>";
    print "<p>User1 is $year1 years old.</p>";
    print "<p>User2 's name : $user2</p>";
    print "<p>User2 's birthday : $newDate2</p>";
    print "<p>User2 is $year2 years old.</p>";
    print "<p>The difference in days between two dates : $dayDiff days</p>";
    print "<p>The difference years between two persons : $years years </p>";
}


?>
</body>
</html>
