<?php

include "config.php";

if (isset($_POST['name'])){

    $aname = $_POST['name'];
    $acity = $_POST['city'];

    echo $aname . " " . $acity . "<br>";

    $sql_statement = "INSERT INTO airport(name,city)
					VALUES ('$aname','$acity')";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: airportinsert.php");

}

else
{

    echo "The form is not set.";

}


?>