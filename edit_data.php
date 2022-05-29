<?php
$con = new mysqli("localhost", "root", "root", "test_bd") or die($mysqli -> connection_error);

$First_name = $_POST['First_Name'];
$Last_name = $_POST['Last_Name'];
$E_mail = $_POST['E_mail'];

$Telephone_number1 = $_POST['Telephone_number1'];
$Telephone_number2 = $_POST['Telephone_number2'];
$Telephone_number3 = $_POST['Telephone_number3'];
$Position_cont = $_POST['Position_cont'];
$Company_Name = $_POST['Company_Name'];

$account_id = $_POST['Account'];


if ( empty($errors) == true ){
    $sql = "UPDATE accounts SET First_name = '$First_name', Last_name = '$Last_name', E_mail = '$E_mail', Telephone_number1 = '$Telephone_number1', Telephone_number2 = '$Telephone_number2', Telephone_number3 = '$Telephone_number3', Position_cont = '$Position_cont', Company_Name = '$Company_Name' WHERE id = $account_id";
    if ( mysqli_query($con, $sql) ){
        echo "record update";
    } else {
        echo mysqli_error($con);
    }
};


?>