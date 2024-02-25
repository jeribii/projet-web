<?php
include ('workshop5_employe.php');
function show($employe){
    $Fname=$employe->getFirstName();
    $Lname=$employe->getLastName();
    $psw=$employe->getPassword();
    $phone=$employe->getPhone();
    $mail=$employe->getEmail();
    $dob=$employe->getDOB();
    $html='<table border="1">';
    $html.='<tr>';
    $html.='<th>LastName</th>';
    $html.='<th>FirstName</th>';
    $html.='<th>Password</th>';
    $html.='<th>Phone</th>';
    $html.='<th>Email</th>';
    $html.='<th>Date of birth</th>';
    $html.='</tr>';
    $html.='<tr>';
    $html .= '<th>' . $Fname . '</th>';
    $html .= '<th>' . $Lname . '</th>';
    $html .= '<th>' . $psw . '</th>';
    $html .= '<th>' . $phone . '</th>';
    $html .= '<th>' . $mail . '</th>';
    $html .= '<th>' . $dob . '</th>';
    $html.='</tr>';
    $html.='</table>';
    return $html;
}

?>