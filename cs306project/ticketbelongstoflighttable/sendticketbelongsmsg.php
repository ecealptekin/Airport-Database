<?php

include "config.php";

if (isset($_POST['fids'])&&isset($_POST['tids'])){

    $tid = $_POST['tids'];
    $fid = $_POST['fids'];

    $sql_command = "SELECT * FROM tickets where tid= $tid";

    $myresult = mysqli_query($db, $sql_command);

    while ($id_rows = mysqli_fetch_assoc($myresult)) {
        $tprice = $id_rows['price'];
        $tdate = $id_rows['date'];
        $tseat = $id_rows['seat'];
    }

    echo $tid . " " . $tprice . " " . $tseat . " " . $tdate .  " " . $fid . "<br>";

    $sql_statement = "INSERT INTO ticket_belongs_to_flight(fid, price, seat, date, tid)
					VALUES ('$fid','$tprice','$tseat','$tdate','$tid')";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: ticketbelongsinsert.php");

}

else
{

    echo "The form is not set.";

}


?>