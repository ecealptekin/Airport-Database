<?php

include "config.php";

if (isset($_POST['eids'])&&isset($_POST['pids'])){

    $eid = $_POST['eids'];
    $pid = $_POST['pids'];

    echo $eid . " " . $pid . "<br>";

    $sql_statement = "INSERT INTO empservestopass(eid, pid)
					VALUES ('$eid','$pid')";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: serviceinsert.php");

}

else
{

    echo "The form is not set.";

}


?>