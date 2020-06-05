<?php

include "config.php";

if (isset($_POST['pids'])&&isset($_POST['tids'])){

    $tid = $_POST['tids'];
    $pid = $_POST['pids'];

    $sql_command = "SELECT * FROM passenger where pid= $pid";

    $myresult = mysqli_query($db, $sql_command);

    while ($id_rows = mysqli_fetch_assoc($myresult)) {
        $pname = $id_rows['pname'];
        $address = $id_rows['address'];
    }

    echo $pid . " " . $pname . " " . $address . " " . $tid . "<br>";

    $sql_statement = "INSERT INTO pass_purchased_info(pid, pname, address, tid)
					VALUES ('$pid','$pname','$address','$tid')";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: purchasedinfoinsert.php");

}

else
{

    echo "The form is not set.";

}


?>