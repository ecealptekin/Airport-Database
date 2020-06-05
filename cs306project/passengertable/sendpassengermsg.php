<?php

include "config.php";

if (isset($_POST['pname'])){

    $pname = $_POST['pname'];
    $address = $_POST['address'];

    echo $pname . " " . $address . "<br>";

    $sql_statement = "INSERT INTO passenger(pname, address)
					VALUES ('$pname','$address')";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: passengerinsert.php");

}

else
{

    echo "The form is not set.";

}


?>