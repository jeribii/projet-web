<?php

?>

<html>

<head>

</head>

<body>
    <table>
    <form action="verification.php" method="post">
        <tr>
            <th><label for="fname">FirstName:</label></th>
            <th><input type="text" name="fname"></th>
        </tr>
        <tr>
            <th><label for="lname">Last Name:</label>
            <th><input type="text" name="lname"></th>
        </tr>
        <tr>
        <th><label for="tel">Phone</label></th>
        <th><input type="number" name="tel"></th>
        </tr>
        <tr>
        <th><label for="birth">Date of Birth</label></th>
        <th><input type="date" name="date"></th>
        </tr>
        <tr>
        <th><label for="psw">Password</label></th>
        <th><input type="password" name="psw"></th>
        </tr>
        <tr>
        <th><label for="Cpsw">Password</label></th>
        <th><input type="password" name="Cpsw"></th>
        </tr>
        <tr>
        <th><input type="submit" name="btn_sub"></th>
        <th><input type="reset" name="btn_rst" value="annuler"></th>
        </tr>
       

    </form>    
    </table>


</body>

</html>