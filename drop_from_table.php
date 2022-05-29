<?php

$con = new mysqli("localhost", "root", "root", "test_bd") or die($mysqli -> connection_error);

$account_id = $_POST["account_id"];

if ( empty($errors) == true ){
    $sql = "DELETE FROM accounts WHERE id = '$account_id'";
    if ( mysqli_query($con, $sql) ){
        echo "account has been deleted";
    } else {
        echo mysqli_error($con);
    }
};
?>