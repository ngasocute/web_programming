<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Table Function</title>
</head>
<body>
    <font color="blue" size="4"> Here Is a simple Table </font>
        <table border="1">
            <?php
                function OutputTableRow(){
                    print 
                    '<tr><td>One</td>
                    <td>Two</td></tr>';
                }
                OutputTableRow();
                OutputTableRow();
                OutputTableRow();
            ?>
        </table>
</body>
</html>