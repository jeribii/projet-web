<?php
include ('inscription.php');
include ('EmployeC.php');
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $phone=$_POST["tel"];
    $date=$_POST["date"];
    $psw=$_POST["psw"];
    $cpws=$_POST["Cpsw"];
    $employe=new employe($fname,$lname,$phone,$date,$psw,$cpws);
    var_dump($employe);
    echo show($employe);
?>