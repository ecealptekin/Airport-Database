<?php

include "config.php";

if (isset($_POST['tprice'])){

    $tprice = $_POST['tprice'];
    $tseat = $_POST['tseat'];
    $tdate = $_POST['tdate'];

    echo $tprice . " " . $tseat . " " . $tdate . "<br>";

    $sql_statement = "INSERT INTO tickets(price, seat, date)
					VALUES ('$tprice','$tseat','$tdate')";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: ticketinsert.php");

}

else
{

    echo "The form is not set.";

}


?>