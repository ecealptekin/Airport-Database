<?php

include "config.php";

if (isset($_POST['pids'])&&isset($_POST['fids'])){

    $fid = $_POST['fids'];
    $pid = $_POST['pids'];

    echo $fid . " " . $pid . "<br>";

    $sql_statement = "INSERT INTO passengerflights(fid, pid)
					VALUES ('$fid','$pid')";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: pasrelflyinsert.php");

}

else
{

    echo "The form is not set.";

}


?>