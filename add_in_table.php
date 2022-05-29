<?php

$con = new mysqli("localhost", "root", "root", "test_bd") or die($mysqli -> connection_error);

$First_name = $_POST['First_Name']; - 
$Last_name = $_POST['Last_Name'];
$E_mail = $_POST['E_mail'];

$Telephone_number1 = $_POST['Telephone_number1'];
$Telephone_number2 = $_POST['Telephone_number2'];
$Telephone_number3 = $_POST['Telephone_number3'];
$Position_cont = $_POST['Position_cont'];
$Company_Name = $_POST['Company_Name'];

if ( empty($errors) == true ){
    $sql = "INSERT INTO accounts (First_name, Last_name, E_mail, Telephone_number1, Telephone_number2, Telephone_number3, Position_cont, Company_Name) VALUES('$First_name', '$Last_name', '$E_mail', '$Telephone_number1', '$Telephone_number2', '$Telephone_number3', '$Position_cont', '$Company_Name')";
    if ( mysqli_query($con, $sql) ){
        echo "record add";
    } else {
        echo mysqli_error($con);
    }
};


?>
