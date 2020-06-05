<?php

include "config.php";

if (isset($_POST['fids'])&&isset($_POST['acids'])){

    $acid = $_POST['acids'];
    $fid = $_POST['fids'];

    $sql_command = "SELECT * FROM flights where fid= $fid";

    $myresult = mysqli_query($db, $sql_command);

    while ($id_rows = mysqli_fetch_assoc($myresult)) {
        $farr = $id_rows['arrival'];
        $fdep = $id_rows['dep_hour'];
    }

    echo $fid . " " . $fdep . " " . $farr . " " . $acid . "<br>";

    $sql_statement = "INSERT INTO flight_belong_to_company(fid, dep_hour, arrival, acid)
					VALUES ('$fid','$fdep','$farr','$acid')";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: flightbelongsinsert.php");

}

else
{

    echo "The form is not set.";

}


?>