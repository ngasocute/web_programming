<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <font size="5" color="blue">
        Generate Square and Cube Values </font><br>
    <form action="for_loop.php" method="POST">
        <?php
        print("Select start number");
        print("<select name = \"start\"> ");
        for ($i=0 ;$i<10; $i++){
            print("<option>$i</option>");
        }
        print ("</select>");
        ?>
        <br><input type="submit" value="Submit">
        <input type="reset" value="Clear and Restart">
    </form>
</body>
</html>