<?php

include "config.php";

if (isset($_POST['aids'])&&isset($_POST['sids'])){

    $aid = $_POST['aids'];
    $sid = $_POST['sids'];

    echo $aid . " " . $sid . "<br>";

    $sql_statement = "INSERT INTO airporthasstore(id, sid)
					VALUES ('$aid','$sid')";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: airhasstoreinsert.php");

}

else
{

    echo "The form is not set.";

}


?>