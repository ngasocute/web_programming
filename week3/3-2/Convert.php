<!DOCTYPE html>
<head>
    <title>Convert radians and degress</title>
</head>

<body>
    <form method="post">
        <h3>Choose radians or degress</h3>
        <table>
            <tr>
                <td><input type="radio" name="choose" value="1"> Radians to Degress</td>
                <td><input type="radio" name="choose" value="2"> Degress to Radians </td>
            </tr>
        </table>
        <br>
        <input type="text" size="12" maxlength="20" name="number"><br>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
<?php
    function R_to_D($radians)
    {
        return $radians * (180 / pi());
    }
    function D_to_R($degrees)
    {
        return $degrees * pi() / 180;
    }
    $input = $_POST['number'];

    if( $input == null || empty($_POST['choose'])){
        print "Please enter all!!";
    }else{
        $choose = $_POST['choose'];
        if ($choose == 1) {
            $result =   R_to_D($input);
            print "Convert to degrees: $result";
        } else {
            $result =   D_to_R($input);
            print "Convert to radians $result";
        }
    }
?>
