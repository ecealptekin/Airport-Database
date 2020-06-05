<?php

include "config.php";

if (isset($_POST['fdep'])){

    $fdep = $_POST['fdep'];
    $farr = $_POST['farr'];

    echo $farr . " " . $fdep . " " .  "<br>";

    $sql_statement = "INSERT INTO flights(dep_hour, arrival)
					VALUES ('$fdep','$farr')";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: flightinsert.php");

}

else
{

    echo "The form is not set.";

}


?>