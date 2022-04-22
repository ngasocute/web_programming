<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <font size =4 color="blue">Welcome to Harry's Hardware Heaven?</font>
    <br>
    We sell it all for you? <br>
    <?php
        $time = date('H:i');
        function Calc_perc($buy, $sell){
            $per = (($sell -$buy)/$buy)*100;
            return ($per);
        }
    ?>
</body>
</html>